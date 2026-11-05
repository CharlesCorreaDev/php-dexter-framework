# Retorna os tipos de imagens suportados pela instalação do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagetypes.php

---

# imagetypes

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

imagetypes — Retorna os tipos de imagens suportados pela instalação do PHP

### Descrição

function **imagetypes**(): [int](language.types.integer.md)

Retorna os tipos de imagens suportados pela instalação atual do PHP.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um campo de bits correspondente aos formatos de imagem suportados pela
versão da GD linkada no PHP. Os seguintes bits são retornados:
**`IMG_AVIF`** | **`IMG_BMP`** |
**`IMG_GIF`** | **`IMG_JPG`** |
**`IMG_PNG`** | **`IMG_WBMP`** |
**`IMG_XPM`** | **`IMG_WEBP`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | **`IMG_AVIF`** adicionado. |
| 7.2.0 | **`IMG_BMP`** adicionado. |
| 7.0.10 | **`IMG_WEBP`** adicionado. |

### Examples

**Exemplo #1 Verificando o suporte a PNG**

```
<?php
if (imagetypes() & IMG_PNG) {
    echo "O suporte a PNG está ativado";
}
?>
```

### Veja também

- [gd\_info()](function.gd-info.md) - Obtém informações sobre a biblioteca GD instalada atualmente

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
