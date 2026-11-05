# Adiciona arquivos de um diretório por padrão PCRE

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.addpattern.php

---

# ZipArchive::addPattern

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL zip >= 1.9.0)

ZipArchive::addPattern — Adiciona arquivos de um diretório por padrão PCRE

### Descrição

public function **ZipArchive::addPattern**([string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$path` = ".", [array](language.types.array.md) `$options` = []): [array](language.types.array.md)|[false](language.types.singleton.md)

Adiciona arquivos de um diretório que correspondem à expressão regular `pattern`.
A operação não é recursiva. O padrão será correspondido apenas ao nome do arquivo.

### Parâmetros

`pattern`
:   Uma expressão regular [PCRE](book.pcre.md) com a qual os arquivos serão correspondidos.

`path`
:   O diretório que será examinado. O padrão é o diretório de trabalho atual.

`options`
:   Um array associativo de opções aceitas por [ZipArchive::addGlob()](ziparchive.addglob.md).

### Valor Retornado

Um [array](language.types.array.md) de arquivos adicionados em caso de sucesso ou **`false`** em caso de falha

### Examples

**Exemplo #1 Exemplo de **ZipArchive::addPattern()****

Adiciona todos os scripts php e arquivos de texto do diretório atual

```
<?php
$zip = new ZipArchive();
$ret = $zip->open('application.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
if ($ret !== TRUE) {
    printf('Falha com código %d', $ret);
} else {
    $directory = realpath('.');
    $options = array('add_path' => 'sources/', 'remove_path' => $directory);
    $zip->addPattern('/\.(?:php|txt)$/', $directory, $options);
    $zip->close();
}
?>
```

### Veja também

- [ZipArchive::addFile()](ziparchive.addfile.md) - Adiciona um arquivo a um arquivo ZIP a partir do caminho fornecido
- [ZipArchive::addGlob()](ziparchive.addglob.md) - Adicionar arquivos de um diretório por padrão glob

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
