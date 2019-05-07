$(document).ready(init);

function getData() {

  $.ajax({
    url : "fulldb.php",
    method : "GET" ,
    success : function(apiData, stato) {

      if (stato == "success") {

        var parse = JSON.parse(apiData);
        var container = $(".list");
        var source = $("#list-pending").html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < parse.length; i++) {
          var pagamento = parse[i];
          var fullHTML = template(pagamento);
              container.append(fullHTML);
        }
      }
    },
    error : function(richiesta, stato, errori) {
      alert("Errori di connessione " + errori);
    }
  });

}

function init() {
  getData();
}
