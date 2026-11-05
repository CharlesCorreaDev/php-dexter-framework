# Registra uma função PHP como função XPath com namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domxpath.registerphpfunctionns.php

---

# DOMXPath::registerPhpFunctionNS

(PHP >= 8.4.0)

DOMXPath::registerPhpFunctionNS — Registra uma função PHP como função XPath com namespace

### Descrição

public function **DOMXPath::registerPhpFunctionNS**([string](language.types.string.md) `$namespaceURI`, [string](language.types.string.md) `$name`, [callable](language.types.callable.md) `$callable`): [void](language.types.void.md)

Este método permite usar uma função PHP como uma função XPath com namespace
dentro de expressões XPath.

### Parâmetros

`namespaceURI`
:   O URI do namespace.

`name`
:   O nome da função local dentro do namespace.

`callable`
:   A função PHP a ser chamada quando a função XPath é chamada dentro da expressão XPath.
    Quando uma lista de nós é passada como parâmetro para a função de retorno,
    eles são arrays contendo os nós DOM correspondentes.

### Erros/Exceções

- Lança uma exceção [ValueError](class.valueerror.md) se
  um nome de chamada de retorno não for válido.
- Lança uma exceção [ValueError](class.valueerror.md) se
  `options` contiver uma opção inválida.
- Lança uma exceção [ValueError](class.valueerror.md) s
  `overrideEncoding` for uma codificação desconhecida.
- Lança uma exceção [TypeError](class.typeerror.md) se
  uma função de retorno informada não for chamável.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Registra uma função XPath com namespace e a chama a partir da expressão XPath**

```
<?php

$xml = <<<EOB
<books>
<book>
 <title>PHP Basics</title>
 <author>Jim Smith</author>
 <author>Jane Smith</author>
</book>
<book>
 <title>PHP Secrets</title>
 <author>Jenny Smythe</author>
</book>
<book>
 <title>XML basics</title>
 <author>Joe Black</author>
</book>
</books>
EOB;

$doc = new DOMDocument();
$doc->loadXML($xml);

$xpath = new DOMXPath($doc);

// Registra o namespace my: (obrigatório)
$xpath->registerNamespace("my", "urn:my.ns");

// Registra função PHP
$xpath->registerPhpFunctionNS(
    'urn:my.ns',
    'substring',
    fn (array $arg1, int $start, int $length) => substr($arg1[0]->textContent, $start, $length)
);

// Chama a função substr no título do livro
$nodes = $xpath->query('//book[my:substring(title, 0, 3) = "PHP"]');

echo "Encontrados {$nodes->length} livros iniciando com 'PHP':\n";
foreach ($nodes as $node) {
   $title  = $node->getElementsByTagName("title")->item(0)->nodeValue;
   $author = $node->getElementsByTagName("author")->item(0)->nodeValue;
   echo "$title por $author\n";
}

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Encontrados 2 livros iniciando com 'PHP':
PHP Basics por Jim Smith
PHP Secrets por Jenny Smythe
```

### Veja também

- [DOMXPath::registerNamespace()](domxpath.registernamespace.md) - Registra o namespace com o objeto DOMXPath
- [DOMXPath::query()](domxpath.query.md) - Avalia a expressão XPath fornecida
- [DOMXPath::evaluate()](domxpath.evaluate.md) - Avalia a expressão XPath fornecida e retorna um resultado tipado se possível
- [XSLTProcessor::registerPHPFunctions()](xsltprocessor.registerphpfunctions.md) - Habilita o uso de funções do PHP como funções XSLT
- [XSLTProcessor::registerPHPFunctionNS()](xsltprocessor.registerphpfunctionns.md) - Registra uma função PHP como uma função XSLT com namespace

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
