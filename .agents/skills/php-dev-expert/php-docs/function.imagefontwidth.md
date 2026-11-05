# Obtém a largura da fonte

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagefontwidth.php

---

# imagefontwidth

(PHP 4, PHP 5, PHP 7, PHP 8)

imagefontwidth — Obtém a largura da fonte

### Descrição

function **imagefontwidth**([GdFont](class.gdfont.md)|[int](language.types.integer.md) `$font`): [int](language.types.integer.md)

Retorna a largura da fonte, em pixels, de um caractere em determinada fonte.

### Parâmetros

`font`
:   Pode ser 1, 2, 3, 4, 5 para as fontes
    nativas na codificação latin2 (onde números maiores correspondem a fontes maiores) ou uma instância de [GdFont](class.gdfont.md),
    retornada por [imageloadfont()](function.imageloadfont.md).

### Valor Retornado

Retorna a largura da fonte em pixels.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `font` agora aceita uma instância de [GdFont](class.gdfont.md) ou um [int](language.types.integer.md); anteriormente, apenas [int](language.types.integer.md) era aceito. |

### Examples

**Exemplo #1 Usando **imagefontwidth()** em fontes internas**

```
<?php
echo 'Largura da fonte: ' . imagefontwidth(4);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Largura da fonte: 8
```

**Exemplo #2 Usando **imagefontwidth()** junto com [imageloadfont()](function.imageloadfont.md)**

```
<?php
// Carrega uma fonte .gdf
$font = imageloadfont('anonymous.gdf');

echo 'Largura da fonte: ' . imagefontwidth($font);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Largura da fonte: 23
```

### Veja também

- [imagefontheight()](function.imagefontheight.md) - Obtém a altura da fonte
- [imageloadfont()](function.imageloadfont.md) - Carrega uma nova fonte

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
