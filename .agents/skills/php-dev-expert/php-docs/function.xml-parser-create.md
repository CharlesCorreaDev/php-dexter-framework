# Cria um analisador XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xml-parser-create.php

---

# xml\_parser\_create

(PHP 4, PHP 5, PHP 7, PHP 8)

xml\_parser\_create — Cria um analisador XML

### Descrição

function **xml\_parser\_create**([?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [XMLParser](class.xmlparser.md)

**xml\_parser\_create()** cria um novo analisador XML
e retorna uma instância de [XMLParser](class.xmlparser.md) para ser usada pelas
outras funções XML.

### Parâmetros

`encoding`
:   A codificação de
    entrada é detectada automaticamente, de forma que o
    parâmetro `encoding` especifica apenas a codificação
    de saída. Se uma string vazia for passada, o analisador tenta identificar
    qual a codificação do documento verificando 3 ou 4 bytes do cabeçalho.
    O conjunto de caracteres de saída padrão é o UTF-8. As codificações
    suportadas são `ISO-8859-1`, `UTF-8` e
    `US-ASCII`.

### Valor Retornado

Retorna uma nova instância de [XMLParser](class.xmlparser.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função retorna uma instância de [XMLParser](class.xmlparser.md) agora; anteriormente, um recurso do tipo [resource](language.types.resource.md) era retornado, ou **`false`** em caso de falha. |
| 8.0.0 | `encoding` agora pode ser nulo. |

### Veja também

- [xml\_parser\_create\_ns()](function.xml-parser-create-ns.md) - Cria um analisador XML com suporte a espaço de nomes

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
