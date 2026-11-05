# Ordena um array em ordem ascendente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sort.php

---

# sort

(PHP 4, PHP 5, PHP 7, PHP 8)

sort — Ordena um array em ordem ascendente

### Descrição

function **sort**([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

Ordena os valores do `array` em ordem ascendente,
modificando o array.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

> **Nota**:
>
> Esta função
> atribui novas chaves aos elementos do `array`.
> Ela removerá todas as chaves existentes que possam ter sido atribuídas, em vez
> de apenas reordenar as chaves.

> **Nota**:
>
> Redefine o ponteiro interno do array para o primeiro elemento.

### Parâmetros

`array`
:   O array de entrada.

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

### Examples

**Exemplo #1 Exemplo de **sort()****

```
<?php

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?>
```

O exemplo acima produzirá:

```
fruits[0] = apple
fruits[1] = banana
fruits[2] = lemon
fruits[3] = orange
```

As frutas foram classificadas em ordem alfabética.

**Exemplo #2 Exemplo de **sort()** utilizando comparações naturais
ignorando maiúsculas e minúculas**

```
<?php

$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?>
```

O exemplo acima produzirá:

```
fruits[0] = Orange1
fruits[1] = orange2
fruits[2] = Orange3
fruits[3] = orange20
```

A lista foi ordenada como se tivesse sido utilizada [natcasesort()](function.natcasesort.md).

### Notas

> **Nota**:
>
> Como muitas funções de ordenação do PHP, **sort()** usa uma
> implementação da [» Quicksort](https://en.wikipedia.org/wiki/Quicksort).
> O pivot é escolhido no meio da partição, o que resulta num processamento rápido
> para arrays já ordenados. Mas isso é um detalhe de implementação, que não
> pode ser garantido.

**Aviso**

Cuidado ao ordenar arrays com valores com tipos variados, dado que
**sort()** pode produzir resultados inesperados, mesmo
se `flags` for **`SORT_REGULAR`**.

### Veja também

- [rsort()](function.rsort.md) - Ordena um array em ordem descrescente
- [Comparação entre as funções de ordenação de array](array.sorting.md)

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
