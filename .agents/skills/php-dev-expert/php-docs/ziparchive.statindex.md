# Obtenha os detalhes de uma entrada definida pelo seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.statindex.php

---

# ZipArchive::statIndex

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::statIndex — Obtenha os detalhes de uma entrada definida pelo seu índice

### Descrição

public function **ZipArchive::statIndex**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

A função obtém informações sobre a entrada definida pelo seu
índice.

### Parâmetros

`index`
:   Índice da entrada

`flags`
:   **`ZipArchive::FL_UNCHANGED`** pode ser ORed para solicitar
    informações sobre o arquivo original no arquivo,
    ignorando quaisquer alterações feitas.

### Valor Retornado

Retorna um array contendo os detalhes da entrada ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Impressão das informações stat de uma entrada**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip');
if ($res === TRUE) {
    print_r($zip->statIndex(3));
    $zip->close();
} else {
    echo 'falha, código:' . $res;
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [name] => foobar/baz
    [index] => 3
    [crc] => 499465816
    [size] => 27
    [mtime] => 1123164748
    [comp_size] => 24
    [comp_method] => 8
)
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
