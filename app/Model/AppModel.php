<?php
App::uses('Model', 'Model');
class AppModel extends Model {

    public function __construct($id = false, $table = null, $ds = null) {
        $this->_beforeInit();
        parent::__construct($id, $table, $ds);
        $this->_afterInit();
    }

    protected function _beforeInit() {
    }

    protected function _afterInit() {
    }
/*
    public function getLang() {
        return Configure::read('Config.language');
    }
*/
    public function loadModel($modelClass = null, $id = null) {
        list($plugin, $modelClass) = pluginSplit($modelClass, true);

        $this->{$modelClass} = ClassRegistry::init(array(
            'class' => $plugin . $modelClass, 'alias' => $modelClass, 'id' => $id
        ));
        if (!$this->{$modelClass}) {
            throw new MissingModelException($modelClass);
        }

        return $this->{$modelClass};
    }

    public function getTableName() {
        return $this->getDataSource()->fullTableName($this);
    }

    public function setTableName($table) {
        $this->setSource($table);
    }

    private function _getObjectConditions($objectType = '', $objectID = '') {
        $conditions = array();
        if ($objectType) {
            $conditions[$this->alias.'.object_type'] = $objectType;
        }
        if ($objectID) {
            $conditions[$this->alias.'.object_id'] = $objectID;
        }
        return compact('conditions');
    }

    public function getObjectOptions($objectType = '', $objectID = '') {
        return $this->find('list', $this->_getObjectConditions($objectType, $objectID));
    }

    public function getObject($objectType = '', $objectID = '') {
        return $this->find('first', $this->_getObjectConditions($objectType, $objectID));
    }

    public function getObjectList($objectType = '', $objectID = '', $order = array()) {
        $conditions = array_values($this->_getObjectConditions($objectType, $objectID));
        return $this->find('all', compact('conditions', 'order'));
    }

    public function trxBegin() {
        $this->getDataSource()->begin();
    }

    public function trxCommit() {
        $this->getDataSource()->commit();
    }

    public function trxRollback() {
        $this->getDataSource()->rollback();
    }

    public function getOptions() {
        $fields = array('id', 'title');
        $order = 'sorting';
        return $this->find('list', compact('fields', 'order'));
    }
}
