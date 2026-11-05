# wkhtmltox

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.wkhtmltox.php

---

# wkhtmltox

# Introdução

libwkhtmltox é uma biblioteca LGPLv3 de código aberto para renderizar HTML em PDF e vários formatos de imagem
usando o mecanismo de renderização QtWebKit.

- [Instalação/Configuração](wkhtmltox.setup.md)
  - [Dependências](wkhtmltox.requirements.md)
  - [Instalação](wkhtmltox.installation.md)
  - [Configurações de Execução](wkhtmltox.configuration.md)
- [wkhtmltox\PDF\Converter](class.wkhtmltox-pdf-converter.md) — A classe wkhtmltox\PDF\Converter
  - [wkhtmltox\PDF\Converter::add](wkhtmltox-pdf-converter.add.md) — Adiciona um objeto para conversão
  - [wkhtmltox\PDF\Converter::\_\_construct](wkhtmltox-pdf-converter.construct.md) — Criar um novo conversor de PDF
  - [wkhtmltox\PDF\Converter::convert](wkhtmltox-pdf-converter.convert.md) — Executa conversão de PDF
  - [wkhtmltox\PDF\Converter::getVersion](wkhtmltox-pdf-converter.getversion.md) — Determina a versão do conversor
- [wkhtmltox\PDF\Object](class.wkhtmltox-pdf-object.md) — A classe wkhtmltox\PDF\Object
  - [wkhtmltox\PDF\Object::\_\_construct](wkhtmltox-pdf-object.construct.md) — Criar um novo objeto PDF
- [wkhtmltox\Image\Converter](class.wkhtmltox-image-converter.md) — A classe wkhtmltox\Image\Converter
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
