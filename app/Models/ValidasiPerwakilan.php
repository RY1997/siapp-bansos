<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ValidasiPerwakilan
 * @package App\Models
 * @version October 26, 2023, 3:37 pm UTC
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
 * @property number $a_5_3
 * @property number $r_5_3
 * @property number $5_1_06
 * @property number $a_5_1_06
 * @property number $r_5_1_06
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
class ValidasiPerwakilan extends Model
{

    use HasFactory;

    public $table = 'data_baseline';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'kd_pwk',
        'nm_pemda',
        'no_perda',
        'tgl_perda',
        'no_perkada_bansos',
        'tgl_perkada_bansos',
        'link',
        'status',
        'belanja_daerah',
        'a_belanja_daerah',
        'r_belanja_daerah',
        '5_1_02_01_01_0039',
        '5_1_02_02_02',
        '5_1_02_02_02_0001',
        '5_1_02_02_02_0002',
        '5_1_02_02_02_0003',
        '5_1_02_02_02_0004',
        '5_1_02_02_02_0005',
        '5_1_02_02_02_0006',
        '5_1_02_02_02_0007',
        '5_1_02_02_02_0008',
        '5_1_02_02_02_0009',
        '5_3',
        'a_5_3',
        'r_5_3',
        '5_1_06',
        'a_5_1_06',
        'r_5_1_06',
        '5_1_06_01',
        '5_1_06_01_01',
        '5_1_06_01_01_0001',
        '5_1_06_01_02',
        '5_1_06_01_02_0001',
        '5_1_06_02',
        '5_1_06_02_01',
        '5_1_06_02_01_0001',
        '5_1_06_02_02',
        '5_1_06_02_02_0001',
        '5_1_06_03',
        '5_1_06_03_01',
        '5_1_06_03_01_0001',
        '5_1_06_03_02',
        '5_1_06_03_02_0001',
        '5_1_06_04',
        '5_1_06_04_01',
        '5_1_06_04_01_0001',
        '5_1_06_04_02',
        '5_1_06_04_02_0001',
        '5_1_06_urusan',
        '1',
        '1_01',
        '1_01_5_1_06',
        '1_02',
        '1_02_5_1_06',
        '1_03',
        '1_03_5_1_06',
        '1_04',
        '1_04_5_1_06',
        '1_05',
        '1_05_5_1_06',
        '1_06',
        '1_06_5_1_06',
        '2',
        '2_07',
        '2_07_5_1_06',
        '2_08',
        '2_08_5_1_06',
        '2_09',
        '2_09_5_1_06',
        '2_10',
        '2_10_5_1_06',
        '2_11',
        '2_11_5_1_06',
        '2_12',
        '2_12_5_1_06',
        '2_13',
        '2_13_5_1_06',
        '2_14',
        '2_14_5_1_06',
        '2_15',
        '2_15_5_1_06',
        '2_16',
        '2_16_5_1_06',
        '2_17',
        '2_17_5_1_06',
        '2_18',
        '2_18_5_1_06',
        '2_19',
        '2_19_5_1_06',
        '2_20',
        '2_20_5_1_06',
        '2_21',
        '2_21_5_1_06',
        '2_22',
        '2_22_5_1_06',
        '2_23',
        '2_23_5_1_06',
        '2_24',
        '2_24_5_1_06',
        '3',
        '3_25',
        '3_25_5_1_06',
        '3_26',
        '3_26_5_1_06',
        '3_27',
        '3_27_5_1_06',
        '3_28',
        '3_28_5_1_06',
        '3_29',
        '3_29_5_1_06',
        '3_30',
        '3_30_5_1_06',
        '3_31',
        '3_31_5_1_06',
        '3_32',
        '3_32_5_1_06',
        '4',
        '4_01',
        '4_01_5_1_06',
        '4_02',
        '4_02_5_1_06',
        '5',
        '5_01',
        '5_01_5_1_06',
        '5_02',
        '5_02_5_1_06',
        '5_03',
        '5_03_5_1_06',
        '5_04',
        '5_04_5_1_06',
        '5_05',
        '5_05_5_1_06',
        '5_06',
        '5_06_5_1_06',
        '5_07',
        '5_07_5_1_06',
        '6',
        '6_01',
        '6_01_5_1_06',
        '7',
        '7_01',
        '7_01_5_1_06',
        '8',
        '8_01',
        '8_01_5_1_06',
        '9',
        '9_01',
        '9_01_5_1_06',
        '9_02',
        '9_02_5_1_06',
        '9_03',
        '9_03_5_1_06',
        '9_04',
        '9_04_5_1_06',
        '9_05',
        '9_05_5_1_06'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kd_pwk' => 'string',
        'nm_pemda' => 'string',
        'no_perda' => 'string',
        'tgl_perda' => 'date',
        'no_perkada_bansos' => 'string',
        'tgl_perkada_bansos' => 'date',
        'link' => 'string',
        'status' => 'string',
        'belanja_daerah' => 'decimal:2',
        'a_belanja_daerah' => 'decimal:2',
        'r_belanja_daerah' => 'decimal:2',
        '5_1_02_01_01_0039' => 'decimal:2',
        '5_1_02_02_02' => 'decimal:2',
        '5_1_02_02_02_0001' => 'decimal:2',
        '5_1_02_02_02_0002' => 'decimal:2',
        '5_1_02_02_02_0003' => 'decimal:2',
        '5_1_02_02_02_0004' => 'decimal:2',
        '5_1_02_02_02_0005' => 'decimal:2',
        '5_1_02_02_02_0006' => 'decimal:2',
        '5_1_02_02_02_0007' => 'decimal:2',
        '5_1_02_02_02_0008' => 'decimal:2',
        '5_1_02_02_02_0009' => 'decimal:2',
        '5_3' => 'decimal:2',
        'a_5_3' => 'decimal:2',
        'r_5_3' => 'decimal:2',
        '5_1_06' => 'decimal:2',
        'a_5_1_06' => 'decimal:2',
        'r_5_1_06' => 'decimal:2',
        '5_1_06_01' => 'decimal:2',
        '5_1_06_01_01' => 'decimal:2',
        '5_1_06_01_01_0001' => 'decimal:2',
        '5_1_06_01_02' => 'decimal:2',
        '5_1_06_01_02_0001' => 'decimal:2',
        '5_1_06_02' => 'decimal:2',
        '5_1_06_02_01' => 'decimal:2',
        '5_1_06_02_01_0001' => 'decimal:2',
        '5_1_06_02_02' => 'decimal:2',
        '5_1_06_02_02_0001' => 'decimal:2',
        '5_1_06_03' => 'decimal:2',
        '5_1_06_03_01' => 'decimal:2',
        '5_1_06_03_01_0001' => 'decimal:2',
        '5_1_06_03_02' => 'decimal:2',
        '5_1_06_03_02_0001' => 'decimal:2',
        '5_1_06_04' => 'decimal:2',
        '5_1_06_04_01' => 'decimal:2',
        '5_1_06_04_01_0001' => 'decimal:2',
        '5_1_06_04_02' => 'decimal:2',
        '5_1_06_04_02_0001' => 'decimal:2',
        '5_1_06_urusan' => 'decimal:2',
        '1' => 'decimal:2',
        '1_01' => 'decimal:2',
        '1_01_5_1_06' => 'decimal:2',
        '1_02' => 'decimal:2',
        '1_02_5_1_06' => 'decimal:2',
        '1_03' => 'decimal:2',
        '1_03_5_1_06' => 'decimal:2',
        '1_04' => 'decimal:2',
        '1_04_5_1_06' => 'decimal:2',
        '1_05' => 'decimal:2',
        '1_05_5_1_06' => 'decimal:2',
        '1_06' => 'decimal:2',
        '1_06_5_1_06' => 'decimal:2',
        '2' => 'decimal:2',
        '2_07' => 'decimal:2',
        '2_07_5_1_06' => 'decimal:2',
        '2_08' => 'decimal:2',
        '2_08_5_1_06' => 'decimal:2',
        '2_09' => 'decimal:2',
        '2_09_5_1_06' => 'decimal:2',
        '2_10' => 'decimal:2',
        '2_10_5_1_06' => 'decimal:2',
        '2_11' => 'decimal:2',
        '2_11_5_1_06' => 'decimal:2',
        '2_12' => 'decimal:2',
        '2_12_5_1_06' => 'decimal:2',
        '2_13' => 'decimal:2',
        '2_13_5_1_06' => 'decimal:2',
        '2_14' => 'decimal:2',
        '2_14_5_1_06' => 'decimal:2',
        '2_15' => 'decimal:2',
        '2_15_5_1_06' => 'decimal:2',
        '2_16' => 'decimal:2',
        '2_16_5_1_06' => 'decimal:2',
        '2_17' => 'decimal:2',
        '2_17_5_1_06' => 'decimal:2',
        '2_18' => 'decimal:2',
        '2_18_5_1_06' => 'decimal:2',
        '2_19' => 'decimal:2',
        '2_19_5_1_06' => 'decimal:2',
        '2_20' => 'decimal:2',
        '2_20_5_1_06' => 'decimal:2',
        '2_21' => 'decimal:2',
        '2_21_5_1_06' => 'decimal:2',
        '2_22' => 'decimal:2',
        '2_22_5_1_06' => 'decimal:2',
        '2_23' => 'decimal:2',
        '2_23_5_1_06' => 'decimal:2',
        '2_24' => 'decimal:2',
        '2_24_5_1_06' => 'decimal:2',
        '3' => 'decimal:2',
        '3_25' => 'decimal:2',
        '3_25_5_1_06' => 'decimal:2',
        '3_26' => 'decimal:2',
        '3_26_5_1_06' => 'decimal:2',
        '3_27' => 'decimal:2',
        '3_27_5_1_06' => 'decimal:2',
        '3_28' => 'decimal:2',
        '3_28_5_1_06' => 'decimal:2',
        '3_29' => 'decimal:2',
        '3_29_5_1_06' => 'decimal:2',
        '3_30' => 'decimal:2',
        '3_30_5_1_06' => 'decimal:2',
        '3_31' => 'decimal:2',
        '3_31_5_1_06' => 'decimal:2',
        '3_32' => 'decimal:2',
        '3_32_5_1_06' => 'decimal:2',
        '4' => 'decimal:2',
        '4_01' => 'decimal:2',
        '4_01_5_1_06' => 'decimal:2',
        '4_02' => 'decimal:2',
        '4_02_5_1_06' => 'decimal:2',
        '5' => 'decimal:2',
        '5_01' => 'decimal:2',
        '5_01_5_1_06' => 'decimal:2',
        '5_02' => 'decimal:2',
        '5_02_5_1_06' => 'decimal:2',
        '5_03' => 'decimal:2',
        '5_03_5_1_06' => 'decimal:2',
        '5_04' => 'decimal:2',
        '5_04_5_1_06' => 'decimal:2',
        '5_05' => 'decimal:2',
        '5_05_5_1_06' => 'decimal:2',
        '5_06' => 'decimal:2',
        '5_06_5_1_06' => 'decimal:2',
        '5_07' => 'decimal:2',
        '5_07_5_1_06' => 'decimal:2',
        '6' => 'decimal:2',
        '6_01' => 'decimal:2',
        '6_01_5_1_06' => 'decimal:2',
        '7' => 'decimal:2',
        '7_01' => 'decimal:2',
        '7_01_5_1_06' => 'decimal:2',
        '8' => 'decimal:2',
        '8_01' => 'decimal:2',
        '8_01_5_1_06' => 'decimal:2',
        '9' => 'decimal:2',
        '9_01' => 'decimal:2',
        '9_01_5_1_06' => 'decimal:2',
        '9_02' => 'decimal:2',
        '9_02_5_1_06' => 'decimal:2',
        '9_03' => 'decimal:2',
        '9_03_5_1_06' => 'decimal:2',
        '9_04' => 'decimal:2',
        '9_04_5_1_06' => 'decimal:2',
        '9_05' => 'decimal:2',
        '9_05_5_1_06' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kd_pwk' => 'required|string|max:255',
        'nm_pemda' => 'required|string|max:255',
        'no_perda' => 'required|string|max:255',
        'tgl_perda' => 'nullable',
        'no_perkada_bansos' => 'nullable|string|max:255',
        'tgl_perkada_bansos' => 'nullable',
        'link' => 'nullable|string',
        'status' => 'required|string|max:255',
        'belanja_daerah' => 'required|numeric',
        'a_belanja_daerah' => 'required|numeric',
        'r_belanja_daerah' => 'required|numeric',
        '5_1_02_01_01_0039' => 'required|numeric',
        '5_1_02_02_02' => 'required|numeric',
        '5_1_02_02_02_0001' => 'required|numeric',
        '5_1_02_02_02_0002' => 'required|numeric',
        '5_1_02_02_02_0003' => 'required|numeric',
        '5_1_02_02_02_0004' => 'required|numeric',
        '5_1_02_02_02_0005' => 'required|numeric',
        '5_1_02_02_02_0006' => 'required|numeric',
        '5_1_02_02_02_0007' => 'required|numeric',
        '5_1_02_02_02_0008' => 'required|numeric',
        '5_1_02_02_02_0009' => 'required|numeric',
        '5_3' => 'required|numeric',
        'a_5_3' => 'required|numeric',
        'r_5_3' => 'required|numeric',
        '5_1_06' => 'required|numeric',
        'a_5_1_06' => 'required|numeric',
        'r_5_1_06' => 'required|numeric',
        '5_1_06_01' => 'required|numeric',
        '5_1_06_01_01' => 'required|numeric',
        '5_1_06_01_01_0001' => 'required|numeric',
        '5_1_06_01_02' => 'required|numeric',
        '5_1_06_01_02_0001' => 'required|numeric',
        '5_1_06_02' => 'required|numeric',
        '5_1_06_02_01' => 'required|numeric',
        '5_1_06_02_01_0001' => 'required|numeric',
        '5_1_06_02_02' => 'required|numeric',
        '5_1_06_02_02_0001' => 'required|numeric',
        '5_1_06_03' => 'required|numeric',
        '5_1_06_03_01' => 'required|numeric',
        '5_1_06_03_01_0001' => 'required|numeric',
        '5_1_06_03_02' => 'required|numeric',
        '5_1_06_03_02_0001' => 'required|numeric',
        '5_1_06_04' => 'required|numeric',
        '5_1_06_04_01' => 'required|numeric',
        '5_1_06_04_01_0001' => 'required|numeric',
        '5_1_06_04_02' => 'required|numeric',
        '5_1_06_04_02_0001' => 'required|numeric',
        '5_1_06_urusan' => 'required|numeric',
        '1' => 'required|numeric',
        '1_01' => 'required|numeric',
        '1_01_5_1_06' => 'required|numeric',
        '1_02' => 'required|numeric',
        '1_02_5_1_06' => 'required|numeric',
        '1_03' => 'required|numeric',
        '1_03_5_1_06' => 'required|numeric',
        '1_04' => 'required|numeric',
        '1_04_5_1_06' => 'required|numeric',
        '1_05' => 'required|numeric',
        '1_05_5_1_06' => 'required|numeric',
        '1_06' => 'required|numeric',
        '1_06_5_1_06' => 'required|numeric',
        '2' => 'required|numeric',
        '2_07' => 'required|numeric',
        '2_07_5_1_06' => 'required|numeric',
        '2_08' => 'required|numeric',
        '2_08_5_1_06' => 'required|numeric',
        '2_09' => 'required|numeric',
        '2_09_5_1_06' => 'required|numeric',
        '2_10' => 'required|numeric',
        '2_10_5_1_06' => 'required|numeric',
        '2_11' => 'required|numeric',
        '2_11_5_1_06' => 'required|numeric',
        '2_12' => 'required|numeric',
        '2_12_5_1_06' => 'required|numeric',
        '2_13' => 'required|numeric',
        '2_13_5_1_06' => 'required|numeric',
        '2_14' => 'required|numeric',
        '2_14_5_1_06' => 'required|numeric',
        '2_15' => 'required|numeric',
        '2_15_5_1_06' => 'required|numeric',
        '2_16' => 'required|numeric',
        '2_16_5_1_06' => 'required|numeric',
        '2_17' => 'required|numeric',
        '2_17_5_1_06' => 'required|numeric',
        '2_18' => 'required|numeric',
        '2_18_5_1_06' => 'required|numeric',
        '2_19' => 'required|numeric',
        '2_19_5_1_06' => 'required|numeric',
        '2_20' => 'required|numeric',
        '2_20_5_1_06' => 'required|numeric',
        '2_21' => 'required|numeric',
        '2_21_5_1_06' => 'required|numeric',
        '2_22' => 'required|numeric',
        '2_22_5_1_06' => 'required|numeric',
        '2_23' => 'required|numeric',
        '2_23_5_1_06' => 'required|numeric',
        '2_24' => 'required|numeric',
        '2_24_5_1_06' => 'required|numeric',
        '3' => 'required|numeric',
        '3_25' => 'required|numeric',
        '3_25_5_1_06' => 'required|numeric',
        '3_26' => 'required|numeric',
        '3_26_5_1_06' => 'required|numeric',
        '3_27' => 'required|numeric',
        '3_27_5_1_06' => 'required|numeric',
        '3_28' => 'required|numeric',
        '3_28_5_1_06' => 'required|numeric',
        '3_29' => 'required|numeric',
        '3_29_5_1_06' => 'required|numeric',
        '3_30' => 'required|numeric',
        '3_30_5_1_06' => 'required|numeric',
        '3_31' => 'required|numeric',
        '3_31_5_1_06' => 'required|numeric',
        '3_32' => 'required|numeric',
        '3_32_5_1_06' => 'required|numeric',
        '4' => 'required|numeric',
        '4_01' => 'required|numeric',
        '4_01_5_1_06' => 'required|numeric',
        '4_02' => 'required|numeric',
        '4_02_5_1_06' => 'required|numeric',
        '5' => 'required|numeric',
        '5_01' => 'required|numeric',
        '5_01_5_1_06' => 'required|numeric',
        '5_02' => 'required|numeric',
        '5_02_5_1_06' => 'required|numeric',
        '5_03' => 'required|numeric',
        '5_03_5_1_06' => 'required|numeric',
        '5_04' => 'required|numeric',
        '5_04_5_1_06' => 'required|numeric',
        '5_05' => 'required|numeric',
        '5_05_5_1_06' => 'required|numeric',
        '5_06' => 'required|numeric',
        '5_06_5_1_06' => 'required|numeric',
        '5_07' => 'required|numeric',
        '5_07_5_1_06' => 'required|numeric',
        '6' => 'required|numeric',
        '6_01' => 'required|numeric',
        '6_01_5_1_06' => 'required|numeric',
        '7' => 'required|numeric',
        '7_01' => 'required|numeric',
        '7_01_5_1_06' => 'required|numeric',
        '8' => 'required|numeric',
        '8_01' => 'required|numeric',
        '8_01_5_1_06' => 'required|numeric',
        '9' => 'nullable|numeric',
        '9_01' => 'nullable|numeric',
        '9_01_5_1_06' => 'nullable|numeric',
        '9_02' => 'nullable|numeric',
        '9_02_5_1_06' => 'nullable|numeric',
        '9_03' => 'nullable|numeric',
        '9_03_5_1_06' => 'nullable|numeric',
        '9_04' => 'nullable|numeric',
        '9_04_5_1_06' => 'nullable|numeric',
        '9_05' => 'nullable|numeric',
        '9_05_5_1_06' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
