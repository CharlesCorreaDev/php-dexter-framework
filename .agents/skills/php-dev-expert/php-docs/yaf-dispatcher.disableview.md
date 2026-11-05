# Desativa a renderização de visualização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-dispatcher.disableview.php

---

# Yaf\_Dispatcher::disableView

(Yaf >=1.0.0)

Yaf\_Dispatcher::disableView — Desativa a renderização de visualização

### Descrição

public function **Yaf\_Dispatcher::disableView**(): [bool](language.types.boolean.md)

Desativa o mecanismo de visualização, usado em alguns aplicativos em que o próprio usuário gerará a saída.
> **Nota**:
>
> Pode-se simplesmente retornar **`false`** em uma ação para evitar a renderização automática
> dessa ação.

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
