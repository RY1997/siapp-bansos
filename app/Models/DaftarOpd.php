<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DaftarOpd
 * @package App\Models
 * @version October 8, 2023, 4:16 am UTC
 *
 * @property string $kd_column
 * @property string $kd_opd
 * @property string $level
 * @property string $urusan
 * @property string $opd
 */
class DaftarOpd extends Model
{

    use HasFactory;

    public $table = 'data_opd';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'kd_column',
        'kd_opd',
        'level',
        'urusan',
        'opd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kd_column' => 'string',
        'kd_opd' => 'string',
        'level' => 'string',
        'urusan' => 'string',
        'opd' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kd_column' => 'required|string|max:255',
        'kd_opd' => 'required|string|max:255',
        'level' => 'required|string|max:255',
        'urusan' => 'required|string|max:255',
        'opd' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
