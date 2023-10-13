
@extends('layouts.adminMaster')


@section('content')





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    <section class="container mt-5">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Profile Information') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Update your account's profile information.") }}
                            </p>
                        </header>
                    
                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>
                    
                        <form method="post" action="{{ route('profile.update') }}" class="mt-4 space-y-4" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    @if (Auth::admin()->image)
                                        <img src="{{ asset('images/users/' . Auth::admin()->image }}" alt="{{ Auth::admin()->name }}'s Profile Picture" class="img-fluid" style="max-width: 200px; height: auto;">
                                    @else
                                        <img src="{{ asset('images/users/Default_pfp.svg.png') }}" alt="Default Profile Picture" class="img-fluid" style="max-width: 200px; height: auto;">
                                    @endif
                    5
                                    <div class="form-group mt-3">
                                        <label for="image">{{ __('Upload new image') }}</label>
                                        <input id="image" name="image" type="file" accept="image/*" class="form-control-file" :value="old('image', Auth::admin()->image)" autocomplete="image" />
                                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
                                    </div>
                                </div>
                    
                                <div class="col-md-7 col-12">
                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}</label>
                                        <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', Auth::admin()->name)" required autofocus autocomplete="name" />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="email">{{ __('Email') }}</label>
                                        <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', Auth::admin()->email)" required autocomplete="username" />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    
                                        @if (Auth::admin() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! Auth::admin()->hasVerifiedEmail())
                                            <div>
                                                <p class="text-sm mt-2 text-gray-800">
                                                    {{ __('Your email address is unverified.') }}
                    
                                                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        {{ __('Click here to re-send the verification email.') }}
                                                    </button>
                                                </p>
                    
                                                @if (session('status') === 'verification-link-sent')
                                                    <p class="mt-2 font-medium text-sm text-green-600">
                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                    </p>
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                    
                                    <div class="form-group">
                                        <label for="phone">{{ __('Phone') }}</label>
                                        <x-text-input id="phone" name="phone" type="text" class="form-control" :value="old('phone', Auth::admin()->phone)" autofocus autocomplete="phone" />
                                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                    </div>
                    
                                    <div class="form-group mt-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                    
                                            @if (session('status') === 'profile-updated')
                                                <p
                                                    x-data="{ show: true }"
                                                    x-show="show"
                                                    x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-sm text-gray-600"
                                                >{{ __('Saved.') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    
                    <br>
                    <hr style="height: 3px; background-color: green;">
                    
                    
                    <section>
                    <br>
                            <h2 class="text-lg font-medium text-gray-900 " style="display: inline-block">
                                {{ __('Update Password ->') }}
                            </h2>
                    
                      
                        <x-primary-button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'change-password')"
                    >{{ __('Change Password') }}</x-primary-button>
                    
                    <x-modal name="change-password" :show="$errors->changePassword->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('password.update') }}" style="padding: 15px">
                            @csrf
                            @method('put')
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                            </p>
                            <div>
                                <x-input-label for="current_password" :value="__('Current Password')" />
                                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"  autocomplete="current-password" />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>
                    
                            <div>
                                <x-input-label for="password" :value="__('New Password')" />
                                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>
                    
                            <div>
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                    
                            <div class="flex items-center gap-4 py-3" >
                                <x-primary-button >{{ __('Save') }}</x-primary-button>
                    
                                @if (session('status') === 'password-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </x-modal>
                    </section>
                    
                    
                </div>
            </div>

         

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    <section class="space-y-6">
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Delete Account') }}
                            </h2>
                    
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                            </p>
                        </header>
                    
                        <x-danger-button
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                        >{{ __('Delete Account') }}</x-danger-button>
                    
                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                @csrf
                                @method('delete')
                    
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('Are you sure you want to delete your account?') }}
                                </h2>
                    
                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                </p>
                    
                                <div class="mt-6">
                                    <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                    
                                    <x-text-input
                                        id="password"
                                        name="password"
                                        type="password"
                                        class="mt-1 block w-3/4"
                                        placeholder="{{ __('Password') }}"
                                    />
                    
                                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                </div>
                    
                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Cancel') }}
                                    </x-secondary-button>
                    
                                    <x-danger-button class="ml-3">
                                        {{ __('Delete Account') }}
                                    </x-danger-button>
                                </div>
                            </form>
                    
                       
                        </x-modal>
                             
                    </section>
                    
                </div>
            </div>



        </div>
    </div>
