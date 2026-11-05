# Cria um objeto CURLFile

> **Fonte / Source:** https://www.php.net/manual/pt_BR/curlfile.construct.php

---

# CURLFile::\_\_construct

# curl\_file\_create

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

CURLFile::\_\_construct -- curl\_file\_create — Cria um objeto CURLFile

### Descrição

Estilo orientado a objetos

public function **CURLFile::\_\_construct**([string](language.types.string.md) `$filename`, [?](language.types.null.md)[string](language.types.string.md) `$mime_type` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$posted_filename` = **`null`**)

Estilo procedural

function **curl\_file\_create**([string](language.types.string.md) `$filename`, [?](language.types.null.md)[string](language.types.string.md) `$mime_type` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$posted_filename` = **`null`**): [CURLFile](class.curlfile.md)

Cria um objeto [CURLFile](class.curlfile.md), usado para o upload de um arquivo **`CURLOPT_POSTFIELDS`**.

### Parâmetros

`filename`
:   Caminho para o arquivo que será enviado.

`mime_type`
:   O tipo de mídia do arquivo.

`posted_filename`
:   Nome do arquivo a ser usado nos dados de envio.

### Valor Retornado

Retorna um objeto [CURLFile](class.curlfile.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `mime_type` e `posted_filename` agora podem ser nulos; anteriormente seus valores padrões eram `0`. |

### Examples

**Exemplo #1 Exemplo de **CURLFile::\_\_construct()****

Estilo orientado a objetos

```
<?php
/* http://example.com/upload.php:
<?php var_dump($_FILES); ?>
*/

// Cria um manipulador cURL
$ch = curl_init('http://example.com/upload.php');

// Cria um objeto CURLFile
$cfile = new CURLFile('cats.jpg','image/jpeg','test_name');

// Atribui dados ao POST
$data = array('test_file' => $cfile);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Executa o manipulador
curl_exec($ch);
?>
```

Estilo procedural

```
<?php
/* http://example.com/upload.php:
<?php var_dump($_FILES); ?>
*/

// Cria um manipulador cURL
$ch = curl_init('http://example.com/upload.php');

// Cria um objeto CURLFile
$cfile = curl_file_create('cats.jpg','image/jpeg','test_name');

// Atribui dados ao POST
$data = array('test_file' => $cfile);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Executa o manipulador
curl_exec($ch);
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["test_file"]=>
  array(5) {
    ["name"]=>
    string(9) "test_name"
    ["type"]=>
    string(10) "image/jpeg"
    ["tmp_name"]=>
    string(14) "/tmp/phpPC9Kbx"
    ["error"]=>
    int(0)
    ["size"]=>
    int(46334)
  }
}
```

**Exemplo #2 Exemplo de **CURLFile::\_\_construct()** enviando múltiplos arquivos**

Estilo orientado a objetos

```
<?php
$request = curl_init('http://www.example.com/upload.php');
curl_setopt($request, CURLOPT_POST, true);
curl_setopt($request, CURLOPT_SAFE_UPLOAD, true);
curl_setopt($request, CURLOPT_POSTFIELDS, [
    'blob[0]' => new CURLFile(realpath('first-file.jpg'), 'image/jpeg'),
    'blob[1]' => new CURLFile(realpath('second-file.txt'), 'text/plain'),
    'blob[2]' => new CURLFile(realpath('third-file.exe'), 'application/octet-stream'),
]);
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

echo curl_exec($request);

var_dump(curl_getinfo($request));
```

Estilo procedural

```
<?php
// procedural
$request = curl_init('http://www.example.com/upload.php');
curl_setopt($request, CURLOPT_POST, true);
curl_setopt($request, CURLOPT_SAFE_UPLOAD, true);
curl_setopt($request, CURLOPT_POSTFIELDS, [
    'blob[0]' => curl_file_create(realpath('first-file.jpg'), 'image/jpeg'),
    'blob[1]' => curl_file_create(realpath('second-file.txt'), 'text/plain'),
    'blob[2]' => curl_file_create(realpath('third-file.exe'), 'application/octet-stream'),
]);
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

echo curl_exec($request);

var_dump(curl_getinfo($request));
```

O exemplo acima produzirá:

```
array(26) {
  ["url"]=>
  string(31) "http://www.example.com/upload.php"
  ["content_type"]=>
  string(24) "text/html; charset=UTF-8"
  ["http_code"]=>
  int(200)
  ["header_size"]=>
  int(198)
  ["request_size"]=>
  int(196)
  ["filetime"]=>
  int(-1)
  ["ssl_verify_result"]=>
  int(0)
  ["redirect_count"]=>
  int(0)
  ["total_time"]=>
  float(0.060062)
  ["namelookup_time"]=>
  float(0.028575)
  ["connect_time"]=>
  float(0.029011)
  ["pretransfer_time"]=>
  float(0.029121)
  ["size_upload"]=>
  float(3230730)
  ["size_download"]=>
  float(811)
  ["speed_download"]=>
  float(13516)
  ["speed_upload"]=>
  float(53845500)
  ["download_content_length"]=>
  float(811)
  ["upload_content_length"]=>
  float(3230730)
  ["starttransfer_time"]=>
  float(0.030355)
  ["redirect_time"]=>
  float(0)
  ["redirect_url"]=>
  string(0) ""
  ["primary_ip"]=>
  string(13) "0.0.0.0"
  ["certinfo"]=>
  array(0) {
  }
  ["primary_port"]=>
  int(80)
  ["local_ip"]=>
  string(12) "0.0.0.0"
  ["local_port"]=>
  int(34856)
}
```

### Veja também

- [curl\_setopt()](function.curl-setopt.md) - Define uma opção para uma transferência cURL

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
