# Compõe um conjunto de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.coalesceimages.php

---

# Imagick::coalesceImages

(PECL imagick 2, PECL imagick 3)

Imagick::coalesceImages — Compõe um conjunto de imagens

### Descrição

public function **Imagick::coalesceImages**(): [Imagick](class.imagick.md)

Compõe um conjunto de imagens respeitando quaisquer deslocamentos de página
e métodos de descarte. As sequências de animação GIF, MIFF e MNG
normalmente começam com uma imagem de fundo e cada imagem subsequente
varia em tamanho e deslocamento. Retorna um novo objeto Imagick
onde cada imagem na sequência tem o mesmo tamanho da primeira
e é composta com a próxima imagem na sequência.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um novo objeto Imagick em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

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
