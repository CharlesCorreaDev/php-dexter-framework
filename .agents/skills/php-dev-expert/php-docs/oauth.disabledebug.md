# Desativa a depuração detalhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.disabledebug.php

---

# OAuth::disableDebug

(PECL OAuth >= 0.99.3)

OAuth::disableDebug — Desativa a depuração detalhada

### Descrição

public function **OAuth::disableDebug**(): [bool](language.types.boolean.md)

Desativa a informação detalhada da requisição (desligada por padrão).
Alternativamente, a propriedade [debug](class.oauth.md#oauth.props.debug) pode ser
definida para **`false`** para desligar a depuração.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`**

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 0.99.8 | A propriedade [debug](class.oauth.md#oauth.props.debug) foi adicionada. |

### Veja também

- [OAuth::enableDebug()](oauth.enabledebug.md) - Ativa a depuração detalhada

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
