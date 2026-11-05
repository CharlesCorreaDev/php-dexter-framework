# Define o tamanho em pontos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setpointsize.php

---

# Imagick::setPointSize

(PECL imagick 2 >= 2.1.0, PECL imagick 3)

Imagick::setPointSize — Define o tamanho em pontos

### Descrição

public function **Imagick::setPointSize**([float](language.types.float.md) `$point_size`): [bool](language.types.boolean.md)

Define a propriedade de tamanho em pontos do objeto. Este método pode ser usado, por exemplo, para definir o tamanho da fonte
para o pseudoformato "caption:".
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.7 ou superior.

### Parâmetros

`point_size`
:   Tamanho em pontos.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Um exemplo de **Imagick::setPointSize()****

Exemplo de uso de Imagick::setPointSize()

```
<?php
/* Cria novo objeto Imagick */
$im = new Imagick();

/* Define a fonte para o objeto */
$im->setFont("example.ttf");

/* Define o tamanho em pontos */
$im->setPointSize(12);

/* Cria a nova legenda */
$im->newPseudoImage(100, 100, "caption:Hello");

/* Faz algo com a imagem */
?>
```

### Veja também

- [Imagick::getPointSize()](imagick.getpointsize.md) - Obtém o tamanho do ponto

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
