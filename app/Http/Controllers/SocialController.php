<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $providerResult = Socialite::driver($provider)->stateless()->user();

        $user = User::updateOrCreate(
            [
                'provider_id' => $providerResult->id,
                'provider' => $provider
            ],
            [
                'email' => $providerResult->email,
                'name' => $providerResult->name,
                'provider_token' => $providerResult->token,
                'provider_avatar' => $providerResult->avatar
            ]
        );

        Auth::login($user);
        return redirect('/dashboard');
    }
}
