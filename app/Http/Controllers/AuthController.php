<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginForm()
    {
        return view('auth.login.login'); // Vue pour le formulaire de connexion
    }

    public function SignUpForm()
    {
        return view('auth.login.sign_up'); // Vue pour le formulaire d'inscription
    }

    public function StaffLoginForm()
    {
        return view('auth.login.staff_login'); // Vue pour le formulaire de connexion du personnel
    }

    public function CustomerLoginForm()
    {
        return view('auth.login.customer'); // Vue pour le formulaire de connexion du client du personnel
    }

    public function DeliveryLoginForm()
    {
        return view('auth.login.delivery'); // Vue pour le formulaire de connexion de la livraison du personnel
    }
}
