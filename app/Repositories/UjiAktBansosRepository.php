<?php

namespace App\Repositories;

use App\Models\UjiAktBansos;
use App\Repositories\BaseRepository;

/**
 * Class UjiAktBansosRepository
 * @package App\Repositories
 * @version October 8, 2023, 5:28 am UTC
*/

class UjiAktBansosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UjiAktBansos::class;
    }
}
