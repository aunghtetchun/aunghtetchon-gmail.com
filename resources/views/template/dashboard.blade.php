@extends("template.master")
@section("title") Post List @endsection
@section("content")

    <div class="row m-0">
        <div class="col-7 col-md-3 p-0 vh-100 leftside" >
            <div id="mySidenav" class="sidenav pt-0  bg-ln1" style="overflow-y: scroll; margin-top: 75px">
                <div class="accordion px-1" id="accordionExample"  >
                    <div class="m-2">
                        <h5 class="font-weight-bolder text-danger m-3">CORE</h5>
                        <div class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                <span><i class="fas fa-chart-line fa-fw"></i> Dashboards</span>
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <ul class="list-group">
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="m-2">
                        <h5 class="font-weight-bolder text-danger m-3">INTERFACE</h5>
                        <div class="list-group ">
                            <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c2" aria-expanded="true">
                                <span><i class="fas fa-th-list fa-fw"></i> Layout</span>
                                <span class="badge badge-primary badge-pill">3</span>
                            </li>
                        </div>
                        <div id="c2" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <ul class="list-group">
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="list-group ">
                            <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c3" aria-expanded="true">
                                <span><i class="fas fa-cube fa-fw"></i> Components</span>
                                <span class="badge badge-primary badge-pill">3</span>
                            </li>
                        </div>
                        <div id="c3" class="collapse " aria-labelledby="headingThree" data-parent="#accordionExample">
                            <ul class="list-group">
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="list-group ">
                            <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c4" aria-expanded="true">
                                <span><i class="fas fa-tools fa-fw"></i> Utilities</span>
                                <span class="badge badge-primary badge-pill">3</span>
                            </li>
                        </div>
                        <div id="c4" class="collapse " aria-labelledby="headingFour" data-parent="#accordionExample">
                            <ul class="list-group">
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c5" aria-expanded="true">
                                <span><i class="fas fa-book-open fa-fw"></i> Pages</span>
                                <span class="badge badge-primary badge-pill">5</span>
                            </li>
                        </div>
                        <div id="c5" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <ul class="list-group">
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c6" aria-expanded="true">
                                <span><i class="fas fa-retweet fa-fw"></i> Flows</span>
                                <span class="badge badge-primary badge-pill">5</span>
                            </li>
                        </div>
                        <div id="c6" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <ul class="list-group">
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-2">
                        <h5 class="font-weight-bolder text-danger m-3">ADDONS</h5>
                        <div class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c7" aria-expanded="true">
                                <span><i class="fas fa-chart-bar fa-fw"></i> Charts</span>
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                        </div>
                        <div id="c7" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <ul class="list-group">
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="m-2">
                        <div class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#c8" aria-expanded="true">
                                <span><i class="fas fa-table fa-fw"></i> Tables</span>
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                        </div>
                        <div id="c8" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                            <ul class="list-group">
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                                <li class="list-group-item rounded mt-1"> <i class="fas fa-exclamation-triangle fa-fw text-danger"></i>  Cras justo odio</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-9 rightside vh-100 ">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum perferendis provident repudiandae soluta. Dignissimos ex nulla pariatur quasi quisquam? Deserunt eum laudantium minima placeat quibusdam quisquam ratione reiciendis sint tempore!
            </p>
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
