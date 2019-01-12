<?php
    require 'ini.php';
    //require 'connection.php';
    require 'core.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Libreria ITZY</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    
    
   
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
 
    
    
    
    
    
    
    

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    
   <!-- <script>
    (function(){
	var content = document.getElementById("geolocation-test");

	if (navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(function(objPosition)
		{
			var lon = objPosition.coords.longitude;
			var lat = objPosition.coords.latitude;

			content.innerHTML = "<p><strong>Latitud:</strong> " + lat + "</p><p><strong>Longitud:</strong> " + lon + "</p>";

		}, function(objPositionError)
		{
			switch (objPositionError.code)
			{
				case objPositionError.PERMISSION_DENIED:
					content.innerHTML = "No se ha permitido el acceso a la posición del usuario.";
				break;
				case objPositionError.POSITION_UNAVAILABLE:
					content.innerHTML = "No se ha podido acceder a la información de su posición.";
				break;
				case objPositionError.TIMEOUT:
					content.innerHTML = "El servicio ha tardado demasiado tiempo en responder.";
				break;
				default:
					content.innerHTML = "Error desconocido.";
			}
		}, {
			maximumAge: 75000,
			timeout: 15000
		});
	}
	else
	{
		content.innerHTML = "Su navegador no soporta la API de geolocalización.";
	}
})();

    
    
    </script>-->
    

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php 
    require 'header.php';  
    
    ?>
  
  <!-- SIDEBAR MENU -->

  <?php 
if($security == 'go'){   


  require 'sidebar.php';  



      
        ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      <h1>
        Ingreso de producto
        <small>Mercaderia</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Productos</a></li>
        <li class="active">Ingreso de productos</li>
      </ol>
    </section>
      <div class="pad margin no-print">
            <div class="callout callout-info" style="margin-bottom: 0!important;">
                <h4><i class="fa fa-info"></i> Nota:</h4>
                Escanea el codigo de barra y selecciona continuar para ver si el producto existe o hay que ingresar un nuevo producto.
            </div>
        </div>

    <?php
    $sku    = $_POST['sku'];
    $flag   = $_POST['flag'];
    
    $mensaje=   "";
    
    switch($flag){
            
        case "verificacion":
            $query1 =   "SELECT 
                        COUNT(sku), codigo, nombre, marca, tipo, stock, descripcion, tama, precio_venta, precio_compra 
                        FROM
                        inventario 
                        WHERE 
                        sku='$sku'";  
             //error_log("QUERY PAGAR #2 $query1");
            $queryc =   mysqli_query($con, $query1);
            $result =   mysqli_fetch_array($queryc);
    
            $sku1       =   $result['COUNT(sku)'];
            $codigo     =   $result['codigo'];
            $producto   =   $result['nombre'];
            $marca      =   $result['marca'];
            $tipo       =   $result['tipo'];
            $descrip    =   $result['descripcion'];
            $no_product =   $result['stock'];
            $tam        =   $result['tama'];
            $p_venta    =   $result['precio_venta'];
            $p_compra   =   $result['precio_compra'];
            
            
        
           // echo "Hola" . $sku1;
            
            break;
            
        case "nuevo":
            
            $sku_nuevo  =   $_POST['sku'];
            $codigo     =   $_POST['codigo'];
            $producto   =   $_POST['producto'];
            $marca      =   $_POST['marca'];
            $tipo       =   $_POST['tipo'];
            $tam        =   $_POST['tam'];
            $descrip    =   $_POST['descrip'];
            $no_product =   $_POST['noproduc'];
            $p_venta    =   $_POST['p_venta'];
            $p_compra   =   $_POST['p_compra'];
            
            $query1 =   "SELECT 
                        COUNT(sku), codigo, nombre, marca, tipo, stock, fecha_ingreso, descripcion 
                        FROM
                        inventario 
                        WHERE 
                        sku='$sku'";  
             //error_log("QUERY PAGAR #2 $query1");
            $queryc =   mysqli_query($con, $query1);
            $result =   mysqli_fetch_array($queryc);
    
            $stock =   $result['stock'];
            
            $nuevo_stock = $stock + $no_product;
            
            
           // $mensaje = "nuevo producto" . $sku_nuevo . $codigo . $producto . $marca . $tipo . $tam . $descrip . $no_product ;
        // error_log("QUERY nuevo #2 $mensaje");
            
            $query1 =   "INSERT INTO inventario (sku, codigo, nombre, marca, tipo, tama, descripcion, minimo, stock, ingreso_producto, fecha_ingreso, precio_compra, precio_venta) VALUES ('$sku_nuevo','$codigo','$producto','$marca','$tipo','$tam','$descrip','3','$nuevo_stock','$no_product','$da','$p_compra','$p_venta')";  
            $queryc =   mysqli_query($con, $query1);
            
            
             echo "<h3> Se ha ingresado correctamente el producto " . $producto . " con codigo " . $codigo . "</h3>";
            
            
            break;
            
        case "actualizacion":
            $sku_nuevo  =   $_POST['sku'];
            $codigo     =   $_POST['codigo'];
            $producto   =   $_POST['producto'];
            $marca      =   $_POST['marca'];
            $tipo       =   $_POST['tipo'];
            $tam        =   $_POST['tam'];
            $descrip    =   $_POST['descrip'];
            $no_product =   $_POST['noproduc'];
            $p_venta    =   $_POST['p_venta'];
            $p_compra   =   $_POST['p_compra'];
            
            
            $query1 =   "SELECT 
                        sku, stock 
                        FROM
                        inventario 
                        WHERE 
                        sku='$sku_nuevo'";  
             //error_log("QUERY PAGAR #2 $query1");
            $queryc =   mysqli_query($con, $query1);
            $result =   mysqli_fetch_array($queryc);
    
            $stock =   $result['stock'];
            
            $nuevo_stock = $stock + $no_product;
            
            $query1 =   "UPDATE inventario SET stock ='$nuevo_stock', ingreso_producto='$no_product', fecha_ingreso='$da', precio_compra='$p_compra', precio_venta='$p_venta' WHERE sku = '$sku_nuevo'";  
            $queryc =   mysqli_query($con, $query1);
            
            echo "<h3> Se han ingresado " . $no_product . " nuevos productos de " . $producto ."</h3>";
            
            break;
            
    }
    
    
   /* if($flag=="verificacion"){
    $
      
    $query1 =   "SELECT 
                    COUNT(sku), codigo, nombre, marca, tipo, stock, fecha_ingreso, descripcion 
                FROM
                inventario 
                WHERE 
                    sku='$sku'";  
    $queryc =   mysqli_query($con, $query1);
    $result =   mysqli_fetch_array($queryc);
    
    $sku1 =   $result['COUNT(`sku`)'];
        
        echo "Hola" . $sku1;
        
        }*/
      ?>

    <!-- Main content -->
    <section class="content">
     
      
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-5 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          
          
          
          <p class="margin">SKU DE PRODUCTO </p>
            <form class="form-horizontal" method="post">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="sku" name="sku">
                <input type="hidden" class="form-control" id="flag" name="flag" value="verificacion">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Go!</button>
                    </span>
              </div>
            </form>
          

        </section>
          
          <?php 
        if($flag=="verificacion" and $sku!=""){
        if($sku1>0){
            
            ?>
          <!-- ***** ACTUALIZACION DE PRODUCTOS  ****** -->
          
          <section class="col-lg-5 connectedSortable">
               <h1><small>Ingrese la nueva cantidad del siguiente producto</small></h1>
               <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SKU</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sku1" name="sku1" value="<?php echo $sku; ?>" disabled >
                      <input type="hidden" class="form-control" id="sku" name="sku" value="<?php echo $sku; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">Código</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="codigo1" name="codigo1" value="<?php echo $codigo; ?>" disabled>
                      <input type="hidden" class="form-control" id="codigo" name="codigo" value="<?php echo $codigo; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Producto</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="producto1" name="producto1" value="<?php echo $producto; ?>" disabled>
                      <input type="hidden" class="form-control" id="producto" name="producto" value="<?php echo $producto; ?>">
                  </div>
                </div>
                                  
                                    
                <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">Descripcion</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="descrip1" name="descrip1" value="<?php echo $descrip; ?>" disabled>
                      <input type="hidden" class="form-control" id="descrip" name="descrip" value="<?php echo $descrip; ?>">
                  </div>
                </div>
                  
                  
                  
                <div class="form-group">
                <label for="inputText3" class="col-sm-2 control-label">Precio Venta</label>
                    <div class="col-sm-4">
                <div class="input-group">
                <span class="input-group-addon">Q</span>
                <input type="text" class="form-control" id="p_venta" name="p_venta" value="<?php echo $p_venta; ?>">
                
                </div>
                    </div>
                </div>
                  <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">Precio Compra</label>
                      <div class="col-sm-4">
                  <div class="input-group">
                  <span class="input-group-addon">Q</span>
                  <input type="text" class="form-control" id="p_compra" name="p_compra" value="<?php echo $p_compra; ?>">
                
                  </div>
                      </div>
                  
                </div>
                  
                <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">No. de productos</label>

                  <div class="col-sm-5">
                    <input type="numero" class="form-control" id="noproduc" name="noproduc" value="<?php echo $no_product; ?>">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden"  name="flag" value="actualizacion">
                <!--<button type="submit" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-info pull-right">Actualizar</button>
              </div>
              <!-- /.box-footer -->
            </form>
               
          </section>  
          
          
          <?php
            
        }
    else {
       // echo"Mostrar esto.";
        ?>
    <!-- ***** INGRESO DE NUEVOS PRODUCTOS  ****** -->
           <section class="col-lg-5 connectedSortable">
               <h1><small>No existe el producto, ingrese el producto a continuación.</small></h1>
               <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SKU</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="sku1" name="sku1" value="<?php echo $sku; ?>" disabled>
                      <input type="hidden" class="form-control" id="sku" name="sku" value="<?php echo $sku; ?>" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">Código</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Producto</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="producto" name="producto" placeholder="Producto">
                  </div>
                </div>
                <div class="form-group">
                    <?php 
                        $query  =   "
                                    SELECT * 
                                    FROM 
                                    marcas ";
                        
                        $marca  =   mysqli_query($con, $query);
                        
        
                    ?>
                <label>Marca</label>
                <select class="form-control select2" name="marca" style="width: 100%;">
                     <option value=""></option>
                  <?php 
                    
                    while( $resultm=   mysqli_fetch_array($marca)){
                        $nombre =   $resultm['nombre'];
                        $id_marca =   $resultm['id_marca'];
                    ?>
                    
                    
                    <option value="<?php echo "$id_marca";?>"><?php echo "$nombre";?></option>
                  
                    <?php
                      }
                    ?>
                </select>
              </div>
                  <div class="form-group">
                    <?php 
                        $query  =   "
                                    SELECT * 
                                    FROM 
                                    tipo ";
                        
                        $tipos  =   mysqli_query($con, $query);
                        
        
                    ?>
                <label>Tipo</label>
                <select class="form-control select2" name="tipo" style="width: 100%;">
                     <option value=""></option>
                  <?php 
                    
                    while( $resultti=   mysqli_fetch_array($tipos)){
                        $tipo =   $resultti['tipo'];
                        $id_tipo =   $resultti['id_tipo'];
                    ?>
                    
                    
                    <option value="<?php echo "$id_tipo";?>"><?php echo "$tipo";?></option>
                  
                    <?php
                      }
                    ?>
                </select>
              </div>
                  <!-- INICIO DE TAMAÑO -->
                  <div class="form-group">
                    <?php 
                        $query  =   "
                                    SELECT * 
                                    FROM 
                                    tama ";
                        
                        $tama  =   mysqli_query($con, $query);
                        
        
                    ?>
                <label>Tamaño</label>
                <select class="form-control select2" name="tam" style="width: 100%;">
                     <option value=""></option>
                  <?php 
                    
                    while( $resultt=   mysqli_fetch_array($tama)){
                        $tamanio =   $resultt['tama'];
                        $id_tamanio =   $resultt['id_tama'];
                    ?>
                    
                    
                    <option value="<?php echo "$id_tamanio";?>"><?php echo "$tamanio";?></option>
                  
                    <?php
                      }
                    ?>
                </select>
              </div>
                  
                  <!-- FIn de tamaño -->
                  
                <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">Descripcion</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="descrip" name="descrip" placeholder="Descripción">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">Precio Venta</label>

                  <div class="col-sm-4">
                    <input type="numero" class="form-control" id="p_venta" name="p_venta" >
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">Precio Compra</label>

                  <div class="col-sm-4">
                    <input type="numero" class="form-control" id="p_compra" name="p_compra" >
                  </div>
                </div>
                  
                <div class="form-group">
                  <label for="inputText3" class="col-sm-2 control-label">No. de productos</label>

                  <div class="col-sm-5">
                    <input type="numero" class="form-control" id="noproduc" name="noproduc" placeholder="Cantidad">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="hidden"  name="flag" value="nuevo">
                <!--<button type="submit" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-info pull-right">Ingresar</button>
              </div>
              <!-- /.box-footer -->
            </form>
               
          </section>
          
          
          
          <?php
    }}else{
            echo'<h2>Por favor ingrese datos en SKU</h2>';
           // echo "Este es el " . $mensaje;
        }
          
          ?>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

    
  </div>
  <!-- /.content-wrapper -->
    
    
  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019-2020 <a href="http://www.selvinbenito.com">Selvin Benito</a>.</strong> All rights
    reserved.
  </footer>
    

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<?php 

} 
else {


  echo"     
      <script> 

      window.location.replace('index.php?error=1'); 
      </script>";


}


?>



<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
    <!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
