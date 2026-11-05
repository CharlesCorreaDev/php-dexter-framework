# Obtém a extensão de arquivo para o tipo da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.image-type-to-extension.php

---

# image\_type\_to\_extension

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

image\_type\_to\_extension — Obtém a extensão de arquivo para o tipo da imagem

### Descrição

function **image\_type\_to\_extension**([int](language.types.integer.md) `$image_type`, [bool](language.types.boolean.md) `$include_dot` = **`true`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna a extensão de arquivo para a constante **`IMAGETYPE_*`**
informada.

### Parâmetros

`image_type`
:   Uma das constantes **`IMAGETYPE_*`**.

`include_dot`
:   Informa se deve-se prefixar um ponto à extensão ou não. O padrão é **`true`** (prefixar).

### Valor Retornado

Uma string com a extensão correspondente ao tipo de imagem informado, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **image\_type\_to\_extension()****

```
<?php
// Cria instância da imagem
$im = imagecreatetruecolor(100, 100);

// Salva a imagem
imagepng($im, './test' . image_type_to_extension(IMAGETYPE_PNG));
?>
```

### Notas

> **Nota**:
>
> Esta função não requer a biblioteca de imagens GD.

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
