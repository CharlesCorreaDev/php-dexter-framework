# Aplica um kernel fornecido pelo usuário à imagem de acordo com o método de morfologia fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.morphology.php

---

# Imagick::morphology

(PECL imagick 3 >= 3.3.0)

Imagick::morphology — Aplica um kernel fornecido pelo usuário à imagem de acordo com o método de morfologia fornecido

### Descrição

public function **Imagick::morphology**(  
    [int](language.types.integer.md) `$morphologyMethod`,  
    [int](language.types.integer.md) `$iterations`,  
    [ImagickKernel](class.imagickkernel.md) `$ImagickKernel`,  
    [int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT  
): [bool](language.types.boolean.md)

Aplica um kernel fornecido pelo usuário à imagem de acordo com o método de morfologia fornecido.

### Parâmetros

`morphologyMethod`
:   Qual método de morfologia usar, uma das constantes \Imagick::MORPHOLOGY\_\*.

`iterations`
:   O número de iterações em que a função de morfologia será aplicada. Um valor de -1 significa repetição até que mais nenhuma alteração seja encontrada. A forma como isso é aplicado pode depender do método de morfologia. Normalmente tem o valor de 1.

`ImagickKernel`

`channel`

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 **Imagick::morphology()** com morfologia de convolução**

```
<?php
        $imagick = $this->getCharacter();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_GAUSSIAN, "5,1");
        $imagick->morphology(\Imagick::MORPHOLOGY_CONVOLVE, 2, $kernel);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();

?>
```

**Exemplo #2 **Imagick::morphology()** com morfologia de correlação**

```
<?php

        // O pixel superior esquerdo deve ser preto
        // O pixel inferior direito deve ser branco
        // O resto não é importante.

        $imagick = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromMatrix(self::$correlateMatrix, [2, 2]);
        $imagick->morphology(\Imagick::MORPHOLOGY_CORRELATE, 1, $kernel);
        header("Content-Type: image/png");
        echo $imagick->getImageBlob();

?>
```

**Exemplo #3 **Imagick::morphology()** com morfologia de erosão**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGON, "3");
        $canvas->morphology(\Imagick::MORPHOLOGY_ERODE, 2, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #4 **Imagick::morphology()** com morfologia de erosão de intensidade**

```
<?php
        $canvas = $this->getCharacter();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGON, "1");
        $canvas->morphology(\Imagick::MORPHOLOGY_ERODE_INTENSITY, 2, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #5 **Imagick::morphology()** com morfologia de dilatação**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGON, "3");
        $canvas->morphology(\Imagick::MORPHOLOGY_DILATE, 4, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #6 **Imagick::morphology()** com morfologia de dilatação de intensidade**

```
<?php
        $canvas = $this->getCharacter();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGON, "1");
        $canvas->morphology(\Imagick::MORPHOLOGY_DILATE_INTENSITY, 4, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #7 **Imagick::morphology()** com morfologia de distância do kernel Chebyshev**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_CHEBYSHEV, "3");
        $canvas->morphology(\Imagick::MORPHOLOGY_DISTANCE, 3, $kernel);
        $canvas->autoLevelImage();
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #8 **Imagick::morphology()** com morfologia de distância do kernel Manhattan**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_MANHATTAN, "5");
        $canvas->morphology(\Imagick::MORPHOLOGY_DISTANCE, 3, $kernel);
        $canvas->autoLevelImage();
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #9 **Imagick::morphology()** com morfologia de distância do kernel octogonal**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGONAL, "5");
        $canvas->morphology(\Imagick::MORPHOLOGY_DISTANCE, 3, $kernel);
        $canvas->autoLevelImage();
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #10 **Imagick::morphology()** com morfologia de distância do kernel euclidiano**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_EUCLIDEAN, "4");
        $canvas->morphology(\Imagick::MORPHOLOGY_DISTANCE, 3, $kernel);
        $canvas->autoLevelImage();
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #11 **Imagick::morphology()** com morfologia de borda**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGON, "3");
        $canvas->morphology(\Imagick::MORPHOLOGY_EDGE, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #12 **Imagick::morphology()** com morfologia de abertura**

```
<?php
        // Como resultado, será visto que o método de abertura suavizará o contorno, arredondando os pontos afiados, e removerá as partes menores que a forma usada. Também irá desconectar ou abrir todas a pontes finas.
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DISK, "6");
        $canvas->morphology(\Imagick::MORPHOLOGY_OPEN, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #13 **Imagick::morphology()** com morfologia de abertura de intensidade**

```
<?php
        // Como resultado, será visto que o método de abertura suavizará o contorno, arredondando os pontos afiados, e removerá as partes menores que a forma usada. Também irá desconectar ou abrir todas a pontes finas.

        $canvas = $this->getCharacter();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DISK, "6");
        $canvas->morphology(\Imagick::MORPHOLOGY_OPEN_INTENSITY, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #14 **Imagick::morphology()** com morfologia de fechamento**

```
<?php
        // O uso básico do método de fechamento é reduzir ou remover quaisquer buracos ou lacunas com tamanho próximo ao do 'Elemento de estrutura' do kernel. Isto é, fechar as partes do plano de fundo que são têm aproximadamente esse tamanho.
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DISK, "6");
        $canvas->morphology(\Imagick::MORPHOLOGY_CLOSE, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #15 **Imagick::morphology()** com morfologia de fechamento de intensidade**

```
<?php
        // O uso básico do método de fechamento é reduzir ou remover quaisquer buracos ou lacunas com tamanho próximo ao do 'Elemento de estrutura' do kernel. Isto é, fechar as partes do plano de fundo que são têm aproximadamente esse tamanho.
        $canvas = $this->getCharacter();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DISK, "6");
        $canvas->morphology(\Imagick::MORPHOLOGY_CLOSE_INTENSITY, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #16 **Imagick::morphology()** com morfologia de suavização**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGON, "3");
        $canvas->morphology(\Imagick::MORPHOLOGY_SMOOTH, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #17 **Imagick::morphology()** com morfologia de bordas para dentro**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGON, "3");
        $canvas->morphology(\Imagick::MORPHOLOGY_EDGE_IN, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #18 Edge out **Imagick::morphology()** com morfologia de bordas para fora**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_OCTAGON, "3");
        $canvas->morphology(\Imagick::MORPHOLOGY_EDGE_OUT, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #19 **Imagick::morphology()** com morfologia de 'TopHat', ou mais especificamente 'TopHat Branco'. Retorna os pixels que foram removidos por uma abertura da forma, ou seja, os pixels que foram removidos para arredondar os pontos e as pontes de conexão entre as formas.**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DISK, "5");
        $canvas->morphology(\Imagick::MORPHOLOGY_TOP_HAT, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #20 **Imagick::morphology()** com morfologia de 'BottomHat', também conhecido como 'TopHat Preto'. São os pixels que um fechamento de forma adiciona à imagem. Isto é, os pixels que foram usados ​​para preencher os buracos, lacunas e pontes.**

```
<?php

        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DISK, "5");
        $canvas->morphology(\Imagick::MORPHOLOGY_BOTTOM_HAT, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #21 **Imagick::morphology()** com morfologia de acerto e erro**

```
<?php
        $canvas = $this->getCharacterOutline();
        // Isto encontra todos os pixels com 3 pixels da borda direita
        $matrix = [[1, false, false, 0]];
        $kernel = \ImagickKernel::fromMatrix(
            $matrix,
            [0, 0]
        );
        $canvas->morphology(\Imagick::MORPHOLOGY_HIT_AND_MISS, 1, $kernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #22 **Imagick::morphology()** com morfologia de desbaste**

```
<?php
        $canvas = $this->getCharacterOutline();
        $leftEdgeKernel = \ImagickKernel::fromMatrix([[0, 1]], [1, 0]);
        $rightEdgeKernel = \ImagickKernel::fromMatrix([[1, 0]], [0, 0]);
        $leftEdgeKernel->addKernel($rightEdgeKernel);

        $canvas->morphology(\Imagick::MORPHOLOGY_THINNING, 3, $leftEdgeKernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #23 **Imagick::morphology()** com morfologia de espessamento**

```
<?php
        $canvas = $this->getCharacterOutline();
        $leftEdgeKernel = \ImagickKernel::fromMatrix([[0, 1]], [1, 0]);
        $rightEdgeKernel = \ImagickKernel::fromMatrix([[1, 0]], [0, 0]);
        $leftEdgeKernel->addKernel($rightEdgeKernel);

        $canvas->morphology(\Imagick::MORPHOLOGY_THICKEN, 3, $leftEdgeKernel);
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #24 **Imagick::morphology()** com morfologia de espessamento para gerar um casco convexo**

```
<?php
        $canvas = $this->getCharacterOutline();
        $diamondKernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DIAMOND, "1");
        $convexKernel =  \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_CONVEX_HULL, "");

        // A morfologia de espessamento não consegue lidar com lacunas pequenas. Eslas são fechadas
        // com a morfologia de fechamento.
        $canvas->morphology(\Imagick::MORPHOLOGY_CLOSE, 1, $diamondKernel);
        $canvas->morphology(\Imagick::MORPHOLOGY_THICKEN, -1, $convexKernel);
        $canvas->morphology(\Imagick::MORPHOLOGY_CLOSE, 1, $diamondKernel);

        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #25 **Imagick::morphology()** com morfologia de iteração**

```
<?php
        $canvas = $this->getCharacterOutline();
        $kernel = \ImagickKernel::fromBuiltIn(\Imagick::KERNEL_DISK, "2");
        $canvas->morphology(\Imagick::MORPHOLOGY_ITERATIVE, 3, $kernel);
        $canvas->autoLevelImage();
        header("Content-Type: image/png");
        echo $canvas->getImageBlob();

?>
```

**Exemplo #26 **Imagick::morphology()** com função auxiliar para obter silhueta de imagem**

```
<?php
function getCharacterOutline() {
    $imagick = new \Imagick(realpath("./images/character.png"));
    $character = new \Imagick();
    $character->newPseudoImage(
        $imagick->getImageWidth(),
        $imagick->getImageHeight(),
        "canvas:white"
    );
    $canvas = new \Imagick();
    $canvas->newPseudoImage(
        $imagick->getImageWidth(),
        $imagick->getImageHeight(),
        "canvas:black"
    );

    $character->compositeimage(
        $imagick,
        \Imagick::COMPOSITE_COPYOPACITY,
        0, 0
    );
    $canvas->compositeimage(
        $character,
        \Imagick::COMPOSITE_ATOP,
        0, 0
    );
    $canvas->setFormat('png');

    return $canvas;
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
