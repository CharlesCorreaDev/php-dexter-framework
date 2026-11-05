# Descarta as alterações no array da sessão e encerra a sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-abort.php

---

# session\_abort

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

session\_abort — Descarta as alterações no array da sessão e encerra a sessão

### Descrição

function **session\_abort**(): [bool](language.types.boolean.md)

**session\_abort()** encerra a sessão sem salvar
dados. Consequentemente, os valores originais da sessão são mantidos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | O tipo de retorno dessa função agora é [bool](language.types.boolean.md). Antigamente, era [void](language.types.void.md). |

### Veja também

- [$\_SESSION](reserved.variables.session.md)
- Diretiva de
  configuração [session.auto\_start](session.configuration.md#ini.session.auto-start)
- [session\_start()](function.session-start.md) - Inicia uma nova sessão ou continua uma sessão existente
- [session\_reset()](function.session-reset.md) - Reinicializa um array de sessão com os valores originais
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
