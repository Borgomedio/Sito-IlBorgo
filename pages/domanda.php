<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="pragma" content="no-cache" />
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>   
    <script src="/js/changeQuestion.js"id="myjs"></script>
</head>
<body onload="domanda()">
    <div class="jumbotron jumbotron-fluid" style="background-color:powderblue;">
        <div class="container" >
            <div class="p-3 mb-2 bg-info text-white">
                <div class="text-center">
                    <h1 class="display-6">Comunità Capi 2020</h1>
                    <p class="lead">Attività relazione Capo-Ragazzo</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <div class="jumbotron" id="bloccoColore" style="background-color:rgb(255, 255, 158)">
            <h1 class="display-4" id="titoloBlocco">Verde Giallo o Rosso?</h1>
                <div id="campoTesto"> <!-- Contenuto sostituito da DB--> </div>
            <hr class="my-4">
            <p>Meditare bene ...</p>
            <a class="btn btn-primary btn-lg" href="#" role="button" id="question" onclick="domanda()">Vai alla prossima</a>
        </div>
    </div>
</body>
<footer class="footer">
        <div class="container-fluid" >
            <div class="text-center">
                <p class="text-muted">&copy; Borgomedio Company 2020</p>
            </div>
        </div>
</footer>
</html>

