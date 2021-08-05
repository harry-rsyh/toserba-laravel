<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    {{-- Sidebar - Brand --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    {{-- Divider --}}
    <hr class="sidebar-divider my-0">

    {{-- Nav Item - Dashboard --}}
    <li id="dashboard_menu" class="nav-item">
        <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider">

    {{-- Heading --}}
    <div class="sidebar-heading">
        Interface
    </div>

    {{-- Nav Item - Pages Collapse Menu --}}
    <li id="product_menu" class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-cubes"></i>
            <span>Product</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Action:</h6>
                <a class="collapse-item" href="{{ url('product/list') }}">List Product</a>
                <a class="collapse-item" href="{{ url('product/new') }}">New Product</a>
            </div>
        </div>
    </li>

    {{-- Nav Item - Utilities Collapse Menu --}}
    <li id="finance_menu" class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Finance</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Action:</h6>
                <a class="collapse-item" href="{{ url('/finance/chart') }}">Chart</a>
                <a class="collapse-item" href="#">Report</a>
                <a class="collapse-item" href="#">Audit</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    {{-- Heading --}}
    <div class="sidebar-heading">
        Advance
    </div>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fas fa-user"></i>
        <span>Profile</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fas fa-cog"></i>
        <span>Settings</span></a>
    </li>

    {{-- Divider --}}
    <hr class="sidebar-divider d-none d-md-block">

    {{-- Sidebar Toggler (Sidebar) --}}
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<script>
    const url_path = '{{ $url_path }}';
    
    const activePage = (urls) => {
        const getUrl = urls.split("/");
        switch(getUrl[0]){
            case 'admin': {
                console.log('Admin');
                document.getElementById('dashboard_menu').classList.add('active');
                break;
            }
            case 'product': {
                console.log('product');
                document.getElementById('product_menu').classList.add('active');
                break;
            }
            case 'finance': {
                console.log('finance');
                document.getElementById('finance_menu').classList.add('active');
                break;
            }
            default:
                break;
        }
    }
    
    activePage(url_path);
</script>