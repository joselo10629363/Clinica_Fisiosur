 <div class="modal fade" id="creart">
      <div class="modal-dialog">
        <div class="modal-content">
          <div  class="modal-header" style=" background-color: #48C9B0" >
             <h1>Nuevo tipo de tratamiento</h1>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
<form class="form-group"  method="POST" autocomplete="off" action="{{route('tratamiento.store')}}" enctype="multipart/form-data" >
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" placeholder="Nombre" name="nombre" class="form-control">
    </div>
     
    <div class="form-group">
    <label for="">Descripcion del tratamiento</label>
    <input type="text"  required="" placeholder="Tratamiento" name="descripcion" class="form-control">
    </div>
  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
 </form> 
          </div>

          <div class="modal-footer" style="background-color:  #48C9B0">
           
          </div>
        </div>
        
      </div>
    </div>