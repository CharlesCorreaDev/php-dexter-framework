# while

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.while.php

---

## while

(PHP 4, PHP 5, PHP 7, PHP 8)

Laços `while` são os mais simples tipos de laços do
PHP. Possui comportamento semelhante ao C. O formato básico de uma
declaração `while` é:

```
while (expr)
    statement
```

O propósito da declaração `while` é simples. Ele
dirá ao PHP para executar as declarações aninhadas repetidamente, enquanto
a expressão do `while` for avaliada como
**`true`**. O valor da expressão é checado a
cada vez que o laço é iniciado, então, mesmo seu valor
mude durante a execução das declarações aninhadas, a execução
não será interrompida até o final da iteração (cada vez que o PHP executa
as declarações dentro do laço é uma iteração). Se a
expressão do `while` for avaliada como
**`false`** desde o início, as declarações
aninhadas não serão executadas nenhuma vez.

Similar a declaração `if`, pode-se agrupar
múltiplas declarações no mesmo laço `while`
delimitando o grupo de declarações por chaves, ou
utilizando a sintaxe alternativa:

```
while (expr):
    statement
    ...
endwhile;
```

Os exemplos a seguir são idênticos, e ambos imprimem os números de
1 a 10.

```
<?php
$i = 1;
while ($i <= 10) {
    echo $i++ . "\n";  /* o valor exibido seria
                          $i antes do incremento
                          (incrementa depois) */
}
```

O exemplo acima produzirá:

```
1
2
3
4
5
6
7
8
9
10
```

```
<?php
$i = 1;
while ($i <= 10):
    echo $i . "\n";
    $i++;
endwhile;
```

O exemplo acima produzirá:

```
1
2
3
4
5
6
7
8
9
10
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
