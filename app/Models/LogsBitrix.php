<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogsBitrix extends Model
{
    /** @use HasFactory<\Database\Factories\LogsBitrixFactory> */
    use HasFactory;

    protected $table = 'logs_bitrix';

    protected $fillable = [
        'description_payload',
        'processed',
        'processed_at'
    ];
}
