<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory , Translatable;
    public $translatedAttributes = ['name' , 'description'];

    protected $fillable=['name' , 'description'];

    protected $table = 'sections';

    public $timestamps = true;



    
    
    public function doctors()
    {
        return $this->hasMany(Doctor::class , 'section_id' , 'id' , 'id' );
    }

}
