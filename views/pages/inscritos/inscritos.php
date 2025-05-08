<div class="bg-dark text-secondary px-4 py-5 text-center">
  <div class="py-5">
    <h1 class="display-5 fw-bold text-white">INSCRITOS</h1>
    <div class="col-lg-6 mx-auto">
      <p class="fs-5 mb-4">Total: <?php echo $total ?></p>
    </div>

  </div>
</div>
<main class="container">
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="row container">
      <input type="text" class="form-control" id="bucas" placeholder="Buscar inscrito" required="">
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
    url: "/admin/inscritos",
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
      url: "/admin/inscritos",
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
      url: "/admin/inscritos",
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
      url: "/admin/inscritos",
      data: {
        valor: valor
      },
      success: function(result) {
        $("#resultado").html(result);
      }
    })
  });
</script>
