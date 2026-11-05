# Define uma propriedade de imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageproperty.php

---

# Imagick::setImageProperty

(PECL imagick 2, PECL imagick 3)

Imagick::setImageProperty — Define uma propriedade de imagem

### Descrição

public function **Imagick::setImageProperty**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Define uma propriedade nomeada para a imagem. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

### Parâmetros

`name`

`value`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Usando **Imagick::setImageProperty()****

Definindo e obtendo propriedades da imagem

```
<?php
$image = new Imagick();
$image->newImage(300, 200, "black");

$image->setImageProperty('Exif:Make', 'Imagick');
echo $image->getImageProperty('Exif:Make');
?>
```

### Veja também

- [Imagick::getImageProperty()](imagick.getimageproperty.md) - Retorna a propriedade nomeada da imagem

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
