<?php

namespace App\Repositories\Interfaces\Doctor;

interface DoctorRepositoryInterface
{
    public function index();
    public function create();
    public function edit($doctor);
    public function store($request);
    public function update($request , $doctor);
    public function destroy($doctor);
    public function changeStatus($doctor);
    public function changePassword($request , $doctor);
}
