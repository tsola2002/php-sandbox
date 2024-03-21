<?php 

    class FilePointer {

        private $fpointer = NULL;

        // CONSTRUCTOR
        public function __construct($file){
            //check if a file exists 
            if(!file_exists($file) || !is_file($file)){
            throw new Exception('The file does not exist');
            }

            // check that a file can open
            if(!$this->fpointer = @fopen($file,'w')){
                throw new Exception('we could not open the file');
            }
        }

        function write($data){
            if(!@fwrite($this->fpointer, $data . "\n")){
                throw new Exception('we could not write to the file');
            }
        }

        function close(){
            if($this->fpointer){
                fclose($this->fpointer);
            }
        }

        // function __destruct(){
        //     $this->close();
        // }

    }



?>