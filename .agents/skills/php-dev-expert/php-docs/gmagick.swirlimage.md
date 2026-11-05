# Turbilhona os pixels em torno do centro da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.swirlimage.php

---

# Gmagick::swirlimage

(PECL gmagick >= Unknown)

Gmagick::swirlimage — Turbilhona os pixels em torno do centro da imagem

### Descrição

public function **Gmagick::swirlimage**([float](language.types.float.md) `$degrees`): [Gmagick](class.gmagick.md)

Turbilhona os pixels em torno do centro da imagem, onde os graus indicam a varredura do arco através do qual cada pixel é movido. Um efeito cada vez mais dramático é obtido à medida em que os graus aumentam de 1 a 360.

### Parâmetros

`degrees`
:   Defina a intensidade do efeito de turbilhonamento.

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
