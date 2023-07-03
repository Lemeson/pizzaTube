<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container-sm" style="width: 60%">

<form class="text-center border border-light p-5" method="post" action="{{ route('funcionario-inserido') }}">
    @csrf
    
    <p class="h4 mb-4">Insira novo funcionário</p>
    
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control mb-4" id="nome" name="funcionario[nome]" placeholder="Nome do funcionário" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control mb-4" id="email" name="funcionario[email]" placeholder="Email do funcionário" required>
    </div>
    
    <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" class="form-control mb-4" id="telefone" name="funcionario[telefone]" placeholder="Telefone do funcionário" required>
    </div>
    
    <div class="form-group">
        <label for="cep">CEP:</label>
        <input type="text" class="form-control mb-4" id="cep" name="funcionario[cep]" placeholder="CEP do funcionário" required>
    </div>
    
    <div class="form-group">
        <label for="logradouro">Logradouro:</label>
        <input type="text" class="form-control mb-4" id="logradouro" name="funcionario[logradouro]" placeholder="Logradouro do funcionário" required readonly>
    </div>
    
    <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" class="form-control mb-4" id="bairro" name="funcionario[bairro]" placeholder="Bairro do funcionário" required readonly>
    </div>
    
    <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control mb-4" id="cidade" name="funcionario[cidade]" placeholder="Cidade do funcionário" required readonly>
    </div>
    
    <div class="form-group">
        <label for="estado">Estado:</label>
        <input type="text" class="form-control mb-4" id="estado" name="funcionario[estado]" placeholder="Estado do funcionário" required readonly>
    </div>
    
    <div class="form-group">
        <label for="numero">Número:</label>
        <input type="text" class="form-control mb-4" id="numero" name="funcionario[numero]" placeholder="Número do funcionário" required>
    </div>
    
    <div class="form-group">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" class="form-control mb-4" id="data_nascimento" name="funcionario[data_nascimento]"required>
    </div>
    
    <div class="form-group">
        <label for="salario">Salário:</label>
        <input type="number" class="form-control mb-4" id="salario" name="funcionario[salario]" step="0.01" placeholder="Salário do funcionário" required>
    </div>
    
    <div class="form-group">
        <label for="funcao">Função:</label>
        <input type="text" class="form-control mb-4" id="funcionario" name="funcionario[funcao]" placeholder="Função do funcionário" required>
    </div>
    
    <div class="form-group">
        <label for="data_contratacao">Data de Contratação:</label>
        <input type="date" class="form-control mb-4" id="data_contratacao" name="funcionario[data_contratacao]" required>
    </div>
    
    <button class="btn btn-info btn-block my-4" type="submit">Cadastrar novo funcionário</button>

</form>
</div>

<script>
  $(document).ready(function() {
    $('#cep').on('blur', function() {
      var cep = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos do CEP

      if (cep.length === 8) { // Verifica se o CEP possui oito dígitos
        $.ajax({
          url: 'https://viacep.com.br/ws/' + cep + '/json/',
          type: 'GET',
          dataType: 'json',
          success: function(data) {
            if (!data.erro) { // Verifica se a resposta não contém erros
              $('#estado').val(data.uf);
              $('#cidade').val(data.localidade);
              $('#logradouro').val(data.logradouro);
              $('#bairro').val(data.bairro);
              // Preencha os outros campos de acordo com os dados retornados pela API
            } else {
              alert('CEP não encontrado');
            }
          },
          error: function() {
            alert('Erro ao consultar o CEP');
          }
        });
      }
    });
  });
</script>