<?php
App::uses('AppModel', 'Model');
class Article extends AppModel {
	public $useTable = 'articles';

	protected $objectType = 'Article';

	/**
	 * Auto-add object type in find conditions
	 *
	 * @param array $query
	 * @return array
	 */
	public function beforeFind($query) {
		if ($this->objectType) {
			$query['conditions'][$this->objectType.'.object_type'] = $this->objectType;
		}
		return $query;
	}

	public function viewed($id) {
		$sql = "UPDATE {$this->useTable} SET views = views + 1 WHERE id = {$id}";
		$this->query($sql);
	}

}
