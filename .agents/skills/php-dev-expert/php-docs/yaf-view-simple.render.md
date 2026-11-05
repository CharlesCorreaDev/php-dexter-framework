# Renderiza o modelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-simple.render.php

---

# Yaf\_View\_Simple::render

(Yaf >=1.0.0)

Yaf\_View\_Simple::render — Renderiza o modelo

### Descrição

public function **Yaf\_View\_Simple::render**([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$tpl_vars` = ?): [string](language.types.string.md)

Renderiza o modelo e retorna o resultado.

### Parâmetros

`tpl`

`tpl_vars`

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
