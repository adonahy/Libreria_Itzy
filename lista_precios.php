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
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
        Lista de precios
        <small>Productos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">ventas</a></li>
        <li class="active">Lista de precios</li>
      </ol>
    </section>
     
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SKU</th>
                  <th>Producto</th>
                  <th>Marca</th>
                  <th>Precios</th>
                  <th>Tamaño</th>
                  <th>Existencia</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    $querydata  =   "SELECT * FROM inventario";
                    $queryd     =   mysqli_query($con, $querydata);
                    while($resultd    =   mysqli_fetch_array($queryd)){
                        
                        $sku    = $resultd['sku'];
                        $produc = $resultd['nombre'];
                        $marca  = $resultd['marca'];
                        $precio = $resultd['precio_venta'];
                        $tam    = $resultd['tama'];
                        $stock  = $resultd['stock'];
                    $queryt =  "SELECT nombre FROM marcas WHERE id_marca = $marca ";
                        $queryta=   mysqli_query($con, $queryt);
                        $resultta=  mysqli_fetch_array($queryta);
                        
                        $marca  =   $resultta['nombre'];
                        
                    $querym =  "SELECT tama FROM tama WHERE id_tama = $tam ";
                        $queryma=   mysqli_query($con, $querym);
                        $resultma=  mysqli_fetch_array($queryma);
                        
                        $tam  =   $resultma['tama'];
                     ?>
                    
                    <tr>
                  <td><?php echo $sku; ?></td>
                  <td><?php echo $produc; ?></td>
                  <td><?php echo $marca; ?></td>
                  <td><?php echo $precio; ?></td>
                  <td><?php echo $tam; ?></td>
                  <td><?php echo $stock; ?></td>
                </tr>
                        
                <?php        
                    }
    
                                
                    
                    ?>
                
                
                </tbody>
                <!--<tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
            
             </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    
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
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
    
 <?php 

} 
else {


  echo"     
      <script> 

      window.location.replace('index.php?error=1'); 
      </script>";


}


?>   
    
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
