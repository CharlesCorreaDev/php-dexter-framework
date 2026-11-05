# Define um parâmetro de chamada para uma solicitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.setparam.php

---

# Yaf\_Request\_Abstract::setParam

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::setParam — Define um parâmetro de chamada para uma solicitação

### Descrição

public function **Yaf\_Request\_Abstract::setParam**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value` = ?): [bool](language.types.boolean.md)

Define um parâmetro para uma solicitação, que pode ser recuperado por [Yaf\_Request\_Abstract::getParam()](yaf-request-abstract.getparam.md)

### Parâmetros

`name`

`value`

### Valor Retornado

### Veja também

- [Yaf\_Request\_Abstract::getParam()](yaf-request-abstract.getparam.md) - Obtém o parâmetro da chamada
- [Yaf\_Request\_Abstract::getParams()](yaf-request-abstract.getparams.md) - Obtém todos os parâmetros de chamada

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
