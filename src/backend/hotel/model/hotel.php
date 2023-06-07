<?php

    class Hotel {

        private $Id;
        private $nome;
        private $CNPJ;
        private $celular;
        private $email;
        private $descricao;
        private $quantidade_quarto;
		private $classificacao;
        private $endereco_cep;
        private $endereco_numero;
        private $endereco_logradouro;
        private $endereco_bairro;
        private $endereco_cidade;
        private $endereco_estado;
        private $endereco_pais;
        private $avaliacao;
        private $URL;
        private $comodidades;
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
	public function getCNPJ() {
		return $this->CNPJ;
	}

	/**
	 * @param mixed $CNPJ 
	 * @return self
	 */
	public function setCNPJ($CNPJ): self {
		$this->CNPJ = $CNPJ;
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
	public function getDescricao() {
		return $this->descricao;
	}

	/**
	 * @param mixed $descricao 
	 * @return self
	 */
	public function setDescricao($descricao): self {
		$this->descricao = $descricao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getQuantidade_quarto() {
		return $this->quantidade_quarto;
	}

	/**
	 * @param mixed $quantidade_quarto 
	 * @return self
	 */
	public function setQuantidade_quarto($quantidade_quarto): self {
		$this->quantidade_quarto = $quantidade_quarto;
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
	public function getAvaliacao() {
		return $this->avaliacao;
	}

	/**
	 * @param mixed $avaliacao 
	 * @return self
	 */
	public function setAvaliacao($avaliacao): self {
		$this->avaliacao = $avaliacao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getURL() {
		return $this->URL;
	}

	/**
	 * @param mixed $URL 
	 * @return self
	 */
	public function setURL($URL): self {
		$this->URL = $URL;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getComodidades() {
		return $this->comodidades;
	}

	/**
	 * @param mixed $comodidades 
	 * @return self
	 */
	public function setComodidades($comodidades): self {
		$this->comodidades = $comodidades;
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

	/**
	 * @return mixed
	 */
	public function getClassificacao() {
		return $this->classificacao;
	}

	/**
	 * @param mixed $classificacao 
	 * @return self
	 */
	public function setClassificacao($classificacao): self {
		$this->classificacao = $classificacao;
		return $this;
	}

	function getCNPJmask() {
        $val = $this->CNPJ;
        $mask = '##.###.###/####-##';
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; ++$i) {
            if ($mask[$i] == '#') {
                if (isset($val[$k])) {
                    $maskared .= $val[$k++];
                }
            } else {
                if (isset($mask[$i])) {
                    $maskared .= $mask[$i];
                }
            }
        }

        return $maskared; 
    }
}

?>