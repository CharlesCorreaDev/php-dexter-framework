# Define o tipo de mídia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/curlfile.setmimetype.php

---

# CURLFile::setMimeType

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

CURLFile::setMimeType — Define o tipo de mídia

### Descrição

public function **CURLFile::setMimeType**([string](language.types.string.md) `$mime_type`): [void](language.types.void.md)

### Parâmetros

`mime_type`
:   Tipo de mídia a ser utilizado nos dados da requisição POST.

### Valor Retornado

Nenhum valor é retornado.

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
