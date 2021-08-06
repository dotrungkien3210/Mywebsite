






                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">User</h2>
                                <a type="button" class="btn btn-success" href="index.php?mod=admin&c=user&act=create">Add new</a>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                
                                                <th>NAME</th>
                                                <th>IMAGE</th>
                                                
                                                <th>Password</th>
                                                <th>POSITION</th>
                                                <th class="text-right">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($users as $key => $user) {?>
                                            <tr>
                                               
                                                <td><?php echo $user['users_name'];  ?></td>
                                                <td><img src="publics/imageUpload/userImg/<?php  echo $user['users_thumbnail']; ?>"></td>
                                                
                                                <td><?php echo $user['users_password'];  ?></td>
                                                <td><?php echo $user['users_position'];  ?></td>
                                                <td>
<a class="btn btn-primary btn-sm" href="index.php?mod=admin&c=user&act=show&id=<?php echo $user['users_id'] ?>">Detail</a>
<a class="btn btn-warning btn-sm" href="index.php?mod=admin&c=user&act=edit&id=<?php echo $user['users_id'] ?>&name=publics/imageUpload/userImg/<?php echo $user['users_thumbnail']; ?>">Edit</a>
<a class="btn btn-danger btn-sm"  href="index.php?mod=admin&c=user&act=delete&id=<?php echo $user['users_id'] ?>&name=publics/imageUpload/userImg/<?php echo $user['users_thumbnail']; ?>">Delete</a>
                                               </td>
                                            </tr>
                                        </tbody>
                                        <?php }  ?>
                                    </table>
                                </div>
                            </div>
                            
                        </div>