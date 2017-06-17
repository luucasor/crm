countRow();
var i = 1;

function add(){
    var divContent = $("#veiculos_table");
    var newRow = $("<tr>");
    var cols = "";

    cols += "<td><input type='text' style='width: 100px;' name='vehicles[" + i + "][type]' value='" + $('#tipo').val() + "' readonly='true'/></td>";
    cols += "<td name='modelo'><input type='text' style='width: 200px;' name='vehicles[" + i + "][model]' value='" + $('#modelo').val() + "' readonly='true'/></td>";
    cols += "<td name='placa' ><input type='text' style='width: 100px;' name='vehicles[" + i + "][car_plate]' value='" + $('#placa').val() + "' readonly='true'/></td>";
    cols += "<td name='ano' ><input type='text' style='width: 100px;' name='vehicles[" + i + "][year]' value='" + $('#ano').val() + "' readonly='true'/></td>";
    cols += "<td style='width: 10px;'>";
    cols += "<i class='icon-remove-sign' title='' onclick='RemoveTableRow(this);'></i>";
    cols += "</td>";

    newRow.append(cols);
    i++;
    $("#veiculos-table").append(newRow).appendTo(divContent);

    clearFields();

    return false;
}

function countRow() {
    var tamanho = $("#veiculos-table tbody tr").length;
    $('#nreg').html(tamanho + " Veículo(s)");
}

function RemoveTableRow(handler) {
    var tr = $(handler).closest('tr');

    tr.fadeOut(400, function () {
        tr.remove();
        countRow();
    });

    return false;
}

function clearFields() {
    $('#tipo').val("");
    $('#modelo').val("");
    $('#placa').val("");
    $('#ano').val("");
    countRow();
}
