# Anexa um conjunto de imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.appendimages.php

---

# Imagick::appendImages

(PECL imagick 2, PECL imagick 3)

Imagick::appendImages — Anexa um conjunto de imagens

### Descrição

public function **Imagick::appendImages**([bool](language.types.boolean.md) `$stack`): [Imagick](class.imagick.md)

Acrescenta um conjunto de imagens em uma imagem maior.

### Parâmetros

`stack`
:   Informa se as imagens devem ser empilhadas verticalmente.
    Por padrão (ou se **`false`** for especificado), as imagens são empilhadas da esquerda para a direita.
    Se `stack` for **`true`**, as imagens serão empilhadas de cima para baixo.

### Valor Retornado

Retorna uma instância Imagick em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Exemplo de **Imagick::appendImages()****

```
<?php

/* Cria um novo objeto Imagick */
$im = new Imagick();

/* cria imagens com vermelho, verde e azul */
$im->newImage(100, 50, "red");
$im->newImage(100, 50, "green");
$im->newImage(100, 50, "blue");

/* Anexa as imagens em uma */
$im->resetIterator();
$combined = $im->appendImages(true);

/* Mostra a imagem */
$combined->setImageFormat("png");
header("Content-Type: image/png");
echo $combined;
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo : Imagick::appendImages()](images/c0d23d2d6769e53e24a1b3136c064577-floodfillpaint_intermediate.png)

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
