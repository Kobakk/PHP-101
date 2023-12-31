<?php
require_once 'AppException.inc';
class Domicilio{
    private string $tipoVia;
    private string $calle;
    private string $número;
    private string $piso;
    private string $puerta;
    private static array $vias=['Avda.', 'C/', 'Ctra', 'Paseo', 'Plaza'];
/* Constructor*/
    public function __construct()
    {
       if ($err=$this->setTipoVia("dasds")){
        $error['tipoVia']=$err;
       }
       if(isset($error)){
            throw new AppException($error, 'Hay errores en el objeto');
       }
    }
/* Setters  | Mutadores*/
    public function setTipoVia(string $tipoVia): string {
        if(in_array($tipoVia, self::$vias)){
            $this->tipoVia=$tipoVia;
            return '';
        }
        return 'El campo Tipo Via es obligatorio 
        o no es correcto';
    }
    public function setpiso(string $piso):string
    {
        $expReg = '/(Bajo|Entresuelo[Principal]|Ático) | (-?\d{1,3})/';

        if (empty ($piso) || preg_match($expReg, $piso) )
        {
        }
        return 'Valor de piso incorrecto';
    }
/* Getters  | Accesores*/
    public function getpiso():string{
        return self::$piso;
    }
}

?>