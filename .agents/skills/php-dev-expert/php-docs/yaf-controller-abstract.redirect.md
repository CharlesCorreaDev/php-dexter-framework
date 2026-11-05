# Redireciona para um URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-controller-abstract.redirect.php

---

# Yaf\_Controller\_Abstract::redirect

(Yaf >=1.0.0)

Yaf\_Controller\_Abstract::redirect — Redireciona para um URL

### Descrição

public function **Yaf\_Controller\_Abstract::redirect**([string](language.types.string.md) `$url`): [bool](language.types.boolean.md)

Redireciona para um URL enviando um cabeçalho 302.

### Parâmetros

`url`
:   Uma localização URL.

### Valor Retornado

Retorna um booleano.

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
