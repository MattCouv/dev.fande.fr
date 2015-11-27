<?php
	class Parameter extends Base{
		// table associée
		public $table = 'fande_parameters';
		/**
	* Retourne les informations sur un paramètre.
	* param string $param le paramètre
	* return string
	*/
	public function getParam( $param ) {
		return $this->fpdo->from( $this->table )->where( 'name', $param )->fetch('value');
		}
	/**
		* Retourne les informations sur un paramètre.
	*param string $param le paramètre à modifier
	*param string $value la valeur du paramètre
	*return string
	*/
	public function setParam( $param, $value ) {
		$this->fpdo->update( $this->table )->set( $value )->where( 'name', $param )->execute();
	}
}
?>