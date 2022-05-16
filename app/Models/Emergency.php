<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    use HasFactory;
     protected $guarded = [];
     
     public function user(){
        return $this->belongsTo(User::class);
    }

    public function siks(){
        return $this->belongsTomany(Sik::class, 'emergencies_siks');
    }

    public function services(){
        return $this->belongsTomany(Service::class, 'emergencies_services');
    }


}
