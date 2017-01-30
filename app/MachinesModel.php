<?php

/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 30/01/17
 * Time: 3:30 AM
 */


/**
 * Class MachinesModel
 * To handle all the database related insertions and updates.
 */
class MachinesModel
{

    /**
     * @return array
     */
    public static function all(){

        /**
         * todo
         * return all rows in machine table containing data: 'id', 'machine_address','is_working'],
         */

        return [];
    }

    /**
     * @var array
     */
    public $fillables=['machine_address','is_working'];

    /**
     *
     */
    public function allNotConnectedMachines(){
        /**
         * TODO
         * return all rows['id'] from machine table where updated_at is at least 5 seconds back
         */
    }

    /**
     *
     */
    public function allNotWorkingMachines(){
        /**
         * TODO
         * return all rows['id'] from machine table where isWorking is true
         */
    }

}