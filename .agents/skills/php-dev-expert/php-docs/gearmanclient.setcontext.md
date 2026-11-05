# Define o contexto da aplicação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.setcontext.php

---

# GearmanClient::setContext

(PECL gearman >= 0.6.0)

GearmanClient::setContext — Define o contexto da aplicação

### Descrição

public function **GearmanClient::setContext**([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Define uma string arbitrária para fornecer contexto de aplicativo que pode
ser recuperado posteriormente por [GearmanClient::context()](gearmanclient.context.md).

### Parâmetros

`data`
:   Dados de contexto arbitrários

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [GearmanClient::context()](gearmanclient.context.md) - Obtém o contexto da aplicação

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
