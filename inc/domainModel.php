<?php
define('BASE_URL', 'http://localhost:8080/bormiolirocco/bootstrap/');
require_once('rb.php');
R::setup('mysql:host=localhost;dbname=bormiolirocco','root','admin');
//R::$writer->setUseCache(true);

class Model_Product_Groups extends RedBean_SimpleModel {
        public function getCategories() {
            return R::find('categories',
            ' product_group_id = ? order by `id` asc',array(
            $this->id));
        }
    }
	
class Model_Product_Lines extends RedBean_SimpleModel {
        public function getProducts() {
            return R::find('products',
            ' line_id = ? order by `id` asc',array(
            $this->id));
        }
    }
	
class Model_Products extends RedBean_SimpleModel {
		 public function getSpecs() {
            return R::find('product_specs',
            ' id = ? ',array(
            $this->spec_id));
        }
    }
?>