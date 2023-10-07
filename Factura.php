<?php

class Factura {
	private $fecha;
	private $numero_factura;
	private $precio_sin_impuestos;
	private $precio_con_impuestos;

	/**
	 * Get the value of precio_sin_impuestos
	 */
	public function getPrecioSinImpuestos()
	{
		return $this->precio_sin_impuestos;
	}

	/**
	 * Set the value of precio_sin_impuestos
	 */
	public function setPrecioSinImpuestos($precio_sin_impuestos): self
	{
		$this->precio_sin_impuestos = $precio_sin_impuestos;

		return $this;
	}

	/**
	 * Get the value of precio_con_impuestos
	 */
	public function getPrecioConImpuestos()
	{
		return $this->precio_con_impuestos;
	}

	/**
	 * Set the value of precio_con_impuestos
	 */
	public function setPrecioConImpuestos($precio_con_impuestos): self
	{
		$this->precio_con_impuestos = $precio_con_impuestos;

		return $this;
	}

	/**
	 * Set the value of irpf_factura
	 */
	public function setIrpfFactura($irpf_factura): self
	{
		$this->irpf_factura = $irpf_factura;

		return $this;
	}

	/**
	 * Get the value of fecha
	 */
	public function getFecha()
	{
		return $this->fecha;
	}

	/**
	 * Set the value of fecha
	 */
	public function setFecha($fecha): self
	{
		$this->fecha = $fecha;

		return $this;
	}

	/**
	 * Get the value of numero_factura
	 */
	public function getNumeroFactura()
	{
		return $this->numero_factura;
	}

	/**
	 * Set the value of numero_factura
	 */
	public function setNumeroFactura($numero_factura): self
	{
		$this->numero_factura = $numero_factura;

		return $this;
	}
}
?>