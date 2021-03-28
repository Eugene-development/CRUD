<?php


namespace App\Http\Contracts;


interface PostContract
{
    public function getPostOne($id);
    public function getPostsAll();
    public function getPostsCategory($category);
    public function getPostsSearch($search);
    public function getPostsNew();
    public function getPostsAction();
    public function getPostsBestseller();
    public function getPostsSimilar();
}
