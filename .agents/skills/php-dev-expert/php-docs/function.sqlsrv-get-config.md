# Retorna o valor da configuração especificada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sqlsrv-get-config.php

---

# sqlsrv\_get\_config

(No version information available, might only be in Git)

sqlsrv\_get\_config — Retorna o valor da configuração especificada

### Descrição

function **sqlsrv\_get\_config**([string](language.types.string.md) `$setting`): [mixed](language.types.mixed.md)

Retorna o valor da configuração especificada.

### Parâmetros

`setting`
:   O nome da configuração para a qual o valor é retornado. Para uma lista de
    configurações configuráveis, consulte [sqlsrv\_configure()](function.sqlsrv-configure.md).

### Valor Retornado

Retorna o valor da configuração especificada. Se uma configuração inválida for especificada,
**`false`** é retornado.

### Veja também

- [sqlsrv\_configure()](function.sqlsrv-configure.md) - Altera as configurações de tratamento de erros e registro do driver

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
