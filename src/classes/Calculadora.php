<?php

declare(strict_types=1);

class Calculadora
{
    private array $numeros = [];

    public function setNumeros(array $numeros): void
    {
        $this->numeros = $numeros;
    }

    public function getSuma(): int
    {
        return array_sum($this->numeros);
    }

    public function getPromedio(): float
    {
        if (empty($this->numeros)) {
            return 0.0;
        }
        return array_sum($this->numeros) / count($this->numeros);
    }

    public function getMinimo(): int
    {
        if (empty($this->numeros)) {
            return 0;
        }
        return min($this->numeros);
    }

    public function getMaximo(): int
    {
        if (empty($this->numeros)) {
            return 0;
        }
        return max($this->numeros);
    }

    public function getResultados(): array
    {
        return [
            'suma' => $this->getSuma(),
            'promedio' => $this->getPromedio(),
            'minimo' => $this->getMinimo(),
            'maximo' => $this->getMaximo()
        ];
    }
}
