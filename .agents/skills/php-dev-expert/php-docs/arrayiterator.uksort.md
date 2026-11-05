# Ordena por chaves usando uma função de comparação definida pelo usuário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.uksort.php

---

# ArrayIterator::uksort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayIterator::uksort — Ordena por chaves usando uma função de comparação definida pelo usuário

### Descrição

public function **ArrayIterator::uksort**([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

Este método ordena os elementos pelas chaves usando uma função de comparação
fornecida pelo usuário.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

### Parâmetros

`callback`
:   A função de comparação deve retornar um inteiro menor que, igual ou maior que zero se o primeiro argumento for considerado respectivamente menor que, igual ou maior que o segundo.

    function callback([mixed](language.types.mixed.md) `$a`, [mixed](language.types.mixed.md) `$b`): [int](language.types.integer.md)

    **Cuidado**

    Retornar valores *não inteiros* da função de
    comparação, como [float](language.types.float.md), resultará em uma conversão interna
    do valor retornado da função callback para [int](language.types.integer.md). Portanto, valores como
    `0.99` e `0.1` serão convertidos para o
    valor inteiro `0`, o que comparará esses valores como iguais.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Veja também

- [ArrayIterator::asort()](arrayiterator.asort.md) - Ordena entradas pelos valores
- [ArrayIterator::ksort()](arrayiterator.ksort.md) - Ordena entradas por chaves
- [ArrayIterator::natcasesort()](arrayiterator.natcasesort.md) - Ordena entradas naturalmente, sem diferenciar maiúsculas de minúsculas
- [ArrayIterator::natsort()](arrayiterator.natsort.md) - Ordena entradas naturalmente
- [ArrayIterator::uasort()](arrayiterator.uasort.md) - Ordena com uma função de comparação definida pelo usuário e manter a associação de índices
- [uksort()](function.uksort.md) - Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.

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
