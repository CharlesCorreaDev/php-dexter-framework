# for

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.for.php

---

## for

(PHP 4, PHP 5, PHP 7, PHP 8)

Os laços `for` são os mais complexos no PHP.
Possui comportamento semelhante ao C. A sintaxe do laço
`for` é:

```
for (expr1; expr2; expr3)
    statement
```

A primeira expressão (expr1) é
avaliada (executada), uma vez, incondicionalmente, no início
do laço.

No começo de cada iteração a
expr2 é avaliada. Se a avaliada como
**`true`**, o laço continuará e as instruções aninhadas
serão executadas. Se avaliada como
**`false`**, a execução do laço terminará.

No final de cada iteração, a expr3 é
avaliada (executada).

Cada uma das expressões podem ser vazias ou conter múltiplas
expressões separadas por vírgulas. Na expr2, todas
as expressões separadas por vírgula são avaliadas mas o resultado é
obtido da última parte.
Se a expr2 estiver vazia significa que o laço deve
ser executado indefinidamente (O PHP considera implicitamente como
**`true`**, igual ao C). Isto não é inútil
como se imagina, pois muitas vezes deseja-se interromper o laço utilizando
a instrução [`break`](control-structures.break.md)
ao invés de usar a expressão verdade do
`for`.

Analise os seguintes exemplos. Todos exibem números
de 1 até 10:

```
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
```

O exemplo acima produzirá:

```
1 2 3 4 5 6 7 8 9 10
```

```
<?php
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i . " ";
}
```

O exemplo acima produzirá:

```
1 2 3 4 5 6 7 8 9 10
```

```
<?php
$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i . " ";
    $i++;
}
```

O exemplo acima produzirá:

```
1 2 3 4 5 6 7 8 9 10
```

```
<?php
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i . " ", $i++);
```

O exemplo acima produzirá:

```
1 2 3 4 5 6 7 8 9 10
```

É claro que o primeiro exemplo aparenta ser o mais simpático (ou
talvez o quarto), mas pode-se achar que o uso de expressões
vazias no laço `for`, seja vantajoso em algumas
ocasiões.

O PHP também suporta a sintaxe alternativa "dois pontos" para o
laço `for`.

```
for (expr1; expr2; expr3):
    statement
    ...
endfor;
```

É comum, para muitos usuários, iterar em arrays como no
exemplo abaixo.

```
<?php
/*
 * Este é um array com alguns dados que devem ser modificados
 * durante a execução do loop for.
 */
$pessoas = array(
    array('nome' => 'Lucas', 'salt' => 856412),
    array('nome' => 'Marina', 'salt' => 215863)
);

for($i = 0; $i < count($pessoas); ++$i) {
    $pessoas[$i]['salt'] = random_int(100000, 999999);
}
var_dump($people);
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  [0]=>
  array(2) {
    ["name"]=>
    string(5) "Lucas"
    ["salt"]=>
    int(454478)
  }
  [1]=>
  array(2) {
    ["name"]=>
    string(6) "Marina"
    ["salt"]=>
    int(776978)
  }
}
```

O código acima pode se tornar lento, pois o tamanho do array será calculado
a cada iteração. Desde que o tamanho nunca mude, o laço pode ser facilmente
otimizado usando uma variável intermediária para armazenar o tamanho em vez
de executar repetidamente o [count()](function.count.md):

```
<?php
$pessoas = array(
    array('nome' => 'Lucas', 'salt' => 856412),
    array('nome' => 'Marina', 'salt' => 215863)
);

for($i = 0, $tamanho = count($pessoas); $i < $tamanho; ++$i) {
    $pessoas[$i]['salt'] = random_int(100000, 999999);
}
var_dump($people);
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  [0]=>
  array(2) {
    ["name"]=>
    string(5) "Lucas"
    ["salt"]=>
    int(454478)
  }
  [1]=>
  array(2) {
    ["name"]=>
    string(6) "Marina"
    ["salt"]=>
    int(776978)
  }
}
```

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
