<?php
define('BASE_URL', 'http://localhost:8080/bormiolirocco/bootstrap/');
require_once('rb.php');
R::setup('mysql:host=localhost;dbname=bormiolirocco','root','admin');
R::$writer->setUseCache(true);

class Model_Product_Groups extends RedBean_SimpleModel {
        public function getCategories() {
            return R::find('categories',
            ' product_group_id = ? ',array(
            $this->id));
        }
    }
?>