# Simula um desenho a carvão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.charcoalimage.php

---

# Imagick::charcoalImage

(PECL imagick 2, PECL imagick 3)

Imagick::charcoalImage — Simula um desenho a carvão

### Descrição

public function **Imagick::charcoalImage**([float](language.types.float.md) `$radius`, [float](language.types.float.md) `$sigma`): [bool](language.types.boolean.md)

Simula um desenho a carvão.

### Parâmetros

`radius`
:   O raio do gaussiano, em pixels, sem contar o pixel central

`sigma`
:   O desvio padrão do gaussiano, em pixels

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::charcoalImage()****

```
<?php
function charcoalImage($imagePath, $radius, $sigma) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->charcoalImage($radius, $sigma);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

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
