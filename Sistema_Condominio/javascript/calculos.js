  $("tbody tr").each(function(){
    var cemig = $(this).find('#cemig').html();
    var copasa = $(this).find('#copasa').html();
    var limpeza = $(this).find('#limpeza').html();
    var tarifa_bancaria = $(this).find('#tarifaBancaria').html();
    var outros = $(this).find('#outros').html();
    var divide = $(this).find('#divide').html();
  
    console.log("Linha: "+ cemig +" "+ copasa +" "+ limpeza +" "+ tarifa_bancaria +" "+ outros);
    var resultadoCondominio = parseFloat(cemig)  +  parseFloat(copasa) + parseFloat(limpeza);
    var resultadoDispesas =  parseFloat(tarifa_bancaria) + parseFloat(outros);

    $(this).find('#result-condominio').html(resultadoCondominio.toFixed(2));
    $(this).find('#result-despesas').html(resultadoDispesas.toFixed(2));
  });



