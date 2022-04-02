<?php
/**
 * Created by Arunkumar.
 * User: HP
 * Date: 02-04-2022
 * Time: 08:53 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ListController
 * @package App\Http\Controllers
 */
class ListController extends Controller
{
    /**
     * List view index
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('list.index');
    }
}
