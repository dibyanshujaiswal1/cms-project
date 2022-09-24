<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Divider -->
     <!-- Divider -->
     <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{url('admin/dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed3" href="#" data-toggle="collapse" data-target="#collapseUtilities2" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-recycle"></i>
            <span>News and Event</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">News and Event:</h6>
                <a class="collapse-item" href="{{route('get.news')}}">News</a>
                <a class="collapse-item" href="{{route('get.event')}}">Event</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-rss"></i>
            <span>Blogs</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="{{route('get.blog')}}">Blog List</a>
                <a class="collapse-item" href="{{route('blog.create')}}">Add Blog</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed05" href="#" data-toggle="collapse" data-target="#collapseTwo05" aria-expanded="true" aria-controls="collapseTwo">
            <i class="	fas fa-address-book"></i>
            <span>Publications</span>
        </a>
        <div id="collapseTwo05" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('get.publication')}}">List of Publications</a>
                <a class="collapse-item" href="{{route('publication.create')}}">Add publication</a>
            </div>
        </div>
    </li>
    <div class="nav-item">
        <a class="nav-link collapsed03" href="{{route('get.message')}}" data-target="#collapseTwo02" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-bell"></i>
            <span>Users Message</span>
        </a>
       
</div>
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-images"></i>
            <span>Gallery</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('view.gallery')}}">Gallery List</a>
                <a class="collapse-item" href="{{route('gallery.create')}}">Add New Gallery</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Team Members</span>
        </a>
        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('get.member')}}">Members List</a>
                <a class="collapse-item" href="{{route('member.create')}}">Add Members</a>
            </div>
        </div>
    </li>



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed1" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-image"></i>
            <span>Banners</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('get.banner')}}">Banner List</a>
                <a class="collapse-item" href="{{route('banner.create')}}">Add Banner</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    
   
    
    <li class="nav-item">
        <a class="nav-link collapsed0" href="#" data-toggle="collapse" data-target="#collapseTwo0" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-anchor"></i>
            <span>Logo</span>
        </a>
        <div id="collapseTwo0" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('get.logo')}}">Logo List</a>
                <a class="collapse-item" href="{{route('logo.create')}}">Add New Logo</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed01" href="#" data-toggle="collapse" data-target="#collapseTwo01" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-tv"></i>
            <span>Contact</span>
        </a>
        <div id="collapseTwo01" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('get.contact')}}">Contact List</a>
                <a class="collapse-item" href="{{route('contacts.create')}}">Add New Contact</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed02" href="#" data-toggle="collapse" data-target="#collapseTwo02" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-share-alt"></i>
            <span>Social Media</span>
        </a>
        <div id="collapseTwo02" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('get.media')}}">Media List</a>
                <a class="collapse-item" href="{{route('socialmedia.create')}}">Add New Media </a>
            </div>
        </div>
    </li>

<li class="nav-item">
        <a class="nav-link collapsed04" href="#" data-toggle="collapse" data-target="#collapseTwo04" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-laugh-wink"></i>
            <span>About Us</span>
        </a>
        <div id="collapseTwo04" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('get.about')}}">List</a>
                <a class="collapse-item" href="{{route('about.create')}}">Add New Data </a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>