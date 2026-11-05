# Valida um documento com base em um esquema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.schemavalidatesource.php

---

# DOMDocument::schemaValidateSource

(PHP 5, PHP 7, PHP 8)

DOMDocument::schemaValidateSource — 
Valida um documento com base em um esquema

### Descrição

public function **DOMDocument::schemaValidateSource**([string](language.types.string.md) `$source`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Valida um documento com base em um esquema definido na string fornecida.

### Parâmetros

`source`
:   Uma string contendo o esquema.

`flags`
:   Um conjunto de bits para as flags de validação de esquema do Libxml. Atualmente, o único valor suportado é [LIBXML\_SCHEMA\_CREATE](libxml.constants.md). Disponível desde o Libxml 2.6.14.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [DOMDocument::schemaValidate()](domdocument.schemavalidate.md) - Valida um documento com base em um esquema. Apenas XML Schema 1.0 é suportado.
- [DOMDocument::relaxNGValidate()](domdocument.relaxngvalidate.md) - Realiza a validação relaxNG no documento
- [DOMDocument::relaxNGValidateSource()](domdocument.relaxngvalidatesource.md) - Realiza a validação relaxNG no documento
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
