# Obtém o cookie de paginação LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-control-paged-result-response.php

---

# ldap\_control\_paged\_result\_response

(PHP 5 >= 5.4.0, PHP 7)

ldap\_control\_paged\_result\_response — Obtém o cookie de paginação LDAP

**Aviso**

Esta função foi *DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0.
Em vez disso, o parâmetro `controls` da função [ldap\_search()](function.ldap-search.md) deve ser usado.
Veja também [Controles LDAP](ldap.controls.md) para obter detalhes.

### Descrição

function **ldap\_control\_paged\_result\_response**(  
    [resource](language.types.resource.md) `$link`,  
    [resource](language.types.resource.md) `$result`,  
    [string](language.types.string.md) `&$cookie` = ?,  
    [int](language.types.integer.md) `&$estimated` = ?  
): [bool](language.types.boolean.md)

Obtém a informação de paginação enviada pelo servidor.

### Parâmetros

`link`
:   Um recurso LDAP, retornado por [ldap\_connect()](function.ldap-connect.md).

`result`

`cookie`
:   Uma estrutura opaca enviada pelo servidor.

`estimated`
:   Um número estimado de entradas a receber.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi removida. |
| 7.4.0 | Esta função foi descontinuada. |

### Veja também

- [ldap\_control\_paged\_result()](function.ldap-control-paged-result.md) - Envia controle de paginação LDAP
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
