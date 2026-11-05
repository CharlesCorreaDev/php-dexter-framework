# Renderiza e exibe um modelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-interface.display.php

---

# Yaf\_View\_Interface::display

(Yaf >=1.0.0)

Yaf\_View\_Interface::display — Renderiza e exibe um modelo

### Descrição

abstract public function **Yaf\_View\_Interface::display**([string](language.types.string.md) `$tpl`, [array](language.types.array.md) `$tpl_vars` = ?): [bool](language.types.boolean.md)

Renderiza um modelo e exibe o resultado imediatamente.

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
