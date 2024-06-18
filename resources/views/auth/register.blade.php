    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('/frontend/login/style2.css') }}">
     
    <div class="container">
       
            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}" class="form signup">
                @csrf

                <div class="title">{{ __('Register') }}</div>

                <div class="input-field">
                    <label for="name" value="{{ __('Name') }}"></label>
                    <input id="name" type="text" name="name" :value="old('name')" placeholder="Enter your name" required>
                    <i class="uil uil-user"></i>
                </div>

                <div class="input-field">
                    <label for="name" value="{{ __('Username') }}"></label>
                    <input id="username" type="text" name="username" :value="old('username')" placeholder="Enter your username" required>
                    <i class="uil uil-user"></i>
                </div>

                <div class="input-field">
                    <label for="email" value="{{ __('Email') }}"></label>
                    <input id="email" type="email" name="email" :value="old('email')" placeholder="Enter your email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>

                <div class="input-field">
                    <label for="password" value="{{ __('Password') }}"></label>
                    <input id="password" type="password" name="password" class="password" placeholder="Create a password" required>
                    <i class="uil uil-lock icon"></i>
                </div>

                <div class="input-field">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}"></label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="password" placeholder="Confirm a password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>


                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="input-field button">
                    <input type="submit" value="{{ __('Register') }}">
                </div>
            </form>

            <div class="form login-signup">
                <span class="text">{{ __('Already registered?') }} <a href="{{ route('login') }}" class="text">{{ __('Login') }}</a></span>
            </div>
    </div>
    <script src="{{ asset('/frontend/login/script1.js') }}"></script> 
