# Ordena com uma função de comparação definida pelo usuário e manter a associação de índices

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.uasort.php

---

# ArrayIterator::uasort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayIterator::uasort — Ordena com uma função de comparação definida pelo usuário e manter a associação de índices

### Descrição

public function **ArrayIterator::uasort**([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

Este método ordena os elementos de forma que os índices mantenham sua correlação
com os valores aos quais estão associados, usando uma função de comparação
definida pelo usuário.

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
- [ArrayIterator::uksort()](arrayiterator.uksort.md) - Ordena por chaves usando uma função de comparação definida pelo usuário
- [uasort()](function.uasort.md) - Ordena um array com uma função de comparação definida pelo usuário e mantém associações de índices

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
