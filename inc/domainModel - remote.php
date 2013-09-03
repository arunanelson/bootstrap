<?php
define('BASE_URL', 'http://anelson.net76.net/');
require_once('rb.php');
R::setup('mysql:host=mysql2.000webhost.com;dbname=a7665030_br','a7665030_user','nelson1');
R::$writer->setUseCache(true);

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
            ' line_id = ? ',array(
            $this->id));
        }
    }
	
class Model_Products extends RedBean_SimpleModel {
        public function getColours() {
            return R::find('product_colours',
            ' product_id = ? ',array(
            $this->id));
        }
		 public function getSpecs() {
            return R::find('product_specs',
            ' id = ? ',array(
            $this->spec_id));
        }
    }
?>