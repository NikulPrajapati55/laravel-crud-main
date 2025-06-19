<div class="col-3">
    <div class="dashboard-card d-flex flex-column flex-shrink-0 p-3 bg-dark text-white">
        <h4 class="text-center mb-4 "><a class=" text-white" href="{{ route('dashboard') }}"> 🏨 Hotel Panel</a></h4>
        <ul class="nav nav-pills flex-column mb-auto hotel__menubar">
            <li class="nav-item">
                <a href="{{ route('hotel-details') }}" class="nav-link text-white">
                    <i class="bi bi-person-badge me-2"></i> Hotel Employee
                </a>
            </li>
            <li>
                <a href="{{ route('visitordetail') }}" class="nav-link text-white">
                    <i class="bi bi-people me-2"></i> Visitors
                </a>
            </li>
            <li>
                <a href="{{ route('bils') }}" class="nav-link text-white">
                    <i class="bi bi-receipt me-2"></i> Bills
                </a>
            </li>
            <li>
                <a href="{{ route('allproduct') }}" class="nav-link text-white">
                    <i class="bi bi-shop me-2"></i> Store
                </a>
            </li>

            <!-- Dropdown: Bookings -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="bookingDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-calendar-check me-2"></i> Bookings
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="bookingDropdown">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-plus-circle me-2"></i> New Booking</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-list-check me-2"></i> Manage
                            Bookings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-bar-chart-line me-2"></i> Booking
                            Reports</a></li>
                </ul>
            </li>

            <!-- Dropdown: Rooms -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="roomDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-door-open me-2"></i> Rooms
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="roomDropdown">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-plus-square me-2"></i> Add Room</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-list-ul me-2"></i> Room List</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-tags me-2"></i> Room Categories</a></li>
                </ul>
            </li>

            <!-- Dropdown: Reports -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="reportDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-graph-up-arrow me-2"></i> Reports
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="reportDropdown">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-day me-2"></i> Daily Report</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-month me-2"></i> Monthly
                            Report</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-funnel me-2"></i> Custom Report</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('home') }}" class="nav-link text-white">
                    <i class="bi bi-gear me-2"></i> Site
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-gear me-2"></i> All Employe
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-gear me-2"></i> Settings
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-box-arrow-right me-2"></i>
                    <form method="POST" action="{{ route('logout') }}"
                        onsubmit="return confirm('Are you sure you want to logout?');">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>

                </a>
            </li>
        </ul>

    </div>
</div>
