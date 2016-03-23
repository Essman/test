<?php

  $dsn = 'mysql:host=127.0.0.1;dbname=test';
            $username = 'root';
            $password = '';

      
        try {

          
            $pdocon = new PDO($dsn, $username, $password);

            IF(!$pdocon)
            {
                echo 'not connected'. mysql_error();
                exit;
            }else
            {
                echo 'greate work';
            }
            
            
            
            $pdoArgument = $pdocon->prepare('SELECT * FROM traning');

            $pdoArgument->execute();
           
            $traningar = $pdoArgument->fetchAll();

            $pdocon = NULL;

            
        }catch (Exception $pdoexp) {

            $pdocon = NULL;
            throw new Exception('Databasfel.');
        }
    
        foreach($traningar as $key => $value){
            echo 'hello';
        }