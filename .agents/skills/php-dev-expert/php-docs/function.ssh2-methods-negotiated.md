# Retorna a lista de métodos negociados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ssh2-methods-negotiated.php

---

# ssh2\_methods\_negotiated

(PECL ssh2 >= 0.9.0)

ssh2\_methods\_negotiated — Retorna a lista de métodos negociados

### Descrição

function **ssh2\_methods\_negotiated**([resource](language.types.resource.md) `$session`): [array](language.types.array.md)

Retorna a lista de métodos negociados.

### Parâmetros

`session`
:   Um identificador de conexão SSH, obtido de uma chamada a
    [ssh2\_connect()](function.ssh2-connect.md).

### Valor Retornado

### Examples

**Exemplo #1 Determinando quais métodos foram negociados**

```
<?php
$connection = ssh2_connect('shell.example.com', 22);
$methods = ssh2_methods_negotiated($connection);

echo "As chaves de criptografia foram negociadas usando: {$methods['kex']}\n";
echo "Servidor identificado usando um {$methods['hostkey']} com ";
echo "impressão digital: " . ssh2_fingerprint($connection) . "\n";

echo "Os pacotes de cliente para servidor usarão métodos:\n";
echo "\tCrypt: {$methods['client_to_server']['crypt']}\n";
echo "\tComp: {$methods['client_to_server']['comp']}\n";
echo "\tMAC: {$methods['client_to_server']['mac']}\n";

echo "Os pacotes de servidor para cliente usarão métodos:\n";
echo "\tCrypt: {$methods['server_to_client']['crypt']}\n";
echo "\tComp: {$methods['server_to_client']['comp']}\n";
echo "\tMAC: {$methods['server_to_client']['mac']}\n";

?>
```

### Veja também

- [ssh2\_connect()](function.ssh2-connect.md) - Conecta-se a um servidor SSH

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
