# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmp.examples.php

---

# Examples

**Exemplo #1 Função fatorial usando GMP**

```
<?php
function fact($x)
{
    $return = 1;
    for ($i=2; $i <= $x; $i++) {
        $return = gmp_mul($return, $i);
    }
    return $return;
}

echo gmp_strval(fact(1000)) . "\n";
?>
```

Este código irá calcular o fatorial de 1000 (um número grande)
de forma muito rápida.

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
