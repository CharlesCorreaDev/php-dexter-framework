# Define os atributos externos de uma entrada definida pelo seu índice

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.setexternalattributesindex.php

---

# ZipArchive::setExternalAttributesIndex

(PHP 5 >= 5.6.0, PHP 7, PHP 8, PECL zip >= 1.12.4)

ZipArchive::setExternalAttributesIndex — Define os atributos externos de uma entrada definida pelo seu índice

### Descrição

public function **ZipArchive::setExternalAttributesIndex**(  
    [int](language.types.integer.md) `$index`,  
    [int](language.types.integer.md) `$opsys`,  
    [int](language.types.integer.md) `$attr`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Define os atributos externos de uma entrada definida pelo seu índice.

### Parâmetros

`index`
:   Índice da entrada.

`opsys`
:   O código do sistema operacional definido por uma das constantes ZipArchive::OPSYS\_.

`attr`
:   Os atributos externos. O valor depende do sistema operacional.

`flags`
:   Opções opcionais. Atualmente não utilizado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
