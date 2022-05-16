<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actulity extends Model
{
    use HasFactory;

      protected $guarded = [];

    
    public function user(){
        return $this->belongsTo(User::class);
    }

      public function comment(){
        return $this->hasMany(comment::class);
    }

}
