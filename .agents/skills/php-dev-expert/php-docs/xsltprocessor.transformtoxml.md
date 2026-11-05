# Transforma em XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.transformtoxml.php

---

# XSLTProcessor::transformToXml

(PHP 5, PHP 7, PHP 8)

XSLTProcessor::transformToXml — Transforma em XML

### Descrição

public function **XSLTProcessor::transformToXml**([object](language.types.object.md) `$document`): [string](language.types.string.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Transforma o nó de origem em uma string aplicando a folha de estilos fornecida pelo
método [xsltprocessor::importStylesheet()](xsltprocessor.importstylesheet.md).

### Parâmetros

`document`
:   O objeto [Dom\Document](class.dom-document.md), [DOMDocument](class.domdocument.md), [SimpleXMLElement](class.simplexmlelement.md), ou outro compatível
    com libxml a ser transformado.

`returnClass`
:   Este parâmetro opcional pode ser usado para que
    [XSLTProcessor::transformToDoc()](xsltprocessor.transformtodoc.md)
    retorne um objeto da classe especificada.
    Esta classe deve estender ou ser da mesma classe de `document`.

### Erros/Exceções

Os seguintes erros são possíveis ao usar uma expressão que invoca
retornos de chamada PHP.

- Lança um [Error](class.error.md) se
  um retorno de chamada do PHP for invocado, mas não houver nenhum retorno de chamada registrado
  ou se o retorno de chamada nomeado não tiver sido registrado.
- Lança um [TypeError](class.typeerror.md) se
  a sintaxe `php:function` for usada e o nome do manipulador
  não for uma string.
- Lança um [Error](class.error.md) se
  um objeto não DOM foi retornado de um retorno de chamada.

### Valor Retornado

O resultado da transformação como uma string ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança uma exceção [Error](class.error.md) se a função de retorno não puder ser chamada, em vez de emitir um alerta. |
| 8.4.0 | Adicionado suporte para [Dom\Document](class.dom-document.md). |

### Examples

**Exemplo #1 Transformando em uma string**

```
<?php

// Carrega a fonte XML
$xml = new DOMDocument;
$xml->load('collection.xml');

$xsl = new DOMDocument;
$xsl->load('collection.xsl');

// Configura o transformador
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // anexa as regras xsl

echo $proc->transformToXML($xml);

?>
```

O exemplo acima produzirá:

```
Hey! Welcome to Nicolas Eliaszewicz's sweet CD collection!

<h1>Fight for your mind</h1><h2>by Ben Harper - 1995</h2><hr>
<h1>Electric Ladyland</h1><h2>by Jimi Hendrix - 1997</h2><hr>
```

**Exemplo #2 Transformando em uma string usando [Dom\Document](class.dom-document.md)**

```
<?php

$xml = Dom\XMLDocument::createFromFile('collection.xml');
$xsl = Dom\XMLDocument::createFromFile('collection.xsl');

// Configura o transformador
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // anexa as regras xsl

echo $proc->transformToXML($xml);

?>
```

O exemplo acima produzirá:

```
Hey! Welcome to Nicolas Eliaszewicz's sweet CD collection!

<h1>Fight for your mind</h1><h2>by Ben Harper - 1995</h2><hr>
<h1>Electric Ladyland</h1><h2>by Jimi Hendrix - 1997</h2><hr>
```

### Veja também

- [XSLTProcessor::transformToDoc()](xsltprocessor.transformtodoc.md) - Transforma em um documento
- [XSLTProcessor::transformToUri()](xsltprocessor.transformtouri.md) - Transforma em URI

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
