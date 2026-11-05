# Ajusta os níveis de um canal de imagem específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.autolevelimage.php

---

# Imagick::autoLevelImage

(PECL imagick 3 >= 3.3.0)

Imagick::autoLevelImage — Ajusta os níveis de um canal de imagem específico

### Descrição

public function **Imagick::autoLevelImage**([int](language.types.integer.md) `$channel` = Imagick::CHANNEL\_DEFAULT): [bool](language.types.boolean.md)

Ajusta os níveis de um canal de imagem específico, dimensionando os valores mínimo e máximo para toda a faixa Quantum.

### Parâmetros

`channel`
:   Em qual canal o nivelamento automático deve ser feito.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Exemplo de **Imagick::autoLevelImage()****

```
<?php
function autoLevelImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->autoLevelImage();
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
