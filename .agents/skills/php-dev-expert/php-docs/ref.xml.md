# Funções para analisar XML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.xml.php

---

# Funções para analisar XML

## Índice

- [xml\_error\_string](function.xml-error-string.md) — Obtém uma string de erro do analisador XML
- [xml\_get\_current\_byte\_index](function.xml-get-current-byte-index.md) — Obtém índice de bytes atual para um analisador XML
- [xml\_get\_current\_column\_number](function.xml-get-current-column-number.md) — Obtém o número da coluna atual para um analisador XML
- [xml\_get\_current\_line\_number](function.xml-get-current-line-number.md) — Obtém o número da linha atual para um analisador XML
- [xml\_get\_error\_code](function.xml-get-error-code.md) — Obtém um código de erro do analisador XML
- [xml\_parse](function.xml-parse.md) — Inicia análise de um documento XML
- [xml\_parse\_into\_struct](function.xml-parse-into-struct.md) — Analisa dados XML dentro de uma estrutura de array
- [xml\_parser\_create](function.xml-parser-create.md) — Cria um analisador XML
- [xml\_parser\_create\_ns](function.xml-parser-create-ns.md) — Cria um analisador XML com suporte a espaço de nomes
- [xml\_parser\_free](function.xml-parser-free.md) — Libera um analisador XML
- [xml\_parser\_get\_option](function.xml-parser-get-option.md) — Obtém as opções de um analisador XML
- [xml\_parser\_set\_option](function.xml-parser-set-option.md) — Define opções em um analisador XML
- [xml\_set\_character\_data\_handler](function.xml-set-character-data-handler.md) — Configura manipulador de dados de caracteres
- [xml\_set\_default\_handler](function.xml-set-default-handler.md) — Configura manipulador padrão
- [xml\_set\_element\_handler](function.xml-set-element-handler.md) — Configura manipuladores de elementos de início e fim
- [xml\_set\_end\_namespace\_decl\_handler](function.xml-set-end-namespace-decl-handler.md) — Configura manipulador de declaração de namespace final
- [xml\_set\_external\_entity\_ref\_handler](function.xml-set-external-entity-ref-handler.md) — Configura manipulador de referência de entidade externa
- [xml\_set\_notation\_decl\_handler](function.xml-set-notation-decl-handler.md) — Configura manipulador de declaração de notação
- [xml\_set\_object](function.xml-set-object.md) — Use o analisador XML dentro de um objeto
- [xml\_set\_processing\_instruction\_handler](function.xml-set-processing-instruction-handler.md) — Configura manipulador de instruções de processamento (PI)
- [xml\_set\_start\_namespace\_decl\_handler](function.xml-set-start-namespace-decl-handler.md) — Configura manipulador de declaração de namespace inicial
- [xml\_set\_unparsed\_entity\_decl\_handler](function.xml-set-unparsed-entity-decl-handler.md) — Configura manipulador de declaração de entidade não analisada

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
