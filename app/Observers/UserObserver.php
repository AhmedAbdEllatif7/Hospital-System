<?php

namespace App\Observers;

use App\Http\Traits\ManageFile;
use App\Models\User;

class UserObserver
{
use ManageFile;
    public function created(User $user): void
    {
        $imageName = $this->uploadFile(request() , 'photo' , 'Patients' , '_patient'.$user->name);
        $user->image()->create([
            'file_name' => $imageName,
            'imageable_id' => $user->id,
            'imageable_type' => 'App\Models\User',
        ]);
    }


    public function updated(User $user): void
    {
        //
    }


    public function deleted(User $user): void
    {
        //
    }


    public function restored(User $user): void
    {
        //
    }


    public function forceDeleted(User $user): void
    {
        //
    }
}
