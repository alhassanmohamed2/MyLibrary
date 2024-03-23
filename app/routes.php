 <?php
use App\Core\Router;

   $router = new Router();
    $router->get('', 'MainController@index');
    $router->post('update', 'MainController@update');
    