<?php
class contaBanco{
    //ATRIBUTOS
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //MÉTODOS ESPECIAIS
    public function contaBanco(){
        $this->saldo = 0;
        $this->status = false;
    }
    public function getNumConta(){
        return $numConta;
    }
    public function setNumConta($n){
        $this->numConta = $n;
    }
    public function getTipo(){
        return $tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getSaldo(){
        return $saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getStatus(){
        return $status;
    }
    public function setStatus($st){
        $this->status = $st;
    }
    
    //MÉTODOS
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        
        if($t == "CC"){
            $this->setSaldo(50);

        } elseif($t == "CP"){
            $this->setSaldo(150);
        }
        
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "A conta precisa estar com R$0.";
        } elseif($this->getSaldo() <0){
            echo "Conta em débito.";
        } else{
            $this->setStatus = false;
        }
    }
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
       } else{
           echo "Conta fechada. Impossível depositar.";
       }
    }
    public function sacar($v){
        if ($this->getStatus == true){
            if ($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v); 
            } else{
            echo "Saldo insuficiente.";
            }
        }else{
            echo "Não posso sacar de uma conta fechada!";

        }
    }
    public function pagarMensal(){
        $this->pagarMensalidade = $v;
        if($this->getTipo() == "CC"){
            $v = 12;
        }else if($this->getTipo() == "CP"){
            $v = 20;
        } if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            }else{
                echo "Impossível pagar. Problemas com a conta!";
            }
        }
    }

?>