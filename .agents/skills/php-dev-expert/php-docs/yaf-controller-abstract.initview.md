# initView

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-controller-abstract.initview.php

---

# Yaf\_Controller\_Abstract::initView

(Yaf >=1.0.0)

Yaf\_Controller\_Abstract::initView — initView

### Descrição

public function **Yaf\_Controller\_Abstract::initView**([array](language.types.array.md) `$options` = ?): [void](language.types.void.md)

### Parâmetros

`options`

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
