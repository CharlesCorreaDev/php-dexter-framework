# Manipulação de variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.var.php

---

# Manipulação de variável

# Introdução

Para maiores informações do comportamento de variáveis,
consulte [Variavéis](language.variables.md) localizada na seção
[Referências da Linguagem](langref.md) do manual.

- [Instalação/Configuração](var.setup.md)
  - [Configurações de Execução](var.configuration.md)
- [Funções para Manipulação de variáveis](ref.var.md)
  - [boolval](function.boolval.md) — Obtém o valor booleano de uma variável
  - [debug\_zval\_dump](function.debug-zval-dump.md) — Exibe na saída uma representação em string de uma estrutura zval interna
  - [doubleval](function.doubleval.md) — Sinônimo de floatval
  - [empty](function.empty.md) — Determina se uma variável está vazia
  - [floatval](function.floatval.md) — Obtém o valor em ponto flutuante da variável
  - [get\_debug\_type](function.get-debug-type.md) — Obtém o nome do tipo de uma variável de forma adequada a depuração
  - [get\_defined\_vars](function.get-defined-vars.md) — Retorna um array com todas variáveis definidas
  - [get\_resource\_id](function.get-resource-id.md) — Retorna um identificador inteiro para o recurso informado
  - [get\_resource\_type](function.get-resource-type.md) — Retorna o tipo de recurso
  - [gettype](function.gettype.md) — Obtém o tipo de uma variável
  - [intval](function.intval.md) — Obtém o valor em número inteiro de uma variável
  - [is\_array](function.is-array.md) — Verifica se a variável é um array
  - [is\_bool](function.is-bool.md) — Verifica se a variável é um booleano
  - [is\_callable](function.is-callable.md) — Verifica se um valor pode ser chamado como uma função a partir do escopo atual
  - [is\_countable](function.is-countable.md) — Verifica se o conteúdo de uma variável é um valor contável
  - [is\_double](function.is-double.md) — Sinônimo de is\_float
  - [is\_float](function.is-float.md) — Verifica se a variável é do tipo float
  - [is\_int](function.is-int.md) — Informa se o tipo de uma variável é um inteiro
  - [is\_integer](function.is-integer.md) — Sinônimo de is\_int
  - [is\_iterable](function.is-iterable.md) — Verifica se o conteúdo de uma variável é um valor iterável
  - [is\_long](function.is-long.md) — Sinônimo de is\_int
  - [is\_null](function.is-null.md) — Verifica se uma variável é null
  - [is\_numeric](function.is-numeric.md) — Verifica se uma variável é um número ou uma string numérica
  - [is\_object](function.is-object.md) — Verifica se uma variável é um objeto
  - [is\_real](function.is-real.md) — Sinônimo de is\_float
  - [is\_resource](function.is-resource.md) — Verifica se uma variável é um recurso
  - [is\_scalar](function.is-scalar.md) — Verifica se é uma variável é escalar
  - [is\_string](function.is-string.md) — Verifica se o tipo de uma variável é string
  - [isset](function.isset.md) — Determina se uma variável está declarada e é diferente de null
  - [print\_r](function.print-r.md) — Exibe informação legível sobre uma variável
  - [serialize](function.serialize.md) — Gera uma representação armazenável de um valor
  - [settype](function.settype.md) — Define o tipo de uma variável
  - [strval](function.strval.md) — Retorna o valor string de uma variável
  - [unserialize](function.unserialize.md) — Cria um valor PHP a partir de uma representação armazenada
  - [unset](function.unset.md) — unset remove a definição de uma variável informada
  - [var\_dump](function.var-dump.md) — Despeja na saída informações sobre uma variável
  - [var\_export](function.var-export.md) — Mostra ou retorna uma representação string analisável de uma variável

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
