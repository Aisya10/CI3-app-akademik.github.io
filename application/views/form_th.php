 <!-- basic form start -->
 <div class="col-12 mt-5">
     <div class="card">
         <?php
            if (validation_errors()) {
            ?>

             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <strong>Sorry! <?php echo validation_errors(); ?> </strong>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
                 </button>
             </div>
         <?php

            }
            ?>
         <div class="card-body">
             <h4 class="header-title">Form Add School Year</h4>
             <form action="" method="post">

             </form>
             <?php echo form_open('admin/simpan_th'); ?>
             <div class="form-group">

                 <!-- <label for="th"> Tahun Pelajaran</label>
                                                <input type=" " class="form-control" id="th" 
                                                 placeholder="Isi Tahun Pelajaran"> -->
                 <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                                                    email with anyone else.</small>  -->
                 <!-- Form Anchor CI  -->
                 <!-- ini sudah kuperbaiki -->
                 <?php
                    $data_input = [
                        'name' => 'th',
                        'class' => 'form-control',
                        'id' => 'th',
                        'placeholder' => 'Isi Tahun Pelajaran'
                    ];
                    ?>
                 <?= form_input($data_input); ?>



             </div>
             <!-- <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div> -->
             <!-- <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button> -->
             <?php echo form_submit('save', 'SIMPAN', array('class' => 'btn btn-primary mt-4 pl-4')) ?>
             <?php echo form_close(); ?>
         </div>
     </div>
 </div>
 <!-- basic form end -->



 </div>