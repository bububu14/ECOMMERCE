<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper" id="section1">
            <section class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <h1>We Provide Clothing<br>For Your School Needs!</h1>
                            <a href="" class="btn">Explore Now &#8594</a>
                        </div>
                        <div class="col-2">
                            <img src="images/banner2.png">
                        </div>
                    </div>
                </div>

            </section>
            <div class="container">

                <!-- Main content -->


                <section class="content" id="section2">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/asdasd.png" style="width:100%;" alt="First slide">
                                    </div>
                                    <div class="item">
                                        <img src="images/asdasd2.png" style="width:100%;" alt="Second slide">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </div>

                        </div>

                    </div>
                </section>
                <section>
                    <div class="small-container-1-fluid">
                        <h2 class="title">Featured Products</h2>
                        <div class="row">

                            <div class="featured col-lg-2 col-md-3 col-sm-5 col-11">
                                <a class="featured"
                                    href="http://localhost/ACOBA/ecommerce(testing)/category.php?category=SchoolUniform">
                                    <img src="images\muntinlupa.jpg">
                                    <h4>School Uniform</h4>
                                </a>

                            </div>


                            <div class="featured col-lg-2 col-md-3 col-sm-5 col-11">
                                <a class="featured"
                                    href="http://localhost/ACOBA/ecommerce(testing)/category.php?category=PE">
                                    <img src="images\pe-uniform-sample.jpg">
                                    <h4>PE Uniform</h4>
                                </a>
                            </div>


                            </div>

                </section>
                <section>
                    <!---Products--->
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>

                    <div class="small-container-1-fluid" id="section3">
                        <h2 class="title">About Us</h2>
                        <div class="row">
                            <div class="col-sm-9">

                                <div class="divider"></div>
                                <p>We are here to provide you quality uniform for your childrens. We offer different types uniforms for 
                                	public and private schools around the Philippines. We also offer traditional clothing such as "Barong", "Filipiniana", 
                                	and costumes for events inside the school.
                                </p>
                            </div>
                            <div class="col-sm-3">
                                <?php include 'includes/sidebar.php'; ?>
                            </div>
                        </div>

                    </div>

            </div>
            <div class="small-container-1-fluid" id="section5">
                <h2 class="title">Contact Us</h2>
                <div class="row">
                    <div class="col-1">
                        <h1>Address</h1>
                        <p>Santo, Nino, Paranaque City</p>
            
                    </div>
                    <div class="col-1">
                        <h1>Contact No.</h1>
                        <p>09998422963</p>
       
                    </div>
                    <div class="col-1">
                        <h1>Email</h1>
                        <p>asdasd@yahoo.com</p>
  
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

    </div>


    <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
    <script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    </script>

    <style>
    .row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .col-2 {
        flex-basis: 50%;
        min-width: 300px;
    }

    .col-2 img {
        max-width: 75%;
        padding: 50px 0;
    }

    .col-2 h1 {
        font-size: 50px;
        padding: 50px 0;
    }

    .btn {
        display: inline-block;
        background: #ff523b;
        color: #fff;
        padding: 8px 30px;
        margin: 30px o;
        border-radius: 30px;
        transition: background 0.5s;
    }

    .small-container1-fluid {
        max-height: 1080px;
        margin: auto;
        padding-left: 350px;
        padding-right: 25px;
    }

    .col-4 {
        flex-basis: 25%;
        padding: 10px;
        min-width: 200px;
        margin-bottom: 50px;
        transition: transform 0.5s;
    }

    .col-4 img {
        min-height: auto;
        max-height: 100px;
        width: 60%;
    }

    .title {
        text-align: center;
        margin: 0 auto 40px;
        position: relative;
        line-height: 60px;
        color: #555;
    }

    .title::after {
        content: '';
        background: #ff523b;
        width: 80px;
        height: 5px;
        border-radius: 5px;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .section-intro {
        margin-bottom: 40px;
    }

    .section-intro .divider {
        height: 4px;
        width: 70px;
        background: linear-gradient(to right, #00e0feb3, #1107feb3);
        margin: 16px auto;
    }

    h4 {
        text-align: center;
    }

    .featured p {
        font-size: 14px;
    }

    .featured:hover {
        transform: translateY(-10px);
    }

    h1 {
        font-size: 15px;
        margin: 10px 0;
    }

    p {
        font-size: 15px;
    }
    </style>

</body>

</html>