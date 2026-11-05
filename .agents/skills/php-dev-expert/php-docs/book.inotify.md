# Inotify

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.inotify.php

---

# Inotify

# Introdução

A extensão inotify expõe as funções [inotify\_init()](function.inotify-init.md),
[inotify\_add\_watch()](function.inotify-add-watch.md) e [inotify\_rm\_watch()](function.inotify-rm-watch.md).

Como a função C [inotify\_init()](function.inotify-init.md) retorna um descritor de arquivo, a
[inotify\_init()](function.inotify-init.md) do PHP retorna um recurso de fluxo, utilizável com funções de fluxo
padrão, como [stream\_select()](function.stream-select.md), [stream\_set\_blocking()](function.stream-set-blocking.md)
e [fclose()](function.fclose.md). [inotify\_read()](function.inotify-read.md) substitui a forma C de ler eventos
inotify.

- [Instalação/Configuração](inotify.setup.md)
  - [Instalação/Configuração](inotify.install.md)
  - [Tipos de Recurso](inotify.resources.md)
- [Constantes predefinidas](inotify.constants.md)
- [Funções de Inotify](ref.inotify.md)
  - [inotify\_add\_watch](function.inotify-add-watch.md) — Adiciona um monitoramento a uma instância Inotify inicializada
  - [inotify\_init](function.inotify-init.md) — Inicializa uma instância do Inotify
  - [inotify\_queue\_len](function.inotify-queue-len.md) — Retorna um número maior que zero se houver eventos pendentes
  - [inotify\_read](function.inotify-read.md) — Lê eventos de uma instância do Inotify
  - [inotify\_rm\_watch](function.inotify-rm-watch.md) — Remove um monitoramento existente de uma instância do Inotify

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
