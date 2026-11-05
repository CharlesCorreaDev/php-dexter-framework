# Cria uma nova imagem a partir de um fluxo de imagem na string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imagecreatefromstring.php

---

# imagecreatefromstring

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

imagecreatefromstring — Cria uma nova imagem a partir de um fluxo de imagem na string

### Descrição

function **imagecreatefromstring**([string](language.types.string.md) `$data`): [GdImage](class.gdimage.md)|[false](language.types.singleton.md)

**imagecreatefromstring()** retorna um identificador de imagem
representando a imagem obtida pelos dados informados no parâmetro `data`.
Estes tipos serão automaticamente detectados se a compilação do PHP suportá-los:
JPEG, PNG, GIF, BMP, WBMP, GD2, WEBP e AVIF.

### Parâmetros

`data`
:   Uma string contendo os dados da imagem.

### Valor Retornado

Um objeto de imagem será retornado em caso de sucesso. **`false`** é retornado se
o tipo da imagem não for suportado, se os dados não estiverem em formato reconhecido,
ou se a imagem estiver corrompida e não puder ser carregada.

### Erros/Exceções

**imagecreatefromstring()** emite um erro de nível E\_WARNING,
se os dados não estiverem em um formato reconhecido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função retorna agora uma instância de [GDImage](class.gdimage.md); anteriormente, retornava um [resource](language.types.resource.md). |
| 7.3.0 | WEBP agora é suportado (caso seja suportado pela libgd em uso). |

### Examples

**Exemplo #1 Exemplo de **imagecreatefromstring()****

```
<?php
$data = 'iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABl'
       . 'BMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDr'
       . 'EX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r'
       . '8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg==';
$data = base64_decode($data);

$im = imagecreatefromstring($data);
if ($im !== false) {
    header('Content-Type: image/png');
    imagepng($im);
}
else {
    echo 'Ocorreu um erro.';
}
?>
```

O exemplo acima produzirá
algo semelhante a:

![Saída do exemplo: imagecreatefromstring()](images/21009b70229598c6a80eef8b45bf282b-imagecreatefromstring.png)

### Veja também

- [imagecreatefromjpeg()](function.imagecreatefromjpeg.md) - Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefrompng()](function.imagecreatefrompng.md) - Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatefromgif()](function.imagecreatefromgif.md) - Cria uma nova imagem a partir de um arquivo ou URL
- [imagecreatetruecolor()](function.imagecreatetruecolor.md) - Cria uma nova imagem em cores verdadeiras

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
