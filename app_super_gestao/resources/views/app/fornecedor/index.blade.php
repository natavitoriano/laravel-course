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

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existe alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Não existem fornecedores cadastrados</h3>
@endif