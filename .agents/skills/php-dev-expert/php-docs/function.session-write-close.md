# Guarda os dados de sessão e fecha a sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-write-close.php

---

# session\_write\_close

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

session\_write\_close — Guarda os dados de sessão e fecha a sessão

### Descrição

function **session\_write\_close**(): [bool](language.types.boolean.md)

Fecha a sessão atual e guarda os dados.

Os dados de sessão geralmente são guardados depois que o script termina, sem a
necessidade de chamar **session\_write\_close()**; mas como
dados de sessão são travados para evitar escritas concorrentes, apenas um
script pode operar em uma sessão por vez. Ao usar iframe/framesets junto com sessões,
os frames serão lidos um a um devido à esta trava. Pode-se
reduzir o tempo necessário para carregar todos os frames fechando a sessão o
mais cedo possível, assim que todas as alterações na variável de sessão tiverem sido feitas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | O tipo de retorno desta função é [bool](language.types.boolean.md) agora. Anteriormente, era [void](language.types.void.md). |

### Veja também

- A [session\_register\_shutdown()](function.session-register-shutdown.md) - Função de finalização da sessão

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
