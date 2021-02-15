<?php
//Static methods are declared with the static keyword:
class ClassName {
    public static function staticMethod() {
      echo "Hello World!";
    }
  }


//To access a static method use the class name, double colon (::), and the method name:
class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  // Call static method
  greeting::welcome();


  //A static method can be accessed from a method in the same class using the self keyword and double colon (::):
  class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  
    public function __construct() {
      self::welcome();
    }
  }
  new greeting();   //echo hello world!



  //Static methods can also be called from methods in other classes. To do this, the static method should be public:
  class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class SomeOtherClass {
    public function message() {
      greeting::welcome();
    }
  }



  //To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.
  class domain {
    protected static function getWebsiteName() {
      return "W3Schools.com";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
      $this->websiteName = parent::getWebsiteName();
    }
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;
  ?>