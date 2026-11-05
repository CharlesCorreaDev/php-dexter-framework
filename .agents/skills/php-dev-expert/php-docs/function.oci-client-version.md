# Retorna a versão da biblioteca do cliente Oracle

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-client-version.php

---

# oci\_client\_version

(PHP 5 >= 5.3.7, PHP 7, PHP 8, PECL OCI8 >= 1.4.6)

oci\_client\_version — Retorna a versão da biblioteca do cliente Oracle

### Descrição

function **oci\_client\_version**(): [string](language.types.string.md)

Retorna uma string contendo o número da versão da biblioteca cliente Oracle C à qual o PHP está vinculado.

### Parâmetros

Nenhum

### Valor Retornado

Retorna o número da versão como uma [string](language.types.string.md).

### Examples

**Exemplo #1 Exemplo de **oci\_client\_version()****

```
<?php
    echo "Versão do cliente: " . oci_client_version(); // Versão do cliente: 19.9.0.0.0
?>
```

### Notas

> **Nota**:
>
> As bibliotecas Oracle anteriores a 10*g*R2 não têm a funcionalidade subjacente
> para obter o número da versão da biblioteca cliente. A
> string "Unknown" será retornada neste caso.

### Veja também

- [oci\_server\_version()](function.oci-server-version.md) - Retorna a versão do banco de dados Oracle

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
