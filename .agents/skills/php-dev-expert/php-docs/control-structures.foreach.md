# foreach

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.foreach.php

---

## foreach

(PHP 4, PHP 5, PHP 7, PHP 8)

O construtor `foreach` fornece uma maneira fácil de
iterar sobre [array](language.types.array.md)s e objetos [Traversable](class.traversable.md).
O `foreach` emitirá um erro quando usado com
uma variável contendo um tipo de dado diferente ou com uma variável não inicializada.

`foreach` pode, opcionalmente, obter a chave (`key`) de cada elemento:

```
foreach (expressão_iterável as $valor) {
    lista_de_instruções
}

foreach (expressão_iterável as $chave => $valor) {
    lista_de_instruções
}
```

A primeira forma percorre o iterável dado por
`iterable_expression`. A cada iteração, o valor
do elemento atual é atribuído à variável `$valor`.

A segunda forma irá, adicionalmente, atribuir a chave do elemento corrente à
variável `$chave` a cada iteração.

Note que o `foreach` não modifica o ponteiro interno
do array, que é usado por funções como [current()](function.current.md)
e [key()](function.key.md).

É possível
[customizar a iteração em objetos](language.oop5.iterations.md).

**Exemplo #1 Usos comuns de `foreach`**

```
<?php

echo "Somente valor\n";
$array = [1, 2, 3, 17];

foreach ($array as $value) {
    echo "Elemento atual de \$array: $value.\n";
}

echo "\n\nChave e valor:\n";
$array = [
    "um" => 1,
    "dois" => 2,
    "três" => 3,
    "dezessete" => 17
];

foreach ($array as $key => $value) {
    echo "Chave: $key => Valor: $value\n";
}

echo "\n\nArrays chave-valor multidimensionais:\n";
$grid = [];
$grid[0][0] = "a";
$grid[0][1] = "b";
$grid[1][0] = "y";
$grid[1][1] = "z";

foreach ($grid as $y => $row) {
    foreach ($row as $x => $value) {
        echo "Valor na posição x=$x e y=$y: $value\n";
    }
}

echo "\n\nArrays dinâmicos:\n";
foreach (range(1, 5) as $value) {
    echo "$value\n";
}
```

O exemplo acima produzirá:

```
Somente valor
Elemento atual de $array: 1.
Elemento atual de $array: 2.
Elemento atual de $array: 3.
Elemento atual de $array: 17.

Chave e valor:
Chave: um => Valor: 1
Chave: dois => Valor: 2
Chave: três => Valor: 3
Chave: dezessete => Valor: 17

Arrays chave-valor multidimensionais:
Valor na posição x=0 e y=0: a
Valor na posição x=1 e y=0: b
Valor na posição x=0 e y=1: y
Valor na posição x=1 e y=1: z

Arrays dinâmicos:
1
2
3
4
5
```

> **Nota**:
>
> `foreach` não suporta a capacidade de
> supressão de mensagens de erro usando o operador
> [`@`](language.operators.errorcontrol.md).

### Desempacotando arrays aninhados

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

É possível iterar sobre um array de arrays e desempacotar o array aninhado
em variáveis do laço usando
[desconstrução de array](language.types.array.md#language.types.array.syntax.destructuring)
através de `[]` ou usando a construção de linguagem [list()](function.list.md)
como o valor.
> **Nota**:
>
> Observe que a
> [desconstrução de array](language.types.array.md#language.types.array.syntax.destructuring)
> através de `[]` só é possível a partir do PHP 7.1.0.

Em ambos os exemplos a seguir, `$a` será definida para
o primeiro elemento do array aninhado e `$b`
conterá o segundo elemento:

```
<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as [$a, $b]) {
    echo "A: $a; B: $b\n";
}

foreach ($array as list($a, $b)) {
    echo "A: $a; B: $b\n";
}
```

O exemplo acima produzirá:

```
A: 1; B: 2
A: 3; B: 4
A: 1; B: 2
A: 3; B: 4
```

Ao fornecer menos variáveis que o número de elementos no array,
os elementos restantes serão ignorados.
Da mesma forma, elementos podem ser pulados usando uma vírgula:

```
<?php
$array = [
    [1, 2, 5],
    [3, 4, 6],
];

foreach ($array as [$a, $b]) {
    // Observe que não existe $c aqui.
    echo "$a $b\n";
}

foreach ($array as [, , $c]) {
    // Pulando $a e $b
    echo "$c\n";
}
```

O exemplo acima produzirá:

```
1 2
3 4
5
6
```

Um aviso será gerado se não houver elementos suficientes no array para o preenchimento
do construtor [list()](function.list.md):

```
<?php
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as [$a, $b, $c]) {
    echo "A: $a; B: $b; C: $c\n";
}
```

O exemplo acima produzirá:

```
Notice: Undefined offset: 2 in example.php on line 7
A: 1; B: 2; C:

Notice: Undefined offset: 2 in example.php on line 7
A: 3; B: 4; C:
```

### foreach e referências

É possível modificar elementos de array diretamente dentro de um laço, precedendo
`$value` com `&`.
Neste caso, o valor será atribuído por
[referência](language.references.md).

```
<?php
$arr = [1, 2, 3, 4];
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr agora é [2, 4, 6, 8]
var_dump($arr);
unset($value); // quebra a referência com o último elemento
```

O exemplo acima produzirá:

```
array(4) {
  [0]=>
  int(2)
  [1]=>
  int(4)
  [2]=>
  int(6)
  [3]=>
  &int(8)
}
```

**Aviso**

A referência ao `$value` do último elemento do array
permanece mesmo depois do laço `foreach`. É recomendado
destruir essas referências usando [unset()](function.unset.md).
Caso contrário, o comportamento a seguir irá ocorrer:

```
<?php
$arr = [1, 2, 3, 4];
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr agora é [2, 4, 6, 8]
var_dump($arr);

// sem um unset($value), $value ainda é uma referência ao último item: $arr[3]

echo "\nOutra repetição:\n";
foreach ($arr as $key => $value) {
    // $arr[3] será atualizado com cada valor de $arr...
    echo "{$key} => {$value}\n";
}
// ...até finalmente o penúltimo valor ser copiado no último valor
var_dump($arr);
```

O exemplo acima produzirá:

```
array(4) {
  [0]=>
  int(2)
  [1]=>
  int(4)
  [2]=>
  int(6)
  [3]=>
  &int(8)
}

Another loop:
0 => 2
1 => 4
2 => 6
3 => 6
array(4) {
  [0]=>
  int(2)
  [1]=>
  int(4)
  [2]=>
  int(6)
  [3]=>
  &int(6)
}
```

**Exemplo #2 Iterando valores de um array constante por referência**

```
<?php
foreach ([1, 2, 3, 4] as &$value) {
    $value = $value * 2;
    echo $value . "\n";
}
```

O exemplo acima produzirá:

```
2
4
6
8
```

### Veja também

- [array](language.types.array.md)
- [Traversable](class.traversable.md)
- [iterable](language.types.iterable.md)
- [list()](function.list.md)

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
