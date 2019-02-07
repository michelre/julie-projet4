<?php

require_once "model/Post.php";

class PostDao
{
    public function findAll()
    {
        $p1 = new Post();
        $p1
            ->setId(1)
            ->setTitle('Title 1')
            ->setContent('Content 1');

        $p2 = new Post();
        $p2
            ->setId(2)
            ->setTitle('Title 2')
            ->setContent('Content 2');

        return [$p1, $p2];

    }

    public function findById($id)
    {
        $p = new Post();
        $p
            ->setId($id)
            ->setTitle('Title ' . $id)
            ->setContent('Content ' . $id);
        return $p;
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
