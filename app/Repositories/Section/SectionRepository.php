<?php

namespace App\Repositories\Section;

use App\Models\Section;
use Exception;

class SectionRepository implements \App\Repositories\Interfaces\Section\SectionRepositoryInterface
{


    public function index()
    {
            $sections = Section::select('id', 'created_at')->get();
            return view('dashboards.admin.sections.index', compact('sections'));
    }





    public function store($request)
    {
        try {
            $sectionData = $request->validated();

            $section = Section::create($sectionData);

            session()->flash($section ? 'add' : 'error');
            return redirect()->back();
        }

        catch (Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while creating the section.');
        }
    }



    public function show($section) {

        $doctors = $section->doctors;
        return view('dashboards.admin.sections.showDoctors' , compact('doctors' , 'section'));
    }

    public function update($request,  $section)
    {
        try {
            $section->update($request->all());
            session()->flash('edit');
            return redirect()->back();
        }

        catch (Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the section.');
        }
    }




    public function destroy($section)
    {
        try {
            $section->delete();

            session()->flash('delete');
            return redirect()->back();
        }

        catch (Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the section.');
        }
    }



}
