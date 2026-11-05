# Executa modificações em lote em uma entrada LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-modify-batch.php

---

# ldap\_modify\_batch

(PHP 5.4 >= 5.4.26, PHP 5.5 >= 5.5.10, PHP 5.6 >= 5.6.0, PHP 7, PHP 8)

ldap\_modify\_batch — Executa modificações em lote em uma entrada LDAP

### Descrição

function **ldap\_modify\_batch**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$dn`,  
    [array](language.types.array.md) `$modifications_info`,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [bool](language.types.boolean.md)

Modifica uma entrada existente no diretório LDAP. Permite especificação
detalhada das modificações que serão realizadas.

### Parâmetros

`ldap`
:   Um recurso LDAP, retornado por [ldap\_connect()](function.ldap-connect.md).

`dn`
:   O nome distinto de uma entidade LDAP.

`modifications_info`
:   Um array que especifica as modificações a realizar. Cada entrada neste
    array é um array associativo com duas ou três chaves:
    `attrib` corresponde ao nome do atributo a modificar,
    `modtype` corresponde ao tipo de modificação a realizar
    e, dependendo do tipo de modificação, `values`
    corresponde a um array de valores de atributo relevantes para a modificação.

    Valores possíveis para `modtype` incluem:

    **`LDAP_MODIFY_BATCH_ADD`**
    :   Cada valor especificado por `values` é adicionado (como
        um valor adicional) ao atributo nomeado por
        `attrib`.

    **`LDAP_MODIFY_BATCH_REMOVE`**
    :   Cada valor especificado por `values` é removido
        do atributo nomeado por `attrib`. Qualquer valor do
        atributo não contido no array `values`
        não será afetado.

    **`LDAP_MODIFY_BATCH_REMOVE_ALL`**
    :   Todos os valores são removidos do atributo nomeado por
        `attrib`. Uma entrada `values` não
        pode ser fornecida.

    **`LDAP_MODIFY_BATCH_REPLACE`**
    :   Todos os valores atuais do atributo nomeado por
        `attrib` são substituídos pelos valores especificados
        por `values`.

    Observe que qualquer valor para `attrib` precisa ser uma string, qualquer
    valor para `values` precisa ser um array de strings e
    qualquer valor para `modtype` precisa ser uma das
    constantes LDAP\_MODIFY\_BATCH\_\* listadas acima.

`controls`
:   Array de [Controles LDAP](ldap.controls.md) a enviar com a requisição.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Adicionado suporte para `controls`. |

### Examples

**Exemplo #1 Adiciona um número de telefone a um contato**

```
<?php
$dn = "cn=John Smith,ou=Wizards,dc=example,dc=com";
$modifs = [
    [
        "attrib"  => "telephoneNumber",
        "modtype" => LDAP_MODIFY_BATCH_ADD,
        "values"  => ["+1 555 555 1717"],
    ],
];
ldap_modify_batch($connection, $dn, $modifs);
?>
```

**Exemplo #2 Renomeia um usuário**

```
<?php
$dn = "cn=John Smith,ou=Wizards,dc=example,dc=com";
$modifs = [
    [
        "attrib"  => "sn",
        "modtype" => LDAP_MODIFY_BATCH_REPLACE,
        "values"  => ["Smith-Jones"],
    ],
    [
        "attrib"  => "givenName",
        "modtype" => LDAP_MODIFY_BATCH_REPLACE,
        "values"  => ["Jack"],
    ],
];
ldap_modify_batch($connection, $dn, $modifs);
ldap_rename($connection, $dn, "cn=Jack Smith-Jones", NULL, TRUE);
?>
```

**Exemplo #3 Adiciona dois endereços de e-mail a um usuário**

```
<?php
$dn = "cn=Jack Smith-Jones,ou=Wizards,dc=example,dc=com";
$modifs = [
    [
        "attrib"  => "mail",
        "modtype" => LDAP_MODIFY_BATCH_ADD,
        "values"  => [
            "jack.smith@example.com",
            "jack.smith-jones@example.com",
        ],
    ],
];
ldap_modify_batch($connection, $dn, $modifs);
?>
```

**Exemplo #4 Muda uma senha de usuário**

```
<?php
$dn = "cn=Jack Smith-Jones,ou=Wizards,dc=example,dc=com";
$modifs = [
    [
        "attrib"  => "userPassword",
        "modtype" => LDAP_MODIFY_BATCH_REMOVE,
        "values"  => ["Tr0ub4dor&3"],
    ],
    [
        "attrib"  => "userPassword",
        "modtype" => LDAP_MODIFY_BATCH_ADD,
        "values"  => ["correct horse battery staple"],
    ],
];
ldap_modify_batch($connection, $dn, $modifs);
?>
```

**Exemplo #5 Muda uma senha de usuário (Diretório Ativo)**

```
<?php
function adifyPw($pw)
{
    return iconv("UTF-8", "UTF-16LE", '"' . $pw . '"');
}

$dn = "cn=Jack Smith-Jones,ou=Wizards,dc=ad,dc=example,dc=com";
$modifs = [
    [
        "attrib"  => "unicodePwd",
        "modtype" => LDAP_MODIFY_BATCH_REMOVE,
        "values"  => [adifyPw("Tr0ub4dor&3")],
    ],
    [
        "attrib"  => "unicodePwd",
        "modtype" => LDAP_MODIFY_BATCH_ADD,
        "values"  => [adifyPw("correct horse battery staple")],
    ],
];
ldap_modify_batch($connection, $dn, $modifs);
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
