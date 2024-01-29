<?php

namespace App\Observers;

use App\Http\Traits\ManageFile;
use App\Models\Doctor;
use App\Models\Image;
use Illuminate\Http\Request;

class DoctorObserver
{
    use ManageFile;

    public function created(Doctor $doctor): void
    {
        if (\request()->hasFile('photo')) {
            //Move photo to the public path
            $photo = $this->uploadFile(\request(), 'photo', 'Doctors' , 'doctor_'.$doctor->name);

            //Save image in the database
            Image::create([
                'file_name' => $photo,
                'imageable_id' => $doctor->id,
                'imageable_type' => 'App\Models\Doctor',
            ]);
        }
    }


    public function deleted(Doctor $doctor): void
    {
        if ($doctor->image) {
            // Delete the associated file
            $this->deleteFile('Doctors', $doctor->image->file_name);

            // Delete the image record
            $doctor->image->delete();
        }
    }



    public function restored(Doctor $doctor): void
    {
        //
    }


    public function forceDeleted(Doctor $doctor): void
    {
        //
    }
}
