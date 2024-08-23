<?php
// Verifica se o formulário foi enviado e qual etapa está sendo processada
$step = isset($_POST['step']) ? intval($_POST['step']) : 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($step == 1) {
        // Processa a primeira etapa
        $nome = htmlspecialchars($_POST['nome']);
        $data_nascimento = htmlspecialchars($_POST['data_nascimento']);
        $sexo = htmlspecialchars($_POST['sexo']);
        $estado_civil = htmlspecialchars($_POST['estado_civil']);
        $nacionalidade = htmlspecialchars($_POST['nacionalidade']);
        $rg = htmlspecialchars($_POST['rg']);
        $cpf = htmlspecialchars($_POST['cpf']);
        
        // Armazena os dados da primeira etapa na sessão
        session_start();
        $_SESSION['step1'] = [
            'nome' => $nome,
            'data_nascimento' => $data_nascimento,
            'sexo' => $sexo,
            'estado_civil' => $estado_civil,
            'nacionalidade' => $nacionalidade,
            'rg' => $rg,
            'cpf' => $cpf
        ];
        
        // Avança para a etapa 2
        $step = 2;
    } elseif ($step == 2) {
        // Processa a segunda etapa
        session_start();
        $step1_data = isset($_SESSION['step1']) ? $_SESSION['step1'] : [];

        $logradouro = htmlspecialchars($_POST['logradouro']);
        $numero = htmlspecialchars($_POST['numero']);
        $complemento = htmlspecialchars($_POST['complemento']);
        $bairro = htmlspecialchars($_POST['bairro']);
        $cidade = htmlspecialchars($_POST['cidade']);
        $estado = htmlspecialchars($_POST['estado']);
        $cep = htmlspecialchars($_POST['cep']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $email = htmlspecialchars($_POST['email']);
        
        echo "
        <!DOCTYPE html>
        <html lang='pt-BR'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Confirmação de Inscrição</title>
            <style>
                body {
                    background-color: #000;
                    color: #fff;
                    font-family: Arial, sans-serif;
                    text-align: center;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    height: 100vh;
                }
                .confirmation {
                    background-color: #222;
                    border: 2px solid #444;
                    border-radius: 8px;
                    padding: 20px;
                    width: 80%;
                    max-width: 600px;
                    margin: 20px;
                }
                h1, h2 {
                    color: #fff;
                    margin: 0;
                }
            </style>
        </head>
        <body>
            <div class='confirmation'>
                <h1>Inscrição Confirmada!</h1>
                <h2>Dados Pessoais</h2>
                <p><strong>Nome Completo:</strong> {$step1_data['nome']}</p>
                <p><strong>Data de Nascimento:</strong> {$step1_data['data_nascimento']}</p>
                <p><strong>Sexo:</strong> {$step1_data['sexo']}</p>
                <p><strong>Estado Civil:</strong> {$step1_data['estado_civil']}</p>
                <p><strong>Nacionalidade:</strong> {$step1_data['nacionalidade']}</p>
                <p><strong>RG:</strong> {$step1_data['rg']}</p>
                <p><strong>CPF:</strong> {$step1_data['cpf']}</p>
                <h2>Endereço Completo</h2>
                <p><strong>Logradouro:</strong> $logradouro</p>
                <p><strong>Número:</strong> $numero</p>
                <p><strong>Complemento:</strong> $complemento</p>
                <p><strong>Bairro:</strong> $bairro</p>
                <p><strong>Cidade:</strong> $cidade</p>
                <p><strong>Estado:</strong> $estado</p>
                <p><strong>CEP:</strong> $cep</p>
                <p><strong>Telefone de Contato:</strong> $telefone</p>
                <p><strong>E-mail:</strong> $email</p>
            </div>
        </body>
        </html>";
        
        // Limpa a sessão após confirmação
        session_unset();
        session_destroy();
        
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Formulário de Inscrição</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .header {
            margin-bottom: 40px;
            font-size: 24px;
        }
        .form-container {
            background-color: #222;
            border: 2px solid #444;
            border-radius: 8px;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            margin: 0 20px;
        }
        h1, h2 {
            color: #fff;
            margin: 0;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #555;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #444;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
    <?php if ($step == 1): ?>
        <div class='header'>
            <h1>CONCURSO 2024</h1>
        </div>
        <div class='form-container'>
            <form action='' method='post'>
                <h2>Etapa 1: Dados Pessoais</h2>
                
                <input type='hidden' name='step' value='1'>
                
                <label for='nome'>Nome Completo:</label>
                <input type='text' id='nome' name='nome' required>
                
                <label for='data_nascimento'>Data de Nascimento:</label>
                <input type='date' id='data_nascimento' name='data_nascimento' required>
                
                <label for='sexo'>Sexo:</label>
                <select id='sexo' name='sexo' required>
                    <option value='masculino'>Masculino</option>
                    <option value='feminino'>Feminino</option>
                    <option value='outro'>Outro</option>
                </select>
                
                <label for='estado_civil'>Estado Civil:</label>
                <select id='estado_civil' name='estado_civil' required>
                    <option value='solteiro'>Solteiro</option>
                    <option value='casado'>Casado</option>
                    <option value='divorciado'>Divorciado</option>
                    <option value='viúvo'>Viúvo</option>
                </select>
                
                <label for='nacionalidade'>Nacionalidade:</label>
                <input type='text' id='nacionalidade' name='nacionalidade' required>
                
                <label for='rg'>RG:</label>
                <input type='text' id='rg' name='rg' required>
                
                <label for='cpf'>CPF:</label>
                <input type='text' id='cpf' name='cpf' required>
                
                <button type='submit'>Próxima Etapa</button>
            </form>
        </div>
    <?php elseif ($step == 2): ?>
        <div class='header'>
            <h1>ETAPA 2</h1>
        </div>
        <div class='form-container'>
            <form action='' method='post'>
                <h2>Etapa 2: Endereço Completo</h2>
                
                <input type='hidden' name='step' value='2'>
                
                <label for='logradouro'>Logradouro:</label>
                <input type='text' id='logradouro' name='logradouro' required>
                
                <label for='numero'>Número:</label>
                <input type='text' id='numero' name='numero' required>
                
                <label for='complemento'>Complemento:</label>
                <input type='text' id='complemento' name='complemento'>
                
                <label for='bairro'>Bairro:</label>
                <input type='text' id='bairro' name='bairro' required>
                
                <label for='cidade'>Cidade:</label>
                <input type='text' id='cidade' name='cidade' required>
                
                <label for='estado'>Estado:</label>
                <input type='text' id='estado' name='estado' required>
                
                <label for='cep'>CEP:</label>
                <input type='text' id='cep' name='cep' required>
                
                <label for='telefone'>Telefone de Contato:</label>
                <input type='text' id='telefone' name='telefone' required>
                
                <label for='email'>E-mail:</label>
                <input type='email' id='email' name='email' required>
                
                <button type='submit'>Enviar Inscrição</button>
            </form>
        </div>
    <?php endif; ?>
</body>
</html>