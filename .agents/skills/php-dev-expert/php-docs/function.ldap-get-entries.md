# Obtém todas as entradas do resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-get-entries.php

---

# ldap\_get\_entries

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_get\_entries — Obtém todas as entradas do resultado

### Descrição

function **ldap\_get\_entries**([LDAP\Connection](class.ldap-connection.md) `$ldap`, [LDAP\Result](class.ldap-result.md) `$result`): [array](language.types.array.md)|[false](language.types.singleton.md)

Lê múltiplas entradas do resultado fornecido, junto com seus
atributos e múltiplos valores.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`result`
:   Uma instância de [LDAP\Result](class.ldap-result.md), retornada por [ldap\_list()](function.ldap-list.md) ou [ldap\_search()](function.ldap-search.md).

### Valor Retornado

Retorna uma informação completa do resultado em um array multi-dimensional
em caso de sucesso, ou **`false`** em caso de falha.

A estrutura do array é a seguinte.
O índice do atributo é convertido para minúsculas. (Atributos são insensíveis
a maiúsculas/minúsculas para servidores de diretório, mas não quando usadas como
índices de array.)

```
return_value["count"] = número de entradas no resultado
return_value[0] : refere aos detalhes da primeira entrada

return_value[i]["dn"] =  DN da (i+1)-ésima entrada no resultado

return_value[i]["count"] = número de atributos na (i+1)-ésima entrada
return_value[i][j] = NOME do (j+1)-ésimo atributo na (i+1)-ésima entrada no resultado

return_value[i]["attribute"]["count"] = número de valores para o
                                        atributo na (i+1)-ésima entrada
return_value[i]["attribute"][j] = (j+1)-ésimo valor do atributo na (i+1)-ésima entrada
```

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) `ldap result` válido era esperado. |

### Veja também

- [ldap\_first\_entry()](function.ldap-first-entry.md) - Retorna o ID do primeiro resultado
- [ldap\_next\_entry()](function.ldap-next-entry.md) - Obtém a próxima entrada do resultado

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
