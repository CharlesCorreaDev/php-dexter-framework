# Ordena um array pelas chaves em ordem descrescente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.krsort.php

---

# krsort

(PHP 4, PHP 5, PHP 7, PHP 8)

krsort — Ordena um array pelas chaves em ordem descrescente

### Descrição

function **krsort**([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

Ordena o `array` pelas chaves
em ordem descrescente.

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
| 8.2.0 | Esta função agora faz comparação numérica de string com a constante **`SORT_REGULAR`** usando as regras padrão do PHP 8. |

### Examples

**Exemplo #1 Exemplo de **krsort()****

```
<?php
$frutas = array("d"=>"limão", "a"=>"laranja", "b"=>"banana", "c"=>"maçã");
krsort($frutas);
foreach ($frutas as $chave => $valor) {
    echo "$chave = $valor\n";
}
?>
```

O exemplo acima produzirá:

```
d = limão
c = maçã
b = banana
a = laranja
```

### Veja também

- [sort()](function.sort.md) - Ordena um array em ordem ascendente
- [ksort()](function.ksort.md) - Ordena um array pelas chaves em ordem crescente
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
