<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Tenant extends Model
{
    use HasFactory, HasRelationships, SoftDeletes;

    protected $model = Tenant::class;

    protected $table = 'tenants';

    protected $primaryKey = 'id';

    protected $fillable = [
        'uuid',
        'tenant_active',
        'tenant_is_parent',
        'tenant_parent_id',
        'tenant_federal_register',
        'tenant_state_register',
        'tenant_municipal_register',
        'tenant_name',
        'tenant_business_name',
        'tenant_address',
        'tenant_number',
        'tenant_email',
        'tenant_obs',
        'tenant_file',
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
