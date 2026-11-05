# Recupera os atributos externos de uma entrada definida pelo seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getexternalattributesindex.php

---

# ZipArchive::getExternalAttributesIndex

(PHP 5 >= 5.6.0, PHP 7, PHP 8, PECL zip >= 1.12.4)

ZipArchive::getExternalAttributesIndex — Recupera os atributos externos de uma entrada definida pelo seu índice

### Descrição

public function **ZipArchive::getExternalAttributesIndex**(  
    [int](language.types.integer.md) `$index`,  
    [int](language.types.integer.md) `&$opsys`,  
    [int](language.types.integer.md) `&$attr`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Recupera os atributos externos de uma entrada definida pelo seu índice.

### Parâmetros

`index`
:   Índice da entrada.

`opsys`
:   Em caso de sucesso, recebe o código do sistema operacional definido por uma das constantes ZipArchive::OPSYS\_.

`attr`
:   Em caso de sucesso, recebe os atributos externos. O valor depende do sistema operacional.

`flags`
:   Se flags estiver definido como **`ZipArchive::FL_UNCHANGED`**, os atributos originais inalterados
    são retornados.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

Este exemplo extrai todas as entradas de um arquivo ZIP
test.zip e
define os direitos Unix a partir dos atributos externos.

**Exemplo #1 Extrair todas as entradas com direitos Unix**

```
<?php
$zip = new ZipArchive();
if ($zip->open('test.zip') === TRUE) {
    for ($idx=0 ; $s = $zip->statIndex($idx) ; $idx++) {
        if ($zip->extractTo('.', $s['name'])) {
            if ($zip->getExternalAttributesIndex($idx, $opsys, $attr)
                && $opsys==ZipArchive::OPSYS_UNIX) {
               chmod($s['name'], ($attr >> 16) & 0777);
            }
        }
    }
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
