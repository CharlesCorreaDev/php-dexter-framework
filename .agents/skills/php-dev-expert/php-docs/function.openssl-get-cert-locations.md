# Recupera os locais de certificados disponíveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-get-cert-locations.php

---

# openssl\_get\_cert\_locations

(PHP 5 >= 5.6.0, PHP 7, PHP 8)

openssl\_get\_cert\_locations — Recupera os locais de certificados disponíveis

### Descrição

function **openssl\_get\_cert\_locations**(): [array](language.types.array.md)

**openssl\_get\_cert\_locations()** retorna um array
com informações sobre os locais de certificados disponíveis que
serão pesquisados ​​por certificados SSL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com os locais de certificados disponíveis.

### Examples

**Exemplo #1 Exemplo de **openssl\_get\_cert\_locations()****

```
<?php
var_dump(openssl_get_cert_locations());
?>
```

O exemplo acima produzirá:

```
array(8) {
  ["default_cert_file"]=>
  string(21) "/usr/lib/ssl/cert.pem"
  ["default_cert_file_env"]=>
  string(13) "SSL_CERT_FILE"
  ["default_cert_dir"]=>
  string(18) "/usr/lib/ssl/certs"
  ["default_cert_dir_env"]=>
  string(12) "SSL_CERT_DIR"
  ["default_private_dir"]=>
  string(20) "/usr/lib/ssl/private"
  ["default_default_cert_area"]=>
  string(12) "/usr/lib/ssl"
  ["ini_cafile"]=>
  string(0) ""
  ["ini_capath"]=>
  string(0) ""
}
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
