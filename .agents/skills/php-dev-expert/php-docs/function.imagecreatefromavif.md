# Cria uma nova imagem a partir de um arquivo ou URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefromavif.php

---

# imagecreatefromavif

(PHP 8 >= 8.1.0)

imagecreatefromavif — Cria uma nova imagem a partir de um arquivo ou URL

### Descrição

function **imagecreatefromavif**([string](language.types.string.md) `$filename`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreatefromavif()** retorna um objeto de imagem
representando a imagem obtida pelo nome de arquivo fornecido.

### Parâmetros

`filename`
:   Caminho para a imagem rasterizada AVIF.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

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
