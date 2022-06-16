
<?php
//  function code()
// {
// 	$chars="abcdefghijklmnopqrstuvwxyz0123456789";
// 	srand((double)microtime()*1000000);
// 	$i=0;
// 	$pass='';
// 	while ($i <= 4) {
// 			$num=rand()% 33;
// 			$tmp=substr($chars, $num, 1);
// 			$pass=$pass.$tmp;
// 			$i++;
// 		}	
// 		echo  $pass;
// }
			include("../../config.php");
			
			$id=$_REQUEST['id'];
			
			$sql_status="SELECT * FROM tender WHERE class='$id'";
			$result_status=mysqli_query($db, $sql_status);
			while ($row_status=mysqli_fetch_assoc($result_status)) {
				$lot_no=$row_status['lot'];
			//if ($row_status['status']=='1') {
			
			
			//for ($a=1; $a <= $max_lot; $a++) { 

				$sql="SELECT * FROM document WHERE tender_id='$id' AND lot='$lot_no' AND price!='0' ";
			$result=mysqli_query($db, $sql);
			
			?>
			
			<table>
			<table class="table" width="100%"  style="border-collapse:collapse;">
			<thead><br>
			<tr><th ><strong style="border:none;"><?php echo "Bidders for lot"." ".$lot_no; ?></strong></th></tr>
			<tr><th><strong>Code</strong></th><th><strong>Company name</strong></th></th><th><strong>Contact person</strong></th><th><strong> Email</strong></th></th></tr>
			</thead>
			<tbody>
			<?php
			$count=0;
			while ($row=mysqli_fetch_assoc($result)) {$count++ ?>

				<tr><td><?php echo $row['code']; ?></td><td><?php echo $row['company_name']; ?></td><td><?php echo $row['contact_person']; ?></td><td><?php echo $row['email']; ?></td><?php 
						 ?>
			</tr>

			<?php
			//}
			
			//}
			

			}
			}
			if (mysqli_num_rows($result)==0) {
	?>
	<table style="
		color: #a94442; 
		background-color: #f2dede; 
		border-color: #d6e9c6;
		padding: 15px;
		margin-bottom: 20px;
		border: none;
		border: 1px solid transparent;
		border-radius: 4px;padding-right: 35px;
		width:750px;
		margin-left:8px;
		margin-top:0px;
		text-align:left;
		">
		<tr ><th><strong>Empty!</strong><w>There is no bidder </div></th></tr></table>
		<style type="text/css">
			.table {
				display: none;
			}
		</style>
			<?php
}


	
	
			 ?>