
<html>
<head>
	<?php require "extensions.php"; ?>
</head>
<body>
    <?php require('sidenav.php'); ?>
    <br><br><br>
<div id="container-fluid">
<?php if($this->session->flashdata('successful'))
{
    echo '<div class="alert alert-success">';
	echo $this->session->flashdata('successful');
    echo '</div>';
}
 	if($this->session->flashdata('edit'))
{
    echo '<div class="alert alert-success">';
	echo $this->session->flashdata('edit');
    echo '</div>';
}

?>
  <div class="container-fluid">
    <h1 class="page-header">Clinic item monitoring</h1>
      <div class="pull-right">
        <ol class="breadcrumb">
          <li>
            <a href="../Main/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li class="active">
            <i class="fa fa-th-list"></i> Inventory
          </li>
        </ol>
      </div>
  </div>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_item">Add Item</button>

<!-- Modal -->
<div id="add_item" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new item</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open('inventory/add_item')  ?>
            <div class="form-group">
                <label for="itemname">Item Name:</label>
                <input type="text" class="form-control" name="item_name" required>
            </div> 
            <div class="form-group">
                <label for="itemtype">Item Type:</label>
                <input type="text" class="form-control" name="item_type" required>
            </div>
            <div class="form-group">
                    <label for="itemquantity">Item Quantity:</label>
                 <input type="number" class="form-control" min="0" class="form-control" name="item_quantity" required>
            </div>
            <div class="form-group">
                <label for="e_comment">Comment:</label>
                <input type="text" class="form-control" name="comment" required> 
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Add</button> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>

  </div>
</div>
<br><br>
		<table class='table table-hover table-bordered'>
		<thead>
			 <th>Item Number</th>
			 <th>Item Name</th>
			 <th>Type of Item</th>
			 <th>Quantity Delivered</th>
			 <th>Date Delivered</th>
			 <th>Date Updated</th>
			 <th>Comment</th>
			 <th>Action</th>
		 </thead>
		 <?php 
        if(isset($item))
        {
            foreach ($item as $row)
            {
            	echo "<tr>";
                echo "<td>".$row->item_no."</td>";
                echo "<td>".$row->item_name."</td>";
                echo "<td>".$row->item_type."</td>";
                echo "<td>".$row->item_quantity."</td>";
                echo "<td>".$row->item_quantity_date."</td>";
                echo "<td>".$row->item_quantity_updated."</td>";
                echo "<td>".$row->comment."</td>";
                echo '<td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bs-example-modal-lg'.$row->item_no.' ">Update Item</button>
                <a href="./Inventory/delete_i/'.$row->item_no.'"><button type="button" id="" class=" delete btn btn-primary">Delete Item 
                </button></a>
                             <div class="modal fade" id="bs-example-modal-lg'.$row->item_no.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                               <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                   <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                     <h4 class="modal-title" id="edit_item">Edit Item</h4>
                                   </div>
                                  <form action="Inventory/edit_item" method="POST">
                                  <div class="modal-body">
                         				<div class="form-group">
                                         <input type="hidden" value="'.$row->item_no.'" class="form-control" id="hide" name="item_id">
                                        </div>
                                        <div class="form-group">
                                         <label for="itemname">Item Name</label>
                                         <input type="text" value="'.$row->item_name.'" class="form-control" placeholder="enter item name" id="itemname" name="itemname">
                                        </div>
                                        <div class="form-group">
                                         <label for="itemtype">Item Type</label>
                                         <input type="text" value="'.$row->item_type.'" class="form-control" placeholder="enter item type" id="itemtype" name="itemtype">
                                        </div>
                                        <div class="form-group">
                                         <label for="item quantity">Item quantity</label>
                                         <input type="number" min="0" value="'.$row->item_quantity.'" class="form-control" placeholder="enter item quantity" name="itemquantity">
                                        </div>
                                        <div class="form-group">
                                         <label for="comment">Comment</label>
                                         <input type="text" value="'.$row->comment.'" class="form-control" placeholder="new comment">
                                        </div>
                                  </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                             <button type="submit" onclick="" class="btn btn-primary pull-left" value="submit" >Save</button>
                           </div>
                        </form>
                     </div>
                  </div>
                </div>
                	 </td>';
	            echo "</tr>";
        	}
        }
        else{
            echo "no current record";
        }
        ?>
		</table>
        <h1></h1>
 
	   
</div>
</body>
</html>