# Filtros de Compressão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/filters.compression.php

---

## Filtros de Compressão

Enquanto os [Empacotadores de Compressão](wrappers.compression.md)
fornecem uma maneira de criar
arquivos compatíveis com gzip e bz2 no sistema de arquivos local, eles não fornecem um
meio para compressão generalizada de fluxos de rede, nem fornecem uma
maneira de começar com um fluxo não-comprimido e mudar para um comprimido.
Para isso, um filtro de compressão pode ser aplicado a qualquer recurso de fluxo em qualquer momento.

> **Nota**:
>
> Filtros de compressão *não* geram cabeçalhos e rodapés
> usados por utilitários de linha de comando como o `gzip`. Eles apenas comprimem
> e descomprimem as porções de conteúdo dos fluxos de dados comprimidos.

## zlib.deflate e zlib.inflate

`zlib.deflate` (compressão) e
`zlib.inflate` (descompressão) são implementações dos
métodos de compressão descritos no [» RFC 1951](https://datatracker.ietf.org/doc/html/rfc1951).
O filtro `deflate` recebe até três parâmetros passados como
um array associativo.
`level` descreve o nível
de compressão a ser usada (1-9). Números mais altos geralmente resultam em cargas menores com
o custo de tempo de processamento adicional. Dois níveis especiais de compressão também existem:
0 (para nenhuma compressão), e -1 (padrão interno da zlib -- atualmente 6).
`window` é o logaritmo na base 2 do tamanho da janela de loopback de compressão.
Valores mais altos (até 15 -- 32768 bytes) resultam em melhor compressão ao custo de memória,
enquanto valores menores (até 9 -- 512 bytes) resultam em pior compressão usando menos memória.
O tamanho padrão de `window` atualmente é `15`.
`memory` é uma escala indicando quanta memória deve ser alocada para trabalhar.
Valores válidos vão de 1 (alocação mínima) até 9 (alocação máxima). Essa alocação de memória
afeta apenas a velocidade e não tem impacto sobre o tamanho do conteúdo gerado.

> **Nota**:
>
> Pelo fato do nível de compressão ser o parâmetro mais usado normalmente, ele pode ser passado
> de maneira alternativa como um simples valor inteiro (ao invés de um elemento de um array).

Filtros de compressão zlib.\* compression estarão disponíveis se o suporte ao
[zlib](ref.zlib.md) estiver ativado.

**Exemplo #1
`zlib.deflate` e
`zlib.inflate`**

```
<?php
$params = array('level' => 6, 'window' => 15, 'memory' => 9);

$original_text = "Isto é um teste.\nIsto é apenas um teste.\nEsta não é uma string importante.\n";
echo "O texto original tem " . strlen($original_text) . " caracteres.\n";

$fp = fopen('test.deflated', 'w');
stream_filter_append($fp, 'zlib.deflate', STREAM_FILTER_WRITE, $params);
fwrite($fp, $original_text);
fclose($fp);

echo "O arquivo comprimido tem " . filesize('test.deflated') . " bytes.\n";
echo "O texto original era:\n";
/* Use readfile e zlib.inflate para descomprimir de forma improvisada */
readfile('php://filter/zlib.inflate/resource=test.deflated');

/* Gera a saída:

O texto original tem 79 caracteres.
O arquivo comprimido tem 61 bytes.
O texto original era:
Isto é um teste.
Isto é apenas um teste.
Esta não é uma string importante.

 */
?>
```

**Exemplo #2
`zlib.deflate` simples**

```
<?php
$original_text = "Isto é um teste.\nIsto é apenas um teste.\nEsta não é uma string importante.\n";
echo "O texto original tem " . strlen($original_text) . " caracteres.\n";

$fp = fopen('test.deflated', 'w');
/* Aqui "6" indica nível de compressão 6 */
stream_filter_append($fp, 'zlib.deflate', STREAM_FILTER_WRITE, 6);
fwrite($fp, $original_text);
fclose($fp);

echo "O arquivo comprimido tem " . filesize('test.deflated') . " bytes.\n";

/* Gera a saída:

O texto original tem 79 caracteres.
O arquivo comprimido tem 60 bytes.

 */
?>
```

## bzip2.compress e bzip2.decompress

`bzip2.compress` e
`bzip2.decompress`
funcionam da mesma maneira que os filtros da zlib descritos acima.
O filtro `bzip2.compress` aceita até dois parâmetros passados como
elementos de um array associativo:
`blocks` é um valor inteiro
de 1 até 9 especificando o número de blocos de 100kbyte de memória para alocar para
o espaço de trabalho.
`work` também é um valor inteiro variando de
0 a 250 indicando quanto esforço será realizado usando o método normal de compressão
antes de desistir e usar um mais lento, mas mais confiável. Alterar esse parâmetro
afeta apenas a velocidade de compressão. Nem o tamanho da saída comprimida nem o uso de memória
são alterados por essa configuração. Um fator de trabalho de 0 diz à biblioteca bzip para usar
o padrão interno.
O filtro `bzip2.decompress` só aceita um parâmetro,
que pode ser passado ou como um valor booleano comum ou como o
elemento `small` de um array associativo.
`small`, quando configurado para o valor **`true`**, diz à biblioteca bzip
para fazer a descompressão usando o mínimo de memória ao custo da velocidade.

Filtros de compressão bzip2.\* estão disponíveis se suporte a
[bz2](ref.bzip2.md) estiver ativado.

**Exemplo #3
`bzip2.compress` e
`bzip2.decompress`**

```
<?php
$param = array('blocks' => 9, 'work' => 0);

echo "O arquivo original tem " . filesize('LICENSE') . " bytes.\n";

$fp = fopen('LICENSE.compressed', 'w');
stream_filter_append($fp, 'bzip2.compress', STREAM_FILTER_WRITE, $param);
fwrite($fp, file_get_contents('LICENSE'));
fclose($fp);

echo "O arquivo comprimido tem " . filesize('LICENSE.compressed') . " bytes.\n";

/* Gera a saída:

O arquivo original tem 3288 bytes.
O arquivo comprimido tem 1488 bytes.

 */
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
