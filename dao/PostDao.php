<?php

require_once "model/Post.php";
require_once "BaseDao.php";

class PostDao extends BaseDao
{
    public function findAll()
    {
        $stmt = $this->db->prepare('SELECT * FROM post');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, Post::class);
    }

    public function findById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM post WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetchObject(Post::class);
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
