# Funções da extensão Readline

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.readline.php

---

# Funções da extensão Readline

## Índice

- [readline](function.readline.md) — Lê uma linha
- [readline\_add\_history](function.readline-add-history.md) — Adiciona uma linha ao histórico
- [readline\_callback\_handler\_install](function.readline-callback-handler-install.md) — Inicializa a interface de chamada de retorno e o terminal de readline, mostra o prompt e retorna imediatamente
- [readline\_callback\_handler\_remove](function.readline-callback-handler-remove.md) — Remove um manipulador de chamada de retorno previamente instalado e restaura a configuração do terminal
- [readline\_callback\_read\_char](function.readline-callback-read-char.md) — Lê um caractere e informa a interface de chamada de retorno de readline quando uma linha é recebida
- [readline\_clear\_history](function.readline-clear-history.md) — Limpa o histórico
- [readline\_completion\_function](function.readline-completion-function.md) — Registra uma função de completamento
- [readline\_info](function.readline-info.md) — Obtém/Define várias variáveis internas de readline
- [readline\_list\_history](function.readline-list-history.md) — Lista o histórico
- [readline\_on\_new\_line](function.readline-on-new-line.md) — Informa à readline que o cursor se moveu para uma nova linha
- [readline\_read\_history](function.readline-read-history.md) — Lê o histórico
- [readline\_redisplay](function.readline-redisplay.md) — Redesenha a tela
- [readline\_write\_history](function.readline-write-history.md) — Grava o histórico

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
