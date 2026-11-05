# Retorna um registro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-record.php

---

# yaz\_record

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_record — Retorna um registro

### Descrição

function **yaz\_record**([resource](language.types.resource.md) `$id`, [int](language.types.integer.md) `$pos`, [string](language.types.string.md) `$type`): [string](language.types.string.md)

A função **yaz\_record()** inspeciona um registro no
conjunto de resultados atual na posição especificada pelo parâmetro
`pos`.

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`pos`
:   A posição do registro. As posições dos registros em um conjunto de resultados são numeradas como 1,
    2, ... $hits, onde $hits é a contagem retornada por [yaz\_hits()](function.yaz-hits.md).

`type`
:   `type` especifica o formato do
    registro retornado.

    > **Nota**:
    >
    > É o aplicativo que é responsável por
    > garantir que os registros sejam retornados do servidor Z39.50/SRW
    > no formato correto. O tipo fornecido especifica apenas uma conversão
    > a ser realizada no lado do cliente (em PHP/YAZ).

    Além da conversão do registro de transferência para uma string/array, PHP/YAZ
    também é possível realizar uma conversão de conjunto de caracteres do
    registro. Especialmente para USMARC/MARC21, isso é recomendado, pois
    eles normalmente são retornados no conjunto de caracteres MARC-8,
    que não é suportado por navegadores, etc. Para especificar uma conversão, adicione
    `; charset=`from`,`to onde
    from é o conjunto de caracteres original
    do registro e to é o conjunto de caracteres
    resultante (como visto pelo PHP).

    `string`
    :   O registro é retornado como uma string para facilitar a exibição.
        Neste modo, todos os registros MARC são convertidos para o formato linha por linha,
        já que o ISO2709 é dificilmente legível.
        Registros XML e SUTRS são retornados em seu formato original.
        GRS-1 são retornados em um formato (horrível) linha por linha.

        Este formato é adequado se os registros devem ser exibidos de forma rápida
        - para depuração - ou porque não é viável realizar
        uma exibição adequada.

    `xml`
    :   O registro é retornado como uma string XML, se possível.
        Neste modo, todos os registros MARC são convertidos para
        [» MARCXML](https://www.loc.gov/standards/marcxml/).
        Registros XML e SUTRS são retornados em seu formato original.
        GRS-1 não é suportado.

        Este formato é semelhante a `string`, exceto que
        os registros MARC são convertidos para MARCXML.

        Este formato é adequado se os registros forem processados ​​posteriormente por um analisador XML
        ou processador XSLT.

    `raw`
    :   O registro é retornado como uma string em seu formato original.
        Este tipo é adequado para MARC, XML e SUTRS. Não funciona
        para GRS-1.

        Os registros MARC são retornados como uma string ISO2709. XML e SUTRS são
        retornados como strings.

    `syntax`
    :   A sintaxe do registro é retornada como uma string, ou seja,
        `USmarc`, `GRS-1`,
        `XML`, etc.

    `database`
    :   O nome do banco de dados associado ao registro na posição
        é retornado como uma string.

    `array`
    :   O registro é retornado como um array que reflete a estrutura GRS-1.
        Este tipo é adequado para MARC e GRS-1. XML e SUTRS não são
        suportados e, se o registro real for XML ou SUTRS, uma string
        vazia será retornada.

        O array retornado consiste em uma lista correspondente a
        cada folha/nó interno do GRS-1. Cada item da lista consiste em
        uma sublista com o primeiro elemento *caminho* e
        *dados* (se houver dados disponíveis).

        O caminho, que é uma string, contém uma lista de cada componente da árvore (do
        registro GRS-1 estruturado) da raiz à folha. Cada componente é
        um par de tipo de tag e valor de tag no formato
        `(`type`,`
        value.

        As tags de string normalmente têm uma tag correspondente do tipo 3.
        MARC também pode ser retornado como um array (eles são convertidos para
        GRS-1 internamente).

### Valor Retornado

Retorna o registro na posição `pos` ou uma string
vazia se não houver nenhum registro na posição fornecida.

Se nenhum registro de banco de dados existir na posição fornecida, uma string vazia será
retornada.

### Examples

**Exemplo #1 Array para registro GRS-1**

Considere este registro GRS-1:

```
(4,52)Robert M. Pirsig
(4,70)
      (4,90)
            (2,7)Transworld Publishers, ltd.
```

Este registro possui dois nós no nível raiz. O primeiro elemento no nível raiz é
(4,52) [tipo de tag 4, valor de tag 52] e contém dados `Robert M.
Pirsig`. O segundo elemento no nível raiz (4,70) possui uma subárvore com
um único elemento (4,90). (4,90) possui ainda outra subárvore (2,7) com dados
`Transworld Publishers, ltd.`.

Se este registro estiver presente na posição $p, então

```
<?php

$ar = yaz_record($id, $p, "array");
print_r($ar);

?>
```

irá produzir:

```
Array
(
    [0] => Array
        (
            [0] => (4,52)
            [1] => Robert M. Pirsig
        )
    [1] => Array
        (
            [0] => (4,70)
        )
    [2] => Array
        (
            [0] => (4,70)(4,90)
        )
    [3] => Array
        (
            [0] => (4,70)(4,90)(2,7)
            [1] => Transworld Publishers, ltd.
        )
)
```

**Exemplo #2 Trabalhando com MARCXML**

O seguinte trecho de código PHP retorna um registro MARC21/USMARC como MARCXML.
O registro original é retornado em marc-8 (desconhecido pela maioria dos analisadores XML),
então o convertemos para UTF-8 (que todos os analisadores XML devem suportar).

```
<?php
$rec = yaz_record($id, $p, "xml; charset=marc-8,utf-8");
?>
```

O registro `$rec` pode ser processado com o
processador Sablotron XSLT da seguinte forma:

```
<?php

$xslfile = 'display.xsl';
$processor = xslt_create();
$parms = array('/_xml' => $rec);
$res = xslt_process($processor, 'arg:/_xml', $xslfile, NULL, $parms);
xslt_free($processor);
$res = preg_replace("'</?html[^>]*>'", '', $res);
echo $res;

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
