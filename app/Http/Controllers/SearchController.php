<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;

class SearchController extends Controller
{
    /**
     * @return View
     */
    public function searchCompany(): View
    {
        $q = Input::get ( 'q' );
        $companies = Company::where([
            ['name', 'LIKE', '%' . $q . '%'],
        ])->paginate();

        return view('company.index', compact('companies', 'q'));
    }

    /**
     * @return View
     */
    public function searchEmployee(): View
    {
        $q = Input::get ( 'q' );

        $employees = Employee::where([
            ['firstName', 'LIKE', '%' . $q . '%'],
        ])->orWhere([
            ['lastName', 'LIKE', '%' . $q . '%']
    ])->paginate();

        return view('employee.index', compact('employees', 'q'));
    }

    /**
     * @return View
     */
    public function searchUser(): View
    {
        $q = Input::get ( 'q' );
        $users = User::where([
            ['name', 'LIKE', '%' . $q . '%'],
        ])->paginate();

        return view('user.index', compact('users', 'q'));
    }

    /**
     * @return View
     */
    public function searchPost(): View
    {
        $q = Input::get ( 'q' );
        $users = Post::where([
            ['title', 'LIKE', '%' . $q . '%'],
        ])->paginate();

        return view('blog.index', compact('blog', 'q'));
    }

}
