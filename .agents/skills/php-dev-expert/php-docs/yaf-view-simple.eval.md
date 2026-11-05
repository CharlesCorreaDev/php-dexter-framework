# Renderiza o modelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-view-simple.eval.php

---

# Yaf\_View\_Simple::eval

(Yaf >=2.2.0)

Yaf\_View\_Simple::eval — Renderiza o modelo

### Descrição

public function **Yaf\_View\_Simple::eval**([string](language.types.string.md) `$tpl_content`, [array](language.types.array.md) `$tpl_vars` = ?): [string](language.types.string.md)

Renderiza uma string de modelo e retorna o resultado.

### Parâmetros

`tpl_content`
:   String contendo o modelo.

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
