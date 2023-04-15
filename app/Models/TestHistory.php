<?php

/**
 * TestHistory
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'test_id',
        'title',
        'change_set'
    ];

    /**
     * The attributes that are type castable.
     *
     * @var array
     */
    protected $casts = [
        'change_set' => 'array'
    ];
}
