# A classe wkhtmltox\PDF\Converter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.wkhtmltox-pdf-converter.php

---

# A classe wkhtmltox\PDF\Converter

(wkhtmltox >= 0.1.0)

## Introdução

Converte uma entrada HTML, ou conjunto de entradas HTML, em saída PDF.

## Resumo da classe

class **wkhtmltox\PDF\Converter**
{

/\* Constructor \*/

public function [\_\_construct](wkhtmltox-pdf-converter.construct.md)([array](language.types.array.md) `$settings` = ?)

/\* Métodos \*/

public function [add](wkhtmltox-pdf-converter.add.md)([wkhtmltox\PDF\Object](class.wkhtmltox-pdf-object.md) `$object`): [void](language.types.void.md)

public function [convert](wkhtmltox-pdf-converter.convert.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getVersion](wkhtmltox-pdf-converter.getversion.md)(): [string](language.types.string.md)

}

## Índice

- [wkhtmltox\PDF\Converter::add](wkhtmltox-pdf-converter.add.md) — Adiciona um objeto para conversão
- [wkhtmltox\PDF\Converter::\_\_construct](wkhtmltox-pdf-converter.construct.md) — Criar um novo conversor de PDF
- [wkhtmltox\PDF\Converter::convert](wkhtmltox-pdf-converter.convert.md) — Executa conversão de PDF
- [wkhtmltox\PDF\Converter::getVersion](wkhtmltox-pdf-converter.getversion.md) — Determina a versão do conversor

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
