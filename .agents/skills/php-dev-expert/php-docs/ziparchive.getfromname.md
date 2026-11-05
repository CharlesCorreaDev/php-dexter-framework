# Retorna o conteúdo da entrada usando seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getfromname.php

---

# ZipArchive::getFromName

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::getFromName — Retorna o conteúdo da entrada usando seu nome

### Descrição

public function **ZipArchive::getFromName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$len` = 0, [int](language.types.integer.md) `$flags` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o conteúdo da entrada usando seu nome.

### Parâmetros

`name`
:   Nome da entrada

`len`
:   O comprimento a ser lido da entrada. Se `0`, então a
    entrada inteira é lida.

`flags`
:   As opções a serem usadas para encontrar a entrada. Os seguintes valores podem
    ser ORed.

    - **`ZipArchive::FL_UNCHANGED`**
    - **`ZipArchive::FL_COMPRESSED`**
    - **`ZipArchive::FL_NOCASE`**

### Valor Retornado

Retorna o conteúdo da entrada em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Obter o conteúdo do arquivo**

```
<?php
$zip = new ZipArchive;
if ($zip->open('test1.zip') === TRUE) {
    echo $zip->getFromName('testfromfile.php');
    $zip->close();
} else {
    echo 'falha';
}
?>
```

**Exemplo #2 Converter uma imagem de uma entrada zip**

```
<?php
$z = new ZipArchive();
if ($z->open(dirname(__FILE__) . '/test_im.zip')) {
    $im_string = $z->getFromName("pear_item.gif");
    $im = imagecreatefromstring($im_string);
    imagepng($im, 'b.png');
}
?>
```

### Veja também

- [ZipArchive::getFromIndex()](ziparchive.getfromindex.md) - Retorna o conteúdo da entrada usando seu índice

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
