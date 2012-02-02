<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Wrapper for the github php api library
 *
 * @author ner0tic
 */
class ddGithub {
  protected
    $_git = false;
  public function __construct() {
    // autoloader
    require_once(sfConfig::get('app_ddgithub_path').'lib/vendor/github-api/AutoLoader.php');
    Github_Autoloader::register();
    $this->_git = new Github_Client();
  }
}

?>
