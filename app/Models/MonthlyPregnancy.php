<?php

/**
 * MonthlyPregnancy
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPregnancy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'result_pregnancy',
        'type_pregnancy'
    ];

    /**
     * The attributes that are type castable.
     *
     * @var array
     */
    protected $casts = [
        'result_pregnancy' => 'date'
    ];
}
