function init(){
  console.log("Hello");
  $(document).on("click", ".container #go", getData);
};

$(document).ready(init);




function getData(){

  var base = $("#base").val();
  var altezza = $("#altezza").val();
  var larghezza = $("#larghezza").val();

  $.ajax({
    url : "api.php",
    method : "GET",
    data : {
      base : base,
      altezza : altezza,
      larghezza : larghezza
    },
    success : function(data){
      console.log(data);
      console.log("hi");
      $(".results").append(data);
    },
    error : function(data){
      console.log("errore");
    }
  });
};
