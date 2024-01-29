<?php

namespace App\Http\Controllers\Dashboards\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Repositories\Interfaces\Section\SectionRepositoryInterface;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    private $section;

    public function __construct(SectionRepositoryInterface $section)
    {
        $this->section = $section;
    }
    public function index()
    {
        return $this->section->index();
    }


    public function store(SectionRequest $request)
    {
        return $this->section->store($request);
    }


    public function show(Section $section)
    {
        return $this->section->show($section);
    }


    public function update(SectionRequest $request, Section $section)
    {
        return $this->section->update($request, $section);
    }



    public function destroy(Section $section)
    {
        return $this->section->destroy($section);
    }
}
