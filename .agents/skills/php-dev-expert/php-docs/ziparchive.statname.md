# Obtém os detalhes de uma entrada definida pelo seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.statname.php

---

# ZipArchive::statName

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.5.0)

ZipArchive::statName — Obtém os detalhes de uma entrada definida pelo seu nome

### Descrição

public function **ZipArchive::statName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [array](language.types.array.md)|[false](language.types.singleton.md)

A função obtém informações sobre a entrada definida pelo seu
nome.

### Parâmetros

`name`
:   Nome da entrada

`flags`
:   O argumento flags especifica como a pesquisa pelo nome deve ser feita.
    Além disso, **`ZipArchive::FL_UNCHANGED`** pode ser ORed para solicitar
    informações sobre o arquivo original no arquivo,
    ignorando quaisquer alterações feitas.

    - **`ZipArchive::FL_NOCASE`**
    - **`ZipArchive::FL_NODIR`**
    - **`ZipArchive::FL_UNCHANGED`**

### Valor Retornado

Retorna um array contendo os detalhes da entrada ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Impressão das informações stat de uma entrada**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip');
if ($res === TRUE) {
    print_r($zip->statName('foobar/baz'));
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
