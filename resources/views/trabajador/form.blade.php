<div class="mb-3">
    <label class="small mb-1" for="currentPassword">Partida presupuestaria</label>
    <input class="form-control" id="nombre" name="part_presu" type="part_presu" value="{{ isset($servicio->part_presu)?$servicio->part_presu:''}}" placeholder="Partida presupuestaria" />
    <label class="small mb-1" for="currentPassword">Grupo ocupacional</label>
    <input class="form-control" id="nombre" name="grupo_ocupacional" type="grupo_ocupacional" value="{{ isset($servicio->grupo_ocupacional)?$servicio->grupo_ocupacional:''}}" placeholder="Grupo ocupacional" />
    <label class="small mb-1" for="currentPassword">Grado</label>
    <input class="form-control" id="nombre" name="grado" type="grado" value="{{ isset($servicio->grado)?$servicio->grado:''}}" placeholder="Grado" />
    <label class="small mb-1" for="currentPassword">Remunaracion</label>
    <input class="form-control" id="number" name="remuneracion" type="remuneracion" value="{{ isset($servicio->remuneracion)?$servicio->remuneracion:''}}" placeholder="Remunaracion" />
</div>
<!-- Form Group (new password)-->

<button class="btn btn-success" type="submit" ">Guardar</button>