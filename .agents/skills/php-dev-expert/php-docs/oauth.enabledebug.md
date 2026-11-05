# Ativa a depuração detalhada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/oauth.enabledebug.php

---

# OAuth::enableDebug

(PECL OAuth >= 0.99.3)

OAuth::enableDebug — Ativa a depuração detalhada

### Descrição

public function **OAuth::enableDebug**(): [bool](language.types.boolean.md)

Ativa a informação de requisição detalhada, útil para depuração.
A informação de depuração é armazenada no membro `debugInfo`.
Alternativamente, o membro `debug` pode
ser definido para um valor não-**`false`** para ativar a depuração.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`**

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL oauth 0.99.8 | Os membros `debug` e `debugInfo` foram adicionados. |

### Veja também

- [OAuth::disableDebug()](oauth.disabledebug.md) - Desativa a depuração detalhada

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
