<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>
 
    <header class="container-fluid text-center  ">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{asset('img/logo2.png')}}" clas=="logo" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{route('registrar_consola')}}">Registrar Consola</a>
                  <a class="nav-link" href=""{{route('registrar_juegos')}}"">Registrar Juego</a>
                  <a class="nav-link" href=""{{route('ver_consolas')}}"">Ver Consolas</a>
                  <a class="nav-link" href=""{{route('ver_juegos')}}"">Ver Juegos</a>
                </div>
              </div>
            </div>
          </nav>
    </header>

    

      <main class="container-fluid"> 
        <div class="row mt-5">
            <div class="col-12 col-md-8 col-lg-5 mx-auto">
                <div class="card">
                    <div class="card header bg-warning">
                        <span>Agregar Consola</span>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre-txt" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre-txt">
                        </div>
                    
                        <div class="mb-3">
                            <label for="marca-select" class="form-label">Marca</label>
                            <select id="marca-select" class="form-select">
                                <option value="Microsoft">Microsoft</option>
                                <option value="Sony">Sony</option>
                                <option value="Nintendo">Nintendo</option>
                                <option value="Sega">Sega</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="ano-txt">Año Lanzamiento</label>
                            <input type="number" class="form-control" id="ano-txt">
                        </div>
                    </div>

                    <div class="card-footer d-grid gap-1">
                        <button type="button" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <footer>

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>