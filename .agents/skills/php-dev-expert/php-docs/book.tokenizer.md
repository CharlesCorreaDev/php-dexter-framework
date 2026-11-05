# Tokenizer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.tokenizer.php

---

# Tokenizer

# Introdução

As funções de tokenizer formam uma interface para o
tokenizer do PHP embutido no Motor Zend. Usando essas
funções você pode escrever ferramentas próprias para
análise e modificação de código PHP sem ter que lidar com a
especificação da linguagem em um nível léxico.

Veja também o [apêndice sobre tokens](tokens.md).

- [Instalação/Configuração](tokenizer.setup.md)
  - [Instalação](tokenizer.installation.md)
- [Constantes predefinidas](tokenizer.constants.md)
- [Examples](tokenizer.examples.md)
- [PhpToken](class.phptoken.md) — A classe PhpToken
  - [PhpToken::\_\_construct](phptoken.construct.md) — Retorna um novo objeto PhpToken
  - [PhpToken::getTokenName](phptoken.gettokenname.md) — Retorna o nome do token
  - [PhpToken::is](phptoken.is.md) — Informa se o token é de determinado tipo
  - [PhpToken::isIgnorable](phptoken.isignorable.md) — Informa se o token seria ignorado pelo analisador PHP
  - [PhpToken::\_\_toString](phptoken.tostring.md) — Retorna o conteúdo textual do token
  - [PhpToken::tokenize](phptoken.tokenize.md) — Divide a fonte fornecida em tokens PHP, representados por objetos PhpToken
- [Funções de Tokenizer](ref.tokenizer.md)
  - [token\_get\_all](function.token-get-all.md) — Divide um dado fonte em tokens do PHP
  - [token\_name](function.token-name.md) — Pega o nome simbólico de um dado token do PHP

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
