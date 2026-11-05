# Desativa verificações SSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.disablesslchecks.php

---

# OAuth::disableSSLChecks

(PECL OAuth >= 0.99.5)

OAuth::disableSSLChecks — Desativa verificações SSL

### Descrição

public function **OAuth::disableSSLChecks**(): [bool](language.types.boolean.md)

Desativa as verificação usuais de certificado e servidor SSL,
não é para se usado em ambiente de produção. Alternativamente, a
propriedade `sslChecks` pode ser definida para **`false`**
para desativar as verificações SSL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`**

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 0.99.8 | A propriedade `sslChecks` foi adicionada. |

### Veja também

- [OAuth::enableSSLChecks()](oauth.enablesslchecks.md) - Ativa verificações SSL

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
