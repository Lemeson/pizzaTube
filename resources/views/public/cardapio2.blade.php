<x-layout2>

</br></br></br></br></br></br></br></br>

<!--Table-->
<div class="container">
<div class="row">
    <div class="col">
        <h2>Pizzas</h2>
        <table class="table table-striped w-auto">

        <!--Table head-->
        <thead>
            <tr scope="table-info">
            <th>Name</th>
            <th>Valor</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            @foreach ($pizzas as $pizza)
            <tr class="table-info">
                <input type="hidden" class="item-id" value="{{ $pizza->id }}">
                <td>{{ $pizza->nomePizza }}</td>
                <td>{{ $pizza->valorPizza }}</td>
                <td>
                    @if (Auth::check() && Auth::user()->role == 1)
                    <form method="POST" action="{{ route('deletar-item') }}">
                        @csrf
                        <input type="hidden" name="tipo" value="pizza">
                        <input type="hidden" name="id" value="{{ $pizza->id }}">
                        <button type="submit" class="btn-excluir btn blue-gradient">Excluir</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        <!--Table body-->


        </table>
<!--Table-->
    </div>
    <div class="col">
        <h2>Bebidas</h2> 
        <table class="table table-striped w-auto">

        <!--Table head-->
        <thead>
            <tr scope="table-info">
            <th>Name</th>
            <th>Valor</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            @foreach ($bebidas as $bebida)
            <tr class="table-info">
                <input type="hidden" class="item-id" value="{{ $bebida->id }}">
                <td>{{ $bebida->nomeBebida }}</td>
                <td>{{ $bebida->valorBebida }}</td>
                <td>
                    @if (Auth::check() && Auth::user()->role == 1)
                    <form method="POST" action="{{ route('deletar-item') }}">
                        @csrf
                        <input type="hidden" name="tipo" value="bebida">
                        <input type="hidden" name="id" value="{{ $bebida->id }}">
                        <button type="submit" class="btn-excluir btn blue-gradient">Excluir</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        <!--Table body-->


        </table>
        <!--Table-->
    </div>
    <div class="col">
        <h2>Esfihas</h2>
        <table class="table table-striped w-auto">

        <!--Table head-->
        <thead>
            <tr scope="table-info">
            <th>Name</th>
            <th>Valor</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            @foreach ($esfihas as $esfiha)
            <tr class="table-info">
                <input type="hidden" class="item-id" value="{{ $esfiha->id }}">
                <td>{{ $esfiha->nomeEsfiha }}</td>
                <td>{{ $esfiha->valorEsfiha }}</td>
                <td>
                    @if (Auth::check() && Auth::user()->role == 1)
                    <form method="POST" action="{{ route('deletar-item') }}">
                        @csrf
                        <input type="hidden" name="tipo" value="esfiha">
                        <input type="hidden" name="id" value="{{ $esfiha->id }}">
                        <button type="submit" class="btn-excluir btn blue-gradient">Excluir</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        <!--Table body-->

    </table>
        <!--Table-->
    </div>

</div>

</div>

</br></br></br></br></br></br></br></br>
</x-layout2>
