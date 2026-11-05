# Obtém o valor de um atributo pelo nome local e URI do namespace

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.getattributens.php

---

# XMLReader::getAttributeNs

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::getAttributeNs — Obtém o valor de um atributo pelo nome local e URI do namespace

### Descrição

public function **XMLReader::getAttributeNs**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$namespace`): [?](language.types.null.md)[string](language.types.string.md)

Retorna o valor de um atributo pelo nome e URI do namespace ou uma string vazia
se o atributo não existir ou se não estiver posicionado em um nó de elemento.

### Parâmetros

`name`
:   O nome local.

`namespace`
:   O URI do namespace.

### Valor Retornado

O valor do atributo, ou **`null`** se nenhum atributo com o
`name` e `namespace` fornecidos for
encontrado ou se não estiver posicionado em um elemento.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não pode mais retornar **`false`**. |

### Veja também

- [XMLReader::getAttribute()](xmlreader.getattribute.md) - Obtém o valor de um atributo nomeado
- [XMLReader::getAttributeNo()](xmlreader.getattributeno.md) - Obtém o valor de um atributo pelo índice

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
