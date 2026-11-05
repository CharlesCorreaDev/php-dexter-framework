# Construtor de Client

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysql-xdevapi-client.construct.php

---

# Client::\_\_construct

(No version information available, might only be in Git)

Client::\_\_construct — Construtor de Client

### Descrição

private function **mysql\_xdevapi\Client::\_\_construct**()

Constrói um objeto Client.

### Parâmetros

Esta função não possui parâmetros.

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Client::\_\_construct()****

```
<?php
$pooling_options = '{
  "enabled": true,
    "maxSize": 10,
    "maxIdleTime": 3600,
    "queueTimeOut": 1000
}';
$client = mysql_xdevapi\getClient($connection_uri, $pooling_options);
$session = $client->getSession();
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
