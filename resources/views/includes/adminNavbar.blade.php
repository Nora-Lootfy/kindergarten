<!-- Navbar Admin Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
    <a href="{{route('index')}}" class="navbar-brand">
        <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Teachers</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{route('teachers')}}" class="dropdown-item">All Teachers</a>
                    <a href="{{route('createTeacher')}}" class="dropdown-item">Add new Teacher</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Classes</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="" class="dropdown-item">All Classes</a>
                    <a href="" class="dropdown-item">Add new Class</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Testimonials</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <a href="{{route('testimonials')}}" class="dropdown-item">All Testimonials</a>
                    <a href="{{route('createTestimonial')}}" class="dropdown-item">Add new Testimonial</a>
                </div>
            </div>


        </div>

    </div>

</nav>
<hr style="height: 3px; color: #FF5D37;  margin-top: 2px;">
<!-- Navbar End -->

