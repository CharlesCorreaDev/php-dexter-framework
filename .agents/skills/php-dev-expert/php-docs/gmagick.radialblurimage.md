# Desfoca uma imagem de forma radial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.radialblurimage.php

---

# Gmagick::radialblurimage

(PECL gmagick >= Unknown)

Gmagick::radialblurimage — Desfoca uma imagem de forma radial

### Descrição

public function **Gmagick::radialblurimage**([float](language.types.float.md) `$angle`, [int](language.types.integer.md) `$channel` = Gmagick::CHANNEL\_DEFAULT): [Gmagick](class.gmagick.md)

Desfoca uma imagem de forma radial

### Parâmetros

`angle`
:   O ângulo do desfoque em graus.

`channel`
:   Canal relacionado.

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
