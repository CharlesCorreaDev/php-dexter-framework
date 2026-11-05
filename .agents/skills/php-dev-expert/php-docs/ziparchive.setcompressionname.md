# Define o método de compressão de uma entrada definida pelo seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setcompressionname.php

---

# ZipArchive::setCompressionName

(PHP 7, PHP 8, PECL zip >= 1.13.0)

ZipArchive::setCompressionName — Define o método de compressão de uma entrada definida pelo seu nome

### Descrição

public function **ZipArchive::setCompressionName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$method`, [int](language.types.integer.md) `$compflags` = 0): [bool](language.types.boolean.md)

Define o método de compressão de uma entrada definida pelo seu nome.

### Parâmetros

`name`
:   Nome da entrada.

`method`
:   O método de compressão, uma das constantes
    **`ZipArchive::CM_*`**.

`compflags`
:   Nível de compressão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Adicionar arquivos com diferentes métodos de compressão a um arquivo**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip', ZipArchive::CREATE);
if ($res === TRUE) {
    $zip->addFromString('foo', 'Some text');
    $zip->addFromString('bar', 'Some other text');
    $zip->setCompressionName('foo', ZipArchive::CM_STORE);
    $zip->setCompressionName('bar', ZipArchive::CM_DEFLATE);
    $zip->close();
    echo 'ok';
} else {
    echo 'falha';
}
?>
```

**Exemplo #2 Adicionar arquivo e definir método de compressão**

```
<?php
$zip = new ZipArchive;
$res = $zip->open('test.zip', ZipArchive::CREATE);
if ($res === TRUE) {
    $zip->addFile('foo.jpg', 'bar.jpg');
    $zip->setCompressionName('bar.jpg', ZipArchive::CM_XZ);
    $zip->close();
    echo 'ok';
} else {
    echo 'falha';
}
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
