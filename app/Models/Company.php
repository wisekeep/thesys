<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class Company extends Model
{
    use HasFactory, SoftDeletes, Timestamp;

    protected $table = 'companies';

    public $timestamps = true;

    //    protected $fillable = [
    //     '*'
    //    ];
    protected $fillable = array('*');

    protected $attributes = [
        'uuid' => (string)Uuid::uuid4()
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'deleted_at',
    ];
}
