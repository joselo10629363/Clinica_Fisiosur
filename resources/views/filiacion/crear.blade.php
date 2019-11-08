 <div class="modal fade" id="crear">
      <div class="modal-dialog">
        <div class="modal-content" >
          <div class="modal-header" style="background-color:#73C6B6">
             <h1>Nueva Afiliación</h1>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
        <form class="form-group"  method="POST" autocomplete="off" action="{{route('filiacion.store')}}" enctype="multipart/form-data" >
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" placeholder="Nombre" name="nombre" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Descripcion</label>
    <input type="text"  required="" placeholder="Descripcion" name="descripcion" class="form-control">
    </div>

    <div class="form-group">
                    <label for="">Estado del Afiliado</label>  
                <select  name="estado" class="form-control">
                      <option value="Activo">Activo  </option>
                      <option value="Inactivo">Desactivado</option>
                     
                    </select> 
                  </div>

  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
 </form> 
          </div>

          <div class="modal-footer" style="background-color:#73C6B6"  >
           
          </div>
        </div>
        
      </div>
    </div>