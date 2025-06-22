
    <div class="container mt-5">
          <h1 class="text-center">List Of All Users</h1>
             <a class="btn btn-success" href="<?php echo base_url('Registration/add/');?>">Add New User</a>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($userList as $row) { ?>
    <tr>
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->name; ?></td>
      <td><?php echo $row->email; ?></td>
      <td><?php echo $row->phone; ?></td>
      <td>
<a href="<?php  echo base_url('Registration/edit/').$row->id; ?>"
 class="btn btn-info viewBtn"
    data-id="<?= $row->id;?>"
    data-name="<?= $row->name;?>"
    data-email="<?= $row->email;?>"
    data-phone="<?= $row->phone;?>"
    data-bs-toggle="modal"
    data-bs-toggle="modal"
  data-bs-target="#editModal">Edit</a>&nbsp;&nbsp;
 <!--<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>-->
  <a href="<?php  echo base_url('Registration/delete/').$row->id; ?>"
 class="btn btn-warning deleteBtn"
    data-id="<?= $row->id;?>"
    data-name="<?= $row->name;?>"
    data-email="<?= $row->email;?>"
    data-phone="<?= $row->phone;?>"
    data-bs-toggle="modal"
    data-bs-toggle="modal"
  data-bs-target="#deleteModal">Delete</a>
</td></tr>
    <?php } ?>
  </tbody>
</table>

     <?php if(isset($links))  {?>
    
<?php echo $links; ?>
     
     <?php } ?>    
 </div>


<!--Delete Modal-->
<div class="modal" id="deleteModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="<?php echo base_url('Registration/delete/'); ?>" method="post">
        <h5 class="modal-title">Delete User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="id" value="">
            <p>are sure You Want to delete this record?.</p>
      </div>
      <div class="modal-footer">
         <input  type="submit" name="submit" class="btn btn-danger" value="Delete">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </form>
      </div>
    </div>
  </div>
</div>

<!--Edit Modal-->

 <div class="modal" id="editModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="<?php echo base_url('Registration/edit'); ?>" method="post">
        <h5 class="modal-title">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
           <div class="input-group row">
                  <input type="hidden" class="form-control" id="uid" name="uid" value="">  
                    <label for="username">Username:</label>
                    <div>
                         <input type="text" class="form-control" placeholder="username" id="username" name="username" value="">
                      
                    </div>    
               </div><br>
                <div class="input-group row">  
                     <label for="email">Email:</label>  
                     <div>
                          <input type="text" class="form-control" placeholder="email" id="email" name="email" value="">
                           
                   </div>
               </div><br>
                <div class="input-group row">    
                
                <label for="phone">Phone:</label> 
                <div>
                        <input type="text" class="form-control" placeholder="phone" id="phone" name="phone" value="">
                        
                </div>
      </div>
      
      <div class="modal-footer">
             <input  type="submit" name="submit" class="btn btn-warning" value="Edit User">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             </form>
      </div>

    </div>
  </div>
</div>

<!--Edit Modal End-->

<script>
  
$(document).ready(function(){
      //Update 
    $('.viewBtn').on('click', function(){
        // Get data from button
        var id = $(this).data('id');
        var name = $(this).data('name');
        var email = $(this).data('email');
        var phone = $(this).data('phone');
      //alert(id);
        // Set modal fields
        $('#uid').val(id);
        $('#username').val(name);
        $('#email').val(email);
        $('#phone').val(phone);
      
    });

  $('.deleteBtn').on('click', function(){
        // Get data from button
        var id = $(this).data('id');
        var name = $(this).data('name');
        var email = $(this).data('email');
        var phone = $(this).data('phone');
      //alert(id);
        // Set modal fields
        $('#id').val(id);
        $('#username').val(name);
        $('#email').val(email);
        $('#phone').val(phone);
    });
});
</script>
