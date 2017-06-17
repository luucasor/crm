<!-- @@CUSTOM -->
<style>
	.collapse {
	  display: none;
	}
	.collapse.in {
	  display: block;
	}
</style>

<!--<input type="text" id="hidden_cas"         name="cas"         value="{$CAS}">
<input type="text" id="hidden_partner"     name="partner"     value="{$FILTER_DASHBOARD['partner']}">
<input type="text" id="hidden_responsible" name="responsible" value="{$FILTER_DASHBOARD['responsible']}">
<input type="text" id="hidden_initialdate" name="initialdate" value="{$FILTER_DASHBOARD['initialdate']}">
<input type="text" id="hidden_finaldate"   name="finaldate"   value="{$FILTER_DASHBOARD['finaldate']}">-->

<div class="collapse" id="collapseExample" style="padding-top:10px;width:800px; height:100%;">
    <table style="margin-left:30px; margin-bottom:30px;">
		<tr>
			<td style="padding-right:10px;">
				<label for="cas" class="control-label"><strong>CAS</strong></label>
				<div id="cas" class="selectContainer">
					<select id="selectcas" class="form-control" name="cas" onchange="getPartner(this.value)">
						{foreach key=$index item=cas from=$CAS_LIST}
							<option value="{$cas['text']}" {if $cas['text'] eq $CAS_SELECTED}selected{/if}>{$cas['text']}</option>
						{/foreach}
					</select>
				</div>
			</td>
			<td style="padding-right:10px;">
				<label for="parceiro" class="control-label"><strong>PARCEIRO</strong></label>
				<div id="parceiro" class="selectContainer">
					<select id="selectparceiro" class="form-control" name="parceiro" onchange="getResponsible(this.value)">
						{if count($PARTNER_LIST) == 0}
							<option value="all" selected>Todos</option>
						{else}
							{foreach key=$index item=partner from=$PARTNER_LIST}
								<option value="{$partner['value']}" {if $partner['value'] eq $PARTNER_SELECTED}selected{/if}>{$partner['text']}</option>
							{/foreach}
						{/if}
					</select>
				</div>
			</td>
			<td style="padding-right:10px;">
				<label for="responsavel" class="control-label"><strong>RESPONSÁVEL</strong></label>
				<div id="responsavel" class="selectContainer">
					<select id="selectresponsavel" class="form-control" name="responsavel">
						{if count($RESPONSIBLE_LIST) == 0}
							<option value="all" selected>Todos</option>
						{else}
							{foreach key=$index item=responsible from=$RESPONSIBLE_LIST}
								<option value="{$responsible['value']}" {if $responsible['text'] eq $RESPONSIBLE_SELECTED}selected{/if}>{$responsible['text']}</option>
							{/foreach}
						{/if}
					</select>
				</div>
			</td>
		</tr>
		<tr>
			<td style="padding-right:10px;">
				<label for="datainicial" class="control-label"><strong>DATA INICIAL</strong></label>
				<input id="datainicial" type="date" name="datainicial" {if $INITIALDATE} value="{$INITIALDATE}"{/if}>
			</td>
			<td style="padding-right:10px;">
				<label for="datafinal" class="control-label"><strong>DATA FINAL</strong></label>
				<input id="datafinal" type="date" name="datafinal" {if $FINALDATE} value="{$FINALDATE}"{/if}>
			</td>
			<td style="position:absolute; left:492px; top:95px;">
				<input id="applyfilter" class="btn btn-primary" type="button" name="aplicar" value="Aplicar filtro">
			</td>
		</tr>
		<tr>
			<td style="padding-right:10px;">
				{if $INITIALDATE == "" && $FINALDATE == ""}
					<input id="accumulated" type="checkbox" name="acumulado" onclick="enableDates(this.checked)" checked>&nbspAcumulado<br>
					<script>
							document.getElementById("datainicial").disabled = true;
							document.getElementById("datafinal").disabled = true;
					</script>
				{else}
					<input id="accumulated" type="checkbox" name="acumulado" onclick="enableDates(this.checked)">&nbspAcumulado<br>
					<script>
							document.getElementById("datainicial").disabled = false;
							document.getElementById("datafinal").disabled = false;
					</script>
				{/if}
			</td>
		</tr>
	</table>
</div>
<script>
	validateCas();
	validatePartner();

	function validateCas(){
		var cas = document.getElementById("selectcas").value;
		if(cas == "all"){
			document.getElementById("selectparceiro").disabled = true;
			$('#selectparceiro option').prop('selected', function() {
				return this.defaultSelected;
			});
			document.getElementById("selectresponsavel").disabled = true;
			$('#selectresponsavel option').prop('selected', function() {
				return this.defaultSelected;
			});
			return false;
		} else {
			document.getElementById("selectparceiro").disabled = false;
			document.getElementById("selectresponsavel").disabled = true;
			return true;
		}
	}

	function validatePartner(){
		var partner = document.getElementById("selectparceiro").value;
		if(partner == "all"){
			document.getElementById("selectresponsavel").disabled = true;
			$('#selectresponsavel option').prop('selected', function() {
				return this.defaultSelected;
			});
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
				'mode': "getPartners"
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
					}
			);
		}
	}

	function getResponsible(value){
		if(validatePartner()){
			var params = {
				'module': app.getModuleName(),
				'action': "FilterWidgetAjax",
				'partner' : value,
				'mode': "getResponsibles"
			};
			AppConnector.request(params).then(
					function (data) {
						var items = data.result['responsibles'];

						$('#selectresponsavel').empty();
						$.each(items, function (i, item) {
							$('#selectresponsavel').append($('<option>', { 
								value: item.value,
								text : item.text 
							}));
						});
					}
			);
		}
	}

	$("#applyfilter" ).click(function() {
		if(checkDates()){
			applyFilter();
		}
	});

	function applyFilter() {
		var cas = document.getElementById("selectcas").value;
		var partner = document.getElementById("selectparceiro").value;
		var responsible = document.getElementById("selectresponsavel").value;
		var initialdate = document.getElementById("datainicial").value;
		var finaldate = document.getElementById("datafinal").value;

		var params = {
			'module': app.getModuleName(),
			'action': "FilterWidgetAjax",
			'cas' : cas,
			'partner' : partner,
			'responsible' : responsible,
			'initialdate' : initialdate,
			'finaldate' : finaldate,
			'mode': "applyFilter"
		};

		AppConnector.request(params).then(
				
				function (data) {
					location.reload(false);
					document.getElementById("datainicial").value = initialdate;
					document.getElementById("datafinal").value = finaldate;
				}
		);
	}

	function checkDates() {
		var initialdate = document.getElementById("datainicial").value;
		var finaldate = document.getElementById("datafinal").value;

		if(initialdate != null && finaldate != null){
			if (initialdate > finaldate) {
				alert("Data inicial não pode ser maior que a data final!!");
				return false;
			}
		}
		return true
	}

	function enableDates(value) {
		if(value) {
			document.getElementById("datainicial").value = "";
			document.getElementById("datafinal").value = "";
			document.getElementById("datainicial").disabled = true;
			document.getElementById("datafinal").disabled = true;
		} else {
			document.getElementById("datainicial").disabled = false;
			document.getElementById("datafinal").disabled = false;
		}
	}
</script>