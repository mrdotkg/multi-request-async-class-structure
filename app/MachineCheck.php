<?php

/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 30/01/17
 * Time: 4:15 AM
 */

include 'MachineController.php';

/**
 * Class MachineCheck
 * To handle the main scripts handling Machine Communications
 */
class MachineCheck
{
    public function __construct(){

        echo '<br>MachineCheck Class Constructor<br>';

    }

    /**
     * @return MachineController
     */
    static public function run(){
        return new MachineController();
    }

    /**
     * @return bool
     */
    static public function connectToDB(){

        /**
         * todo
         * db connection not setup ? persistent connect to db and return connection status : return true
         */
        return true;
    }

}

