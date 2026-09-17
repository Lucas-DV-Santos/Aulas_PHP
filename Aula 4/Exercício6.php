<?php

$turma = [
    ["Nome" => "Ana", "Nota" => 9.0],
    ["Nome" => "Bruno", "Nota" => 5.5],
    ["Nome" => "Carla", "Nota" => 7.8],
    ["Nome" => "Diego", "Nota" => 4.0],
    ["Nome" => "Elena", "Nota" => 8.2],
];

$aprovados = [];

foreach ($turma as $aluno) {
    if ($aluno["Nota"] >= 7.0) {
        $aprovados[] = $aluno["Nome"];
    }
}

echo "Aprovados: ". implode(", ", $aprovados);

?>