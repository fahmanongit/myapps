<div class="navbar nav_title" style="border: 0;">
  <a href="<?php echo base_url('dashboard'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
</div>
<div class="clearfix"></div>
<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="<?php echo base_url(); ?>assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>John Doe</h2>
  </div>
</div>
<!-- /menu profile quick info -->
<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('dashboard2')?>">Dashboard 2</a></li>
          <li><a href="<?=base_url('dashboard3')?>">Dashboard 3</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('general_form')?>">General Form</a></li>
          <li><a href="<?=base_url('advanced_comp')?>">Advanced Components</a></li>
          <li><a href="<?=base_url('form_validation')?>">Form Validation</a></li>
          <li><a href="<?=base_url('form_wizard')?>">Form Wizard</a></li>
          <li><a href="<?=base_url('form_upload')?>">Form Upload</a></li>
          <li><a href="<?=base_url('form_button')?>">Form Buttons</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('general_element')?>">General Elements</a></li>
          <li><a href="<?=base_url('media_gallery')?>">Media Gallery</a></li>
          <li><a href="<?=base_url('typography')?>">Typography</a></li>
          <li><a href="<?=base_url('icons')?>">Icons</a></li>
          <li><a href="<?=base_url('glyphicons')?>">Glyphicons</a></li>
          <li><a href="<?=base_url('widgets')?>">Widgets</a></li>
          <li><a href="<?=base_url('invoice')?>">Invoice</a></li>
          <li><a href="<?=base_url('inbox')?>">Inbox</a></li>
          <li><a href="<?=base_url('calendar')?>">Calendar</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('tables')?>">Tables</a></li>
          <li><a href="<?=base_url('table_dynamic')?>">Table Dynamic</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?=base_url('chart_js')?>">Chart JS</a></li>
          <li><a href="<?=base_url('chart_js2')?>">Chart JS2</a></li>
          <li><a href="<?=base_url('moris_js')?>">Moris JS</a></li>
          <li><a href="<?=base_url('echarts')?>">ECharts</a></li>
          <li><a href="<?=base_url('other_charts')?>">Other Charts</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
          <li><a href="fixed_footer.html">Fixed Footer</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_section">
    <h3>Live On</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="e_commerce.html">E-commerce</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="project_detail.html">Project Detail</a></li>
          <li><a href="contacts.html">Contacts</a></li>
          <li><a href="profile.html">Profile</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="page_403.html">403 Error</a></li>
          <li><a href="page_404.html">404 Error</a></li>
          <li><a href="page_500.html">500 Error</a></li>
          <li><a href="plain_page.html">Plain Page</a></li>
          <li><a href="login.html">Login Page</a></li>
          <li><a href="pricing_tables.html">Pricing Tables</a></li>
        </ul>
      </li>
      <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            <li><a href="#level1_1">Level One</a>
            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li class="sub_menu"><a href="level2.html">Level Two</a>
                </li>
                <li><a href="#level2_1">Level Two</a>
                </li>
                <li><a href="#level2_2">Level Two</a>
                </li>
              </ul>
            </li>
            <li><a href="#level1_2">Level One</a>
            </li>
        </ul>
      </li>                  
      <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
    </ul>
  </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
  <a data-toggle="tooltip" data-placement="top" title="Settings">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="FullScreen">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Lock">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
  </a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?=base_url('logout')?>">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
  </a>
</div>
<!-- /menu footer buttons -->