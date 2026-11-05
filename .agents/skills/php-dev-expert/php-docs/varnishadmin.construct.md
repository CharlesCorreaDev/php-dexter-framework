# Construtor de VarnishAdmin

> **Fonte / Source:** https://www.php.net/manual/pt_BR/varnishadmin.construct.php

---

# VarnishAdmin::\_\_construct

(PECL varnish >= 0.3)

VarnishAdmin::\_\_construct — Construtor de VarnishAdmin

### Descrição

public function **VarnishAdmin::\_\_construct**([array](language.types.array.md) `$args` = ?)

### Parâmetros

`args`
:   Argumentos de configuração. As chaves possíveis são:

    ```
    VARNISH_CONFIG_IDENT - identificador da instância Varnish local
    VARNISH_CONFIG_HOST - IP da instância Varnish
    VARNISH_CONFIG_PORT - porta da instância Varnish
    VARNISH_CONFIG_SECRET - senha da instância Varnish
    VARNISH_CONFIG_TIMEOUT - tempo limite de leitura da conexão
    VARNISH_CONFIG_COMPAT - compatibilidade da versão principal do Varnish
    ```

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **VarnishAdmin::\_\_construct()****

```
<?php
    $args = array(
        VARNISH_CONFIG_HOST => "::1",
        VARNISH_CONFIG_PORT => 6082,
        VARNISH_CONFIG_SECRET => "5174826b-8595-4958-aa7a-0609632ad7ca",
        VARNISH_CONFIG_TIMEOUT => 300,
    );
    $va = new VarnishAdmin($args);
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
