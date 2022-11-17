<?php

abstract class Vehiculo
{
    protected string $marca;
    protected string $modelo;
    private $tipoVehiculo;

    public abstract function mover($distancia);

    /**
     * @return string
     */
    private function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * @param string $marca
     */
    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     */
    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }


}
