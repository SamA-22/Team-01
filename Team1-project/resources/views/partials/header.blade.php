<div id="main">
    <div class="head">

        <!-----------------------Dashboard ---------------------->
        <div class="col-div-6">
            <span style="font-size:30px;cursor:pointer; color: #000000;" class="nav">☰ Admin Panel</span>
            <span style="font-size:30px;cursor:pointer; color: #000000;" class="nav2">☰
                Admin Panel</span>
        </div>
        <!-------------------------------------------->


            <!-----------------------Profile dropdown menu---------------------->
            <div class="col-div-6">
            <div class="profile">
                <div class="dropdown">
                    <button class="dropbtn">{{ Auth::user()->name }}
                        <i class='fas fa-user-circle'></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

        <!-----------------------Space between navBar and content---------------------->
        <div class="clearfix"></div>
    </div>

    <div class="clearfix"></div>
    <br />

    <!---------------Alert message------------------->
    @if (session('status'))
        <div class="alert alert-info" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('status') }}

        </div>
    @endif

@if(session()->has('message'))
    <div class ="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
    </div>
@endif

