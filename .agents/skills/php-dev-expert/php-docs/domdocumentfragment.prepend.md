# Insere nós antes do primeiro nó filho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domdocumentfragment.prepend.php

---

# DOMDocumentFragment::prepend

(PHP 8)

DOMDocumentFragment::prepend — Insere nós antes do primeiro nó filho

### Descrição

public function **DOMDocumentFragment::prepend**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Insere um ou muitos `nodes` na lista de filhos antes do primeiro nó filho.

### Parâmetros

`nodes`
:   Os nós a serem inseridos.
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

**Exemplo #1 Exemplo de **DOMDocumentFragment::prepend()****

Insere nós antes da raiz do fragmento.

```
<?php
$doc = new DOMDocument;
$fragment = $doc->createDocumentFragment();
$fragment->appendChild($doc->createElement("world"));

$fragment->prepend($doc->createElement("hello"), "beautiful");

echo $doc->saveXML($fragment);
?>
```

O exemplo acima produzirá:

```
<hello/>beautiful<world/>
```

### Veja também

- [DOMParentNode::prepend()](domparentnode.prepend.md) - Insere nós antes do primeiro nó filho
- [DOMDocumentFragment::append()](domdocumentfragment.append.md) - Acrescenta nós após o último nó filho

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
