<?php

namespace App\Repositories\Doctor;

use App\Http\Traits\ManageFile;
use App\Repositories\Interfaces\Doctor\DoctorRepositoryInterface;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Section;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DoctorRepository implements DoctorRepositoryInterface {

    use ManageFile;

    public function index()
    {
        $doctors = Doctor::all(['id', 'email', 'section_id', 'phone', 'status', 'created_at']);

        return view('dashboards.admin.doctors.index' , compact('doctors'));
    }


    public function create()
    {
        $sections = Section::select('id')->get();
        $appointments = Appointment::select('id')->get();
        return view('dashboards.admin.doctors.create' , compact('sections' , 'appointments'));
    }


    public function store($request)
    {
        DB::beginTransaction();

        try {
            $doctorData = $request->validated();

            $doctor = Doctor::create($doctorData);

            $doctor->doctorappointments()->attach($doctorData['appointments']);

            DB::commit();

            session()->flash($doctor ? 'add' : 'failed');
            return redirect()->back();
        }

        catch (Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while creating the doctor.');
        }
    }


    public function edit($doctor)
    {
        $sections = Section::select('id')->get();
        $appointments = Appointment::select('id')->get();

        return view('dashboards.admin.doctors.edit' , compact('doctor' , 'sections' , 'appointments'));
    }



    public function update($request, $doctor)
    {
        try {
            // Check if the doctor exists
            if (!$doctor) {
                return redirect()->route('doctors.index')->with('error', 'Doctor not found');
            }

            $doctorData = $request->validated()
            ;
            $doctor->update($doctorData);

            $doctor->doctorappointments()->sync($doctorData['appointments']);

            $this->handlePhotoUpload($request, $doctor);

            session()->flash('edit');
            return redirect()->route('doctors.index');
        }

        catch (Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the doctor.');
        }
    }


    private function handlePhotoUpload($request, $doctor)
    {
        if ($request->hasFile('photo')) {
            if (!empty($doctor->image->file_name)){

            $this->deleteFile('Doctors', $doctor->image->file_name);

            $photo = $this->uploadFile($request, 'photo', 'Doctors', 'doctor_' . $doctor->name);

            $doctor->image->update(['file_name' => $photo]);
        }
            else {
                $photo = $this->uploadFile($request, 'photo', 'Doctors', 'doctor_' . $doctor->name);

                $doctor->image()->create(['file_name' => $photo]);
            }
        }
    }




    public function destroy($doctor)
    {
        try {
            if (request()->page_id == 1) {
                $doctor->delete();
                session()->flash('delete');
            } else {
                $this->deleteMultipleDoctors();
                session()->flash('delete');
            }
            return redirect()->back();

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the doctor.');
        }
    }



    protected function deleteMultipleDoctors()
    {
        $delete_select_id = explode(",", request()->delete_select_id);

        foreach ($delete_select_id as $ids_doctors) {
            $doctor = Doctor::findOrFail($ids_doctors);
        }

        Doctor::destroy($delete_select_id);
    }



    public function changeStatus($doctor)
    {
        $doctor->status = $doctor->status === 0 ? 1 : 0;

        $doctor->save();

        session()->flash('edit');

        return redirect()->back();
    }


    public function changePassword($request, $doctor)
    {
        $validation = $this->validatePassword($request);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $this->updatePassword($doctor, $request->input('password'));

        session()->flash('edit');
        return redirect()->back();
    }

    protected function validatePassword($request)
    {
        return Validator::make($request->all(), [
            'password' => 'required|min:6|confirmed',
        ], [
            'password.confirmed' => 'Passwords do not match.',
        ]);
    }

    protected function updatePassword($doctor, $password)
    {
        $doctor->password = Hash::make($password);
        $doctor->save();
    }






}
