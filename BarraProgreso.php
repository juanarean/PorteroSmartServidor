<?php
$TotalRegistros=rand(0,500);
echo $TotalRegistros;
?>




<!DOCTYPE html>            
<html>   
<head>
<meta charset="utf-8">       
<title>PSMART</title>
<script>
</script>
<style>
<style type="text/css">

.outter
{
height:55px;
width:200px;
border:solid 1 px #000;	
}

.inner
{
height:25px;
width:<?php echo $TotalRegistros;?>px;
border-right:solid 1 px #000;	
background-color:orange;

}
</style>



</style>
</head>
<body>

<div class="outter">

<div class="inner">
<?php echo $TotalRegistros?>;
</div>
</div>
</body>
</html>
