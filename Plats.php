<?php
require_once 'Models/Managers/DAO.php';

$platD = DAO::getPlats();

require_once 'Views/PlatsView.php';