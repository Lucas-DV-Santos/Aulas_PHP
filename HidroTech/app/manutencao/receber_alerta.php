<?php

require_once("../../includes/dao/MedicaoDAO.php");

$medicao = new MedicaoDAO();
$_SESSION['medicao'] = $medicao->GetMedicao();

header('Location: dashboard.php');
exit();
?>