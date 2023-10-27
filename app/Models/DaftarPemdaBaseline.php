<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DaftarPemdaBaseline
 * @package App\Models
 * @version October 7, 2023, 10:16 pm UTC
 *
 * @property string $kd_pwk
 * @property string $nm_pemda
 * @property string $no_perda
 * @property string $tgl_perda
 * @property string $no_perkada_bansos
 * @property string $tgl_perkada_bansos
 * @property number $belanja_daerah
 * @property number $5_1_02_01_01_0039
 * @property number $5_1_02_02_02
 * @property number $5_1_02_02_02_0001
 * @property number $5_1_02_02_02_0002
 * @property number $5_1_02_02_02_0003
 * @property number $5_1_02_02_02_0004
 * @property number $5_1_02_02_02_0005
 * @property number $5_1_02_02_02_0006
 * @property number $5_1_02_02_02_0007
 * @property number $5_1_02_02_02_0008
 * @property number $5_1_02_02_02_0009
 * @property number $5_3
 * @property number $5_1_06
 * @property number $5_1_06_01
 * @property number $5_1_06_01_01
 * @property number $5_1_06_01_01_0001
 * @property number $5_1_06_01_02
 * @property number $5_1_06_01_02_0001
 * @property number $5_1_06_02
 * @property number $5_1_06_02_01
 * @property number $5_1_06_02_01_0001
 * @property number $5_1_06_02_02
 * @property number $5_1_06_02_02_0001
 * @property number $5_1_06_03
 * @property number $5_1_06_03_01
 * @property number $5_1_06_03_01_0001
 * @property number $5_1_06_03_02
 * @property number $5_1_06_03_02_0001
 * @property number $5_1_06_04
 * @property number $5_1_06_04_01
 * @property number $5_1_06_04_01_0001
 * @property number $5_1_06_04_02
 * @property number $5_1_06_04_02_0001
 * @property number $5_1_06_urusan
 * @property number $1
 * @property number $1_01
 * @property number $1_01_5_1_06
 * @property number $1_02
 * @property number $1_02_5_1_06
 * @property number $1_03
 * @property number $1_03_5_1_06
 * @property number $1_04
 * @property number $1_04_5_1_06
 * @property number $1_05
 * @property number $1_05_5_1_06
 * @property number $1_06
 * @property number $1_06_5_1_06
 * @property number $2
 * @property number $2_07
 * @property number $2_07_5_1_06
 * @property number $2_08
 * @property number $2_08_5_1_06
 * @property number $2_09
 * @property number $2_09_5_1_06
 * @property number $2_10
 * @property number $2_10_5_1_06
 * @property number $2_11
 * @property number $2_11_5_1_06
 * @property number $2_12
 * @property number $2_12_5_1_06
 * @property number $2_13
 * @property number $2_13_5_1_06
 * @property number $2_14
 * @property number $2_14_5_1_06
 * @property number $2_15
 * @property number $2_15_5_1_06
 * @property number $2_16
 * @property number $2_16_5_1_06
 * @property number $2_17
 * @property number $2_17_5_1_06
 * @property number $2_18
 * @property number $2_18_5_1_06
 * @property number $2_19
 * @property number $2_19_5_1_06
 * @property number $2_20
 * @property number $2_20_5_1_06
 * @property number $2_21
 * @property number $2_21_5_1_06
 * @property number $2_22
 * @property number $2_22_5_1_06
 * @property number $2_23
 * @property number $2_23_5_1_06
 * @property number $2_24
 * @property number $2_24_5_1_06
 * @property number $3
 * @property number $3_25
 * @property number $3_25_5_1_06
 * @property number $3_26
 * @property number $3_26_5_1_06
 * @property number $3_27
 * @property number $3_27_5_1_06
 * @property number $3_28
 * @property number $3_28_5_1_06
 * @property number $3_29
 * @property number $3_29_5_1_06
 * @property number $3_30
 * @property number $3_30_5_1_06
 * @property number $3_31
 * @property number $3_31_5_1_06
 * @property number $3_32
 * @property number $3_32_5_1_06
 * @property number $4
 * @property number $4_01
 * @property number $4_01_5_1_06
 * @property number $4_02
 * @property number $4_02_5_1_06
 * @property number $5
 * @property number $5_01
 * @property number $5_01_5_1_06
 * @property number $5_02
 * @property number $5_02_5_1_06
 * @property number $5_03
 * @property number $5_03_5_1_06
 * @property number $5_04
 * @property number $5_04_5_1_06
 * @property number $5_05
 * @property number $5_05_5_1_06
 * @property number $5_06
 * @property number $5_06_5_1_06
 * @property number $5_07
 * @property number $5_07_5_1_06
 * @property number $6
 * @property number $6_01
 * @property number $6_01_5_1_06
 * @property number $7
 * @property number $7_01
 * @property number $7_01_5_1_06
 * @property number $8
 * @property number $8_01
 * @property number $8_01_5_1_06
 * @property number $9
 * @property number $9_01
 * @property number $9_01_5_1_06
 * @property number $9_02
 * @property number $9_02_5_1_06
 * @property number $9_03
 * @property number $9_03_5_1_06
 * @property number $9_04
 * @property number $9_04_5_1_06
 * @property number $9_05
 * @property number $9_05_5_1_06
 */
class DaftarPemdaBaseline extends Model
{

    use HasFactory;

    public $table = 'data_baseline';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'no_perkada_bansos',
        'tgl_perkada_bansos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'no_perkada_bansos' => 'string',
        'tgl_perkada_bansos' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'no_perkada_bansos' => 'nullable|string|max:255',
        'tgl_perkada_bansos' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
