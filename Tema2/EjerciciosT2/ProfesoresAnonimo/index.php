<?php
$profesores = array(
    array('NRP'=>5346534, 'nombre'=>'belen', 'apellido'=>'garcia', 'telf'=>7346236, 'anio_nacimiento'=>1970),
    array('NRP'=>7834642, 'nombre'=>'maria', 'apellido'=>'perez', 'telf'=>4632634, 'anio_nacimiento'=>1979),
    array('NRP'=>6346268, 'nombre'=>'ana', 'apellido'=>'jimenez', 'telf'=>7217434, 'anio_nacimiento'=>1984),
    array('NRP'=>6482174, 'nombre'=>'jorge', 'apellido'=>'perez', 'telf'=>4763245, 'anio_nacimiento'=>1951),
    array('NRP'=>5446575, 'nombre'=>'marcos', 'apellido'=>'vargas', 'telf'=>5444654, 'anio_nacimiento'=>1972)
);

// Mostrar NRP de cada profesor
$imprimeNRP = fn($profesor) => $profesor['NRP'];

$NRPs = array_map($imprimeNRP, $profesores);

echo implode(', ', $NRPs);

echo '<br><br>';

// Mostrar los profesores con apellido = 'perez'
$filtraApellido = fn($profesor) => $profesor['apellido']=='perez';

$profesoresApellido = array_filter($profesores, $filtraApellido);

foreach ($profesoresApellido as $profesor){
    print_r($profesor);
    echo '<br>';
}

echo '<br>';

// Mostrar los profesores con fecha de nacimiento = '1970'
$filtraAnioNacimiento = fn($profesor) => $profesor['anio_nacimiento']==1970;

$profesoresAnioNacimiento = array_filter($profesores, $filtraAnioNacimiento);

foreach ($profesoresAnioNacimiento as $profesor){
    print_r($profesor);
    echo '<br>';
}

echo '<br>';
?>