  
<?php
$ruta =getcwd()."/cmemorias/";
echo getcwd();
$titulo="Galeria";
$subtit="";
$active="memorias";


   // abrir un directorio y listarlo recursivo 
 $carpetas=array();


   if (is_dir($ruta)) { 
      if ($dh = opendir($ruta)) { 
         $x = 0;
         while (($file = readdir($dh)) !== false) { 
            //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
            //mostraría tanto archivos como directorios 
            //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 
               //solo si el archivo es un directorio, distinto que "." y ".." 
               $direcc = "$file"; 
               //echo $direcc;
               array_push($carpetas,$direcc);
               //listar_directorios_ruta($ruta . $file . "/"); 
               $x++; 

            } 
         } 
      closedir($dh); 
      } 
   }else 
      echo "<br>No es ruta valida"; 

      //var_dump($carpetas);


function imagenes($dir)
{
 $archivos=array();

   $directorio = opendir("cmemorias/".$dir); //ruta actual
   while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
   {
       if (is_dir($archivo))//verificamos si es o no un directorio
       {
           //echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
       }
       else
       {
           //echo $archivo . "<br />";
            array_push($archivos,$archivo);
       }
   }

    return $archivos;
}
?>








<?php
include 'head.php';
?>



<body>

   <!-- Container -->
   <div id="container">
      
        <?php
        include 'hidden_header.php';
         include 'banner.php';



        ?>






      
      
        <!-- Start Content -->
      <div id="content">
         <div class="container">
            <div class="row portfolio-page">
                
                  <!-- Start Portfolio Filter -->
                  <div class="portfolio-filter col-md-12">
                     <ul>
                            <li><a href="#" class="selected" data-filter="*">Galeria</a></li>
                            <?php  

                            foreach ($carpetas as $carpeta) {
                             echo  '<li><a href="#" data-filter=".'.$carpeta.'">'.$carpeta.'</a></li>';
                            }
                            ?>

                    </div>
                    <!-- End Portfolio Filter -->
                    
                    <!-- Start Portfolio Items -->
                  <div id="portfolio" class="portfolio-4">


                    <?php  

                            foreach ($carpetas as $carpeta2) {
                              $imgs = imagenes($carpeta2);

                              foreach ($imgs as $imagen) {
                                 $ruta = "/cta/cmemorias/".$carpeta2."/".$imagen;

                          ?>

                      
                        <!-- Start Portfolio Item -->
                        <div class="portfolio-item <?php echo $carpeta2; ?> col-md-3">
                           <div class="portfolio-border">
                                <!-- Start Portfolio Item Thumb -->
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="This is an image title" href="<?php echo $ruta; ?>">
                                        <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                        <img alt="" src="<?php echo $ruta; ?>" />
                                    </a>
                                </div>
                                <!-- End Portfolio Item Thumb -->
                                <!-- Start Portfolio Item Details -->
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4><?php echo $carpeta2; ?></h4>
                                        <span>Logo</span>
                                        <span>Animation</span>
                                    </a>
                                </div>
                                <!-- End Portfolio Item Details -->
                            </div>
                     </div>
                        <!-- End Portfolio Item -->

                        <?php  
                           }
                          }
                        
                    ?>

                    </div>
                    <!-- End Portfolio Items -->
                
            </div>
         </div>
      </div>
      <!-- End Content -->
      
      

            <?php
            include 'footer.php'

            ?>

      
    </div>
    <!-- End Container -->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="icon-up-open-1"></i></a>
    
    <div id="loader">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
    </div>
  
</body>
</html>
