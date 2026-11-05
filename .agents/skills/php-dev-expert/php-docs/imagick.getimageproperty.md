# Retorna a propriedade nomeada da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageproperty.php

---

# Imagick::getImageProperty

(PECL imagick 2, PECL imagick 3)

Imagick::getImageProperty — Retorna a propriedade nomeada da imagem

### Descrição

public function **Imagick::getImageProperty**([string](language.types.string.md) `$name`): [string](language.types.string.md)

Retorna a propriedade nomeada da imagem. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.2 ou superior.

### Parâmetros

`name`
:   Nome da propriedade (por exemplo, Exif:DateTime)

### Valor Retornado

Retorna uma string contendo a propriedade da imagem, false se não
existir uma propriedade com o nome fornecido.

### Examples

**Exemplo #1 Usando **Imagick::getImageProperty()****

Configurando e obtendo propriedade de imagem

```
<?php
$image = new Imagick();
$image->newImage(300, 200, "black");

$image->setImageProperty('Exif:Make', 'Imagick');
echo $image->getImageProperty('Exif:Make');
?>
```

### Veja também

- [Imagick::setImageProperty()](imagick.setimageproperty.md) - Define uma propriedade de imagem

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
