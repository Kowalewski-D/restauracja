<div class="sidebar" data-color="azure" data-background-color="black" data-image="{{ asset('back/img/sidebar.jpg') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
            Admin Panel
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active': ''}}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/slider*') ? 'active': ''}}">
                <a class="nav-link" href="{{ route('slider.index') }}">
                    <i class="material-icons">slideshow</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/category*') ? 'active': ''}}">
                <a class="nav-link" href="{{ route('category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Kategorie</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/item*') ? 'active': ''}}">
                <a class="nav-link" href="{{ route('item.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Przedmioty</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/reservation*') ? 'active': ''}}">
                <a class="nav-link" href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Rezerwacje</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/contact*') ? 'active': ''}}">
                <a class="nav-link" href="{{ route('contact.index') }}">
                    <i class="material-icons">message</i>
                    <p>Wiadomości</p>
                </a>
            </li>
        </ul>
    </div>
</div>
