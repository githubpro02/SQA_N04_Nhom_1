<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Online Shopping</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		
		
		
         
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style>
        #navigation {
          background: #FF4E50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          
        }
        #header {
  
            background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  
        }
        #top-header {
              
  
            background: #870000;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #190A05, #870000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          

        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }
       
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        

       
        
        </style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-inr"></i> INR</a></li>
						<li><?php
                             include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                                             ?>
                               
                                </li>				
					</ul>
					
				</div>
			</div>
			<!-- /TOP HEADER -->
			
			

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
								<svg>
								<path d="M171,91.5c-1.8,0-3.9,0.1-5.6-0.4c-2.3,2.4-3.9,5-5.7,7.6c-0.6,1.8-0.7,3.9-0.6,5.9c-1.5,0.2-3-0.1-4.5-0.2
	c-0.5-0.9-0.7-1.9-1-2.9c-0.3-3.4-0.4-6.9-0.3-10.5c2.1,0,4.2,0.1,6.3,0.2l0.3-3.6c-2.3-0.5-4.8-0.5-7.2-0.9l-0.5-3.7h-3.9l-0.7,3.6
	l-6.1-0.2c0.1,1.3,0.4,2.5,0.7,3.7l4.8,0.6c-0.5,3.6-0.7,7.4-0.4,11.1c-0.3,1.8-1,3.3-1.9,4.8l-0.3,0.1c-1.8-2.7-2.4-5.9-3.7-8.8
	c-1.3,0.1-2.6,0.3-3.9,0.2c-0.3-1.3,0.1-2.6,0.1-3.8l-1.6,0.1l-5.1,2.7l-7.9,5.4c-0.2,0-0.5,0.2-0.7,0c0-0.9-0.3-1.8-0.2-2.7l6-6.7
	l0.8-3.4c0.4-3.8,0.1-8-0.2-11.8c-3.2-0.8-6.5-1.3-9.9-1.5c-0.4,3.8-0.9,7.5-1.2,11.3c-0.2,4.2-0.3,8.6-0.4,12.6l-0.1,0.3
	c-1.7,0.6-3.5,1-5.3,1.3c-0.9,0.5-0.6-0.7-0.8-1.1c-1-2.6-3-4.8-5.3-6.7c-2.5,0.3-4.7,1.4-7,2.2c-1.3,2.2-1.8,4.7-2,7.4l-0.2,0.2
	c-2.4,1-5,1.5-7.5,2c-1.2-1.3-2.3-2.8-3.3-4.4c0.5-0.8,1.1-1.6,1.6-2.4l2.2-1.9l0.3-0.1l3.9,1.2l1.6-3.8L89.9,93
	c-1.4,0.5-2.7,1-4,1.8c-0.6,0.3-1.1,1-1.8,1.2c-3,0.6-6.1,1.2-9.1,1.7c-1.5-0.9-3.4-1-5.2-1.2c-1.8-0.4-3.5,0.2-5.2,0.4l-4.1,4.7
	c-0.2-0.1-0.5,0-0.7-0.1c-0.1-2.1-0.3-4.2-0.7-6.3c-1.8-0.9-3.5-1.8-5.4-2.5c-1.9,0.6-3.9,1.1-5.6,2.5c-0.3,0.1-0.6,0.6-1,0.5
	L47.2,87l0.4-10.5c-1.6,0-3.1,0.1-4.6,0c-0.1,2.9,0.3,5.6,0.5,8.5l1.3,13.6c-0.4,1.8-1.6,3.3-2.4,5c0,0.2-0.3,0.3-0.5,0.3
	c-3.6-0.7-7-1.6-10.1-3.4c-0.5-0.5-1.3-0.9-1.2-1.7c-0.1-0.3,0.2-0.6,0.4-0.9c2.6,0.1,5.3,0,7.7,0.5l0-3.9c-3.2-0.4-6.4-1.3-9.7-1.3
	c-1.4,2.7-2.5,5.6-3.5,8.4c1,2.4,2.8,4.3,4.6,6.3c3.1,1.1,6.8,0.9,10.3,1.2c1.7-1.6,3-3.8,4.9-5.1c0.3-0.1,0.5,0.2,0.7,0.4
	c0.5,1.5,0.8,3.2,1.5,4.6l3.1-0.5l0.4-7.1l0.3-1.7c0.3-1,1.3-1.8,2.3-2c0.3,0,0.7,0,0.8,0.3l0.5,4.7c1.4,0.9,2.8,1.6,4.2,2.4
	c1.1-0.7,2-1.7,3.3-1.9l0.7,4.3c1.2,1.6,2.9,2.7,4.4,4.1l5.3,0.3c2.1-1.6,4.2-3.4,5.9-5.4c-0.6-2-1.2-4.1-2-6l0.2-0.2l4.4-1
	c0.4-0.1,1-0.3,1.4,0.1l-0.7,2.9c1.7,1.9,3.4,3.9,5.4,5.5c3.4-0.5,6.7-1.2,10-2.1l2.2,1.9c2.3,0.6,4.8,0.8,7.2,0.6
	c1.3-1.2,2.4-2.5,3.1-4c2.2-0.3,4.3-0.9,6.1-1.9c0.1,0.9,0,2,0.1,2.9l3.9,3.3c3.1-2.2,6-4.9,9.4-6.7l0.1,0.1
	c-0.8,1.8-1.6,3.7-2.3,5.6l0.3,0.9c0.8,1.3,1.5,2.7,2.6,3.9l2.7,0.3c1.6-0.1,3.6,0.6,4.9-0.6c0.7-0.8,1.5-1.6,2-2.5l1.9,1.8
	c1.2,1.2,2.9,0.1,4.4,0.1c0.6-2,1.1-3.9,1.8-5.8c1.6,0.9,3.1,2,4.9,2.3c2.8,0.8,6,0.3,8.7-0.5c2.4,1.8,5,3.3,7.8,3.9l0.2-0.6
	c-2.2-1.2-4.2-2.7-5.9-4.6l0-0.3c2.8-2.1,5.9-3.6,8.5-6.3v-0.7C172.5,96,171.7,93.8,171,91.5 M75.3,106.5c-2.6,0.1-5.3,0.6-7.9,0.2
	c-0.7-0.2-0.2-1.2-0.4-1.7c-0.1-0.5,0.1-1-0.1-1.4l0.1-0.1c0-1.8,0.1-3.7,0.1-5.4c1-0.5,2.3-0.7,3.7-0.5l0.2,0.2
	c-0.2,1.2-0.3,2.3-0.2,3.5c1.2,0.5,2.3,0.9,3.6,1.2C74.8,103.7,75.5,105,75.3,106.5 M105.7,106.2c-1.6,0.7-3.4,0.1-4.5-0.8
	c-0.5-1.2-0.3-2.7-0.1-4c1.4,1.8,3.7,2.7,6,2.8C106.9,104.9,106.4,105.8,105.7,106.2 M107.7,102.3c-0.4,0.2-0.8,0-1.2-0.1
	c-1.5-0.7-3.1-1.7-4-3.2c-0.1-0.2-0.2-0.4-0.1-0.6c1.6-0.3,3.5-0.5,4.9,0.5C107.7,99.9,107.8,101.2,107.7,102.3 M120.2,95.9
	c-0.5,0.4-1,1.1-1.6,1.2l-0.5-7.9c0.2-3.3,0.4-6.7,1.2-9.7l0.3-0.6l2-0.1l2,0.5c-0.3,4.8-0.8,9.4-2.2,13.8L120.2,95.9z M134.9,108.8
	c-0.7,0.3-1.2-0.2-1.8-0.4c-1.3-0.8-2.6-1.5-3.9-2.4l0.1-0.4c1.5-1.5,3.1-2.8,4.8-4c0.5-0.4,1.2-0.4,1.9-0.4
	C136,103.8,136,106.6,134.9,108.8 M170.6,99.1c-1.6,1.3-3.4,2.9-5.2,4c-0.3,0.1-0.6,0.2-0.7-0.2c1.1-2.7,1.4-5.8,3.3-8.1l2.4,0.4
	C170.6,96.5,170.6,97.8,170.6,99.1"></path>
								</svg>
									
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Tất cả hàng</option>
										<option value="1">Deck</option>
										<option value="1">Truck</option>
									</select>
									<input class="input" id="search" type="text" placeholder="Search here">
									<button type="submit" id="search_btn" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										
											
										</div>
										
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  edit cart</a>
											
										</div>
									</div>
										
									</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<nav id='navigation'>
			<!-- container -->
            <div class="container" id="get_category_home">
                
            </div>
				<!-- responsive-nav -->
				
			<!-- /container -->
		</nav>
            

		<!-- NAVIGATION -->
		
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
													
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>
													
                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog">

                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
    
                            ?>
          
                            </div>
                            
                          </div>

                        </div>
                      </div>
		