# Analisa dados XML dentro de uma estrutura de array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-parse-into-struct.php

---

# xml\_parse\_into\_struct

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_parse\_into\_struct — Analisa dados XML dentro de uma estrutura de array

### Descrição

function **xml\_parse\_into\_struct**(  
    [XMLParser](class.xmlparser.md) `$parser`,  
    [string](language.types.string.md) `$data`,  
    [array](language.types.array.md) `&$values`,  
    [array](language.types.array.md) `&$index` = **`null`**  
): [int](language.types.integer.md)|[false](language.types.singleton.md)

Esta função analisa uma string XML para 2 estruturas de array paralelas,
uma (`index`) contendo indicadores para a localização dos
valores apropriados no array identificado por `values`. Estes dois
últimos parâmetros deve ser passados por referência.

### Parâmetros

`parser`
:   Uma referência ao analisador XML.

`data`
:   Uma string contendo os dados XML.

`values`
:   Um array contendo os valores do dados XML

`index`
:   Um array contendo ponteiros para a localização dos valores apropriados em $values.

### Valor Retornado

**xml\_parse\_into\_struct()** retorna 0 para falha e 1 para
sucesso. Isto não é o mesmo que **`false`** e **`true`**, deve-se ter cuidado ao usar
operadores como ===.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `parser` agora espera uma instância de [XMLParser](class.xmlparser.md); anteriormente, um [resource](language.types.resource.md) `xml` válido era esperado. |

### Examples

Abaixo há um exemplo que ilustra a estrutura interna
dos arrays sendo gerados pela função. Será usada uma simples
etiqueta `note` embutida dentro da
etiqueta `para`, e então será feita análise e depois mostradas
as estruturas geredas:

**Exemplo #1 Exemplo de **xml\_parse\_into\_struct()****

```
<?php
$simple = "<para><note>simple note</note></para>";
$p = xml_parser_create();
xml_parse_into_struct($p, $simple, $vals, $index);
echo "Array de índices\n";
print_r($index);
echo "\nArray de valores\n";
print_r($vals);
?>
```

Ao executar o código, a saída será:

```
Array de índices
Array
(
    [PARA] => Array
        (
            [0] => 0
            [1] => 2
        )

    [NOTE] => Array
        (
            [0] => 1
        )

)

Array de valores
Array
(
    [0] => Array
        (
            [tag] => PARA
            [type] => open
            [level] => 1
        )

    [1] => Array
        (
            [tag] => NOTE
            [type] => complete
            [level] => 2
            [value] => simple note
        )

    [2] => Array
        (
            [tag] => PARA
            [type] => close
            [level] => 1
        )

)
```

Análise guiada por eventos (baseada na biblioteca expat) pode se tornar
complicada quando se tem um documento XML complexo.
Esta função não produz um objeto no estilo DOM, mas gera
estruturas passíveis de serem organizadas em forma de
árvore. Assim, pode-se criar objetos representando os dados
no arquivo XML facilmente. Considere o seguinte arquivo XML
representando um pequeno banco de dados de informações de aminoácidos:

**Exemplo #2 moldb.xml - pequeno banco de dados de informações moleculares**

```
<?xml version="1.0"?>
<moldb>

    <molecule>
        <name>Alanine</name>
        <symbol>ala</symbol>
        <code>A</code>
        <type>hydrophobic</type>
    </molecule>

    <molecule>
        <name>Lysine</name>
        <symbol>lys</symbol>
        <code>K</code>
        <type>charged</type>
    </molecule>

</moldb>
```

E um pouco de código para analisar o documento e gerar os objetos
apropriados:

**Exemplo #3
parsemoldb.php - analisa moldb.xml e cria o array
dos objetos moleculares**

```
<?php

class AminoAcid {
    var $name;  // nome do aminoácido
    var $symbol;    // símbolo de 3 letras
    var $code;  // código de 1 letra
    var $type;  // hidrofóbico, carregado ou natural

    function __construct ($aa)
    {
        foreach ($aa as $k=>$v)
            $this->$k = $aa[$k];
    }
}

function readDatabase($filename)
{
    // lê o banco de dados XML de aminoácidos
    $data = file_get_contents($filename);
    $parser = xml_parser_create();
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, $data, $values, $tags);
    unset($parser);

    // faz um loop pelas estruturas
    foreach ($tags as $key=>$val) {
        if ($key == "molecule") {
            $molranges = $val;
            // cada par contíguo de entradas do array são os limites
            // inferiores e superiores para cada definição de molécula
            for ($i=0; $i < count($molranges); $i+=2) {
                    $offset = $molranges[$i] + 1;
                $len = $molranges[$i + 1] - $offset;
                $tdb[] = parseMol(array_slice($values, $offset, $len));
            }
        } else {
            continue;
        }
    }
    return $tdb;
}

function parseMol($mvalues)
{
    for ($i=0; $i < count($mvalues); $i++) {
        $mol[$mvalues[$i]["tag"]] = $mvalues[$i]["value"];
    }
    return new AminoAcid($mol);
}

$db = readDatabase("moldb.xml");
echo "** Banco de Dados de objetos de Aminoácidos:\n";
print_r($db);

?>
```

Depois de executar parsemoldb.php, a variável
$db conterá um array dos objetos de
**AminoAcid**, e a saída do
script confirma isso:

```
** Banco de Dados de objetos de Aminoácidos:
Array
(
    [0] => aminoacid Object
        (
            [name] => Alanine
            [symbol] => ala
            [code] => A
            [type] => hydrophobic
        )

    [1] => aminoacid Object
        (
            [name] => Lysine
            [symbol] => lys
            [code] => K
            [type] => charged
        )

)
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
