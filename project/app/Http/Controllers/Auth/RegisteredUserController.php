<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        
        $parent = '/'. $request->input('parent');
        $request->validate([
            'name' => ['nullable','string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'min:5'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->name == null || !isset($request->name) ) {
            $uName = 'user'.time();
        } else {
            $uName = $request->name;
        }
        Auth::logout();
        $user = User::create([
            'phone' => $request->phone,
            'name' => $uName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect($parent);
    }
}
