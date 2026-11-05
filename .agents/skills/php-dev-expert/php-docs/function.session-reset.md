# Reinicializa um array de sessão com os valores originais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-reset.php

---

# session\_reset

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

session\_reset — Reinicializa um array de sessão com os valores originais

### Descrição

function **session\_reset**(): [bool](language.types.boolean.md)

**session\_reset()** reinicializa uma sessão com
os valores originais salvos no armazenamento de sessão. Esta função requer uma sessão ativa e
descarta as alterações em $\_SESSION.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | O tipo de retorno desta função é [bool](language.types.boolean.md) agora. Anteriormente, era [void](language.types.void.md). |

### Veja também

- [$\_SESSION](reserved.variables.session.md)
- A diretiva de
  configuração [session.auto\_start](session.configuration.md#ini.session.auto-start)
- [session\_start()](function.session-start.md) - Inicia uma nova sessão ou continua uma sessão existente
- [session\_abort()](function.session-abort.md) - Descarta as alterações no array da sessão e encerra a sessão
- [session\_commit()](function.session-commit.md) - Sinônimo de session\_write\_close

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
