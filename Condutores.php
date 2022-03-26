<?php

Class Condutores
{
	private $cnh;
	private $nome;
	private $nasc;
	
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
	
	// método inclusão
	public function Incluir()
	{
		$query = "insert into condutores values('$this->cnh', 
		'$this->nome', '$this->nasc')";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	
	// método alteração
	public function Alterar()
	{
		$query = "update condutores set nome = '$this->nome', 
		nasc = '$this->nasc' where cnh = '$this->cnh'";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	
	// método exclusão
	public function Excluir()
	{
		$query = "delete from condutores where cnh = '$this->cnh'";
		// execução da instrução SQL
		mysqli_query($this->con, $query);
		// fechamento do BD
		mysqli_close($this->con);
	}
	
	// ---- getters e setters --------
	
    public function getCnh(){
        return $this->cnh;
    }
    public function setCnh($cnh){
        $this->cnh = $cnh;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNasc(){
        return $this->nasc;
    }
    public function setNasc($nasc){
        $this->nasc = $nasc;
    }

}

?>
