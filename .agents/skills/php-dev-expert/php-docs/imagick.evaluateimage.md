# Aplica uma expressão a uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.evaluateimage.php

---

# Imagick::evaluateImage

(PECL imagick 2, PECL imagick 3)

Imagick::evaluateImage — Aplica uma expressão a uma imagem

### Descrição

public function **Imagick::evaluateImage**([int](language.types.integer.md) `$op`, [float](language.types.float.md) `$constant`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Aplica uma expressão aritmética, relacional ou lógica a uma imagem. Use
esses operadores para clarear ou escurecer uma imagem, para aumentar ou diminuir
o contraste de uma imagem ou para produzir o “negativo” de uma imagem.

### Parâmetros

`op`
:   O operador de avaliação

`constant`
:   O valor do operador

`channel`
:   Forneça qualquer constante de canal válida para o modo de canal. Para
    aplicar a mais de um canal, combine constantes de tipo de canal usando
    operadores bit a bit. Consulte esta
    lista de [constantes de canal](imagick.constants.md#imagick.constants.channel).

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::evaluateImage()****

Usando evaluateImage para reduzir a opacidade em uma imagem.

```
<?php
// Cria novo objeto com a imagem
$im = new Imagick('example-alpha.png');

// Reduz alfa em 50%
$im->evaluateImage(Imagick::EVALUATE_DIVIDE, 2, Imagick::CHANNEL_ALPHA);

// Exibe a imagem
header("Content-Type: image/png");
echo $im;
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
