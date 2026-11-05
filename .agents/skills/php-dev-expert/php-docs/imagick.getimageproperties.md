# Retorna as propriedades da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.getimageproperties.php

---

# Imagick::getImageProperties

(PECL imagick 2, PECL imagick 3)

Imagick::getImageProperties — Retorna as propriedades da imagem

### Descrição

public function **Imagick::getImageProperties**([string](language.types.string.md) `$pattern` = "\*", [bool](language.types.boolean.md) `$include_values` = **`true`**): [array](language.types.array.md)

Retorna todas as propriedades associadas que correspondem ao padrão. Se **`false`** for passado como segundo parâmetro,
apenas os nomes das propriedades são retornados. Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.6 ou superior.

### Parâmetros

`pattern`
:   O padrão para os nomes das propriedades.

`include_values`
:   Informa se devem ser retornados apenas os nomes das propriedades. Se for **`false`**, apenas os nomes das propriedades são retornados.

### Valor Retornado

Retorna um array contendo as propriedades da imagem ou nomes de propriedades.

### Examples

**Exemplo #1 Usando **Imagick::getImageProperties()****

Um exemplo de extração de informações EXIF.

```
<?php

/* Cria o objeto */
$im = new imagick("/path/to/example.jpg");

/* Obtém as informações EXIF */
$exifArray = $im->getImageProperties("exif:*");

/* Faz um laço de repetição pelas propriedades EXIF */
foreach ($exifArray as $name => $property)
{
    echo "{$name} => {$property}<br />\n";
}

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
