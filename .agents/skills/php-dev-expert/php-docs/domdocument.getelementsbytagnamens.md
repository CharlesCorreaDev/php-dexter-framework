# Procura por todos os elementos com uma determinada tag name em um namespace específico

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.getelementsbytagnamens.php

---

# DOMDocument::getElementsByTagNameNS

(PHP 5, PHP 7, PHP 8)

DOMDocument::getElementsByTagNameNS — 
Procura por todos os elementos com uma determinada tag name em um namespace específico

### Descrição

public function **DOMDocument::getElementsByTagNameNS**([?](language.types.null.md)[string](language.types.string.md) `$namespace`, [string](language.types.string.md) `$localName`): [DOMNodeList](class.domnodelist.md)

Retorna um objeto [DOMNodeList](class.domnodelist.md) de todos os elementos com um
name local e um URI de namespace específicos.

### Parâmetros

`namespace`
:   O URI do namespace dos elementos a serem correspondidos.
    O valor especial `"*"` corresponde a todos os namespaces.
    Passar **`null`** corresponde ao namespace vazio.

`localName`
:   O nome local dos elementos a serem correspondidos.
    O valor especial `"*"` corresponde a todos os nomes locais.

### Valor Retornado

Um novo objeto [DOMNodeList](class.domnodelist.md) contendo todos os
elementos correspondentes.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.3 | `namespace` agora pode ser nulo. |

### Examples

**Exemplo #1 Obtendo todos os elementos XInclude**

```
<?php

$xml = <<<EOD
<?xml version="1.0" ?>
<chapter xmlns:xi="http://www.w3.org/2001/XInclude">
<title>Livros de outra pessoa...</title>
<para>
 <xi:include href="book.xml">
  <xi:fallback>
   <error>xinclude: book.xml não encontrado</error>
  </xi:fallback>
 </xi:include>
 <include>
  Este é outro namespace
 </include>
</para>
</chapter>
EOD;
$dom = new DOMDocument;

// carrega a string XML definida acima
$dom->loadXML($xml);

foreach ($dom->getElementsByTagNameNS('http://www.w3.org/2001/XInclude', '*') as $element) {
    echo 'nome local: ', $element->localName, ', prefixo: ', $element->prefix, "\n";
}
?>
```

O exemplo acima produzirá:

```
nome local: include, prefixo: xi
nome local: fallback, prefixo: xi
```

### Veja também

- [DOMDocument::getElementsByTagName()](domdocument.getelementsbytagname.md) - Procura por todos os elementos com uma determinada tag name local

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
