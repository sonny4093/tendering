
<?php
error_reporting(0);
			include("../../config.php");
			
			$id=$_REQUEST['id'];
			// $sql1="SELECT MAX(lot) as max_lot FROM document WHERE tender_id='$id'";
			// $result1=mysqli_query($db, $sql1);
			// while ($row1=mysqli_fetch_assoc($result1)) {
			// 	$max_lot=$row1['max_lot'];
			// }
			$sql_status="SELECT * FROM tender WHERE class='$id' AND status='1'";
			$result_status=mysqli_query($db, $sql_status);
			while ($row_status=mysqli_fetch_assoc($result_status)) {
				$lot_no=$row_status['lot'];

				$sqlf="SELECT * FROM document WHERE tender_id='$id' AND comittee=1 AND sample=1 AND price!=0 AND finishing=1"; 
				$resultf=mysqli_query($db, $sqlf);
				$rowf=mysqli_fetch_assoc($resultf);
			if ($row_status['transaction']=='1') {
			
			
			if($rowf['finishing']!=1) { 
				echo '<style type="text/css">
				.finish, .finished{
					display: none;
				}
			</style>';

				$sql="SELECT * FROM document WHERE tender_id='$id' AND lot='$lot_no' AND comittee=1 AND sample=1 AND price!=0 ORDER BY price asc"; 

			}
			else if($rowf['finishing']==1) { 
				echo '<style type="text/css">
				.finish, .finished{
					display: inline;
				}
			</style>';

				$sql="SELECT * FROM document WHERE tender_id='$id' AND lot='$lot_no' AND comittee=1 AND sample=1 AND price!=0 AND rank=1"; 

			}
		}
			else if ($row_status['transaction']=='0') {

				if($rowf['finishing']!=1) { 
					echo '<style type="text/css">
				.finish, .finished{
					display: none;
				}
			</style>';

				$sql="SELECT * FROM document WHERE tender_id='$id' AND lot='$lot_no' AND comittee=1 AND sample=1 AND price!=0 ORDER BY price desc"; 

			}
			else if($rowf['finishing']==1) { 
				echo '<style type="text/css">
				.finish, .finished{
					display: inline;
				}
			</style>';

				$sql="SELECT * FROM document WHERE tender_id='$id' AND lot='$lot_no' AND comittee=1 AND sample=1 AND price!=0 AND rank=1"; 

			} 
			}
			$result=mysqli_query($db, $sql);


			$sqlm="SELECT MAX(price) as price FROM document WHERE tender_id='$id' AND lot='$lot_no' AND comittee=1 AND sample=1 AND price!=0 ORDER BY price asc"; 
			$resultm=mysqli_query($db, $sqlm);
			$rowm=mysqli_fetch_assoc($resultm);
			$max=$rowm['price'];

			$sqln="SELECT MIN(price) as price FROM document WHERE tender_id='$id' AND lot='$lot_no' AND comittee=1 AND sample=1 AND price!=0 ORDER BY price asc"; 
			$resultn=mysqli_query($db, $sqln);
			$rown=mysqli_fetch_assoc($resultn);
			$min=$rown['price'];
			
			?>
			
			<table>
			<table class="table" width="100%"  style="border-collapse:collapse;">
			<thead><br>
			<tr><th ><strong style="border:none;"><?php echo "Result for lot"." ".$lot_no; ?></strong></th></tr>
			<tr><th><strong>No</strong></th><th><strong>Company name</strong></th></th><th><strong>Contact person</strong></th><th><strong> Email</strong></th><th><strong> Price</strong></th><th><strong> Rank</strong></th><th style="border:none;"  class="finish"><strong> </strong></th></th></tr>
			</thead>
			<tbody>

			<?php
			$count=0;
			$value=0;
			while ($row=mysqli_fetch_assoc($result)) {$count++; 
				if ($row['sample']==1) {
					if ($row_status['transaction']==1) {
						$sql3="UPDATE document set rank=1 WHERE tender_id='$id' AND lot='$lot_no' AND comittee=1 AND sample=1 AND price='$min'";
				$result3=mysqli_query($db,$sql3);
				}
				else if ($row_status['transaction']==0) {
						$sql3="UPDATE document set rank=1 WHERE tender_id='$id' AND lot='$lot_no' AND comittee=1 AND sample=1 AND price='$max'";
				$result3=mysqli_query($db,$sql3);
				}
				?>

				<tr><td><?php echo "$count"; ?></td><td><?php echo $row['company_name']; ?></td><td><?php echo $row['contact_person']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['price']; ?></td><td style="color: red;"><?php echo $count; ?></td><td class="finished" style="color: red;border:none; color: green;"><i class="fa fa-check-circle"></i><?php echo "Finished"; ?></td><?php 
						 ?>
			</tr>

			<?php
			//}
			}
			}
			
			

			//}
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
		<tr ><th><strong>Empty!</strong><w>There is no qualified bid </div></th></tr></table>
		<style type="text/css">
			.table {
				display: none;
			}
		</style>
			<?php
}


	
	
			 ?>