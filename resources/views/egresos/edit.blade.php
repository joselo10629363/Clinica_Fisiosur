 
        <div class="modal fade" id="editar{{$concepto->id}}">
      <div class="modal-dialog">
        <div class="modal-content" >
          <div class="modal-header" style="background-color:#3D8B7D">
             <h1>Editar concepto de egreso</h1>
  <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
        <form class="form-group"  method="POST" action="{{route('concepto.update', $concepto->id)}}" enctype="multipart/form-data" >
          @method('PUT')
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" placeholder="Nombre" name="nombre" value="{{$concepto->nombre}}" class="form-control">
    </div>
     
           
      <button type="button" class="btn btn-danger pull-right" class="close" data-dismiss="modal">Cancelar</button>      
 
  <button type="subtmit" class=" btn btn-primary pull-right" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
  
  
 </form> 
          </div>

          <div class="modal-footer" style="background-color:#73C6B6"  >
           
          </div>
        </div>
        
      </div>
    </div>