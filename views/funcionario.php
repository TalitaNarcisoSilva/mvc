<section>

    <div class="col-md-6 mx-auto">
        <h2> Cadastro de funcionario</h2>
        <!-- ==== FORMULÁRIO ====-->

        <form id="formFuncionario">

            <!-- Nome -->
            <div class="mb-3">
                <label for="nome"> Nome </label>
                <input type="text" id="nome" name="nome" class="form-control">

            </div>

            <!-- CNPJ -->
            <div class="mb-3">
                <label for="cnpj"> CPF </label>
                <input type="number" id="cnpj" name="cnpj" class="form-control">

            </div>

            <!-- RF -->
            <div class="mb-3">
                <label for="rf"> e-mail </label>
                <input type="text" id="rf" name="rf" class="form-control">

            </div>

            <!-- PIS -->
            <div class="mb-3">
                <label for="pis"> Telefone </label>
                <input type="number" id="pis" name="pis" class="form-control">

            </div>

            <button type="submit" class="btn btn-primary w-100"> Cadastrar</button>







        </form>
        <!-- MENSAGEM DE RETORNO -->
        <div id="mensagem" class="alert d-none mt-3"> </div>

    </div>

    <script src="assets/js/funcionario.js"></script>

</section>