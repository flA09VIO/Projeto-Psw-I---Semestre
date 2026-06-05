<?php

function limparEntrada($texto)
{
    return htmlspecialchars(trim($texto));
}