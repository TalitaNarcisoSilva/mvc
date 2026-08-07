<!-- css da página -->
<link rel="stylesheet" href="assets/css/funcionario.css">
<section>

    <div class="col-md-6 mx-auto mt-5">
        <h2> Cadastro de funcionario</h2>
        <!-- ==== FORMULÁRIO ====-->

        <form id="formFuncionario">

            <!-- Nome -->
            <div class="mb-3">
                <label for="nome"> Nome </label>

                <div class="input-group">
                    <span class="input-group-text"> <i class="bi bi-card-text"></i></span>
                    <input type="text" id="nome" name="nome" class="form-control">

                    <div class="invalid-feedback"></div>
                    <div class="valid-feedback"></div>


                </div>

            </div>

            <!-- CNPJ -->
            <div class="mb-3">
                <label for="cnpj"> CNPJ </label>

                <div class="input-group">
                    <span class="input-group-text"> <i class="bi bi-card-text"></i></span>
                    <input type="number" id="cnpj" name="cnpj" class="form-control">

                    <div class="invalid-feedback"></div>
                    <div class="valid-feedback"></div>


                </div>


            </div>

            <!-- RF -->
            <div class="mb-3">
                <label for="rf"> Registro funcional </label>

                <div class="input-group">
                    <span class="input-group-text"> <i class="bi bi-card-text"></i></span>
                    <input type="text" id="rf" name="rf" class="form-control">

                    <div class="invalid-feedback"></div>
                    <div class="valid-feedback"></div>



                </div>


            </div>

            <!-- PIS -->
            <div class="mb-3">
                <label for="pis"> PIS </label>

                <div class="input-group">
                    <span class="input-group-text"> <i class="bi bi-card-text"></i></span>
                    <input type="number" id="pis" name="pis" class="form-control">

                    <div class="invalid-feedback"></div>
                    <div class="valid-feedback"></div>


                </div>


            </div>

            <button type="submit" class="btn btn-primary w-100"> Cadastrar</button>







        </form>
        <!-- MENSAGEM DE RETORNO -->
        <div id="mensagem" class="alert d-none mt-3"> </div>

    </div>

    <script src="assets/js/funcionario.js"></script>

</section>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- jQuery Validation -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

<!-- jQuery Mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!-- script da página -->
<script src="assets/js/produto.js"></script>