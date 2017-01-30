<?php

/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 29/01/17
 * Time: 10:30 AM
 */

/**
 * Class XmlResponseParser
 * To give flexibility to the parsing of xml data (response from Machines in this case)as per our requirements
 */
class XmlResponseParser {

    /**
     * @return array
     */
    public static function parse($xmlData){

        /**
         * todo
         * prepare the data to db insert-able form
         */
        echo '<br>XML parser evoked on the xml data got<br>';

        $response=(array)simplexml_load_string($xmlData);
        return $response;
    }

}