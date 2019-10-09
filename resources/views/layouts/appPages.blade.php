<!DOCTYPE html>
<html lang="en">

    @include('incPages.head')

<body class="{{$bodyClass}}">
<div class="totopshow">
    <a href="#" class="back-to-top"><img alt="Back to Top" src="{{asset('FrontEnd')}}/images/gototop0.png"/></a>
</div><!-- totopshow -->
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div id="ttr_page" class="container">
   @include('incPages/nav')
    @include('incPages/header')
    <div id="ttr_content_and_sidebar_container">
        <div id="ttr_content">
            <div id="ttr_html_content_margin" class="container-fluid">

            @yield('content')

            </div><!--content_margin-->
        </div><!--content-->
        <div style="clear:both">
        </div>
    </div><!--container-->
    <div style="height:0px;width:0px;overflow:hidden;"></div>
    @include('incPages.footer')
    <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
</div><!--page-->
</body>
</html>
