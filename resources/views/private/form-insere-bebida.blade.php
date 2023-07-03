<br>
<div class="container-sm" style="width: 80%">
    <form class="text-center border border-light p-5" method="post" action="{{ route('bebida-inserida') }}">
        @csrf
        <p class="h4 mb-4">Insira nova bebida</p>
        
        <input type="text" id="nomeBebida" name="bebida[nomeBebida]" class="form-control mb-4" placeholder="Nome da bebida">
        
        <input type="number" id="valorBebida" name="bebida[valorBebida]" step="0.01" class="form-control mb-4" placeholder="Valor da bebida">
        
        <input type="number" id="custoBebida" name="bebida[custoBebida]" step="0.01" class="form-control mb-4" placeholder="Custo da bebida">

        <button class="btn btn-info btn-block my-4" type="submit">Cadastrar nova bebida</button>
    </form>
</div>
