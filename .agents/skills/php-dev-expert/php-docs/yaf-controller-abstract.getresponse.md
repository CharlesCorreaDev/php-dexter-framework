# Obtém o objeto da resposta atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-controller-abstract.getresponse.php

---

# Yaf\_Controller\_Abstract::getResponse

(Yaf >=1.0.0)

Yaf\_Controller\_Abstract::getResponse — Obtém o objeto da resposta atual

### Descrição

public function **Yaf\_Controller\_Abstract::getResponse**(): [Yaf\_Response\_Abstract](class.yaf-response-abstract.md)

Obtém o objeto da resposta atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Instância de [Yaf\_Response\_Abstract](class.yaf-response-abstract.md).

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
