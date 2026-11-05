# Busca a próxima chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dba-nextkey.php

---

# dba\_nextkey

(PHP 4, PHP 5, PHP 7, PHP 8)

dba\_nextkey — Busca a próxima chave

### Descrição

function **dba\_nextkey**([Dba\Connection](class.dba-connection.md) `$dba`): [string](language.types.string.md)|[false](language.types.singleton.md)

**dba\_nextkey()** retorna a próxima chave do banco de dados
e avança o ponteiro interno de chaves.

### Parâmetros

`dba`
:   Uma instância de [Dba\Connection](class.dba-connection.md), retornada por [dba\_open()](function.dba-open.md) ou [dba\_popen()](function.dba-popen.md).

### Valor Retornado

Retorna a chave em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | O parâmetro `dba` agora espera uma instância de[Dba\Connection](class.dba-connection.md); anteriormente, um [resource](language.types.resource.md) `dba` válido era esperado. |

### Veja também

- [dba\_firstkey()](function.dba-firstkey.md) - Busca a primeira chave
- [dba\_key\_split()](function.dba-key-split.md) - Divide uma chave em representação string para uma representação array
- Exemplo 2 nos [exemplos DBA](dba.examples.md)

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
