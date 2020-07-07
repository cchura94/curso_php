<?php

$lista_tecnologias = array("PHP", "JAVA", "PYTHON", "C#", "JAVASCRIPT");
echo $lista_tecnologias[2]; // Mostrar una posicion del array
echo "<hr>";

print_r($lista_tecnologias); //Mostrar todo el array
echo "<hr>";

$persona1 = array('nombre' => 'Oscar','apellido' => 'Cruz', 'ci' => '4232323');
print_r($persona1);

echo "<hr>";

$persona2 = ['nombre' => 'Pedro', 'apellido' => 'Perez', 'ci' => '1234212'];
print_r($persona2);

echo "<hr>";

$lista_personas = [$persona1, $persona2, ["nombre" => "Ana", "apellido" => "Paredez", "ci" => "3453423"]];
print_r($lista_personas);

echo "<table border=1>";
foreach ($lista_personas as $persona) {
    echo "<tr>";
    echo "<td>" . $persona["nombre"] . "</td>";
    echo "<td>" . $persona["apellido"] . "</td>";
    echo "<td>" . $persona["ci"] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>