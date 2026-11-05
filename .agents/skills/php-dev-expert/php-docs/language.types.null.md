# NULL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.null.php

---

## NULL

O tipo [null](language.types.null.md) é um tipo unitário do PHP, ou seja, possui apenas um valor:
**`null`**.

Variáveis indefinidas e com definição removida por [unset()](function.unset.md) serão interpretadas como
**`null`**.

### Sintaxe

Há apenas um valor do tipo [null](language.types.null.md), que é a
a constante **`null`**, insensível a maiúsculas/minúsculas.

```
<?php
$var = NULL;
?>
```

### Convertendo para **`null`**

**Aviso**

Este recurso foi
*DESCONTINUADO* a partir do PHP 7.2.0 e foi *REMOVIDO* a partir do PHP 8.0.0. O uso deste recurso
é fortemente desencorajado.

Converter uma variável para [null](language.types.null.md) utilizando `(unset) $var`
*não* removerá nem a variável nem o seu valor.
Apenas retornará um valor **`null`**.

### Veja também

- [is\_null()](function.is-null.md)
- [unset()](function.unset.md)

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
