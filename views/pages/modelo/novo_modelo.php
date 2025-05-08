<div class="bg-dark text-secondary px-4 py-5 text-center">
  <div class="py-5">
    <h1 class="display-5 fw-bold text-white">Novo</h1>
    <div class="col-lg-6 mx-auto">
      <p class="fs-5 mb-4">Modelo</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center container">
        <!-- <button type="button" class="btn btn-outline-info me-sm-2 fw-bold">Inscrever</button> -->
        <a href="/admin/modelos"  class="btn btn-outline-light ">Consultar</a>
      </div>
    </div>
  </div>
</div>
<main class="container">
  <div class="my-3 p-5 bg-body rounded shadow-sm">
  <form class="needs-validation" method="POST">
            <div class="row g-2">
                <div class="col-sm-12">
                    <input type="text" name="nome" class="form-control" value="" placeholder="Nome" required>
                </div>
                <div class="col-sm-12">
                    <select class="form-select" name="genero" required>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="altura" class="form-control" value="" placeholder="Altura" required>
                </div>
                <div class="col-sm-4">
                    <input type="number" name="busto" class="form-control" value="" placeholder="Busto" required>
                </div>
                <div class="col-sm-4">
                    <input type="number" name="cintura" class="form-control" value="" placeholder="Cintura" required>
                </div>
                <div class="col-sm-4">
                    <input type="number" name="ancas" class="form-control" value="" placeholder="Ancas" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="calcado" class="form-control" value="" placeholder="Calçado" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="cabelo" class="form-control" value="" placeholder="Cabelo" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="olho" class="form-control" value="" placeholder="Olho" required>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="rede1" class="form-control" placeholder="Link Twitter" maxlength="250">
                </div>
                <div class="col-sm-4">
                    <input type="text" name="rede2" class="form-control" placeholder="Link Facebook" maxlength="250">
                </div>
                <div class="col-sm-4">
                    <input type="text" name="rede3" class="form-control" placeholder="Link Instagram" maxlength="250">
                </div>
                <button class="btn btn-outline-dark mt-3" type="submit" name="btn_add">Salvar</button>
            </div>
        </form>
    </div>
</main>