<?php
require('dbcon.php');
session_start();

$results = $pdocon->prepare("SELECT * FROM equipment_tbl WHERE status = 'Waiting'");
$results->execute();



while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
  $ordinace = $row["equipment_id"];
  echo '<tr onclick="javascript:showRow(this);">' .

    '<td>' . $row['equipment_id'] . '</td>' .
    '<td>' . $row['equipment_type'] . '</td>' .
    '<td>' . $row['status'] . '</td>' .
    '<td>' ?> <button id="<?= $row['equipment_id']; ?>" type="button" class="btn btn-primary" onclick="window.location.href = 'maintenances.php?id=<?= $row['equipment_id']; ?>'"><box-icon name='wrench' color='#ffffff'></box-icon></button></td>' .

<?php echo '</tr>';
}



?>
<script>
  $(document).ready(function() {


    $('button').click(function() 
    {
      ids = $(this).attr('id')
      $.ajax({
        url: "maintenances.php",
        method: 'post',
        data: {
          id: ids
        },
        success: function(sd) {
          $(".modal-body").html(sd);
        }
      });
      $('#myModal').modal("show");
    });
  });
</script>