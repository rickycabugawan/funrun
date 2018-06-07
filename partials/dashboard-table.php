<?php
if(!defined('access_const')) {
   die('Direct access not permitted.');
}

$_SESSION['funrun']=true;
require "functions/connection.php";

$query_category="'juniors','seniors'";
$query_limit="LIMIT 5";
$query_p="";
$page = 5;

if (isset($_GET['category'])) {
	$query_category = "'".$_GET['category']."'";
}

if (isset($_GET['page'])) {
	$query_limit = "LIMIT ".$_GET['page'];
	$page = $_GET['page'];
}

if (isset($_GET['p'])) {
	$x = $page*$_GET['p']-$page;
	$query_p = "OFFSET ".$x;
}

$page_array = array(5,10,15,20);

$sql="SELECT COUNT(*) FROM participants WHERE category IN ($query_category)";
$result = mysqli_query($conn,$sql);
$totalfilteritems = mysqli_fetch_array($result)[0];
// echo $sql;
$sql="SELECT COUNT(*) FROM participants WHERE category IN ($query_category) AND gender = 'm'";
$result = mysqli_query($conn,$sql);
$totalmale= mysqli_fetch_array($result)[0];


$sql="SELECT COUNT(*) FROM participants WHERE category IN ($query_category) AND gender = 'f'";
$result = mysqli_query($conn,$sql);
$totalfemale= mysqli_fetch_array($result)[0];

?>
<div class="card">
  <div class="card-header">
    <?php if(isset($_GET['category'])) {
    	echo strtoupper($_GET['category']);
    }else echo "ALL";
     ?>
  </div>
  <div class="card-body pb-0">
  	<!-- Show total count of participants -->
  	<div class="total-bar my-2">
  		<span class="total mr-2 mr-md-5">Total: <span class="total-val"><?=$totalfilteritems ?></span></span>
  		<span class="male mr-2 mr-md-5">Male: <span class="male-val"><?=$totalmale ?></span></span>
  		<span class="female">Female: <span class="female-val"><?=$totalfemale ?></span></span>
  	</div>
  	<!-- Entries per page and search box -->
  	<div class="filter-box my-3">
  		<span>Show</span>
  		<select class="entries-per-page">
  			<?php 
				foreach ($page_array as $value) {
					if (isset($_GET['page']) && $value == $_GET['page']) {
					echo "<option value='$value' selected>$value</option>";
					}
					else{
					echo "<option value='$value'>$value</option>";
					}
				}
			 ?>
  		</select>
  		<span>entries</span>
  		<div class="search-box float-right">
	  		<label for="search">Search:</label>
	  		<input class="input-search" type="text" id="search" name="keyword">
  		</div>
  	</div>

    <table class="table table-hover table-responsive-md mt-3">
	   	<thead>
			<tr>
			  <th scope="col">#</th>
			  <th scope="col">Name</th>
			  <th scope="col">Age</th>
			  <th scope="col">Gender</th>
			  <th scope="col">Address</th>
			  <th scope="col">Email Address</th>
			  <th scope="col">Contact Number</th>
			  <th scope="col">Date Registered</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql="SELECT * FROM participants WHERE category IN ($query_category) $query_limit $query_p";
			$result = mysqli_query($conn,$sql);
			$c=1;
			if (isset($_GET['p'])) {
					$pend = $page*$_GET['p'];
					$pstart = $pend-$page+1;
					$c=$pstart;	
				if ($pend > $totalfilteritems){$pend = $totalfilteritems;}
			}

			while($row = mysqli_fetch_assoc($result)){
				?>
					<tr>
					  <th scope="row"><?=$c?></th>
					  <td><?=ucfirst($row['firstname'])." ".ucfirst($row['lastname'])?></td>
					  <td><?=$row['age']?></td>
					  <td><?=$row['gender']=='m'?'Male':'Female'?></td>
					  <td><?=$row['address']?></td>
					  <td><?=$row['email']?></td>
					  <td><?=$row['contactnum']?></td>
					  <td><?=$row['timestamp']?></td>
					</tr>
				<?php
				$c++;
			}
			?>
			
		</tbody>
	</table>
	<hr>
	<div class="pagination-box">
		<span>
			<?php
				$pstart = 1;
				$pend = $page;
				if ($pend > $totalfilteritems){$pend = $totalfilteritems;}
				$totalpages = ceil($totalfilteritems/$page);
				if (isset($_GET['p'])) {
					$pend = $page*$_GET['p'];
					$pstart = $pend-$page+1;	
				if ($pend > $totalfilteritems){$pend = $totalfilteritems;}
				}
				 echo "Showing ".$pstart." to ".$pend." of ".$totalfilteritems." entries"; 
				 ?>
		</span>
		<ul class="pagination float-right">
			<li class="page-item"><a class="page-link" href="#">Previous</a></li>
			<?php 
				// echo $pages;
				for ($i=1; $i < $totalpages+1; $i++) { 
					if ((isset($_GET['p']) && $i == $_GET['p']) || (!isset($_GET['p']) && $i==1)) {
					echo "<li class='page-item num active'><a class='page-link' href=''>$i</a></li>";
					}
					else{
					echo "<li class='page-item num'><a class='page-link' href=''>$i</a></li>";
					}
				}
			 ?>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</div>
  </div>
</div>
