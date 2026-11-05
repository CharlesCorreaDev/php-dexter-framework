# Cria uma nova imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.newimage.php

---

# Imagick::newImage

(PECL imagick 2, PECL imagick 3)

Imagick::newImage — Cria uma nova imagem

### Descrição

public function **Imagick::newImage**(  
    [int](language.types.integer.md) `$cols`,  
    [int](language.types.integer.md) `$rows`,  
    [mixed](language.types.mixed.md) `$background`,  
    [string](language.types.string.md) `$format` = ?  
): [bool](language.types.boolean.md)

Cria uma nova imagem e associa o valor ImagickPixel como cor de fundo.

### Parâmetros

`cols`
:   Colunas na nova imagem.

`rows`
:   Linhas na nova imagem.

`background`
:   A cor de fundo usada para esta imagem.

`format`
:   Formato de imagem. Este parâmetro foi adicionado no Imagick versão 2.0.1.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL imagick 2.1.0 | Agora permite uma string representando a cor como terceiro parâmetro. As versões anteriores permitiam apenas um objeto ImagickPixel. |

### Examples

**Exemplo #1 Usando **Imagick::newImage()****

Cria uma nova imagem e mostra-a no navegador.

```
<?php

$image = new Imagick();
$image->newImage(100, 100, new ImagickPixel('red'));
$image->setImageFormat('png');

header('Content-type: image/png');
echo $image;

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
