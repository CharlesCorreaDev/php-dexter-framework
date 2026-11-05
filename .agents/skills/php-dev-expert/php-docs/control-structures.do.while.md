# do-while

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.do.while.php

---

## do-while

(PHP 4, PHP 5, PHP 7, PHP 8)

Os laços `do-while` são muito similares aos laços
`while`, com exceção que a expressão de avaliação é
verificada ao final de cada iteração em vez de no começo.
A maior diferença para o laço `while` é
que a primeira iteração do laço `do-while`
sempre é executada (a expressão de avaliação é executada somente no final
da iteração), considerando que no laço `while` não é
necessariamente executada (a expressão de avaliação é
executada no começo de cada iteração; se avaliada como
**`false`** logo no começo, a execução do laço
será abortada imediatamente).

Só há uma sintaxe para o laço `do-while`:

```
<?php
$i = 0;
do {
    echo $i;
} while ($i > 0);
```

O exemplo acima produzirá:

```
0
```

O laço acima será executado somente uma vez, pois após a primeira
iteração, quando a expressão verdade for verificada, resultará em
**`false`** ($i não é maior que 0) e a execução do laço
será encerrada.

Usuários avançados de C devem estar familiarizados com um uso diferente do laço
`do-while`, que permite parar a execução no meio
do bloco de códigos, encapsulando-os em um
`do-while` (0), e usando o [`break`](control-structures.break.md).
O código a seguir demonstra isso:

```
<?php
$i = 50;
$factor = 0.5;
$minimum_limit = 20;
do {
    if ($i < 5) {
        echo "i não é grande o suficiente\n";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        echo "i é menor que o limite mínimo após fatoração\n";
        break;
    }
    echo $i . " está ok\n";

    /* processa i */

} while (0);
```

O exemplo acima produzirá:

```
25 está ok
```

É possível usar o
[`goto`](control-structures.goto.md)
ao invés desse truque.

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
