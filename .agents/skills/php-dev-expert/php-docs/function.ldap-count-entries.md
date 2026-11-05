# Conta o número de entradas em uma pesquisa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-count-entries.php

---

# ldap\_count\_entries

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_count\_entries — Conta o número de entradas em uma pesquisa

### Descrição

function **ldap\_count\_entries**([LDAP\Connection](class.ldap-connection.md) `$ldap`, [LDAP\Result](class.ldap-result.md) `$result`): [int](language.types.integer.md)

Retorna o número de entradas armazenadas no resultado das operações de pesquisa
anteriores.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`result`
:   Uma instância de [LDAP\Result](class.ldap-result.md), retornada por [ldap\_list()](function.ldap-list.md) ou [ldap\_search()](function.ldap-search.md).

### Valor Retornado

Retorna o número de entradas no resultado ou `-1` em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.1.0 | O parâmetro `result` agora espera uma instância de [LDAP\Result](class.ldap-result.md); anteriormente, um [resource](language.types.resource.md) `ldap result` válido era esperado. |

### Examples

**Exemplo #1 Exemplo de **ldap\_count\_entries()****

Obtém o número de entradas no resultado.

```
// $ds é uma instância válida de LDAP\Connection para um servidor de diretório

     $dn        = 'ou=example,dc=org';
     $filter    = '(|(sn=Doe*)(givenname=John*))';
     $justthese = array('ou', 'sn', 'givenname', 'mail');

     $sr = ldap_search($ds, $dn, $filter, $justthese);

     var_dump(ldap_count_entries($ds, $sr));
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
```

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
