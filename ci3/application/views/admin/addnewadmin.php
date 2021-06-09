
<style>
    input[type='radio']{
        -webkit-appearance: checkbox;
        outline: checkbox;
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4 mb-5 mt-5">
            <div class="card">
                <div class="card-header">Add New Admin</div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text"  name="uname"  class="form-control mt-2" id="name" placeholder="Enter your name">
                       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="password" name="pass" class="form-control mt-2" id="pass" placeholder="Enter your password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="email" class="form-control mt-2" id="email" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <input type="radio" name="gender" value="Male" id="male"><label for="Male">Male</label>
                            <input type="radio" name="gender" value="Female" id="Female"><label for="Female">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="mobile" class="form-control mt-2" id="mobile" placeholder="Enter your mobile">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="pro_pic" class="form-control mt-2" id="pro_pic" placeholder="Enter your mobile">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <input type="submit" class="btn btn-info" name="btn-save" id="btn-login" value="Registration">
                            <input type="submit" class="btn btn-danger" value="Cancel" >
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
