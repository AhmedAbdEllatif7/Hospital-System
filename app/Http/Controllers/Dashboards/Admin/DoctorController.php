<?php

namespace App\Http\Controllers\Dashboards\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminDashboard\DoctorRequest;
use App\Repositories\Interfaces\Doctor\DoctorRepositoryInterface;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    private $doctor;

    public function __construct(DoctorRepositoryInterface $doctor)
    {
        $this->doctor = $doctor;
    }
    public function index()
    {
        return $this->doctor->index();
    }


    public function create()
    {
        return $this->doctor->create();
    }


    public function store(DoctorRequest $request)
    {
        return $this->doctor->store($request);

    }


    public function edit(Doctor $doctor)
    {
        return $this->doctor->edit($doctor);
    }


    public function update(DoctorRequest $request, Doctor $doctor)
    {
        return $this->doctor->update($request , $doctor);
    }




    public function destroy(Doctor $doctor)
    {
        return $this->doctor->destroy($doctor);

    }


    public function changeStatus(Request $request, Doctor $doctor) {

        $this->validate($request, [
            'status' => 'required|in:0,1'
        ]);
        return $this->doctor->changeStatus($doctor);
    }


    public function changePassword(Request $request , Doctor $doctor)
    {
        return $this->doctor->changePassword($request ,$doctor);
    }
}
