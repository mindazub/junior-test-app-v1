<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Http\Requests\EmployeeStoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        $employees = Employee::paginate(10);
        $companies = Company::all();

        return View('employee.index', compact('employees', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        $companies = Company::all();

        return View('employee.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EmployeeStoreRequest $request
     * @return RedirectResponse
     */
    public function store(EmployeeStoreRequest $request):RedirectResponse
    {
        $data = [
            'firstName' => $request->getFirstName(),
            'lastName' => $request->getLastName(),
            'website' => $request->getWebsite(),
            'phone' => $request->getPhone(),
            'email'=> $request->getEmail(),
            'company_id' => $request->getCompanyId(),
        ];

        try{
            $employee = Employee::create($data);
            return redirect()
                ->route('employee.index', app()->getLocale())
                ->with('status', 'Employee created successfully!');
        } catch(\Throwable $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param Employee $employee
     * @return View
     */
    public function edit($locale, Employee $employee): View
    {
        $companies = Company::all();
        return view('employee.edit', compact('locale', 'employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $locale
     * @param EmployeeUpdateRequest $request
     * @param Employee $employee
     * @return RedirectResponse
     */
    public function update($locale, EmployeeUpdateRequest $request, Employee $employee): RedirectResponse
    {

        $data = [
            'firstName' => $request->getFirstName(),
            'lastName' => $request->getLastName(),
            'website' => $request->getWebsite(),
            'phone' => $request->getPhone(),
            'email'=> $request->getEmail(),
            'company_id' => $request->getCompanyId(),
        ];

        $employee->update($data, [app()->getLocale(), $employee->id]);

        return redirect()
            ->route('employee.index', $locale)
            ->with('status', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param Employee $employee
     * @return RedirectResponse|void
     * @internal param int $id
     */
    public function destroy($locale, Employee $employee): RedirectResponse
    {
        try {
            $employee->delete();
            return redirect()
                ->back()
                ->with('status', 'Employee deleted successfully!');
        } catch (\Throwable $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

}
