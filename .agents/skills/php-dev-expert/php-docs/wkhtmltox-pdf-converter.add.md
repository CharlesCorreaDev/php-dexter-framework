# Adiciona um objeto para conversão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox-pdf-converter.add.php

---

# wkhtmltox\PDF\Converter::add

(wkhtmltox >= 0.1.0)

wkhtmltox\PDF\Converter::add — Adiciona um objeto para conversão

### Descrição

public function **wkhtmltox\PDF\Converter::add**([wkhtmltox\PDF\Object](class.wkhtmltox-pdf-object.md) `$object`): [void](language.types.void.md)

Adiciona o objeto fornecido à conversão

### Parâmetros

`object`
:   O objeto a ser adicionado.

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
