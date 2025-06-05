<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tb_users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id', 'nama', 'jenis_kelamin', 'dr', 'unit', 'id_perusahaan', 'bagian', 'tgl_mcu', 'tgl', 'berat_badan', 'tinggi_badan', 'tekanan_darah', 'nadi', 'status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getUserId($name)
    {
        return $this->select('id')
            ->where('nama', $name)
            ->orderBy('id', 'DESC')
            ->first();
    }

    public function getUserById($id)
    {
        return $this->select('tb_users.*, tb_check.*, tb_mata.*, tb_tht.*, tb_mulut.*, tb_dada.*, tb_perut.*, tb_ekstrimitas.*')
            ->join('tb_check', 'tb_users.id = tb_check.id_user')
            ->join('tb_mata', 'tb_users.id = tb_mata.id_user')
            ->join('tb_tht', 'tb_users.id = tb_tht.id_user')
            ->join('tb_mulut', 'tb_users.id = tb_mulut.id_user')
            ->join('tb_dada', 'tb_users.id = tb_dada.id_user')
            ->join('tb_perut', 'tb_users.id = tb_perut.id_user')
            ->join('tb_ekstrimitas', 'tb_users.id = tb_ekstrimitas.id_user')
            ->where('tb_users.id', $id)
            ->first();
    }

    public function getDetailLabById($id)
    {
        return $this->select('tb_users.*, tb_lab.*, tb_lab.id as idlab , tb_perusahaan.nama_perusahaan')
            ->join('tb_lab', 'tb_users.id = tb_lab.id_user')
            ->join('tb_perusahaan', 'tb_users.id_perusahaan = tb_perusahaan.id', 'left')
            ->where('tb_users.id', $id)
            ->where('tb_users.id', $id)
            ->first();
    }

    public function getUserLabById($id)
    {
        return $this->select('tb_users.*, tb_perusahaan.nama_perusahaan')
            ->join('tb_perusahaan', 'tb_users.id_perusahaan = tb_perusahaan.id', 'left')
            ->where('tb_users.id', $id)
            ->first();
    }

    public function getJkById($id)
    {
        return $this->select('jenis_kelamin')
            ->where('id', $id)
            ->first();
    }
}
