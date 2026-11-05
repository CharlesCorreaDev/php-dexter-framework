# Controle de Buffer de Saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.outcontrol.php

---

# Controle de Buffer de Saída

# Introdução

As funções de Controle de Saída permitem controlar quando a saída
é enviada do script. Isto pode ser útil em situações diversas,
especialmente se for necessário enviar cabeçalhos para o navegador
depois que o script começou a enviar dados. As funções de Controle de Saída
não afetam os cabeçalhos enviados por funções
como [header()](function.header.md) ou [setcookie()](function.setcookie.md),
apenas funções como [echo](function.echo.md) e dados entre
blocos de código PHP.

- [Instalação/Configuração](outcontrol.setup.md)
  - [Configurações de Execução](outcontrol.configuration.md)
- [Constantes predefinidas](outcontrol.constants.md)
- [Buffer de Saída](outcontrol.output-buffering.md)
- [Descarregando Buffers de Sistema](outcontrol.flushing-system-buffers.md)
- [Buffers de Saída em Nível de Usuário](outcontrol.user-level-output-buffers.md)
  - [Que Saída é Armazenada em Buffer?](outcontrol.what-output-is-buffered.md)
  - [Aninhando Buffers de Saída](outcontrol.nesting-output-buffers.md)
  - [Tamanho do Buffer](outcontrol.buffer-size.md)
  - [Operações permitidas em buffers](outcontrol.operations-on-buffers.md)
  - [Manipuladores de Saída](outcontrol.output-handlers.md)
  - [Trabalhando com Manipuladores de Saída](outcontrol.working-with-output-handlers.md)
  - [Opções Passadas aos Manipuladores de Saída](outcontrol.flags-passed-to-output-handlers.md)
  - [Valores de Retorno do Menipulador de Saída](outcontrol.output-handler-return-values.md)
- [Examples](outcontrol.examples.md)
  - [Uso básico](outcontrol.examples.basic.md)
  - [Uso de re-escrita na saída](outcontrol.examples.rewrite.md)
- [Funções para Control de Saída](ref.outcontrol.md)
  - [flush](function.flush.md) — Descarrega o buffer na saída do sistema
  - [ob\_clean](function.ob-clean.md) — Limpa (apaga) o conteúdo do buffer de saída ativo
  - [ob\_end\_clean](function.ob-end-clean.md) — Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o
  - [ob\_end\_flush](function.ob-end-flush.md) — Descarrega (envia) o valor de retorno do manipulador de saída ativo
    e desliga o buffer de saída ativo
  - [ob\_flush](function.ob-flush.md) — Descarrega (envia) o valor de retorno do manipulador de saída ativo
  - [ob\_get\_clean](function.ob-get-clean.md) — Obtém o conteúdo do buffer de saída ativo e desliga-o
  - [ob\_get\_contents](function.ob-get-contents.md) — Retorna o conteúdo do buffer de saída
  - [ob\_get\_flush](function.ob-get-flush.md) — Descarrega (envia) o valor de retorno do manipulador de saída ativo,
    retorna o conteúdo do buffer de saída ativo e desliga-o
  - [ob\_get\_length](function.ob-get-length.md) — Retorna o comprimento do buffer de saída
  - [ob\_get\_level](function.ob-get-level.md) — Retorna o nível de aninhamento do mecanismo de buffer de saída
  - [ob\_get\_status](function.ob-get-status.md) — Obtém status dos buffers de saída
  - [ob\_implicit\_flush](function.ob-implicit-flush.md) — Liga ou desliga o descarregamento implícito
  - [ob\_list\_handlers](function.ob-list-handlers.md) — Lista todos os manipuladores de saída em uso
  - [ob\_start](function.ob-start.md) — Ativa o buffer de saída
  - [output\_add\_rewrite\_var](function.output-add-rewrite-var.md) — Adiciona valores de reescritor de URL
  - [output\_reset\_rewrite\_vars](function.output-reset-rewrite-vars.md) — Redefine valores de reescritor de URL

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
