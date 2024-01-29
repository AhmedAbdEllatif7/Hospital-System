<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Doctor extends Model
{
    use HasFactory , Translatable;

    public $translatedAttributes = ['name','appointments'];

    protected $table = 'doctors';

    public $timestamps = true;

    protected $fillable=['email' , 'email_verified_at' , 'password'
        , 'section_id' , 'phone' , 'status' , 'name' ];




    // public function getStatusAttribute()
    // {
    //     return $this->attributes['status'] == 1 ? trans('doctors.Enabled') : trans('doctors.Not_enabled');
    // }


    public function section()
    {
        return $this->belongsTo(Section::class , 'section_id');
    }



    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class,'appointment_doctor');
    }



    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
