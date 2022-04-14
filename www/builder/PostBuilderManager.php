<?php

class PostBuilderManager{

    private $builder;

    public static function getDescription():String{
        return "Это пример использования паттерна Билдер";
    }
    public function __construct(PostBuilderImpl $builder){
        $this->builder = $builder;
    }

    public function createPostClean():Post {
        return $post = $this->builder->getPost();
    }

    public function createPostIT(){
        return $post = $this->builder
            ->setTitlePost('Новый IT пост')
            ->setBodyPost('Какое клевое содрежание у этой статьи')
            ->setAuthorPost('Какой-то IT блогер')
            ->setCategoriesPost([
                'IT project post',
            ])
            ->setTagsPost([
                'IT new',
                'IT help'
            ])
            ->getPost();
    }

    public function createPostCats() :Post {
        return $post = $this->builder
            ->setTitlePost('Новая статья про котов')
            ->setBodyPost('Новая информация о поглаживании котов')
            ->setAuthorPost('Какой-то любитель котиков')
            ->setCategoriesPost([
                'animals',
            ])
            ->setTagsPost([
                'cute',
                'adorable',
            ])
            ->getPost();
    }

}

