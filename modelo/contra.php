<?php
class contraseña{
    private $usua;
    private $contra;

    public function __construct($v1, $v2)
    {
        $this->usua= $v1;
        $this->contra= $v2;
    }

    public function valida(){
        if($this->usua == 'Juan' and $this->contra == 'rocoshudo23'){
            return true;
        }
        else{
            return false; 
        }
    }
}
?>
