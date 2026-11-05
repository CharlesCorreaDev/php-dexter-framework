# Funções alteradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration71.changed-functions.php

---

## Funções alteradas

### Núcleo do PHP

- [getopt()](function.getopt.md) tem um terceiro parâmetro opcional que expõe
  o índice do próximo elemento na lista de vetores de argumentos a serem processados.
  Isto é feito através de parâmetro por referência.
- [getenv()](function.getenv.md) não mais requer um parâmetro. Se ele
  for omitido, as variáveis de ambiente atuais serão
  retornadas como um array associativo.
- [get\_headers()](function.get-headers.md) agora tem um parâmetro adicional para habilitar
  a passagem de contextos de fluxo customizados.
- [output\_reset\_rewrite\_vars()](function.output-reset-rewrite-vars.md) não mais redefine as variáveis
  de re-escrita da URL da sessão.
- [parse\_url()](function.parse-url.md) agora é mais restritiva e suporta
  RFC3986.
- [unpack()](function.unpack.md) agora aceita um terceiro parâmetro opcional para
  especificar um ponto de partida para iniciar o desempacotamento.

### File System

- [file\_get\_contents()](function.file-get-contents.md) agora aceita um deslocamento negativo de pesquisa
  se o fluxo for do tipo pesquisável.
- [tempnam()](function.tempnam.md) agora emite um aviso quando retorna ao
  diretório temporário do sistema.

### JSON

- [json\_encode()](function.json-encode.md) agora aceita uma nova opção,
  **`JSON_UNESCAPED_LINE_TERMINATORS`**, para desabilitar o
  escape dos caracteres U+2028 e U+2029 quando
  **`JSON_UNESCAPED_UNICODE`** for fornecido..

### Multibyte String

- [mb\_ereg()](function.mb-ereg.md) agora rejeita sequências ilegais de bytes.
- [mb\_ereg\_replace()](function.mb-ereg-replace.md) agora rejeita sequências ilegais de bytes.

### PDO

- [PDO::lastInsertId()](pdo.lastinsertid.md) para PostgreSQL agora irá disparar um erro
  quando `nextval` não tiver sido chamada para a sessão
  atual (a conexão postgres).

### PostgreSQL

- [pg\_last\_notice()](function.pg-last-notice.md) agora aceita um parâmetro opcional para
  especificar uma operação. Isto pode ser feito com uma das novas
  constantes a seguir: **`PGSQL_NOTICE_LAST`**,
  **`PGSQL_NOTICE_ALL`** ou
  **`PGSQL_NOTICE_CLEAR`**.
- [pg\_fetch\_all()](function.pg-fetch-all.md) agora aceita um segundo parâmetro opcional para
  especificar o tipo de resultado (similar ao terceiro parâmetro de
  [pg\_fetch\_array()](function.pg-fetch-array.md)).
- [pg\_select()](function.pg-select.md) agora aceita um quarto parâmetro opcional para
  especificar o tipo de resultado (similar ao terceiro parâmetro de
  [pg\_fetch\_array()](function.pg-fetch-array.md)).

### Session

- [session\_start()](function.session-start.md) agora retorna **`false`** e não mais
  inicializa [$\_SESSION](reserved.variables.session.md) quando falha na inicialização
  da sessão.

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
