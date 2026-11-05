# Define o método de compressão de uma entrada definida pelo seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setcompressionindex.php

---

# ZipArchive::setCompressionIndex

(PHP 7, PHP 8, PECL zip >= 1.13.0)

ZipArchive::setCompressionIndex — Define o método de compressão de uma entrada definida pelo seu índice

### Descrição

public function **ZipArchive::setCompressionIndex**([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$method`, [int](language.types.integer.md) `$compflags` = 0): [bool](language.types.boolean.md)

Define o método de compressão de uma entrada definida pelo seu índice.

### Parâmetros

`index`
:   Índice da entrada.

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
    $zip->setCompressionIndex(0, ZipArchive::CM_STORE);
    $zip->setCompressionIndex(1, ZipArchive::CM_DEFLATE);
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
