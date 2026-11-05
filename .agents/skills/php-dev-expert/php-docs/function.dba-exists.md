# Verifica existência de uma chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-exists.php

---

# dba\_exists

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_exists — Verifica existência de uma chave

### Descrição

function **dba\_exists**([string](language.types.string.md)|[array](language.types.array.md) `$key`, [Dba\Connection](class.dba-connection.md) `$dba`): [bool](language.types.boolean.md)

**dba\_exists()** verifica se a chave especificada em
`key` existe no banco de dados.

### Parâmetros

`key`
:   A chave para a qual a verificação é realizada.

`dba`
:   Uma instância de [Dba\Connection](class.dba-connection.md), retornada por [dba\_open()](function.dba-open.md) ou [dba\_popen()](function.dba-popen.md).

### Valor Retornado

Retorna **`true`** se a chave existir, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O parâmetro `dba` agora espera uma instância de[Dba\Connection](class.dba-connection.md); anteriormente, um [resource](language.types.resource.md) `dba` válido era esperado. |

### Veja também

- [dba\_delete()](function.dba-delete.md) - Remove uma entrada DBA especificada por chave
- [dba\_fetch()](function.dba-fetch.md) - Busca dados especificados por chave
- [dba\_insert()](function.dba-insert.md) - Insere entrada
- [dba\_replace()](function.dba-replace.md) - Substitui ou insere uma entrada

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
