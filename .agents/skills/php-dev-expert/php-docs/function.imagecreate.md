# Crie uma nova imagem baseada em paleta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreate.php

---

# imagecreate

(PHP 4, PHP 5, PHP 7, PHP 8)

imagecreate — Crie uma nova imagem baseada em paleta

### Descrição

function **imagecreate**([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreate()** retorna um identificador de imagem
que representa uma imagem em branco do tamanho especificado.

Em geral, recomendamos o uso de
[imagecreatetruecolor()](function.imagecreatetruecolor.md) em vez de
**imagecreate()** para que o processamento da imagem
ocorra na mais alta qualidade possível. Se você deseja gerar uma imagem paletizada, então
[imagetruecolortopalette()](function.imagetruecolortopalette.md) deve ser chamada imediatamente
antes de salvar a imagem com [imagepng()](function.imagepng.md) ou
[imagegif()](function.imagegif.md).

### Parâmetros

`width`
:   A largura da imagem.

`height`
:   A altura da imagem.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [GDImage](class.gdimage.md); anteriormente, era retornado um [resource](language.types.resource.md). |

### Examples

**Exemplo #1
Criando um novo fluxo de imagem GD e exibindo uma imagem.**

```
<?php
header("Content-Type: image/png");
$im = @imagecreate(110, 20)
    or die("Não é possível inicializar um novo fluxo de imagem GD.");
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: criando um novo fluxo de imagem GD e exibindo uma imagem.](images/21009b70229598c6a80eef8b45bf282b-imagecreate.png)

### Veja também

- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras

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
