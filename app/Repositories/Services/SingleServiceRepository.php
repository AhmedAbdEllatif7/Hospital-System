<?php

namespace App\Repositories\Services;

use App\Models\Service;
use App\Repositories\Interfaces\Services\SingleServiceRepositoryInterface;

class SingleServiceRepository implements SingleServiceRepositoryInterface
{
    public function index()
    {
        $services = Service::all();
        return view('dashboards.admin.services.singleService.index', compact('services'));
    }


    public function store($request)
    {
        try {
            $validatedData = $request->validated();

            $validatedData['status'] = 1;
            $singleService = Service::create($validatedData);
            
            $singleService ? session()->flash('add') : session()->flash('error');
            return redirect()->back();

        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function update($request, $singleService)
    {
        $validatedData = $request->validated();

        $validatedData['status'] = $request->status;

        $singleService->update($validatedData);

        $singleService ? session()->flash('edit') : session()->flash('error');
        return redirect()->back();
    }


    public function destroy($singleService)
    {
        $singleService->delete();

        $singleService ? session()->flash('delete') : session()->flash('error');
        return redirect()->back();
    }
}
