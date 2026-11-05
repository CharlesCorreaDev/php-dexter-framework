# Obtém a aplicação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.getapplication.php

---

# Yaf\_Dispatcher::getApplication

(Yaf >=1.0.0)

Yaf\_Dispatcher::getApplication — Obtém a aplicação

### Descrição

public function **Yaf\_Dispatcher::getApplication**(): [Yaf\_Application](class.yaf-application.md)

Obtém a instância de [Yaf\_Application](class.yaf-application.md). O mesmo que
[Yaf\_Application::app()](yaf-application.app.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

### Veja também

- [Yaf\_Application::app()](yaf-application.app.md) - Obtém uma instância da aplicação

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
