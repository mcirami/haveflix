<x-app-layout :apiErrors="null">

    <x-slot name="header">
        <!-- header -->
        @include('components.header-content')
    </x-slot>

    <!-- Session Status -->
    <div class="form_wrap login">
        <form method="POST" action="{{ route('login') }}">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            @csrf

            <!-- Email Address -->
            <x-text-input placeholder="Username or Email"
                          id="login"
                          class="{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }} d-block mt-1 w-100"
                          type="text"
                          name="login"
                          value="{{ old('username') ?: old('email') }}"
                          required
                          autofocus
            />
            @if ($errors->has('username') || $errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                </span>
            @endif

            <!-- Password -->
            <div class="mt-4">
                <x-text-input placeholder="Password"
                              id="password"
                              class="d-block mt-1 w-100 {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                              type="password"
                              name="password"
                              required autocomplete="current-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="d-flex items-center justify-content-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div class="flex items-center justify-between mt-4">
                <x-primary-button>
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
