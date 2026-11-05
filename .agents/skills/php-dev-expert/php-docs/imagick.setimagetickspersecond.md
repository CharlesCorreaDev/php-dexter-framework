# Define os tiques por segundo da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagetickspersecond.php

---

# Imagick::setImageTicksPerSecond

(PECL imagick 2, PECL imagick 3)

Imagick::setImageTicksPerSecond — Define os tiques por segundo da imagem

### Descrição

public function **Imagick::setImageTicksPerSecond**([int](language.types.integer.md) `$ticks_per_second`): [bool](language.types.boolean.md)

Ajusta o tempo durante o qual um quadro de uma imagem animada é exibido.

> **Nota**:
>
> Para GIFs animados, esta função não altera o número de 'tiques de imagem'
> por segundo, que é sempre definido como 100. Em vez disso, ajusta a quantidade de
> tempo que o quadro é exibido para simular a mudança em 'tiques por
> segundo'.
>
> Por exemplo, para um GIF animado onde cada quadro é exibido por 20 tiques
> (1/5 de segundo), quando este método é chamado em cada quadro da imagem
> com um argumento de `50`, os quadros são ajustados para serem
> exibidos por 40 tiques (2/5 de segundo) e a animação será reproduzida na metade
> da velocidade original.

### Parâmetros

`ticks_per_second`
:   A duração durante a qual uma imagem deve ser exibida, expressa em tiques
    por segundo.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Modificando GIF animado com **Imagick::setImageTicksPerSecond()****

```
<?php

// Modifica um GIF animado para que a primeira metade do gif seja reproduzida na metade da
// velocidade atual e a segunda metade seja reproduzida no dobro da velocidade
// atual

$imagick = new Imagick(realpath("Teste.gif"));
$imagick = $imagick->coalesceImages();

$totalFrames = $imagick->getNumberImages();

$frameCount = 0;

foreach ($imagick as $frame) {
    $imagick->setImageTicksPerSecond(50);

    if ($frameCount < ($totalFrames / 2)) {
        // Modifica o quado para ser mostrado por um tempo duas vezes maior que o atual
        $imagick->setImageTicksPerSecond(50);
    } else {
        // Modifica o quado para ser mostrado pela metado do tempo atual
        $imagick->setImageTicksPerSecond(200);
    }

    $frameCount++;
}

$imagick = $imagick->deconstructImages();

$imagick->writeImages("/caminho/para/gravar/resultado.gif", true);

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
