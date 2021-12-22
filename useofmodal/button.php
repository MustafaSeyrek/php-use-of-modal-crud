<!-- Delete -->
<div class="modal fade" id="delete<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Delete</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
                $delete = mysqli_query($conn, "SELECT * FROM users WHERE user_id='" . $row['user_id'] . "'");
                $drow = mysqli_fetch_array($delete);
                ?>
                <div class="container-fluid">
                    <h5>
                        <center>Are you sure to delete <strong><?php echo ucwords($drow['user_firstname'] . ' ' . $row['user_lastname']); ?></strong> from the list? This method cannot be undone.</center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="operations.php?id=<?php echo $row['user_id']; ?>&delete=ok" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
            </div>

        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "SELECT * FROM users WHERE user_id='" . $row['user_id'] . "'");
                $erow = mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form method="POST" action="operations.php?id=<?php echo $erow['user_id']; ?>">
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Firstname:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="firstname" class="form-control" value="<?php echo $erow['user_firstname']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Lastname:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="lastname" class="form-control" value="<?php echo $erow['user_lastname']; ?>">
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-2">
                                <label style="position:relative; top:7px;">Address:</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="address" class="form-control" value="<?php echo $erow['user_address']; ?>">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button name="btnEdit" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->