<?php 
	//khai báo array chứa các màu sắc
	$color = array("purple","violet","pink","red","yellow","orange");
 ?>
<script type="text/javascript">
	var slide =Array("purple","violet","pink","red","yellow","orange");
	<?php foreach ($color as $key => $value):?>
	slide[<?php echo $key; ?>] ="<?php echo $value; ?>";
	<?php endforeach; ?>
	var n =0;
	setInterval(function(){
		document.getElementById('box').setAttribute("style","background:"+slide[n]);
		n++;
		if (n == slide.length) {
			n = 0;
		}
	},10);
</script>