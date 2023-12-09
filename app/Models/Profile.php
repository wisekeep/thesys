<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes, Timestamp;

    protected $model = Profile::class;

    protected $table = 'profiles';

    protected $fillable = [
        'user_id',
        'uuid',
        'profile_image',
        'profile_cpf',
        'profile_rg',
        'profile_rg_emit',
        'profile_birthday',
        'profile_email',
        'profile_address',
        'profile_number',
        'profile_neighborhood',
        'profile_city',
        'profile_estate',
        'profile_country',
        'profile_cep',
        'profile_telephone1',
        'profile_telephone2',
        'profile_telephone3',
        'profile_telephone4',
        'profile_obs',
        'profile_file',
    ];

    protected $guarded = ['id'];

    protected $casts = [
        'uuid' => 'string',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
