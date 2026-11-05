# Executa conversão de PDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox-pdf-converter.convert.php

---

# wkhtmltox\PDF\Converter::convert

(wkhtmltox >= 0.1.0)

wkhtmltox\PDF\Converter::convert — Executa conversão de PDF

### Descrição

public function **wkhtmltox\PDF\Converter::convert**(): [?](language.types.null.md)[string](language.types.string.md)

Executa a conversão de todos os objetos adicionados anteriormente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Quando o valor de retorno for usado, ele será preenchido com o conteúdo do buffer de conversão.

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
