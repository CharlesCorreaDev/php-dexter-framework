# Transforma em um documento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.transformtodoc.php

---

# XSLTProcessor::transformToDoc

(PHP 5, PHP 7, PHP 8)

XSLTProcessor::transformToDoc — Transforma em um documento

### Descrição

public function **XSLTProcessor::transformToDoc**([object](language.types.object.md) `$document`, [?](language.types.null.md)[string](language.types.string.md) `$returnClass` = **`null`**): [object](language.types.object.md)|[false](language.types.singleton.md)

Transforma o nó de origem em um documento (ex.: [DOMDocument](class.domdocument.md)) aplicando
a folha de estilos fornecida pelo método
[XSLTProcessor::importStylesheet()](xsltprocessor.importstylesheet.md).

### Parâmetros

`document`
:   O objeto [Dom\Document](class.dom-document.md), [DOMDocument](class.domdocument.md), [SimpleXMLElement](class.simplexmlelement.md), ou outro compatível
    com libxml a ser transformado.

`returnClass`
:   Este parâmetro opcional pode ser usado para que
    **XSLTProcessor::transformToDoc()**
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

O documento resultante ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança uma exceção [Error](class.error.md) se a função de retorno não puder ser chamada, em vez de emitir um alerta. |
| 8.4.0 | Adicionado suporte para [Dom\Document](class.dom-document.md). |

### Examples

**Exemplo #1 Transformando em um [DOMDocument](class.domdocument.md)**

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

echo trim($proc->transformToDoc($xml)->firstChild->wholeText);

?>
```

O exemplo acima produzirá:

```
Hey! Welcome to Nicolas Eliaszewicz's sweet CD collection!
```

**Exemplo #2 Transformando em um [Dom\Document](class.dom-document.md)**

```
<?php

$xml = Dom\XMLDocument::createFromFile('collection.xml');
$xsl = Dom\XMLDocument::createFromFile('collection.xsl');

// Configura o transformador
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // anexa as regras xsl

echo trim($proc->transformToDoc($xml)->firstChild->wholeText);

?>
```

O exemplo acima produzirá:

```
Hey! Welcome to Nicolas Eliaszewicz's sweet CD collection!
```

### Veja também

- [XSLTProcessor::transformToUri()](xsltprocessor.transformtouri.md) - Transforma em URI
- [XSLTProcessor::transformToXml()](xsltprocessor.transformtoxml.md) - Transforma em XML

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
