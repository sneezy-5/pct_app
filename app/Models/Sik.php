<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sik extends Model
{
    use HasFactory;
     protected $fillable = ['name','describe'];

      public function emergency(){
        return $this->belongsTomany(Emergency::class,'emergencies_siks');

}
}
