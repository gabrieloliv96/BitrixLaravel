<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogsClockfy extends Model
{
    /** @use HasFactory<\Database\Factories\LogsClockfyFactory> */
    use HasFactory;
    protected $table = 'logs_clockify';

    protected $fillable = [
        'description_payload',
        'processed',
        'processed_at'
    ];
}
