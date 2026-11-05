# Adiciona um elemento filho à um nó XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.addchild.php

---

# SimpleXMLElement::addChild

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

SimpleXMLElement::addChild — 
Adiciona um elemento filho à um nó XML

### Descrição

public function **SimpleXMLElement::addChild**([string](language.types.string.md) `$qualifiedName`, [?](language.types.null.md)[string](language.types.string.md) `$value` = **`null`**, [?](language.types.null.md)[string](language.types.string.md) `$namespace` = **`null`**): [?](language.types.null.md)[SimpleXMLElement](class.simplexmlelement.md)

Adiciona um elemento filho ao nó e retorna um elemento SimpleXML do nó filho.

### Parâmetros

`qualifiedName`
:   O nome do elemento filho à ser adicionado.

`value`
:   Se especificado, o valor do elemento filho.

    Os caracteres especiais `<` e `>` são escapados
    automaticamente, `&` precisa ser escapado manualmente.

`namespace`
:   Se especificado, o namespace ao qual o elemento filho pertence.

### Valor Retornado

O método `addChild` retorna um objeto [SimpleXMLElement](class.simplexmlelement.md)
representando o filho adicionado ao nó XML em caso de sucesso; **`null`** em caso de falha.

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

$classificacao = $filme->addChild('classificacao', '5');
$classificacao->addAttribute('tipo', 'estrelas');

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

- [SimpleXMLElement::addAttribute()](simplexmlelement.addattribute.md) - Adiciona um atributo a elemento SimpleXML
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
