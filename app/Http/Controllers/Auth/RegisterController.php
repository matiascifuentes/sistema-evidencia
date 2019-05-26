<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //  Función para redirección según tipo de usuario
    protected function redirectTo()
    {
        if (auth()->user()->hasRole('admin')) {
            //  Si el usuario es administrador se dirige a la vista de administrador.
            $redirectTo = '/admin/home';
        }
        if(auth()->user()->hasRole('revisor'))
        {
            //  Si el usuario es revisor se dirige a la vista de revisor.
            $redirectTo = '/revisor/home';
        }
        if(auth()->user()->hasRole('dac'))
        {
            //  Si el usuario es dac se dirige a la vista de dac.
            $redirectTo = '/dac/home';
        }
        if(auth()->user()->hasRole('profesor'))
        {
            //  Si el usuario es profesor se dirige a la vista de profesor.
            $redirectTo = '/profesor/home';
        }
        return $redirectTo;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->roles()->attach(Role::where('name', 'profesor')->first());

        return $user;
    }
}
