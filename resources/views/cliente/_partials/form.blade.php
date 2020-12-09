<div class="form-row">
    <div class="form-group col-md-6">
        <label for="nome_cliente">Nome Cliente</label>
        <input type="text" required value="{{ $cliente->nome_cliente ?? old('nome_cliente') }}" class="form-control" name="nome_cliente" id="nome_cliente">
    </div>
    <div class="form-group col-md-6">
        <label for="galc">Galc</label>
        <input type="text" required value="{{ $cliente->galc ?? old('galc') }}" class="form-control" name="galc" id="galc">
    </div>
</div>
<div class="form-group">
    <label for="endereco">Endereço de Instalação</label>
    <input type="text" required value="{{ $cliente->endereco ?? old('endereco') }}" class="form-control" name="endereco" id="endereco">
</div>
<div class="form-row">
    <div class="form-group col-6">
        <label for="porta">Porta</label>
        <input type="text" value="{{ $cliente->porta ?? old('porta') }}" class="form-control" name="porta" id="porta">
    </div>
    <div class="form-group col-6">
        <label for="velocidade">Velocidade</label>
        <input type="text" required value="{{ $cliente->velocidade ?? old('velocidade') }}" class="form-control" name="velocidade" id="velocidade">
    </div>
</div>

<div class="text-center">
    <a href="{{ route('cliente.index') }}" class="btn btn-danger mr-3">
        <i class="glyphicon glyphicon-chevron-left"></i> Voltar
    </a>

    <button type="submit" class="btn btn-primary">
        <i class="glyphicon glyphicon-ok"></i> Salvar
    </button>
</div>
