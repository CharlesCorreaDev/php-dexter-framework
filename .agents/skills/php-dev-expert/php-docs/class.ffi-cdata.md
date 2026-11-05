# Identificadores de dados em C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ffi-cdata.php

---

# Identificadores de dados em C

(PHP 7 >= 7.4.0, PHP 8)

## Introdução

Objetos **FFI\CData** podem ser usados de várias maneiras como dados
comuns do PHP:

- Dados em C de tipos escalares podem ser lidos e atribuídos através da propriedade $cdata, por exemplo,
  `$x = FFI::new('int'); $x->cdata = 42;`
- Campos de estruturas e uniões em C podem ser acessados como uma propriedade comum de objeto PHP, por exemplo,
  `$cdata->field`
- Elementos de array em C podem ser acessados como elementos de array comuns do PHP, por exemplo,
  `$cdata[$offset]`
- Arrays em C podem ser iterados usando instruções [`foreach`](control-structures.foreach.md).
- Arrays em C podem ser usados como argumentos de [count()](function.count.md).
- Ponteiros em C podem ser desreferenciados como arrays, por exemplo, `$cdata[0]`
- Ponteiros em C podem ser comparados usando operadores comuns de comparação (`<`,
  `<=`, `==`, `!=`, `>=`, `>`).
- Ponteiros em C podem ser incrementados e decrementads usando as operações comuns `+`/`-`/
  `++`/`--`, por exemplo, `$cdata += 5`
- Ponteiros em C podem ser subtraídos de outros usando operações normais de subtração `-`.
- Ponteiros para funções em C podem ser chamados como closures normais de PHP, por exemplo, `$cdata()`
- Qualquer dado em C pode ser duplicado usando o operador [clone](language.oop5.cloning.md),
  por exemplo, `$cdata2 = clone $cdata;`
- Qualquer dado em C pode ser visualizado usando [var\_dump()](function.var-dump.md), [print\_r()](function.print-r.md) etc.
- **FFI\CData** agora pode ser atribuído a estruturas e campos a partir do PHP 8.3.0.

> **Nota**:
>
> Limitações notáveis são: instâncias **FFI\CData** não suportam
> [isset()](function.isset.md), [empty()](function.empty.md) e [unset()](function.unset.md);
> e estruturas e uniões C encapsuladas não implementam [Traversable](class.traversable.md).

## Resumo da classe

namespace **FFI**;

final
class ****CData****
{

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | **FFI\CData** agora pode ser atribuído a estruturas e campos. |

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
