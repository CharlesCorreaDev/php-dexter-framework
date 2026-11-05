# Ordena um array em ordem descrescente e mantém a associação de índices

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.arsort.php

---

# arsort

(PHP 4, PHP 5, PHP 7, PHP 8)

arsort — Ordena um array em ordem descrescente e mantém a associação de índices

### Descrição

function **arsort**([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

Ordena o `array` em ordem decrescente,
de forma que as chaves mantenham suas correlações com os valores
aos quais estão associadas.

É usada principalmente para ordenar arrays associativos onde a ordem dos
elementos é um fator significativo.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

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

**Exemplo #1 Exemplo de **arsort()****

```
<?php
$frutas = array("d" => "limão", "a" => "laranja", "b" => "banana", "c" => "maçã");
arsort($frutas);
foreach ($frutas as $chave => $valor) {
    echo "$chave = $valor\n";
}
?>
```

O exemplo acima produzirá:

```
c = maçã
d = limão
a = laranja
b = banana
```

As frutas foram ordenadas na ordem alfabética inversa, e os índices
associados a cada elemento foram mantidos.

### Veja também

- [sort()](function.sort.md) - Ordena um array em ordem ascendente
- [asort()](function.asort.md) - Ordena um array em ordem crescente e mantém a associação de índices
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
