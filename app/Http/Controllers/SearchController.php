<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function searchCompany()
    {
        $q = Input::get ( 'q' );
        $companies = Company::where([
            ['name', 'LIKE', '%' . $q . '%'],
        ])->paginate();

        return view('company.index', compact('companies', 'q'));
    }
}
