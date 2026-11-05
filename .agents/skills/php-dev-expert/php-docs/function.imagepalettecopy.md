# Copia a paleta de uma imagem para outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagepalettecopy.php

---

# imagepalettecopy

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

imagepalettecopy — Copia a paleta de uma imagem para outra

### Descrição

function **imagepalettecopy**([GdImage](class.gdimage.md) `$dst`, [GdImage](class.gdimage.md) `$src`): [void](language.types.void.md)

**imagepalettecopy()** copia a paleta da imagem
`src` para a imagem
`dst`.

### Parâmetros

`dst`
:   O objeto imagem de destino.

`src`
:   O objeto imagem de origem.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `dst` e `src` agora esperam instâncias [GdImage](class.gdimage.md); anteriormente, recursos do tipo [resource](language.types.resource.md) eram esperados. |

### Examples

**Exemplo #1 Exemplo de **imagepalettecopy()****

```
<?php
// Cria duas imagens de paleta
$palette1 = imagecreate(100, 100);
$palette2 = imagecreate(100, 100);

// Aloca a cor verde para o
// fundo da primeira imagem de paleta
$green = imagecolorallocate($palette1, 0, 255, 0);

// Copia a paleta da imagem 1 para a imagem 2
imagepalettecopy($palette2, $palette1);

// Agora que a paleta está copiada, pode-se usar
// a cor verde alocada à imagem 1 sem usar
// imagecolorallocate() duas vezes
imagefilledrectangle($palette2, 0, 0, 99, 99, $green);

// Mostra a imagem no navegador
header('Content-type: image/png');

imagepng($palette2);
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
