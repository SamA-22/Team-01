   <!-----------------------Admin Side NavBar---------------------->
   <div id="mySidenav" class="sidenav">
       <p class="logo"><img id="adminPage-logo" src="{{ URL::asset('/images/HDCwhite.png') }}" alt="logo"></p>
       <a href="{{ asset('dashboard') }}"><i class="fa fa-home icons"></i> Home</a>
       <a href="{{ asset('admin.users') }}" class="icon-a"><i class="fa fa-users icons"></i> Customers</a>
       <a href="#" class="icon-a"><i class="fa fa-tasks icons"></i> Inventory</a>
       <a href="#" class="icon-a"><i class="fa fa-shopping-bag icons"></i> Orders</a>
       <a href="{{ asset('admin.adminAccount') }}" class="icon-a"><i class="fa fa-user icons"></i> My Accounts</a>
       <a href="{{ asset('/') }}" class="icon-a"><i class="fa fa-globe icons"></i> Website</a>

   </div>
   <!-----------------------Admin End of Side NavBar---------------------->
