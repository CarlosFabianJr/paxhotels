<?php

    class Usuario {

        private $Id;
        private $nome;
        private $CPF;
        private $celular;
        private $email;
        private $perfil;
        private $senha;
        private $endereco_cep;
        private $endereco_numero;
        private $endereco_logradouro;
        private $endereco_bairro;
        private $endereco_cidade;
        private $endereco_estado;
        private $endereco_pais;
        private $dados_pagamento_forma;
        private $dados_pagamento_tipo_cartao;
        private $dados_pagamento_numero_cartao;
        private $dados_pagamento_codigo_cartao;
        private $dados_pagamento_validade_cartao;
        private $data_cadatro;


    /**
	 * @return mixed
	 */
	public function getId() {
		return $this->Id;
	}

	/**
	 * @param mixed $Id 
	 * @return self
	 */
	public function setId($Id): self {
		$this->Id = $Id;
		return $this;
	}

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
	public function getCPF() {
		return $this->CPF;
	}

	/**
	 * @param mixed $CPF 
	 * @return self
	 */
	public function setCPF($CPF): self {
		$this->CPF = $CPF;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCelular() {
		return $this->celular;
	}

	/**
	 * @param mixed $celular 
	 * @return self
	 */
	public function setCelular($celular): self {
		$this->celular = $celular;
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
	public function getPerfil() {
		return $this->perfil;
	}

	/**
	 * @param mixed $perfil 
	 * @return self
	 */
	public function setPerfil($perfil): self {
		$this->perfil = $perfil;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSenha() {
		return $this->senha;
	}

	/**
	 * @param mixed $senha 
	 * @return self
	 */
	public function setSenha($senha): self {
		$this->senha = $senha;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco_cep() {
		return $this->endereco_cep;
	}

	/**
	 * @param mixed $endereco_cep 
	 * @return self
	 */
	public function setEndereco_cep($endereco_cep): self {
		$this->endereco_cep = $endereco_cep;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco_numero() {
		return $this->endereco_numero;
	}

	/**
	 * @param mixed $endereco_numero 
	 * @return self
	 */
	public function setEndereco_numero($endereco_numero): self {
		$this->endereco_numero = $endereco_numero;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco_logradouro() {
		return $this->endereco_logradouro;
	}

	/**
	 * @param mixed $endereco_logradouro 
	 * @return self
	 */
	public function setEndereco_logradouro($endereco_logradouro): self {
		$this->endereco_logradouro = $endereco_logradouro;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco_bairro() {
		return $this->endereco_bairro;
	}

	/**
	 * @param mixed $endereco_bairro 
	 * @return self
	 */
	public function setEndereco_bairro($endereco_bairro): self {
		$this->endereco_bairro = $endereco_bairro;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco_cidade() {
		return $this->endereco_cidade;
	}

	/**
	 * @param mixed $endereco_cidade 
	 * @return self
	 */
	public function setEndereco_cidade($endereco_cidade): self {
		$this->endereco_cidade = $endereco_cidade;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco_estado() {
		return $this->endereco_estado;
	}

	/**
	 * @param mixed $endereco_estado 
	 * @return self
	 */
	public function setEndereco_estado($endereco_estado): self {
		$this->endereco_estado = $endereco_estado;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco_pais() {
		return $this->endereco_pais;
	}

	/**
	 * @param mixed $endereco_pais 
	 * @return self
	 */
	public function setEndereco_pais($endereco_pais): self {
		$this->endereco_pais = $endereco_pais;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDados_pagamento_forma() {
		return $this->dados_pagamento_forma;
	}

	/**
	 * @param mixed $dados_pagamento_forma 
	 * @return self
	 */
	public function setDados_pagamento_forma($dados_pagamento_forma): self {
		$this->dados_pagamento_forma = $dados_pagamento_forma;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDados_pagamento_tipo_cartao() {
		return $this->dados_pagamento_tipo_cartao;
	}

	/**
	 * @param mixed $dados_pagamento_tipo_cartao 
	 * @return self
	 */
	public function setDados_pagamento_tipo_cartao($dados_pagamento_tipo_cartao): self {
		$this->dados_pagamento_tipo_cartao = $dados_pagamento_tipo_cartao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDados_pagamento_numero_cartao() {
		return $this->dados_pagamento_numero_cartao;
	}

	/**
	 * @param mixed $dados_pagamento_numero_cartao 
	 * @return self
	 */
	public function setDados_pagamento_numero_cartao($dados_pagamento_numero_cartao): self {
		$this->dados_pagamento_numero_cartao = $dados_pagamento_numero_cartao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDados_pagamento_codigo_cartao() {
		return $this->dados_pagamento_codigo_cartao;
	}

	/**
	 * @param mixed $dados_pagamento_codigo_cartao 
	 * @return self
	 */
	public function setDados_pagamento_codigo_cartao($dados_pagamento_codigo_cartao): self {
		$this->dados_pagamento_codigo_cartao = $dados_pagamento_codigo_cartao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDados_pagamento_validade_cartao() {
		return $this->dados_pagamento_validade_cartao;
	}

	/**
	 * @param mixed $dados_pagamento_validade_cartao 
	 * @return self
	 */
	public function setDados_pagamento_validade_cartao($dados_pagamento_validade_cartao): self {
		$this->dados_pagamento_validade_cartao = $dados_pagamento_validade_cartao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getData_cadatro() {
		return $this->data_cadatro;
	}

	/**
	 * @param mixed $data_cadatro 
	 * @return self
	 */
	public function setData_cadatro($data_cadatro): self {
		$this->data_cadatro = $data_cadatro;
		return $this;
	}
}

?>