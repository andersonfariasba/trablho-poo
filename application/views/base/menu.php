

 
 <!-- MENU LATERAL -->
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="padding-left: 20px;">
            <img src="<?= base_url(); ?>/img/logo_menu.png" width="60px;" border="0" />
          </div>

          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          
          <!-- /menu prile quick info -->

          <br />
        

            <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>Crud Trabalho</h3>
              <ul class="nav side-menu">
                
              
              <li><a><i class="fa fa-group"></i> Cadastros <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                     <li><a href="<?php echo site_url('colaborador/filtro');?>">Colaboradores</a>
                    </li>
                    
                    <li><a href="<?php echo site_url('cargo/filtro');?>">Cargos</a></li>

                     <li><a href="<?php echo site_url('acesso_usuarios/filtro');?>">Usuários</a></li>
                    
                   
                  
                    </li>
                  
                  </ul>
                </li>
              

                <li><a href="<?php echo site_url('login/sair');?>"><i class="fa fa-close"></i> Sair</a>
                </li>

              </ul>
            </div>
            
         



          </div>


            <!-- /menu footer buttons -->
        <!--  <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>-->
          <!-- /menu footer buttons -->

       
        </div>
      </div> <!-- final menu lateral-->


  <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <!-- <ul class="nav navbar-nav navbar-left col-md-11">-->
               <!--<li class="col-md-8">
            
               <img src="<?= base_url(); ?>/img/logo_login.png" width="50px;" border="0" style="padding-top:10px; " />
         
             </li>-->

              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?= base_url(); ?>images/img.png" alt=""><?php echo $this->session->userdata('login'); ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  
              
                 <!-- <li>
                    <a href="javascript:;">Ajuda</a>
                  </li>-->
                  <li><a href="<?php echo site_url('login/sair');?>"><i class="fa fa-sign-out pull-right"></i> Sair do Sistema</a>
                  </li>
                </ul>
              </li>

               <!--<li class="">
                <a href="<?php echo site_url('marketing/customizacao');?>" class="user-profile">
                                
                </a>
                
              </li>-->

               <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell-o"></i>
                  <span class="badge bg-red" id="total_msg"></span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                 <span id="listaMsgPendente"></span>

                

                </ul>

              </li>

                <li role="presentation" class="dropdown">
               <!-- <a href="<?php echo site_url('agenda/visualizar');?>" target="__blank">
                  <i class="fa fa-calendar"></i>
                  <span class="badge bg-red"></span>
                </a>-->
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                 <span></span>

                

                </ul>

              </li>

              

           </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


<!-- /subnavbar -->
<?php //print_r($this->session->all_userdata()); ?>

<?php  //echo $this->session->userdata('login'); ?>
