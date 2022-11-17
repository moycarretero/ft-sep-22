<?php
    require_once "Coche.php";
    require_once "Propietario.php";

    $miCoche = new Coche("Seat", "Ibiza");
    $otroCoche = new Coche("Ferrari", "Testarrosa");
    $tesla = new Coche("Tesla","Model S");

    $miCoche->repostarCombustible(30);
    $miCoche->viajar(200);
    $miCoche->repostarCombustible(5);
    $miCoche->viajar(350);
    $miCoche->setColor("Rojo");

    $miCoche->pintaInfo();

    $miCoche->repostarCombustible(20);
    $miCoche->viajar(200);

    $miCoche->pintaInfo();

    $otroCoche->repostarCombustible(50);
    $otroCoche->viajar(500);
    $otroCoche->pintaInfo();

    $tesla->pintaInfo();

    $prop1 = new Propietario();
    $prop1->setNombre("Pepito");

    $miCoche->addPropietario($prop1);

    $prop2 = new Propietario();
    $prop2->setNombre("Anita");

    $miCoche->addPropietario($prop2);

    $vehiculo = new Vehiculo();
