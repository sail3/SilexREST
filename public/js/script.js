$(document).ready(function () {
  $(".list-group-item").click(function () {
    $("#left-menu > a").removeClass("active");
    $(this).addClass("active");
  });
  $("td > button").click(function () {
    $.ajax({
      url : "contactos/" + $(this).attr("id"),
      method : "DELETE",
    }).done(function (msg) {
      location.reload();
    });
  });
});
