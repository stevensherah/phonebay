<?php
session_start();

include("./includes/side-menu.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('index.php','_self')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Carousel</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Carousel</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Carousel with Fade Effect</h5>
                                <div class="carousel" data-slick='{"slidesToShow":1, "autoplay": true, "infinite": true, "speed": 2000, "fade": true, "dots": true, "infinite": true }'>
                                    <div>
                                        <img src="assets/demo/carousel/carousel-10.jpeg" alt="">
                                        <div class="carousel-caption single-item-caption d-none d-sm-block">
                                            <div class="single-item-caption-inside">
                                                <h6>Inspiration and Design</h6>
                                                <h3>A Piece of Green</h3>
                                                <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="assets/demo/carousel/carousel-11.jpeg" alt="">
                                        <div class="carousel-caption single-item-caption d-none d-sm-block">
                                            <div class="single-item-caption-inside">
                                                <h6>LifeStyle</h6>
                                                <h3>Balanced</h3>
                                                <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="assets/demo/carousel/carousel-12.jpeg" alt="">
                                        <div class="carousel-caption single-item-caption d-none d-sm-block">
                                            <div class="single-item-caption-inside">
                                                <h6>Travel</h6>
                                                <h3>A Trip to Unknown</h3>
                                                <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="assets/demo/carousel/carousel-13.jpeg" alt="">
                                        <div class="carousel-caption single-item-caption d-none d-sm-block">
                                            <div class="single-item-caption-inside">
                                                <h6>Inspiration and Design</h6>
                                                <h3>A Piece of Green</h3>
                                                <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="assets/demo/carousel/carousel-14.jpeg" alt="">
                                        <div class="carousel-caption single-item-caption d-none d-sm-block">
                                            <div class="single-item-caption-inside">
                                                <h6>Lifestyle</h6>
                                                <h3>Whatever it takes.</h3>
                                                <p class="text-muted">Posted: May 14, 2017</p><a href="#" class="btn btn-outline-info btn-rounded">View Post</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-body clearfix">
                                <h5 class="box-title">Carousel with Styled Items</h5>
                                <div class="carousel multi-slide-carousel" data-slick='{"slidesToShow":2, "slidesToScroll": 2, "autoplay": true, "infinite": true,  "dots": true, "infinite": true }'>
                                    <div class="item-image">
                                        <a href="#" class="img-shadow">
                                            <img src="assets/demo/carousel/carousel-20.jpeg" alt=""> <span class="shadow"></span>
                                        </a>
                                        <div class="header-caption d-none d-sm-block"><a href="#" class="bg-success">Sports <span class="triangle-top-left" style="border-color: #38d57a transparent transparent transparent"></span></a>
                                        </div>
                                        <div class="content-caption text-inverse d-none d-sm-block">
                                            <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                            </div>
                                            <h3 class="item-title fw-100 mr-t-10"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                            <div class="item-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <a href="#" class="img-shadow">
                                            <img src="assets/demo/carousel/carousel-16.jpeg" alt=""> <span class="shadow"></span>
                                        </a>
                                        <div class="header-caption d-none d-sm-block"><a href="#" class="bg-info">Cricket <span class="triangle-top-left" style="border-color: #03a9f3 transparent transparent transparent"></span></a>
                                        </div>
                                        <div class="content-caption text-inverse d-none d-sm-block">
                                            <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                            </div>
                                            <h3 class="item-title fw-100 mr-t-10"><a href="#">Smack Visitors Over the Head</a></h3>
                                            <div class="item-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <a href="#" class="img-shadow">
                                            <img src="assets/demo/carousel/carousel-17.jpeg" alt=""> <span class="shadow"></span>
                                        </a>
                                        <div class="header-caption d-none d-sm-block"><a href="#" class="bg-danger">Football <span class="triangle-top-left" style="border-color: #e6614f transparent transparent transparent"></span></a>
                                        </div>
                                        <div class="content-caption text-inverse d-none d-sm-block">
                                            <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                            </div>
                                            <h3 class="item-title fw-100 mr-t-10"><a href="#">Give Them 3 Unbeatable Reasons</a></h3>
                                            <div class="item-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <a href="#" class="img-shadow">
                                            <img src="assets/demo/carousel/carousel-18.jpeg" alt=""> <span class="shadow"></span>
                                        </a>
                                        <div class="header-caption d-none d-sm-block"><a href="#" class="bg-success">Foods <span class="triangle-top-left" style="border-color: #38d57a transparent transparent transparent"></span></a>
                                        </div>
                                        <div class="content-caption text-inverse d-none d-sm-block">
                                            <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                            </div>
                                            <h3 class="item-title fw-100 mr-t-10"><a href="#">Swapping dull words for sticky</a></h3>
                                            <div class="item-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <a href="#" class="img-shadow">
                                            <img src="assets/demo/carousel/carousel-22.jpeg" alt=""> <span class="shadow"></span>
                                        </a>
                                        <div class="header-caption d-none d-sm-block"><a href="#" class="bg-info">Medical <span class="triangle-top-left" style="border-color: #03a9f3 transparent transparent transparent"></span></a>
                                        </div>
                                        <div class="content-caption text-inverse d-none d-sm-block">
                                            <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                            </div>
                                            <h3 class="item-title fw-100 mr-t-10"><a href="#">Stealing from PR and bloggers</a></h3>
                                            <div class="item-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-image">
                                        <a href="#" class="img-shadow">
                                            <img src="assets/demo/carousel/carousel-21.jpeg" alt=""> <span class="shadow"></span>
                                        </a>
                                        <div class="header-caption d-none d-sm-block"><a href="#" class="bg-danger">Life <span class="triangle-top-left" style="border-color: #e6614f transparent transparent transparent"></span></a>
                                        </div>
                                        <div class="content-caption text-inverse d-none d-sm-block">
                                            <div class="item-date"><i class="feather feather-clock"></i>  <span>Oct 2, 2016</span>
                                            </div>
                                            <h3 class="item-title fw-100 mr-t-10"><a href="#">Wireless should be free</a></h3>
                                            <div class="item-desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
        <aside class="right-sidebar scrollbar-enabled suppress-x">
            <div class="sidebar-chat" data-plugin="chat-sidebar">
                <div class="sidebar-chat-info">
                    <h6 class="fs-16">Chat List</h6>
                    <form class="mr-t-10">
                        <div class="form-group">
                            <input type="search" class="form-control form-control-rounded fs-13 heading-font-family pd-r-30" placeholder="Search for friends ..."> <i class="feather feather-search post-absolute pos-right vertical-center mr-3 text-muted"></i>
                        </div>
                    </form>
                </div>
                <div class="chat-list">
                    <div class="list-group row">
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Julein Renvoye">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Eddie Lebanovkiy">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Cameron Moll">
                            <figure class="thumb-xs user--online mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Bill S Kenny">
                            <figure class="user--busy thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Trent Walton">
                            <figure class="user--busy thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Julien Renvoye">
                            <figure class="user--offline thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user7.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item" data-chat-user="Eddie Lebaovskiy">
                            <figure class="user--offline thumb-xs mr-3 mr-0-rtl ml-3-rtl">
                                <img src="assets/demo/users/user8.jpg" class="rounded-circle" alt="">
                            </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                </div>
                <!-- /.chat-list -->
            </div>
            <!-- /.sidebar-chat -->
        </aside>
        <!-- CHAT PANEL -->
        <div class="chat-panel" hidden>
            <div class="card">
                <div class="card-header d-flex justify-content-between"><a href="javascript:void(0);"><i class="feather feather-message-square text-success"></i></a>  <span class="user-name heading-font-family fw-400">John Doe</span> 
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="widget-chat-activity flex-1">
                        <div class="messages scrollbar-enabled suppress-x">
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Epic Cheeseburgers come in all kind of styles.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers make your knees weak.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--offline">
                                    <a href="#">
                                        <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>Cheeseburgers will never let you down.</p>
                                    <p>They'll also never run around or desert you.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>A great cheeseburger is a gastronomical event.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media reply">
                                <figure class="thumb-xs2 user--busy">
                                    <a href="#">
                                        <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                            <div class="message media">
                                <figure class="thumb-xs2 user--online">
                                    <a href="#">
                                        <img src="assets/demo/users/user1.jpg" class="rounded-circle" alt="">
                                    </a>
                                </figure>
                                <div class="message-body media-body">
                                    <p>If you are a vegan, we are sorry for you loss.</p>
                                </div>
                                <!-- /.message-body -->
                            </div>
                            <!-- /.message -->
                        </div>
                        <!-- /.messages -->
                    </div>
                    <!-- /.widget-chat-acitvity -->
                </div>
                <!-- /.card-body -->
                <form action="javascript:void(0)" class="card-footer" method="post">
                    <div class="d-flex justify-content-end"><i class="feather feather-plus-circle list-icon my-1 mr-3"></i>
                        <textarea class="border-0 flex-1" rows="1" style="resize: none" placeholder="Type your message here"></textarea>
                        <button class="btn btn-sm btn-circle bg-transparent" type="submit"><i class="feather feather-arrow-right list-icon fs-26 text-success"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    <footer class="footer"><span class="heading-font-family">Copyright @ 2017. All rights reserved WiseOwl Admin by Unifato</span>
    </footer>
    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>