# Funções da extensão FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.ftp.php

---

# Funções da extensão FTP

## Índice

- [ftp\_alloc](function.ftp-alloc.md) — Aloca espaço para um arquivo ser carregado
- [ftp\_append](function.ftp-append.md) — Acrescenta o conteúdo de um arquivo a outro arquivo no servidor FTP
- [ftp\_cdup](function.ftp-cdup.md) — Muda para o diretório acima
- [ftp\_chdir](function.ftp-chdir.md) — Muda o diretório atual em um servidor FTP
- [ftp\_chmod](function.ftp-chmod.md) — Define as permissões de um arquivo via FTP
- [ftp\_close](function.ftp-close.md) — Fecha uma conexão FTP
- [ftp\_connect](function.ftp-connect.md) — Abre uma conexão FTP
- [ftp\_delete](function.ftp-delete.md) — Exclui um arquivo no servidor FTP
- [ftp\_exec](function.ftp-exec.md) — Solicita a execução de um comando no servidor FTP
- [ftp\_fget](function.ftp-fget.md) — Recebe um arquivo do servidor FTP e salva em um arquivo aberto
- [ftp\_fput](function.ftp-fput.md) — Envia um arquivo aberto para o servidor FTP
- [ftp\_get](function.ftp-get.md) — Recebe um arquivo do servidor FTP
- [ftp\_get\_option](function.ftp-get-option.md) — Obtém várias opções em tempo de execução da conexão FTP atual
- [ftp\_login](function.ftp-login.md) — Realiza o login em uma conexão FTP
- [ftp\_mdtm](function.ftp-mdtm.md) — Retorna o horário da última modificação do arquivo informado
- [ftp\_mkdir](function.ftp-mkdir.md) — Cria um diretório
- [ftp\_mlsd](function.ftp-mlsd.md) — Retorna uma lista de arquivos no diretório fornecido
- [ftp\_nb\_continue](function.ftp-nb-continue.md) — Continua a receber/enviar um arquivo (sem bloquear)
- [ftp\_nb\_fget](function.ftp-nb-fget.md) — Recupera um arquivo do servidor FTP e grava-o em um arquivo aberto (sem bloqueio)
- [ftp\_nb\_fput](function.ftp-nb-fput.md) — Armazena um arquivo de um arquivo aberto no servidor FTP (sem bloqueio)
- [ftp\_nb\_get](function.ftp-nb-get.md) — Recupera um arquivo do servidor FTP e grava-o em um arquivo local (sem bloqueio)
- [ftp\_nb\_put](function.ftp-nb-put.md) — Armazena um arquivo no servidor FTP (sem bloqueio)
- [ftp\_nlist](function.ftp-nlist.md) — Retorna uma lista de arquivos em um diretório
- [ftp\_pasv](function.ftp-pasv.md) — Liga ou desliga o modo passivo
- [ftp\_put](function.ftp-put.md) — Envia um arquivo para o servidor FTP
- [ftp\_pwd](function.ftp-pwd.md) — Retorna o nome do diretório atual
- [ftp\_quit](function.ftp-quit.md) — Sinônimo de ftp\_close
- [ftp\_raw](function.ftp-raw.md) — Envia um comando arbritário a um servidor FTP
- [ftp\_rawlist](function.ftp-rawlist.md) — Retorna uma lista detalhada de arquivos no diretório fornecido
- [ftp\_rename](function.ftp-rename.md) — Renomeia um arquivo ou um diretório no servidor FTP
- [ftp\_rmdir](function.ftp-rmdir.md) — Remove um diretório
- [ftp\_set\_option](function.ftp-set-option.md) — Define opções diversas em tempo de execução
- [ftp\_site](function.ftp-site.md) — Envia um comando SITE para o servidor
- [ftp\_size](function.ftp-size.md) — Retorna o tamanho do arquivo especificado
- [ftp\_ssl\_connect](function.ftp-ssl-connect.md) — Abre uma conexão SSL-FTP segura
- [ftp\_systype](function.ftp-systype.md) — Retorna o identificador de tipo de sistema do servidor FTP remoto

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
