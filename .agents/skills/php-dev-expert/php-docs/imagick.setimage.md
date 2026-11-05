# Substitui imagem no objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimage.php

---

# Imagick::setImage

(PECL imagick 2, PECL imagick 3)

Imagick::setImage — Substitui imagem no objeto

### Descrição

public function **Imagick::setImage**([Imagick](class.imagick.md) `$replace`): [bool](language.types.boolean.md)

Substitui a sequência de imagens atual pela imagem do objeto de substituição.

### Parâmetros

`replace`
:   O objeto Imagick de substituição

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Um exemplo de **Imagick::setImage()****

Um exemplo de uso de Imagick::setImage()

```
<?php
/* Cria o objeto */
$image = new Imagick('origem.jpg');
$replace = new Imagick('substituto.jpg');

/* origem.jpg é substituído por substituto.jpg */
$image->setImage($replace);

/* exibe a imagem */
header('Content-type: image/jpeg');
echo $image;

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
