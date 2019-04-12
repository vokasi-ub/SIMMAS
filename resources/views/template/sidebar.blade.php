
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NA</li>
       <li>
          <a href="penduduk">
            <i class="fa fa-dashboard"></i> <span>PENDUDUK</span>
           
          </a>
        </li>

         <li>
          <a href="kk">
            <i class="fa fa-dashboard"></i> <span>KEPALA KELUARGA</span>
           
          </a>
        </li>

         <li>
          <a href="pendatang">
            <i class="fa fa-dashboard"></i> <span>PENDATANG</span>
           
          </a>
        </li>


         <li>
          <a href="kelahiran">
            <i class="fa fa-dashboard"></i> <span>KELAHIRAN</span>
           
          </a>
        </li>

         <li>
          <a href="kematian">
            <i class="fa fa-dashboard"></i> <span>KEMATIAN</span>
           
          </a>
        </li>

        <br>

        <!--ini buat log out ya -->
        <i class="fa fa-logout"   "fa fa-dashboard"></i> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="mdi-hardware-keyboard-tab"></i>{{ __('LOGOUT') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
      </ul>
    
    </section>
    <!-- /.sidebar -->
