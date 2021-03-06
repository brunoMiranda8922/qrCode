<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/instascan.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/theme.css" type="text/css"> </head>

<style>
    .man {
        right: 100px;
        width: 20px;
        height: 20px;
    }
</style>

<body>
    
    <script>
        
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        scanner.addListener('scan', function(content) {
            var content = content;
            var lista = content.split(",");
            
            document.querySelector("[name='nome']").value = lista[0];
            document.querySelector("[name='ra']").value = lista[1];
            document.querySelector("[name='curso']").value = lista[2];
            document.querySelector("[name='cpf']").value = lista[3];
            document.querySelector("[name='email']").value = lista[4];
            
            var time = new Date().getTime();
            $(document.body).bind("mousemove keypress", function(e) {
                time = new Date().getTime();
            });

            function refresh() {
                if (new Date().getTime() - time >= 3000)
                    window.location.reload(true);
                else
                    setTimeout(refresh, 3000);
            }

            setTimeout(refresh, 3000);

            console.log(lista);
            window.open(scanner.scanner, "_top");

        });
        Instascan.Camera.getCameras().then(cameras => {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);

            } else {
                console.error("Não existe câmera no dispositivo!");
            }
        });
    </script>
    
    <nav class="navbar navbar-expand-md fixed-top mx-1 p-0 w-100 bg-info navbar-light" style="background-image: url(&quot;iconfatec.PNG&quot;); background-position: center center; background-repeat: no-repeat; background-size: auto;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa fa-fw fa-qrcode fa-5x"></i>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa d-inline fa-lg fa-wrench"></i>&nbsp;Suporte
                            <br> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa d-inline fa-lg fa-envelope-o"></i>&nbsp;Contatos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-5">
        <img width="400" class="d-block rounded-circle img-fluid float-left m-4 p-1" src="img/profe.png"> </div>
    <div class="row">
        <div class="col-md-6 p-3">
            <form action="cadastrar.php" method="POST">        
                <div class="form-group mb-1">
                    <input name="nome" class="form-control" type="text" placeholder="Nome:">
                    <br>
                    <input name="ra" id="ra" class="form-control" type="text" placeholder="RA:">
                    <br>
                    <input name="curso" class="form-control" type="text" placeholder="Curso:">
                    <br>
                    <input name="cpf" class="form-control" type="text" placeholder="CPF:">
                    <br>
                    <input name="email" class="form-control" type="text" placeholder="Email:">
                    <br>
                    <input name="matricula" class="form-control" type="text" placeholder="Situação da Matrícula:">
                    <br>
                    <input class="form-control is-valid" type="text" placeholder="First name" id="validationServer01" required="" value="Acesso Liberado"> </div>
                    
            </form>
        </div>
        <div class="col-md-6 p-2">
            <table class="table table-hover table-striped table-bordered">
                <thead class="thead-inverse">
                    <tr class="bg-light">
                        <th scope="col">Dia</th>
                        <th scope="col">Horário Entrada</th>
                        <th scope="col">Horário Saída</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-info">
                        <th scope="row">15</th>
                        <td>
                            <center>08:29</center>
                        </td>
                        <td>
                            <center>11:45</center>
                        </td>
                    </tr>
                    <tr class="bg-info">
                        <th scope="row">16</th>
                        <td>
                            <center>08:00</center>
                        </td>
                        <td>
                            <center>10:35</center>
                        </td>
                    </tr>
                    <tr class="bg-info">
                        <th scope="row">17</th>
                        <td>
                            <center>09:50</center>
                        </td>
                        <td>
                            <center>11:20</center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <video id="preview" class="man"></video>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>