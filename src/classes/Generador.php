<?php

declare(strict_types=1);

class Generador
{
    private array $numeros = [];

    public function generar(int $cantidad, int $minimo, int $maximo): array
    {
        $this->numeros = [];

        for ($i = 0; $i < $cantidad; $i++) {
            $this->numeros[] = random_int($minimo, $maximo);
        }

        return $this->numeros;
    }

    public function getNumeros(): array
    {
        return $this->numeros;
    }
}
