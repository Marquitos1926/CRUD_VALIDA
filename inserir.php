
<?php
//Conexão dcom o bamco de dados MySLQ
$servername = "localhost"; // Endereço do servidor
$username = "root";        // Usuario do banco de dados
$password = "";            // Senha do banco de dados 
$dbname = "dados_pessoas"; // Nome do banco de dados

// 
$conn = new mysqli($servername, $username, $password, $dbname);

//verifica a conexão
if ($conn-> connect_error) {
    die("Falha na conexão". $conn->connect_error);
}


//Obtem os valores enviados pelo formulario
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// prepara a instrução SQL para inserir os dados
$sql = "INSERT INTO usuarios (nome, telefone, email, senha) VALUES ('$nome', '$telefone', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    // Exibe a pagina de sucesso
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro realizado com sucesso</title>
        <style>
            /*Estilo para o corpo da pagina*/
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #003366;
                color: white;
                font-family: Arial, sans-serif;
            }
            /* Estilo para o botão de voltar */
            button {
                background-color: white;
                color: #003366;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 20px;
            }

            /*Efeito hover no botão*/
            button:hover {
                background-color: #003366;
                color: white
            }

        </style>
        
    </head>
    <body>
        <div>
            <h2> Cadastro realizado com secesso!!!</h2>
            <button onclick="window.location.href='index.html'" >Voltar ao Cadastro</button>
        </div>
    </body>
    </html>


    <?php
    
} else {
    echo "Erro ao inserir os dados" . $conn->error;
}
