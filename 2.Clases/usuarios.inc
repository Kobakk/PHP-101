<?php
include 'Domicilio.inc';
class Persona 
{
    private string $nombre;
    private string $apellido;
    private string $genero;
    private DateTime $fNacimiento;
    private Domicilio $domicilio;
    private string $ciudad;    
    private string $provincia;
    private string $cp;
    private string $tlfnoFijo;
    private string $tlfnoMovil;                
    private string $otros;
}

?>