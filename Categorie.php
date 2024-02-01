<?php
require_once 'Models/Managers/DAO.php';

$categorieA = DAO::getCategorieActive();

require_once 'Views/CategorieView.php';