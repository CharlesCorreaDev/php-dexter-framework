# Espaço Global

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.global.php

---

## Espaço Global

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Quando um namespace não é definido, todas as definições de classes e funções são
colocadas no espaço global, como era no PHP antes de os namespaces serem
suportados. Prefixar um nome com `\` especificará que
o nome é necessário no espaço global, mesmo no contexto do
namespace.

**Exemplo #1 Usando a especificação do espaço global**

```
<?php
namespace A\B\C;

/* Esta função é A\B\C\fopen */
function fopen() {
     /* ... */
     $f = \fopen(...); // chama a função fopen global
     return $f;
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
