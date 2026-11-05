# Realiza a validação relaxNG no documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.relaxngvalidatesource.php

---

# DOMDocument::relaxNGValidateSource

(PHP 5, PHP 7, PHP 8)

DOMDocument::relaxNGValidateSource — 
Realiza a validação relaxNG no documento

### Descrição

public function **DOMDocument::relaxNGValidateSource**([string](language.types.string.md) `$source`): [bool](language.types.boolean.md)

Realiza a validação [» relaxNG](http://www.relaxng.org/) no documento
com base no esquema RNG fornecido.

### Parâmetros

`source`
:   Uma string contendo o esquema RNG.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [DOMDocument::relaxNGValidate()](domdocument.relaxngvalidate.md) - Realiza a validação relaxNG no documento
- [DOMDocument::schemaValidate()](domdocument.schemavalidate.md) - Valida um documento com base em um esquema. Apenas XML Schema 1.0 é suportado.
- [DOMDocument::schemaValidateSource()](domdocument.schemavalidatesource.md) - Valida um documento com base em um esquema
- [DOMDocument::validate()](domdocument.validate.md) - Valida o documento com base em seu DTD

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
