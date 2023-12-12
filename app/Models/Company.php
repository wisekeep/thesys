<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Company extends Model
{
    use HasFactory, HasRelationships, SoftDeletes;

    protected $model = Company::class;

    protected $table = 'companies';

    protected $primaryKey = 'id';

    protected $fillable = [
        'uuid',
        'company_active',
        'company_is_parent',
        'company_parent_id',
        'company_federal_register',
        'company_state_register',
        'company_municipal_register',
        'company_name',
        'company_business_name',
        'company_address',
        'company_number',
        'company_email',
        'company_obs',
        'company_file',
    ];

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'uuid' => 'string',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function boot(): void
    {
        parent::boot();

        self::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }
}
