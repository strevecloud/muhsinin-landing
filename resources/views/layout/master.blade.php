<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png')}}">
    <!-- Bootstrap CSS -->
    {!! Html::style('assets/vendors/bootstrap/css/bootstrap.min.css') !!}
    <!-- Fonts Awesome CSS -->
    {!! Html::style('assets/vendors/fontawesome/css/all.min.css') !!}
    <!-- jquery-ui css -->
    {!! Html::style('assets/vendors/jquery-ui/jquery-ui.min.css') !!}
    <!-- modal video css -->
    {!! Html::style('assets/vendors/modal-video/modal-video.min.css') !!}
    <!-- light box css -->
    {!! Html::style('assets/vendors/lightbox/dist/css/lightbox.min.css') !!}
    <!-- slick slider css -->
    {!! Html::style('assets/vendors/slick/slick.css') !!}
    {!! Html::style('assets/vendors/slick/slick-theme.css') !!}
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    {!! Html::style('assets/css/style.css') !!}
    <title>Travele | Travel & Tour HTML5 template </title>
</head>
<body class="home">
<div id="siteLoader" class="site-loader">
    <div class="preloader-content">
        <img src="{{ asset('assets/images/loader1.gif')}}" alt="">
    </div>
</div>
<div id="page" class="full-page">
    <header id="masthead" class="site-header header-primary">
        <!-- header html start -->
        {{--@include('partials.top_header')--}}
        @include('partials.bottom_header');
        <div class="mobile-menu-container"></div>
    </header>
    <main id="content" class="site-main">
        @yield('content')
    </main>
    <footer id="colophon" class="site-footer footer-primary">
        {{--@include('partials.top_footer');--}}
        @include('partials.bootom_footer');
    </footer>
    <a id="backTotop" href="#" class="to-top-icon">
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- custom search field html -->
    <div class="header-search-form">
        <div class="container">
            <div class="header-search-container">
                <form class="search-form" role="search" method="get" >
                    <input type="text" name="s" placeholder="Enter your text...">
                </form>
                <a href="#" class="search-close">
                    <i class="fas fa-times"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- header html end -->
</div>

<!-- JavaScript -->
{!! Html::script('assets/js/jquery.js') !!}
{!! Html::script('assets/js/jquery.validate.js') !!}
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
{!! Html::script('assets/vendors/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('assets/vendors/jquery-ui/jquery-ui.min.js') !!}
{!! Html::script('assets/vendors/countdown-date-loop-counter/loopcounter.js') !!}
{!! Html::script('assets/js/jquery.counterup.js') !!}
{!! Html::script('assets/vendors/modal-video/jquery-modal-video.min.js') !!}
{!! Html::script('assets/vendors/masonry/masonry.pkgd.min.js') !!}
{!! Html::script('assets/vendors/lightbox/dist/js/lightbox.min.js') !!}
{!! Html::script('assets/vendors/slick/slick.min.js') !!}
{!! Html::script('assets/js/jquery.slicknav.js') !!}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
{!! Html::script('assets/js/custom.js') !!}
@yield('script')

<script>
    $(document).ready(function(){
        $("#myForm").validate({ errorElement: 'div' });
        $('.first_name').each(function () {
            console.log(this);
            $(this).rules('add', {
                required: true,
                messages: {
                    required: "Nama depan harus diisi.",
                }
            })
        });
        $('.last_name').each(function () {
            $(this).rules('add', {
                required: true,
                messages: {
                    required: "Nama belakang harus diisi.",
                }
            })
        });

        $('.gender').each(function () {
            $(this).rules('add', {
                required: true,
                messages: {
                    required: "Jenis kelamin harus diisi.",
                }
            })
        });

        $('.nik_number').each(function () {
            $(this).rules('add', {
                required: true,
                messages: {
                    required: "Nomor KTP harus diisi.",
                }
            })
        });

        $('.phone_number').each(function () {
            $(this).rules('add', {
                required: true,
                messages: {
                    required: "Nomor HP harus diisi.",
                }
            })
        });

        $('.relation_type').each(function () {
            $(this).rules('add', {
                required: true,
                messages: {
                    required: "Hubungan mahram/pendamping harus diisi.",
                }
            })
        });


        $(document).on('click','#submit-booking',function(e){
            let valid = $("#myForm").valid();
            if(valid){
                $('#myForm').submit();
            }
        });
    });
</script>
</body>
</html>
