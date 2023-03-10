<h3 align='center'>Lista Fornecedores</h3>

{{-- Operador Variavel Loop no Blade --}}

@isset($fornecedores) 
  @forelse ($fornecedores as $indice=>$fornecedor)
  Iteração atual: {{ $loop->iteration }}

  {{-- @php echo var_dump($loop) @endphp --}}

  
  @if($loop->first)
    Primeira iteração do loop
  @endif

  @if($loop->last)
    Ultima iteração do loop
  @endif

  <pre>
      </br>
    Fornecedor: {{$fornecedor['nome']}}
    </br>
    Status:{{$fornecedor['status']}}
    </br>
    CNPJ:{{$fornecedor['cnpj'] ?? "Dado não foi informado" }}
    </br>
    Telefone: {{$fornecedor['ddd'] ? '('.($fornecedor['ddd']).')':'' }} {{$fornecedor['telefone'] ?? ''}}
    </br>
    <hr>
    @empty
    Não existem fornecedores cadastrados
  </pre>



  @endforelse  
@endisset
