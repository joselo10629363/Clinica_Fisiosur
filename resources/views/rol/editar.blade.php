
    <div class="modal fade" id="editar">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
             <h3>Editar Rol</h3>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
            
            <form class="form-group"  method="POST" action="" enctype="multipart/form-data">
            @csrf

  <div class="form-group">
    <label for="">Nombre rol</label>
  
   <input  type="text"  required=""  value="{{$role['nombre']}}" name="nombre" class="form-control">
    </div>
   
  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
 </form>
            
       
          </div>

          <div class="modal-footer">
           
          </div>
        </div>
        
      </div>
    </div>
