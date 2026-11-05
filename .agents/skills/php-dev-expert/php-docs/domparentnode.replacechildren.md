# Substitui filhos no nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domparentnode.replacechildren.php

---

# DOMParentNode::replaceChildren

(PHP 8 >= 8.3.0)

DOMParentNode::replaceChildren — Substitui filhos no nó

### Descrição

public function **DOMParentNode::replaceChildren**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Substitui os filhos no nó.

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

**Exemplo #1 Exemplo de **DOMParentNode::replaceChildren()****

```
<?php

$dom = new DOMDocument();
$dom->loadHTML('<!DOCTYPE HTML><html><p>hi</p> test <p>hi2</p></html>');

$dom->documentElement->replaceChildren('foo', $dom->createElement('p'), 'bar');
echo $dom->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0" standalone="yes"?>
<!DOCTYPE HTML>
<html>foo<p/>bar</html>
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
