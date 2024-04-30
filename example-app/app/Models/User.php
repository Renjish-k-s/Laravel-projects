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

    protected $primaryKey='user_id'; 

    protected $guarded = [];
    protected $hidden=['user_id'];

    public function getDateOfBirthFAttribute()
    {
        return date('d-M-Y',strtotime($this->date_of_birth));  //accessors
    }

    public function setDateOfBirthFAttribute($value)
    {
        $this->attributes['date_of_birth']=date('Y-d-m',strtotime($value));  //mutators
    }
    public function scopeActive($query)
    {
        return $query->where('status',0);
    }
    public function getStatusTextAttribute()
    {
        if ($this->status==1) return "Active";
        if ($this->status==0) return "Inactive";

    }
    protected $appends =['date_of_birth_f','status_text'];
}
