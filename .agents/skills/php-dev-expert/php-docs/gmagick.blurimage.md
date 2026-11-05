# Adiciona filtro de desfoque à imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.blurimage.php

---

# Gmagick::blurimage

(PECL gmagick >= Unknown)

Gmagick::blurimage — Adiciona filtro de desfoque à imagem

### Descrição

public function **Gmagick::blurimage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`, [int](language.types.integer.md) `$channel` = ?): [Gmagick](class.gmagick.md)

Adiciona filtro de desfoque à imagem.

### Parâmetros

`radius`
:   Raio de desfoque

`sigma`
:   Desvio padrão

### Valor Retornado

O objeto [Gmagick](class.gmagick.md) desfocado

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
