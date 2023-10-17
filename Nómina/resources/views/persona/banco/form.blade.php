<div class="modal fade text-left" id="modalCreateBanco" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h4 class="modal-title">{{__('Nuevo Banco') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="form-group"> 
                        <label for="id">Código de Banco</label> 
                        <input type="text" class="form-control" name="id"  id="id" >
                        <br>
                        <label for="NombreBanco">Nombre del Banco</label>
                        <input type="text" class="form-control" name="NombreBanco" id="NombreBanco">
                     </div>
                     <button type="submit" class="btn btn-primary btn-lg"  
                     > Guardar </button>
                </div>
        </div>
    </div>
</div>    

