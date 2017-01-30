<?php

/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 30/01/17
 * Time: 4:17 AM
 */


include "Requests.php";
include "MachinesModel.php";
include "XmlResponseParser.php";

/**
 * Class MachineController
 * To handle the business logic of the requirement
 */
class MachineController
{
    /**
     * MachineController constructor.
     */
    public function __construct(){
        echo '<br>MachinesController Class Constructor: to get all the machines available<br>';

        $this->callback = function ($content,$info){
            if($content){
                $parsedData = (XmlResponseParser::parse($content));
                /**
                 * TODO
                 * insert into status table: the status got against the machine_id got in status table
                 * update machine table  is_working column against the machine id as::: true/false depending on $content
                 */
            }
            echo '<br>data of interest from the machine status response are added in db.<br>';

        };

        $this->init();
    }

    /**
     * starts the machine communication threads(curl multi ) via Request class
     */
    public function init(){
        $req = new Requests();
        $req->process(MachinesModel::all(), $this->callback);
    }

    /**
     * @var Closure
     */
    private $callback;
}