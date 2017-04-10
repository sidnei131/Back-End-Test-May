<!DOCTYPE html>
<html>

     <?php include __DIR__ . '/../partial/head.php' ?>

    <body>

        <?php include __DIR__ . '/../partial/menu.php' ?>

        <video class="hidden-sm hidden-xs" style="position: fixed; top: 0; left: 0; z-index: -1;" poster="https://www.mktvirtual.com.br/wp-content/themes/mkt-virtual-2015/assets/video/carreira2017.jpg" preload="auto" muted="" width="100%" height="auto" id="aboutvideo" loop="" autoplay=""> <source src="https://www.mktvirtual.com.br/wp-content/themes/mkt-virtual-2015/assets/video/carreira2017.mp4" type="video/mp4"> <source src="https://www.mktvirtual.com.br/wp-content/themes/mkt-virtual-2015/assets/video/carreira2017.webm" type="video/webm"> <source src="https://www.mktvirtual.com.br/wp-content/themes/mkt-virtual-2015/assets/video/carreira2017.ogg" type="video/ogg"> </video>

        <div class="wrapper" style="opacity: 0.9">
            <div class="col-md-4 col-md-offset-8 box" style="margin-top: 120px">
                <form method="post" action="/login">
                    <div class="logo"></div>
                    <div class="form-group">
                        <input class="form-control" type="username" name="username" placeholder="Nome de usuário" value="<?= @$_POST['username'] ?>" required="required" autofocus/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Senha" required="required" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-md-offset-8 box text-center">
                <span>Ainda não é cadastrado? <a href="/#cadastre-se" class="forgot">Cadastre-se</a></span>
            </div>
        </div>

        <?php include __DIR__ . '/../partial/scripts.php' ?>

    </body>
</html>