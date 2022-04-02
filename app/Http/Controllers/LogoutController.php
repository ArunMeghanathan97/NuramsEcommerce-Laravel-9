<?php
/**
 * Created by Arunkumar.
 * User: HP
 * Date: 02-04-2022
 * Time: 08:52 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class LogoutController
 * @package App\Http\Controllers
 */
class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
