# Ordena múltiplos arrays ou arrays multidimensionais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-multisort.php

---

# array\_multisort

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_multisort — Ordena múltiplos arrays ou arrays multidimensionais

### Descrição

function **array\_multisort**(  
    [array](language.types.array.md) `&$array1`,  
    [mixed](language.types.mixed.md) `$array1_sort_order` = SORT\_ASC,  
    [mixed](language.types.mixed.md) `$array1_sort_flags` = SORT\_REGULAR,  
    [mixed](language.types.mixed.md) `...$rest`  
): [true](language.types.singleton.md)

**array\_multisort()** pode ser usada para ordenar
vários arrays de uma vez, ou um array multidimensional por uma
ou mais dimensões.

Chaves associativas ([string](language.types.string.md)) serão mantidas, mas chaves
numéricas serão reindexadas.

> **Nota**:
>
> Se dois elementos são comparados como iguais, eles mantêm sua ordem original.
> Antes do PHP 8.0.0, sua ordem relativa no array ordenado era indefinida.

> **Nota**:
>
> Redefine o ponteiro interno do array para o primeiro elemento.

### Parâmetros

`array1`
:   Um [array](language.types.array.md) a ser ordenado.

`array1_sort_order`
:   A ordenação para ser utilizada no argumento [array](language.types.array.md) anterior. Pode ser
    **`SORT_ASC`** para ordenar na ascendente (crescente) ou **`SORT_DESC`**
    para ordernar na descendente (decrescente).

    Este argumento pode ser trocado com `array1_sort_flags`
    ou ser omitido completamente, e nesse caso é utilizado **`SORT_ASC`**.

`array1_sort_flags`
:   Opções de ordenamento para o argumento [array](language.types.array.md) anterior:

    Flags:

    - **`SORT_REGULAR`** - comparar itens normalmente
      (não modidifica tipos)
    - **`SORT_NUMERIC`** - compara itens numericamente
    - **`SORT_STRING`** - compara itens como strings
    - **`SORT_LOCALE_STRING`** - compara itens como
      strings, utilizando a localidade atual. Utiliza a localidade,
      que pode ser modificada com [setlocale()](function.setlocale.md)
    - **`SORT_NATURAL`** - compara itens como strings
      utilizando a "ordenação natural" de [natsort()](function.natsort.md)
    - **`SORT_FLAG_CASE`** - pode ser combinada
      (operação OR binária) com
      **`SORT_STRING`** ou
      **`SORT_NATURAL`** para ordenar as strings sem considerar maiúsculas e minúsculas

    Este argumento pode ser trocado com `array1_sort_order`
    ou completamente omitido, e nesse caso é utilizado **`SORT_REGULAR`**.

`rest`
:   Outros arrays, podendo informar também ordem e opções de ordenação. Somente elementos
    correspondentes a elementos equivalentes nos arrays anteriores são comparados.
    Em outras palavras, a ordem é lexigráfica.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora o tipo de retorno é **`true`**, antes era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Ordenando vários arrays**

```
<?php
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);

var_dump($ar1);
var_dump($ar2);
?>
```

Nesse exemplo, após a ordenação, o primeiro array conterá 0,
10, 100, 100. O segundo array conterá 4, 1, 2, 3. Os
itens no segundo array correspondentes ao itens idênticos
do primeiro array (100 e 100) também são ordenados.

```
array(4) {
  [0]=> int(0)
  [1]=> int(10)
  [2]=> int(100)
  [3]=> int(100)
}
array(4) {
  [0]=> int(4)
  [1]=> int(1)
  [2]=> int(2)
  [3]=> int(3)
}
```

**Exemplo #2 Ordenando arrays multidimensionais**

```
<?php
$ar = array(
       array("10", 11, 100, 100, "a"),
       array(   1,  2, "2",   3,   1)
      );
array_multisort($ar[0], SORT_ASC, SORT_STRING,
                $ar[1], SORT_NUMERIC, SORT_DESC);
var_dump($ar);
?>
```

Neste exemplo, após a ordenação, o primeiro array será transformado para
"10", 100, 100, 11, "a" (ordenado os itens como strings em ordem
crescente). O segundo conterá 1, 3, "2", 2, 1 (ordenado como números,
em ordem decrescente).

```
array(2) {
  [0]=> array(5) {
    [0]=> string(2) "10"
    [1]=> int(100)
    [2]=> int(100)
    [3]=> int(11)
    [4]=> string(1) "a"
  }
  [1]=> array(5) {
    [0]=> int(1)
    [1]=> int(3)
    [2]=> string(1) "2"
    [3]=> int(2)
    [4]=> int(1)
  }
}
```

**Exemplo #3 Ordenando resultados de bancos de dados**

Neste exemplo, cada elemento no array data
representa um iten em uma tabela. Esse tipo de conjunto de dados é típico
de registros de base de dados.

Exemplo:

```
volume | edition
-------+--------
    67 |       2
    86 |       1
    85 |       6
    98 |       2
    86 |       6
    67 |       7
```

Os dados estão em um array, chamado data. Isso pode ser obtido,
por exemplo, de rodar [mysqli\_fetch\_assoc()](mysqli-result.fetch-assoc.md) em loop.

Vamos ordenar volume decrescente e
edition crescente.

Aqui temos um array de registros, mas **array\_multisort()**
exige um array de colunas, então é preciso converter os dados utilizando o código abaixo
para então executar a ordenação.

```
<?php
// Os dados como foram criados percorrendo o resultado de mysqli_fetch_assoc:
$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);

// Obtém uma lista de colunas
foreach ($data as $key => $row) {
    $volume[$key]  = $row['volume'];
    $edition[$key] = $row['edition'];
}

// Pode ser usada a função array_column() no lugar do código acima
$volume  = array_column($data, 'volume');
$edition = array_column($data, 'edition');

// Ordena os dados por volume decrescente, edição crescente.
// Adiciona $data como último parâmetro, para ordenar por uma chave comum.
array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);

// Percorre os dados e exibe os valores ordenados para cada coluna
echo 'volume | edition', PHP_EOL;
echo '-------+--------', PHP_EOL;
for ($i = 0; $i < count($data); $i++) {
     printf("%6d | %7d\n", $volume[$i], $edition[$i]);
}
?>
```

O conjunto de dados agora está ordenado, assim:

```
volume | edition
-------+--------
    98 |       2
    86 |       1
    86 |       6
    85 |       6
    67 |       2
    67 |       7
```

**Exemplo #4 Ordenação sem diferenciar maiúsculas/minúsculas**

**`SORT_STRING`** e
**`SORT_REGULAR`** são sensíveis a maiúsculas e minúsculas, de forma que strings
começando com maiúsculas aparecerão primeiro que strings começando com
minúsculas.

Para realizar uma ordenação sem diferenciar maiúsculas/minúsculas é preciso forçar para que
a ordenação seja executada com uma cópia do array original, transformado em minúsculas.

```
<?php
$array = array('Alpha', 'atomic', 'Beta', 'bank');
$array_lowercase = array_map('strtolower', $array);

array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $array);

print_r($array);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Alpha
    [1] => atomic
    [2] => bank
    [3] => Beta
)
```

### Veja também

- [usort()](function.usort.md) - Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário
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
