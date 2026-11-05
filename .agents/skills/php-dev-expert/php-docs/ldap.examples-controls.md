# Controles LDAP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ldap.examples-controls.php

---

## Controles LDAP

Aqui estão alguns exemplos de uso de Controles LDAP com PHP >= 7.3.0.

**Exemplo #1 Ligação com informação de políticas**

```
<?php

$user   = 'cn=admin,dc=example,dc=com';
$passwd = 'senhaadministrador';

$ds = ldap_connect('ldap://localhost');

if ($ds) {
    $r = ldap_bind_ext($ds, $user, $passwd, [['oid' => LDAP_CONTROL_PASSWORDPOLICYREQUEST]]);

    if (ldap_parse_result($ds, $r, $errcode, $matcheddn, $errmsg, $referrals, $ctrls)) {
        if ($errcode != 0) {
            die("Erro: $errmsg ($errcode)");
        }
        if (isset($ctrls[LDAP_CONTROL_PASSWORDPOLICYRESPONSE])) {
            $value = $ctrls[LDAP_CONTROL_PASSWORDPOLICYRESPONSE]['value'];
            echo "Expira em: ".$value['expire']." segundos\n";
            echo "Número de autenticações restantes: ".$value['grace']."\n";
            if (isset($value['error'])) {
                echo "Código de erro da política: ".$value['error'];
            }
        }
    }
} else {
    die("Não foi possível conectar ao servidor LDAP");
}
?>
```

**Exemplo #2 Modifica a desencriptação somente se não estiver vazia**

```
<?php
// $link é uma conexão LDAP

$result = ldap_mod_replace_ext(
    $link,
    'o=test,dc=example,dc=com',
    ['description' => 'Nova descrição'],
    [
        [
            'oid'         => LDAP_CONTROL_ASSERT,
            'iscritical'  => TRUE,
            'value'       => ['filter' => '(!(description=*))']
        ]
    ]
);

// E então usa ldap_parse_result
?>
```

**Exemplo #3 Lendo alguns valores antes da remoção**

```
<?php
// $link é uma conexão LDAP

$result = ldap_delete_ext(
    $link,
    'o=test,dc=example,dc=com',
    [
        [
            'oid'         => LDAP_CONTROL_PRE_READ,
            'iscritical'  => TRUE,
            'value'       => ['attrs' => ['o', 'description']]
        ]
    ]
);

// E então usa ldap_parse_result
?>
```

**Exemplo #4 Remove uma referência**

```
<?php
// $link é uma conexão LDAP

// Sem o controle o nó referenciado seria removido
// Certifique-se de definir o controle como crítico para evitar isso
$result = ldap_delete_ext(
    $link,
    'cn=reference,dc=example,dc=com',
    [['oid' => LDAP_CONTROL_MANAGEDSAIT, 'iscritical' => TRUE]]
);

// E então usa ldap_parse_result
?>
```

**Exemplo #5 Usa paginação para uma pesquisa**

```
<?php
// $link é uma conexão LDAP

$cookie = '';

do {
    $result = ldap_search(
        $link, 'dc=example,dc=base', '(cn=*)', ['cn'], 0, 0, 0, LDAP_DEREF_NEVER,
        [['oid' => LDAP_CONTROL_PAGEDRESULTS, 'value' => ['size' => 2, 'cookie' => $cookie]]]
    );
    ldap_parse_result($link, $result, $errcode , $matcheddn , $errmsg , $referrals, $controls);
    // Para deixar o exemplo curto os erros não são testados
    $entries = ldap_get_entries($link, $result);
    foreach ($entries as $entry) {
        echo "cn: ".$entry['cn'][0]."\n";
    }
    if (isset($controls[LDAP_CONTROL_PAGEDRESULTS]['value']['cookie'])) {
        // É necessário passar o cookie da última chamada para a próxima
        $cookie = $controls[LDAP_CONTROL_PAGEDRESULTS]['value']['cookie'];
    } else {
        $cookie = '';
    }
    // Cookie vazio significa última página
} while (strlen($cookie) > 0);
?>
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
