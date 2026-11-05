# Ordena entradas naturalmente, sem diferenciar maiúsculas de minúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.natcasesort.php

---

# ArrayIterator::natcasesort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayIterator::natcasesort — Ordena entradas naturalmente, sem diferenciar maiúsculas de minúsculas

### Descrição

public function **ArrayIterator::natcasesort**(): [true](language.types.singleton.md)

Ordena as entradas pelos valores usando um algoritmo de "ordem natural" insensível a maiúsculas e minúsculas.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Veja também

- [ArrayIterator::asort()](arrayiterator.asort.md) - Ordena entradas pelos valores
- [ArrayIterator::ksort()](arrayiterator.ksort.md) - Ordena entradas por chaves
- [ArrayIterator::natsort()](arrayiterator.natsort.md) - Ordena entradas naturalmente
- [ArrayIterator::uasort()](arrayiterator.uasort.md) - Ordena com uma função de comparação definida pelo usuário e manter a associação de índices
- [ArrayIterator::uksort()](arrayiterator.uksort.md) - Ordena por chaves usando uma função de comparação definida pelo usuário
- [natcasesort()](function.natcasesort.md) - Ordena um array utilizando o algoritmo de "ordem natural" sem diferenciar maiúsculas e minúsculas

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
