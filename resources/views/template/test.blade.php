@extends("template.master")
@section("title") Post List @endsection
@section("content")

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-wrap p-0 s_width" >
                <button class="openPanel text-danger border-0 d-none" id="openPanel">
                    <i class="fas fa-arrow-alt-circle-right fa-2x fa-fw btn mr-3 py-3"></i>
                </button>
                <div class="col-12 col-md-4 col-lg-3 p-0  sideLeft  vh-100  " id="panelLeft" style="z-index: 2" >
                    <div class="bg-ln1 accordion px-1" id="accordionExample"  style="overflow-y: scroll; width: 85%;">
                        <div class="d-flex justify-content-end align-items-center">
                            <button class="text-danger border-0 rounded-circle " id="closePanel">
                                <i class="fas fa-arrow-alt-circle-left fa-2x fa-fw btn mr-3 py-3"></i>
                            </button>
                        </div>
                        <div class="m-2">
                            <h5 class="font-weight-bolder text-danger m-3">CORE</h5>
                            <div class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                    Title One
                                    <span class="badge badge-primary badge-pill">2</span>
                                </li>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="m-2">
                            <h5 class="font-weight-bolder text-danger m-3">INTERFACE</h5>
                            <div class="list-group ">
                                <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c2" aria-expanded="true">
                                    How Are You
                                    <span class="badge badge-primary badge-pill">3</span>
                                </li>
                            </div>
                            <div id="c2" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="list-group ">
                                <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c3" aria-expanded="true">
                                    How Are You
                                    <span class="badge badge-primary badge-pill">3</span>
                                </li>
                            </div>
                            <div id="c3" class="collapse " aria-labelledby="headingThree" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="list-group ">
                                <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c4" aria-expanded="true">
                                    How Are You
                                    <span class="badge badge-primary badge-pill">3</span>
                                </li>
                            </div>
                            <div id="c4" class="collapse " aria-labelledby="headingFour" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m-2">
                            <div class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c5" aria-expanded="true">
                                    How Are You
                                    <span class="badge badge-primary badge-pill">5</span>
                                </li>
                            </div>
                            <div id="c5" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <ul class="list-group">
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                    <li class="list-group-item  rounded mt-1"><i class="fas fa-star mx-2"></i>  Cras justo odio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-9 px-0 vh-100 bg-light px-sm-3" style="overflow-y: scroll">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto aspernatur at cumque error ex, exercitationem facilis, maiores maxime omnis quia quisquam quos, rem sapiente sit soluta sunt tempore. Ipsa?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque autem, consequuntur dicta dolorem facere fugiat iste laboriosam magni natus nesciunt, placeat quibusdam quo reprehenderit tenetur ullam vel voluptates voluptatibus.
                </div>
            </div>
        </div>
    </div>
@stop
@section("script")
    <script>
        $(window).resize(function(){

            if ($('.s_width').width() <768 ){
                $("#panelLeft").addClass("d-none");
                $("#openPanel").removeClass("d-none");
            }else{
                $("#panelLeft").removeClass("d-none");
                $("#openPanel").addClass("d-none");
            }

        });
        // if ($( document ).width()<768){
        //
        // }else{
        // }
        $("#openPanel").click(function() {
            $("#panelLeft").addClass("position-absolute");
            $("#panelLeft").removeClass("d-none");
            $("#panelLeft").toggle("slide");
            $("#openPanel").hide();
        });
        $("#closePanel").click(function() {
            // $("#panelLeft").removeClass("d-none");
            $("#panelLeft").toggle("slide");
            $("#openPanel").removeClass("d-none");
            $("#openPanel").show();
        });



    </script>
@endsection
