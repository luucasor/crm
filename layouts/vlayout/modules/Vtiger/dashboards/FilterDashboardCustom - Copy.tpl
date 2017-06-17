<style>
	.collapse {
	  display: none;
	}
	.collapse.in {
	  display: block;
	}
</style>
<div class="collapse" id="collapseExample" style="width:800px; height:100%;">
    <table style="margin-left:30px; margin-bottom:30px;">
		<tr>
			<td style="padding-right:10px;">
				<label for="cas" class="control-label"><strong>CAS</strong></label>
				<div id="cas" class="selectContainer">
					<select id="selectcas" class="form-control" name="cas" onchange="getPartner(this.value)">
						<option value="all">Todos</option>
						<option value="angola">ANGOLA</option>
						<option value="corporativo">CORPORATIVO</option>
						<option value="dimep">DIMEP</option>
						<option value="madis">MADIS</option>
						<option value="varejo">VAREJO</option>
					</select>
				</div>
			</td>
			<td style="padding-right:10px;">
				<label for="parceiro" class="control-label"><strong>PARCEIRO</strong></label>
				<div id="parceiro" class="selectContainer">
					<select id="selectparceiro" class="form-control" name="parceiro" onchange="getResponsible(this.value)">
						<option value="all">Todos</option>
					</select>
				</div>
			</td>
			<td style="padding-right:10px;">
				<label for="responsavel" class="control-label"><strong>RESPONSÁVEL</strong></label>
				<div id="responsavel" class="selectContainer">
					<select id="selectresponsavel" class="form-control" name="responsavel">
						<option value="all">Todos</option>
					</select>
				</div>
			</td>
		</tr>
		<tr>
			<td style="padding-right:10px;">
				<label for="datainicial" class="control-label"><strong>DATA INICIAL</strong></label>
				<input id="datainicial" type="date" name="datainicial">
			</td>
			<td style="padding-right:10px;">
				<label for="datafinal" class="control-label"><strong>DATA FINAL</strong></label>
				<input id="datafinal" type="date" name="datafinal">
			</td>
			<td style="position:absolute; left:492px; top:85px;">
				<input class="btn btn-default" type="button" name="aplicar" value="Aplicar">
			</td>
		</tr>
	</table>
</div>
<script>
	validateCas();

	function validateCas(){
		var cas = document.getElementById("selectcas").value;
		if(cas == "all"){
			document.getElementById("selectparceiro").disabled = true;
			document.getElementById("selectresponsavel").disabled = true;
			return false;
		} else {
			document.getElementById("selectparceiro").disabled = false;
			document.getElementById("selectresponsavel").disabled = false;
			return true;
		}
	}

	function validatePartner(){
		var partner = document.getElementById("selectparceiro").value;
		if(partner == "all"){
			document.getElementById("selectresponsavel").disabled = true;
			return false;
		} else {
			document.getElementById("selectresponsavel").disabled = false;
			return true;
		}
	}

	function getPartner(value){
		
		if(validateCas()){
			var params = {
				'module': app.getModuleName(),
				'action': "FilterWidgetAjax",
				'cas' : value,
				'mode': "process"
			};
			AppConnector.request(params).then(
					function (data) {
						var items = data.result['partners'];

						$('#selectparceiro').empty();
						$.each(items, function (i, item) {
							$('#selectparceiro').append($('<option>', { 
								value: item.value,
								text : item.text 
							}));
						});


						if(data.result['Save'] == "OK"){
							alert("OK");
						} else {
							alert("Erro: "+data.result['code_detail']);
						}
						//location.reload();
					}
			);
		}
	}

	function getResponsible(){
		validateCas();
		validatePartner();
	}
</script>

