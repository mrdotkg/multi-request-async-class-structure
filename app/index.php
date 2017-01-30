<?php


/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 30/01/17
 * Time: 4:17 AM
 */

include 'MachineCheck.php';

/**
 * go ahead collecting list of all the machines only if the database connection is successful
 */

MachineCheck::connectToDB()

    ? MachineCheck::run()

    : die('failed fetching list of all machines, reason: db connection failure');
