# Texto Clearsign

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rnp.examples-clearsign.php

---

## Texto Clearsign

Este exemplo faz assinatura clearsign em um texto.

**Exemplo #1 Exemplo de clearsign RNP**

```
<?php
// inicializa objeto FFI
$ffi = rnp_ffi_create('GPG', 'GPG');

// gera chave RSA
$key = rnp_op_generate_key($ffi, 'test@example.com', 'RSA');

// assina
$data = "Texto de exemplo para assinar";
$signature = rnp_op_sign_cleartext($ffi, $data, array($key));

echo $signature;

// destrói o objeto FFI
rnp_ffi_destroy($ffi);
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
