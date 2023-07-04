<?php

//For Flight php
require "../vendor/autoload.php";

//To aquire services
require "./services/MidtermService.php";

//Creating object of the service
Flight::register('midtermService', 'MidtermService');


//Routes aqquiring
require 'routes/MidtermRoutes.php';

Flight::start();
 ?>
