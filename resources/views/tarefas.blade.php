<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Criado em</th>
                <th>Atualizado em</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->id }}</td>
                    <td>{{ $tarefa->nome }}</td>
                    <td>{{ $tarefa->descricao }}</td>
                    <td>{{ $tarefa->created_at }}</td>
                    <td>{{ $tarefa->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>