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
                        <select class="form-control" id="id_gerencia" name="id_gerencia" required>
                            @foreach ($gerencias as $gerencia)
                                <option value="{{ $gerencia->id }}">{{ $gerencia->TipoGerencia}}</option>
                            @endforeach
                        </select>
                        <br>
                        <label for="id_cestatikect ">CestaTikect</label>
                        <select class="form-control" id="id_cestatikect" name="id_cestatikect" required>
                            @foreach ($cestatikects as $cestatikect)
                                <option value="{{ $cestatikect->id }}">{{ $cestatikect->montoCk}}</option>
                            @endforeach
                        </select>
                     </div>
                     <button type="submit" class="btn btn-primary btn-lg"  
                     > Guardar </button>
                </div>
        </div>
    </div>
</div>    

