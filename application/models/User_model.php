<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends BD_Model {
    function __construct(){
        parent::__construct();
        $this->tableName = 'users';
    }
    function insert($data){
        return $this->db->insert($this->tableName, $data);
    }
}