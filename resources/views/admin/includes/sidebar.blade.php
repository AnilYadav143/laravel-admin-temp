 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><!--<i class="fa fa-user-edit me-2"></i>-->Online Shop</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('admin_assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Anil</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{url('/dashboard')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{url('/appointment')}}" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Appointment</a>
            <a href="{{url('/eventgallery')}}" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Events gallery</a>
            <a href="{{url('/storeavailability')}}" class="nav-item nav-link"><i class="fa fa-search me-2"></i>Store Availability</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Mother ID Manage</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{url('create_mother_id')}}" class="dropdown-item">Create Mother ID</a>
                    <a href="{{url('motherID_transaction')}}" class="dropdown-item">Mother ID Transaction</a>
                    <a href="{{url('childId_income')}}" class="dropdown-item">Child ID Income</a>
                    <a href="{{url('childId_digital')}}" class="dropdown-item">Child ID Income digital Income</a>
                    <a href="{{url('firm_motherID')}}" class="dropdown-item">Firm Mother ID</a>
                </div>
            </div>
            {{-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> --}}
        </div>
    </nav>
</div>
<!-- Sidebar End -->