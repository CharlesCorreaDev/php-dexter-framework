# Funções de SSH2

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.ssh2.php

---

# Funções de SSH2

## Índice

- [ssh2\_auth\_agent](function.ssh2-auth-agent.md) — Autentica via SSH usando o agente ssh
- [ssh2\_auth\_hostbased\_file](function.ssh2-auth-hostbased-file.md) — Autentica usando uma chave de host pública
- [ssh2\_auth\_none](function.ssh2-auth-none.md) — Autentica como "nenhum"
- [ssh2\_auth\_password](function.ssh2-auth-password.md) — Autentica via SSH usando uma senha simples
- [ssh2\_auth\_pubkey](function.ssh2-auth-pubkey.md) — Autentica usando uma chave pública em uma variável
- [ssh2\_auth\_pubkey\_file](function.ssh2-auth-pubkey-file.md) — Autentica usando uma chave pública lida de um arquivo
- [ssh2\_connect](function.ssh2-connect.md) — Conecta-se a um servidor SSH
- [ssh2\_disconnect](function.ssh2-disconnect.md) — Fecha uma conexão com um servidor SSH remoto
- [ssh2\_exec](function.ssh2-exec.md) — Executa um comando em um servidor remoto
- [ssh2\_fetch\_stream](function.ssh2-fetch-stream.md) — Busca um fluxo de dados estendido
- [ssh2\_fingerprint](function.ssh2-fingerprint.md) — Recupera a impressão digital do servidor remoto
- [ssh2\_forward\_accept](function.ssh2-forward-accept.md) — Aceita uma conexão criada por um ouvinte
- [ssh2\_forward\_listen](function.ssh2-forward-listen.md) — Vincula uma porta no servidor remoto e escuta as conexões
- [ssh2\_keepalive\_config](function.ssh2-keepalive-config.md) — Configure how often keepalive messages should be sent
- [ssh2\_keepalive\_send](function.ssh2-keepalive-send.md) — Send a keepalive message
- [ssh2\_methods\_negotiated](function.ssh2-methods-negotiated.md) — Retorna a lista de métodos negociados
- [ssh2\_poll](function.ssh2-poll.md) — Pesquisa os canais/ouvintes/transmissões para eventos
- [ssh2\_publickey\_add](function.ssh2-publickey-add.md) — Adiciona uma chave pública autorizada
- [ssh2\_publickey\_init](function.ssh2-publickey-init.md) — Inicializa o subsistema de chave pública
- [ssh2\_publickey\_list](function.ssh2-publickey-list.md) — Lista as chaves públicas atualmente autorizadas
- [ssh2\_publickey\_remove](function.ssh2-publickey-remove.md) — Remove uma chave pública autorizada
- [ssh2\_scp\_recv](function.ssh2-scp-recv.md) — Solicita um arquivo via SCP
- [ssh2\_scp\_send](function.ssh2-scp-send.md) — Envia um arquivo via SCP
- [ssh2\_send\_eof](function.ssh2-send-eof.md) — Envia EOF para o fluxo
- [ssh2\_send\_signal](function.ssh2-send-signal.md) — Send a signal to a remote process
- [ssh2\_set\_timeout](function.ssh2-set-timeout.md) — Set the timeout for blocking operations on a session
- [ssh2\_sftp](function.ssh2-sftp.md) — Inicializa o subsistema SFTP
- [ssh2\_sftp\_chmod](function.ssh2-sftp-chmod.md) — Altera o modo de arquivo
- [ssh2\_sftp\_lstat](function.ssh2-sftp-lstat.md) — Estatísticas de uma ligação simbólica
- [ssh2\_sftp\_mkdir](function.ssh2-sftp-mkdir.md) — Cria um diretório
- [ssh2\_sftp\_readlink](function.ssh2-sftp-readlink.md) — Retorna o alvo de uma ligação simbólica
- [ssh2\_sftp\_realpath](function.ssh2-sftp-realpath.md) — Resolve o caminho real de uma string de caminho fornecida
- [ssh2\_sftp\_rename](function.ssh2-sftp-rename.md) — Renomeia um arquivo remoto
- [ssh2\_sftp\_rmdir](function.ssh2-sftp-rmdir.md) — Remove um diretório
- [ssh2\_sftp\_stat](function.ssh2-sftp-stat.md) — Obtém estatísticas de um arquivo em um sistema de arquivos remoto
- [ssh2\_sftp\_symlink](function.ssh2-sftp-symlink.md) — Cria uma ligação simbólica
- [ssh2\_sftp\_unlink](function.ssh2-sftp-unlink.md) — Exclui um arquivo
- [ssh2\_shell](function.ssh2-shell.md) — Solicita um shell interativo
- [ssh2\_shell\_resize](function.ssh2-shell-resize.md) — Change the dimensions of a channel's pseudo-terminal
- [ssh2\_tunnel](function.ssh2-tunnel.md) — Abre um túnel através de um servidor remoto

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
