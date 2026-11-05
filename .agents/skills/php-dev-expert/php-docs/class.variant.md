# Classe variant

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.variant.php

---

# Classe variant

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

## Introdução

A VARIANT é o equivalente do COM ao zval do PHP; é uma estrutura que
pode conter um valor com uma variedade de diferentes tipos possíveis. A classe variant
fornecida pela extensão COM permite mais controle sobre
a maneira como o PHP passa valores de e para o COM.

## Resumo da classe

class ****variant****
{

/\* Métodos \*/

public function [\_\_construct](variant.construct.md)([mixed](language.types.mixed.md) `$value` = **`null`**, [int](language.types.integer.md) `$type` = **`VT_EMPTY`**, [int](language.types.integer.md) `$codepage` = **`CP_ACP`**)

}

## Exemplos de variant

**Exemplo #1 Exemplo de variant**

```
<?php
$v = new variant(42);
print "O tipo é " . variant_get_type($v) . "<br/>";
print "O valor é " . $v . "<br/>";
?>
```

> **Nota**:
>
> Ao retornar
> um valor ou buscar uma propriedade variant, a variant é convertida em um
> valor PHP somente quando há um mapeamento direto entre os tipos que
> não resultaria em perda de informação. Em todos os outros casos, o resultado é
> retornado como uma instância da classe variant. Pode-se forçar o PHP a
> converter ou avaliar a variant como um tipo nativo do PHP usando um operador
> de conversão explicitamente, ou convertendo implicitamente para uma string
> usando a função [print](function.print.md). Pode-se usar a ampla gama de funções
> da variant para realizar operações aritméticas em variants sem forçar uma
> conversão ou correr o risco de perda de dados.

Consulte também [variant\_get\_type()](function.variant-get-type.md).

## Índice

- [variant::\_\_construct](variant.construct.md) — Construtor da classe variant

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
