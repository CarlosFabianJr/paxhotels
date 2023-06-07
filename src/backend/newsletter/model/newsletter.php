<?php

    class Newsletter {

		private $id;
        private $nome;
        private $email;
        private $data_cadastro;

    
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getData_cadastro() {
		return $this->data_cadastro;
	}

	/**
	 * @param mixed $data_cadastro 
	 * @return self
	 */
	public function setData_cadastro($data_cadastro): self {
		$this->data_cadastro = $data_cadastro;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
}

?>