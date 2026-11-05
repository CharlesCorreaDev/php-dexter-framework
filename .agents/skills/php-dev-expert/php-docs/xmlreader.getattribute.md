# Obtém o valor de um atributo nomeado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.getattribute.php

---

# XMLReader::getAttribute

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::getAttribute — Obtém o valor de um atributo nomeado

### Descrição

public function **XMLReader::getAttribute**([string](language.types.string.md) `$name`): [?](language.types.null.md)[string](language.types.string.md)

Retorna o valor de um atributo nomeado ou **`null`** se o
atributo não existir ou se não estiver posicionado em um nó de elemento.

### Parâmetros

`name`
:   O nome do atributo.

### Valor Retornado

O valor do atributo, ou **`null`** se nenhum atributo com o
`name` fornecido for encontrado ou se não estiver posicionado em um nó de elemento.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não pode mais retornar **`false`**. |

### Veja também

- [XMLReader::getAttributeNo()](xmlreader.getattributeno.md) - Obtém o valor de um atributo pelo índice
- [XMLReader::getAttributeNs()](xmlreader.getattributens.md) - Obtém o valor de um atributo pelo nome local e URI do namespace

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
