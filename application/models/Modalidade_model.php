<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Modalidade_model {
	public $id;
	public $nome;

	public function __construct($param = null)
	{
		if (is_array($param))
		{
			if (isset($param['id']))
			{
				$this->id = $param['id'];
			}
			if (isset($param['nome']))
			{
				$this->nome = $param['nome'];
			}
		}
		else if (isset($param))
		{
			$this->id = $param;
		}
	}

	public function __toString()
	{
		return $this->nome;
	}

}
