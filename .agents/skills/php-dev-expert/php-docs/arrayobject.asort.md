# Ordenar as entradas por valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.asort.php

---

# ArrayObject::asort

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

ArrayObject::asort — Ordenar as entradas por valor

### Descrição

public function **ArrayObject::asort**([int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

Ordena as entradas em ordem crescente,
de forma que suas chaves mantenham sua correlação com os valores que
estão associados a elas.

Isso é usado principalmente ao ordenar arrays associativos onde a ordem
real dos elementos é significativa.

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

### Examples

**Exemplo #1 Exemplo de **ArrayObject::asort()****

```
<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
$fruitArrayObject = new ArrayObject($fruits);
$fruitArrayObject->asort();

foreach ($fruitArrayObject as $key => $val) {
    echo "$key = $val\n";
}
?>
```

O exemplo acima produzirá:

```
c = apple
b = banana
d = lemon
a = orange
```

As frutas foram ordenadas em ordem alfabética, e a chave
associada a cada entrada foi mantida.

### Veja também

- [ArrayObject::ksort()](arrayobject.ksort.md) - Ordena as entradas pela chave
- [ArrayObject::natsort()](arrayobject.natsort.md) - Ordena as entradas usando um algoritmo de "ordem natural"
- [ArrayObject::natcasesort()](arrayobject.natcasesort.md) - Ordena um array usando um algoritmo de "ordem natural" insensível a maiúsculas e minúsculas
- [ArrayObject::uasort()](arrayobject.uasort.md) - Ordena as entradas com uma função de comparação definida pelo usuário e mantém a associação de chaves
- [ArrayObject::uksort()](arrayobject.uksort.md) - Ordena as entradas pelas chaves usando uma função de comparação definida pelo usuário
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
