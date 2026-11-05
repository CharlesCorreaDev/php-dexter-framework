# Define as iterações da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.setimageiterations.php

---

# Imagick::setImageIterations

(PECL imagick 2, PECL imagick 3)

Imagick::setImageIterations — Define as iterações da imagem

### Descrição

public function **Imagick::setImageIterations**([int](language.types.integer.md) `$iterations`): [bool](language.types.boolean.md)

Define o número de iterações que uma imagem animada é repetida.

### Parâmetros

`iterations`
:   O número de iterações que a imagem deve repetir. Zero define uma repetição
    contínua.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Uso básico de **Imagick::setImageIterations()****

```
<?php

$imagick = new Imagick(realpath("Teste.gif"));

$imagick = $imagick->coalesceImages();
$imagick->setImageIterations(1);
$imagick = $imagick->deconstructImages();

$imagick->writeImages('/caminho/para/gravar/UmaVez.gif', true);

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
