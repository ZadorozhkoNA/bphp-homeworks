<?php
  class JsonFileAccessModel
  {
    protected $fileName;
    protected $file;

    public function __construct($fileName) {
      $this->fileName = SystemConfig::DATABASE_PATH . $fileName . '.json';
    }

    private function connect( $mode ) {
      return $this->file = fopen(  __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . $this->fileName, $mode);
    }

    private function disconnect() {
      fclose($this->file);
    }

    public function read() {
      $handle = $this->connect( 'r+' );
      $length = 1;
      $content = '';
      while (! feof($handle)) {
        $content .= fread($handle, $length);
      }
      // $content = stream_get_contents($handle);
      $this->disconnect();
      return $content;
    }

    public function write( $string ) {
      $handle = $this->connect( 'w+' );
      fwrite( $handle, $string );
      $this->disconnect();
    }

    public function readJson() {
      $content = $this->read();
      json_decode($content);
      if (json_last_error() === JSON_ERROR_NONE)
      {
        return $content;
      } else return 'Нужно передать данные в формате JSON';
    }

    public function writeJson( $string ) {
      json_decode($string);
      if (json_last_error() === JSON_ERROR_NONE)
      {
        $this->write( $string );
      } else return 'Нужно передать данные в формате JSON';
    }
  }
?>
