<?php

namespace App\Models;

use CodeIgniter\Model;

class BookmarkModel extends Model
{

    protected $DBGroup = 'default';
    protected $table = 'bookmark';
    protected $primaryKey = 'id_bookmark';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDelete = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'id_user',
        'id_artikel'
    ];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';
    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];

    public function getBookmark($key)
    {
        return $this->db->table('bookmark')
            ->join('artikel', 'artikel.id_artikel = bookmark.id_artikel')
            ->where('id_user', $key)
            ->get()->getResultArray();
    }

    public function getBookmarkDetail($key)
    {
        return $this->db->table('bookmark')
            ->join('artikel', 'artikel.id_artikel = bookmark.id_artikel')
            ->where('id_bookmark', $key)
            ->get()->getResultArray();
    }
}
