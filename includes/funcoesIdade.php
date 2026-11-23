<?php

function validarIdade($idade)
{
    if (!is_numeric($idade)) {
        return false;
    }

    $idadeConvertida = (int) $idade;

    return $idadeConvertida >= 0 && $idadeConvertida <= 120;
}

function verificarAptidaVoto($idade)
{
    if ($idade >= 18) {
        return 'A pessoa está apta a votar.';
    }

    return 'A pessoa não está apta a votar.';
}

?>
