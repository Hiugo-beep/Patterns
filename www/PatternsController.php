<?php


class PatternsController{

    public function useBuilder(){
        $name = 'Строитель (Builder)';
        $description = PostBuilderManager::getDescription();

        $builder = new PostBuilderImpl();

        $manager = new PostBuilderManager($builder);

        $posts[] = $manager->createPostClean();
        $posts[] = $manager->createPostIT();
        $posts[] = $manager->createPostCats();

        print_r($posts);


    }
}