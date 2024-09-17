<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@vite(['resources/js/app.js', 'resources/css/app.css'])

<header class="bg-dark text-white mb-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{route('categoria.index')}}" class="text-white text-decoration-none">
                <h1 class="mb-4 mt-4 text-center fs-3">Categorias</h1>
            </a>
            <a href="#" class="btn btn-primary fw-bold" id="btnAgregar">Crear categoría</a>
        </div>
    </div>
</header>

<!-- Formulario categoría -->
<div class="container mb-4" >
    <div class="card d-none" id="formAgregar">
        <div class="card-body">
            <h5 class="card-title mb-3">Agregar categoría</h5>
            <form method="POST" action="{{route('categoria.store')}}">
                @csrf
                @method('post')
                <div class="form-group mb-3">
                    <label for="nombre" class="form-label">Nombre de la categoría</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Deportes, Historia, etc.">
                </div>
                <div class="form-group mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3" required placeholder="Esta categoría es sobre ..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
                <button type="button" id="btnCancelar" class="btn btn-secondary">Cancelar</button>
              </form>
        </div>
    </div>
</div>

<div class="container">
    @if ($categorias->isEmpty())
    <p>No hay categorías</p>
@else
    <div class="row">
        @foreach ($categorias as $categoria)
            <div class="col-md-3 mr-2 ml-2">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold"> {{$categoria->nombre}} </h5>
                        <p> {{$categoria->descripcion}} </p>
                    </div>
                    <div class="card-footer row m-0">
                        <div class="col-6">
                            <form method="POST" action="{{ route('categoria.delete', ['id' => $categoria->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn text-danger fw-bold w-100">Eliminar</button>
                            </form>
                        </div>
                        <div class="col-6">
                          <a href="#" class="btn text-primary fw-bold w-100">Editar</a>
                        </div>
                      </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
</div>