# Cabeçalhos de resposta HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.httpresponseheader.php

---

# $http\_response\_header

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

$http\_response\_header — Cabeçalhos de resposta HTTP

**Aviso**

Este recurso foi
*DESCONTINUADO* a partir do PHP 8.5.0. O uso deste recurso
é fortemente desencorajado.

Use [http\_get\_last\_response\_headers()](function.http-get-last-response-headers.md) em seu lugar.

### Descrição

O [array](language.types.array.md) $http\_response\_header é similar à
função [get\_headers()](function.get-headers.md). Ao usar o
[empacotador HTTP](wrappers.http.md),
a variável $http\_response\_header será populada com os cabeçalhos
da resposta HTTP. $http\_response\_header será criada
no [escopo local](language.variables.scope.md).

### Examples

**Exemplo #1 Exemplo de $http\_response\_header**

```
<?php
function get_contents() {
  file_get_contents("http://example.com");
  var_dump($http_response_header); // variável é populada no escopo local
}
get_contents();
var_dump($http_response_header); // uma chamada a get_contents() não popula a variável fora do escopo da função
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(9) {
  [0]=>
  string(15) "HTTP/1.1 200 OK"
  [1]=>
  string(35) "Date: Sat, 12 Apr 2008 17:30:38 GMT"
  [2]=>
  string(29) "Server: Apache/2.2.3 (CentOS)"
  [3]=>
  string(44) "Last-Modified: Tue, 15 Nov 2005 13:24:10 GMT"
  [4]=>
  string(27) "ETag: "280100-1b6-80bfd280""
  [5]=>
  string(20) "Accept-Ranges: bytes"
  [6]=>
  string(19) "Content-Length: 438"
  [7]=>
  string(17) "Connection: close"
  [8]=>
  string(38) "Content-Type: text/html; charset=UTF-8"
}

Warning: Undefined variable $http_response_header
NULL
```

### Veja também

- [http\_get\_last\_response\_headers()](function.http-get-last-response-headers.md) - Recupera os últimos cabeçalhos de reposta HTTP
- [http\_clear\_last\_response\_headers()](function.http-clear-last-response-headers.md) - Limpa os cabeçalhos de resposta HTTP armazenados

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
