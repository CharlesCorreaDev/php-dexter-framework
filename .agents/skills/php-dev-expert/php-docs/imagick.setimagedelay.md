# Define o atraso da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimagedelay.php

---

# Imagick::setImageDelay

(PECL imagick 2, PECL imagick 3)

Imagick::setImageDelay — Define o atraso da imagem

### Descrição

public function **Imagick::setImageDelay**([int](language.types.integer.md) `$delay`): [bool](language.types.boolean.md)

Define o atraso da imagem. Para uma imagem animada, este é o tempo durante
o qual esse quadro da imagem deve ser exibido, antes de exibir o próximo
quadro.

O atraso pode ser definido individualmente para cada quadro de uma imagem.

### Parâmetros

`delay`
:   A quantidade de tempo expressa em 'tiques' durante o qual a imagem deve ser
    exibida. Para GIFs animados, há 100 tiques por segundo, então um
    valor de 20 seria 20/100 de um segundo, também conhecido como 1/5 de segundo.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Modifica um GIF animado com **Imagick::setImageDelay()****

```
<?php

// Modifica um GIF animado para que seus quadros sejam reproduzidos em uma velocidade variável,
// variando a exibição em 50ms baixando até 0ms, o que fará com que o quadro
// seja pulado na maioria dos navegadores.
$imagick = new Imagick(realpath("Test.gif"));
$imagick = $imagick->coalesceImages();

$frameCount = 0;

foreach ($imagick as $frame) {
    $imagick->setImageDelay((($frameCount % 11) * 5));
    $frameCount++;
}

$imagick = $imagick->deconstructImages();

$imagick->writeImages("/path/to/save/output.gif", true);

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
