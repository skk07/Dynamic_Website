<?php 

if(isset($_SESSION['message']))
{
  ?>
<div>
  <strong>Hey!<?= $_SESSION['message']; ?></strong>
</div>

<?php
unset($_SESSION['message']);
}

?>