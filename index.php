<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Calculador de Hipotaca </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body role="document">

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Calculador de Hipoteca</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://localhost/c_disponible/">Casas disponibles</a></li>
                <li class="active"><a href="http://localhost/calculador_mo/">Calculador</a></li>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Calculador de Hipotecas</h1>

        <p>Calcule su hipoteca y reciba la cotización de inmediato en su correo.</p>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal">

                <div class="form-group">
                    <label for="inputValorCasaLabel" class="col-sm-2 control-label">Valor de la casa</label>

                    <div class="col-sm-10">

                        <select class="form-control calc" id="inputValorCasa">
                            <option value="698500">Casa un nivel tipo 1</option>
                            <option value="757500">Casa un nivel tipo 2 </option>
                            <option value="847500">Casa un nivel tipo 3 básica</option>
                            <option value="947500">Casa un nivel tipo 3 completa</option>
                            <option value="1127500">Casa dos niveles tipo A básica</option>
                            <option value="1230500">Casa dos niveles tipo A intermedia</option>
                            <option value="1295500">Casa dos niveles tipo A completa</option>
                            <option value="918500">Casa dos niveles tipo B básica</option>
                            <option value="937500">Casa dos niveles tipo B ampliada </option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEngancheLabel" class="col-sm-2 control-label">Enganche</label>

                    <div class="col-sm-10">
                        <input type="number" class="form-control calc" id="inputEnganche" placeholder="Q."
                               value="69500">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPlazoLabel" class="col-sm-2 control-label">Plazo del préstamo</label>

                    <div class="col-sm-10">
                        <select class="form-control calc" id="inputPlazo">
                            <option value="1">1 Año</option>
                            <option value="2">2 Años</option>
                            <option value="3">3 Años</option>
                            <option value="4">4 Años</option>
                            <option value="5">5 Años</option>
                            <option value="6">6 Año</option>
                            <option value="7">7 Años</option>
                            <option value="8">8 Años</option>
                            <option value="9">9 Años</option>
                            <option value="10" selected="selected">10 Años</option>
                            <option value="11">11 Años</option>
                            <option value="12">12 Año</option>
                            <option value="13">13 Años</option>
                            <option value="14">14 Años</option>
                            <option value="15">15 Años</option>
                            <option value="16">16 Años</option>
                            <option value="17">17 Años</option>
                            <option value="18">18 Años</option>
                            <option value="19">19 Año</option>
                            <option value="20">20 Años</option>
                            <option value="21">21 Años</option>
                            <option value="22">22 Años</option>
                            <option value="23">23 Años</option>
                            <option value="24">24 Años</option>
                            <option value="25">25 Años</option>
                            <option value="26">26 Años</option>
                            <option value="27">27 Años</option>
                            <option value="28">28 Años</option>
                            <option value="29">29 Años</option>
                            <option value="30">30 Años</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" value="7.00" id="tasaDeInteres" name="tasaDeInteres">
                <input type="hidden" value="25" id="inputPlazo25a" name="inputPlazo25a">
                <input type="hidden" value="20" id="inputPlazo20a" name="inputPlazo20a">
                <input type="hidden" value="15" id="inputPlazo15a" name="inputPlazo15a">
                <input type="hidden" value="10" id="inputPlazo10a" name="inputPlazo10a">
                <input type="hidden" value="5" id="inputPlazo5a" name="inputPlazo5a">

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default" id="calcularCoutaBtn">Calcular</button>
                    </div>
                </div>

                <a class="btn btn-success" id="pdfGeneratorBtn" href="#">pdf</a>


            </form>


        </div>
    </div>

    <div class="row">
        <div class="alert alert-success">
            <p id="cuotaAPagar"></p>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cuotas mensuales</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <td>25 Años</td>
                            <td id="table25aValue"></td>
                        </tr>
                        <tr>
                            <td>20 Años</td>
                            <td id="table20aValue"></td>
                        </tr>
                        <tr>
                            <td>15 Años</td>
                            <td id="table15aValue"></td>
                        </tr>
                        <tr>
                            <td>10 Años</td>
                            <td id="table10aValue"></td>
                        </tr>
                        <tr>
                            <td>5 Años</td>
                            <td id="table5aValue"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


    </div>


</div>
<!-- /container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>

    $(document).ready(function () {
        //Inicializar las variable del formulario
        var valorCasa;
        var enganche;
        var plazo;
        var totalAFinanciar;
        //calcular plazos fijos
        CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo25a', 'table25aValue');
        CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo20a', 'table20aValue');
        CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo15a', 'table15aValue');
        CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo10a', 'table10aValue');
        CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo5a', 'table5aValue');

        //Calcular distintos precios de casa y distintos enganches
        $("#inputValorCasa").change(function(){

            //calcular 10% de valor y mostrarlo en enganche
            enganche10PdeValor = $("#inputValorCasa").val() * 0.10;

            $("#inputEnganche").val(enganche10PdeValor);
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo25a', 'table25aValue');
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo20a', 'table20aValue');
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo15a', 'table15aValue');
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo10a', 'table10aValue');
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo5a', 'table5aValue');
        });
        $("#inputEnganche").change(function(){
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo25a', 'table25aValue');
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo20a', 'table20aValue');
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo15a', 'table15aValue');
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo10a', 'table10aValue');
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo5a', 'table5aValue');
        });


        function PMT(i, n, p) {
            return i * p * Math.pow((1 + i), n) / (1 - Math.pow((1 + i), n));
        }

        function CalculatePMTFromForm(idLoanAmount, idAnnualInterestRate, idMonths, idResult) {
            var i = jQuery('#' + idAnnualInterestRate).val() / 1200;
            var n = jQuery('#' + idMonths).val() * 12;
            valorCasa = parseInt($("#inputValorCasa").val());
            enganche = parseInt($("#inputEnganche").val());
            //Total despues del enganche
            totalAFinanciar = valorCasa - enganche;
            var p = totalAFinanciar;
            var pmt = PMT(i, n, -p);

            var display = Math.abs(Math.round(pmt.toFixed(2)));
            var displayFormatMoney = display.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');

            jQuery('#' + idResult).html('Q.' + displayFormatMoney);
        }

        function performCalc() {
            CalculatePMTFromForm('LoanAmount', 'tasaDeInteres', 'inputPlazo', 'cuotaAPagar');
        }


        //redirect pasamos valores del formulario para mostrar en PDF
        $("#pdfGeneratorBtn").click(function () {
            valorCasa = $("#inputValorCasa").val();
            enganche = $("#inputEnganche").val();
            plazo = $("#inputPlazo").val();

			
			
			if (valorCasa == 698500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=1";
			}
			if (valorCasa == 757500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=2";
			}
			if (valorCasa == 847500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=3";
			}
			if (valorCasa == 947500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=4";
			}
			if (valorCasa == 1127500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=5";
			}
			if (valorCasa == 1230500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=7";
			}
			if (valorCasa == 1295500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=6";
			}
			if (valorCasa == 918500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=8";
			}
			if (valorCasa == 937500){
					window.location = "choacorral.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo + "&id=9";
			}
            //window.location = "pdfOutput.php?ValorDeCasa=" + valorCasa + "&enganche=" + enganche + "&plazoDelPrestamo=" + plazo;
			
        });
        $('.calc').change(performCalc);

        //calcular cuota de pagos
        $("#calcularCoutaBtn").click(function () {
            performCalc();


            //Total despues del enganche
            totalAFinanciar = valorCasa - enganche;
            //console.log(typeof totalAFinanciar + totalAFinanciar);


        });


    });

</script>

</body>
</html>