<?php
	class Question extends Base{
		// table associée
		public $table = TABLE_PREFIX.'questions';

	public function getQ( $id_quizz) {
		return $this->fpdo->from( $this->table )->where( 'id_quizz', $id_quizz )->fetchAll();
	}
	public function delQ($id_quizz){
		$this->fpdo->deleteFrom( $this->table )->where( 'id_quizz', $id_quizz)->execute();
	}
}
?>