# Uso básico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ldap.examples-basic.php

---

## Uso básico

Obtém informação para todas as entradas onde o sobrenome inicia
com "S" em um servidor de diretório, mostrando um extrato com
nome e endereço de correio eletrônico.

**Exemplo #1 Exemplo de pesquisa LDAP**

```
<?php
// sequência básica com o LDAP é conectar, ligar, pesquisar, interpretar resultado
// da pesquisa, fechar a conexão

echo "<h3>Teste de consulta LDAP</h3>";
echo "Conectando ...";
$ds=ldap_connect("localhost");  // deve ser um servidor LDAP válido!
echo "Resultado da conexão é " . $ds . "<br />";

if ($ds) {
    echo "Ligando ...";
    $r=ldap_bind($ds);     // esta é uma ligação "anônima", tipicamente
                           // com acesso somente-leitura
    echo "Resultado da ligação é " . $r . "<br />";

    echo "Pesquisando por (sn=S*) ...";
    // Pesquisa entrada de sobrenome
    $sr=ldap_search($ds, "o=Minha Empresa, c=BR", "sn=S*");
    echo "Resultado da pesquisa é " . $sr . "<br />";

    echo "Número de entradas retornadas é " . ldap_count_entries($ds, $sr) . "<br />";

    echo "Obtendo entradas ...<p>";
    $info = ldap_get_entries($ds, $sr);
    echo "Dados para " . $info["count"] . " itens retornados:<p>";

    for ($i=0; $i<$info["count"]; $i++) {
        echo "dn é: " . $info[$i]["dn"] . "<br />";
        echo "primeira entrada cn é: " . $info[$i]["cn"][0] . "<br />";
        echo "primeira entrada de e-mail é: " . $info[$i]["mail"][0] . "<br /><hr />";
    }

    echo "Fechando a conexão";
    ldap_close($ds);

} else {
    echo "<h4>Não foi possível conectar ao servidor LDAP</h4>";
}
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
