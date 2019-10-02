

    
    <div class="modal fade" id="crear">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
             <h1>Nuevo Rol</h1>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
            
           {!! Form::open(['route'=>'rol.store'])!!}
              @include('rol.fragment.form')
              {!! Form::close()!!}
       
          </div>

          <div class="modal-footer">
           
          </div>
        </div>
        
      </div>
    </div>