<?php
require_once 'class_account.php';
class AccountBank extends Account{
    public $customer;
    function __construct($nomor, $saldo, $customer){
        parent::__construct($nomor,$saldo);
        $this->withdraw($uang);
        $ab_tujuan->deposit($uang);
    }
    public function transfer($ab_tujuan, $uang){
        $this->withdraw($uang);
        $ab_tujuan->deposit($uang);
    }
    public function cetak(){
        parent::cetak();
        echo '<br/>Customer : '.$this->customer;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}