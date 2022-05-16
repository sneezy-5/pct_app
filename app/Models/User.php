<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Actuality(){
        return $this->hasMany(Actuality::class);
    }

     public function emergency(){
        return $this->hasMany(Emergency::class);
    }


     public function even(){
        return $this->hasMany(Event::class);
    }

     public function pharmacy(){
        return $this->hasMany(Pharmacy::class);
    }

     public function school(){
        return $this->hasMany(School::class);
    }

     public function service(){
        return $this->hasMany(Service::class);
    }


     public function job(){
        return $this->hasMany(Job::class);
    }

     public function prject(){
        return $this->hasMany(Project::class);
    }

     public function sick(){
        return $this->hasMany(Sick::class);
    }

     public function subject(){
        return $this->hasMany(Subject::class);
    }

      public function message(){
        return $this->hasMany(Message::class);
    }


     public function chat_room(){
        return $this->hasMany(ChatRoom::class,'user1_id');
    }


     public function unread_message(){
        return $this->belongsTo(UnreadMessage::class);
    }

    public function connect(){
        return $this->belongsToMany(ChatRoom::class);
    }
}
