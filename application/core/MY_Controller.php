<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        log_message('debug', 'CI My Admin : MY_Controller class loaded');
    }
}

/**
 * End of file MY_Controller.php
 * Location: application/core/MY_Controller.php
 */