<div class="bs-component">
              <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="admin.php">GroenteBoer</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="form.php">registreer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="toonbestellingen.php">Mijn bestellingen</a>
                  </li>
                  </ul>
                  <div class="inlog form m-4">
                  <form class="form-inline my-2 my-lg-0" action="login.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="email" value="" placeholder="email...">
                    <input class="form-control mr-sm-2" type="password" name="wachtwoord" value="" placeholder="wachtwoord...">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">login</button>
                  </form>
                </div>
                <div class="Search">
                  <form class="form-inline my-2 my-lg-0" action="admin.php">
                    <input name="naamfilter" class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
            </div>
