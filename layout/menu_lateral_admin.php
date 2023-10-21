 
 <!-- MENU DE LATERAL ADMIN -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DEL ADMIN --> 
        <a href="<?php echo $URL; ?>/admin" class="brand-link">
            <i class="nav-icon fas fa-user-tie"></i> Administrador <br>
            <img src="<?php echo $URL;?>/public/images/logotienda.png" alt="logo tienda" 
            class="brand-image img-circle elevation-0" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo APP_NAME;?>  
            </span>
        </a>             
    <!-- ///LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DEL ADMIN -->
        <div class="sidebar"> 
            <!-- INFO Y FOTO DE PERFIL DEL USUARIO -->    
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="<?php echo $URL;?>/public/images/fotostek.jpg" 
                    class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block">
                    <b><?php echo $nombres_session;?></b>
                    </a>
                    </div>
                </div>
            <!--//// INFO Y FOTO DE PERFIL DEL USUARIO -->
            <!-- MENU BOTONES -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" 
                    role="menu" data-accordion="false">
                        <!--BOTON INICIO-->
                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/" 
                                class="nav-link active" >
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Inicio
                                </p>
                                </a>
                            </li>
                        <!--///BOTON INICIO-->
                        <!--BOTON ADMIN        
                            <li class="nav-item">
                                <a href="<?php echo $URL; ?>/admin" 
                                class="nav-link active" >
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    Admin
                                </p>
                                </a>
                            </li>
                        ///BOTON ADMIN-->
                        <!--BOTON USUARIOS-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/usuarios" class="nav-link active">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Listado de usuarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/usuarios/create.php" class="nav-link active">
                                        <i class="nav-icon fas fa-user-plus"></i>
                                        <p>Nuevo usuario</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <!--///BOTON USUARIOS-->
                        <!--BOTON ROLES-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>
                                    Roles
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/roles" class="nav-link active">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>Listado de roles</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/roles/create.php" class="nav-link active">
                                        <i class="nav-icon fas fa-plus"></i>
                                        <p>Nuevo rol</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <!--///BOTON ROLES-->
                        <!--BOTON PRESTAMOS-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>
                                    Prestamos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/prestamos" class="nav-link active">
                                        <i class="nav-icon fas fa-faucet"></i>
                                        <p>Listado de prestamos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/prestamos/create.php" class="nav-link active">
                                        <i class="nav-icon fas fa-coins"></i>
                                        <p>Nuevo prestamo</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <!--////BOTON PRESTAMOS--> 
                        <!--BOTONES PERFIL-->
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    session
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                            <!--BOTON INGRESAR-->
                                <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/app/controllers/login" 
                                        class="nav-link active">
                                        <i class="nav-icon fas fa-handshake"></i> 
                                        <p>
                                        Ingresar
                                        </p>
                                        </a>
                                    </li>
                            <!--///BOTON INGRESAR-->
                            <!--BOTON CERRAR SESSION-->        
                                    <li class="nav-item">
                                        <a href="<?php echo $URL; ?>/app/controllers/login/cerrar_session.php" 
                                        class="nav-link active" >
                                        <i class="nav-icon fas fa-door-closed"></i>
                                        <p>
                                            Cerrar session
                                        </p>
                                        </a>
                                    </li>
                            <!--///BOTON CERRAR SESSION-->
                                </ul>
                            </li>
                        <!--////BOTON PERFIL-->      
                    </ul>
                </nav>
            <!-- ///MENU BOTONES-->
        </div>
    <!-- LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DEL ADMIN --> 
        <a href="<?php echo $URL; ?>/admin" class="brand-link">
            <img src="<?php echo $URL;?>/public/images/logotienda.png" alt="logo tienda" 
            class="brand-image img-circle elevation-0" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo APP_NAME;?><br>  
            <i class="nav-icon fas fa-user-tie"></i> Administrador </span>
        </a>             
    <!-- ///LOGO Y NOMBRE DE PAGINA EN EL MENU DE LATERAL DEL ADMIN --> 
    </aside>
<!-- ///MENU DE LATERAL ADMIN -->

<!--//// wrapper -->