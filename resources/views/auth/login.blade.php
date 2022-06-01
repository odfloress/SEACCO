<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        {{-- <div class="container-fluid fixed-top p-4">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-muted">Log in</a>
    
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div> --}}




        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                    {{-- Logo seacco --}}
                    <center><img src='vendor/adminlte/dist/img/seacco.jpg' class="w3-round w3-image  w3-hover-opacity-off" alt="Photo of Me" width="150" height="150"></center>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Usuario') }}" />

                    <x-jet-input class="{{ $errors->has('username') ? 'is-invalid' : '' }}" type="text"
                                 name="username" :value="old('username')" required />
                    <x-jet-input-error for="username"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <x-jet-label value="{{ __('Contraseña') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Recordar usuario') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0" >
                    

                    <div class="d-grid mb-2"   class="d-flex justify-content: space-around; ">
                        
                        <x-jet-button>
                            {{ __('Ingresar') }}
                        </x-jet-button>
                         
                    </div>
                    {{-- Agregado para registrar usuarios oicv 25-3-2022 --}}
                    {{-- <div class="d-grid mb-3">
                        <a href="{{ route('register') }}" type="button" class="btn  btn-primary btn-dark">REGISTRAR</a>
                    </div> --}}

                    <div class="d-flex justify-content-end align-items-baseline " >
                        @if (Route::has('password.request'))
                            <a class="text-muted me-3" href="{{ route('password.request') }}">
                                {{ __('Olvido password?') }}
                            </a>
                        @endif

                        
                    </div>
                </div>

                

            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>

 {{-- @extends('adminlte::auth.login')  --}}