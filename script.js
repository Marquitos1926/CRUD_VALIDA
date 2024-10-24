document.querySelector('form').addEventListener('submit', function(event){
    //Seleciona os campos do formulario

    var nome = document.getElementById('nome').value;
    var telefone = document.getElementById('telefone').value        
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value

    //verifica os campos que estão preenchidos
    if ( email === '' || senha === '' || nome ==='' || telefone ===''){
        alert('Por favor, preencha todos os campos.');
        event.preventDefault();
    } else {
        Form.reset();
    }

});