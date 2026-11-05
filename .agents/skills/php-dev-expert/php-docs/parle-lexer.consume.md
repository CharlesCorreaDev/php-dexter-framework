# Passa os dados para processamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/parle-lexer.consume.php

---

# Parle\Lexer::consume

(PECL parle >= 0.5.1)

Parle\Lexer::consume — Passa os dados para processamento

### Descrição

public function **Parle\Lexer::consume**([string](language.types.string.md) `$data`): [void](language.types.void.md)

Consome os dados para a análise léxica.

### Parâmetros

`data`
:   Dados a serem analisados.

### Valor Retornado

Nenhum valor é retornado.

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
