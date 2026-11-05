# Faz ligação ao diretório LDAP usando SASL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-sasl-bind.php

---

# ldap\_sasl\_bind

(PHP 5, PHP 7, PHP 8)

ldap\_sasl\_bind — Faz ligação ao diretório LDAP usando SASL

### Descrição

function **ldap\_sasl\_bind**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [?](language.types.null.md)[string](language.types.string.md) `$dn` = **`null`**,  
    #[[\SensitiveParameter](class.sensitiveparameter.md)] [?](language.types.null.md)[string](language.types.string.md) `$password` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$mech` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$realm` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$authc_id` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$authz_id` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$props` = **`null`**  
): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | `dn`, `password`, `mech`, `realm`, `authc_id`, `authz_id` e `props` agora podem ser nulos. |

### Notas

> **Nota**:
> **Requisito**  
>
> **ldap\_sasl\_bind()** requer suporte SASL
> (sasl.h). Confirme que
> `--with-ldap-sasl` foi usado na configuração do PHP
> caso contrário esta função não estará definida.

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
