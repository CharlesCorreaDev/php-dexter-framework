# Guia de início rápido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.php

---

# Guia de início rápido

## Índice

- [Interface dupla, procedural e orientada a objetos](mysqli.quickstart.dual-interface.md)
- [Conexões](mysqli.quickstart.connections.md)
- [Executando instruções](mysqli.quickstart.statements.md)
- [Instruções Preparadas](mysqli.quickstart.prepared-statements.md)
- [Procedimentos Armazenados](mysqli.quickstart.stored-procedures.md)
- [Instruções Múltiplas](mysqli.quickstart.multiple-statement.md)
- [Suporte da API para transações](mysqli.quickstart.transactions.md)
- [Metadados](mysqli.quickstart.metadata.md)

Este guia de início rápido irá ajudar nas escolhas e no ganho de familiaridade
com a API de MySQL do PHP.

Este início rápido dá uma visão geral da extensão mysqli. Exemplos de código são
disponibilizados para todos os macro aspectos da API. Conceitos de banco de dados são explicados
no grau necessário para apresentar os conceitos específicos do MySQL.

Requisito: Uma familiaridade com a linguagem de programação PHP, com a linguagem SQL,
e conhecimento básico do servidor MySQL.

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
