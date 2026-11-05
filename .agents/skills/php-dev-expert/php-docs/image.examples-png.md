# Criação de PNG com PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/image.examples-png.php

---

## Criação de PNG com PHP

**Exemplo #1 Criação de PNG com PHP**

```
<?php

header("Content-type: image/png");
$string = $_GET['text'];
$im     = imagecreatefrompng("images/button1.png");
$orange = imagecolorallocate($im, 220, 210, 60);
$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
imagestring($im, 3, $px, 9, $string, $orange);
imagepng($im);

?>
```

Este exemplo seria chamado de uma página com uma etiqueta HTML parecida com: `<img
src="button.php?text=text">`. O script button.php acima
usa essa string `"text"` e o sobrepõe uma camada na imagem
base que neste caso é `"images/button1.png"`
e produz a imagem resultante. Esta é uma forma muito conveniente de
evitar que se desenhe novas imagens de botões toda vez que se deseja
alterar o texto de um botão. Com este método, eles são
gerados dinamicamente.

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
