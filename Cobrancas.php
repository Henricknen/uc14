<?php

Class Cobrancas
{
	private $numero;
	private $saida;
	private $retorno;
	private $preco;
	private $cnh;
	private $renavam;
	private $nome;
	private $dias;
	private $venc;
	private $total;
	
	public $con; // variável para conexão com BD
	
	// método conecta BD
	public function ConectaBD()
	{
		// ----------------------- MYSQL --------------------
		// conexão com a base de dados MySql 
		$host = "localhost";
		$usuario = "??????";
		$senha = "????????";
		$bd = "??????";
		$this->con = mysqli_connect($host, $usuario, $senha, $bd);
		return $this->con;
	}
	// método Seleciona
	public function Selecionar()
	{
		// buscando dados para cobrança
		$query = "select r.numero, r.saida, r.retorno, 
		r.preco, r.cnh, r.renavam, c.nome from reservas as r inner join  
		condutores as c on r.cnh = c.cnh where r.numero = $this->numero";
		$result = mysqli_query($this->con, $query);
		$row = mysqli_fetch_row($result);
		$this->saida = $row[1];
		$this->retorno = $row[2];
		$this->preco = $row[3];
		$this->cnh = $row[4];
		$this->renavam = $row[5];
		$this->nome = $row[6];
		// fechamento do BD
		mysqli_close($this->con);
	}
	
	public function Calcular()
	{
		// calcula diferença dias entre datas
		$dtinicio = date_create($this->saida);
		$dtfinal = date_create($this->retorno);
		$dif = date_diff($dtinicio, $dtfinal);
		$this->dias = $dif->format("%a");
		//calcula data vencimento (+10 dias da data de retorno)
		$this->venc = date('d/m/Y', strtotime('+10 days', strtotime($this->retorno)));
		// calcula total a pagar
		$this->total = $this->preco * $this->dias;
	}
	
	// ---- geters e seters --------

	public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    
    public function getSaida(){
        return $this->saida;
    }
    public function setSaida($saida){
        $this->saida = $saida;
    }
    
    public function getRetorno(){
        return $this->retorno;
    }
    public function setRetorno($retorno){
        $this->retorno = $retorno;
    }
    
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    
    public function getCnh(){
        return $this->cnh;
    }
    public function setCnh($cnh){
        $this->cnh = $cnh;
    }
    
    public function getRenavam(){
        return $this->renavam;
    }
    public function setRenavam($renavam){
        $this->renavam = $renavam;
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getDias(){
        return $this->dias;
    }
    public function setDias($dias){
        $this->dias = $dias;
    }
    
    public function getVenc(){
        return $this->venc;
    }
    public function setVenc($venc){
        $this->venc = $venc;
    }
    
    public function getTotal(){
        return $this->total;
    }
    public function setTotal($total){
        $this->total = $total;
    }
}
?>
