# Adiciona nós após o nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domchildnode.after.php

---

# DOMChildNode::after

(PHP 8)

DOMChildNode::after — Adiciona nós após o nó

### Descrição

public function **DOMChildNode::after**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Adiciona os `nodes` passados após o nó.

### Parâmetros

`nodes`
:   Nós a serem adicionados após o nó.
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
| 8.3.0 | Chamar este método em um nó sem um documento proprietário agora funciona. Anteriormente, era lançada uma exceção [DOMException](class.domexception.md) com código **`DOM_HIERARCHY_REQUEST_ERR`**. |

### Veja também

- [DOMChildNode::before()](domchildnode.before.md) - Adiciona nós antes do nó
- [DOMChildNode::remove()](domchildnode.remove.md) - Remove o nó
- [DOMChildNode::replaceWith()](domchildnode.replacewith.md) - Substitui o nó por novos nós
- [DOMNode::appendChild()](domnode.appendchild.md) - Adiciona um novo filho ao final dos filhos

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
