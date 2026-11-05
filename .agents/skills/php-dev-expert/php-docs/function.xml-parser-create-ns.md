# Cria um analisador XML com suporte a espaço de nomes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-parser-create-ns.php

---

# xml\_parser\_create\_ns

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

xml\_parser\_create\_ns — Cria um analisador XML com suporte a espaço de nomes

### Descrição

function **xml\_parser\_create\_ns**([?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**, [string](language.types.string.md) `$separator` = ":"): [XMLParser](class.xmlparser.md)

**xml\_parser\_create\_ns()** cria um novo analisador XML
com suporte a espaço de nomes do XML e retorna uma instância de [XMLParser](class.xmlparser.md)
para ser usada pelas outras funções XML.

### Parâmetros

`encoding`
:   A codificação de entrada é automaticamente detectada, de forma que o parâmetro
    `encoding` especifica somente a codificação de
    saída. O conjunto de caracteres de saída padrão é o UTF-8. As codificações
    suportadas são `ISO-8859-1`, `UTF-8` e
    `US-ASCII`.

`separator`
:   Com um analisador ciente do espaço de nomes, os parâmetros de etiquetas passados às várias
    funções de manupulação consistirão do nome do espaço e do nome da etiqueta separados pela
    string especificada em `separator`.

### Valor Retornado

Retorna uma nova instância de [XMLParser](class.xmlparser.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função retorna uma instância de [XMLParser](class.xmlparser.md) agora; anteriormente, um recurso do tipo [resource](language.types.resource.md) era retornado, ou **`false`** em caso de falha. |
| 8.0.0 | `encoding` agora pode ser nulo. |

### Veja também

- [xml\_parser\_create()](function.xml-parser-create.md) - Cria um analisador XML

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
