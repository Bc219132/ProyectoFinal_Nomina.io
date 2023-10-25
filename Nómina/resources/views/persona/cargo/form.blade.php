<div class="modal fade text-left" id="modalCreateCargo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h4 class="modal-title">{{__('Nuevo Cargo') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="form-group"> 
                        <label for="TipoCargo">Tipo de Cargo</label> 
                        <input type="text" class="form-control" name="TipoCargo"  id="TipoCargo" >
                        <br>
                        <label for="Sueldo">Sueldo Mensual $</label>
                        <input type="text" class="form-control" name="Sueldo" id="Sueldo">
                        <br>
                        <label for="id_gerencia">Gerencia a pertenecer</label>
                        <input type="text" class="form-control" name="id_gerencia" id="id_gerencia">
                        <br>
                        <label for="id_cestatikect ">CestaTikect</label>
                        <input type="text" class="form-control" name="id_cestatikect" id="id_cestatikect">
                     </div>
                     <button type="submit" class="btn btn-primary btn-lg"  
                     > Guardar </button>
                </div>
        </div>
    </div>
</div>    

