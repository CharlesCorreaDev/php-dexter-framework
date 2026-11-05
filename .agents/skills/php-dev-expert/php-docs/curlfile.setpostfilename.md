# Define o nome do arquivo para a requisição POST

> **Fonte / Source:** https://www.php.net/manual/pt_BR/curlfile.setpostfilename.php

---

# CURLFile::setPostFilename

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

CURLFile::setPostFilename — Define o nome do arquivo para a requisição POST

### Descrição

public function **CURLFile::setPostFilename**([string](language.types.string.md) `$posted_filename`): [void](language.types.void.md)

### Parâmetros

`posted_filename`
:   Nome do arquivo a ser utilizado nos dados da requisição POST.

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
