<?php
	class Answers extends Base{
		// table associée
		public $table = TABLE_PREFIX.'answers';

		public function getA( $id_question ) {
		return $this->fpdo->from( $this->table )->where( 'id_question', $id_question )->fetchAll();
	}
	}
 ?>