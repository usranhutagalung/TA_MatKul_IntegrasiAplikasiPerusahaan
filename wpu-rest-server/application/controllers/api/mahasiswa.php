<?php

use RestServer\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');


require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class mahasiswa extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model', 'mahasiswa');

        $this->methods['index_get']['limit'] = 10000;
    }

    public function index_get() {
        $id = $this->get('id');
        if ($id == null) {
            $mahasiswa = $this->mahasiswa->getMahasiswa();
        } else {
            $mahasiswa = $this->mahasiswa->getMahasiswa($id);
        }

        if ($mahasiswa) {
            $this->response([
                    'status' => true,
                    'data' => $mahasiswa
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
        }
    }


}