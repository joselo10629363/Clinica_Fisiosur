
          
             
             
            
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
            
           {!! Form::model($rols, ['route'=>['rol.update', $rols->id], 'method'=>'PUT'])!!}
              @include('usuario.fragment.form')
              {!! Form::close()!!}
            
       
          </div>

          <div class="modal-footer">
           
          </div>
        </div>
        
      </div>
    </div>