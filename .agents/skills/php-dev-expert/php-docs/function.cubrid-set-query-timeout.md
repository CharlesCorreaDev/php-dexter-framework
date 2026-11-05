# Define o tempo limite de execução de consulta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-set-query-timeout.php

---

# cubrid\_set\_query\_timeout

(PECL CUBRID >= 8.4.1)

cubrid\_set\_query\_timeout — Define o tempo limite de execução de consulta

### Descrição

function **cubrid\_set\_query\_timeout**([resource](language.types.resource.md) `$req_identifier`, [int](language.types.integer.md) `$timeout`): [bool](language.types.boolean.md)

A função **cubrid\_set\_query\_timeout()** é usada para definir
o tempo limite de execução de consulta.

### Parâmetros

`req_identifier`
:   Identificador da requisição.

`timeout`
:   Tempo limite em milissegundos.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [cubrid\_get\_query\_timeout()](function.cubrid-get-query-timeout.md) - Obtém o tempo limite de consulta para a requisição

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
