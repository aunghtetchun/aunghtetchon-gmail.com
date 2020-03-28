@extends("template.master")
@section("title") Post List @endsection
@section("content")

    <div class="row m-0">
        <div class="col-3 p-0">
            <div id="mySidenav" class="sidenav pt-0">
                {{--                <a href="javascript:void(0)" id="closeNav" class=" mb-3" onclick="closeNav()">&times;</a>--}}
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>
        </div>
        <div class="col-12 col-md-9 ">
            aaaaaaaaaaaaaaa
            <h2>Animated Sidenav Example</h2>
            <p>Click on the element below to open the side navigation menu.</p>
            <button class="btn btn-primary btn-sm" id="openNav" onclick="openNav()">
                <i class="fas fa-angle-double-right fa-fw "></i>
            </button>
            <button class="btn btn-primary btn-sm" id="closeNav" onclick="closeNav()">
                <i class="fas fa-angle-double-left fa-fw"></i>
            </button>
        </div>
    </div>

@stop
@section("script")
    <script>
        $("#closeNav").hide();
        function openNav() {
            $(".sidenav").css("width","100%");
            $("#openNav").slideUp(300);
            $("#closeNav").slideDown(500);
            // $("#closeNav").css("display","block");
        }

        function closeNav() {
            $(".sidenav").css("width","0%");
            $("#closeNav").slideUp(300);
            $("#openNav").slideDown(500);
        }

    </script>
@endsection
