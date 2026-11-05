# Informa se a requisição foi despachada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-request-abstract.isdispatched.php

---

# Yaf\_Request\_Abstract::isDispatched

(Yaf >=1.0.0)

Yaf\_Request\_Abstract::isDispatched — Informa se a requisição foi despachada

### Descrição

public function **Yaf\_Request\_Abstract::isDispatched**(): [bool](language.types.boolean.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um booleano.

### Veja também

- [Yaf\_Dispatcher::dispatch()](yaf-dispatcher.dispatch.md) - Despacha uma requisição

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
