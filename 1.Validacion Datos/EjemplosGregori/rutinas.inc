<?php
/**
 * Informa si una cantidad es positiva
 * negativa o cero
 *
 * @param integer|float $num Cantidad a informar
 * @return string Literal 'negativo', 'cero' o 'positivo'
 */
function posNegCero(int|float $num): string
{
  switch($num <=> 0){
    case -1: return 'negativo'; break;
    case 0: return 'cero'; break;
    case 1: return 'positivo'; break;
  }
}

function getValor(mixed $valor): string
{
  switch(get_debug_type($valor)){
    case 'int':
    case 'float': return $valor; break;
    case 'string': return '"'.$valor.'"'; break;
    case 'null': return 'null'; break;
    case 'bool': return $valor?'true':'false'; break;
    default: return $valor;
  }
}
