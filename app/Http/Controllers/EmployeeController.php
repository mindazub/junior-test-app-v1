<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
use App\Http\Requests\CompanyUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        return View('employee.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return View
     * @throws \Exception
     */
    public function edit(Employee $employee): View
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CompanyUpdateRequest $request
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $data = [
            'firstName' => $request->getFirstName(),
            'lastName' => $request->getLastName(),
            'company' => $request->getCompany(),

        ];

        $employee->update($data, [$employee->id]);

        return redirect()
            ->route('home')
            ->with('status', 'Company updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return RedirectResponse|void
     * @internal param int $id
     */
    public function destroy(Employee $employee): RedirectResponse
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
