# Cria um prefixo/namespace de contexto para a próxima consulta XPath

> **Fonte / Source:** https://www.php.net/manual/pt_BR/simplexmlelement.registerxpathnamespace.php

---

# SimpleXMLElement::registerXPathNamespace

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SimpleXMLElement::registerXPathNamespace — 
Cria um prefixo/namespace de contexto para a próxima consulta XPath

### Descrição

public function **SimpleXMLElement::registerXPathNamespace**([string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$namespace`): [bool](language.types.boolean.md)

Cria um prefixo/namespace de contexto para a próxima consulta XPath. Basicamente, esta
função será útil se o provedor do documento XML informado, altera os
prefixos dos namespaces. `registerXPathNamespace` criará um prefixo para o
namespace associado, permitindo o acesso a nós no namespace
sem a necessidade de mudar o código para permitir novos prefixos ditados pelo
provedor.

### Parâmetros

`prefix`
:   O prefixo do namespace utilizado na consulta XPath para o namespace dado em
    `namespace`.

`namespace`
:   O namespace para ser utilizado na consulta XPath. Este parâmetro deve fechar com um
    namespace utilizado pelo documento XML ou a consulta XPath utilizando
    `prefix` não retornará nenhum resultado.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Definindo um prefixo de namespace para ser usado em uma consulta XPath**

```
<?php

$xml = <<<EOD
<book xmlns:chap="http://example.org/chapter-title">
    <title>My Book</title>
    <chapter id="1">
        <chap:title>Chapter 1</chap:title>
        <para>Donec velit. Nullam eget tellus vitae tortor gravida scelerisque.
            In orci lorem, cursus imperdiet, ultricies non, hendrerit et, orci.
            Nulla facilisi. Nullam velit nisl, laoreet id, condimentum ut,
            ultricies id, mauris.</para>
    </chapter>
    <chapter id="2">
        <chap:title>Chapter 2</chap:title>
        <para>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin
            gravida. Phasellus tincidunt massa vel urna. Proin adipiscing quam
            vitae odio. Sed dictum. Ut tincidunt lorem ac lorem. Duis eros
            tellus, pharetra id, faucibus eu, dapibus dictum, odio.</para>
    </chapter>
</book>
EOD;

$sxe = new SimpleXMLElement($xml);

$sxe->registerXPathNamespace('c', 'http://example.org/chapter-title');
$result = $sxe->xpath('//c:title');

foreach ($result as $title) {
    echo $title . "\n";
}

?>
```

O exemplo acima produzirá:

```
Chapter 1
Chapter 2
```

Perceba como como o documento XML mostrado no exemplo define o namespace com o
prefixo de `chap`. Imagine que este documento (ou outro semelhante)
deveria ter utilizado o prefixo de `c` no passado para o mesmo
namespace. Uma vez que ele foi alterado, a consulta XPath não irá mais
retornar os resultados apropriados e a consulta exigirá modificações. Utilizando
`registerXPathNamespace` evita modificações futuras na consulta, mesmo
que o provedor altere o prefixo dos namespaces.

### Veja também

- [SimpleXMLElement::xpath()](simplexmlelement.xpath.md) - Executa uma consulta XPath em dados XML
- [SimpleXMLElement::getDocNamespaces()](simplexmlelement.getdocnamespaces.md) - Retorna um namespace declarado no documento
- [SimpleXMLElement::getNamespaces()](simplexmlelement.getnamespaces.md) - Retorna os namespaces utilizados no documento

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
