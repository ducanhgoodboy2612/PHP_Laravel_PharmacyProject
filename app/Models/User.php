<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends  Authenticatable
{
    use HasFactory;

    use AuthenticableTrait;

    protected $table = 'useraccount';
    protected $primaryKey = 'UserID';
    protected $fillable = ['UserType', 'Username', 'Pass', 'Email'];


    public function getAuthIdentifierName()
    {
        return 'Email';
    }

    // public function getAuthIdentifier()
    // {
    //     return $this->getKey();
    // }

    public function getAuthPassword()
    {
        return $this->Pass;
    }
    public $timestamps = false;
}
