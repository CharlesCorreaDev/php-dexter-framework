# Funções de YAZ

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.yaz.php

---

# Funções de YAZ

## Índice

- [yaz\_addinfo](function.yaz-addinfo.md) — Retorna informações de erro adicionais
- [yaz\_ccl\_conf](function.yaz-ccl-conf.md) — Configura o analisador CCL
- [yaz\_ccl\_parse](function.yaz-ccl-parse.md) — Invoca o analisador CCL
- [yaz\_close](function.yaz-close.md) — Fecha a conexão YAZ
- [yaz\_connect](function.yaz-connect.md) — Prepara para uma conexão com um servidor Z39.50
- [yaz\_database](function.yaz-database.md) — Especifica os bancos de dados dentro de uma sessão
- [yaz\_element](function.yaz-element.md) — Especifica o nome do conjunto de elementos para recuperação
- [yaz\_errno](function.yaz-errno.md) — Retorna o número do erro
- [yaz\_error](function.yaz-error.md) — Retorna a descrição do erro
- [yaz\_es](function.yaz-es.md) — Prepara-se para uma solicitação de Serviço Estendido
- [yaz\_es\_result](function.yaz-es-result.md) — Inspeciona o resultado dos serviços estendidos
- [yaz\_get\_option](function.yaz-get-option.md) — Retorna valor de opção para conexão
- [yaz\_hits](function.yaz-hits.md) — Retorna o número de resultados da última pesquisa
- [yaz\_itemorder](function.yaz-itemorder.md) — Prepara-se para pedido de item Z39.50 com um pacote de solicitação ILL
- [yaz\_present](function.yaz-present.md) — Prepara-se para recuperação (Z39,50 presente)
- [yaz\_range](function.yaz-range.md) — Especifica um intervalo de registros a serem recuperados
- [yaz\_record](function.yaz-record.md) — Retorna um registro
- [yaz\_scan](function.yaz-scan.md) — Prepara para uma varredura
- [yaz\_scan\_result](function.yaz-scan-result.md) — Retorna o resultado da resposta da Varredura
- [yaz\_schema](function.yaz-schema.md) — Especifica o esquema para recuperação
- [yaz\_search](function.yaz-search.md) — Prepara para uma busca
- [yaz\_set\_option](function.yaz-set-option.md) — Define uma ou mais opções de conexão
- [yaz\_sort](function.yaz-sort.md) — Define critérios de classificação
- [yaz\_syntax](function.yaz-syntax.md) — Especifica a sintaxe de registro preferida para recuperação
- [yaz\_wait](function.yaz-wait.md) — Aguarda a conclusão das solicitações Z39.50

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
