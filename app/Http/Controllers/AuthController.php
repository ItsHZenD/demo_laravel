<?php

namespace App\Http\Controllers;

use App\Events\UserRegisterEvent;
use App\Http\Requests\Auth\ProcessLoginRequest;
use App\Http\Requests\Auth\ProcessRegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    // public function processLogin(Request $request)
    // {

    //     try {
    //         $user = User::where('email', $request->get('email'))
    //             ->firstOrFail();
    //         if (!Hash::check($request->get('password'), $user->password)) {
    //             throw new Exception('Invalid password');
    //         }
    //         session()->put('id', $user->id);
    //         session()->put('name', $user->name);
    //         session()->put('level', $user->level);

    //         return redirect()->route('books.index');

    //     } catch (Throwable $th) {
    //         return redirect()->route('login');
    //     }

    // }

    public function processLogin(ProcessLoginRequest $request){
        $user = $request->except('_token');
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            // dd(Auth::user()->level);
            return redirect()->route('books.index');
        }
        return redirect()->route('login');
    }

    // public function logout()
    // {
    //     session()->flush();
    //     return redirect()->route('login');
    // }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('auth.register');
    }
    public function processRegister(ProcessRegisterRequest $request)
    {
        // $user = new User();
        // $user->fill($request->except([
        //     '_token',
        //     'password',
        // ]));
        // $user->fill([
        //     'password' => Hash::make($request->get('password'))
        // ]);
        // $user->save();


        // $user = User::query()
        //     ->create([
        //         'name' => $request->get('name'),
        //         'email' => $request->get('email'),
        //         'password' => Hash::make($request->get('password')),
        //         'level' => $request->get('level'),
        //         'phone' => $request->get('phone'),
        //         'address' => $request->get('address'),
        //         'gender' => $request->get('gender'),
        //         'birthdate' => $request->get('birthdate'),
        //     ]);

        $request['password'] = Hash::make($request->get('password'));

        $user = User::query()->create($request->all());
        // dd($user);

        UserRegisterEvent::dispatch($user);
        return redirect()->route('login');
    }

}
