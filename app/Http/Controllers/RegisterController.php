<?php
/**
 * Created by Arunkumar.
 * User: HP
 * Date: 02-04-2022
 * Time: 08:40 AM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class RegisterController
 * @package App\Http\Controllers
 */
class RegisterController extends Controller
{

    /**
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     *
     * @param RegisterRequest $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }
}
