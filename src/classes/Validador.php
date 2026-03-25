<?php

declare(strict_types=1);

class Validador
{
    private const MIN_CANTIDAD = 1;
    private const MAX_CANTIDAD = 1000;
    private const MIN_VALOR = 1;
    private const MAX_VALOR = 100000;

    private array $errores = [];

    public function validar(int $cantidad, int $minimo, int $maximo): bool
    {
        $this->errores = [];

        if ($cantidad < self::MIN_CANTIDAD || $cantidad > self::MAX_CANTIDAD) {
            $this->errores[] = "La cantidad debe estar entre " . self::MIN_CANTIDAD . " y " . self::MAX_CANTIDAD;
        }

        if ($minimo < self::MIN_VALOR || $minimo > self::MAX_VALOR) {
            $this->errores[] = "El valor mínimo debe estar entre " . self::MIN_VALOR . " y " . self::MAX_VALOR;
        }

        if ($maximo < self::MIN_VALOR || $maximo > self::MAX_VALOR) {
            $this->errores[] = "El valor máximo debe estar entre " . self::MIN_VALOR . " y " . self::MAX_VALOR;
        }

        if ($minimo >= $maximo) {
            $this->errores[] = "El valor mínimo debe ser menor que el máximo";
        }

        return empty($this->errores);
    }

    public function getErrores(): array
    {
        return $this->errores;
    }

    public function tieneErrores(): bool
    {
        return !empty($this->errores);
    }
}
