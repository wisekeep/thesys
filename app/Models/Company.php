<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes, Timestamp;

    protected $model = Company::class;

    protected $table = 'companies';

    protected $primaryKey = 'company_id';

    protected $fillable = [
        'company_uuid',
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
        'company_uuid' => 'string',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
