<?php
class Salario
{
    private int $identificacion;
    private string $nombre;
    private string $mes;
    private int $valorhora;
    private int $cantidadhora;
    private int $pdescuentosalud;
    private int $pdescuentopension;
    

    public function __construct( $identificacion=0,$nombre="",$mes="",$valorhora=0,$cantidadhora=0,$pdescuentosalud=0,$pdescuentopension=0)
    {
        $this->identificacion=$identificacion;
        $this->nombre=$nombre;
        $this->mes=$mes;
        $this->valorhora=$valorhora;
        $this->cantidadhora=$cantidadhora;
        $this->pdescuentosalud=$pdescuentosalud;
        $this->pdescuentopension=$pdescuentopension;

        
    }
        public function setidentificacion( $identificacion)
        {
            $this->identificacion=$identificacion;
        }
        public function getidentificacion()
        {
            return $this->identificacion;
        }
        public function setnombre( $nombre)
        {
            $this->nombre=$nombre;
        }
        public function getnombre()
        {
            return $this->nombre;
        }
        public function setmes( $mes)
        {
            $this->mes=$mes;
        }
        public function getmes()
        {
            return $this->mes;
        }
        public function setCantidad($cantidadhora)
        {
            $this->cantidadhora=$cantidadhora;
        }
        public function getCantidad()
        {
            return $this->cantidadhora;
        }
        public function setValor($valorhora)
        {
            $this->valorhora=$valorhora;
        }
        public function getValor()
        {
            return $this->valorhora;
        }
        public function setDescuentoSalud( $pdescuentosalud)
        {
            $this->pdescuentosalud=$pdescuentosalud;
        }
        public function getDescuentoSalud()
        {
            return $this->pdescuentosalud;
        }
        public function setDescuentoPension( $pdescuentopension)
        {
            $this->pdescuentopension=$pdescuentopension;
        }
        public function getDescuentoPension()
        {
            return $this->pdescuentopension;
        }
       
        public function totalsinD($resultado1,$resultado2)
        {
            
            $operacion=$resultado1*$resultado2;
            echo "El salario sin descuentos es = ".$operacion."<br>";
        }
        public function totalconD($resultado1,$resultado2,$resultado3,$resultado4)
        {
            
            $operacion=$resultado1*$resultado2;
            $descuentosalud=$operacion*($resultado3/100);
            $pdescuentopension=$operacion*($resultado4/100);
            $suma=$descuentosalud+$pdescuentopension;
            $resta=$operacion-$suma;
            echo "El salario con descuentos es = ".$resta."<br>";
        }
        public function salud($resultado1,$resultado2,$resultado3)
        {
            $operacion=$resultado1*$resultado2;
            $descuentosalud=$operacion*($resultado3/100);
            $salud1=$operacion-$descuentosalud;
            $salud=$operacion-$salud1;
            echo "El total de salud = ".$salud."<br>";
        }
        public function pension($resultado1,$resultado2,$resultado4)
        {
            $operacion=$resultado1*$resultado2;
            $pdescuentopension=$operacion*($resultado4/100);
            $pension1=$operacion-$pdescuentopension;
            $pension=$operacion-$pension1;
            echo "El total de pension = ".$pension."<br>";
        }
    
}