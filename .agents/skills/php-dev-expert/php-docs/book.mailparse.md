# Mailparse

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.mailparse.php

---

# Mailparse

# Introdução

Mailparse é uma extensão para análise e manipulação de mensagens de e-mail.
Ele pode lidar com mensagens compatíveis com [» RFC 822](https://datatracker.ietf.org/doc/html/rfc822) e [» RFC 2045](https://datatracker.ietf.org/doc/html/rfc2045)
(`MIME`).

O Mailparse é baseado em fluxo, o que significa que não mantém cópias em memória
dos arquivos que processa - sendo muito eficiente em termos de recursos ao
lidar com mensagens grandes.

> **Nota**:
>
> O Mailparse requer a extensão [mbstring](book.mbstring.md),
> e a mbstring deve ser carregada antes do mailparse.

- [Instalação/Configuração](mailparse.setup.md)
  - [Instalação](mailparse.installation.md)
  - [Configurações de Execução](mailparse.configuration.md)
  - [Tipos de Recurso](mailparse.resources.md)
- [Constantes predefinidas](mailparse.constants.md)
- [Funções de Mailparse](ref.mailparse.md)
  - [mailparse\_determine\_best\_xfer\_encoding](function.mailparse-determine-best-xfer-encoding.md) — Obtém a melhor forma de codificação
  - [mailparse\_msg\_create](function.mailparse-msg-create.md) — Cria um recurso de email MIME
  - [mailparse\_msg\_extract\_part](function.mailparse-msg-extract-part.md) — Extrai/decodifica uma seção da mensagem
  - [mailparse\_msg\_extract\_part\_file](function.mailparse-msg-extract-part-file.md) — Extrai/decodifica uma seção da mensagem
  - [mailparse\_msg\_extract\_whole\_part\_file](function.mailparse-msg-extract-whole-part-file.md) — Extrai uma seção da mensagem incluindo cabeçalhos sem decodificar a codificação de transferência
  - [mailparse\_msg\_free](function.mailparse-msg-free.md) — Libera um recurso MIME
  - [mailparse\_msg\_get\_part](function.mailparse-msg-get-part.md) — Retorna um identificador para uma seção específica em uma mensagem MIME
  - [mailparse\_msg\_get\_part\_data](function.mailparse-msg-get-part-data.md) — Retorna um array associativo com informações sobre a mensagem
  - [mailparse\_msg\_get\_structure](function.mailparse-msg-get-structure.md) — Retorna um array de nomes de seções MIME na mensagem fornecida
  - [mailparse\_msg\_parse](function.mailparse-msg-parse.md) — Faz o parse incremental de dados no buffer
  - [mailparse\_msg\_parse\_file](function.mailparse-msg-parse-file.md) — Faz o parsing de um arquivo
  - [mailparse\_rfc822\_parse\_addresses](function.mailparse-rfc822-parse-addresses.md) — Faz o parse de endereços compatíveis com o RFC 822
  - [mailparse\_stream\_encode](function.mailparse-stream-encode.md) — Transmite dados do ponteiro do arquivo de origem, aplica a codificação e escreve no destfp
  - [mailparse\_uudecode\_all](function.mailparse-uudecode-all.md) — Analisa os dados de fp e extrai cada arquivo uuencoded incorporado.

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
