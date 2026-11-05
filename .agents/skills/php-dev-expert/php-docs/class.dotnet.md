# A classe dotnet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.dotnet.php

---

# A classe dotnet

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

## Introdução

A classe dotnet permite instanciar uma classe a partir de uma montagem .Net,
chamar seus métodos e acessar suas propriedades, se a classe, os métodos e
as propriedades estiverem [» visíveis para o COM](https://docs.microsoft.com/dotnet/api/system.runtime.interopservices.comvisibleattribute).

Não há suporte para instanciar classes estáticas nem chamar métodos estáticos.
A instanciação de classes genéricas como `System.Collections.Generic.List`
também não é suportada.

Algumas classes .Net não implementam IDispatch, portanto, embora possam ser instanciadas,
não há suporte para chamar métodos ou acessar propriedades nessas classes.

> **Nota**:
>
> É necessário instalar o .Net Runtime no servidor web para utilizar
> esse recurso.

> **Nota**:
>
> Antes do PHP 8.0.0, o .Net Framework 4.0 e posteriores não eram suportados pela classe **dotnet**.
> Se os assemblies tivessem sido registrados com **regasm.exe**,
> as classes poderiam ser instanciadas como objetos [com](class.com.md).
> A partir do PHP 8.0.0, o .Net Framework 4.0 e posteriores são suportados através da diretiva
> [com.dotnet\_version](com.configuration.md#ini.com.dotnet-version) do php.ini.

## Resumo da classe

class ****dotnet****
extends
[variant](class.variant.md)
{

/\* Métodos \*/

public function [\_\_construct](dotnet.construct.md)([string](language.types.string.md) `$assembly_name`, [string](language.types.string.md) `$datatype_name`, [int](language.types.integer.md) `$codepage` = **`CP_ACP`**)

}

## Métodos sobrecarregados

O objeto retornado é um objeto sobrecarregado, o que significa que o PHP não
vê nenhum método fixo como acontece com as classes normais; em vez disso, qualquer
acesso a propriedade ou método é passado para o COM e de lá para o
DOTNET. Em outras palavras, o objeto .Net é mapeado por meio da camada de
interoperabilidade COM fornecida pelo .Net Runtime.

Depois de criar um objeto dotnet, o PHP o trata de forma idêntica a qualquer
outro objeto COM; todas as mesmas regras se aplicam.

## Exemplos de dotnet

**Exemplo #1 Exemplo dotnet**

```
<?php
$stack = new dotnet("mscorlib", "System.Collections.Stack");
$stack->Push(".Net");
$stack->Push("Olá ");
echo $stack->Pop() . $stack->Pop();
?>
```

## Índice

- [dotnet::\_\_construct](dotnet.construct.md) — Construtor da classe dotnet

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
