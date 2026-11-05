# O arquivo de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/configuration.file.php

---

## O arquivo de configuração

O arquivo de configuração (php.ini)
é lido quando o PHP inicia. Para as versões de módulo de servidor,
isso acontece apenas quando o servidor web for iniciado. Para as
versões CGI e CLI, isso acontece
a cada invocação.

php.ini é procurado nesses lugares (na ordem):

- Local específico do módulo SAPI (diretiva `PHPIniDir`
  no Apache 2, opção de linha de comando `-c` no CGI e CLI)
- A variável de ambiente PHPRC.
- A localização do arquivo `php.ini`
  pode ser definida para versões diferentes do PHP. A raiz do registro depende da compilação em 32 ou 64 bits do sistema operacional (SO) e do PHP.
  Para um PHP 32 bits em um SO de 32 bits ou um PHP de 64 bits em um SO de 64 bits use `[(HKEY_LOCAL_MACHINE\SOFTWARE\PHP]`, Para um PHP 32 bits em um SO de 64 bits use `[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6432Node\PHP]`].
  Para sistema onde a compilação em bits coincida, as seguintes chaves
  são examinadas, nessa ordem:
  `[HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x.y.z]`,
  `[HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x.y]` e
  `[HKEY_LOCAL_MACHINE\SOFTWARE\PHP\x]`, onde
  x, y e z significam os valores de versão PHP major, minor e release.
  Para PHP versão 32 bits em um SO de 64 bits, as seguintes chaves são examinadas em ordem:
  `[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x.y.z]`,
  `[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x.y]` e
  `[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6421Node\PHP\x]`, onde
  x, y e z significam os valores de versão PHP major, minor e release.
  Se houver um valor
  para `IniFilePath` nestas chaves, então o primeiro
  encontrado será utilizado para a localização do `php.ini`
  (apenas Windows).
- `[HKEY_LOCAL_MACHINE\SOFTWARE\PHP]` ou
  `[HKEY_LOCAL_MACHINE\SOFTWARE\WOW6432Node\PHP]`, valor de
  `IniFilePath` (Somente Windows).
- Diretório de trabalho atual (exceto CLI).
- O diretório do servidor web (para módulo SAPI), ou diretório do PHP
  (caso contrário, no Windows).
- Diretório do Windows (C:\windows
  ou C:\winnt) (para Windows), ou
  a opção de tempo de compilação `--with-config-file-path` .

Se php-SAPI.ini existe (onde SAPI é o SAPI usado, então o
nome de arquivo é, por exemplo, php-cli.ini ou
php-apache.ini), é usado ao invés do arquivo php.ini.
O nome SAPI pode ser determinado pela função [php\_sapi\_name()](function.php-sapi-name.md).

> **Nota**:
>
> O servidor web Apache muda o diretório para raiz durante a inicialização, causando com
> que o PHP tente ler o arquivo php.ini da raiz do arquivo de sistema, se ele existir.

Variáveis de ambiente podem ser referenciadas dentro de valores de configuração
no php.ini como mostrado abaixo. A partir do PHP 8.3.0, um valor padrão pode ser
especificado e será usado quando a variável referenciada não estiver
definida.

**Exemplo #1 Variáveis de ambiente no php.ini**

```
; PHP_MEMORY_LIMIT é lida das variáveis de ambiente
memory_limit = ${PHP_MEMORY_LIMIT}
; Se PHP_MAX_EXECUTION_TIME não esitver definida, será usado o padrão de 30
max_execution_time = ${PHP_MAX_EXECUTION_TIME:-30}
```

As diretivas do arquivo php.ini tratadas por extensões são documentadas
nas respectivas páginas das próprias extensões. A [lista de
diretivas principais](ini.md) está disponível no apêndice. Nem todas
as diretivas do PHP estão documentadas no manual. Para uma lista completa
das diretivas disponíveis na sua versão do PHP, por favor leia seu arquivo
php.ini. Alternativamente, você pode encontrar
[» a última versão do php.ini](https://github.com/php/php-src/blob/master/php.ini-production) no
Git, que também pode ser útil.

**Exemplo #2 Exemplo de arquivo php.ini**

```
; qualquer texto após um ponto e vírgula nú (;) é ignorado
[php] ; marcadores de sessão (textos dentro de colchetes) também são ignorados
; Valores booleanos podem ser:
;    true, on, yes
; ou false, off, no, none
register_globals = off
track_errors = yes

; vocẽ pode organizar strings dentro de aspas
include_path = ".:/usr/local/lib/php"

; contrabarra é tratado como um caractere normal
include_path = ".;c:\php\lib"
```

É possível acessar as variáveis .ini
dentro dos arquivos .ini. Exemplo: `open_basedir = ${open_basedir}
":/new/dir"`.

### Configuração em diretório

É possível configurar o PHP para procurar por arquivos .ini em um diretório
após a leitura do php.ini. Isto é possível na compilação pela configuração da opção
**--with-config-file-scan-dir**. No
O diretório de configuração pode ser sobrescrito em tempo de execução
através da configuração da variável de ambiente PHP\_INI\_SCAN\_DIR.

É possível procurar em vários diretórios os separando com o
delimitador específico da plataforma (`;` no Windows, NetWare
e RISC OS; `:` em todas as outras plataformas; o PHP
utilizará a constante **`PATH_SEPARATOR`**).
Se um diretório em branco estiver informado em PHP\_INI\_SCAN\_DIR, o PHP
também procurará pelo diretório informado na diretiva de compilação
**--with-config-file-scan-dir**.

Dentro de cada diretório o PHP irá pesquisar todos os arquivos terminados em
`.ini` em ordem alfabética. A lista de arquivos
é carregada, e nessa ordem são interpretados com uma chamada a
[php\_ini\_scanned\_files()](function.php-ini-scanned-files.md), o por rodar o PHP com a opção
**--ini**.

```
Assumindo que o PHP foi configurado com --with-config-file-scan-dir=/etc/php.d,
e o separador de caminho é :...

$ php
  PHP irá carregar todos os arquivos de configuração em in /etc/php.d/*.ini.

$ PHP_INI_SCAN_DIR=/usr/local/etc/php.d php
  PHP irá carregar todos os arquivos de configuração em /usr/local/etc/php.d/*.ini.

$ PHP_INI_SCAN_DIR=:/usr/local/etc/php.d php
  PHP irá carregar todos os arquivos de configuração em /etc/php.d/*.ini, e então em
  /usr/local/etc/php.d/*.ini.

$ PHP_INI_SCAN_DIR=/usr/local/etc/php.d: php
  PHP irá carregar todos os arquivos de configuração em /usr/local/etc/php.d/*.ini, e então em
  /etc/php.d/*.ini.
```

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
