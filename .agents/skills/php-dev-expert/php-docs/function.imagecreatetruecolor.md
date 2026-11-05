# Cria uma nova imagem em cores verdadeiras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatetruecolor.php

---

# imagecreatetruecolor

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

imagecreatetruecolor — Cria uma nova imagem em cores verdadeiras

### Descrição

function **imagecreatetruecolor**([int](language.types.integer.md) `$width`, [int](language.types.integer.md) `$height`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreatetruecolor()** retorna um objeto de imagem
representando uma imagem em preto do tamanho especificado.

### Parâmetros

`width`
:   Largura da imagem.

`height`
:   Altura da imagem.

### Valor Retornado

Retorna um objeto de imagem em caso de sucesso, **`false`** em caso de erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna um objeto [GDImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1
Criando uma novo fluxo de imagem GD e mostrando uma imagem.**

```
<?php
header ('Content-Type: image/png');
$im = @imagecreatetruecolor(120, 20)
      or die('Não foi possível inicializar um novo fluxo de imagem');
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);
imagepng($im);
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: Criando uma novo fluxo de imagem GD e mostrando uma imagem.](images/21009b70229598c6a80eef8b45bf282b-imagecreatetruecolor.png)

### Veja também

- [imagecreate()](function.imagecreate.md) - Crie uma nova imagem baseada em paleta

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
