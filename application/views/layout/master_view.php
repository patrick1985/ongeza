<html lang="en">

	
	<head>
	<title><?php echo isset($title) ? "Code-iG | $title": NULL;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>	
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>	
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	
	</head>
<body>

<div class="jumbotron-fluid text-center" style="margin-bottom:0"> <h2> ongeza  </h2>
	<p>Customer crud operations for demo </p>
</div>
<?php  $this->load->view('layout/navigation');?>

<?php  $this->load->view('layout/'.$content); ?>


<div class="jumbotron text-center"  style="margin-bottom:0; background:black; color:white;">
<p> &copy;Patrick w mdagano 2020. all rights reserved  Hotline 0714-645717</p>
</div>

</body>
</html>