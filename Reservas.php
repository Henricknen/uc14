<?php

Class Reservas
{
	private $numero;
	private $saida;
	private $retorno;
	private $preco;
	private $condut;
	private $auto;
	
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
	// método Registro Reserva
	public function Registrar()
	{
		// buscando preço da tabela automovel
		$query1 = "select preco from automoveis where renavam = $this->auto";
		$result = mysqli_query($this->con, $query1);
		$row = mysqli_fetch_row($result);
		$this->preco = $row[0];
		// inserindo reserva
		$query2 = "insert into reservas(numero, saida, preco, cnh, renavam) 
		values($this->numero, '$this->saida', $this->preco, 
		$this->condut, $this->auto)";
		// execução da instrução SQL
		mysqli_query($this->con, $query2);
		// fechamento do BD
		mysqli_close($this->con);
	}
	// método Fechamento Reserva
	public function Fechar()
	{
		$query = "update reservas set retorno = '$this->retorno' 
					where numero = $this->numero";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
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
    
    public function getCondut(){
        return $this->condut;
    }
    public function setCondut($condut){
        $this->condut = $condut;
    }
    
    public function getAuto(){
        return $this->auto;
    }
    public function setAuto($auto){
        $this->auto = $auto;
    }
}
?>
