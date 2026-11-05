# Substitui valores de atributos por novos valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-mod-replace.php

---

# ldap\_mod\_replace

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_mod\_replace — Substitui valores de atributos por novos valores

### Descrição

function **ldap\_mod\_replace**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$dn`,  
    [array](language.types.array.md) `$entry`,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [bool](language.types.boolean.md)

Substitui um ou mais atributos do `dn` especificado.
Esta função também pode adicionar ou remover atributos.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`dn`
:   O nome distinto da entidade LDAP.

`entry`
:   Um array associativo listando os valores de atributo a substituir. Enviar um array vazio removerá o atributo, enquanto que enviar um atributo que ainda não existe nesta entrada irá adicioná-lo.

`controls`
:   Array de [Controles LDAP](ldap.controls.md) enviados com a requisição.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Adicionado suporte para `controls`. |

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [ldap\_mod\_replace\_ext()](function.ldap-mod_replace-ext.md) - Substitui valores de atributos com novos valores
- [ldap\_mod\_del()](function.ldap-mod-del.md) - Deleta valores dos atributos atuais
- [ldap\_mod\_add()](function.ldap-mod-add.md) - Adiciona valores aos atributos atuais
- [ldap\_modify\_batch()](function.ldap-modify-batch.md) - Executa modificações em lote em uma entrada LDAP

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
