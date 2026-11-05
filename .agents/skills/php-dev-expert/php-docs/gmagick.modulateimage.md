# Controle brilho, saturação e matiz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.modulateimage.php

---

# Gmagick::modulateimage

(PECL gmagick >= Unknown)

Gmagick::modulateimage — Controle brilho, saturação e matiz

### Descrição

public function **Gmagick::modulateimage**([float](language.types.float.md) `$brightness`, [float](language.types.float.md) `$saturation`, [float](language.types.float.md) `$hue`): [Gmagick](class.gmagick.md)

Permite controlar o brilho, a saturação e o matiz de uma imagem. Matiz é a
porcentagem de rotação absoluta da posição atual. Por exemplo, 50 resulta
em uma rotação no sentido anti-horário de 90 graus, 150 resulta em uma rotação no sentido
horário de 90 graus, com 0 e 200 resultando em uma rotação de 180 graus.

### Parâmetros

`brightness`
:   A alteração percentual no brilho (-100 a +100).

`saturation`
:   A mudança percentual na saturação (-100 a +100)

`hue`
:   A mudança percentual no matiz (-100 a +100)

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
