# Uso básico de VarnishAdmin

> **Fonte / Source:** https://www.php.net/manual/pt_BR/varnish.example.admin.php

---

## Uso básico de VarnishAdmin

O exemplo ilustra um uso simples da funcionalidade de banimento

**Exemplo #1 Banindo um URL**

```
<?php

$args = array(
    VARNISH_CONFIG_HOST    => "::1",
    VARNISH_CONFIG_PORT    => 6082,
    VARNISH_CONFIG_SECRET  => "5174826b-8595-4958-aa7a-0609632ad7ca",
    VARNISH_CONFIG_TIMEOUT => 300,
);

$va = new VarnishAdmin($args);

try {
    if(!$va->connect()) {
        throw new VarnishException("Conexão falhou\n");
    }
} catch (VarnishException $e) {
    echo $e->getMessage();
    exit(3);
}

try {
    if(!$va->auth()) {
        throw new VarnishException("Autenticação falhou\n");
    }
} catch (VarnishException $e) {
    echo $e->getMessage();
    exit(3);
}

try {
    $status = $va->ban('req.url ~ "^/$"');
    if (VARNISH_STATUS_OK != $status) {
        throw new VarnishException("Método de banimento retornou o status $status\n");
    }
} catch (VarnishException $e) {
    echo $e->getMessage();
    exit(3);
}

exit(0);

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
