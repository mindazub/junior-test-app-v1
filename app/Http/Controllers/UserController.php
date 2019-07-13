<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $users = User::paginate();

        return view('user.index', compact('users'));
    }

    /**
     * @param User $user
     * @return View

     */
    public function show($locale, User $user): View
    {
        return view('user.show', compact('locale', 'user'));
    }

}
