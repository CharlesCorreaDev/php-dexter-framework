# Obtém o tamanho de uma imagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getimagesize.php

---

# getimagesize

(PHP 4, PHP 5, PHP 7, PHP 8)

getimagesize — Obtém o tamanho de uma imagem

### Descrição

function **getimagesize**([string](language.types.string.md) `$filename`, [array](language.types.array.md) `&$image_info` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

A função **getimagesize()** irá determinar o
tamanho de qualquer arquivo de imagem suportado fornecido e retornar as dimensões,
juntamente com o tipo de arquivo e uma string de texto `height/width` a ser
usada dentro de uma tagHTML`IMG` normal,
juntamente com o tipo de conteúdo HTTP correspondente.

**getimagesize()** também pode retornar mais informações
no parâmetro `image_info`.

**Cuidado**

Essa função espera que `filename` seja um arquivo
de imagem válido. Se um arquivo que não seja uma imagem for fornecido,
ele pode ser incorretamente detectado como uma imagem, e a função será bem-sucedida,
mas o array pode conter valores sem sentido.

Não utilize a função **getimagesize()** para verificar se um
determinado arquivo é uma imagem válida. Em vez disso, utilize uma solução específica
para essa finalidade, como a extensão [Fileinfo](book.fileinfo.md).

> **Nota**:
>
> Observe que os formatos JPC e JP2 podem ter componentes com diferentes
> profundidades de bits. Nesse caso, o valor "bits" representa a maior profundidade de bits encontrada. Além disso,
> arquivos JP2 podem conter `multiple JPEG 2000 codestreams`. Nesse caso,
> a função **getimagesize()** retorna os valores do primeiro codestream
> que encontra na raiz do arquivo.

> **Nota**:
>
> As informações sobre ícones são obtidas a partir do ícone com a maior
> taxa de bits.

> **Nota**:
>
> As imagens GIF consistem em um ou mais frames, em que cada frame pode ocupar
> apenas uma parte da imagem. O tamanho da imagem relatado pela função
> **getimagesize()** é o tamanho geral (lido do descritor da
> tela lógica).

### Parâmetros

`filename`
:   Este parâmetro especifica o arquivo do qual você deseja obter
    informações. Ele pode fazer referência a um arquivo local ou (se a configuração permitir) a
    um arquivo remoto usando um dos [streams suportados](wrappers.md).

`image_info`
:   Este parâmetro opcional permite extrair informações estendidas do
    arquivo de imagem. Atualmente, isso retornará os diferentes marcadores
    APP JPG como um array associativo.
    Alguns programas usam esses marcadores APP para incorporar informações de texto em
    imagens. Um dos usos comuns é incorporar informações
    [» IPTC](https://www.iptc.org/) no marcador APP13.
    Você pode usar a função [iptcparse()](function.iptcparse.md) para analisar o
    marcador binário APP13 em algo legível.

    > **Nota**:
    >
    > O parâmetro `image_info` suporta apenas arquivos
    > no formato JFIF.

### Valor Retornado

Retorna um array com até 7 elementos. Nem todos os tipos de imagem incluirão
os elementos `channels` e `bits`.

O índice 0 e 1 contém, respectivamente, a largura e a altura da imagem.

> **Nota**:
>
> Alguns formatos podem não conter nenhuma imagem ou podem conter várias imagens. Nesses casos,
> a função **getimagesize()** pode não ser capaz de determinar
> corretamente o tamanho da imagem. A função **getimagesize()** retornará
> zero para largura e altura nesses casos.

> **Nota**:
>
> **getimagesize()** é agnóstica a quaisquer metadados de imagem.
> Se, por exemplo, a opção `Orientation` de Exif estiver definida para um valor que
> rotaciona a imagem em 90 ou 270 graus, os índices 0 e 1 trocam de posição,
> ou seja, eles conterão a altura e a largura, respectivamente.

O índice 2 é uma das constantes **`IMAGETYPE_*`**, que
indica o tipo da imagem.

O índice 3 é uma sequência de texto com a string correta
`height="yyy" width="xxx"`
que pode ser usada diretamente em uma tag IMG.

`mime` é o tipo MIME correspondente da imagem.
Essa informação pode ser usada para fornecer imagens com o cabeçalho
`Content-type` HTTP correto:

**Exemplo #1 **getimagesize()** e tipos MIME.**

```
<?php
$size = getimagesize($filename);
$fp = fopen($filename, "rb");
if ($size && $fp) {
    header("Content-type: {$size['mime']}");
    fpassthru($fp);
    exit;
} else {
    // erro
}
?>
```

`channels`
Será 3 para imagens RGB e 4 para imagens CMYK.

`bits` é o número de bits para cada cor.

Para alguns tipos de imagem, a presença dos valores de `channels` e
`bits` pode ser um pouco confusa.
Por exemplo, o formato GIF sempre utiliza 3 canais
por pixel, mas o número de bits por pixel não pode ser calculado para um
GIF animado com uma tabela de cores global.

Em caso de falha, é retornado **`false`**.

### Erros/Exceções

Se for impossível acessar a imagem do `filename`, a função
**getimagesize()** gerará um erro de nível
**`E_WARNING`**. Em caso de erro de leitura,
**getimagesize()** gerará um erro de nível
**`E_NOTICE`**.

A partir do PHP 8.0.0, um [ValueError](class.valueerror.md) é lançado
se `filename` estiver vazio.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Agora, a função retorna as dimensões reais da imagem, bits e canais de imagens AVIF; anteriormente, as dimensões eram relatadas como `0x0`, e bits e channels não eram relatados de forma alguma. |
| 8.0.0 | Um [ValueError](class.valueerror.md) agora é lançado se `filename` estiver vazio; anteriormente, um **`E_WARNING`** era emitido e a função retornava **`false`**. |
| 7.1.0 | Foi adicionado suporte para WebP. |

### Examples

**Exemplo #2 Exemplo de **getimagesize()****

```
<?php
list($width, $height, $type, $attr) = getimagesize("img/flag.jpg");
echo "<img src=\"img/flag.jpg\" $attr alt=\"getimagesize() example\" />";
?>
```

**Exemplo #3 getimagesize (URL)**

```
<?php
$size = getimagesize("http://www.example.com/gifs/logo.gif");

// se o nome do arquivo contiver espaços, ele será codificado adequadamente.
$size = getimagesize("http://www.example.com/gifs/lo%20go.gif");

?>
```

**Exemplo #4 getimagesize() retornando IPTC.**

```
<?php
$size = getimagesize("testimg.jpg", $info);
if (isset($info["APP13"])) {
    $iptc = iptcparse($info["APP13"]);
    var_dump($iptc);
}
?>
```

### Notas

> **Nota**:
>
> Esta função não requer a biblioteca de imagens GD.

### Veja também

- [getimagesizefromstring()](function.getimagesizefromstring.md) - Obtém o tamanho de uma imagem a partir de uma string
- [image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md) - Obtém o Mime-Type para o tipo de imagem retornado por getimagesize,
  exif\_read\_data, exif\_thumbnail e exif\_imagetype
- [exif\_imagetype()](function.exif-imagetype.md) - Verifica o tipo de uma imagem
- [exif\_read\_data()](function.exif-read-data.md) - Lê os cabeçalhos EXIF de um arquivo de imagen
- [exif\_thumbnail()](function.exif-thumbnail.md) - Recupera a miniatura embutida de uma imagem
- [imagesx()](function.imagesx.md) - Obtém a largura da imagem
- [imagesy()](function.imagesy.md) - Obtém a altura da imagem

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
