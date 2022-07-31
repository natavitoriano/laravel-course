<h3>Fornecedores</h3>

{{--Fica o comentário que será descartado pelo interpretador do blade--}}

@php
    //Para comentários de uma linha
    /*
    Multiplas linhas
    */
    /*
    if(){

    } elseif() {

    } else {

    }*/
@endphp
{{--
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existe alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br />
Status: {{ $fornecedores[0]['status']}}
<br />
@if($fornecedores[0]['status'] == 'N')
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')<!-- se o retorno da condição for falso-->
    Fornecedor inativo
@endunless
--}}

@isset($fornecedores)<!-- Verifica se a variavel esta definida-->
    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br />
        Status: {{ $fornecedores[$i]['status']}}
        <br />
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido'}}
        <br />
        Telefone: ({{$fornecedores[$i]['ddd'] ?? ''}}) {{$fornecedores[0]['telefone'] ?? ''}}
        <hr>
    @endfor
    {{--@switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado.
    @endswitch
    
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj']}}
        @empty($fornecedores[0]['cnpj'])
            Vazio
        @endempty
    @endisset 
    --}}
@endisset
<br>
{{--
@for($i = 0; $i < 10; $i++)
    {{$i}} <br>
@endfor

--}}