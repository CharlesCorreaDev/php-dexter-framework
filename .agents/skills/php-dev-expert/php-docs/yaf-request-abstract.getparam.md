# Obtém o parâmetro da chamada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.getparam.php

---

# Yaf\_Request\_Abstract::getParam

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::getParam — Obtém o parâmetro da chamada

### Descrição

public function **Yaf\_Request\_Abstract::getParam**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$default` = ?): [mixed](language.types.mixed.md)

### Parâmetros

`name`

`default`

### Valor Retornado

### Veja também

- [Yaf\_Request\_Abstract::setParam()](yaf-request-abstract.setparam.md) - Define um parâmetro de chamada para uma solicitação

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
