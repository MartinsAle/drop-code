<?php 

/**
 * class ContatoDAO: classe que controla a lógica de cadastro, atualização, visualização e exclusão dos dados vindos do formulário de contato. A classe extende do arquivo DataBase.php que inicia o objeto db (data base) da classe DataBase que manipula os camandos do CRUD.
 */
require_once('library/data/DataBase.php');

class ContatoDAO extends DataBase
{
    /**
     * private $_tabela: atributo que recebe o nome da tabela utilizada
     */
    private $_tabela = 'tb_contato';

    /**
     * getAll(): método que retorna do banco de dados todos os registros da tabela tb_contato
     */
    public function getAll()
    {
    	return $this->db->select("SELECT * FROM {$this->_tabela}");
    }

    /**
     * getById(): método que retorna um registro específico no banco de dados através de um id previamente informado
     */
    public function getById($idcontato)
    {
    	$idcontato = (int) $idcontato;
    	return $this->db->select("SELECT * FROM {$this->_tabela} WHERE id_contato = :idcontato", array(':idcontato'=>$idcontato), false);
    }

    /**
     * cadastrarContato(): método que cadastra os dados do formulário de contato na tabela tb_contato
     */
    public function cadastrarContato($dados)
    {
    	$this->db->beginTransaction();

    	$idContato = $this->db->insert($this->_tabela,$dados);
    	if(!$idContato){
    		echo '<script>alert("Erro ao cadastrar mensagem.")</script>';
    		$this->db->rollBack();
    		return false;
    	}

    	if($this->db->commit()){
    		return true;
    	}

    }

    /**
     * atualizarContato(): método que atualiza um registro na tabela tb_contato
     */
    public function atualizarContato($dados)
    {
    	$this->db->beginTransaction();

    	$idContato = $this->db->update($this->_tabela, $dados, $where);
    	if(!$idContato){
    		echo '<script>alert("Erro ao atualizar mensagem.")</script>';
    		$this->db->rollBack();
    		return false;
    	}

    	if($this->db->commit()){
    		return true;
    	}

    }
}