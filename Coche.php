<?php
require_once "Vehiculo.php";
require_once "Propietario.php";

class Coche extends Vehiculo
{
    private int $cantidadKilometros;
    private string $color;
    private float $cantidadCombustible;
    private array $propietarios;

    public function __construct(string $marca, string $modelo, string $color='')
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->cantidadCombustible = 0;
        $this->cantidadKilometros = 0;
        $this->getMarca();
    }

    function pasarITV()
    {

    }

    function repostarCombustible(int $cantidadCombustible)
    {
        $this->cantidadCombustible += $cantidadCombustible;
    }

    function viajar(int $distancia)
    {
        $this->cantidadKilometros += $distancia;
        $this->cantidadCombustible -= $distancia*0.05;
    }

    /**
     * @return string
     */
    public function getMarca(): string
    {
        return $this->marca;
    }

    /**
     * @param string $modelo
     */
    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return int
     */
    public function getCantidadKilometros(): int
    {
        return $this->cantidadKilometros;
    }

    /**
     * @param int $cantidadKilometros
     */
    public function setCantidadKilometros(int $cantidadKilometros): void
    {
        $this->cantidadKilometros = $cantidadKilometros;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return float|int
     */
    public function getCantidadCombustible(): float|int
    {
        return $this->cantidadCombustible;
    }

    /**
     * @param float|int $cantidadCombustible
     */
    public function setCantidadCombustible(float|int $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }

    function pintaInfo()
    {
        echo "<ul>";
        echo "<li>Marca:$this->marca</li>";
        echo "<li>Modelo:$this->modelo</li>";
        echo "<li>Km:$this->cantidadKilometros</li>";
        echo "<li>Combustible:$this->cantidadCombustible</li>";
        echo "</ul>";
    }

    public function addPropietario(Propietario $propietario)
    {
        $this->propietarios[] = $propietario;
    }
}
