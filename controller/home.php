<?php
/**
 * Created by PhpStorm.
 * User: mmunoz
 * Date: 3/09/18
 * Time: 9:34
 */

namespace GLApp;

use GLFramework\Bootstrap;
use GLFramework\Controller;

class home extends Controller {

    public $version;
    /**
     * Implementar aqui el código que ejecutara nuestra aplicación
     *
     * @return mixed
     */
    public function run()
    {
        // TODO: Implement run() method.
        $this->version = Bootstrap::getSingleton()->getVersion();
    }
}