 <?php  
 $connect = mysqli_connect("localhost", "root", "", "got");  
 $query ="SELECT * FROM gameofthrones ORDER BY ID DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <?php include('head.php') ?>
      </head>  

      <body>  
        <br>  
           <div class="container">  

<h3>GAME OF THRONES - PERSONAGENS</h3>
              <br>

                <div class="table-responsive">  
                     <table id="got" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>ID</td>
                                    <td>Personagem</td>  
                                    <td>Estado</td>  
                                    <td>Ator</td>  
                                    <td>Tempo em Tela</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["personagem"].'</td>  
                                    <td>'.$row["estado"].'</td>  
                                    <td>'.$row["ator"].'</td>  
                                    <td>'.$row["tempo"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
