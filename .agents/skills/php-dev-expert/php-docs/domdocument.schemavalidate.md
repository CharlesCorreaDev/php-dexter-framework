# Valida um documento com base em um esquema. Apenas XML Schema 1.0 é suportado.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.schemavalidate.php

---

# DOMDocument::schemaValidate

(PHP 5, PHP 7, PHP 8)

DOMDocument::schemaValidate — 
Valida um documento com base em um esquema. Apenas XML Schema 1.0 é suportado.

### Descrição

public function **DOMDocument::schemaValidate**([string](language.types.string.md) `$filename`, [int](language.types.integer.md) `$flags` = 0): [bool](language.types.boolean.md)

Valida um documento com base no arquivo de esquema fornecido.

### Parâmetros

`filename`
:   O caminho para o esquema.

`flags`
:   Um conjunto de bits para as flags de validação de esquema do Libxml. Atualmente, o único valor
    suportado é [LIBXML\_SCHEMA\_CREATE](libxml.constants.md). Disponível desde o Libxml 2.6.14.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [DOMDocument::schemaValidateSource()](domdocument.schemavalidatesource.md) - Valida um documento com base em um esquema
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
