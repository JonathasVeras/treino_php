function mensagem() {
    alert("Ei, não clique em mim, curioso!");
}


function mudarcor()
{
    var elemento = document.getElementById("mensagem");
    return elemento.style.color = "#DE3163";
}

function check_form(string) 
{
    var nome = document.getElementById('nome_form');
    if (nome.value == "") 
    {
        alert('Nada foi preenchido no nome!!!');
        return False;
    }
    alert('Nome: '+nome.value);
    return true;
}
function send_form()
{
    var nome = document.getElementById("nome_form");
    if(check_form(nome))
    {
        alert('O formulário foi enviado')
        return 1;
    }
    alert('O formulário não foi enviado')
    return 0;
}