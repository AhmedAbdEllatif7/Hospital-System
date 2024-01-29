<?php

namespace App\Repositories\Interfaces\Services;

interface SingleServiceRepositoryInterface {

    public function index();
    
    public function store($request);

    public function update($request, $singleService);

    public function destroy($singleService);
}