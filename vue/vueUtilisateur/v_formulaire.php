<div class ="row">

<div class="container-fluid mt-3">
<div class="d-flex justify-content-center p-1 mb-2"> 

<div class="d-flex justify-content-center align-items-center mt-5">


        <div class="card">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                  <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item text-center">
                  <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                </li>
               
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <form action="index.php?ctl=utilisateur&action=validConnect" method='POST'>
                  <div class="form px-4 pt-5">

                    <input type="text" name="login" class="form-control" placeholder="Login">

                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <button class="btn btn-dark btn-block">Login</button>
                    <?php
                        if(isset($message))
                          echo "<br>".$message;
                    ?>
                  </div>
                </div>
                </form>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  
                <form action="index.php?ctl=utilisateur&action=validSignUp" method='POST'>
                  <div class="form px-4">

                    <input type="text" name="login" class="form-control" placeholder="Name">

                    <input type="password" name="password" class="form-control" placeholder="Password">

                    <button class="btn btn-dark btn-block">Signup</button>
                    

                  </div>
                </form>



                </div>
                
               </div>
            
          
          

        </div>
        

      </div>

</div>
</div>