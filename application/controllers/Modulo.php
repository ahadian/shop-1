<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Home
 *
 * @author pemaza
 */
class Modulo  extends CI_Controller{
 
    public function index() {
        
        
        $this->load->view("modulo");
        
    }
    
    
}