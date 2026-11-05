# Adiciona um atributo a elemento SimpleXML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.addattribute.php

---

# SimpleXMLElement::addAttribute

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

SimpleXMLElement::addAttribute — 
Adiciona um atributo a elemento SimpleXML

### Descrição

public function **SimpleXMLElement::addAttribute**([string](language.types.string.md) `$qualifiedName`, [string](language.types.string.md) `$value`, [?](language.types.null.md)[string](language.types.string.md) `$namespace` = **`null`**): [void](language.types.void.md)

Adiciona um atributo à elemento SimpleXML

### Parâmetros

`qualifiedName`
:   O nome do atributo a ser adicionado.

`value`
:   O valor do atributo.

`namespace`
:   Se especificado, diz a qual namespace o atributo pertence.

### Valor Retornado

Nenhum valor é retornado.

### Examples

> **Nota**:
>
> Os exemplos listados podem incluir o arquivo `examples/simplexml-data.php`,
> que referem-se a uma string XML encontrada no primeiro exemplo
> do guia de [uso básico](simplexml.examples-basic.md).

**Exemplo #1 Adiciona atributos e filhos à um elemento SimpleXML**

```
<?php

include 'examples/simplexml-data.php';

$sxe = new SimpleXMLElement($xmlstr);
$sxe->addAttribute('tipo', 'documentário');

$filme = $sxe->addChild('filme');
$filme->addChild('titulo', 'PHP2: Mais Estórias de Interpretadores');
$filme->addChild('resumo', 'É tudo é sobre as pessoas que fazem isso funcionar.');

$personagens = $filme->addChild('personagens');
$personagem  = $personagens->addChild('personagem');
$personagem->addChild('nome', 'Sr. Interpretador');
$personagem->addChild('ator', 'Fulano de Tal');

$rating = $filme->addChild('classificacao', '5');
$rating->addAttribute('tipo', 'estrelas');

echo $sxe->asXML();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
<?xml version="1.0" standalone="yes"?>
<filmes tipo="documentário">
 <filme>
  <titulo>PHP: Nos Bastidores do Interpretador</titulo>
  <personagens>
   <personagem>
    <nome>Srta. Codificadora</nome>
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
 <filme>
  <titulo>PHP2: Mais Estórias de Interpretadores</titulo>
  <resumo>É tudo é sobre as pessoas que fazem isso funcionar.</resumo>
  <personagens>
   <personagem>
    <nome>Sr. Interpretador</nome>
    <ator>Fulano de Tal</ator>
   </personagem>
  </personagens>
  <classificacao tipo="estrelas">5</classificacao>
 </filme>
</filmes>
```

### Veja também

- [SimpleXMLElement::addChild()](simplexmlelement.addchild.md) - Adiciona um elemento filho à um nó XML
- [Uso Básico de SimpleXML](simplexml.examples-basic.md)

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
