<?php

/**
 * Created by PhpStorm.
 * User: laender
 * Date: 10/09/15
 * Time: 11:32
 */
class RouteConfig 
{
    /**
     * @return array
     */
    public static function rotas()
    {
        return array(

            'HOME_PAGE_DIR'             =>  'home/home.php',
            'URL_INI'                   =>  '',
            'ACCESS_CONTROLLER'         =>  'controller/',
            'CONFIG_DIR'                =>  'config/',
            'VIEW_DIR'                  =>  'view/pages/',
            'MODEL_DIR'                 =>  'model/',
        );
    }
}

