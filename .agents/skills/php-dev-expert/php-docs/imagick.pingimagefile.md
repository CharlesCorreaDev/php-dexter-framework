# Obtém atributos básicos de imagem de maneira leve

> **Fonte / Source:** https://www.php.net/manual/pt_BR/imagick.pingimagefile.php

---

# Imagick::pingImageFile

(PECL imagick 2, PECL imagick 3)

Imagick::pingImageFile — Obtém atributos básicos de imagem de maneira leve

### Descrição

public function **Imagick::pingImageFile**([resource](language.types.resource.md) `$filehandle`, [string](language.types.string.md) `$fileName` = ?): [bool](language.types.boolean.md)

Este método pode ser usado para consultar a largura, altura, tamanho
e formato da imagem sem ler a imagem inteira na memória.
Este método estará disponível se a extensão Imagick tiver sido compilada com a ImageMagick versão 6.2.9 ou superior.

### Parâmetros

`filehandle`
:   Um identificador de arquivo aberto para a imagem.

`fileName`
:   Nome de arquivo opcional para esta imagem.

### Valor Retornado

Retorna **`true`** em caso de sucesso.

### Examples

**Exemplo #1 Usando **Imagick::pingImageFile()****

Abrindo um local remoto

```
<?php
/* abrindo um local remoto com fopen */
$fp = fopen("http://example.com/test.jpg");

/* Cria novo objeto Imagick */
$im = new Imagick();

/* passa o identificador para o objeto Imagick */
$im->pingImageFile($fp);
?>
```

### Veja também

- [Imagick::pingImage()](imagick.pingimage.md) - Busca atributos básicos sobre a imagem
- [Imagick::pingImageBlob()](imagick.pingimageblob.md) - Busca atributos rapidamente
- [Imagick::readImage()](imagick.readimage.md) - Lê imagem de um arquivo
- [Imagick::readImageBlob()](imagick.readimageblob.md) - Lê imagem de uma string binária
- [Imagick::readImageFile()](imagick.readimagefile.md) - Lê imagem a partir de um descritor de arquivo

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
