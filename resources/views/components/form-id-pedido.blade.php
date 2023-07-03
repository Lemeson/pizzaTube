<br>
<br>
<br>

<div class="container">
<form class="text-center border border-light p-5" method="POST" action="{{ url('pedido', ['id' => '__ID__']) }}" onsubmit="setActionUrl(this)">
    @csrf
    <p class="h4 mb-4">Digite o ID do pedido</p>
    <!-- ID do pedido -->
    <input type="number" step="1" id="id_pedido" name="id_pedido" class="form-control mb-4" placeholder="Digite o ID">
    <!-- Botão de pesquisa -->  
    <br>
    <button type="submit" class="btn btn-primary">Procurar click aqui</button>
</form>

<script>
function setActionUrl(form) {
    var id = form.id_pedido.value;
    var actionUrl = form.action.replace('__ID__', id);
    form.action = actionUrl;
    return true;
}
</script>

</div>
