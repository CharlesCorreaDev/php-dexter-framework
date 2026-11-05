# Cria uma miniatura de corte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.cropthumbnailimage.php

---

# Gmagick::cropthumbnailimage

(PECL gmagick >= Unknown)

Gmagick::cropthumbnailimage — Cria uma miniatura de corte

### Descrição

public function **Gmagick::cropthumbnailimage**([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`): [Gmagick](class.gmagick.md)

Cria uma miniatura de tamanho fixo primeiro reduzindo a imagem e cortando uma área específica a partir do centro.

### Parâmetros

`width`
:   A largura da miniatura.

`height`
:   A altura da miniatura.

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) recortado.

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
