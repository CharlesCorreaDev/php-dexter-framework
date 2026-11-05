# Define a fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setfont.php

---

# Imagick::setFont

(PECL imagick 2 >= 2.1.0, PECL imagick 3)

Imagick::setFont — Define a fonte

### Descrição

public function **Imagick::setFont**([string](language.types.string.md) `$font`): [bool](language.types.boolean.md)

Define a propriedade da fonte do objeto. Este método pode ser usado, por exemplo, para definir a fonte do
pseudoformato "caption:". A fonte precisa ser definida na configuração do ImageMagick
ou deve existir um arquivo com o nome definido no parâmetro `font`. Este método não
deve ser confundido com [ImagickDraw::setFont()](imagickdraw.setfont.md) que define a fonte
para um objeto ImagickDraw específico.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.7 ou superior.

### Parâmetros

`font`
:   Nome da fonte ou um nome de arquivo.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Um exemplo de **Imagick::setFont()****

Exemplo de uso de Imagick::setFont

```
<?php
/* Cria novo objeto Imagick */
$im = new Imagick();

/* Define a fonte para o objeto */
$im->setFont("example.ttf");

/* Cria nova legenda */
$im->newPseudoImage(100, 100, "caption:Hello");

/* Faz algo com a imagem */
?>
```

### Veja também

- [Imagick::getFont()](imagick.getfont.md) - Obtem a fonte
- [ImagickDraw::setFont()](imagickdraw.setfont.md) - Define a fonte totalmente especificada a ser usada ao fazer anotações com texto
- [ImagickDraw::getFont()](imagickdraw.getfont.md) - Retorna a fonte

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
