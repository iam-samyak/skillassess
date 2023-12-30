 <div class="container">

   
 
<div id="update_notice"></div>  
 


<div class="row">

<div class="col-md-4">

<div class="card border-left-primary shadow  py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					  <a href="<?php echo site_url('user');?>">
					  <?php echo $this->lang->line('no_registered_user');?>
						</a>					  
						</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_users;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
</div>

</div>


<div class="col-md-4">

<div class="card border-left-success shadow  py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					  <a href="<?php echo site_url('qbank');?>">
					  <?php echo $this->lang->line('no_questions_qbank');?>
						</a>					  
						</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_qbank;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
</div>

</div>

<div class="col-md-4">

<div class="card border-left-warning shadow  py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					  <a href="<?php echo site_url('quiz');?>">
					  <?php echo $this->lang->line('no_registered_quiz');?>
						</a>					  
						</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_quiz;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
</div>

</div>


 
 
 
 
 

</div>
 
<div class="row"></div>






<div class="row" style="margin-top:20px;">
      <div class="col-lg-7">


<div class="row">
     


<div class="col-md-6">

<div class="card border-left-success shadow  py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					  <a href="<?php echo site_url('user');?>">
					 <?php echo $this->lang->line('active');?> <?php echo $this->lang->line('users');?>
						</a>					  
						</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $active_users;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
</div>

</div>

<div class="col-md-6">



<div class="card border-left-danger shadow  py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					  <a href="<?php echo site_url('user');?>">
					 <?php echo $this->lang->line('inactive');?> <?php echo $this->lang->line('users');?>
						</a>					  
						</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $inactive_users;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-ban fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
</div>

</div>


	 
  

</div>


        <!-- recent users -->

        <div class="card  shadow  py-2" style="margin-top:20px;">
          <div class="card-heading" style="padding:5px;">
		 <h6 class="m-0 font-weight-bold text-primary" >
            <?php echo $this->lang->line('recently_registered');?> 
		   </h6>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-striped valign-middle">
              <thead>
                <tr><th><?php echo $this->lang->line('email');?></th>
                <th class="text-xs-right"><?php echo $this->lang->line('full_name');?></th>
                <th class="text-xs-right"><?php echo $this->lang->line('group_name');?></th>
                <th class="text-xs-right"><?php echo $this->lang->line('contact_no');?></th>
                <th></th>
              </tr></thead>
              <tbody> 
              <?php 
if(count($result)==0){
	?>
<tr>
 <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
</tr>	
	
	
	<?php
}
foreach($result as $key => $val){
?><tr>
<td>
<a href="<?php echo site_url('user/edit_user/'.$val['uid']);?>"><?php echo $val['email'];?> <?php echo $val['wp_user'];?></a></td>
<td  class="text-xs-right"><?php echo $val['first_name'];?> <?php echo $val['last_name'];?></td>
 <td  class="text-xs-right"><?php echo $val['group_name'];?></td>
<td  class="text-xs-right"><?php echo $val['contact_no'];?></td>

                
              </tr>
             
             <?php 
             }
             ?> 
     
            </tbody></table>
          </div>
        </div>

        <!-- recent users -->

      </div>
      















</div>
 
<div class="row text-center" style="margin-top:30px;">
 
<?php 
echo "Page rendered in <strong> {elapsed_time} </strong> seconds.";
?>
</div>

<script>
update_check('5');
</script>
