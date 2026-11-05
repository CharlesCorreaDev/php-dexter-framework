# Arquivos .user.ini

> **Fonte / Source:** https://www.php.net/manual/pt_BR/configuration.file.per-user.php

---

## Arquivos .user.ini

O PHP tem suporte para arquivos de configuração INI por
cada diretório. Esses arquivos são processados *apenas* pelo
CGI/FastCGI SAPI. Essa funcionalidade torna obsoleta a extensão PECL htscanner.
Se você estiver rodando o PHP como um módulo do Apache, use arquivos .htaccess para obter o mesmo
efeito.

Além do arquivo php.ini principal, o PHP procura por arquivos INI em cada
diretório, iniciando no diretório do arquivo PHP requisitado e
continua o caminho até a raiz do documento atual (conforme definido na variável
[$\_SERVER['DOCUMENT\_ROOT']](reserved.variables.server.md)). Caso o arquivo PHP esteja fora
da raiz do documento, apenas o seu diretório é procurado.

Somente configurações INI com
os modos **`INI_ALL`**, **`INI_PERDIR`** e
**`INI_USER`** serão reconhecidos nos arquivos INI estilo
.user.ini.

Duas novas diretivas INI,
[user\_ini.filename](ini.core.md#ini.user-ini.filename) e
[user\_ini.cache\_ttl](ini.core.md#ini.user-ini.cache-ttl)
controlam o uso de arquivos INI de usuário.

A diretiva [user\_ini.filename](ini.core.md#ini.user-ini.filename) define o nome do arquivo que o PHP
procura em cada diretório; se for definido como uma string vazia, o PHP não
fará a varredura em tudo. O padrão é `.user.ini`.

A diretiva [user\_ini.cache\_ttl](ini.core.md#ini.user-ini.cache-ttl) controla a frequência de como os arquivos INI
de usuário são relidos. O padrão é de 300 segundos (5 minutos).

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
