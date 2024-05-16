<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserModel extends Authenticatable implements JWTSubject
{
    use HasFactory;
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }


    protected $table = "m_user";
    protected $primaryKey = "user_id";
    
    protected $fillable = [
        'user_id',
        'level_id',
        'username',
        'nama',
        'password',
    ];
    
    public function level (){
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
    }

