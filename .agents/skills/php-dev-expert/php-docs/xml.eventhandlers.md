# Manipuladores de Evento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/xml.eventhandlers.php

---

# Manipuladores de Evento

Os manipuladores de eventos de XML definidos são:

**Manipuladores XML Suportados**

| Função do PHP pra definir manipulador | Descrição do evento |
| --- | --- |
| [xml\_set\_element\_handler()](function.xml-set-element-handler.md) | Eventos de elementos são emitidos toda vez que o analisador XML encontrar o início ou o fim de etiquetas. Há manipuladores separados para etiquetas de início e etiquetas de fim. |
| [xml\_set\_character\_data\_handler()](function.xml-set-character-data-handler.md) | Dados de caracteres são de maneira geral todo o conteúdo de documentos XML que não seja marcação de etiquetas, incluindo espaços em branco entre as etiquetas. Note que o analisador XML não adiciona ou remove qualquer espaço em branco, é função da aplicação decidir se os espaços em branco são significativos. |
| [xml\_set\_processing\_instruction\_handler()](function.xml-set-processing-instruction-handler.md) | Programadores de PHP devem estar familiarizados com instruções de processamento (PIs). <?php ?> é uma instrução de processamento, onde php é chamado de "alvo PI". O tratamento destes são específicos por aplicação, exceto que todos os alvos PI iniciados por "XML" são reservados. |
| [xml\_set\_default\_handler()](function.xml-set-default-handler.md) | O que não vai para algum outro manipulador vai para o manipulador padrão. Pode-se obter informações como declarações XML e de tipos de documentos no manipulador padrão. |
| [xml\_set\_unparsed\_entity\_decl\_handler()](function.xml-set-unparsed-entity-decl-handler.md) | Este manipulador será chamado para declaração de uma entidade não analisada (NDATA). |
| [xml\_set\_notation\_decl\_handler()](function.xml-set-notation-decl-handler.md) | Este manipulador é chamado para declaração de uma notação. |
| [xml\_set\_external\_entity\_ref\_handler()](function.xml-set-external-entity-ref-handler.md) | Este manipulador é chamado quando o analisador XML encontra uma referência a uma entidade geral analisada externamente. Isto pode ser uma referência para um arquivo ou URL, por exemplo. Consulte o [exemplo de entidade externa](example.xml-external-entity.md) para uma demonstração. |
| [xml\_set\_start\_namespace\_decl\_handler()](function.xml-set-start-namespace-decl-handler.md) | Este manipulador é chamado para o início de uma declaração de espaço de nomes. |
| [xml\_set\_end\_namespace\_decl\_handler()](function.xml-set-end-namespace-decl-handler.md) | Este manipulador é chamado para o final de uma declaração de espaço de nomes. Note que este evento *não* é disparado pela biblioteca libXML. |

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
