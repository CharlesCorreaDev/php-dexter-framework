# Ordena entradas de resultado LDAP no lado do cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-sort.php

---

# ldap\_sort

(PHP 4 >= 4.2.0, PHP 5, PHP 7)

ldap\_sort — Ordena entradas de resultado LDAP no lado do cliente

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.0.0 e foi
*REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **ldap\_sort**([resource](language.types.resource.md) `$link`, [resource](language.types.resource.md) `$result`, [string](language.types.string.md) `$sortfilter`): [bool](language.types.boolean.md)

Ordena o resultado de uma pesquisa LDAP, retornada por
[ldap\_search()](function.ldap-search.md).

Como esta função ordena os valores retornados no lado do cliente, é possível que
não sejam obtidos os resultados esperados caso seja alcançado o limite de tamanho `sizelimit` do servidor
ou o definido por [ldap\_search()](function.ldap-search.md).

### Parâmetros

`link`
:   Um recurso LDAP, retornado por [ldap\_connect()](function.ldap-connect.md).

`result`
:   Um identificador de resultado de pesquisa, retornado por
    [ldap\_search()](function.ldap-search.md).

`sortfilter`
:   O atributo a ser usado como chave na ordenação.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |

### Examples

Ordenando o resultado de uma pesquisa.

**Exemplo #1 Ordenação LDAP**

```
<?php
     // $ds é um identificador de conexão válido (consulte ldap_connect)

     $dn        = 'ou=example,dc=org';
     $filter    = '(|(sn=Doe*)(givenname=John*))';
     $justthese = array('ou', 'sn', 'givenname', 'mail');

     $sr = ldap_search($ds, $dn, $filter, $justthese);

     // Ordena
     ldap_sort($ds, $sr, 'sn');

     // Recuperando os dados
     $info = ldap_get_entries($ds, $sr);
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
