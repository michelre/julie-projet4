<?php

require_once "dao/PostDao.php";

class FrontendController
{

    private $postDao;

    public function __construct()
    {
        $this->postDao = new PostDao();
    }

    /**
     * URL: /
     */
    public function home()
    {
        /** @var Post[] $posts */
        $posts = $this->postDao->findAll();
        include_once 'view/home.php';

    }

    /**
     * URL: /?action=detailPost&postId=2
     */
    public function detailPost($postId)
    {
        $post = $this->postDao->findById($postId);
        include_once 'view/detail.php';

    }

}
