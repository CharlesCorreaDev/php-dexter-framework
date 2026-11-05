# POSIX

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.posix.php

---

# POSIX

# Introdução

Este módulo contém uma interface para as funções definidas no
documento de padrões IEEE 1003.1 (POSIX.1) que não são
acessíveis por outros meios.

**Aviso**

Dados sensíveis podem ser recuperados com as funções POSIX, por exemplo,
[posix\_getpwnam()](function.posix-getpwnam.md) e suas variantes.

> **Nota**:
>
> Esta extensão não está
> disponível em plataformas Windows.

- [Instalação/Configuração](posix.setup.md)
  - [Instalação](posix.installation.md)
- [Constantes predefinidas](posix.constants.md)
  - [Constantes de posix\_access](posix.constants.access.md)
  - [Constantes de posix\_mknod](posix.constants.mknod.md)
  - [Constantes de posix\_setrlimit](posix.constants.setrlimit.md)
  - [Constantes de posix\_pathconf](posix.constants.pathconf.md)
  - [Constantes posix\_sysconf](posix.constants.sysconf.md)
- [Funções de POSIX](ref.posix.md)
  - [posix\_access](function.posix-access.md) — Determina a acessibilidade de um arquivo
  - [posix\_ctermid](function.posix-ctermid.md) — Obtém o caminho do terminal em controle
  - [posix\_eaccess](function.posix-eaccess.md) — Determina a acessibilidade de um arquivo
  - [posix\_errno](function.posix-errno.md) — Sinônimo de posix\_get\_last\_error
  - [posix\_fpathconf](function.posix-fpathconf.md) — Retorna o valor de um limite configurável
  - [posix\_get\_last\_error](function.posix-get-last-error.md) — Recupera o número do erro definido pela última função posix que falhou
  - [posix\_getcwd](function.posix-getcwd.md) — Caminho do diretório atual
  - [posix\_getegid](function.posix-getegid.md) — Retorna o ID do grupo efetivo do processo atual
  - [posix\_geteuid](function.posix-geteuid.md) — Retorna o ID do usuário efetivo do processo atual
  - [posix\_getgid](function.posix-getgid.md) — Retorna o ID do grupo real do processo atual
  - [posix\_getgrgid](function.posix-getgrgid.md) — Retorna informação sobre um grupo a partir de um ID de grupo
  - [posix\_getgrnam](function.posix-getgrnam.md) — Retorna informação sobre um grupo a partir do nome
  - [posix\_getgroups](function.posix-getgroups.md) — Retorna o conjunto de grupos do processo atual
  - [posix\_getlogin](function.posix-getlogin.md) — Retorna o login
  - [posix\_getpgid](function.posix-getpgid.md) — Obtém o ID de grupo de processo para controle de tarefa
  - [posix\_getpgrp](function.posix-getpgrp.md) — Retorna o identificador do grupo do processo atual
  - [posix\_getpid](function.posix-getpid.md) — Retorna o identificador do processo atual
  - [posix\_getppid](function.posix-getppid.md) — Retorna o identificador do processo pai
  - [posix\_getpwnam](function.posix-getpwnam.md) — Retorna informações sobre um usuário por nome de usuário
  - [posix\_getpwuid](function.posix-getpwuid.md) — Retorna informações sobre um usuário por ID de usuário
  - [posix\_getrlimit](function.posix-getrlimit.md) — Retorna informações sobre limites de recursos do sistema
  - [posix\_getsid](function.posix-getsid.md) — Obtém o ID da sessão atual do processo
  - [posix\_getuid](function.posix-getuid.md) — Retorna o ID do usuário real do processo atual
  - [posix\_initgroups](function.posix-initgroups.md) — Calcula a lista de acesso do grupo
  - [posix\_isatty](function.posix-isatty.md) — Determina se um descritor de arquivo é um terminal interativo
  - [posix\_kill](function.posix-kill.md) — Envia um sinal para um processo
  - [posix\_mkfifo](function.posix-mkfifo.md) — Cria um arquivo especial FIFO (um pipe nomeado)
  - [posix\_mknod](function.posix-mknod.md) — Cria um arquivo especial ou comum (POSIX.1)
  - [posix\_pathconf](function.posix-pathconf.md) — Retorna o valor de um limite configurável
  - [posix\_setegid](function.posix-setegid.md) — Define o GID efetivo do processo atual
  - [posix\_seteuid](function.posix-seteuid.md) — Define o UID efetivo do processo atual
  - [posix\_setgid](function.posix-setgid.md) — Define o GID do processo atual
  - [posix\_setpgid](function.posix-setpgid.md) — Define o ID do grupo de processos para o controle de tarefas
  - [posix\_setrlimit](function.posix-setrlimit.md) — Define limites de recursos do sistema
  - [posix\_setsid](function.posix-setsid.md) — Torna o processo atual um líder de sessão
  - [posix\_setuid](function.posix-setuid.md) — Define o UID do processo atual
  - [posix\_strerror](function.posix-strerror.md) — Recupera a mensagem de erro do sistema associada ao número de erro fornecido
  - [posix\_sysconf](function.posix-sysconf.md) — Retorna informações de tempo de execução do sistema
  - [posix\_times](function.posix-times.md) — Obtém tempos de processo
  - [posix\_ttyname](function.posix-ttyname.md) — Determina o nome do dispositivo de terminal
  - [posix\_uname](function.posix-uname.md) — Obtém o nome do sistema

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
