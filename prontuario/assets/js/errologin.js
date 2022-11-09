var query = location.search.slice(1);
console.log(query)
var partes = query.split('=');

if (partes[1]=="DadosErrados") {
    alert("Dados incorretos");
}


