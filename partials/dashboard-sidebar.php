<?php
if(!defined('access_const')) {
   die('Direct access not permitted.');
}
?>
<div class="list-group">
  <a href="dashboard.php" class="list-group-item list-group-item-action list-group-item-light
  <?php if(!isset($_GET['category'])) {echo "active";} ?>">All</a>
  <a href="dashboard.php?category=juniors" class="list-group-item list-group-item-action list-group-item-light <?php if(isset($_GET['category']) && $_GET['category']=='juniors') {echo "active";} ?>">Juniors (18 - Below)</a>
  <a href="dashboard.php?category=seniors" class="list-group-item list-group-item-action list-group-item-light <?php if(isset($_GET['category']) && $_GET['category']=='seniors') {echo "active";} ?>">Seniors (18 - Above)</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-light">Contact Persons</a>
</div>
<button class="export-btn btn btn-light my-3">Export Participants</button>