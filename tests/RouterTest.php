<?php 
namespace Test;

use PHPUnit\Framework\TestCase;
use Routers\Router;

class RouterTest extends TestCase {
    public function test_router() {
        $router = new Router();
        $html = $router->route( "http://localhost/orders" );
        $pos= mb_strpos($html, "Создание заказа 123214235345щр");
        $this->assertNotFalse( $pos>=0);
    }
        public function test_router1() {
            $router = new Router();
            $html = $router->route( "http://localhost" );
            $pos= mb_strpos($html, "Посетите наш магазин");
            $this->assertNotFalse( $pos>=0);
        }
        public function test_router3() {
            $router = new Router();
            $html = $router->route( "http://localhost/products" );
            $pos= mb_strpos($html, "Добавить в корзину");
            $this->assertNotFalse( $pos>=0);
    }
}