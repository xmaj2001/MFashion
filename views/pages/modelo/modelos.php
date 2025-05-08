<div class="bg-dark text-secondary px-4 py-5 text-center">
  <div class="py-5">
    <h1 class="display-5 fw-bold text-white">Modelos</h1>
    <div class="col-lg-6 mx-auto">
      <p class="fs-5 mb-4">Resgitrados</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center container">
        <a href="/admin/novo/modelo" class="btn btn-outline-info me-sm-2 fw-bold">Novo modelo</a>
      </div>
    </div>

  </div>
</div>
<main class="container">
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="row container">
        <input type="text" class="form-control" id="bucas" placeholder="Buscar modelo" required="">
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <div id="resultado" class="row">

    </div>
  
  </div>
</main>
<script>
 
  $.ajax({
    method: "POST",
    url: "/ajaxmodelos",
    data: {
      valor: ""
    },
    success: function(result) {
      $("#resultado").html(result);
    }
  });

  function ant() {
    $.ajax({
      method: "POST",
      url: "/ajaxmodelos",
      data: {
        page: $("#ant span").html()
      },
      success: function(result) {
        $("#resultado").html(result);
      }
    });
  }

  function prox() {
    $.ajax({
      method: "POST",
      url: "/ajaxmodelos",
      data: {
        page: $("#prox span").html()
      },
      success: function(result) {
        $("#resultado").html(result);
      }
    });
  }

  $("#bucas").keyup(function() {
    var valor = $(this).val();
    $.ajax({
      method: "POST",
      url: "/ajaxmodelos",
      data: {
        valor: valor
      },
      success: function(result) {
        $("#resultado").html(result);
      }
    })
  });
</script>
