<?php

    class Reserva {

        private $id;
        private $iduser;
        private $nomeuser;
        private $nomehotel;
        private $idquarto;
        private $status;
        private $numero;
        private $data_reserva;

    
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

	/**
	 * @return mixed
	 */
	public function getIduser() {
		return $this->iduser;
	}

	/**
	 * @param mixed $iduser 
	 * @return self
	 */
	public function setIduser($iduser): self {
		$this->iduser = $iduser;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNomeuser() {
		return $this->nomeuser;
	}

	/**
	 * @param mixed $nomeuser 
	 * @return self
	 */
	public function setNomeuser($nomeuser): self {
		$this->nomeuser = $nomeuser;
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
	public function getIdquarto() {
		return $this->idquarto;
	}

	/**
	 * @param mixed $idquarto 
	 * @return self
	 */
	public function setIdquarto($idquarto): self {
		$this->idquarto = $idquarto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param mixed $status 
	 * @return self
	 */
	public function setStatus($status): self {
		$this->status = $status;
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
	public function getData_reserva() {
		return $this->data_reserva;
	}

	/**
	 * @param mixed $data_reserva 
	 * @return self
	 */
	public function setData_reserva($data_reserva): self {
		$this->data_reserva = $data_reserva;
		return $this;
	}
}

?>