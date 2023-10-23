<?php

    class Hello {
        const LEAVING_MESSAGE = "Hello welcome in  W3Schools.com!";
      }
      
      echo Hello::LEAVING_MESSAGE;



      class Goodbye {
        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
        public function byebye() {
          echo self::LEAVING_MESSAGE;
        }
      }
      
      $goodbye = new Goodbye();
      $goodbye->byebye();
?>