<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class useraccount extends Model implements Authenticatable
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
