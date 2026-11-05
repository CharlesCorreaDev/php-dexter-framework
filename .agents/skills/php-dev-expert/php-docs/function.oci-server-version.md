# Retorna a versão do banco de dados Oracle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-server-version.php

---

# oci\_server\_version

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_server\_version — Retorna a versão do banco de dados Oracle

### Descrição

function **oci\_server\_version**([resource](language.types.resource.md) `$connection`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma string com a versão do Oracle Database e as opções disponíveis.

### Parâmetros

`connection`

### Valor Retornado

Retorna as informações da versão como uma string ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplo de **oci\_server\_version()****

```
<?php

$conn = oci_connect("hr", "hrpwd", "localhost/XE");
echo "Versão do Servidor: " . oci_server_version($conn);

// Exibe:
// Versão do Servidor: Oracle Database 11g Enterprise Edition Release 11.2.0.1.0 - 64bit Production
// With the Partitioning, OLAP, Data Mining and Real Application Testing option

oci_close($conn);

?>
```

### Veja também

- [oci\_client\_version()](function.oci-client-version.md) - Retorna a versão da biblioteca do cliente Oracle

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
