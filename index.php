<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

<form>
	<div class="form-group">
		<label>Pais</label>
		<select name="country" id="country" class="form-control">

		</select>
	</div>

	<div class="form-group">
		<label>Tipo de Documento</label>
		<select name="tipo" id="tipo" class="form-control"></select>
	</div>

	<div class="form-group">
		<label>Documento</label>
		<input type="text" name="doc" id="doc" class="form-control">
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
			var documentTypeMask = {
			            "ARG":
			            {
			            		"label" : "Argentina",
			                    "cuil":
			                    {
			                            "type":"cuil",
			                            "mask":"NN-NNNNNNNN-N",
			                            "label":"CUIL",
			                    },
			            },
			            "USA":
			            {
			            		"label" : "Estados Unidos",
			                    "ssn":
			                    {
			                            "type":"ssn",
			                            "mask":"NNN-NN-NNNN",
			                            "label":"SSN",
			                            "default": "999-99-9999",
			                    },
			            },
		                "BRA":
		                {
		                		"label" : "Brasil",
		                        "CPF":
		                        {
		                                "type":"CPF",
		                                "mask":"NNN.NNN.NNN-NN",
		                                "label":"CPF",
		                        },
		                },
		                "CHL":
		                {
		                		"label" : "Chile",
		                        "RUN":
		                        {
		                                "type":"RUN",
		                                "mask":"NN.NNN.NNN-Z",
		                                "label":"RUN",
		                        },
		                },
		                "COL":
		                {
		                		"label" : "Colombia",
		                        "CitizenshipCard":
		                        {
		                                "type":"CitizenshipCard",
		                                "mask":"N.NNN.NNN.NNN",
		                                "label":"Cedula Identidad",
		                        },
		                        "CitizenshipCard 1":
		                        {
		                                "type":"CitizenshipCard 1",
		                                "mask":"NN.NNN.NNN",
		                                "label":"Cedula Extrangería",
		                        },
		                        "CitizenshipCard 2":
		                        {
		                                "type":"CitizenshipCard 2",
		                                "mask":"NNN.NNN",
		                                "label":"Tarjeta de Identidad",
		                        },
		                },
		                "ESP":
		                {
		                		"label" : "España",
		                        "DNI":
		                        {
		                                "type":"DNI",
		                                "mask":"NNNNNNNNA",
		                                "label":"DNI",
		                        },
		                        "NIE":
		                        {
		                                "type":"NIE",
		                                "mask":"ANNNNNNNA",
		                                "label":"NIE",
		                        },
		                },
		                "GBR":
		                {
		                		"label" : "Inglaterra",
		                        "NINO":
		                        {
		                                "type":"NINO",
		                                "mask":"AA NN NN NN A",
		                                "label":"NINO",
		                        },
		                },
		                "IND":
		                {
		                		"label" : "India",
		                        "PAN":
		                        {
		                                "type":"PAN",
		                                "mask":"AAAAANNNNA",
		                                "label":"PAN",
		                        },
		                },
		                "LUX":
		                {
		                		"label" : "Luxenburgo",
		                        "TI":
		                        {
		                                "type":"TI",
		                                "mask":"NNNNNNNNNNNNN",
		                                "label":"TI",
		                        },
		                        "NIF":
		                        {
		                                "type":"NIF",
		                                "mask":"NNNNNNNNNNNNN",
		                                "label":"NIF",
		                        },
		                },
		                "MEX":
		                {
		                		"label" : "Mexico",
		                        "PR":
		                        {
		                                "type":"PR",
		                                "mask":"AAAAYYMMDDAAAAAAXN",
		                                "label":"CURP",
		                        },
		                },
		                "PER":
		                {
		                		"label" : "Peru",
		                        "DNI ID":
		                        {
		                                "type":"DNI ID",
		                                "mask":"NNNNNNNN",
		                                "label":"DNI ID",
		                        },
		                },
		                "URY":
		                {
		                		"label" : "Uruguay",
		                        "CI":
		                        {
		                                "type":"CI",
		                                "mask":"N.NNN.NNN-N",
		                                "label":"CI",
		                        },
		                },
			    };

			var country = $("#country");
			country.html("");
			country.append(new Option("", ""));
			$.each(documentTypeMask, function(key, value){
				country.append(new Option(documentTypeMask[key].label, key));
			});

			$("#country").change(function(){
				$("#doc").attr("placeholder", "");
				$("#doc").val("");
				var code = documentTypeMask[$("#country").val()];
				var option = $("#tipo");
				option.html("");
				$.each(code, function(key, value){
					option.append(new Option(code[key].label, key));
				});

			});

			$("#tipo").change(function(){
				var countryCode = $("#country").val();
				var docType = $("#tipo").val();
				var doc = documentTypeMask[countryCode][docType];
				$("#doc").attr("placeholder", doc.mask);
				$("#doc").val(doc.default);
			});
    	});
    </script>
  </body>
</html>
