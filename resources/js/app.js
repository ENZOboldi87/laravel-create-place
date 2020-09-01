require('./bootstrap');

var $ = require('jquery');
var Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax({
    url: 'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'GET',
    success: function (dataResponse) {
      print(dataResponse);

    },
    error: function () {
      alert ('Ops qualcosa e andato storto');

    }
  })

});

// funzione che compila l'handlebar e stampa i risultati
function print(data) {
  var source = $("#students-template").html();
  var template = Handlebars.compile(source);


  // genero contenuto per l handlebars
  vinyls.forEach(function(item) {
    var context = {
      nome: item.nome,
      cognome: item.cognome,
      voto: item.voto,
      descrizione_alunno: item.descrizione_alunno,
      };


    var html = template(context);
    $("#contenuto").append(html);
  });
};
