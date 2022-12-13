<form class="form" action="" method="POST" >
    <h3 class="tercerTitulo">¿Quieres ver algo ya? Escribe tu dirección de correo para crear una suscripción a Netflix o reactivarla.</h3>
    @csrf
    <div class="row">
        <div class="col-md-12 input-group justify-content-center">
            <label class="form-group labelInput">dirección de correo</label>
            <input class="form-group input-form" type="text">
            <button class="btn button-form" type="submit" name="registrar">Empezar ></button>
        </div>
    </div>
</form>