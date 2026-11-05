# Substitui filhos no fragmento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocumentfragment.replacechildren.php

---

# DOMDocumentFragment::replaceChildren

(PHP 8 >= 8.3.0)

DOMDocumentFragment::replaceChildren — Substitui filhos no fragmento

### Descrição

public function **DOMDocumentFragment::replaceChildren**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Substitui os filhos no fragmento de documento por novos `nodes`.

### Parâmetros

`nodes`
:   Os nós que substituirão os filhos.
    Strings são automaticamente convertidas em nós de texto.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Emitido se este nó é de um tipo que não permite filhos do
    tipo de um dos `nodes` informados, ou se o nó a ser
    inserido é um dos ancestrais deste nó, ou o próprio nó.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Emitido se um dos `nodes` informados foi criado a partir de um documento
    diferente daquele que criou este nó.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção [DOMException](class.domexception.md) com código **`DOM_HIERARCHY_REQUEST_ERR`**. |

### Examples

**Exemplo #1 Exemplo de **DOMDocumentFragment::replaceChildren()****

Substitui os filhos por novos nodes.

```
<?php
$doc = new DOMDocument;
$doc->loadXML("<container><hello/></container>");
$fragment = $doc->createDocumentFragment();
$fragment->append("hello");

$fragment->replaceChildren("beautiful", $doc->createElement("world"));

echo $doc->saveXML($fragment);
?>
```

O exemplo acima produzirá:

```
beautiful<world/>
```

### Veja também

- [DOMParentNode::replaceChildren()](domparentnode.replacechildren.md) - Substitui filhos no nó
- [DOMDocumentFragment::append()](domdocumentfragment.append.md) - Acrescenta nós após o último nó filho
- [DOMDocumentFragment::prepend()](domdocumentfragment.prepend.md) - Insere nós antes do primeiro nó filho

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
