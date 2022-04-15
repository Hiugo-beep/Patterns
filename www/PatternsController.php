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

    public function useObserver(){
        $news = new News();
        $subscriber = new Subscriber();

        $news->addObserver($subscriber);


        $news->updatePost("Только что пропала собака");
        $news->updatePost("Только что собака нашлась");
        $news->updatePost("Только что собака вернулась к своим хозяевам");


        $news->removeObserver($subscriber);

        $news->updatePost("Только что пропала собака");
        $news->updatePost("Только что собака нашлась");
        $news->updatePost("Только что собака вернулась к своим хозяевам");

        $news->addObserver($subscriber);

        $news->updatePost("Только что пропала кошка");
        $news->updatePost("Только что кошка нашлась");
        $news->updatePost("Только что кошка вернулась к своим хозяевам");
    }
}