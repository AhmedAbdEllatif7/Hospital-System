<?php

namespace App\Repositories\Interfaces\Section;

use App\Models\Section;
use Illuminate\Http\Request;

interface SectionRepositoryInterface {

    public function index();
    public function store($request);
    public function show($section);
    public function update($request , $section);
    public function destroy($request);
}
