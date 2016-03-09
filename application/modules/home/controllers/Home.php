<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Home
 *
 * @author pemaza
 */
class Home extends MX_Controller {

    

    public function index() {


        $this->load->view("home");
    }

}
