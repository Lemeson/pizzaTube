<x-app-layout>
<br>
<br>
<!-- Exemplo de exibição dos dados do pedido -->
<h1>Dados do Pedido</h1>

<br>
<div class="container-sm" style="width: 80%">

@if (!empty($dadosPedido))
    <p class="bq-title">ID: {{ $dadosPedido[0]->id }}</p>
    <p class="bq-title">Pizza: {{ $dadosPedido[0]->nomePizza }}</p>
    <p class="bq-title">Esfiha: {{ $dadosPedido[0]->nomeEsfiha }}</p>
    <p class="bq-title">Bebida: {{ $dadosPedido[0]->nomeBebida }}</p>

@else
    <p>Nenhum pedido encontrado</p>
@endif
</div>


</x-app-layout>