<?php
          
          
                    include_once('db_connect.php');
                   
                    $query = $pdo->query("SELECT * FROM etat");
                    $etats= $query->fetchAll(); 
                    $query = $pdo->query("SELECT * FROM ref_session");
                    $ref_sessionS= $query->fetchAll();        
?>




<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
 <!-- Bootstrap row and col -->
  <div class="container-fluid">
    <div class="row ">
      <!-- Side bar left -->
              <div class="col-3 bg-primary border  mw-100" style="height: 800px;">
                    <img src="../public/img/logo.png" class="img-fluid rounded-circle" alt="">
                    <h5><small class="text-uppercase text-nowrap text-white ">Gestion des Tickets</small></h5>
                    <ul class="nav flex-column">
                      <li class="nav-item">

                        <a class="nav-link active text-white" href="#"><i class="fa fa-calendar mr-2"></i></i><span
                            class="text-secondary"></span>Session</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#"> <i class="fa fa-user mr-2"></i></i>Utilisateur</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#"> <i class="fa fa-graduation-cap mr-2"></i>Référentiel</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  text-white" href="#"> <i class="fa fa-graduation-cap mr-2"></i>Apprenant</a>
                      </li>
                    </ul>
              </div>

               <!-- Fin Side bar left -->
              <!-- container -->

               <div class="col ">
                     <!-- HEADER -->
                  <div class="row">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                        <a class="navbar-brand" href="#"></a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                    
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item active">
                                                        <a class="nav-link text-hiden" href="#"><i class="fa fa-plus-circle mr-2"></i>Inscrire </a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link text-hid
                                                        " href="#"> <i class="fa fa-graduation-cap mr-2 "></i>Nos apprenants</a>
                                                        </li>
                                                    
                                                    </ul>
                                                    <ul class="navbar-nav ml-auto">
                                                        <li class="nav-item">
                                                            <a class="nav-link text-hiden" href="#"> 
                                                              <i class="fa fa-user mr-2"></i></i>Admin</a>
                                                        </li>
                                                       
                                                    </ul>
                                        </div>
                                    </nav>  
                  </div>

                    <!-- FIN HEADER -->
                  <!-- Formulaire -->
                  <h2 class="text-center">INSCRIRE UN APPRENNANT</h2>
                  <form action="../controllers/insert_app.php" method="POST">

                      <div class="row">

                                      <div class="col-6">
                                          <div class="form-group row">
                                              <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                                              <div class="col-sm-9">
                                              <input type="text" class="form-control" id="id" name="nom" placeholder="nom">
                                            </div>
                                          </div>  
                                      </div>    
                                  
                                <div class="col-6">
                                        <div class="form-group row">
                                                <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nom" name="prenom" placeholder="prenom">
                                              </div>
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                    <div class="form-group row">
                                            <label for="date_nais" class="col-sm-2 col-form-label">Date de Naissance</label>
                                            <div class="col-sm-9">
                                            <input type="date" class="form-control" id="date_nais" name="date_nais" placeholder="Date de naissance ">
                                            </div>
                                   </div>
                            </div>
                            <div class="col-6"> 
                                    <div class="form-group row">
                                            <label for="lieu_nais" class="col-sm-2 col-form-label">Lieu de naissance</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="lieu_nais" name="lieu_nais" placeholder="Lieu de naissance">
                                            </div>
                                    </div>
                             </div>
    
                   </div>


                   <div class="row">

                      <div class="col-6">
                            <div class="form-group row">
                                    <label for="tel" class="col-sm-2 col-form-label text-dark text-wrap">Téléphone</label>
                                            <div class="col-sm-9">
                                            <input type="integer" class="form-control" id="telephone" name="telephone" placeholder="telephone">
                                            </div>
                               </div>
        
                         </div>   
        
                            <div class="col-6">
                                    <div class="form-group row">
                                            <label for="adresse" class="col-sm-2 col-form-label text-wrap">Adresse</label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                                            </div>
                                        </div>
                              </div>
                      </div>

                      <div class="row">
                          <div class="col-6">
                                  <div class="form-group row">
                                          <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                          </div>
                                   </div>  
                          </div>
                          <div class="col-6">
                                  <div class="form-group row">
                                          <label for="ref" class="col-sm-2 col-form-label">Referentiel ET Session</label>
                                          <div class="col-sm-9">
                          
                                          <select style="width: 300px" name="ref_session" id="ref_session">
                                              <option value=""> </option>
                                              <?php 
                                                foreach ($ref_sessionS as $key => $ref_session) {  
                                              ?>
                                            <option value="<?php echo $ref_session['ID_RS'];?>"><?php echo $ref_session['nom'];?></option> 
                                            <?php
                                              }
                                            ?>
                                          </select>
                                          </div>
                                      </div>
                      
                          </div>
                      </div>
                      <div class="row">
                          
                
                        <div class="col-6">
                                <div class="form-group row">
                                        <label for="ref" class="col-sm-2 col-form-label">Etat</label>
                                        <div class="col-sm-9">
                        
                                        <select style="width: 300px" name="etat" id="etat">
                                            <option value=""> </option> 
                                            <?php 
                                              foreach ($etats as $key => $etat) {  
                                            ?>
                                            <option value="<?php echo $etat['id_etat'];?>"><?php echo $etat['Nom'];?></option> 
                                            <?php
                                            }
                                            ?> 
                                        </select>
                                        </div>
                                </div>
                        </div>
                    </div>
                      
                        <!--FIN Formulaire -->
                       <!--Buton -->
                   <div class="row">
                      <div class="col-3"> 
                          
                      </div>

                          <div class="col-3">
          
                                      <div class="col-sm-6 text-hide">
                                      <button type="button" class="btn btn-primary btn-block bg-secondary" style="width: 150px;">Annuler</button>
                                      </div>
                          </div>
          
                      <div class="col-3"> 
                                  <div class="col-sm-6 text-hide">
                                  <button type="button" class="btn btn-danger btn-block" style="width: 150px; ">Valider</button>
                                  </div>
                      </div>
          
                          <div class="col-3"> </div>
        </div>
              
                  </form>
                    <!--FIN Formulaire -->
                </div>
                <!-- FIN container -->

  </div>
  </div>

  <style type="text/css">
    .bg-primary,.text-primary,.btn-primary {
      background-color: #0F878A !important;
      ;
    }

    .bg-light {
      width: 200%;
    }
    .table {
      margin-top: 10%;
      width: auto;
    }
    .btn-primary   {
      background: #0F878A !important;
      
    }
    .btn-danger   {
      background: #0F878A !important ;
      
    }
    .text-center {
      margin-top: 50px;
      margin-bottom: 50px;
      color:  #0F878A !important;
    }
    
    .text-hiden{
      color:  #0F878A !important;
    }
    .text-hid{
      color: #EC7E07 !important;
    }


    .bg-secondary,.text-secondary,.btn-secondary {
      background-color: #EC7E07 !important;
     
    }
    
    
  </style>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>