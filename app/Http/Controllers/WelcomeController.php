<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        // $user = User::query()->create([
        //     'name' => 'José Braga',
        //     'email' => 'josebraga@gmail.com',
        //     'password' => 'jbraga'
        // ]);

        // $user = User::find(1);

        // Auth::login($user);
        // dd($user);


        return view('welcome');
    }
}
