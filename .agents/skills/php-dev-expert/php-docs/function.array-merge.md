# Combina um ou mais arrays

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-merge.php

---

# array\_merge

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_merge — Combina um ou mais arrays

### Descrição

function **array\_merge**([array](language.types.array.md) `...$arrays`): [array](language.types.array.md)

Combina os elementos de dois ou mais arrays de forma que os elementos de um são
colocados no final do array anterior. Retorna o array resultante da
fusão.

Se os arrays dados têm as mesmas chaves string, então o último
valor para uma chave irá sobrescrever o valor anterior. Se, no entanto,
os arrays tem as mesmas chaves numéricas, o último valor para uma chave **não** sobrescreverá o valor original, e sim adicionado ao array
resultante.

Se apenas um array é dado e o array é indexado numericamente,
as chaves são reindexadas de uma maneira contínua.

### Parâmetros

`arrays`
:   Uma lista de arrays a combinar.

### Valor Retornado

Retorna o array resultante.
Se chamado sem argumentos, retorna um [array](language.types.array.md) vazio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | A função agora pode ser chamada sem argumentos. Anteriormente, ao menos um parâmetro era necessário. |

### Examples

**Exemplo #1 Exemplo de **array\_merge()****

```
<?php

$array1 = ["cor" => "vermelho", 2, 4];
$array2 = ["a", "b", "cor" => "verde", "forma" => "trapezoide", 4];

$result = array_merge($array1, $array2);

print_r($result);
```

O exemplo acima produzirá:

```
Array
(
    [cor] => verde
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [forma] => trapezoide
    [4] => 4
)
```

**Exemplo #2 Exemplo simples de **array\_merge()****

```
<?php

$array1 = [];
$array2 = [1 => "data"];

$result = array_merge($array1, $array2);

print_r($result);
```

Não esqueça que as chaves numéricas serão reordenadas!

```
Array
(
    [0] => data
)
```

Se a intenção for apenas adicionar os elementos do segundo array no
primeiro, sem sobrescrever os elementos e sem
causar a reindexação, deve-se utilizar o operador
`+`:

```
<?php

$array1 = [0 => 'zero_a', 2 => 'two_a', 3 => 'three_a'];
$array2 = [1 => 'one_b', 3 => 'three_b', 4 => 'four_b'];

$result = $array1 + $array2;

var_dump($result);
```

As chaves do primeiro array são preservadas. Se uma chave
existir em dois arrays, então o elemento do primeiro array será
preservado e o elemento de mesma chave no segundo array será
descartado.

```
array(5) {
  [0]=>
  string(6) "zero_a"
  [2]=>
  string(5) "two_a"
  [3]=>
  string(7) "three_a"
  [1]=>
  string(5) "one_b"
  [4]=>
  string(6) "four_b"
}
```

### Veja também

- [array\_merge\_recursive()](function.array-merge-recursive.md) - Mescla um ou mais arrays recursivamente
- [array\_replace()](function.array-replace.md) - Substitui elementos de arrays passados no primeiro array
- [array\_combine()](function.array-combine.md) - Cria um array usando um array para chaves e outro para valores
- [operadores de array](language.operators.array.md)

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
