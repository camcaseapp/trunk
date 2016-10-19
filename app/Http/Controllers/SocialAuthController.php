<?php

namespace App\Http\Controllers;

use App\SocialAccountService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\AbstractProvider;

class SocialAuthController extends Controller
{

    public function index()
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function create(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id, Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function redirect()
    {
        /**
         * @var $driver AbstractProvider
         */
        $driver = Socialite::driver('google');
        $driver->stateless();
        $driver->scopes([
            'https://www.googleapis.com/auth/drive'
        ]);

//        echo '<pre>';
//        var_dump($driver);
//        echo '</pre>';
        return $driver->redirect();
    }

    public function callback()
    {
        // Important change from previous post is that I'm now passing
        // whole driver, not only the user. So no more ->user() part
        $user = Socialite::driver('google')->stateless()->user();
        var_dump($user);

//        auth()->login($user);
//
//        return redirect()->to('/home');
    }
}
