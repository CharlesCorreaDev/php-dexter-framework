# Transforma em URI

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xsltprocessor.transformtouri.php

---

# XSLTProcessor::transformToURI

(PHP 5, PHP 7, PHP 8)

XSLTProcessor::transformToURI — Transforma em URI

### Descrição

public function **XSLTProcessor::transformToUri**([object](language.types.object.md) `$document`, [string](language.types.string.md) `$uri`): [int](language.types.integer.md)

Transforma o nó de origem em uma URI aplicando a folha de estilos fornecida pelo
método [XSLTProcessor::importStylesheet()](xsltprocessor.importstylesheet.md).

### Parâmetros

`document`
:   O objeto [Dom\Document](class.dom-document.md), [DOMDocument](class.domdocument.md) ou [SimpleXMLElement](class.simplexmlelement.md) a
    ser transformado.

`uri`
:   A URI alvo para a transformação.

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

Retorna o número de bytes escritos ou **`false`** se um erro ocorrer.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança uma exceção [Error](class.error.md) se a função de retorno não puder ser chamada, em vez de emitir um alerta. |
| 8.4.0 | Adicionado suporte para [Dom\Document](class.dom-document.md). |

### Examples

**Exemplo #1 Transformando em um arquivo HTML**

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

$proc->transformToURI($xml, 'file:///tmp/out.html');

?>
```

**Exemplo #2 Transformando em um arquivo HTML usando [Dom\Document](class.dom-document.md)**

```
<?php

$xml = Dom\XMLDocument::createFromFile('collection.xml');
$xsl = Dom\XMLDocument::createFromFile('collection.xsl');

// Configura o transformador
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // anexa as regras xsl

$proc->transformToURI($xml, 'file:///tmp/out.html');

?>
```

### Veja também

- [XSLTProcessor::transformToDoc()](xsltprocessor.transformtodoc.md) - Transforma em um documento
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
