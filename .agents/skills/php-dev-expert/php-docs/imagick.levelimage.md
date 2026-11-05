# Ajusta os níveis de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.levelimage.php

---

# Imagick::levelImage

(PECL imagick 2, PECL imagick 3)

Imagick::levelImage — Ajusta os níveis de uma imagem

### Descrição

public function **Imagick::levelImage**(  
    [float](language.types.float.md) `$blackPoint`,  
    [float](language.types.float.md) `$gamma`,  
    [float](language.types.float.md) `$whitePoint`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Ajusta os níveis de uma imagem dimensionando as cores que ficam
entre os pontos brancos e pretos especificados para toda a faixa
de Quantum disponível. Os parâmetros fornecidos representam
os pontos preto, médio e branco. O ponto preto especifica
a cor mais escura da imagem. As cores mais escuras que o ponto
preto são definidas como zero. O ponto médio especifica uma correção
gama a ser aplicada à imagem. O ponto branco especifica a
cor mais clara da imagem. As cores mais claras que o ponto
branco são definidas com o valor máximo de Quantum.

### Parâmetros

`blackPoint`
:   O ponto preto da imagem.

`gamma`
:   O valor de gama.

`whitePoint`
:   O ponto branco da imagem.

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

**Exemplo #1 Exemplo de **Imagick::levelImage()****

```
<?php
function levelImage($blackPoint, $gamma, $whitePoint) {
    $imagick = new \Imagick();
    $imagick->newPseudoimage(500, 500, 'gradient:black-white');

    $imagick->setFormat('png');
    $quantum = $imagick->getQuantum();
    $imagick->levelImage($blackPoint / 100 , $gamma, $quantum * $whitePoint / 100);

    header("Content-Type: image/png");
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
