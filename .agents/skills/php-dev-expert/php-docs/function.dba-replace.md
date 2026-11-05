# Substitui ou insere uma entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-replace.php

---

# dba\_replace

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_replace — Substitui ou insere uma entrada

### Descrição

function **dba\_replace**([string](language.types.string.md)|[array](language.types.array.md) `$key`, [string](language.types.string.md) `$value`, [Dba\Connection](class.dba-connection.md) `$dba`): [bool](language.types.boolean.md)

A função **dba\_replace()** substitui ou insere a entrada descrita
com a chave `key` e o valor `value` no
banco de dados especificado por `dba`.

### Parâmetros

`key`
:   A chave da entrada a ser substituída.

`value`
:   O valor a ser substituído.

`dba`
:   Uma instância de [Dba\Connection](class.dba-connection.md), retornada por [dba\_open()](function.dba-open.md) ou [dba\_popen()](function.dba-popen.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O parâmetro `dba` agora espera uma instância de[Dba\Connection](class.dba-connection.md); anteriormente, um [resource](language.types.resource.md) `dba` válido era esperado. |

### Veja também

- [dba\_exists()](function.dba-exists.md) - Verifica existência de uma chave
- [dba\_delete()](function.dba-delete.md) - Remove uma entrada DBA especificada por chave
- [dba\_fetch()](function.dba-fetch.md) - Busca dados especificados por chave
- [dba\_insert()](function.dba-insert.md) - Insere entrada

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
