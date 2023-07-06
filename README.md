## Projeto Criação de Tasks com API em Laravel

Aqui segue os códigos para o CRUD. Utilizei a própria extensão do VS code para realizar os testes da API. (Thunder Client)

Inserir: POST https://localhost/api/task
Parâmetros:
{
    "title": <"Insira o Título">,
    "description": "<"Descreva a tarefa">,
    "status": <"true" ou "false">, // status = (completo / incompleto)
}

Listar: GET https://localhost/api/task

Listar Específico: GET https://localhost/api/task/{id}

Atualizar: PATCH https://localhost/api/task/{id}
Parâmetros:
{
    "title": <"Atualize o Título">,
    "description": "<"Atualize a tarefa">,
    "status": <"true" ou "false">, // status = (completo / incompleto)
}

Deletar: DELETE https://localhost/api/task/{id}


# trabalho-api-rest
