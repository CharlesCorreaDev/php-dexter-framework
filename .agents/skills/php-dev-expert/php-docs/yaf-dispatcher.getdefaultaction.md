# Obtém o nome da ação padrão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.getdefaultaction.php

---

# Yaf\_Dispatcher::getDefaultAction

(Yaf >=3.2.0)

Yaf\_Dispatcher::getDefaultAction — Obtém o nome da ação padrão

### Descrição

public function **Yaf\_Dispatcher::getDefaultAction**(): [string](language.types.string.md)

Obtém o nome da ação padrão

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma [string](language.types.string.md) contendo o nome da ação, o padrão é "index".

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
