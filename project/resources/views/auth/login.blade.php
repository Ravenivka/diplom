
    
<div class="reg_main">

    <form method="POST" action="{{ route('login') }}">
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
        <!-- Email Address -->
        <div>
            <label class='reg_label' for="email" >Email</label><br/>
            <input id="email" class="reg_input" type="email" name="email"  required autofocus autocomplete="username" />
            
        </div>

        <!-- Password -->
        <div>
            <label class='reg_label' for="password" >Password</label><br/>

            <input id="password" class="reg_input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />            
        </div>

        <!-- Remember Me -->
        <div >
            <label for="remember_me" class='reg_label'>
                <input id="remember_me" type="checkbox" class="" name="remember">
                <span class="remember_me">Remember me</span>
            </label>
        </div>

        <div class="Forgot">
            @if (Route::has('password.request'))
                <a class="Forgot_a" href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif

            <button class="reg_btn" type="submit">Log in</button>
        </div>
        @if($errors->any())
            <div class="reg-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>
