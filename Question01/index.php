<?php

function calculateQuadraticEquationRoots($a, $b, $c)
{
    try {
        if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
            throw new Exception('Coeficientes inválidos.');
        }

        if ($a === 0) {
            throw new Exception("O coeficiente 'a' não pode ser zero.");
        }

        $delta = pow($b, 2) - (4 * $a * $c);

        if ($delta < 0) {
            throw new Exception("Não existem raízes reais para esta função.");
        }

        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        return "Uma das raízes vale {$x1} e a outra vale {$x2}";
    } catch (Exception $exception) {
        return "Erro: " . $exception->getMessage();
    }
}

echo calculateQuadraticEquationRoots(1, -1, -2);