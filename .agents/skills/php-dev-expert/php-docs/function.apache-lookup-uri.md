# Realiza uma requisição parcial para a URI especificada e retorna todas as informações sobre ela

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.apache-lookup-uri.php

---

# apache\_lookup\_uri

(PHP 4, PHP 5, PHP 7, PHP 8)

apache\_lookup\_uri — Realiza uma requisição parcial para a URI especificada e retorna todas as informações sobre ela

### Descrição

function **apache\_lookup\_uri**([string](language.types.string.md) `$filename`): [object](language.types.object.md)|[false](language.types.singleton.md)

Realiza uma requisição parcial para uma URI. Trabalha o suficiente para
obter odas as informações importantes sobre o recurso
informado.

Esta função é suportada quando o PHP
é instalado como um módulo do servidor web Apache.

### Parâmetros

`filename`
:   O nome do arquivo (URI) que está sendo requisitado.

### Valor Retornado

Um [object](language.types.object.md) com informações relacionadas a URI. As propriedades
deste [object](language.types.object.md) são:

- status
- the\_request
- status\_line
- method
- content\_type
- handler
- uri
- filename
- path\_info
- args
- boundary
- no\_cache
- no\_local\_copy
- allowed
- send\_bodyct
- bytes\_sent
- byterange
- clength
- unparsed\_uri
- mtime
- request\_time

Retorna **`false`** se falhar.

### Examples

**Exemplo #1 Exemplo da função **apache\_lookup\_uri()****

```
<?php
$info = apache_lookup_uri('index.php?var=value');
print_r($info);

if (file_exists($info->filename)) {
    echo 'Arquivo existe!';
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
stdClass Object
(
    [status] => 200
    [the_request] => GET /dir/file.php HTTP/1.1
    [method] => GET
    [mtime] => 0
    [clength] => 0
    [chunked] => 0
    [content_type] => application/x-httpd-php
    [no_cache] => 0
    [no_local_copy] => 1
    [unparsed_uri] => /dir/index.php?var=value
    [uri] => /dir/index.php
    [filename] => /home/htdocs/dir/index.php
    [args] => var=value
    [allowed] => 0
    [sent_bodyct] => 0
    [bytes_sent] => 0
    [request_time] => 1074282764
)
Arquivo existe!
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
