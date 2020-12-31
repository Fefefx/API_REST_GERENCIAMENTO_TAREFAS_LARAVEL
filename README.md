#REST API com Laravel para cadastro de tarefas

Api REST para cadastro de tarefas usando de PHP 7.3, Laravel 8.2 e MySQL 8.
Permite criar, alterar, excluir e pesquisar tarefas. Também faz a validação dos dados para que não ocorra erros ao inseri-los no banco de dados.

#### Rotas da API

*Listar todas as tarefas: *

**GET**:  `http://localhost:8000/api/tasks`

*Listar uma tarefa: *

**GET:** `http://localhost:8000/api/tasks/{ID_TAREFA}`

*Criar uma tarefa:*

**POST:** `	http://localhost:8000/api/tasks`

*Alterar uma tarefa:*

**PATCH:**  `http://localhost:8000/api/tasks/{ID_TAREFA}`

*Apagar uma tarefa:*

**DELETE:** `http://localhost:8000/api/tasks/{ID_TAREFA}`

**Nota:** Para criar ou alterar uma tarefa envie os dados no corpo da requisição pelo formato x-www-form-urlencoded.

### Execução

Após clonar o diretório do projeto, acesse a pasta principal e instale as dependências de terceiros com o comando:

`composer update`

Crie um arquivo .env com a mesma estrutura do arquivo .env.example. Neste arquivo especifique as informações da conexão com seu banco de dados MySQL. Se estiver usando o MySQL 8 execute a query abaixo para evitar problema de conexão do Laravel.

`ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'YOUR-PASSWORD';`

Por fim execute os migrations com o comando abaixo para que as tabelas sejam criadas no banco de dados:

`php artisan migrate`