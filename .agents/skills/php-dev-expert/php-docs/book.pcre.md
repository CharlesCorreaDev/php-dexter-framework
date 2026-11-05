# Expressões Regulares (Compatíveis com Perl)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.pcre.php

---

# Expressões Regulares (Compatíveis com Perl)

# Introdução

A sintaxe para padrões usados nestas funções assemelham-se com Perl.
A expressão precisa estar incluída entre delimitadores, uma
barra (/), por exemplo. Qualquer caractere pode ser usado para
delimitar desde que não seja alfanumérico ou barra invertida (\). Se
o caractere delimitador tiver de ser usado na própria expressão,
ele necessitará de escape. Desde o PHP 4.0.4, pode-se também
usar delimitadores no estilo Perl (), {}, [], e <>.
Veja [Sintaxe de Expressões](reference.pcre.pattern.syntax.md)
para mais detalhes.

No final do delimitador pode ser seguido por vários modificadores que
afetam a combinação.
Veja [Modificadores
de Expressão](reference.pcre.pattern.modifiers.md).

> **Nota**:
>
> Esta extensão mantém um cache global por thread de expressões
> regulares compiladas (até 4096).

**Aviso**

É necessário estar ciente de algumas limitações da PCRE. Leia
[» https://www.pcre.org/pcre.txt](https://www.pcre.org/pcre.txt) para mais informação.

A biblioteca PCRE fornece um conjunto de funções que implementam correspondência
de expressões regulares usando a mesma sintaxe e semântica
do Perl 5, com apenas algumas diferenças (veja abaixo). A implementação
atual corresponde à do Perl 5.005.

- [Instalação/Configuração](pcre.setup.md)
  - [Instalação](pcre.installation.md)
  - [Configurações de Execução](pcre.configuration.md)
- [Constantes predefinidas](pcre.constants.md)
- [Examples](pcre.examples.md)
- [Expressões PCRE](pcre.pattern.md)
  - [Sintaxe das expressões regulares PCRE](reference.pcre.pattern.syntax.md) — Sintaxe de Expressões
  - [Possíveis modificadores em expressões regulares](reference.pcre.pattern.modifiers.md) — Modificadores de Expressão
  - [Diferenças para o Perl](reference.pcre.pattern.differences.md)
- [Funções da PCRE](ref.pcre.md)
  - [preg\_filter](function.preg-filter.md) — Executa pesquisa e substituição usando expressões regulares
  - [preg\_grep](function.preg-grep.md) — Retorna entradas de array que correspondem à expressão regular
  - [preg\_last\_error](function.preg-last-error.md) — Retorna o código de erro da última expressão regular PCRE executada
  - [preg\_last\_error\_msg](function.preg-last-error-msg.md) — Retorna a mensagem de erro da última execução de expressão regular PCRE
  - [preg\_match](function.preg-match.md) — Realiza uma correspondência com expressão regular
  - [preg\_match\_all](function.preg-match-all.md) — Realiza uma correspondência global de expressão regular
  - [preg\_quote](function.preg-quote.md) — Escapa caracteres de expressão regular
  - [preg\_replace](function.preg-replace.md) — Realiza uma pesquisa por uma expressão regular e substitui
  - [preg\_replace\_callback](function.preg-replace-callback.md) — Executa uma busca por expressão regular e substitui usando uma chamada de retorno
  - [preg\_replace\_callback\_array](function.preg-replace-callback-array.md) — Realiza pesquisa e substituição em expressão regular usando chamadas de retorno
  - [preg\_split](function.preg-split.md) — Divide uma string com base em expressão regular

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
