<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRelationships, Notifiable, SoftDeletes;
    use UsesUuid;

    protected $model = User::class;

    protected $table = 'users';

    protected $fillable = [
        'uuid',
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //    public static function boot(): void
    //    {
    //        parent::boot();
    //
    //        self::creating(function ($model) {
    //            $model->uuid = Str::uuid();
    //        });
    //    }

    // public function profile(): HasOne
    // {
    //     return $this->hasOne(Profile::class);
    // }

    public function settings()
    {
        return $this->belongsToMany(Setting::class, 'settings')->withTimestamps()
            ->using(Setting::class)
            //->as('users')
            ->withPivot('user_id');
    }
}
