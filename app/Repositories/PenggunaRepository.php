<?php

namespace App\Repositories;

use App\Models\Pengguna;
use App\Repositories\BaseRepository;

/**
 * Class PenggunaRepository
 * @package App\Repositories
 * @version October 7, 2023, 8:18 pm UTC
*/

class PenggunaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'role',
        'kd_pwk',
        'nm_pemda',
        'remember_token'
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
        return Pengguna::class;
    }
}
