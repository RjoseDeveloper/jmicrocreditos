var objParcelas = {
    12 : {
        juros : 1.60,
        coeficiente : 0.09748
    },
    18 : {
        juros : 1.66,
        coeficiente : 0.06869
    },
    24 : {
        juros : 1.64,
        coeficiente : 0.05397
    },
    36 : {
        juros : 1.62,
        coeficiente : 0.03931
    },
    48 : {
        juros : 1.70,
        coeficiente : 0.03270
    },
    60 : {
        juros : 1.79,
        coeficiente : 0.02916
    }
};

var moneyToFloat = function (valor) {
    if(valor === "") {
        valor =  0;
    } else {
        valor = valor.replace(".","");
        valor = valor.replace(",",".");
        valor = parseFloat(valor);
    }
    return valor;
};

var floatToMoney = function (valor) {
    var text = (value < 1 ? "0" : "") + Math.floor(value * 100);
    //text = "R$ " + text;
    return text.substr(0, text.length - 2) + "," + text.substr(-2);
};

var camposValidos = function () {

    if($("#nome").val().length < 3){
        alert("O campo nome deve ser corretamente preenchido!");
        $("#nome").focus();
        return false;
    }

    if($("#telefone").val().length < 9){
        alert("O campo telefone deve ser corretamente preenchido!");
        $("#telefone").focus();
        return false;
    }

    var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if(!re.test($("#email").val())){
        alert("O campo email deve ser corretamente preenchido!");
        $("#email").focus();
        return false;
    }

    if ($("#parcelas").val() == '') {
        alert("Por gentileza selecione a quantidade de parcelas!");
        $("#parcelas").focus();
        return false
    }

    return true;

};

//$("#telefone").mask("(99) 9999-9999?");

var htmlOptions;
for (parcela in objParcelas) {
    htmlOptions = '<option value="' + parcela + '">' + parcela + ' Meses' + '</option>';
    $("#parcelas").append(htmlOptions);
}

$("#btn-calcular").click(function(){

    var valorEntrada = parseFloat(valorVeiculo) * 0.3; // 30% DO VALOR DO VEICULO;
    var tac = 800; // VALOR FIXO DE R$ 800,00
    if (camposValidos()) {

        var qtdParcelas = parseInt($("#parcelas").val());
        var valorVeiculo = parseFloat(moneyToFloat($("#valor-veiculo").val()));

        var taxaJuros = parseFloat(objParcelas[qtdParcelas].juros);
        var valorFinanciado = valorVeiculo - valorEntrada + tac;
        var valorParcela = valorFinanciado * objParcelas[qtdParcelas].coeficiente;
        var valorTotalDoBem = valorParcela * qtdParcelas + valorEntrada;

        $("#valor-entrada").val(valorEntrada.toFixed(2).replace('.', ','));
        $("#valor-parcela").val(valorParcela.toFixed(2).replace('.', ','));
        $("#taxa-juros").val(taxaJuros.toString().replace('.', ',') + '%');
        $("#valor-financiado").val(valorFinanciado.toFixed(2).replace('.', ','));
        $("#valor-total").val(valorTotalDoBem.toFixed(2).replace('.', ','));

    }

});
