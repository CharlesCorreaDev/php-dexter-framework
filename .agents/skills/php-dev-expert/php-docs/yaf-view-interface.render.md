# Renderiza um modelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-interface.render.php

---

# Yaf\_View\_Interface::render

(Yaf >=1.0.0)

Yaf\_View\_Interface::render — Renderiza um modelo

### Descrição

abstract public function **Yaf\_View\_Interface::render**([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$tpl_vars` = ?): [string](language.types.string.md)

Renderiza um modelo e retorna o resultado.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

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
