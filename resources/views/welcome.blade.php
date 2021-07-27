<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Qtech Networks</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
        <!-- <link rel="stylesheet" src="node_modules/sweetalert2/dist/sweetalert2.css"> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        
        <style>
            body {
                background-color: #1D5A84;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 80vh;
            }
            .form-group input {
                border: none;
            }
            .card {
                background-color: #f7fafc !important;
                border-radius: 10px !important;
                border: none !important;
            }
            .form-group {
                background-color: white;
                border-radius: 12px;
            }
            .form-group i,
            .form-group input::placeholder,  /* for the placeholders font and form header */
            p {
                color: #000 !important;
                font-size: 20px;
            }
            .btn {
                background-color: #292929 !important;
                border-color: #292929 !important;
            }
            .btn:focus,
            .btn:active {
                box-shadow: none !important;
            }
            .sidebar-container{
                margin :0px; 
                padding : 0px;
                margin-top: -610px;
                margin-left: 0px;
                list-style: none;
                text-decoration: none;
            }
            .sidebar{
                position: fixed;
                left: 0px;
                width :250px;
                height : 100%;
                background: #000;
                margin-left: -30px;
                padding-right: 30px;
                background-color: #1C1918
            }
            .sidebar header {
                font-size: 20px;
                text-align: center;
                color: black;
                line-height: 90px; 
                width: 100% ;
                background-color:#000;
                color: #f7fafc;
                background-color: #1C1918;
                margin-left: 30px;
            }
            .sidebar ul a {
                display: block;
                width: 100%;
                height: 100%;
                line-height: 60px;
                font-size: 18px;
                padding-left: 10px;
                box-sizing: border-box;
                /* border-top: 1px solid rgb(0, 0, 0 , .2); */
                border-bottom: 1px solid rgb(255  , 255, 255 , .2);
                transition: .4s;
                color : #f7fafc 
            }
            .fa , .fab , .fas{
                padding-right: 5px;
            }
            ul li:hover a{
                padding-left: 40px;
            }
            .show-acc{
                display: none;
            }
            .sidebar-container{
                display: none;
            }
            .bars{
               
                height: 20px;
                margin: 0px;
                margin-top: -525px;
                padding-left:25px;
               

            }
        </style>
    </head>
   <body>
   <div class="bars">
         <i style="font-size:30px;" class="fa fa-bars"></i>
      </div>
        <div class="sidebar-container">
            <div class="sidebar">
                <header id="hide"><i style="font-size:25px; color:white" class="fa fa-chevron-circle-down"></i>Qtech Networks</header>
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i>Dashborad</a></li>
                    <li><a href="#"><i class="fa fa-info-circle"></i>About</a></li>
                    <li><a href="#"><i class="fa fa-book"></i>Our Services</a></li>
                    <li id="sub"><a class="follow-btn" href="#"><i class="fas fa-user-friends"></i>Follow Us<i style="margin-left:10px" class="fas fa-caret-down arrow"></i></a></li>
                            <ul class="show-acc">
                            <li><a href="#"><i class="fab fa-instagram"></i>Inatagram</a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a></li>
                            </ul>
                    <li><a href="#"><i class="fa fa-envelope"></i>Contact Us</a></li>
                    
                </ul>
            </div>
        </div>

        <div class="container">
        <h3 class="text-white text-center mb-4"> Welcome to Qtechs Login Form !</h2>
        <div class="card col-lg-5 col-md-6 col-12 mx-auto px-4 py-5">
            <p class="text-center"><small>Sign In With</small></p>
            <form onsubmit="return false;">
                <div class="form-group d-flex px-3 py-1 m-0">
                    <i class="fas fa-user my-auto"></i>
                    <input type="text" autocomplete="off" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group d-flex px-3 py-1 m-0">
                    <i class="fas fa-unlock-alt my-auto"></i>
                    <input type="password" autocomplete="off" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="text-center pt-4">
                    <button type="submit" id="submit_btn" class="btn btn-primary col-4">Submit</button>
                </div>
              </form>
        </div>
    </div>
        </body>

        <!-- jQuery and Ajax -->

        <script>
            $(document).ready(function(){
                $("#submit_btn").click(function(){

                    email = $("#email").val();
                    password = $("#password").val();
                
                    if(email == ""){
                        swal("please re-enter your email" ,"","error",{
                       });
                    }
                    else if(password == ""){ // error Sweet Alert when passord isnt enterd
                        swal("please re-enter your password" ,"","error",{
                           button : "cancel",
                       });
                    }
                    else { // Sweet Alert if success
                       swal("Thank you" ,"","success",{
                           button : "Finish",
                       }); 
                    }

                });
                $("#sub").on('click',function(event){
                    
                    $(".show-acc").toggle(500);
                });
                $(".bars").on('click',function(event){
                    $(".sidebar-container").toggle(300);
                    $(".bars").hide()
                   
                });
                $("#hide").on('click',function(event){
                    $(".sidebar-container").toggle(300);
                    $(".bars").show();
                });
            });
        </script>
</html>
