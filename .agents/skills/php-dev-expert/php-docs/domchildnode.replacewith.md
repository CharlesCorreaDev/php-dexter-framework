# Substitui o nó por novos nós

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domchildnode.replacewith.php

---

# DOMChildNode::replaceWith

(PHP 8)

DOMChildNode::replaceWith — Substitui o nó por novos nós

### Descrição

public function **DOMChildNode::replaceWith**([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

Substitui o nó por novos `nodes`.

### Parâmetros

`nodes`
:   Os nós de substituição.
    As strings são automaticamente convertidas em nós de texto.

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

### Veja também

- [DOMChildNode::after()](domchildnode.after.md) - Adiciona nós após o nó
- [DOMChildNode::before()](domchildnode.before.md) - Adiciona nós antes do nó
- [DOMChildNode::remove()](domchildnode.remove.md) - Remove o nó
- [DOMNode::replaceChild()](domnode.replacechild.md) - Substitui um filho

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
