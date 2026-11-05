# Aplica uma correção de gama a uma imagem GD

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagegammacorrect.php

---

# imagegammacorrect

(PHP 4, PHP 5, PHP 7, PHP 8)

imagegammacorrect — Aplica uma correção de gama a uma imagem GD

### Descrição

function **imagegammacorrect**([GdImage](class.gdimage.md) `$image`, [float](language.types.float.md) `$input_gamma`, [float](language.types.float.md) `$output_gamma`): [true](language.types.singleton.md)

Aplica uma correção de gama à imagem GD informada em `image`,
sendo fornecido um gama de entrada e de saída.

### Parâmetros

`image`
:   Um objeto [GdImage](class.gdimage.md), retornado por uma das funções de criação de imagem,
    como [imagecreatetruecolor()](function.imagecreatetruecolor.md).

`input_gamma`
:   O gama de entrada.

`output_gamma`
:   O gama de saída.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `image` agora espera uma instância de [GdImage](class.gdimage.md); anteriormente, um [resource](language.types.resource.md) `gd` válido era esperado. |

### Examples

**Exemplo #1 Uso de **imagegammacorrect()****

```
<?php
// Cria a instância de imagem
$im = imagecreatefromgif('php.gif');

// Corrige o gama, saída = 1.537
imagegammacorrect($im, 1.0, 1.537);

// Grava a imagem
imagegif($im, './php_gamma_corrected.gif');
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
