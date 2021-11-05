<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table                = 'posts';
    protected $primaryKey           = 'post_id';
    protected $allowedFields        = ['judul', 'deskripsi', 'gambar', 'author', 'kategori', 'slug', 'created_at', 'update_at'];
    protected $useTimestamps        = true;

    public function getPosts($slug = false){
        if($slug == false){
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

}

