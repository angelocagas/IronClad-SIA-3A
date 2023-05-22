<?php
include 'connect.php';

$admin = $_SESSION['admin'];

if (!isset($admin)) {
    header('location:login.php');
}

if (isset($_POST['search'])) {
    ?>


<!-- Hoverable Table rows -->
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$keyword = $_POST['keyword'];
    $query = $conn->prepare("SELECT * FROM `users` WHERE `username` LIKE '%$keyword%' or `fullname` LIKE '%$keyword%' or `role` LIKE '%$keyword%'");
    $query->execute();
    while ($row = $query->fetch()) {
        ?>
                <tr>
                    <td><?php echo $row['emp_id'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['fullname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['department'] ?></td>
                    <td><?php echo $row['role'] ?></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="updateuser.php?id=<?=$row['id']?>"><i
                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="deleteuser.php?id=<?=$row['id']?>"><i
                                        class="bx bx-trash me-1"></i> Delete</a>

                            </div>
                        </div>
                    </td>
                </tr>
                <?php
    }
    ?>
            </tbody>
        </table>
    </div>
</div>
<?php
} else {
    ?>
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Department</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

    $sql = "SELECT * FROM `users` WHERE `department` LIKE 'Accounting';";
    $result = $conn->prepare($sql);
    $result->execute();
    while ($row = $result->fetch()) {
        ?>
                <tr>
                    <td><?php echo $row['emp_id'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['fullname'] ?></td>
                    <td><?php echo $row['department'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['role'] ?></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalCenter2"><i
                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="deleteuser.php?username=<?=$row['username']?>"><i
                                        class="bx bx-trash me-1"></i> Delete</a>

                            </div>
                        </div>
                    </td>
                </tr>
                <?php
    }
    ?>
            </tbody>
        </table>
    </div>
</div>
<!--/ Hoverable Table rows -->

<?php
}
?>
<?php

$select_profile = $conn->prepare("SELECT * FROM `users` WHERE username = ?");
$select_profile->execute([$username]);
$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

?>
        <form action="updateuser.php" method="post">
            <!-- Modal -->
            <div class="modal fade" id="modalCenter2" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Edit User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <class="form-label">Full Name</label>
                                        <input type="text" class="form-control" placeholder="" name="fullname" />
                                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <class="form-label">Username</label>
                                        <input type="text" class="form-control"
                                            placeholder="Please double check the username, it will show an error if the username does not match."
                                            name="username" value="" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="****" name="pass"
                                            required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="****" name="cpass"
                                            required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Role</label>
                                <select id="role" class="select2 form-select" name="role" required>
                                    <option>Select Role</option>  
                              <option value="admin">Admin</option>
                              <option value="user">User</option>
                            </select>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary" name="submit">Edit User</button>
                        </div>
                    </div>
                </div>
            </div>
</form>