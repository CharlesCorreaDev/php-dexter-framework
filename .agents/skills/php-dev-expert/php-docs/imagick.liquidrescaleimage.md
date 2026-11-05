# Anima uma imagem ou imagens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.liquidrescaleimage.php

---

# Imagick::liquidRescaleImage

(PECL imagick 2 >= 2.2.0, PECL imagick 3)

Imagick::liquidRescaleImage — Anima uma imagem ou imagens

### Descrição

public function **Imagick::liquidRescaleImage**(  
    [int](language.types.integer.md) `$width`,  
    [int](language.types.integer.md) `$height`,  
    [float](language.types.float.md) `$delta_x`,  
    [float](language.types.float.md) `$rigidity`  
): [bool](language.types.boolean.md)

Este método dimensiona as imagens usando o método de redimensionamento líquido. Este método
é uma implementação de uma técnica chamada "remoção de costura". Para que este
método funcione conforme o esperado, o ImageMagick precisa ser compilado com suporte à biblioteca liblqr.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.3.9 ou superior.

### Parâmetros

`width`
:   A largura do tamanho alvo

`height`
:   A altura do tamanho do alvo

`delta_x`
:   Quanto a costura pode percorrer no eixo x.
    Passar 0 faz com que as costuras fiquem retas.

`rigidity`
:   Introduz um adicional para costuras não retas. Este parâmetro
    normalmente é 0.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Veja também

- [Imagick::resizeImage()](imagick.resizeimage.md) - Dimensiona uma imagem

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
