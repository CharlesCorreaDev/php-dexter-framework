# Obtém o objeto controlador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-action-abstract.getcontroller.php

---

# Yaf\_Action\_Abstract::getController

(Yaf >=1.0.0)

Yaf\_Action\_Abstract::getController — Obtém o objeto controlador

### Descrição

publicfunction **Yaf\_Action\_Abstract::getController**(): [Yaf\_Controller\_Abstract](class.yaf-controller-abstract.md)

Obtém o objeto controlador atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância de [Yaf\_Controller\_Abstract](class.yaf-controller-abstract.md).

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
