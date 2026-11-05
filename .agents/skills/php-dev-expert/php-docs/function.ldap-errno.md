# Retorna o número de erro LDAP do último comando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ldap-errno.php

---

# ldap\_errno

(PHP 4, PHP 5, PHP 7, PHP 8)

ldap\_errno — Retorna o número de erro LDAP do último comando

### Descrição

function **ldap\_errno**([LDAP\Connection](class.ldap-connection.md) `$ldap`): [int](language.types.integer.md)

Retorna o número de erro padronizado retornado pelo último comando LDAP.
Este número pode ser convertido em uma mensagem textual usando-se a função
[ldap\_err2str()](function.ldap-err2str.md).

### Parâmetros

`ldap`
:   Uma instância de [LDAP\Connection](class.ldap-connection.md), retornada por [ldap\_connect()](function.ldap-connect.md).

### Valor Retornado

Retorna o número de erro LDAP do último comando nesta
conexão.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `ldap` agora espera uma instância de [LDAP\Connection](class.ldap-connection.md); anteriormente, um [resource](language.types.resource.md) `ldap link` válido era esperado. |

### Examples

A menos que o nível de alertas seja reduzido suficientemente no php.ini ou
que os comandos LDAP sejam prefixados com caracteres "@" para suprimir alertas na saída,
os erros gerados sempre irão aparecer na saída HTML.

**Exemplo #1 Gerando e capturando um erro**

```
<?php
// Este exemplo contém um erro, que será capturado.
$ld = ldap_connect("ldap://localhost");
$bind = ldap_bind($ld);
// erro de sintaxe na expressão de filtro (errno 87),
// precisa ser "objectclass=*" para funcionar.
$res =  @ldap_search($ld, "o=Myorg, c=DE", "objectclass");
if (!$res) {
    echo "Erro LDAP número: " . ldap_errno($ld) . "<br>\n";
    echo "Erro LDAP: " . ldap_error($ld) . "<br>\n";
    die("Eita!<br>\n");
}
$info = ldap_get_entries($ld, $res);
echo $info["count"] . " entradas correspondentes.<br>\n";
?>
```

### Veja também

- [ldap\_err2str()](function.ldap-err2str.md) - Converte um número de erro LDAP em uma mensagem de erro string
- [ldap\_error()](function.ldap-error.md) - Retorna a mensagem de erro do último comando LDAP

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
