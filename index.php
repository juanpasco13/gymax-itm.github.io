<?php
date_default_timezone_set('America/Bogota');

require_once 'utils/database.php';
require_once 'utils/app.php';
require_once 'utils/controller.php';
require_once 'utils/model.php';
require_once 'utils/view.php';
require_once 'config/config.php';

ini_set('display_errors', false);

$app = new App();