<?php
/**
 * Created by PhpStorm.
 *
 * This is a model example
 * User: mmunoz
 * Date: 3/09/18
 * Time: 9:40
 */

class Product extends \GLFramework\Model
{

    public $id;
    public $name;
    public $price;
    public $stock;
    protected $table_name = 'products';

    protected $definition = array(
        'index' => 'id',
        'fields' => array(
            'name' => "varchar(255)",
            'price' => "double(10,2)",
            'stock' => "int(11)",
        )
    );
}