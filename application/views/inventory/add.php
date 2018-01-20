<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Adding Item</title>
	<link rel="shortcut_icon" type="image/png" href="<?php echo base_url();?>/Public/images/Haha.png">

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<?php echo form_open('Main/add_item'); ?>
 <div class="form-group">
 	<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Item Name </label>
 		<div class="col-sm-9">
			<input type="text" id="form-field-1" placeholder="enter item name" name="item_name" class="col-xs-10 col-sm-5" required/>
 		</div>
 </div>

 <div class="form-group">
	 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Item Type </label>
		 <div class="col-sm-9">
		 <input type="text" id="form-field-1" placeholder="enter item type" name="item_type" class="col-xs-10 col-sm-5" required/>
		 </div>
 </div>

 <div class="form-group">
 	<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Item Quantity </label>
 		<div class="col-sm-9">
 			<input type="number" id="form-field-2" placeholder="0" name="item_quantity" min="1" max="500" class="col-xs-10 col-sm-5"  required/>
 		</div>
 </div>

  <div class="form-group">
 	<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Comment </label>
 		<div class="col-sm-9">
 			<textarea name="comment" placeholder="enter your comment here"></textarea> 
 		</div>	
 </div>	
<button type="submit" value="submit">SAVE</button>
<button type="reset" value="reset">RESET</button>
<?php echo form_close(); ?><br/>
<button><a href='<?php echo base_url();?>'">back</a></button>
</body>
</html>