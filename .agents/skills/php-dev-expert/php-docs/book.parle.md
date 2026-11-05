# Análise sintática e léxixa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.parle.php

---

# Análise sintática e léxixa

# Introdução

**Aviso**

Esta extensão é
*EXPERIMENTAL*. O comportamento desta extensão, incluindo
os nomes de suas funções e qualquer outra documentação relacionada a esta
extensão, pode mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

A extensão Parle fornece recursos gerais de análise sintática e léxica. A implementação é baseada [» nestas bibliotecas](http://www.benhanson.net/) e requer um compilador compatível com [» C++14](https://en.cppreference.com/w/cpp/compiler_support). O analisador léxico é baseado na correspondência de expressões regulares, e o analisador sintático é LALR(1). Analisadores sintáticos e léxicos são gerados dinamicamente e podem ser usados ​​imediatamente após sua finalização. Parle lida com análise sintática e léxica, e a representação e o processamento apropriados das estruturas de dados são tarefa do implementador. A serialização e a geração de código ainda não são suportadas pela extensão.

A análise léxica é o processo de divisão de uma sequência de caracteres em uma lista de lexemas. A lista de lexemas pode então ser usada para análise sintática em relação a uma gramática formal. Essas operações também são conhecidas como análise léxica e interpretação. Esta documentação não pretende fornecer informações exaustivas sobre análise léxica e interpretação. Boas fontes de informações a esse respeito estão disponíveis em diversos recursos na rede. Vários exemplos de uso foram incluídos para demonstrar a funcionalidade. A extensão é útil para programadores PHP que desejam aprender ou utilizar análise sintática e interpretação. Máquinas de estado e análise gramatical não precisam ser implementadas manualmente; essas tarefas complexas são eliminadas pelo Parle. Graças a isso, o desenvolvimento pode ser focado na resolução real do problema.

O caso de uso comum para Parle é quando um formato de dados é muito complexo para ser manipulado pela expressão regular correspondente com PCRE. A aplicação prática é ampla, seja para um formato de dados específico, uma modificação de comportamento de funções existentes, até mesmo uma linguagem de programação própria e muito mais. Métodos auxiliares como [Parle\Lexer::dump()](parle-lexer.dump.md) para inspecionar a máquina de estados gerada, ou [Parle\Parser::dump()](parle-parser.dump.md) para inspecionar a gramática gerada, são úteis. O método [Parle\Parser::trace()](parle-parser.trace.md) também pode ser usado para rastrear a operação de análise sintática.

- [Instalação/Configuração](parle.setup.md)
  - [Dependências](parle.requirements.md)
  - [Instalação](parle.installation.md)
- [Constantes predefinidas](parle.constants.md)
- [Correspondência de padrões](parle.pattern.matching.md) — Correspondência de padrões do Parle
- [Examples](parle.examples.md)
  - [Exemplos de Lexer](parle.examples.lexer.md)
  - [Exemplos de Parser](parle.examples.parser.md)
- [Parle\Lexer](class.parle-lexer.md) — A classe Parle\Lexer
  - [Parle\Lexer::advance](parle-lexer.advance.md) — Processa a próxima regra do analisador léxico
  - [Parle\Lexer::build](parle-lexer.build.md) — Finaliza o conjunto de regras do analisador léxico
  - [Parle\Lexer::callout](parle-lexer.callout.md) — Define função de retorno para token
  - [Parle\Lexer::consume](parle-lexer.consume.md) — Passa os dados para processamento
  - [Parle\Lexer::dump](parle-lexer.dump.md) — Despeja a máquina de estados
  - [Parle\Lexer::getToken](parle-lexer.gettoken.md) — Obtém o token atual
  - [Parle\Lexer::insertMacro](parle-lexer.insertmacro.md) — Insere macro de expressão regular
  - [Parle\Lexer::push](parle-lexer.push.md) — Adiciona uma regra de análise léxica
  - [Parle\Lexer::reset](parle-lexer.reset.md) — Redefine o analisador léxico
- [Parle\RLexer](class.parle-rlexer.md) — A classe Parle\RLexer
  - [Parle\RLexer::advance](parle-rlexer.advance.md) — Processa a próxima regra do analisador léxico
  - [Parle\RLexer::build](parle-rlexer.build.md) — Finaliza o conjunto de regras do analisador léxico
  - [Parle\RLexer::callout](parle-rlexer.callout.md) — Define função de retorno para token
  - [Parle\RLexer::consume](parle-rlexer.consume.md) — Passa os dados para processamento
  - [Parle\RLexer::dump](parle-rlexer.dump.md) — Despeja a máquina de estados
  - [Parle\RLexer::getToken](parle-rlexer.gettoken.md) — Obtém o token atual
  - [Parle\RLexer::insertMacro](parle-rlexer.insertmacro.md) — Insere macro de expressão regular
  - [Parle\RLexer::push](parle-rlexer.push.md) — Adiciona uma regra de análise léxica
  - [Parle\RLexer::pushState](parle-rlexer.pushstate.md) — Insere na pilha um novo estado inicial
  - [Parle\RLexer::reset](parle-rlexer.reset.md) — Redefine o analisador léxico
- [Parle\Parser](class.parle-parser.md) — A classe Parle\Parser
  - [Parle\Parser::advance](parle-parser.advance.md) — Processa a próxima regra do analisador
  - [Parle\Parser::build](parle-parser.build.md) — Finaliza as regras gramaticais
  - [Parle\Parser::consume](parle-parser.consume.md) — Consome os dados para processamento
  - [Parle\Parser::dump](parle-parser.dump.md) — Despeja a gramática
  - [Parle\Parser::errorInfo](parle-parser.errorinfo.md) — Obtém informação do erro
  - [Parle\Parser::left](parle-parser.left.md) — Declara um token com associatividade à esquerda
  - [Parle\Parser::nonassoc](parle-parser.nonassoc.md) — Declara um token sem associatividade
  - [Parle\Parser::precedence](parle-parser.precedence.md) — Declara uma regra de precedência
  - [Parle\Parser::push](parle-parser.push.md) — Adiciona uma regra gramatical
  - [Parle\Parser::reset](parle-parser.reset.md) — Redefine estado do analisador
  - [Parle\Parser::right](parle-parser.right.md) — Declara um token com associatividade à direita
  - [Parle\Parser::sigil](parle-parser.sigil.md) — Recupera uma parte correspondente de uma regra
  - [Parle\Parser::sigilCount](parle-parser.sigilcount.md) — Número de elementos na regra correspondente
  - [Parle\Parser::sigilName](parle-parser.sigilname.md) — Recupera um nome de regra ou de token
  - [Parle\Parser::token](parle-parser.token.md) — Declara um token
  - [Parle\Parser::tokenId](parle-parser.tokenid.md) — Obtém o ID do token
  - [Parle\Parser::trace](parle-parser.trace.md) — Rastreia a operação do analisador
  - [Parle\Parser::validate](parle-parser.validate.md) — Valida entrada
- [Parle\RParser](class.parle-rparser.md) — A classe Parle\RParser
  - [Parle\RParser::advance](parle-rparser.advance.md) — Processa a próxima regra do analisador
  - [Parle\RParser::build](parle-rparser.build.md) — Finaliza as regras gramaticais
  - [Parle\RParser::consume](parle-rparser.consume.md) — Consome os dados para processamento
  - [Parle\RParser::dump](parle-rparser.dump.md) — Despeja a gramática
  - [Parle\RParser::errorInfo](parle-rparser.errorinfo.md) — Obtém informação do erro
  - [Parle\RParser::left](parle-rparser.left.md) — Declara um token com associatividade à esquerda
  - [Parle\RParser::nonassoc](parle-rparser.nonassoc.md) — Declara um token sem associatividade
  - [Parle\RParser::precedence](parle-rparser.precedence.md) — Declarar uma regra de precedência
  - [Parle\RParser::push](parle-rparser.push.md) — Adiciona uma regra gramatical
  - [Parle\RParser::reset](parle-rparser.reset.md) — Redefine estado do analisador
  - [Parle\RParser::right](parle-rparser.right.md) — Declara um token com associatividade à direita
  - [Parle\RParser::sigil](parle-rparser.sigil.md) — Recupera uma parte correspondente de uma regra
  - [Parle\RParser::sigilCount](parle-rparser.sigilcount.md) — Número de elementos na regra correspondente
  - [Parle\RParser::sigilName](parle-rparser.sigilname.md) — Recupera um nome de regra ou de token
  - [Parle\RParser::token](parle-rparser.token.md) — Declara um token
  - [Parle\RParser::tokenId](parle-rparser.tokenid.md) — Obtém o ID do token
  - [Parle\RParser::trace](parle-rparser.trace.md) — Rastreia a operação do analisador
  - [Parle\RParser::validate](parle-rparser.validate.md) — Valida entrada
- [Parle\Stack](class.parle-stack.md) — A classe Parle\Stack
  - [Parle\Stack::pop](parle-stack.pop.md) — Remove um item da pilha
  - [Parle\Stack::push](parle-stack.push.md) — Insere um item na pilha
- [Parle\Token](class.parle-token.md) — A classe Parle\Token
- [Parle\ErrorInfo](class.parle-errorinfo.md) — A classe Parle\ErrorInfo
- [Parle\LexerException](class.parle-lexerexception.md) — A classe Parle\LexerException
- [Parle\ParserException](class.parle-parserexception.md) — A classe Parle\ParserException

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
