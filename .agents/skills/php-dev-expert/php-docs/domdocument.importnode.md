# Importa um nó para o documento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocument.importnode.php

---

# DOMDocument::importNode

(PHP 5, PHP 7, PHP 8)

DOMDocument::importNode — Importa um nó para o documento atual

### Descrição

public function **DOMDocument::importNode**([DOMNode](class.domnode.md) `$node`, [bool](language.types.boolean.md) `$deep` = **`false`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

Esta função retorna uma cópia do nó a ser importado e o associa com
o documento atual.

### Parâmetros

`node`
:   O nó a ser importado.

`deep`
:   Se definido como **`true`**, este método importará recursivamente a subárvore sob
    o `node`.

    > **Nota**:
    >
    > Para copiar os atributos dos nós, `deep` precisa ser definido como **`true`**.

### Valor Retornado

O nó copiado ou **`false`**, se não puder ser copiado.

### Erros/Exceções

[DOMException](class.domexception.md) é lançado se o nó não puder ser importado.

### Examples

**Exemplo #1 Exemplo de **DOMDocument::importNode()****

Copiando nós entre documentos.

```
<?php

$orgdoc = new DOMDocument;
$orgdoc->loadXML("<raiz><elemento><filho>texto no filho</filho></elemento></raiz>");

// O nó que queremos importar para um novo documento
$node = $orgdoc->getElementsByTagName("elemento")->item(0);

// Crie um novo documento
$newdoc = new DOMDocument;
$newdoc->formatOutput = true;

// Adicione alguma marcação
$newdoc->loadXML("<raiz><algumelemento>texto em algum elemento</algumelemento></raiz>");

echo "O 'novo documento' antes de copiar nós nele:\n";
echo $newdoc->saveXML();

// Importe o nó, e todos os seus filhos, para o documento
$node = $newdoc->importNode($node, true);
// E então acrescente-o ao nó "<raiz>"
$newdoc->documentElement->appendChild($node);

echo "\nO 'novo documento' após copiar nós nele:\n";
echo $newdoc->saveXML();
?>
```

O exemplo acima produzirá:

```
O 'novo documento' antes de copiar nós nele:
<?xml version="1.0"?>
<raiz>
  <algumelemento>texto em algum elemento</algumelemento>
</raiz>

O 'novo documento' após copiar nós nele:
<?xml version="1.0"?>
<raiz>
  <algumelemento>texto em algum elemento</algumelemento>
  <elemento>
    <filho>texto no filho</filho>
  </elemento>
</raiz>
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
