# Gerenciamento e Registro de Erros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.errorfunc.php

---

# Gerenciamento e Registro de Erros

# Introdução

Estas são funções para lidar com gerenciamento e registro de erros. Elas
permitem a definição de regras personalizadas de gerenciamento de erros e
e de maneiras de se registrá-los. Isto possibilita que os relators de erros
sejam modificados e melhorados para se adequar às necessidades do programador.

Com as funções de registro, pode-se enviar mensagens diretamente para outras
máquinas, para um email (ou email para um portal de pagers), para os registros do sistema
etc., de forma que seja possível registrar e monitorar as partes mais importantes
das aplicações e sites da internet.

As funções relatórios de erro permitem customizar quais níveis e tipos
de retorno de erro são fornecidos, desde notas simples até funções
personalizadas retornadas durante os erros.

- [Instalação/Configuração](errorfunc.setup.md)
  - [Configurações de Execução](errorfunc.configuration.md)
- [Constantes predefinidas](errorfunc.constants.md)
- [Examples](errorfunc.examples.md)
- [Funções para Manuseamento de Erros](ref.errorfunc.md)
  - [debug\_backtrace](function.debug-backtrace.md) — Gera uma rastreamento retroativo
  - [debug\_print\_backtrace](function.debug-print-backtrace.md) — Mostra um rastreamento retroativo
  - [error\_clear\_last](function.error-clear-last.md) — Limpa o erro mais recente
  - [error\_get\_last](function.error-get-last.md) — Obtém o último erro ocorrido
  - [error\_log](function.error-log.md) — Envia uma mensagem de erro para as rotinas de tratamento de erros definidas
  - [error\_reporting](function.error-reporting.md) — Define quais erros do PHP são relatados
  - [get\_error\_handler](function.get-error-handler.md) — Obtém a função de manipulação de erro definida pelo usuário
  - [get\_exception\_handler](function.get-exception-handler.md) — Obtém a função de manipulação de exceção definida pelo usuário
  - [restore\_error\_handler](function.restore-error-handler.md) — Restaura a função anterior de gerenciamento de erro
  - [restore\_exception\_handler](function.restore-exception-handler.md) — Restaura a função de manipulação de exceção anteriormente definida
  - [set\_error\_handler](function.set-error-handler.md) — Define uma função de usuário para manipulação de erro
  - [set\_exception\_handler](function.set-exception-handler.md) — Define uma função de manipulação de exceção definida pelo usuário
  - [trigger\_error](function.trigger-error.md) — Gera uma mensagem a nível de usuário de erro/alerta/nota
  - [user\_error](function.user-error.md) — Sinônimo de trigger\_error

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
