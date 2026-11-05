# Recupera os atributos externos de uma entrada definida pelo seu nome

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getexternalattributesname.php

---

# ZipArchive::getExternalAttributesName

(PHP 5 >= 5.6.0, PHP 7, PHP 8, PECL zip >= 1.12.4)

ZipArchive::getExternalAttributesName — Recupera os atributos externos de uma entrada definida pelo seu nome

### Descrição

public function **ZipArchive::getExternalAttributesName**(  
    [string](language.types.string.md) `$name`,  
    [int](language.types.integer.md) `&$opsys`,  
    [int](language.types.integer.md) `&$attr`,  
    [int](language.types.integer.md) `$flags` = 0  
): [bool](language.types.boolean.md)

Recupera os atributos externos de uma entrada definida pelo seu nome.

### Parâmetros

`name`
:   Nome da entrada.

`opsys`
:   Em caso de sucesso, recebe o código do sistema operacional definido por uma das constantes ZipArchive::OPSYS\_.

`attr`
:   Em caso de sucesso, recebe os atributos externos. O valor depende do sistema operacional.

`flags`
:   Se flags estiver definido como **`ZipArchive::FL_UNCHANGED`**, os atributos originais inalterados
    são retornados.

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
