<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="header">
            <header>
                <h1>Task Manager</h1>
            </header>
        </div>

        <div class="form">
            <form action="" method="GET">

                <label for="task_name">Tarefa: </label>
                <input type="text" name="task_name" placeholder="Nome da tarefa" id="task_name">
                <button type="submit">Cadastrar</button>

            </form>
        </div>

        <div class="separator"></div>

        <div class="list-tasks">

            <ul>
                <li>Tarefa 1</li>
                <li>Tarefa 2</li>
                <li>Tarefa 3</li>
            </ul>

        </div>

        <div class="footer">

            <footer>
                <p>Developed by <a target="_blank" href="www.github.com/izadoramatias">@izadoramatias</a>
                </p>
            </footer>

        </div>
    
    </div>

</body>
</html>