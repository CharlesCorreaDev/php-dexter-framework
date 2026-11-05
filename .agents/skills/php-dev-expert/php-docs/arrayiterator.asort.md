# Ordena entradas pelos valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.asort.php

---

# ArrayIterator::asort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayIterator::asort — Ordena entradas pelos valores

### Descrição

public function **ArrayIterator::asort**([int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

Ordena as entradas pelos seus valores.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

### Parâmetros

`flags`
:   O segundo parâmetro opcional `flags`
    pode ser usado para modificar o comportamento da ordenação usando estes valores:

    Flags dos tipos de ordenação:

    - **`SORT_REGULAR`** - compara os elementos normalmente;
      os detalhes são descritos na seção [operadores de comparação](language.operators.comparison.md)
    - **`SORT_NUMERIC`** - compara os elementos numericamente
    - **`SORT_STRING`** - compara os elementos como strings
    - **`SORT_LOCALE_STRING`** - compara os elementos como
      strings, com base na localidade atual. A localidade
      pode ser alterada usando [setlocale()](function.setlocale.md)
    - **`SORT_NATURAL`** - compara os elementos como strings
      usando "ordenação natural" como [natsort()](function.natsort.md)
    - **`SORT_FLAG_CASE`** - pode ser combinada
      (usando o operador bit a bit OR) com
      **`SORT_STRING`** ou
      **`SORT_NATURAL`** para ordenar strings sem fazer distinção entre maiúsculas e minúsculas

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Veja também

- [ArrayIterator::ksort()](arrayiterator.ksort.md) - Ordena entradas por chaves
- [ArrayIterator::natcasesort()](arrayiterator.natcasesort.md) - Ordena entradas naturalmente, sem diferenciar maiúsculas de minúsculas
- [ArrayIterator::natsort()](arrayiterator.natsort.md) - Ordena entradas naturalmente
- [ArrayIterator::uasort()](arrayiterator.uasort.md) - Ordena com uma função de comparação definida pelo usuário e manter a associação de índices
- [ArrayIterator::uksort()](arrayiterator.uksort.md) - Ordena por chaves usando uma função de comparação definida pelo usuário
- [asort()](function.asort.md) - Ordena um array em ordem crescente e mantém a associação de índices

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
