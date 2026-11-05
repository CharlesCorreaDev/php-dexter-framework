# A classe wkhtmltox\Image\Converter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.wkhtmltox-image-converter.php

---

# A classe wkhtmltox\Image\Converter

(wkhtmltox >= 0.1.0)

## Introdução

Converte uma entrada HTML em vários formatos de imagem.

## Resumo da classe

class **wkhtmltox\Image\Converter**
{

/\* Constructor \*/

public function [\_\_construct](wkhtmltox-image-converter.construct.md)([string](language.types.string.md) `$buffer` = ?, [array](language.types.array.md) `$settings` = ?)

/\* Métodos \*/

public function [convert](wkhtmltox-image-converter.convert.md)(): [?](language.types.null.md)[string](language.types.string.md)

public function [getVersion](wkhtmltox-image-converter.getversion.md)(): [string](language.types.string.md)

}

## Índice

- [wkhtmltox\Image\Converter::\_\_construct](wkhtmltox-image-converter.construct.md) — Cria um novo conversor de imagem
- [wkhtmltox\Image\Converter::convert](wkhtmltox-image-converter.convert.md) — Executa conversão de imagem
- [wkhtmltox\Image\Converter::getVersion](wkhtmltox-image-converter.getversion.md) — Determina a versão do conversor

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
