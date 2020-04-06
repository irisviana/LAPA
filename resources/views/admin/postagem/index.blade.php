<html>
    <head>
        <title>
            Gerenciar Postagens
        </title>
    </head>
    <body>
        <header>

        </header>

        <div class="container">
            <h1>Gerenciar postagens</h1>
            <a href="{{ route('admin.postagem.adicionar') }}" class="btn">Adicionar</a>
            <table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->data }}</td>
                        <td>
                            <a href="{{ route('admin.postagem.editar', $registro->id) }}" class="btn">Editar</a>
                            <a href="{{ route('admin.postagem.deletar', $registro->id) }}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar essa postagem?');">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <footer>

        </footer>
    </body>
</html>