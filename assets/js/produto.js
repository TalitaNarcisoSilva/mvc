// Selecionar o formulario e a div de mensagens
const form = document.getElementById("formProduto");
const mensagem = document.getElementById("mensagem");

// Executa quando o formulário é enviado
form.addEventListener("submit", async function (evento){

    // Impede o recarregamento da página
    evento.preventDefault();

    // Capturar dados do formulário
    const dados= new FormData(form);

// mostra no CONSOLE (F12) os dados do form em tabela
   // console.table(Object.fromEntries(dados.entries()));
   // return;
   //console.log("simples")


   //EXIBE UMA MENSAGEM ENQUANTO OS DADOS SÃO ENVIADOS
   mensagem.className = "alert alert-info mt-3";
   mensagem.textContent = "enviando dados...";


   try{
    
    //Envia os dados para o controller
    const respostas = await fetch ("controllers/ProdutoController.php", {
        method:"post",
        body: dados
    });

   } catch (erro){

   }
})