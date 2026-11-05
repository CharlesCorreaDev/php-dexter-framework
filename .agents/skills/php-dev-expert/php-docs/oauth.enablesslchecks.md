# Ativa verificações SSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.enablesslchecks.php

---

# OAuth::enableSSLChecks

(PECL OAuth >= 0.99.5)

OAuth::enableSSLChecks — Ativa verificações SSL

### Descrição

public function **OAuth::enableSSLChecks**(): [bool](language.types.boolean.md)

Ativa as verificações usuais de certificado e servidor SSL (habilitadas por padrão).
Alternativamente, a propriedade [sslChecks](class.oauth.md#oauth.props.sslchecks) pode ser definida para um
valor não-**`false`** para ativar as verificações SSL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`**

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 0.99.8 | A propriedade `sslChecks` foi adicionada. |

### Veja também

- [OAuth::disableSSLChecks()](oauth.disablesslchecks.md) - Desativa verificações SSL

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
