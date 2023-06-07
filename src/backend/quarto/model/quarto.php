<?php

    class Quarto {

        private $Id;
        private $IdHotel;
        private $numero;
        private $descricao;
        private $valor_diaria;
		private $comodidades;
		private $classificacao;
		private $data_cadastro;
		private $cidade;
		private $estado;
		private $pais;
		private $avaliacao;
		private $nomehotel;
		private $url;


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
	public function getIdHotel() {
		return $this->IdHotel;
	}

	/**
	 * @param mixed $IdHotel 
	 * @return self
	 */
	public function setIdHotel($IdHotel): self {
		$this->IdHotel = $IdHotel;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumero() {
		return $this->numero;
	}

	/**
	 * @param mixed $numero 
	 * @return self
	 */
	public function setNumero($numero): self {
		$this->numero = $numero;
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
	public function getValor_diaria() {
		return $this->valor_diaria;
	}

	/**
	 * @param mixed $valor_diaria 
	 * @return self
	 */
	public function setValor_diaria($valor_diaria): self {
		$this->valor_diaria = $valor_diaria;
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
	public function getCidade() {
		return $this->cidade;
	}

	/**
	 * @param mixed $cidade 
	 * @return self
	 */
	public function setCidade($cidade): self {
		$this->cidade = $cidade;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEstado() {
		return $this->estado;
	}

	/**
	 * @param mixed $estado 
	 * @return self
	 */
	public function setEstado($estado): self {
		$this->estado = $estado;
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
	public function getNomehotel() {
		return $this->nomehotel;
	}

	/**
	 * @param mixed $nomehotel 
	 * @return self
	 */
	public function setNomehotel($nomehotel): self {
		$this->nomehotel = $nomehotel;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPais() {
		return $this->pais;
	}

	/**
	 * @param mixed $pais 
	 * @return self
	 */
	public function setPais($pais): self {
		$this->pais = $pais;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @param mixed $url 
	 * @return self
	 */
	public function setUrl($url): self {
		$this->url = $url;
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
}

?>