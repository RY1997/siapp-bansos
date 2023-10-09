<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class UjiAktBansos
 * @package App\Models
 * @version October 8, 2023, 5:28 am UTC
 *
 * @property string $kd_pemda
 * @property string $kd_opd
 * @property string $nm_opd
 * @property string $kd_rek
 * @property string $uji_nm_aktivitas
 * @property string $uji_bansos_sejenis
 * @property number $uji_anggaran
 * @property number $uji_realisasi
 * @property integer $uji_kpm
 * @property string $satuan_kpm
 * @property string $uji_juknis
 * @property string $bentuk_juknis
 * @property string $uji_basis_salur
 * @property string $uji_monev
 */
class UjiAktBansos extends Model
{

    use HasFactory;

    public $table = 'mon_bansos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'kd_pemda',
        'kd_opd',
        'nm_opd',
        'kd_rek',
        'uji_nm_aktivitas',
        'uji_bansos_sejenis',
        'uji_anggaran',
        'uji_realisasi',
        'uji_kpm',
        'satuan_kpm',
        'uji_juknis',
        'bentuk_juknis',
        'uji_basis_salur',
        'uji_monev'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kd_pemda' => 'string',
        'kd_opd' => 'string',
        'nm_opd' => 'string',
        'kd_rek' => 'string',
        'uji_nm_aktivitas' => 'string',
        'uji_bansos_sejenis' => 'string',
        'uji_anggaran' => 'decimal:2',
        'uji_realisasi' => 'decimal:2',
        'uji_kpm' => 'integer',
        'satuan_kpm' => 'string',
        'uji_juknis' => 'string',
        'bentuk_juknis' => 'string',
        'uji_basis_salur' => 'string',
        'uji_monev' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kd_pemda' => 'required|string|max:255',
        'kd_opd' => 'required|string|max:255',
        'nm_opd' => 'required|string|max:255',
        'kd_rek' => 'required|string|max:255',
        'uji_nm_aktivitas' => 'required|string',
        'uji_bansos_sejenis' => 'required|string|max:255',
        'uji_anggaran' => 'required|numeric',
        'uji_realisasi' => 'required|numeric',
        'uji_kpm' => 'required|integer',
        'satuan_kpm' => 'required|string|max:255',
        'uji_juknis' => 'required|string|max:255',
        'bentuk_juknis' => 'required|string|max:255',
        'uji_basis_salur' => 'required|string|max:255',
        'uji_monev' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
