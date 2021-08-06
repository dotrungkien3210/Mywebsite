                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Category</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>NAME</th>
                                                <th>DESCRIPTION</th>
                                                <th class="text-right">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                          
                                            <tr>
                                                <td><?php echo $categories[0]['categories_id'];  ?></td>
                                                <td><?php echo $categories[0]['categories_name'];  ?></td>
                                                <td><?php echo $categories[0]['categories_description'];  ?></td>
                                                <td>
<a href="index.php?mod=admin&c=category&act=list" class="btn btn-primary">Back</a>
                                               </td>
                                            </tr>
                                        </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                            
                        </div>