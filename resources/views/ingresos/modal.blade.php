<div class="modal fade" id="modal-cambia-{{$ingreso->id}}">
	<form class="form-group"  method="POST" action="{{route('ingreso.update', $ingreso->id)}}" enctype="multipart/form-data" >
          @method('PUT')
            @csrf
		<div class="modal-dialog">
			<div class="modal-content">
				 <div class="modal-header" style="background-color:#3D8B7D">
             <h3>Anular el saldo</h3>
  <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
				</div>
				<div class="modal-body">
					<p>
						Confirme si desea quitar el saldo restante  de pago del paciente    <strong></strong>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">
						Cancelar
					</button>
					<button type="submit" class="btn btn-primary">Cofirmar</button>
				</div>
			</div>
		</div>
	</form>
</div>