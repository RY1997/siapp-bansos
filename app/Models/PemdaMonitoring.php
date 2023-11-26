<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PemdaMonitoring
 * @package App\Models
 * @version October 26, 2023, 2:04 am UTC
 *
 * @property string $kd_pwk
 * @property string $nm_pemda
 * @property string $no_perda
 * @property string $tgl_perda
 * @property string $no_perkada_bansos
 * @property string $tgl_perkada_bansos
 * @property string $link
 * @property string $status
 * @property number $belanja_daerah
 * @property number $a_belanja_daerah
 * @property number $r_belanja_daerah
 * @property number $5_3
 * @property number $a_5_3
 * @property number $r_5_3
 * @property number $5_1_06
 * @property number $a_5_1_06
 * @property number $r_5_1_06
 */
class PemdaMonitoring extends Model
{

    use HasFactory;

    public $table = 'data_baseline';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'no_perda',
        'tgl_perda',
        'no_perkada_bansos',
        'tgl_perkada_bansos',
        'link',
        'status',
        'uji_petik',
        'a_belanja_daerah',
        'r_belanja_daerah',
        'a_5_3',
        'r_5_3',
        'a_5_1_06',
        'r_5_1_06'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'no_perda' => 'string',
        'tgl_perda' => 'date',
        'no_perkada_bansos' => 'string',
        'tgl_perkada_bansos' => 'date',
        'link' => 'string',
        'status' => 'string',
        'uji_petik' => 'string',
        'a_belanja_daerah' => 'decimal:2',
        'r_belanja_daerah' => 'decimal:2',
        'a_5_3' => 'decimal:2',
        'r_5_3' => 'decimal:2',
        'a_5_1_06' => 'decimal:2',
        'r_5_1_06' => 'decimal:2',
        'a_5_1_02_01_01_0039' => 'decimal:2',
        'r_5_1_02_01_01_0039' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_perda' => 'required|string|max:255',
        'tgl_perda' => 'nullable',
        'no_perkada_bansos' => 'nullable|string|max:255',
        'tgl_perkada_bansos' => 'nullable',
        'link' => 'nullable|string|max:255',
        'status' => 'nullable|string|max:255',
        'a_belanja_daerah' => 'required|numeric',
        'r_belanja_daerah' => 'required|numeric',
        'a_5_3' => 'required|numeric',
        'r_5_3' => 'required|numeric',
        'a_5_1_06' => 'required|numeric',
        'r_5_1_06' => 'required|numeric',
        'a_5_1_02_01_01_0039' => 'required|numeric',
        'r_5_1_02_01_01_0039' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
