# Renderiza o modelo de visualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-controller-abstract.render.php

---

# Yaf\_Controller\_Abstract::render

(Yaf >=1.0.0)

Yaf\_Controller\_Abstract::render — Renderiza o modelo de visualização

### Descrição

protected function **Yaf\_Controller\_Abstract::render**([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$parameters` = ?): [string](language.types.string.md)

### Parâmetros

`tpl`

`parameters`

### Valor Retornado

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
