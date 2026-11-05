# Corrige o gama de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.gammaimage.php

---

# Imagick::gammaImage

(PECL imagick 2, PECL imagick 3)

Imagick::gammaImage — Corrige o gama de uma imagem

### Descrição

public function **Imagick::gammaImage**([float](language.types.float.md) `$gamma`, [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Corrige o gama de uma imagem. A mesma imagem visualizada em diferentes dispositivos
terá diferenças perceptivas na forma como as intensidades da imagem são
representadas na tela. Especifica níveis de gama individuais para os canais
vermelho, verde e azul ou ajusta todos os três com o parâmetro gama.
Os valores normalmente variam de 0.8 a 2.3.

### Parâmetros

`gamma`
:   A quantidade de correção de gama.

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

**Exemplo #1 Exemplo de **Imagick::gammaImage()****

```
<?php
function gammaImage($imagePath, $gamma, $channel) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->gammaImage($gamma, $channel);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
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
