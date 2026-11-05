# Move o cursor para o próximo nó pulando todas as subárvores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xmlreader.next.php

---

# XMLReader::next

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

XMLReader::next — Move o cursor para o próximo nó pulando todas as subárvores

### Descrição

public function **XMLReader::next**([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [bool](language.types.boolean.md)

Posiciona o cursor no próximo nó, pulando todas as subárvores.
Se não existir tal nó, o cursor será movido para o fim do documento.

### Parâmetros

`name`
:   O nome do próximo nó para onde o cursor será movido.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `name` agora pode ser nulo. |

### Veja também

- [XMLReader::moveToNextAttribute()](xmlreader.movetonextattribute.md) - Posiciona o cursor no próximo atributo
- [XMLReader::moveToElement()](xmlreader.movetoelement.md) - Posiciona o cursor no elemento pai do atributo atual
- [XMLReader::moveToAttribute()](xmlreader.movetoattribute.md) - Move o cursor para um atributo nomeado

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
