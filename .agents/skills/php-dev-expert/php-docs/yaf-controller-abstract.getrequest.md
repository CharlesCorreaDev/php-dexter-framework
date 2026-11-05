# Obtém o objeto da requisição atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-controller-abstract.getrequest.php

---

# Yaf\_Controller\_Abstract::getRequest

(Yaf >=1.0.0)

Yaf\_Controller\_Abstract::getRequest — Obtém o objeto da requisição atual

### Descrição

public function **Yaf\_Controller\_Abstract::getRequest**(): [Yaf\_Request\_Abstract](class.yaf-request-abstract.md)

Obtém o objeto da requisição atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Instância de [Yaf\_Request\_Abstract](class.yaf-request-abstract.md).

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
