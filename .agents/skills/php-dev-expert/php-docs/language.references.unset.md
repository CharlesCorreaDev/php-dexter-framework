# Destruindo referências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.references.unset.php

---

## Destruindo referências

Quando uma referência é quebrada, ela apenas para de fazer o apontamento entre
o nome da variável e o conteúdo. Mas isto não significa que
o conteúdo da variável é destruído. Por exemplo:

```
<?php

$a = 1;
$b =& $a;
unset ($a);
var_dump($a);
var_dump($b);
```

não apaga $b, apenas $a.

Novamente, é mais fácil pensar em analogia ao comando UNIX
**unlink**.

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
