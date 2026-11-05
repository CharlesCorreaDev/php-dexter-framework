# Informações de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.exif.php

---

# Informações de imagem

# Introdução

Com a extensão exif pode-se trabalhar com metadados de imagem. Por
exemplo, pode-se usar funções exif para ler metadados de fotografias obtidas
de câmeras digitais com informações armazenadas no cabeçalho do aqruivo.
Estas informações são usualmente encontradas em imagens JPEG e
TIFF.

- [Instalação/Configuração](exif.setup.md)
  - [Dependências](exif.requirements.md)
  - [Instalação](exif.installation.md)
  - [Configurações de Execução](exif.configuration.md)
- [Constantes predefinidas](exif.constants.md)
- [Funções de Exif](ref.exif.md)
  - [exif\_imagetype](function.exif-imagetype.md) — Verifica o tipo de uma imagem
  - [exif\_read\_data](function.exif-read-data.md) — Lê os cabeçalhos EXIF de um arquivo de imagen
  - [exif\_tagname](function.exif-tagname.md) — Obtém o nome do cabeçalho para um índice
  - [exif\_thumbnail](function.exif-thumbnail.md) — Recupera a miniatura embutida de uma imagem
  - [read\_exif\_data](function.read-exif-data.md) — Sinônimo de exif\_read\_data

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
