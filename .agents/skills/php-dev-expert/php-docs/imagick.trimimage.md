# Apara as bordas da imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.trimimage.php

---

# Imagick::trimImage

(PECL imagick 2, PECL imagick 3)

Imagick::trimImage — Apara as bordas da imagem

### Descrição

public function **Imagick::trimImage**([float](language.types.float.md) `$fuzz`): [bool](language.types.boolean.md)

Remove as bordas que são da cor de fundo da imagem.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`fuzz`
:   Por padrão, o alvo deve corresponder exatamente a uma determinada cor de pixel.
    No entanto, em muitos casos, duas cores podem diferir um pouco.
    O membro fuzz da imagem define quanta tolerância é aceitável
    para considerar duas cores iguais. Este parâmetro representa a variação
    na faixa Quantum.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Erros/Exceções

Lança uma exceção ImagickException em caso de erro.

### Examples

**Exemplo #1 Usando **Imagick::trimImage()****

Apara uma imagem e exiba-a no navegador.

```
<?php
/* Cria o objeto e lê a imagem */
$im = new Imagick("imagem.jpg");

/* Apara a imagem */
$im->trimImage(0);

/* Exibe a imagem */
header("Content-Type: image/" . $im->getImageFormat());
echo $im;
?>
```

### Veja também

- [Imagick::getQuantumDepth()](imagick.getquantumdepth.md) - Obtém a profundidade Quantum
- [Imagick::getQuantumRange()](imagick.getquantumrange.md) - Retorna o intervalo Quantum do Imagick
- [imagecropauto()](function.imagecropauto.md) - Recorta uma imagem automaticamente usando um dos modos disponíveis

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
