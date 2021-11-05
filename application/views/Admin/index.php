

       


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><font face= "Tahoma">DATA REGISTRASI </font></h1>
          
                    </div>
                    <hr>
                    <div class="container">
                      <div class="card-body">
                        <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role_id</th>
                        <th scope="col">Is_active</th>
                        <th scope="col">Data_Created</th>
                        <th colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($data as $Rg) :?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $Rg->name ?></td>
                          <td><?php echo $Rg->email ?></td>
                          <td><img src="<?php echo base_url('assets2/img/'. $Rg->image.''); ?>" height="50px" width="50px"></td>
                          <td><?php echo $Rg->password ?></td>
                          <td><?php echo $Rg->role_id ?></td>
                          <td><?php echo $Rg->is_active ?></td>
                          <td><?php echo $Rg->date_created ?></td>
                       
                          <td><?php echo anchor('C_admin/hapus/'. $Rg->id, '<div class="btn btn-danger"><i class="fa fa-trash"></i></div') ;?></td>
                            <td><?php echo anchor('C_admin/edit/'.$Rg->id, '<div class="btn btn-primary"><i class="fa fa-edit"></i></div>')  ?></td>
                         

                        </tr>
                       <?php endforeach; ?> 
                    </tbody>
                    </div>
                  </table>
                </div>
              </div>
                 

                    
                    

                    <!-- Content Row -->
                    <div class="row">
                    </div>

                
                       

                     
                   
                    
                   

                       
