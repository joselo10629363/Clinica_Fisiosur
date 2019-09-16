 <div class="modal fade" id="crear">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
             <h1>Nueva Afiliacion</h1>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
        <form class="form-group"  method="POST" action="{{route('paciente.store')}}" enctype="multipart/form-data" >
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" placeholder="Nombre" name="nombre" class="form-control">
    </div>
     <div class="form-group">
    <label for="">Apellido Paterno</label>
    <input  type="text"required="" placeholder="Apellido" name="apellido1" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Apellido Materno</label>
    <input  type="text"required="" placeholder="Apellido" name="apellido2" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Cedula</label>
    <input  type="text"  required="" placeholder="C.I." name="cedula" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Telefono</label>
    <input  type="text"  required="" placeholder="Telefono" name="telefono" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Domicilio</label>
    <input  type="text"  required="" placeholder="Domicilio" name="domicilio" class="form-control">
    </div>

<div class="form-group">
    <label for="">Genero</label>
    <input type="radio" name="genero" value="F">Femenino

<input type="radio" name="genero" value="M">Masculino
    </div>

    <div class="form-group">
    <label for="">Afiliacion</label>
    <input type="text"  required="" placeholder="Afiliacion" name="afiliacion_id" class="form-control">
    </div>
    <div class="form-group">
    <label for="">Descripcion Causa</label>
    <textarea rows="3" cols="50" name="descripcion"></textarea>
    </div>
  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
 </form> 
          </div>

          <div class="modal-footer">
           
          </div>
        </div>
        
      </div>
    </div>


