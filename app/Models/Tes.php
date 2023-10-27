<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tes
 * @package App\Models
 * @version October 26, 2023, 1:48 am UTC
 *
 * @property string $select
 */
class Tes extends Model
{

    use HasFactory;

    public $table = 'tes';
    



    public $fillable = [
        'select'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'select' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
