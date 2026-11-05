# Lê os cabeçalhos EXIF de um arquivo de imagen

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.exif-read-data.php

---

# exif\_read\_data

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

exif\_read\_data — Lê os cabeçalhos EXIF de um arquivo de imagen

### Descrição

function **exif\_read\_data**(  
    [resource](language.types.resource.md)|[string](language.types.string.md) `$file`,  
    [?](language.types.null.md)[string](language.types.string.md) `$required_sections` = **`null`**,  
    [bool](language.types.boolean.md) `$as_arrays` = **`false`**,  
    [bool](language.types.boolean.md) `$read_thumbnail` = **`false`**  
): [array](language.types.array.md)|[false](language.types.singleton.md)

A função **exif\_read\_data()** lê os cabeçalhos
EXIF de um arquivo de imagem. Desta forma é possível ler metadados
gerados por câmeras digitais.

Cabeçalhos EXIF tendem a estar presentes em imagens JPEG/TIFF geradas por camêras
digitais, mas infelizmente, cada fabricante de camêra digital tem
uma ideia diferente de como rotular suas imagens, então não se
pode confiar sempre que um cabeçalho EXIF específico estará presente.

Altura (`Height`) e largura (`Width`) sao computadas
da mesma maneira que [getimagesize()](function.getimagesize.md) faz, então seus valores não devem
ser parte de nenhum cabeçalho retornado. Além disso, `html` é
uma string de texto com altura/largura a ser usado dentro de umHTML normal.

Quando um cabeçalho Exif contém uma nota de direitos autorais, esta nota pode conter dois
valores. Como a solução é inconsistente com o padrão Exif 2.10 a seção
`COMPUTED` irá retornar ambas as entradas
`Copyright.Photographer`
e `Copyright.Editor` enquanto que as seções `IFD0`
contém um array de bytes com o caractere NULL que separa as duas
entradas. Ou apenas a primeira entrada se o tipo de dados estiver errado (funcionamento normal
do Exif). `COMPUTED` irá conter também a entrada
`Copyright` que será a string original do copyright
ou uma lista separada por vírgula dos direitos autorais da foto e do editor.

A etiqueta `UserComment` tem o mesmo problema que a etiqueta de
Copyright. Ela pode guardar dois valores. Primeiro a codificação usada e em segundo o valor
em si. Então a seção `IFD` contém somente a codificação
ou um array de bytes. A seção `COMPUTED` irá guardar ambos nas
entradas `UserCommentEncoding` e
`UserComment`. A entrada `UserComment`
está disponível em ambos os casos então deve ser usada em preferência ao
valor da seção `IFD0`.

**exif\_read\_data()** também valida etiquetas de dados EXIF de acordo
com a especificação EXIF ([» http://exif.org/Exif2-2.PDF](http://exif.org/Exif2-2.PDF), página 20).

### Parâmetros

`file`
:   A localização do arquivo de imagem. Pode ser uma caminho para o arquivo
    (empacotadores de fluxo são também suportados)
    ou um fluxo do tipo [resource](language.types.resource.md).

`required_sections`
:   Uma lista de seções separadas por vírgula que precisam estar presentes no arquivo
    para produzir o resultado do tipo [array](language.types.array.md). Se nenhuma das seções informadas
    puder ser encontrada o valor de retorno é **`false`**.

    |  |  |
    | --- | --- |
    | FILE | FileName, FileSize, FileDateTime, SectionsFound |
    | COMPUTED | html, Width, Height, IsColor, e mais se disponíveis. Height e Width são computadas da mesma maneira que [getimagesize()](function.getimagesize.md) faz, portanto seus valores não deve ser parte de nenhum cabeçalho retornado. Além disso, `html` é uma string de texto com altura/largura a ser usado dentro de um HTML normal. |
    | ANY\_TAG | Qualquer informação que tenha uma etiqueta, ex.: `IFD0`, `EXIF`, ... |
    | IFD0 | Todos os dados etiquetados de IFD0. Em arquivos de imagem normais, contém o tamanho da imagem e outros dados. |
    | THUMBNAIL | Um arquivo deveria ter uma miniatura se tiver um segundo `IFD`. Todas as informações etiquetadas sobre a miniatura embutida estão gravadas nesta seção. |
    | COMMENT | Cabeçalho de comentários de imagens JPEG. |
    | EXIF | A seção EXIF é uma sub-seção de `IFD0`. Contém informação mais detalhada sobre uma imagem. A maior parte destas entradas são relacionadas a câmeras digitais. |

`as_arrays`
:   Especifica se cada seção se torna ou não um array. As seções
    `COMPUTED`, `THUMBNAIL` E
    `COMMENT` de `required_sections`
    sempre se toranm arrays por que contêm valores cujos nomes conflitam
    com outras seções.

`read_thumbnail`
:   Quando definida para **`true`** a miniatura em si é lida. Caso contrário, apenas
    os dados etiquetados são lidos.

### Valor Retornado

Retorna um [array](language.types.array.md) associativo onde os índices são
os nomes dos cabeçalhos e os valores são os associados com
esses cabeçalhos. Se nenhum dado puder ser retornado,
**exif\_read\_data()** retornará **`false`**.

### Erros/Exceções

Erros de nível **`E_WARNING`** e/ou **`E_NOTICE`**
podem ser disparados para etiquetas não suportadas ou outras condições de erros potenciais, mas a
função ainda tenta lêr toda a informação compreensível.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `required_sections` agora pode ser nulo. |
| 7.2.0 | O parâmetro `file` agora suporta tanto arquivos locais quanto recursos de fluxo. |
| 7.2.0 | Adicionado suporte aos seguintes formatos EXIF:  - Samsung - DJI - Panasonic - Sony - Pentax - Minolta - Sigma/Foveon - AGFA - Kyocera - Ricoh - Epson |

### Examples

**Exemplo #1 Exemplo **exif\_read\_data()****

```
<?php
echo "test1.jpg:<br />\n";
$exif = exif_read_data('tests/test1.jpg', 'IFD0');
echo $exif===false ? "Dados de cabeçalho não encontrados.<br />\n" : "Imagem contém cabeçalhos<br />";

$exif = exif_read_data('tests/test2.jpg', 0, true);
echo "test2.jpg:<br />\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
        echo "$key.$name: $val<br />\n";
    }
}
?>
```

A primeira chamada falha porque a imagem não tem informações no cabeçalho.

O exemplo acima produzirá
algo semelhante a:

```
test1.jpg:
Dados de cabeçalho não encontrados.
test2.jpg:
FILE.FileName: test2.jpg
FILE.FileDateTime: 1017666176
FILE.FileSize: 1240
FILE.FileType: 2
FILE.SectionsFound: ANY_TAG, IFD0, THUMBNAIL, COMMENT
COMPUTED.html: width="1" height="1"
COMPUTED.Height: 1
COMPUTED.Width: 1
COMPUTED.IsColor: 1
COMPUTED.ByteOrderMotorola: 1
COMPUTED.UserComment: Exif test image.
COMPUTED.UserCommentEncoding: ASCII
COMPUTED.Copyright: Photo (c) M.Boerger, Edited by M.Boerger.
COMPUTED.Copyright.Photographer: Photo (c) M.Boerger
COMPUTED.Copyright.Editor: Edited by M.Boerger.
IFD0.Copyright: Photo (c) M.Boerger
IFD0.UserComment: ASCII
THUMBNAIL.JPEGInterchangeFormat: 134
THUMBNAIL.JPEGInterchangeFormatLength: 523
COMMENT.0: Comment #1.
COMMENT.1: Comment #2.
COMMENT.2: Comment #3end
THUMBNAIL.JPEGInterchangeFormat: 134
THUMBNAIL.Thumbnail.Height: 1
THUMBNAIL.Thumbnail.Height: 1
```

**Exemplo #2 **exif\_read\_data()** com fluxos, disponível a partir do PHP 7.2.0**

```
<?php
// Abre o arquivo, deve ser em modo binário
$fp = fopen('/path/to/image.jpg', 'rb');

if (!$fp) {
    echo 'Erro: Não foi possível abrir a imagem para leitura';
    exit;
}

// Tenta ler o cabeçalhos exif
$headers = exif_read_data($fp);

if (!$headers) {
    echo 'Erro: Não foi possível ler os cabeçalhos exif';
    exit;
}

// Mostra os cabeçalhos de 'COMPUTED'
echo 'Cabeçalhos EXIF:' . PHP_EOL;

foreach ($headers['COMPUTED'] as $header => $value) {
    printf(' %s => %s%s', $header, $value, PHP_EOL);
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Cabeçalhos EXIF:
 Height => 576
 Width => 1024
 IsColor => 1
 ByteOrderMotorola => 0
 ApertureFNumber => f/5.6
 UserComment =>
 UserCommentEncoding => UNDEFINED
 Copyright => Denis
 Thumbnail.FileType => 2
 Thumbnail.MimeType => image/jpeg
```

### Notas

> **Nota**:
>
> Se [mbstring](ref.mbstring.md) estiver habilitado, exif tentará processar
> em codificação unicode e escolher um conjunto de caracteres como especificado por
> [exif.decode\_unicode\_motorola](exif.configuration.md#ini.exif.decode-unicode-motorola) e
> [exif.decode\_unicode\_intel](exif.configuration.md#ini.exif.decode-unicode-intel). A extensão
> exif não tentará descobrir a codificação por si mesma, é responsabilidade do programador
> especificar corretamente a codificação a ser usada, configurando uma das duas
> diretivas ini antes de chamar **exif\_read\_data()**.

> **Nota**:
>
> Se `file` for usado para passar um fluxo a esta função, o fluxo
> deve ser do tipo pesquisável. Note que a posição do ponteiro do arquivo não é alterada depois que esta função retorna.

### Veja também

- [exif\_thumbnail()](function.exif-thumbnail.md) - Recupera a miniatura embutida de uma imagem
- [getimagesize()](function.getimagesize.md) - Obtém o tamanho de uma imagem
- [Protocolos e empacotadores suportados](wrappers.md)

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
