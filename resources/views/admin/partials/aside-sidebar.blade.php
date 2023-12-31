<aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div>
        Admin <b class="font-black">Kelontong.id</b>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li class="">
          <a href="{{route('dashboard.index')}}">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Produk</p>
      <ul class="menu-list">
        <li class="">
          <a href="{{route('produk.index')}}">
            <span class="icon"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label">Produk</span>
          </a>
        </li>
        <li class="">
          <a href="{{route('pengguna.index')}}">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">List User</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>