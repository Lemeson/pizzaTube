<br>
<div class="container-sm" style="width: 80%">

<form class="text-center border border-light p-5" method="post" action="{{ route('pizza-inserida') }}">

@csrf
    <p class="h4 mb-4">Insira nova pizza</p>

    
    <input type="text" id="nomePizza" name="pizza[nomePizza]" class="form-control mb-4" placeholder="Nome da pizza">

    <input type="number" id="valorpizza" name="pizza[valorPizza]" step="0.01" class="form-control mb-4" placeholder="Valor da pizza">

    <input type="number" id="custoPizza" name="pizza[custoPizza]" step="0.01" class="form-control mb-4" placeholder="Custo da pizza">

    <div class="d-flex justify-content-around">
        
    </div>

    <!-- submit button -->
    <button class="btn btn-info btn-block my-4" type="submit">cadastrar nova pizza</button>

</form>
<!-- Default form login -->
</div>