# Cria um objeto CURLStringFile

> **Fonte / Source:** https://www.php.net/manual/pt_BR/curlstringfile.construct.php

---

# CURLStringFile::\_\_construct

(PHP 8 >= 8.1.0)

CURLStringFile::\_\_construct — Cria um objeto CURLStringFile

### Descrição

public function **CURLStringFile::\_\_construct**([string](language.types.string.md) `$data`, [string](language.types.string.md) `$postname`, [string](language.types.string.md) `$mime` = "application/octet-stream")

Cria um objeto [CURLStringFile](class.curlstringfile.md), usado para carregar um arquivo com **`CURLOPT_POSTFIELDS`**.

### Parâmetros

`data`
:   O conteúdo a ser carregado.

`postname`
:   O nome do arquivo a ser usado nos dados de carregamento.

`mime`
:   Tipo MIME do arquivo (o padrão é `application/octet-stream`).

### Examples

**Exemplo #1 Exemplo de **CURLStringFile::\_\_construct()****

```
<?php
/* http://example.com/upload.php:
<?php
var_dump($_FILES);
var_dump(file_get_contents($_FILES['test_string']['tmp_name']));
?>
*/

// Cria um identificador cURL
$ch = curl_init('http://example.com/upload.php');

// Cria um objeto CURLStringFile
$cstringfile = new CURLStringFile('test upload contents','test.txt','text/plain');

// Atribui dados POST
$data = array('test_string' => $cstringfile);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Executa o manipulador
curl_exec($ch);
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["test_string"]=>
  array(5) {
    ["name"]=>
    string(8) "test.txt"
    ["type"]=>
    string(10) "text/plain"
    ["tmp_name"]=>
    string(14) "/tmp/phpTtaoCz"
    ["error"]=>
    int(0)
    ["size"]=>
    int(20)
  }
}
string(20) "test upload contents"
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
