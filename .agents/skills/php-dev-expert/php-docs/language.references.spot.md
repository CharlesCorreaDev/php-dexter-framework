# Demonstrando referências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.references.spot.php

---

## Demonstrando referências

Vários construtores sintáticos do PHP são implementados através de mecanismos
de referência, assim, tudo o explicado até aqui sobre referências também
se aplica a esses construtores. Alguns desses construtores, como a passagem e o
retorno de referências foram mencionados acima. Outros construtores que
também utilizam referências são:

### Referências globais

Quando uma variável é declarada como **global $var**,
de fato uma referência está sendo criada para a variável global. Isto significa que
isto é o mesmo que:

```
<?php
$var =& $GLOBALS["var"];
```

O que significa também que destruir $var
não apaga a variável global.

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
