<?php 
class myHappyBox { 

    var $box_height = 100; 
    var $box_width = 100; 
    var $box_color = '#EC0000'; 

    function myHappyBox(){ 
    } 

    function setHeight($value){ 
        $this->box_height=$value; 
    } 
    function setWidth($value){ 
        $this->box_width=$value; 
    } 
    function setColor($value){ 
        $this->box_color=$value; 
    } 

    function displayBox(){ 
        echo sprintf(' 
            <div style="height:%spx;width:%spx;background-color:%s"> </div> 
        ',$this->box_height,$this->box_width,$this->box_color); 
    } 
} 
$box=new myHappyBox(); 
$box->displayBox(); 
?> 

