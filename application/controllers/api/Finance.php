<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Finance extends  BD_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('finance_model');
    }
    function get_select_get(){
        $result = $this->finance_model->allFinance();
        $this->response([
            'status' => true,
            'response' => $result
        ],REST_Controller::HTTP_OK);
    }
    function getFinance_get(){
        $finance_id = $this->get('finance_id');
        $result = $this->finance_model->getFinance($finance_id);
        $this->response([
            'status' => true,
            'response' => $result
        ],REST_Controller::HTTP_OK);
    }
    function post_create_post(){
        $finance_name = $this->post('finance_name');
        $shirt_size = $this->post('shirt_size');
        $student_id = $this->post('student_id');
        $status = $this->post('status');
        $money = $this->post('money');
        $user = $this->post('user');
        $data = [
            'finance_id' => null,
            'finance_name' => $finance_name,
            'shirt_size' => $shirt_size,
            'status' => $status,
            'student_id' => $student_id,
            'money' => $money,
            'user' => $user
        ];
            $result = $this->finance_model->insert($data);
            $this->response([
                'status' => true,
                'response' => $result
            ],REST_Controller::HTTP_OK);
    }
    function post_update_post(){
        $finance_id = $this->post('finance_id');
        $finance_name = $this->post('finance_name');
        $shirt_size = $this->post('shirt_size');
        $student_id = $this->post('student_id');
        $status = $this->post('status');
        $money = $this->post('money');
        $data = [
            'finance_id' => $finance_id,
            'finance_name' => $finance_name,
            'shirt_size' => $shirt_size,
            'status' => $status,
            'student_id' => $student_id,
            'money' => $money
        ];
            $result = $this->finance_model->update($data);
            $this->response([
                'status' => true,
                'response' => $result
            ],REST_Controller::HTTP_OK);
    }
    function get_delete_get(){
        $finance_id = $this->get('finance_id');
        $result = $this->finance_model->delete($finance_id);
        $this->response([
            'status' => true,
            'response' => $result
        ],REST_Controller::HTTP_OK);
    }
}