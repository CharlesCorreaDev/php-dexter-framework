# Fecha um banco de dados DBA

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-close.php

---

# dba\_close

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_close — Fecha um banco de dados DBA

### Descrição

function **dba\_close**([Dba\Connection](class.dba-connection.md) `$dba`): [void](language.types.void.md)

**dba\_close()** fecha o banco de dados e libera
todos os recursos do identificador de banco de dados especificado.

### Parâmetros

`dba`
:   Uma instância de [Dba\Connection](class.dba-connection.md), retornada por [dba\_open()](function.dba-open.md) ou [dba\_popen()](function.dba-popen.md).

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O parâmetro `dba` agora espera uma instância de[Dba\Connection](class.dba-connection.md); anteriormente, um [resource](language.types.resource.md) `dba` válido era esperado. |

### Veja também

- [dba\_open()](function.dba-open.md) - Abre um banco de dados
- [dba\_popen()](function.dba-popen.md) - Abre o banco de dados de forma persistente

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
