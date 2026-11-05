# Sincroniza o banco de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-sync.php

---

# dba\_sync

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_sync — Sincroniza o banco de dados

### Descrição

function **dba\_sync**([Dba\Connection](class.dba-connection.md) `$dba`): [bool](language.types.boolean.md)

A função **dba\_sync()** sincroniza o banco de dados. Isto provavelmente
irá disparar uma escrita física no disco, caso suportado.

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

- [dba\_optimize()](function.dba-optimize.md) - Otimiza o banco de dados

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
