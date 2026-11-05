# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmagick.examples.php

---

# Examples

A seguir alguns exemplos de algumas operações comuns da Gmagick.

**Exemplo #1 Exemplo de Gmagick**

```
<?php
// Instancia um novo objeto Gmagick
$image = new Gmagick('exemplo.jpg');

// Carrega miniatura da imagem. 0 para qualquer eixo preserva a razão de aspecto
$image->thumbnailimage(100, 0);

// Cria uma borda ao redor da imagem e simula como a imagem ficará como uma pintura a óleo
// Observe o encadeamento de métodos mutadores, que é suportado no gmagick
$image->borderimage("yellow", 8, 8)->oilpaintimage(0.3);

// Grava a imagem atual no estado atual em um arquivo
$image->write('miniatura_exemplo.jpg');
?>
```

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
