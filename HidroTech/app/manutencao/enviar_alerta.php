<?php

$percentual = $_POST["nivel_agua"];

require_once("../../includes/dao/MedicaoDAO.php");

$medicao = new MedicaoDAO();

$medicao->NovaMedicaoMan($percentual);

header("Location: dashboard.php");

?>