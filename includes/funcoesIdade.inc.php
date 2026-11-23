<?php

function validarIdade($idade)
{
    $idadeConvertida = filter_var($idade, FILTER_VALIDATE_INT);

    if ($idadeConvertida === false) {
        return false;
    }

    if ($idadeConvertida < 0 || $idadeConvertida > 120) {
        return false;
    }

    return true;
}

function verificarAptidaVoto($idade)
{
    if ($idade >= 18) {
        return 'A pessoa está apta a votar.';
    }

    return 'A pessoa não está apta a votar.';
}
