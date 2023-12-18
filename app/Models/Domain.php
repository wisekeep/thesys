<?php

namespace App\Models;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Domain extends Model
{
    use HasFactory, HasRelationships, SoftDeletes;
    use UsesUuid;

    protected $model = Domain::class;

    protected $table = 'domains';

    protected $primaryKey = 'id';

    protected $fillable = [
        'uuid',
        'domain',
        'tenant_id',
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
}
