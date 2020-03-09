<?php
  include 'server.php';
  include 'partials/header.php';
?>

<?php
if (!empty($_GET['roomNumber'])) { ?>
  <div class="alert alert-danger">
    Hai cancellato la stanza id: <?php echo $_GET['roomNumber']; ?>
  </div>
<?php } ?>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Tutte le stanze</h2>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>ROOM NUMBER</th>
                <th>FLOOR</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($rooms)) {
                 foreach ($rooms as $room) { ?>
                   <tr>
                     <td><?php echo $room['id']; ?></td>
                     <td><?php echo $room['room_number']; ?></td>
                     <td><?php echo $room['floor']; ?></td>
                     <td><a href="show/show.php?id=<?php echo $room['id']; ?>">VIEW</a></td>
                     <td><a href="update/edit.php?id=<?php echo $room['id']; ?>">UPDATE</a></td>
                     <td>
                       <form action="delete/server.php" method="post">
                         <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                         <input class="btn btn-danger" type="submit" value="DELETE">
                       </form>
                     </td>
                   </tr>
                <?php }
                } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
