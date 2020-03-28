<nav class="navbar navbar-expand-lg navbar-dark w-100" style="background-color: #e55752; position: fixed; z-index: 3">
{{--    <a class="navbar-brand p-0 m-0" href="#">--}}
{{--        <img src="{{ asset("logo/frozen.gif") }}" style="width: 170px;"  alt="">--}}
{{--    </a>--}}
    <div class="btn-group  ">
            <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset("img/default_user.png") }}" style="width: 45px" class="rounded-circle border border-dark" alt="">&nbsp; Aung Htet Chon
            </button>
            <div class="dropdown-menu dropdown-menu-right p-0">
                <button class="dropdown-item py-2 border-bottom" type="button"><i class="fas fa-cog fa-fw"></i> My Account Setting </button>
                <button class="dropdown-item py-2" type="button"><i class="fas fa-lock-open"></i> Logout</button>
            </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item border border-primary col-12 col-md-12 col-lg-2 text-center m-1 active ">
                <a class="nav-link" href=""><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item border border-primary col-12 col-md-12 col-lg-2 text-center m-1">
                <a class="nav-link" href="#"><i class="fab fa-fort-awesome"></i> Features</a>
            </li>
            <li class="nav-item border border-primary col-12 col-md-12 col-lg-2 text-center m-1">
                <a class="nav-link" href="#"><i class="fab fa-artstation"></i> About</a>
            </li>
            <li class="nav-item border border-primary col-12 col-md-12 col-lg-2 text-center m-1 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fab fa-microsoft"></i> Post Menu
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown" >
                    <a class="dropdown-item border-bottom py-2" href=""><i class="fas fa-plus-circle"></i> Add New Post</a>
                    <a class="dropdown-item py-2" href="#"><i class="fas fa-list"></i> Post List</a>
                </div>
            </li>
            <li class="nav-item border border-primary col-12 col-md-12 col-lg-2 text-center m-1">
                <a class="nav-link" href="#"><i class="fas fa-user"></i> Contacts</a>
            </li>
        </ul>
        {{--        <form class="form-inline">--}}
        {{--            <div class="md-form my-0">--}}
        {{--                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
        {{--            </div>--}}
        {{--        </form>--}}
    </div>

</nav>
