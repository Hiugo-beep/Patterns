<?php


class PatternsController
{


    public function useFactory()
    {
        $role = 'User';

        /*switch ($role) {
            case 'Admin':
                $login = new Admin();
                break;
            case 'Moderator':
                $login = new Moderator();
                break;
            case 'User':
                $login = new User();
                break;
            case 'Guest':
                $login = new Guest();
                break;
            default:
                break;
        }

        var_dump($login);
        */
        $login = Factory::createUsers($role);
        var_dump($login);
    }

    public function useSingleton()
    {
        #var_dump(Singleton::getSingle());
        $temp = Singleton::getSingle();
        $temp->setSum(5);

        $temp2 = Singleton::getSingle();
        echo $temp2->getSum();
    }

    public function useBuilder()
    {
        $name = 'Строитель (Builder)';
        $description = PostBuilderManager::getDescription();

        $builder = new PostBuilderImpl();

        $manager = new PostBuilderManager($builder);

        $posts[] = $manager->createPostClean();
        $posts[] = $manager->createPostIT();
        $posts[] = $manager->createPostCats();

        print_r($posts);


    }

    public function useObserver()
    {
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

    public function useIterator()
    {
        $csv = new IteratorCSV(__DIR__ . '/resources/cats.csv');

        foreach ($csv as $key => $row) {
            print_r($row);
        }
    }

    public function useFacade()
    {
        $facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
        $facade->downloadVideo("https://www.youtube.com/watch?v=dQw4w9WgXcQ");
    }


    public function useDecorator()
    {
        $dangerousComment =
            <<<HERE
                Hello! Nice blog post!
                Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
                <script src="http://www.iwillhackyou.com/script.js">
                  performXSSAttack();
                </script>
HERE;

        $naiveInput = new TextInput();
        echo "Website renders comments without filtering (unsafe):\n";
        echo $naiveInput->formatText($dangerousComment);

        echo "\n\n\n";

        $filteredInput = new  DangerousHTMLTagsFilter($naiveInput);
        echo "Website renders comments after stripping all tags (safe):\n";
        echo $filteredInput->formatText($dangerousComment);

        echo "\n\n\n";
    }

    public function useProxy()
    {

    }
}