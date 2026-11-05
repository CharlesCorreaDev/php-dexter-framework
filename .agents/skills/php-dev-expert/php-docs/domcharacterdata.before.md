# Adiciona nós antes dos dados de caracteres

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domcharacterdata.before.php

---

# DOMCharacterData::before

(PHP 8)

DOMCharacterData::before — Adiciona nós antes dos dados de caracteres

### Descrição

public function **DOMCharacterData::before**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Adiciona os nós informados em `nodes` antes dos dados de caracteres.

### Parâmetros

`nodes`
:   Nós a serem adicionados antes do nó.
    Strings são automaticamente convertidas em nós de texto.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

**`DOM_HIERARCHY_REQUEST_ERR`**
:   Emitido se o pai é de um tipo que não permite filhos do
    tipo de um dos `nodes` informados, ou se o nó a ser
    inserido é um dos ancestrais deste nó, ou este próprio nó.

**`DOM_WRONG_DOCUMENT_ERR`**
:   Emitido se um dos `nodes` informados foi criado a partir de um documento
    diferente daquele que criou este nó.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar este método em um nó sem pai agora é uma operação sem efeito para alinhar o comportamento com a especificação do DOM. Anteriormente, era lançada uma exceção [DOMException](class.domexception.md) com código **`DOM_HIERARCHY_REQUEST_ERR`**. |

### Examples

**Exemplo #1 Exemplo de **DOMCharacterData::before()****

Adiciona nós antes dos dados de caracteres.

```
<?php
$doc = new DOMDocument;
$doc->loadXML("<container><![CDATA[world]]></container>");
$cdata = $doc->documentElement->firstChild;

$cdata->before("hello", $doc->createElement("beautiful"));

echo $doc->saveXML();
?>
```

O exemplo acima produzirá:

```
<?xml version="1.0"?>
<container>hello<beautiful/><![CDATA[world]]></container>
```

### Veja também

- [DOMChildNode::before()](domchildnode.before.md) - Adiciona nós antes do nó
- [DOMCharacterData::after()](domcharacterdata.after.md) - Adiciona nós após os dados de caracteres

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
