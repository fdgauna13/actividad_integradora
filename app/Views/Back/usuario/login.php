<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <h2 class="text-center">Iniciar sesión</h2>
            <!--mensaje de error --->
    <?php if (session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
            <?=(session()->getFlashdata('msg'))?>
        </div>
    <?php endif;?>
    <!--Iniciio formulario Login --->
            <form method="post" action="<?php echo base_url('/enviarlogin')?>">
                <div class="form-group">
                    <label for="username">Nombre de usuario</label>
                    <input type="text" name="usuario" class="form-control" id="username" placeholder="Introduce tu nombre de usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="password" placeholder="Introduce tu contraseña">
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary" href="<?php echo base_url('Login');?>">Ingresar</button>
                <button type="reset" class="btn btn-outline-danger" onclick="location.href='<?php echo base_url('/');?>'">Cancelar</button>
                <a type="submit" class="btn btn-outline-info" href="<?php echo base_url('/registro');?>">Registrarse</a>
                <button class="btn btn-outline-secondary btnRecPass" type="submit">Recuperar contraseña</button>
                
            </form>
        </div>
    </div>
</div>