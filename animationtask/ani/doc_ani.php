<?php 
error_reporting(E_ERROR | E_PARSE);

function anitask(){

?>

<html>
<head>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<script> 
jQuery(document).ready(function(){
  jQuery("button").click(function(){
    var div = jQuery("div");  
    div.animate({left: '100px'}, "slow");
    div.animate({fontSize: '3em'}, "slow");
  });
});
</script> 
</head>
<body>

<button>Start Animation</button>

<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>

<div style="background:#98bf21;height:100px;width:200px;position:absolute;">HELLO</div>

</body>
</html>


<?php } 

add_shortcode('display_ani', 'anitask');


?>
