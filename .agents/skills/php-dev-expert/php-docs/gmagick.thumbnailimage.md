# Altera o tamanho de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.thumbnailimage.php

---

# Gmagick::thumbnailimage

(PECL gmagick >= Unknown)

Gmagick::thumbnailimage — Altera o tamanho de uma imagem

### Descrição

public function **Gmagick::thumbnailimage**([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`, [bool](language.types.boolean.md) `$fit` = **`false`**): [Gmagick](class.gmagick.md)

Altera o tamanho de uma imagem para as dimensões fornecidas e remove quaisquer perfis associados.
O objetivo é produzir pequenas imagens em miniatura de baixo custo, adequadas para exibição na Web.
Se **`true`** for fornecido como um terceiro parâmetro, os parâmetros de colunas e linhas serão usados ​​como máximos
para cada lado. Ambos os lados serão reduzidos até corresponderem ou ficarem menores que o parâmetro fornecido para o lado.

### Parâmetros

`width`
:   Largura da imagem.

`height`
:   Altura da imagem.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md).

### Erros/Exceções

Lança uma exceção
**GmagickException** em caso de erro.

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
