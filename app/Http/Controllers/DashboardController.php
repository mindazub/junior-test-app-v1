<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{

    public function index()
    {
        return view('adminlte.dashboard.index');
    }
    
    /**
     * Displays datatables front end view
     *
     * @param Request $request
     * @return \Illuminate\View\View
     * @throws \Exception
     */
    public function users(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('adminlte.user.index');
    }


    /**
     * Displays Employee front end view
     *
     * @param Request $request
     * @return \Illuminate\View\View
     * @throws \Exception
     */
    public function employee(Request $request)
    {
        if ($request->ajax()) {
            $data = Employee::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('adminlte.employee.index');
    }


    /**
     * Displays Company front end view
     *
     * @param Request $request
     * @return \Illuminate\View\View
     * @throws \Exception
     */
    public function company(Request $request)
    {
        if ($request->ajax()) {
            $data = Company::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('adminlte.company.index');
    }


}
