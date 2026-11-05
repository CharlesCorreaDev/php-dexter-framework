# Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getstreamname.php

---

# ZipArchive::getStreamName

(PHP 8 >= 8.2.0, PECL zip >= 1.20.0)

ZipArchive::getStreamName — Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)

### Descrição

public function **ZipArchive::getStreamName**([string](language.types.string.md) `$name`, [int](language.types.integer.md) `$flags` = 0): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Obtém um manipulador de arquivo para a entrada definida pelo seu nome. Por enquanto, suporta apenas
operações de leitura.

### Parâmetros

`name`
:   O nome da entrada a ser usado.

`flags`
:   Se flags estiver definido como **`ZipArchive::FL_UNCHANGED`**, o fluxo original inalterado
    é retornado.

### Valor Retornado

Retorna um ponteiro de arquivo (recurso) em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Obtém o conteúdo da entrada com [fread()](function.fread.md) e armazená-lo**

```
<?php
$contents = '';
$z = new ZipArchive();
if ($z->open('test.zip')) {
    $fp = $z->getStreamName('test', ZipArchive::FL_UNCHANGED);
    if(!$fp) die($z->getStatusString());

    echo stream_get_contents($fp);

    fclose($fp);
}
?>
```

### Veja também

- [ZipArchive::getStreamIndex()](ziparchive.getstreamindex.md) - Obtém um manipulador de arquivo para a entrada definida pelo seu índice (somente leitura)

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
