# Suporte do Windows

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration74.windows-support.php

---

## Suporte do Windows

### **configure** flags

**configure** agora considera `CFLAGS` e `LDFLAGS` adicionais definidos como
variáveis de ambiente.

### Manipulação de CTRL

`CTRL
+C`
e
`CTRL
+BREAK`
no console podem ser capturados definindo uma função de manipulação
com [sapi\_windows\_set\_ctrl\_handler()](function.sapi-windows-set-ctrl-handler.md).

[proc\_open()](function.proc-open.md) no Windows pode receber uma opção
"create\_process\_group". É necessário se o processo filho
deve lidar com eventos CTRL.

### OPcache

O OPcache agora suporta um número arbitrário de caches separados por usuário por meio
da diretiva INI `opcache.cache_id`.
Todos os processos com o mesmo ID de cache e usuário compartilham uma instância do OPcache.

### stat

A implementação stat foi refatorada.

- Um número de inode é entregue e é baseado no índice de arquivo NTFS.
- O número do dispositivo agora é baseado no número de série do volume.

Observe que ambos os valores são derivados do sistema e fornecidos como estão em sistemas
de 64 bits. Em sistemas de 32 bits, esses valores podem ultrapassar o número inteiro de 32 bits
no PHP, portanto, são falsos.

### libsqlite3

libsqlite3 não é mais compilado estaticamente em php\_sqlite3.dll e
php\_pdo\_sqlite.dll, mas sim disponível como libsqlite3.dll.
Consulte as instruções de instalação para [SQLite3](sqlite3.installation.md) e
[PDO\_SQLITE](ref.pdo-sqlite.md#ref.pdo-sqlite.installation), respectivamente.

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
