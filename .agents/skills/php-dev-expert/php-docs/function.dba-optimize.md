# Otimiza o banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-optimize.php

---

# dba\_optimize

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_optimize — Otimiza o banco de dados

### Descrição

function **dba\_optimize**([Dba\Connection](class.dba-connection.md) `$dba`): [bool](language.types.boolean.md)

**dba\_optimize()** otimiza o banco de dados subjacente.

### Parâmetros

`dba`
:   Uma instância de [Dba\Connection](class.dba-connection.md), retornada por [dba\_open()](function.dba-open.md) ou [dba\_popen()](function.dba-popen.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O parâmetro `dba` agora espera uma instância de[Dba\Connection](class.dba-connection.md); anteriormente, um [resource](language.types.resource.md) `dba` válido era esperado. |

### Veja também

- [dba\_sync()](function.dba-sync.md) - Sincroniza o banco de dados

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
