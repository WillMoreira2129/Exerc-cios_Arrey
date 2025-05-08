<?php 

$alunos=
[

[ "aluno" => "João",

"nota" => "6.1",

"curso" => "Engenharia de Software"
],
[

"aluno" => "Maria",

"nota" => "6.8",

"curso" => "Análise e Desenvolvimento de Sistemas" ]

];

foreach ($alunos as $aluno)

 {
    echo "nome: " . $aluno["aluno"] . "<br>";

    echo "nota: " . $aluno["nota"] . "<br>";

    echo "curso: " . $aluno["curso"] . "<br>";
}

?>