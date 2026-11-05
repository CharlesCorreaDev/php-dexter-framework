# Ordena um array em ordem crescente e mantém a associação de índices

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.asort.php

---

# asort

(PHP 4, PHP 5, PHP 7, PHP 8)

asort — Ordena um array em ordem crescente e mantém a associação de índices

### Descrição

function **asort**([array](language.types.array.md) `&$array`, [int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

Ordena um `array` em ordem crescente,
se forma que as chaves mantenham suas correlações com os valores aos
quais estão associadas.

Isto é usado principalmente ao ordenar arrays associativos onde a
ordem real dos elementos é significativa.

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

**Exemplo #1 Exemplo de **asort()****

```
<?php
$frutas = array("d" => "limão", "a" => "laranja", "b" => "banana", "c" => "maçã");
asort($frutas);
foreach( $frutas as $chave => $valor ){
    echo "$chave = $valor\n";
}
?>
```

O exemplo acima produzirá:

```
b = banana
a = laranja
d = limão
c = maçã
```

As frutas foram ordenadas na ordem alfabética, e os índices
associados a cada elemento foram mantidos.

### Veja também

- [sort()](function.sort.md) - Ordena um array em ordem ascendente
- [arsort()](function.arsort.md) - Ordena um array em ordem descrescente e mantém a associação de índices
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
