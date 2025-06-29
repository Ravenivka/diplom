<style>
    .reg_main {
        background-color: rgb(17 24 39);
        width: 100%;
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>



<div class="reg_main">
    
    <form method="POST" action="{{ route('register') }}">
        <div style="display: flex; justify-content: center;">
            <a href="/">
                <svg width="160px" height="160px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                	<defs><style>.a{fill:none;stroke:rgb(200 200 200);stroke-linecap:round;stroke-linejoin:round;}</style></defs>	
                	<path class="a" d="M5.5,6.6H34.59a0,0,0,0,1,0,0V28.69a7,7,0,0,1-7,7H12.5a7,7,0,0,1-7-7V6.6A0,0,0,0,1,5.5,6.6Z"/>
                	<path class="a" d="M34.59,6.6H40.5a2,2,0,0,1,2,2v5.7a2,2,0,0,1-2,2H34.59a0,0,0,0,1,0,0V6.6A0,0,0,0,1,34.59,6.6Z"/>
                	<line class="a" x1="5.5" y1="41.4" x2="34.59" y2="41.4"/>
                </svg>
            </a>
        </div>
        @csrf
        <input type="hidden" value="{{ $parent }}" name="parent" />
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!--phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
