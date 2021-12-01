<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<div class="row" style="margin-top: 30px;">
	<div class="col-md-12">
		<?php 
			$message = isset($_GET["message"]) ? $_GET["message"] : "";
		 ?>
		 <?php if($message == "emailExists"): ?>
		 <script type="text/javascript">alert('Email already exists!');</script>
		<?php endif; ?>
		<?php if($message == "registerSuccess"): ?>
		 <script type="text/javascript">alert('Register Successfully!');</script>
		<?php endif; ?>
		<?php if($message == "checkOutSuccess"): ?>
		 <script type="text/javascript">alert('Check Out Successfully!');</script>
		<?php endif; ?>
	</div>
</div>