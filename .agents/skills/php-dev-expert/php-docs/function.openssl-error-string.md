# Retorna mensagem de erro do openSSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-error-string.php

---

# openssl\_error\_string

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

openssl\_error\_string — Retorna mensagem de erro do openSSL

### Descrição

function **openssl\_error\_string**(): [string](language.types.string.md)|[false](language.types.singleton.md)

**openssl\_error\_string()** retorna o último erro da
biblioteca openSSL. As mensagens de erro são enfileiradas, portanto esta função deve ser
chamadas múltiplas vezes para coletar toda a informação. O último erro será
o mais recente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma string com a mensagem de erro ou **`false`** se não houver mais mensagem
de erro para retornar.

### Examples

**Exemplo #1 Exemplo de **openssl\_error\_string()****

```
<?php
// vamos supor que uma função openssl acabou de ser chamada e falhou
while ($msg = openssl_error_string())
    echo $msg . "<br />\n";
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
