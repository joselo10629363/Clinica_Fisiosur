<div class="modal fade" id="modal-delete-{{$egreso->id}}">
	<form action="{{ route('egreso.destroy', $egreso->id) }}" method="POST">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="modal-dialog">
			<div class="modal-content">
				 <div class="modal-header" style="background-color:#3D8B7D">
             <h3>Anular egreso</h3>
  <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
				</div>
				<div class="modal-body">
					<p>
						Confirme si desea anular el registro seleccionado  <strong></strong>
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