<section>

    <div class="col-md-6 mx-auto">
        <h2> Cadastro de cliente</h2>
        <!-- ==== FORMULÁRIO ====-->

        <form id="formCliente">

            <!-- Nome -->
            <div class="mb-3">
                <label for="nome"> Nome </label>
                <input type="text" id="nome" name="nome" class="form-control">

            </div>

            <!-- CPF -->
            <div class="mb-3">
                <label for="cpf"> CPF </label>
                <input type="number" id="cpf" name="cpf" class="form-control">

            </div>

            <!-- e-mail -->
            <div class="mb-3">
                <label for="email"> e-mail </label>
                <input type="text" id="email" name="email" class="form-control">

            </div>

            <!-- Telefone -->
            <div class="mb-3">
                <label for="telefone"> Telefone </label>
                <input type="number" id="telefone" name="telefone" class="form-control">

            </div>

            <button type="submit" class="btn btn-primary w-100"> Cadastrar</button>







        </form>
        <!-- MENSAGEM DE RETORNO -->
        <div id="mensagem" class="alert d-none mt-3"> </div>

    </div>

    <script src="assets/js/cliente.js"></script>

</section>