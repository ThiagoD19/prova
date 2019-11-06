<?php

function extractValueAndConvertToFloat(&$expression)
{
    if (!empty( preg_match('/(\d*[.])?[\d]+/', $expression, $matches))) {
        return number_format($matches[0], 2,'.','');
    }
    return null;
}

function findBestPrice($text)
{
    try {
        $text =  str_replace(['.','\(1\)'], '', $text);
        $text =  str_replace(',', '.', $text);

        preg_match('/\s(sem escalas) R\$ (\d*[.])?[\d]+/', $text, $patternNoScales);
        preg_match('/\s(com escalas) R\$ (\d*[.])?[\d]+/', $text, $patternWithScales);

        if (!$patternNoScales && !$patternWithScales) {
            throw new Exception('Não foram encontrados valores no texto');
        }

        $result['no_scales'] = extractValueAndConvertToFloat($patternNoScales[0]);
        $result['with_scales'] = extractValueAndConvertToFloat($patternWithScales[0]);

        return array_filter($result);

    } catch (Exception $exception) {
        return $exception->getMessage();
    }
}

$text = "Melhor preço sem escalas R$ 1.367 (1)
            Melhor preço com escalas R$ 994 (1)
            1 - Incluindo todas as ";

print_r(findBestPrice($text));
