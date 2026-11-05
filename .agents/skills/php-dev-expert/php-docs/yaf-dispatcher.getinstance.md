# Obtém a instância do despachante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.getinstance.php

---

# Yaf\_Dispatcher::getInstance

(Yaf >=1.0.0)

Yaf\_Dispatcher::getInstance — Obtém a instância do despachante

### Descrição

public static function **Yaf\_Dispatcher::getInstance**(): [Yaf\_Dispatcher](class.yaf-dispatcher.md)

### Parâmetros

Esta função não possui parâmetros.

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
