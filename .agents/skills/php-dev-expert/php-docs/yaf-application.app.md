# Obtém uma instância da aplicação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-application.app.php

---

# Yaf\_Application::app

(Yaf >=1.0.0)

Yaf\_Application::app — Obtém uma instância da aplicação

### Descrição

public static function **Yaf\_Application::app**(): [mixed](language.types.mixed.md)

Obtém a instância de [Yaf\_Application](class.yaf-application.md).
Alternativamente, pode ser usado o método
[Yaf\_Dispatcher::getApplication()](yaf-dispatcher.getapplication.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma instância de Yaf\_Application. Se nenhuma Yaf\_Application foi inicializada anteriormente,
retorna **`null`**.

### Veja também

- [Yaf\_Dispatcher::getApplication()](yaf-dispatcher.getapplication.md) - Obtém a aplicação

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
