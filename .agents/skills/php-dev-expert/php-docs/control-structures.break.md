# break

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.break.php

---

## break

(PHP 4, PHP 5, PHP 7, PHP 8)

`break` finaliza a execução da estrutura
`for`, `foreach`,
`while`, `do-while` ou
`switch` atual.

`break` aceita um argumento numérico opcional
que diz quantas estruturas aninhadas deverão
ser interrompidas. O valor padrão é `1`, somente
a estrutura imediata é interrompida.

```
<?php
$arr = array('um', 'dois', 'três', 'quatro', 'pare', 'cinco');
foreach ($arr as $val) {
    if ($val == 'pare') {
        break;    /* Pode-se também usar 'break 1;' aqui. */
    }
    echo "$val\n";
}
```

O exemplo acima produzirá:

```
um
dois
três
quatro
```

Usando o argumento opcional:

```
<?php
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "No 5\n";
            break 1;  /* Sai apenas do switch. */
        case 10:
            echo "No 10; saindo\n";
            break 2;  /* Sai do switch e do while. */
        default:
            break;
    }
    echo "$i\n";
}
```

O exemplo acima produzirá:

```
1
2
3
4
No 5
5
6
7
8
9
No 10; saindo
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
