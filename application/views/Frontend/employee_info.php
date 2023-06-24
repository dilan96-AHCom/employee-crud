
<body class="bg p-2 text-dark bg-opacity-25">
   
        <?php if($this->session->flashdata('status')) : ?>
            <div class="alert alert-success alert-dismissible fade show  w-50 p-3" role="alert">
                
                <?= $this->session->flashdata('status'); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    


    <div class="container">
        <table id="infotable1" class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($employeeinfo as $info) : ?>
                    <tr>
                        <th><?php echo $info->id ?></th>
                        <td><?php echo $info->name; ?></td>
                        <td><?php echo $info->email; ?></td>
                        <td><?php echo $info->mobile; ?></td>
                        <td><?php echo $info->address; ?></td>
                        <td><a href="<?php echo base_url('Backend/EmployeeController/edit_employee/'.$info->id); ?>">Edit</a>
                           <!-- <div scope="col">
                                    <td><a href="<?php echo base_url('Backend/EmployeeController/edit_employee/'.$info->id); ?>">Edit</a></td>

                                    <td><a class="link-danger" href="<?php echo base_url('delete/'.$info->id); ?>">Delete</a></td> 
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm confirm-delete" value="<?= $info->id ?>">Delete</button>
                                    </td>
                            </div>  -->
                        </td>
                        <td><button type="button" class="btn btn-danger btn-sm confirm-delete" value="<?= $info->id ?>">Delete</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
