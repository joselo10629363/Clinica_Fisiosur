 <div class="modal fade" id="crear">
      <div class="modal-dialog">
        <div class="modal-content">
          <div  class="modal-header" style=" background-color: #48C9B0" >
             <h1>Registro Medico</h1>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
        <form class="form-group"  method="POST" autocomplete="off" action="{{route('medicos.store')}}" enctype="multipart/form-data" >
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" placeholder="Nombre" name="nombre" class="form-control">
    </div>
     
    <div class="form-group">
    <label for="">Apellido</label>
    <input type="text"  required="" placeholder="Apellido" name="apellido" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Matricula profesional</label>
    <input type="text"  required="" placeholder="Matricula" name="matricula" class="form-control">
    </div>

  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
 </form> 
          </div>

          <div class="modal-footer" style="background-color:  #48C9B0">
           
          </div>
        </div>
        
      </div>
    </div>