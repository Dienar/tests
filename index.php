<?php
class index{
    
    public function __construct($string){
        $this->string = $string;

    }
      function Check(){
            
     

            $count = 0;
            $open = ['{'];
            $close = ['}'];
            $lenth = strlen($this->string);

            for($i = 0;$i < $lenth;$i++){
                $char = $this->string[$i];

                if(in_array($char,$open)){
                    $count++;
                }
                if(in_array($char,$close)){
                    $count--;
                }
            }
            if ($count != 0){
                echo "Ошибка";
            }else{
                echo "Верно!";
            }
        }
    
}
$class = new index("GHbdt{{gas{f}}}");
echo $class->Check();