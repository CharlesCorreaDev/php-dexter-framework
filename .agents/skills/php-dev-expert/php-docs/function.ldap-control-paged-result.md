# Envia controle de paginação LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-control-paged-result.php

---

# ldap\_control\_paged\_result

(PHP 5 >= 5.4.0, PHP 7)

ldap\_control\_paged\_result — Envia controle de paginação LDAP

**Aviso**

Esta função foi *DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0.
Em vez disso, o parâmetro `controls` da função [ldap\_search()](function.ldap-search.md) deve ser usado.
Veja também [Controles LDAP](ldap.controls.md) para obter detalhes.

### Descrição

function **ldap\_control\_paged\_result**(  
    [resource](language.types.resource.md) `$link`,  
    [int](language.types.integer.md) `$pagesize`,  
    [bool](language.types.boolean.md) `$iscritical` = **`false`**,  
    [string](language.types.string.md) `$cookie` = ""  
): [bool](language.types.boolean.md)

Habilita paginação LDAP enviando o controle de paginação (tamanho da página, cookie...).

### Parâmetros

`link`
:   Um recurso LDAP, retornado por [ldap\_connect()](function.ldap-connect.md).

`pagesize`
:   O número de entradas por página.

`iscritical`
:   Indica se a paginação é crítica ou não.
    Se verdadeiro e o servidor não suportar paginação, a pesquisa
    não retornará nenhum resultado.

`cookie`
:   Uma estrutura opaca enviada pelo servidor
    ([ldap\_control\_paged\_result\_response()](function.ldap-control-paged-result-response.md)).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Examples

Oo exemplo abaixo mostra a obtenção da primeira página de uma pesquisa paginada
com apenas uma entrada por página.

**Exemplo #1 Paginação LDAP**

```
<?php
     // $ds é um identificador de conexão válido (consulte ldap_connect)
     ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

     $dn        = 'ou=example,dc=org';
     $filter    = '(|(sn=Doe*)(givenname=John*))';
     $justthese = array('ou', 'sn', 'givenname', 'mail');

     // habilita paginação com tamanho de página igual a 1.
     ldap_control_paged_result($ds, 1);

     $sr = ldap_search($ds, $dn, $filter, $justthese);

     $info = ldap_get_entries($ds, $sr);

     echo $info['count'] . ' entradas retornadas' . PHP_EOL;
```

O exemplo abaixo mostra a obtenção de todos os resultados paginados com 100
entradas por página.

**Exemplo #2 Paginação LDAP**

```
<?php
     // $ds é um identificador de conexão válido (consulte ldap_connect)
     ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

     $dn        = 'ou=example,dc=org';
     $filter    = '(|(sn=Doe*)(givenname=John*))';
     $justthese = array('ou', 'sn', 'givenname', 'mail');

     // habilita paginação com tamanho de página igual a 100.
     $pageSize = 100;

     $cookie = '';
     do {
         ldap_control_paged_result($ds, $pageSize, true, $cookie);

         $result  = ldap_search($ds, $dn, $filter, $justthese);
         $entries = ldap_get_entries($ds, $result);

         foreach ($entries as $e) {
             echo $e['dn'] . PHP_EOL;
         }

         ldap_control_paged_result_response($ds, $result, $cookie);

     } while($cookie !== null && $cookie != '');
```

### Notas

> **Nota**:
>
> Controle de paginação é um recurso do protocolo LDAPv3.

### Veja também

- [ldap\_control\_paged\_result\_response()](function.ldap-control-paged-result-response.md) - Obtém o cookie de paginação LDAP
- [» RFC2696 : Extensão de Controle LDAP para Manipulação
  Simples de Resultados Paginados](https://datatracker.ietf.org/doc/html/rfc2696)

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
