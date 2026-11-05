# Define os atributos externos de uma entrada definida pelo seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setexternalattributesname.php

---

# ZipArchive::setExternalAttributesName

(PHP 5 >= 5.6.0, PHP 7, PHP 8, PECL zip >= 1.12.4)

ZipArchive::setExternalAttributesName — Define os atributos externos de uma entrada definida pelo seu nome

### Descrição

public function **ZipArchive::setExternalAttributesName**(  
    [string](language.types.string.md) `$name`,  
    [int](language.types.integer.md) `$opsys`,  
    [int](language.types.integer.md) `$attr`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Define os atributos externos de uma entrada definida pelo seu nome.

### Parâmetros

`name`
:   Nome da entrada.

`opsys`
:   O código do sistema operacional definido por uma das constantes ZipArchive::OPSYS\_.

`attr`
:   Os atributos externos. O valor depende do sistema operacional.

`flags`
:   Opções opcionais. Atualmente não utilizado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

Este exemplo abre um arquivo ZIP
test.zip e adiciona
o arquivo test.txt
com seus direitos Unix como atributos externos.

**Exemplo #1 Arquivar um arquivo, com seus direitos Unix**

```
<?php
$zip = new ZipArchive();
$stat = stat($filename='test.txt');
if (is_array($stat) && $zip->open('test.zip', ZipArchive::CREATE) === TRUE) {
    $zip->addFile($filename);
    $zip->setExternalAttributesName($filename, ZipArchive::OPSYS_UNIX, $stat['mode'] << 16);
    $zip->close();
    echo "Ok\n";
} else {
    echo "KO\n";
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
