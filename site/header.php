        <header class="row">
            <div class="page-header">
              <h1>CVSAE<small> Club de voile de Saint Aubin</small></h1>
            </div>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Accueil<span class="sr-only"></span></a></li>
                      
                    <li><a href="#">Actualité</a></li>
                      <ul class="dropdown-menu">
                        <li><a href="#">Présentation</a></li>
                        <li><a href="#">Activité</a></li>
                        <li><a href="#">Equipe</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    <li><a href="#">Naviguer</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                 
                  <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                       <button type="submit" class="btn btn-default">Submit</button>
                    
                      <button type="submit" class="btn btn-default connexion">connexion</button>
                      <button type="submit" class="btn btn-default formulaire-btn">s'inscrire</button>
                    </form>
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          <!--  <img src="css/img/voile.jpg" class="col-lg-12 header"> -->
            
           <form method="Post" action="traitement.php" class="formulaire">
            <label for="nom"> Nom</label>
                <input type="text" id="nom" name="nom" value="nom">
                <input type="text" id="prenom" name="prenom" value="prenom">
                <input type="submit" id="bouton" name="bouton" value="ok"> <br/>
                
            </form>
        </header>
