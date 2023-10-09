<?php

namespace App\Repositories;

use App\Models\DaftarOpd;
use App\Repositories\BaseRepository;

/**
 * Class DaftarOpdRepository
 * @package App\Repositories
 * @version October 8, 2023, 4:16 am UTC
*/

class DaftarOpdRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kd_column',
        'kd_opd',
        'level',
        'urusan',
        'opd'
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
        return DaftarOpd::class;
    }
}
