<?php
session_start();
 include("includes/k_header.php");
 include("model/database.php");
 
 //if(isset($_GET['']))
 
?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="page-wrapper">
            <div class="content container-fluid">            
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">            
                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Approve Blog</h3>                                           
                                          <!--  <div class="col-auto text-end float-end ms-auto download-grp">
												<a href='approve_add.php' class="btn  btn-outline-primary active"> <i class="icon fas fa-plus"></i>Add </a>
											</div> -->
                                        </div>            
                                    </div>
                                </div>            
                                <div class="table-responsive">
                                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread" >
                                            <tr>           
                                                <th>Sr. No</th>
                                                <th>Dr. Name</th>
                                                <th>Speciality </th>
                                                <th>Qualification </th> 
                                                <th>Blog Tital</th>
                                                <th>Blog Text </th>
                                                <th>Image </th>                                               
                                                <th>Approve/Reject</th> 
                                                <th>Action</th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $a = new DB();
										$result = $a->approve();
										if($result){
											$i=1;
											while ($row = mysqli_fetch_assoc($result)){																				
										?>
                                            <tr>
                                                <td><?php echo $row['id']?></td>
                                                <td><?php echo $row['name']?></td>
                                                <td><?php echo $row['speciality']?></td>
                                                <td><?php echo $row['qualification']?></td>
                                                <td><?php echo $row['blog_title']?></td>
                                                <td><?php echo $row['blogtext']?></td>
                                                <td><a href="student-details.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="uplods/image/<?php echo $row['upload_image'];?>" alt="User Image"></a></td>
												 <td><span class="badge light badge-info">Approve</span></td>                                                                                                                        
                                                <td>
                                                    <a href="edit_approve.php?id=<?php echo $row['id']; ?>" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"  data-bs-toggle="modal" data-bs-target="#exampleModalEdit"></i>
                                                    </a>
                                                    <a href="approve_view.php?id=<?php echo $row['id']; ?>" class="btn btn-sm bg-danger-light">
                                                        <i class="fa fa-solid fa fa-eye action_icon" data-bs-toggle="modal" data-bs-target="#exampleModalCenterview" ></i>
                                                    </a>     
                                                </td>  
                                            </tr>
											<?php }}?>
                                        </tbody>               
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		<?php include("includes/k_footer.php");?>