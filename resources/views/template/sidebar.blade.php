    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assetslte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i>Store of Good Bag</a>
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="active treeview"></li>
          
           <a href="barang">
            <i class="fa fa-dashboard"></i> <span>Data Barang</span>
            <br>
            <br>
          </a>
           <a href="type">
            <i class="fa fa-dashboard"></i> <span>Type</span>
            <br>
            <br>
          </a>
           <a href="merk">
            <i class="fa fa-dashboard"></i> <span>Merk</span>
          </a>
          <br>
          <br>
          <i class="fa fa-logout"></i> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi-hardware-keyboard-tab"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          
         
    </section>
    <!-- /.sidebar -->
