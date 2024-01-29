<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorTranslation extends Model
{
    use HasFactory;

   protected $table = 'doctor_translations';

   public $timestamps = false;

    protected $fillable=['name'];


}
