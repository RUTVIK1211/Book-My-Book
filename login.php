<?php 

if (isset($_GET['success'])) 
{
    echo "<script>alert('You Are Successfully Register an Account..')</script>";
}
 ?>
<?php
session_start();
if (isset($_SESSION['user'])) 
{ 
?>
    <!--log out page is displayed here-->
            <?php 
                include_once 'heder.php';
             ?>
             <br><br><br><center>
             <section class="solid_banner_area" style="margin-left: 500px;">
             <div class="container">
            <div class="login_inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="login_title">
                            <h1 style="font-family: comic sans ms;" ><?php echo strtoupper($_SESSION['user']); ?></h1><br><h2>You Are Already Login </h2>
                            <p>Click Below Button For Logout..</p>
                        </div>
                        <form class="login_form row " action="login_out.php" method="post">
                            <div class="col-lg-12 form-group">
                                <button type="submit" value="submit" class="btn update_btn form-control">Logout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </section>
    </center>
        <br><br><br>
             <?php 
             include_once 'footer.php';
              ?>
    <?php
}
else {
        include_once 'heder.php';
     ?>
    <!--================End Menu Area =================-->

    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h3>Login</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="track.html">Login</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->


    <!--================login Area =================-->
    <section class="login_area p_100">
        <div class="container">
            <div class="login_inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="login_title">
                            <h2>log in your account</h2>
                            <p>Log in to your account to discovery all great features in this website.</p>
                            <?php 
                              if (isset($_GET['error'])) 
                              {
                                echo " <h2><p style='color:red; font-family:comic sans ms'>Wrong Username Or Password..</p></h2>";
                              }
                             ?>
                        </div>
                        <form class="login_form row " action="login_process.php" method="post">
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="text" placeholder="Name" name="uname" required="required">
                            </div>
                            <div class="col-lg-12 form-group">
                                <input class="form-control" type="password" placeholder="Password" name="password"
                                       required="true">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option" name="selector">
                                    <label for="f-option">Keep me logged in</label>
                                    
                                </div>
                                <h4><a href="password.recovery.php" style="color: red;">Forgot your password ?</a></h4>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" value="submit" class="btn update_btn form-control">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8">
                        <div class="login_title">
                            <h2>create account</h2>
                            <p>Follow the steps below to create account </p>

                        </div>
                        <form class="login_form row" action="singup.php" method="post" name="ca">
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="text" oninput="testfname()"  name="fname" placeholder=" First Name" required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="text"  oninput="testlname()" name="lname" placeholder="Last Name" required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="email" oninput="testemail()" name="email" placeholder="Email"
                                       required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="text" oninput="testuname()"  name="uname" placeholder="User Name"
                                       required="true">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="number" oninput="testphone()" name="phone" minlength="10" size="10" 
                                       placeholder="Phone" required="true">
                            </div>
                            
                            <div class="col-lg-6 form-group">
                            <textarea class="form-control" name="add" oninput="testadd()" id="message" style="border-left-width: 1px;width: 375px;height: 62px;" rows="2" cols="2" placeholder="Type Your Address..."></textarea>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                       required="true"  oninput="testpass()"> 
                            </div>
                            <div class="col-lg-6 form-group">
                                <input class="form-control" type="password" name="confirm_password"
                                       placeholder="Re-Password"
                                       required="true" oninput="testpass()">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" name="city" placeholder="City" oninput="testcity()" class="form-control" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" name="state" placeholder="State" oninput="teststate()" class="form-control" required >
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="number" name="pincode" placeholder="Pincode" oninput="testpincode()" class="form-control" required maxlength="1" minlength="1">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="date" name="dob" min="01-01-1980" class="form-control" oninput="testdate()" required="true">
                            </div>
                            
                            <div class="col-lg-6 form-group">
                                <button type="submit" value="submit" class="btn subs_btn form-control" name="reg_submit">register now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--================End login Area =================-->
<script type="text/javascript">
        
        function testpass()
        {
            var form = document.forms.ca;//ca is create account and its a form name also..
            var pass = form.password.value;
            var cpass = form.confirm_password.value;
            var temp = form.password;
            var temp1 = form.confirm_password;

            if (pass==cpass && pass!="" && cpass!="") 
            {
               
                temp.style.borderColor = "green";
                temp1.style.borderColor = "green";
            }
            else
            {
                temp.style.borderColor = "red";
                temp1.style.borderColor = "red";
            }
        }
        function testlname()
        {
               var form=document.forms.ca;
               var lname=form.lname.value;
               if (lname=="") 
               {
                  var temp = form.lname;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.lname;
                    temp.style.borderColor="green"
               }
        }
		 function testfname()
            {
               var form=document.forms.ca;
               var fname=form.fname.value;
               if (fname=="") 
               {
                  var temp = form.fname;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.fname;
                    temp.style.borderColor="green"
               }
            }
          function testemail()
            {
               var form=document.forms.ca;
               var email=form.email.value;
               if (email=="") 
               {
                  var temp = form.email;
                  temp.style.borderColor="red"
               } 
               else
               {
                 var temp = form.email;
                    temp.style.borderColor="green"
               }
            }
            function testuname()
            {
               var form=document.forms.ca;
               var uname=form.uname.value;
               if (uname=="") 
               {
                  var temp = form.uname;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.uname;
                    temp.style.borderColor="green"
               }
            }
             function testphone()
            {
               var form=document.forms.ca;
               var phone=form.phone.value;
               if (phone=="") 
               {
                  var temp = form.phone;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.phone;
                    temp.style.borderColor="green"
               }
            }
            function testadd()
            {
               var form=document.forms.ca;
               var add=form.add.value;
               if (add=="") 
               {
                  var temp = form.add;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.add;
                    temp.style.borderColor="green"
               }
            }
            function testcity()
            {
               var form=document.forms.ca;
               var city=form.city.value;
               if (city=="") 
               {
                  var temp = form.city;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.city;
                    temp.style.borderColor="green"
               }
            }
            function teststate()
            {
               var form=document.forms.ca;
               var state=form.state.value;
               if (state=="") 
               {
                  var temp = form.state;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.state;
                    temp.style.borderColor="green"
               }
            }
            function testpincode()
            {
               var form=document.forms.ca;
               var pincode=form.pincode.value;
               if (pincode=="") 
               {
                  var temp = form.pincode;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.pincode;
                    temp.style.borderColor="green"
               }
            }
            function testdate()
            {
               var form=document.forms.ca;
               var dob=form.dob.value;
               if (dob=="") 
               {
                  var temp = form.dob;
                  temp.style.borderColor="red"
               } 
               else
               {
                var temp = form.dob;
                    temp.style.borderColor="green"
               }
            }
            
    </script>
    <!--================Footer Area =================-->
    <?php include_once 'footer.php'; ?>
    <!--================End Footer Area =================-->
   
    <?php
}
?>