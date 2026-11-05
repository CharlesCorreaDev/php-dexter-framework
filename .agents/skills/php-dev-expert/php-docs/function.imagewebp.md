# Mostra uma imagem WebP no navegador ou grava em arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagewebp.php

---

# imagewebp

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

imagewebp — Mostra uma imagem WebP no navegador ou grava em arquivo

### Descrição

function **imagewebp**([GdImage](class.gdimage.md) `$image`, [resource](language.types.resource.md)|[string](language.types.string.md)|[null](language.types.null.md) `$file` = **`null`**, [int](language.types.integer.md) `$quality` = -1): [bool](language.types.boolean.md)

Mostra ou grava uma versão WebP da imagem informada em `image`.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`file`
:   O caminho ou um recurso de fluxo aberto (que será fechado automaticamente após o retorno desta função) para salvar o arquivo. Se não for definido ou for **`null`**, o fluxo da imagem bruta será enviado diretamente.

`quality`
:   `quality` varia de 0 (pior
    qualidade, arquivo menor) a 100 (melhor qualidade, arquivo maior).
    Se `-1` for informado, o valor padrão de `80` será usado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

**Cuidado**

Entretanto, se a biblioteca libgd falhar ao gerar a imagem, esta função retornará **`true`**.

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `quality` for inválido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se `quality` for inválido. |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Gravando um arquivo WebP**

```
<?php
// Cria uma imagem vazia e adiciona texto
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);

imagestring($im, 1, 5, 5,  'WebP with PHP', $text_color);

// Grava a imagem
imagewebp($im, 'php.webp');
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
