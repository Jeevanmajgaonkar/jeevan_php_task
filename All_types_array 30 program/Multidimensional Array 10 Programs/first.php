
    <?php
    // students marksheet
    $student=[
      "sonu"=>['math'=>45,'hindi'=>78,'english'=>89],
      "monu"=>['math'=>50,'hindi'=>87,'english'=>60],
      "tonu"=>['math'=>93,'hindi'=>63,'english'=>45],
    ];
    
    foreach($student as $key=>$value){
       echo "$key=";
       
        foreach($value as $k=>$v){
       echo "$k=>$v";
        }
    echo "<br>";
    }
    
    ?>