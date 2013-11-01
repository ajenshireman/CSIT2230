<?php
class DB {
  protected $db_name = '';
  protected $db_user = '';
  protected $db_pass = '';
  protected $db_host = '';
  
  public function connect () {
    
  }
  
  public function connect ( $db_host, $db_user, $db_pass, $db_name ) {
    $connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass);
    mysqli_select_db($this->db_name);
    return true;
  }
}
?>