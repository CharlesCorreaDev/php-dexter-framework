# Obtém o contexto da aplicação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.context.php

---

# GearmanClient::context

(PECL gearman >= 0.6.0)

GearmanClient::context — Obtém o contexto da aplicação

### Descrição

public function **GearmanClient::context**(): [string](language.types.string.md)

Obtém o contexto da aplicação definido anteriormente com [GearmanClient::setContext()](gearmanclient.setcontext.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A mesma estrutura de dados de contexto definida com [GearmanClient::setContext()](gearmanclient.setcontext.md).

### Veja também

- [GearmanClient::setContext()](gearmanclient.setcontext.md) - Define o contexto da aplicação

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
