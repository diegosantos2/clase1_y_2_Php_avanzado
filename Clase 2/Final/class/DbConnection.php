<?php

/**
 * Contexto de instancia => miembros vinculados al objeto (por defect)
 * Contexto estático => miembros NO vinculados al objeto (static)
 */
class DbConnection
{

  private static $instance = null;

  private $connection = null;

  private function __construct()
  {
    echo 'Construyendo DbConnection';
    $this->connection = mysqli_connect('localhost', 'root', '', 'comercioit');
  }

  public function getConnection()
  {
    return $this->connection;
  }

  /**
   * Si lo tengo, te doy lo que tengo. Sino, intento crearlo
   */
  public static function get() 
  {
    if(is_null(self::$instance))
      self::$instance = new self();
    
    $obj = self::$instance;

    return $obj->getConnection();
  }

}
