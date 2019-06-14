<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyStoreRequest;
use App\Http\Requests\CompanyUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyController extends Controller
{

    const COVER_DIRECTORY = 'companies';
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        $companies = Company::paginate(10);

        return View('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        return View('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompanyStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CompanyStoreRequest $request):RedirectResponse
    {

        $data = [
            'name' => $request->getName(),
            'website' => $request->getWebsite(),
            'email'=> $request->getEmail(),
            'logo' => $request->getLogo()? $request->getLogo()->store(self::COVER_DIRECTORY) : null,
        ];


        try {
            $company = Company::create($data);
            return redirect()
                ->route('company.index', app()->getLocale())
                ->with('status', 'Company created successfully!');
        } catch (\Throwable $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     * @return View
     * @throws \Exception
     */
    public function edit(Company $company): View
    {
        return view('company.edit', compact('company_id'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param CompanyUpdateRequest $request
     * @param Company $company
     * @return RedirectResponse
     */
    public function update(CompanyUpdateRequest $request, Company $company):RedirectResponse
    {
        $data = [
            'name' => $request->getName(),
            'website' => $request->getWebsite(),
            'email'=> $request->getEmail(),
        ];

        if($request->getLogo()) {
            $data['logo'] = $request->getLogo()->store(self::COVER_DIRECTORY);
        }


        $company->update($data, [app()->getLocale(), $company->id]);

        return redirect()
            ->route('home')
            ->with('status', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Company $company
     * @return RedirectResponse|void
     * @internal param int $id
     */
    public function destroy(Company $company): RedirectResponse
    {
        try {
            $company->delete();
            return redirect()
                ->back()
                ->with('status', 'Company deleted successfully!');
        } catch (\Throwable $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

}
