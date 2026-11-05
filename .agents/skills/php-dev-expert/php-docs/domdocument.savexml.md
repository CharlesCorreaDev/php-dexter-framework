# Despeja a árvore XML interna de volta em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.savexml.php

---

# DOMDocument::saveXML

(PHP 5, PHP 7, PHP 8)

DOMDocument::saveXML — 
Despeja a árvore XML interna de volta em uma string

### Descrição

public function **DOMDocument::saveXML**([?](language.types.null.md)[DOMNode](class.domnode.md) `$node` = **`null`**, [int](language.types.integer.md) `$options` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Cria um documento XML a partir da representação DOM. Esta função é geralmente
chamada após construir um novo documento DOM do zero, como no exemplo abaixo.

### Parâmetros

`node`
:   Use este parâmetro para gerar apenas um nó específico sem declaração XML,
    em vez de gerar o documento inteiro.

`options`
:   Opções Adicionais.
    As opções **`LIBXML_NOEMPTYTAG`**
    e **`LIBXML_NOXMLDECL`** são suportadas.
    Antes do PHP 8.3.0, apenas a opção **`LIBXML_NOEMPTYTAG`**
    era suportada.

### Valor Retornado

Retorna o XML, ou **`false`** se ocorrer um erro.

### Erros/Exceções

Pode lançar um [DOMException](class.domexception.md) com os
seguintes códigos de erro:

**`DOM_WRONG_DOCUMENT_ERR`**
:   Gerado se `node` pertencer a outro documento.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | [LIBXML\_NOXMLDECL](libxml.constants.md) agora é suportada. |

### Examples

**Exemplo #1 Salvando uma árvore DOM em uma string**

```
<?php

$doc = new DOMDocument('1.0');
// queremos uma saída formatada
$doc->formatOutput = true;

$root = $doc->createElement('book');
$root = $doc->appendChild($root);

$title = $doc->createElement('title');
$title = $root->appendChild($title);

$text = $doc->createTextNode('Isto é um título.');
$text = $title->appendChild($text);

echo "Gravando todo o documento:\n";
echo $doc->saveXML() . "\n";

echo "Gravando apenas a parte do título:\n";
echo $doc->saveXML($title);

?>
```

O exemplo acima produzirá:

```
Gravando todo o documento:
<?xml version="1.0"?>
<book>
  <title>Isto é um título.</title>
</book>

Gravando apenas a parte do título:
<title>Isto é um título.</title>
```

### Veja também

- [DOMDocument::save()](domdocument.save.md) - Grava a árvore XML interna de volta em um arquivo
- [DOMDocument::load()](domdocument.load.md) - Carrega XML de um arquivo
- [DOMDocument::loadXML()](domdocument.loadxml.md) - Carrega XML a partir de uma string

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
