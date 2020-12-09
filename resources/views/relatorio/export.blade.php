<table>
    <thead>
        <tr>
            <th>Nome Cliente</th>
            <th>Galc</th>
            <th>Porta</th>
            <th>Endereço</th>
            <th>Velocidade</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome_cliente }}</td>
                <td>{{ $cliente->galc }}</td>
                <td>{{ $cliente->porta }}</td>
                <td>{{ $cliente->endereco }}</td>
                <td>{{ $cliente->velocidade }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
