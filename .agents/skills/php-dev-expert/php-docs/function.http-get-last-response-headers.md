# Recupera os últimos cabeçalhos de reposta HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.http-get-last-response-headers.php

---

# http\_get\_last\_response\_headers

(PHP 8 >= 8.4.0)

http\_get\_last\_response\_headers — Recupera os últimos cabeçalhos de reposta HTTP

### Descrição

function **http\_get\_last\_response\_headers**(): [?](language.types.null.md)[array](language.types.array.md)

Retorna um [array](language.types.array.md) contendo os últimos cabeçalhos de resposta HTTP
recebidos através do
[empacotador HTTP](wrappers.http.md).
Se não houver nenhum, retorna **`null`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) indexado de cabeçalhos HTTP
que foram recebidos ao usar o
[empacotador HTTP](wrappers.http.md).
Se não houver nenhum, retorna **`null`**.

### Examples

**Exemplo #1 Exemplo de **http\_get\_last\_response\_headers()****

Obtendo os cabeçalhos de exemplo.com.br

```
<?php
file_get_contents("http://examplo.com.br");
var_dump(http_get_last_response_headers());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(14) {
  [0]=>
  string(15) "HTTP/1.1 200 OK"
  [1]=>
  string(20) "Accept-Ranges: bytes"
  [2]=>
  string(11) "Age: 326940"
  [3]=>
  string(29) "Cache-Control: max-age=604800"
  [4]=>
  string(38) "Content-Type: text/html; charset=UTF-8"
  [5]=>
  string(35) "Date: Mon, 11 Nov 2024 13:34:09 GMT"
  [6]=>
  string(23) "Etag: "3147526947+gzip""
  [7]=>
  string(38) "Expires: Mon, 18 Nov 2024 13:34:09 GMT"
  [8]=>
  string(44) "Last-Modified: Thu, 17 Oct 2019 07:18:26 GMT"
  [9]=>
  string(24) "Server: ECAcc (nyd/D16C)"
  [10]=>
  string(21) "Vary: Accept-Encoding"
  [11]=>
  string(12) "X-Cache: HIT"
  [12]=>
  string(20) "Content-Length: 1256"
  [13]=>
  string(17) "Connection: close"
}
```

### Veja também

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
