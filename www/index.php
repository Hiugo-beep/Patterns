<?php
include('builder/AutoloaderBuilder.php');
include('observer/AutoloaderObserver.php');
include('iterator/AutoloaderIterator.php');
include('facade/AutoloaderFacade.php');
include('factory/AutoloaderFactory.php');
include('singleton/Singleton.php');

##  http://localhost:81/?command=

$controller = new PatternsController();

if (isset($_GET['command'])) {
    switch ($_GET['command']) {
        case "Builder":
            echo "Implement Builder:<br><br>";
            $controller->useBuilder();
            break;
        case "Observer":
            echo "Implement Observer:<br><br>";
            $controller->useObserver();
            break;
        case "Iterator":
            echo "Implement Iterator:<br><br>";
            $controller->useIterator();
            break;
        case "Singleton":
            echo "Implement Singleton:<br><br>";
            $controller->useSingleton();
            break;
        case "Facade":
            echo "Implement Facade:<br><br>";
            $controller->useFacade();
            break;
        case "Factory":
            echo "Implement Factory:<br><br>";
            $controller->useFactory();
            break;
        default:
            $pathToFile = '/index.html';
            if (file_exists($pathToFile)) {
                $GetContentFile = file_get_contents($pathToFile);
                echo $GetContentFile;
            }
    }
    echo "<p><a href=\"http://localhost:81/?\">Return back</a></p>";

} else {
    $pathToFile = 'index.html';
    if (file_exists($pathToFile)) {
        $GetContentFile = file_get_contents($pathToFile);
        echo $GetContentFile;
    }
}
