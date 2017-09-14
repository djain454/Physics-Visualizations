<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="style_R.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="script_R.js"></script>
</head>

<body id="bso" data-spy="scroll" data-target="#sidebar-nav" data-offset="40">

  <header>

    <nav id="nav" class="navbar navbar-light bg-light nav-pills nav-justified justify-content-end fixed-top">
      <div class="container-fluid p-0">
        <a class="navbar-brand" href="#">Imperial Visualisations</a>
        <div class="navbar-links">
          <a class="nav-item nav-link dropdown-toggle" href="#" id="navbarDeptDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Department
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDeptDropdown">
            <a class="dropdown-item" href="#">Physics</a>
            <a class="dropdown-item" href="#">Maths</a>
            <a class="dropdown-item" href="#">Chemistry</a>
          </div>
          <div class="navbar-divider"></div>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item nav-link" href="#">Help</a>
        </div>
      </div>
    </nav>

  </header>


  <div id="content" class="container-fluid">

<!--
    <div id="intro" class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Physics</h1>
      </div>
    </div>
-->

    <div class="row">

      <div class="col-2 sidebar">
        <nav id="sidebar-nav" class="nav nav-pills flex-column">
          <form class="form">
            <input class="form-control form-control-sm" type="text" placeholder="Search..." aria-label="Search">
          </form>
          <a href="#maths" class="nav-link active">Maths</a>
          <a href="#mechanics" class="nav-link">Mechanics/V&amp;W</a>
          <a href="#em" class="nav-link">Electromagnetism</a>
        </nav>
      </div>

      <div class="col-10 ml-auto">

        <?php
        $mathsVisualisations = array(
          array(
            "title" => "Visualisation 1",
            "imgSrc" => "boundary.png",
            "openLinks" => array(
              "web" => "#",
              "ipynb" => "#"
            ),
            "downloadLinks" => array(
              "ipynb" => "#"
            )
          ),
          array(
            "title" => "Visualisation 2",
            "imgSrc" => "boundary.png",
            "openLinks" => array(
              "web" => "#",
              "ipynb" => "#"
            ),
            "downloadLinks" => array(
              "ipynb" => "#",
              "py" => "#"
            )
          ),
          array(
            "title" => "Visualisation 3",
            "imgSrc" => "boundary.png",
            "openLinks" => array(
              "web" => "#",
              "ipynb" => "#"
            ),
            "downloadLinks" => array(
              "ipynb" => "#",
              "py" => "#"
            )
          )
        );
        ?>


        <div id="maths" class="vis-category container">
          <h2>Maths</h2>
          <div class="card-deck">

          <?php foreach ($mathsVisualisations as $key => $vis): ?>
            <div class="card">
              <img class="card-img-top" src="boundary.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?php echo $vis["title"]; ?></h4>
                <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                <p class="card-text"><small class="text-muted">Last updated 5 days ago</small></p>
              </div>
              <div class="card-footer">
                <div class="btn-group btn-block">
                  <a href="<?php echo $vis["openLinks"]["web"]; ?>" class="btn btn-primary btn-block">
                    Open
                  </a>
                  <a href="#" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="<?php echo $vis["openLinks"]["web"]; ?>">
                      Web visualisation
                    </a>
                    <a class="dropdown-item" href="<?php echo $vis["openLinks"]["ipynb"]; ?>">
                      Python notebook
                    </a>
                  </div>
                </div>
                <div class="btn-group btn-block">
                  <a href="<?php echo $vis["downloadLinks"]["ipynb"]; ?>" class="btn btn-outline-primary btn-block">
                    Download
                  </a>
                  <a href="#" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="<?php echo $vis["downloadLinks"]["ipynb"]; ?>">
                      Python notebook (.ipynb)
                    </a>
                    <?php if (array_key_exists("py", $vis["downloadLinks"])): ?>
                    <a class="dropdown-item" href="<?php echo $vis["downloadLinks"]["py"]; ?>">
                      Python (.py)
                    </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

          </div>
        </div>

        <div id="mechanics" class="vis-category container">
          <h2>Mechanics and Vibrations &amp; Waves</h2>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="boundary.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Lorem ipsum</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 5 days ago</small></p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary btn-block">View Web Visualisation</a>
                <a href="#" class="btn btn-outline-primary btn-block">View Python Notebook</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="boundary.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Dolor sit amet</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 5 days ago</small></p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary btn-block">View Web Visualisation</a>
                <a href="#" class="btn btn-outline-primary btn-block">View Python Notebook</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="boundary.png" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Gregor Samsa awoke</h4></h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 5 days ago</small></p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary btn-block">View Web Visualisation</a>
                <a href="#" class="btn btn-outline-primary btn-block">View Python Notebook</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  <footer class="footer">

    <div class="container-fluid">
      <span class="text-muted">&copy; 2017 Imperial College London</span>
    </div>

  </footer>

</body>
</html>
