# Uso Básico de SimpleXML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexml.examples-basic.php

---

## Uso Básico de SimpleXML

Muitos exemplos nesta referência requerem uma string XML. Em vez de
repetir esta string em todos os exemplos, ela foi colocada em um arquivo que
incluímos em cada exemplo. Este arquivo incluído é mostrado na
seção de exemplo a seguir. Alternativamente, um documento XML
pode ser criado e lido com [simplexml\_load\_file()](function.simplexml-load-file.md).

**Exemplo #1 Inclusão do arquivo examples/simplexml-data.php com string XML**

```
<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<filmes>
 <filme>
  <titulo>PHP: Nos Bastidores do Interpretador</titulo>
  <personagens>
   <personagem>
    <nome>Srta. Codificadora</nome>
    <ator>Onlivia Actora</ator>
   </personagem>
   <personagem>
    <nome>Sr. Codificador</nome>
    <ator>El Act&#243;r</ator>
   </personagem>
  </personagens>
  <resumo>
   Então, essa linguagem. Se parece com uma linguagem de programação. Ou seria uma
   liguagem de scripts? Tudo é revelado nesta emocionante paródia de terror
   de um documentário.
  </resumo>
  <melhores-frases>
   <frase>O PHP resolve todos os meus problemas!</frase>
  </melhores-frases>
  <classificacao tipo="gostei">7</classificacao>
  <classificacao tipo="estrelas">5</classificacao>
 </filme>
</filmes>
XML;
?>
```

A simplicidade do SimpleXML aparece mais claramente quando se extrai
uma string ou número de um documento XML básico.

**Exemplo #2 Obtendo o `<resumo>`**

```
<?php
include 'examples/simplexml-data.php';

$filmes = new SimpleXMLElement($xmlstr);

echo $filmes->filme[0]->resumo;
?>
```

O exemplo acima produzirá:

```
   Então, essa linguagem. Se parece com uma linguagem de programação. Ou seria uma
   liguagem de scripts? Tudo é revelado nesta emocionante paródia de terror
   de um documentário.
```

O acesso a elementos em um documento XML que contém caracteres não permitidos pela
convenção de nomenclatura do PHP (por exemplo, o hífen) pode ser realizado encapsulando o
nome do elemento entre chaves e apóstrofo.

**Exemplo #3 Obtendo `<frase>`**

```
<?php
include 'examples/simplexml-data.php';

$filmes = new SimpleXMLElement($xmlstr);

echo $filmes->filme->{'melhores-frases'}->frase;
?>
```

O exemplo acima produzirá:

```
O PHP resolve todos os meus problemas!
```

**Exemplo #4 Acessando elementos não exclusivos em SimpleXML**

Quando existem múltiplas instâncias de um elemento como filhos de
um único elemento pai, aplicam-se técnicas normais de iteração.

```
<?php
include 'examples/simplexml-data.php';

$filmes = new SimpleXMLElement($xmlstr);

/* Para cada nó <personagem>, é mostrado um <nome> separado. */
foreach ($filmes->filme->personagens->personagem as $personagem) {
   echo $personagem->nome, ' representado(a) por ', $personagem->ator, PHP_EOL;
}

?>
```

O exemplo acima produzirá:

```
Srta. Codificadora representado(a) por Onlivia Actora
Sr. Codificador representado(a) por El Actór
```

> **Nota**:
>
> Propriedades (`$filmes->filme` no exemplo anterior) não são
> arrays. Elas são objetos [iteráveis](class.iterator.md) e
> [acessíveis](class.arrayaccess.md).

**Exemplo #5 Usando atributos**

Até agora, foi coberto apenas o trabalho de leitura dos nomes dos elementos
e seus valores. SimpleXML também pode acessar atributos de elementos.
Os atributos de um elemento são acessados da mesma forma que os elementos
de um [array](language.types.array.md).

```
<?php
include 'examples/simplexml-data.php';

$filmes = new SimpleXMLElement($xmlstr);

/* Acessando os nós <classificacao> do primeiro filme.
 * Mostra o valor da classificação também. */
foreach ($filmes->filme[0]->classificacao as $classificacao) {
    switch((string) $classificacao['tipo']) { // Obtém atributos como índices de elementos
    case 'gostei':
        echo $classificacao, ' gostaram, ';
        break;
    case 'estrelas':
        echo $classificacao, ' estrelas';
        break;
    }
}
?>
```

O exemplo acima produzirá:

```
7 gostaram, 5 estrelas
```

**Exemplo #6 Comparando Elementos e Atributos com Texto**

Para comparar um elemento ou atributo com uma string ou passá-lo para uma
função que requer uma string, ele deve ser convertido em uma string usando
`(string)`. Caso contrário, o PHP trata o elemento como um objeto.

```
<?php
include 'examples/simplexml-data.php';

$filmes = new SimpleXMLElement($xmlstr);

if ((string) $filmes->filme->titulo == 'PHP: Nos Bastidores do Interpretador') {
    print 'Meu filme favorito. ';
}

echo htmlentities((string) $filmes->filme->titulo);
?>
```

O exemplo acima produzirá:

```
Meu filme favorito. PHP: Nos Bastidores do Interpretador
```

**Exemplo #7 Comparando Dois Elementos**

Dois SimpleXMLElements são considerados diferentes mesmo que apontem para
o mesmo elemento.

```
<?php
include 'examples/simplexml-data.php';

$filmes1 = new SimpleXMLElement($xmlstr);
$filmes2 = new SimpleXMLElement($xmlstr);
var_dump($filmes1 == $filmes2);
?>
```

O exemplo acima produzirá:

```
bool(false)
```

**Exemplo #8 Usando XPath**

SimpleXML inclui suporte interno a XPath.
Para encontrar todos os elementos `<personagem>`.

'`//`' serve como um corginga. Para especificar caminhos
absolutos, omita uma das barras:

```
<?php
include 'examples/simplexml-data.php';

$filmes = new SimpleXMLElement($xmlstr);

foreach ($filmes->xpath('//personagem') as $personagem) {
    echo $personagem->nome, ' representado(a) por ', $personagem->ator, PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
Srta. Codificadora representado(a) por Onlivia Actora
Sr. Codificador representado(a) por El Actór
```

**Exemplo #9 Definindo valores**

Os dados no SimpleXML não precisam ser constantes. O objeto permite
a manipulação de todos os seus elementos.

```
<?php
include 'examples/simplexml-data.php';
$filmes = new SimpleXMLElement($xmlstr);

$filmes->filme[0]->personagens->personagem[0]->nome = 'Senhorita Codificadora';

echo $filmes->asXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" standalone="yes"?>
<filmes>
 <filme>
  <titulo>PHP: Nos Bastidores do Interpretador</titulo>
  <personagens>
   <personagem>
    <nome>Senhorita Codificadora</nome>
    <ator>Onlivia Actora</ator>
   </personagem>
   <personagem>
    <nome>Sr. Codificador</nome>
    <ator>El Act&#xF3;r</ator>
   </personagem>
  </personagens>
  <resumo>
   Então, essa linguagem. Se parece com uma linguagem de programação. Ou seria uma
   liguagem de scripts? Tudo é revelado nesta emocionante paródia de terror
   de um documentário.
  </resumo>
  <melhores-frases>
   <frase>O PHP resolve todos os meus problemas!</frase>
  </melhores-frases>
  <classificacao tipo="gostei">7</classificacao>
  <classificacao tipo="estrelas">5</classificacao>
 </filme>
</filmes>
```

**Exemplo #10 Adicionando elementos e atributos**

SimpleXML tem a capacidade de adicionar facilmente filhos
e atributos.

```
<?php
include 'examples/simplexml-data.php';
$filmes = new SimpleXMLElement($xmlstr);

$personagem = $filmes->filme[0]->personagens->addChild('personagem');
$personagem->addChild('nome', 'Sr. Interpretador');
$personagem->addChild('ator', 'Fulano de Tal');

$classificacao = $filmes->filme[0]->addChild('classificacao', 'PG');
$classificacao->addAttribute('tipo', 'mpaa');

echo $filmes->asXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" standalone="yes"?>
<filmes>
 <filme>
  <titulo>PHP: Nos Bastidores do Interpretador</titulo>
  <personagens>
   <personagem>
    <nome>Srta. Codificadora</nome>
    <ator>Onlivia Actora</ator>
   </personagem>
   <personagem>
    <nome>Sr. Codificador</nome>
    <actor>El Act&#xF3;r</actor>
   </personagem>
  <personagem><nome>Sr. Interpretador</nome><ator>Fulano de Tal</ator></personagem></personagens>
  <resumo>
   Então, essa linguagem. Se parece com uma linguagem de programação. Ou seria uma
   liguagem de scripts? Tudo é revelado nesta emocionante paródia de terror
   de um documentário.
  </resumo>
  <melhores-frases>
   <frase>O PHP resolve todos os meus problemas!</frase>
  </melhores-frases>
  <classificacao tipo="gostei">7</classificacao>
  <classificacao tipo="estrelas">5</classificacao>
 <classificacao tipo="mpaa">PG</classificacao></filme>
</filmes>
```

**Exemplo #11 Interoperabilidade com o DOM**

PHP possui um mecanismo para converter nós XML entre os formatos
SimpleXML e DOM. Este exemplo mostra como um elemento DOM
pode ser alterado para SimpleXML.

```
<?php
$dom = new DOMDocument;
$dom->loadXML('<livros><livro><titulo>Blá</titulo></livro></livros>');
if (!$dom) {
    echo 'Erro ao interpretar o documento.';
    exit;
}

$livros = simplexml_import_dom($dom);

echo $livros->livro[0]->titulo;
?>
```

O exemplo acima produzirá:

```
Blá
```

**Exemplo #12 Trabalhando com namespaces**

```
<?php
$data = <<<XML
<movies xmlns="http://default" xmlns:a="http://a">
 <movie xml:id="movie1" a:link="IMDB">
  <a:actor>Onlivia Actora</a:actor>
 </movie>
</movies>
XML;

$movies = simplexml_load_string($data);

// Namespace http://www.w3.org/XML/1998/namespace está disponível como "xml".
echo $movies->movie->attributes("xml", true)["id"] . "\n";

// Atributos com namespace podem ser acessados com attributes().
echo $movies->movie->attributes("a", true)["link"] . "\n";

// Usar URI com namespace permite ao documento usar qualquer sinônimo de namespace.
echo $movies->movie->attributes("http://a")["link"] . "\n";

// Filhos podem ser acessados com children().
echo $movies->movie->children("http://a")->actor . "\n";

// Usar xpath() com namespace requer que ele seja registrado primeiro.
$movies->registerXPathNamespace("a", "http://a");
echo count($movies->xpath("//a:actor")) . "\n";

// Mesmo o namespace padrão precisa ser registrado.
$movies->registerXPathNamespace("default", "http://default");
echo count($movies->xpath("//default:movie")) . "\n";

// Isto é vazio.
echo count($movies->xpath("//movie")) . "\n";
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
