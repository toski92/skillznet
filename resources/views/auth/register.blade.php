<x-guest-layout>

    <div class="row">
        <div class="col-sm-6">
            <img style="height: 100vh" src="{{ asset('storage/images/bg6.jpg') }}" alt="">
        </div>
        <div style="display: flex; align-items: center; height: 100vh; justify-content: center;" class="col-sm-6">
            <div>
                <img style="" src="{{ asset('storage/images/logo.jpg') }}" alt="">
            <h2>CREATE NEW ACCOUNT</h2>
            <div>clik <a href="#">here</a> to add your referral to join skillznet</div>
            <form class="w-1/2" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="col-sm-6">
                        <x-text-input id="fname" placeholder='First Name' class="" type="text" name="fname" :value="old('fname')" />
                        <x-input-error :messages="$errors->get('fname')" class="mt-2" />
                    </div>
                    <div class="col-sm-6">
                        <x-text-input id="lname" placeholder='Last Name' class="" type="text" name="lname" :value="old('lname')" />
                        <x-input-error :messages="$errors->get('lname')" class="mt-2" />
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">
                        <x-text-input id="username" placeholder='Username' class="" type="text" name="username" :value="old('username')" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                    <div class="col-sm-6">
                        <x-text-input id="email" placeholder='Email' class="" type="email" name="email" :value="old('email')" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">

                        <x-text-input id="password" placeholder='Password' class=""
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="col-sm-6">

                        <x-text-input id="password_confirmation" placeholder='CONFIRM PASSWORD' class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Register Now') }}
                    </x-primary-button>
                </div>
            </form>
            </div>
        </div>

</x-guest-layout>
