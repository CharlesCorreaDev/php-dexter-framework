# Adiciona um comentário à sua imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.commentimage.php

---

# Imagick::commentImage

(PECL imagick 2, PECL imagick 3)

Imagick::commentImage — Adiciona um comentário à sua imagem

### Descrição

public function **Imagick::commentImage**([string](language.types.string.md) `$comment`): [bool](language.types.boolean.md)

Adiciona um comentário à sua imagem.

### Parâmetros

`comment`
:   O comentário a ser adicionado.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::commentImage()**:**

Comentando uma imagem e recuperando o comentário:

```
<?php

/* Cria um novo objeto Imagick */
$im = new imagick();

/* Cria uma imagem vazia */
$im->newImage(100, 100, new ImagickPixel("red"));

/* Adiciona comentário à imagem */
$im->commentImage("Olá, mundo!");

/* Mostra o comentário */
echo $im->getImageProperty("comment");

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
