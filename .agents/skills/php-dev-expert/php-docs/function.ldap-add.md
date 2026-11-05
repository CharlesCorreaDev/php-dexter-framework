# Adiciona entradas ao diretório LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-add.php

---

# ldap\_add

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_add — Adiciona entradas ao diretório LDAP

### Descrição

function **ldap\_add**(  
    [LDAP\Connection](class.ldap-connection.md) `$ldap`,  
    [string](language.types.string.md) `$dn`,  
    [array](language.types.array.md) `$entry`,  
    [?](language.types.null.md)[array](language.types.array.md) `$controls` = **`null`**  
): [bool](language.types.boolean.md)

Adiciona entradas ao diretório LDAP.

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

`dn`
:   O nome distinto da uma entidade LDAP.

`entry`
:   Um array que especifica a informação sobre a entrada. Os valores nas
    entradas são indexadas pelos atributos individuais.
    Em caso de valores múltiplos para um atributo, eles seão indexados usando
    inteiros iniciando com 0.

    ```
    <?php
    $entry["atributo1"] = "valor";
    $entry["atributo2"][0] = "valor1";
    $entry["atributo2"][1] = "valor2";
    ?>
    ```

`controls`
:   Array de [Controles LDAP](ldap.controls.md) a ser enviado com a requisição.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |
| 8.0.0 | O parâmetro `controls` agora pode ser nulo; anteriormente, o padrão era `[]`. |
| 7.3.0 | Suporte para o parâmetro `controls` adicionado. |

### Examples

**Exemplo #1 Exemplo completo com ligação autenticada**

```
<?php
$ds = ldap_connect("localhost");  // asuming que o servidor LDAP está no servidor local

if ($ds) {
    // faz a ligação com dn apropriado para dar acesso de atualização
    $r = ldap_bind($ds, "cn=root, o=My Company, c=US", "secret");

    // prepara dados
    $info["cn"] = "John Jones";
    $info["sn"] = "Jones";
    $info["objectclass"] = "person";

    // adiciona dados ao diretório
    $r = ldap_add($ds, "cn=John Jones, o=My Company, c=US", $info);

    ldap_close($ds);
} else {
    echo "Não foi possível conexão ao servidor LDAP";
}
?>
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [ldap\_add\_ext()](function.ldap-add-ext.md) - Adiciona entradas ao diretório LDAP
- [ldap\_delete()](function.ldap-delete.md) - Remove uma entrada de um diretório

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
