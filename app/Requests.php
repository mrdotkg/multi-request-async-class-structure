<?php


/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 30/01/17
 * Time: 3:15 AM
 */


/**
 * Class Requests
 * Make asynchronous requests to different resources and process the results as they are ready(async).
 */
class Requests
{
    /**
     * @var resource
     */
    public $handle;

    /**
     * Requests constructor.
     */
    public function __construct()
    {
        echo '<br>Request Class Constructor: to handle the multi machine requests in asynchronous way with callback<br>';
        /**
         * todo
         * create a handle for curl_multi_init for handling all the machine communications asynchronously
         */
    }

    /**
     * @param $urls
     * @param $callback
     */
    public function process($urls, $callback)
    {
        /**
         * todo
         * foreach url im urls setup a curl_multi_request async and execute callback with response
         */
        $dummyXmlContent = '<xml><status>true</status></xml>';
        $dummyInfoMachineConnection = ['con' => 'success'];

        echo '<br>request Class, process function: connect to the machines one by one<br>';

        $callback($dummyXmlContent, $dummyInfoMachineConnection);
    }

    /**
     * will be called automatically once there is no more reference of class Request
     */
    public function __destruct()
    {
        /**
         * todo
         * destroy the handle created by this class constructor after use
         */
    }
}