<?php 

 class MagicGetterSetter{
    public function __set($property, $passMark){
        try{
                $this->property= $passMark;
            
            }catch(Exception $e) {
                echo 'Error Message: ' .$e->getMessage();
              }
    }

    public function __get($property){
        try{
            return "You have  " . $this->property . "%";

        }catch(Exception $e) {

            echo 'Error Message: ' .$e->getMessage();
          }
    }

}
final class InheritingClass extends MagicGetterSetter{
   //some code but this class cannot be extended by another class
}

$ob= new MagicGetterSetter;
$ob->mark= 20;//setting the  mark
echo $ob->mark;//getting the result


/*Explain why you chose to use a class/trait/interface for this
    + I used the class because its an easy way to keep (objects, methods, variables) and make the code readable
      -
    +I did not use the interface since no data abstraction was required;
    +traits- traits could have been used as they reduce complexity but however I chose simple classes since
    the task was not complicated enough to use traits.
*/
?>