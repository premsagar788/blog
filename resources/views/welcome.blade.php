@extends('layouts.site')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
</div>
  

<div class="container cta-100 ">
    <div class="container">
      <div class="row blog">
        <div class="col-md-12">
          <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#blogCarousel" data-slide-to="1"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4" >
                    <div class="item-box-blog">
                      <div class="item-box-blog-image">
                        <!--Date-->
                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                        <!--Image-->
                        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
                    </div>
                    <div class="item-box-blog-body">
                        <!--Heading-->
                        <div class="item-box-blog-heading">
                          <a href="#" tabindex="0">
                            <h5>News Title</h5>
                        </a>
                    </div>
                    <!--Data-->
                    <div class="item-box-blog-data" style="padding: px 15px;">
                      <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                  </div>
                  <!--Text-->
                  <div class="item-box-blog-text">
                      <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                  </div>
                  <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                  <!--Read More Button-->
              </div>
          </div>
      </div>
      <div class="col-md-4" >
        <div class="item-box-blog">
          <div class="item-box-blog-image">
            <!--Date-->
            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
            <!--Image-->
            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
        </div>
        <div class="item-box-blog-body">
            <!--Heading-->
            <div class="item-box-blog-heading">
              <a href="#" tabindex="0">
                <h5>News Title</h5>
            </a>
        </div>
        <!--Data-->
        <div class="item-box-blog-data" style="padding: px 15px;">
          <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
      </div>
      <!--Text-->
      <div class="item-box-blog-text">
          <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
      </div>
      <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
      <!--Read More Button-->
  </div>
</div>
</div>
<div class="col-md-4" >
    <div class="item-box-blog">
      <div class="item-box-blog-image">
        <!--Date-->
        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
        <!--Image-->
        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
    </div>
    <div class="item-box-blog-body">
        <!--Heading-->
        <div class="item-box-blog-heading">
          <a href="#" tabindex="0">
            <h5>News Title</h5>
        </a>
    </div>
    <!--Data-->
    <div class="item-box-blog-data" style="padding: px 15px;">
      <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
  </div>
  <!--Text-->
  <div class="item-box-blog-text">
      <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
  </div>
  <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
  <!--Read More Button-->
</div>
</div>
</div>
</div>
<!--.row-->
</div>
<!--.item-->
<div class="carousel-item ">
    <div class="row">
      <div class="col-md-4" >
        <div class="item-box-blog">
          <div class="item-box-blog-image">
            <!--Date-->
            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
            <!--Image-->
            <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
        </div>
        <div class="item-box-blog-body">
            <!--Heading-->
            <div class="item-box-blog-heading">
              <a href="#" tabindex="0">
                <h5>News Title</h5>
            </a>
        </div>
        <!--Data-->
        <div class="item-box-blog-data" style="padding: px 15px;">
          <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
      </div>
      <!--Text-->
      <div class="item-box-blog-text">
          <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
      </div>
      <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
      <!--Read More Button-->
  </div>
</div>
</div>
<div class="col-md-4" >
    <div class="item-box-blog">
      <div class="item-box-blog-image">
        <!--Date-->
        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
        <!--Image-->
        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
    </div>
    <div class="item-box-blog-body">
        <!--Heading-->
        <div class="item-box-blog-heading">
          <a href="#" tabindex="0">
            <h5>News Title</h5>
        </a>
    </div>
    <!--Data-->
    <div class="item-box-blog-data" style="padding: px 15px;">
      <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
  </div>
  <!--Text-->
  <div class="item-box-blog-text">
      <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
  </div>
  <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
  <!--Read More Button-->
</div>
</div>
</div>
<div class="col-md-4" >
    <div class="item-box-blog">
      <div class="item-box-blog-image">
        <!--Date-->
        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
        <!--Image-->
        <figure> <img alt="" src="https://cdn.pixabay.com/photo/2017/02/08/14/25/computer-2048983_960_720.jpg"> </figure>
    </div>
    <div class="item-box-blog-body">
        <!--Heading-->
        <div class="item-box-blog-heading">
          <a href="#" tabindex="0">
            <h5>News Title</h5>
        </a>
    </div>
    <!--Data-->
    <div class="item-box-blog-data" style="padding: px 15px;">
      <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
  </div>
  <!--Text-->
  <div class="item-box-blog-text">
      <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
  </div>
  <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
  <!--Read More Button-->
</div>
</div>
</div>
</div>
<!--.row-->
</div>
<!--.item-->
</div>
<!--.carousel-inner-->
</div>
<!--.Carousel-->
</div>
</div>
</div>
</div>

@endsection