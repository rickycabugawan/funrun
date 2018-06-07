<?php
if(!defined('access_const')) {
   die('Direct access not permitted.');
}
?>
<table class="table table-hover table-responsive-sm mt-3">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Race Category</th>
      <th scope="col">Race Segment</th>
      <th scope="col">Race Shirt Size</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $count = count($_SESSION['firstname']);
      for ($i=0; $i < $count; $i++) { 
        ?>
        <tr>
          <td><?=ucfirst($_SESSION['firstname'][$i])." ".ucfirst($_SESSION['lastname'][$i])?></td>
          <td><?=strtoupper($_SESSION['category'][$i])?></td>
          <td><?=ucfirst($_SESSION['gender'][$i])?></td>
          <td><?=strtoupper($_SESSION['shirt'][$i])?></td>
        </tr>
        <?php
      }
     ?>
  </tbody>
</table>