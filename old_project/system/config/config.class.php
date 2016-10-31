<?php


class config {

  protected static $data = array();
  // #2 to be able to load config from somewhere, it should be public, it will load the configuration from a file
  // we are going to create later and it will store it in a file
  public static function load() {

    //get the configuration data from a file
    // initialize empty config
    $config = array();
    // include the config file and hope that there is some $config within
    include(CONFIG_DIR./'config.php');
    var_dump($config);
    static::$data = $config;
    //put in static::$data

  }

  public static function get($name, $default = null) { //this is for fallback

    //if data with name $name exists in static::$data
      //return that data
    // else
      // return default

  }

}



 ?>
