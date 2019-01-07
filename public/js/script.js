var itensArr = [];
function adicionar(e){
  
    e.preventDefault();

    var itemTexto = document.getElementById("item");

    var itenstabela = document.getElementById("itenstabela");
    itenstabela.insertRow(0).insertCell(0).innerHTML = itemTexto.value;

    itensArr.push(itemTexto.value);

    itemTexto.value = "";
    itemTexto.focus();
}

function limpar(){
    itensArr.splice(0,itensArr.length);
    var novoElemento = document.createElement("tbody");
    novoElemento.setAttribute("id","itenstabela");
    var itensTabela = document.getElementById("itenstabela");
    var itensBody = document.getElementById("itenstabela");
    itensTabela.parentNode.replaceChild(novoElemento,itensBody);
}

function organizar(){
    $.ajax({
        url: "organizar",
        type: "post",
        data: {itens: itensArr},
        success: function(data){
            
            var novoElemento = document.createElement("tbody");
            novoElemento.setAttribute("id","itenstabelaorganizada");
            var itensTabela = document.getElementById("itenstabelaorganizada");
            var itensBody = document.getElementById("itenstabelaorganizada");
            itensTabela.parentNode.replaceChild(novoElemento,itensBody);

            data.forEach(element => {
                var itenstabela = document.getElementById("itenstabelaorganizada");
                itenstabela.insertRow(0).insertCell(0).innerHTML = element;
            });


        }
    })
}

var formadc = document.getElementById("formadc");
formadc.addEventListener("submit",function(e){
    adicionar(e);
});

