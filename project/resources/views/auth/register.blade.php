<style>
    .reg_main {
        background-color: rgb(17 24 39);
        width: 100%;
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .reg_label {
        color: rgb(129 129 129);
        font-size: 18px;
    }
    .reg_input {                
        color: rgb(209 213 219);
        font-size: 18px;
        border: 2px solid darkgrey;
        border-radius: .375rem;
        background-color: rgb(17 24 39);
    }
    .reg-alredy {
        display: flex; 
        align-items: center;
        justify-content: end;
        color: red;
        margin-top: 10px;
    }
    .reg_btn {
        color: rgb(31 41 55);
        background-color: lightgray;
        border-radius: .375rem;
        font-family: 'Consolas' ;
        margin-left: 15px;
        padding-left: 10px;
        padding-right: 10px;
    }
    .reg-danger {
        color: red;
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
            <label class='reg_label' for="name">Name</label><br/> 
            <input id="name" class="reg_input" type="text" name="name" />              
        </div>

        <!-- Email Address -->
        <div >
            <label class='reg_label' for="email" >Email</label><br/>
            <input id="email" class="reg_input" type="email" name="email" required autocomplete="username" />           
        </div>

        <!--phone -->
        <div >
            <label class='reg_label' for="phone" >Phone</label><br/>
            <input id="phone" class="reg_input" type="tel" name="phone" required  />            
        </div>

        <!-- Password -->
        <div >
            <label class='reg_label' for="password" >Password</label><br/>

            <input id="password" class="reg_input"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />           
        </div>

        <!-- Confirm Password -->
        <div >
            <label class='reg_label' for="password_confirmation" >Confirm Password</label><br/>
            <input id="password_confirmation" class="reg_input"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />            
        </div>

        <div class="reg-alredy">
            <a  href="{{ route('login') }}" style="color: white; font-family: Arial, Helvetica, sans-serif , sans-serif; font-size: 12px;">Already registered?</a>

            <button class="reg_btn" type="submit">
                {{ __('Register') }}
            </button>
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
