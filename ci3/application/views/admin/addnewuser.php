  <!-- main content start -->
  <div class="main-content">

<!-- content -->
<div class="container-fluid content-top-gap">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-breadcrumb">
      <li class="breadcrumb-item"><a href="admindashboard">Home</a></li>
      <li class="breadcrumb-item"><a href="allusers">Users</a></li>
      <li class="breadcrumb-item active" aria-current="page">adduser</li>
    </ol>
  </nav>


  <!-- modals -->
  <section class="template-cards">
    <div class="card card_border">
      <div class="cards__heading">
        <h3>Add User</h3>
      </div>
      <div class="card-body pb-0">
            <?php 
                // echo "<pre>";
                // print_r($UserDataById['Data'][0]->user_name);
            ?>
      <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="uname"  class="form-control mt-2" id="name" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="password" name="pass"  class="form-control mt-2" id="pass" placeholder="Enter your password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="email"  class="form-control mt-2" id="email" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="mobile" class="form-control mt-2" id="mobile" placeholder="Enter your mobile">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <input type="submit" class="btn btn-info" id="btn-login" value="Registration">
                            <input type="submit" class="btn btn-danger" value="Cancel" >
                        </div>
                    </div>
                    
                    </form>
      </div>
    </div>
  </section>
  <!-- //modals -->

</div>
<!-- //content -->
</div>
<!-- main content end-->
</section>