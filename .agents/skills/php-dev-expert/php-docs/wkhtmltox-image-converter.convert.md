# Executa conversão de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox-image-converter.convert.php

---

# wkhtmltox\Image\Converter::convert

(wkhtmltox >= 0.1.0)

wkhtmltox\Image\Converter::convert — Executa conversão de imagem

### Descrição

public function **wkhtmltox\Image\Converter::convert**(): [?](language.types.null.md)[string](language.types.string.md)

Executa a conversão do buffer de entrada.

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
