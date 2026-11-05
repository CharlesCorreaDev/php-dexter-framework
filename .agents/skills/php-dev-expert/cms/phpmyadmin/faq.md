# FAQ - Perguntas Frequentes — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/faq.html

---

# FAQ - Perguntas Frequentes[¶](#faq-frequently-asked-questions "Link permanente para este título")

Favor dar uma olhada na nossa [Seção de links](https://www.phpmyadmin.net/docs/) na página oficial do phpMyAdmin para uma cobertura profunda das funções e/ou interface do phpMyAdmin.

## Servidor[¶](#server "Link permanente para este título")

### 1.1 Meu servidor está caindo toda vez que uma ação específica é exigida ou o phpMyAdmin está me retornando uma página em branco ou uma página cheia de caracteres criptográficos para o meu navegador, o que eu posso fazer?[¶](#my-server-is-crashing-each-time-a-specific-action-is-required-or-phpmyadmin-sends-a-blank-page-or-a-page-full-of-cryptic-characters-to-my-browser-what-can-i-do "Link permanente para este título")

Try to set the [`$cfg['OBGzip']`](config.md#cfg_OBGzip) directive to `false` in your
`config.inc.php` file and the `zlib.output_compression` directive to
`Off` in your php configuration file.

### 1.2 Meu servidor Apache cai toda vez que tento usar o phpMyAdmin.[¶](#my-apache-server-crashes-when-using-phpmyadmin "Link permanente para este título")

Você deveria tentar usar as últimas versões do Apache (e possivelmente do MySQL). Se seu servidor continuar caindo, favor procurar por ajuda nos vários grupos de suporte do Apache.

Ver também

[1.1 Meu servidor está caindo toda vez que uma ação específica é exigida ou o phpMyAdmin está me retornando uma página em branco ou uma página cheia de caracteres criptográficos para o meu navegador, o que eu posso fazer?](#faq1-1)

### 1.3 (removido).[¶](#withdrawn "Link permanente para este título")

### 1.4 Quando uso o phpMyAdmin com IIS, aparece para mim a mensagem de erro: “A aplicação CGI apresentou um comportamento errado por não retornar um comjunto completo de cabeçalhos HTTP…”.[¶](#using-phpmyadmin-on-iis-i-m-displayed-the-error-message-the-specified-cgi-application-misbehaved-by-not-returning-a-complete-set-of-http-headers "Link permanente para este título")

Você esqueceu de ler o arquivo *install.txt* da distribuição do PHP. Dê uma olhada na última mensagem neste [relatório de bug do PHP #12061](http://bugs.php.net/bug.php?id=12061) da base de dados de bugs oficial do PHP.

### 1.5 Quando uso o phpMyAdmin com IIS, estou passando por quedas e/ou muitas mensagens de erro com o HTTP.[¶](#using-phpmyadmin-on-iis-i-m-facing-crashes-and-or-many-error-messages-with-the-http "Link permanente para este título")

Isso é um problema conhecido com o filtro [ISAPI](glossary.md#term-isapi) do PHP por ele não ser tão estável. Favor usar o modo de autenticação por cookies no lugar dele.

### 1.6 Eu não consigo usar o phpMyADmin com o PWS: nada está sendo mostrado![¶](#i-can-t-use-phpmyadmin-on-pws-nothing-is-displayed "Link permanente para este título")

This seems to be a PWS bug. Filippo Simoncini found a workaround (at
this time there is no better fix): remove or comment the `DOCTYPE`
declarations (2 lines) from the scripts `src/Header.php`
and `index.php`.

### 1.7 Como posso comprimir com gzip um dump ou um arquivo de exportação CSV? Não parece estar funcionando.[¶](#how-can-i-gzip-a-dump-or-a-csv-export-it-does-not-seem-to-work "Link permanente para este título")

Esse recurso é baseado na função `gzencode()` do PHP para ser mais independente da plataforma (Unix/Windows, Modo de segurança ou não, e assim em diante). Então, você deve ter suporte a Zlib (`--with-zlib`).

### 1.8 Eu não consigo inserir um arquivo de texto em uma tabela, e eu recebo um erro sobre o modo de segurança estar sendo usado.[¶](#i-cannot-insert-a-text-file-in-a-table-and-i-get-an-error-about-safe-mode-being-in-effect "Link permanente para este título")

Seu arquivo enviado está salvo pelo PHP no “upload dir”, de acordo com a definição do seu arquivo `php.ini` na variável `upload_tmp_dir` (normalmente o padrão do sistema é */tmp*). Nós recomendamos a seguinte instalação dos servidores Apache rodando em modo de segurança, para ativar uploads de arquivos sendo razoavelmente seguros:

- criar um diretório separado para uploads: **mkdir /tmp/php**
- dar o direito de posse do servidor Apache ao usuário.grupo: **chown apache.apache /tmp/php**
- dar permissão apropriada: **chmod 600 /tmp/php**
- colocar `upload_tmp_dir = /tmp/php` no arquivo `php.ini`
- reinicie o Apache

### 1.9 (removido).[¶](#withdrawn-1 "Link permanente para este título")

### 1.10 Eu estou tendo problemas com o upload de arquivos com o phpMyAdmin rodando num servidor seguro. Meu navegador é o Internet Explorer e eu estou usando um servidor Apache.[¶](#i-m-having-troubles-when-uploading-files-with-phpmyadmin-running-on-a-secure-server-my-browser-is-internet-explorer-and-i-m-using-the-apache-server "Link permanente para este título")

Como sugerido por “Rob M” no fórum phpWizard, adicione essa linha ao seu arquivo *httpd.conf*:

```
SetEnvIf User-Agent ".*MSIE.*" nokeepalive ssl-unclean-shutdown
```

Ela parece resolver muitos problemas entre o Internet Explorer e o SSL.

### 1.11 Eu recebo uma ‘restrição open\_basedir’ quando tento subir um arquivo a partir da aba de importação.[¶](#i-get-an-open-basedir-restriction-while-uploading-a-file-from-the-import-tab "Link permanente para este título")

Desde a versão 2.2.4 do phpMyAdmin, ele suporta servidores com restrições open\_basedir. No entanto, você precisa criar um diretório temporário e configurá-lo como [`$cfg['TempDir']`](config.md#cfg_TempDir). Os arquivos enviados serão movidos para lá, e depois da execução dos seus comandos [SQL](glossary.md#term-sql), removidos.

### 1.12 Eu perdi minha senha de root do MySQL, o que eu posso fazer?[¶](#i-have-lost-my-mysql-root-password-what-can-i-do "Link permanente para este título")

O phpMyAdmin faz autenticação contra o servidor MySQL que você está usando, então para se recuperar de uma perda de senha do phpMyAdmin, você precisa se recuperar no nível do MySQL.

O manual do MySQL explica como [resetar as permissões](https://dev.mysql.com/doc/refman/5.7/en/resetting-permissions.html).

Se você estiver usando um servidor MySQL instalado pelo seu provedor de hospedagem, entre em contato com o suporte deles para recuperarem a senha para você.

### 1.13 (removido).[¶](#withdrawn-2 "Link permanente para este título")

### 1.14 (removido).[¶](#withdrawn-3 "Link permanente para este título")

### 1.15 Eu tenho problemas com os nomes de coluna com *mysql.user*.[¶](#i-have-problems-with-mysql-user-column-names "Link permanente para este título")

Nas versões anteriores do MySQL, as colunas `User` e `Password` eram chamadas `user` e `password`. Favor modificar seus nomes de coluna para alinhar aos padrões atuais.

### 1.16 Eu não consigo subir arquivos de exportação grandes (memória, HTTP ou problemas de timeout).[¶](#i-cannot-upload-big-dump-files-memory-http-or-timeout-problems "Link permanente para este título")

A partir da versão 2.7.0, o motor de importação foi reescrito e esses problemas não deveriam acontecer. Se possível, atualize seu phpMyAdmin para a última versão para usufruir das novas funções importantes.

As primeiras coisas a verificar (ou pedir para o seu provedor de hospedagem verificar) são os valores do `max_execution_time`, `upload_max_filesize`, `memory_limit` e `post_max_size` no arquivo de configuração `php.ini`. Todas essas configurações limitam o tamanho máximo de dados que podem ser enviados e usados pelo PHP. Observe que `post_max_size` precisa ser maior que `upload_max_filesize`. Existem várias soluções se seus uploads são grandes demais ou se seu provedor de hospedagem não estiver disposto a alterar as configurações:

- Dê uma olhada na função [`$cfg['UploadDir']`](config.md#cfg_UploadDir). Isso permite a pessoa subir um arquivo ao servidor via scp, FTP, ou seu método de transferência de arquivos preferido. O phpMyAdmin então será capaz de importar esses arquivos do diretório temporário. Mais informações estão disponíveis na seção [Configuração](config.md#config) deste documento.
- Usar um utilitário (tal como o [BigDump](https://www.ozerov.de/bigdump/)) para separar os arquivos antes de enviá-los. Não podemos dar suporte à esta ou nenhuma outra aplicação de terceiros, mas temos conhecimento de usuários usando-as com sucesso.
- Se você tem acesso ao shell (linha de comando), use o MySQL para importar os arquivos diretamente. Você pode fazer isso enviando um comando “source” de dentro do MySQL:

  ```
  source filename.sql;
  ```

### 1.17 Quais versões de bancos de dados são suportadas pelo phpMyAdmin?[¶](#which-database-versions-does-phpmyadmin-support "Link permanente para este título")

Para o [MySQL](https://www.mysql.com/), as versões 5.5 e posteriores são suportadas. Para as versões mais antigas do MySQL, nossa página de [Downloads](https://www.phpmyadmin.net/downloads/) oferece versões mais antigas do phpMyAdmin (que podem não ter mais suporte).

Para o [MariaDB](https://mariadb.org/), as versões 5.5 e posteriores são suportadas.

### 1.17a Eu não consigo conectar ao servidor MySQL. Ele sempre retorna a mensagem de erro, “O cliente não suporta o protocol de autenticação pedido ao servidor, considere atualizar o cliente MySQL”[¶](#a-i-cannot-connect-to-the-mysql-server-it-always-returns-the-error-message-client-does-not-support-authentication-protocol-requested-by-server-consider-upgrading-mysql-client "Link permanente para este título")

You tried to access MySQL with an old MySQL client library. The
version of your MySQL client library can be checked in your phpinfo()
output. In general, it should have at least the same minor version as
your server - as mentioned in [1.17 Quais versões de bancos de dados são suportadas pelo phpMyAdmin?](#faq1-17). This problem is
generally caused by using MySQL version 4.1 or newer. MySQL changed
the authentication hash and your PHP is trying to use the old method.
The proper solution is to use the [mysqli extension](https://www.php.net/mysqli) with the proper client library to match
your MySQL installation. More
information (and several workarounds) are located in the [MySQL
Documentation](https://dev.mysql.com/doc/refman/5.7/en/common-errors.html).

### 1.18 (removido).[¶](#withdrawn-4 "Link permanente para este título")

### 1.19 Eu não consigo rodar a função “mostrar relações” porque o script parece não conhecer a fonte que eu estou usando![¶](#i-can-t-run-the-display-relations-feature-because-the-script-seems-not-to-know-the-font-face-i-m-using "Link permanente para este título")

A biblioteca [TCPDF](glossary.md#term-tcpdf) que nós estamos usando para essa função exige alguns arquivos especiais para usar fontes. Favor referir ao [manual do TCPDF](https://www.tcpdf.org/) para construir esses arquivos.

### 1.20 Eu recebo um erro sobre extensões mysqli e mysql faltando.[¶](#i-receive-an-error-about-missing-mysqli-and-mysql-extensions "Link permanente para este título")

Para conectar ao servidor MySQL, o PHP precisa de um conjunto de funções MySQL chamadas “extensão MySQL”. Essa extensão pode ser parte da distribuição do PHP (compilada junto), caso contrário ela precisa ser carregada dinamicamente. Seu nome é provavelmente *mysqli.so* ou *php\_mysqli.dll*. O phpMyAdmin tentou carregar a extensão mas falhou. Normalmente, o problema é resolvido instalando um pacote de software chamado “PHP-MySQL” ou algo similar.

There was two interfaces PHP provided as MySQL extensions - `mysql`
and `mysqli`. The `mysql` interface was removed in PHP 7.0.

Esse problema também pode ser causado por caminhos errados no `php.ini` ou por usar o `php.ini` incorreto.

Certifique-se de que os arquivos de extensão existem na pasta que o `extension_dir` aponta e que as linhas correspondentes no seu `php.ini` não estão comentadas (você pode usar o `phpinfo()` para verificar a configuração atual):

```
[PHP]

; Directory in which the loadable extensions (modules) reside.
extension_dir = "C:/Apache2/modules/php/ext"
```

O `php.ini` pode ser carregado de vários locais (especialmente no Windows), então verifique se você está atualizando o correto. Se estiver usando o Apache, você pode informar um caminho específico para esse arquivo usando a diretiva `PHPIniDir`:

```
LoadModule php7_module "C:/php7/php7apache2_4.dll"
<IfModule php7_module>
    PHPIniDir "C:/php7"
    <Location>
       AddType text/html .php
       AddHandler application/x-httpd-php .php
    </Location>
</IfModule>
```

In some rare cases this problem can be also caused by other extensions loaded
in PHP which prevent MySQL extensions to be loaded. If anything else fails, you
can try commenting out extensions for other databases from `php.ini`.

### 1.21 Eu estou rodando a versão CGI do PHP no Unix, e não consigo entrar usando o modo de autenticação por cookies.[¶](#i-am-running-the-cgi-version-of-php-under-unix-and-i-cannot-log-in-using-cookie-auth "Link permanente para este título")

No arquivo `php.ini`, configure `mysql.max_links` para mais de 1.

### 1.22 Eu não vejo o campo de “Localização do arquivo de texto”, então eu não consigo fazer o upload.[¶](#i-don-t-see-the-location-of-text-file-field-so-i-cannot-upload "Link permanente para este título")

O mais provável é que no seu arquivo `php.ini`, o parâmetro `file_uploads` não está definido como “on”.

### 1.23 Eu estou rodando o MySQL em uma máquina Win32. Cada vez que eu crio uma nova tabela, a tabela e os nomes das colunas são mudados para letras minúsculas![¶](#i-m-running-mysql-on-a-win32-machine-each-time-i-create-a-new-table-the-table-and-column-names-are-changed-to-lowercase "Link permanente para este título")

Isso acontece porque a diretiva do MySQL `lower_case_table_names` vem por padrão como 1 (`ON`) na versão Win32 do MySQL. Você pode mudar esse comportamento simplesmente mudando a diretiva para 0 (`OFF`): basta editar seu arquivo `my.ini` que deve estar localizado no seu diretório do Windows e adicionar a seguinte linha ao grupo [mysqld]:

```
set-variable = lower_case_table_names=0
```

Nota

Ao forçar esta variável a 0 com –lower-case-table-names=0 em um sistema de arquivos que não faz distinção entre maiúsculas e minúsculas, o acesso a tabelas MyISAM usando maiúsculas e minúsculas de forma diferente do nome da tabela pode resultar em índices corrompidos.

Em seguida, salve o arquivo e reinicie o serviço MySQL. Você sempre pode verificar o valor dessa diretiva usando a query

```
SHOW VARIABLES LIKE 'lower_case_table_names';
```

Ver também

[Identificador de Sensibilidade de Maiúsculas e Minúsculas no Manual de Referência do MySQL](https://dev.mysql.com/doc/refman/5.7/en/identifier-case-sensitivity.html)

### 1.24 (removido).[¶](#withdrawn-5 "Link permanente para este título")

### 1.25 Eu estou rodando o Apache com o mod\_gzip-1.3.26.1a no Windows XP, e eu recebo problemas, como variáveis indefinidas quando eu rodo a query SQL.[¶](#i-am-running-apache-with-mod-gzip-1-3-26-1a-on-windows-xp-and-i-get-problems-such-as-undefined-variables-when-i-run-a-sql-query "Link permanente para este título")

Uma dica de Jose Fandos: coloque um comentário nas duas linhas seguintes no arquivo httpd.conf, desse jeito:

```
# mod_gzip_item_include file \.php$
# mod_gzip_item_include mime "application/x-httpd-php.*"
```

já que essa versão do mod\_gzip no Apache (Windows) tem problemas em lidar com scripts PHP. É claro, você tem que reiniciar o Apache.

### 1.26 Eu acabei de instalar o phpMyADmin no documento raiz do IIS mas eu recebo o erro “Nenhum arquivo de entrada especificado” quando tento rodar o phpMyAdmin.[¶](#i-just-installed-phpmyadmin-in-my-document-root-of-iis-but-i-get-the-error-no-input-file-specified-when-trying-to-run-phpmyadmin "Link permanente para este título")

Isso é um problema de permissão. Clique com o botão direito na pasta do phpMyAdmin e escolha as propriedades. Na aba Segurança, clique em “Adicionar” e selecione o usuário “IUSR\_machine” da lista. Agora configure essas permissões e deverá funcionar.

### 1.27 Eu recebo uma página vazia quando eu quero visualizar uma página gigante (ex: db\_structure.php com muitas tabelas).[¶](#i-get-empty-page-when-i-want-to-view-huge-page-eg-db-structure-php-with-plenty-of-tables "Link permanente para este título")

Isso foi causado por um [bug do PHP](https://bugs.php.net/bug.php?id=21079) que ocorre quando o buffer de saída GZIP está ativado. Se você desligá-lo (pela configuração [`$cfg['OBGzip']`](config.md#cfg_OBGzip) no arquivo `config.inc.php`), deverá solucionar o problema. Esse bug foi consertado no PHP 5.0.0.

### 1.28 Meu servidor MySQL recusa queries algumas vezes e retorna a mensagem ‘Código de erro: 13’. O que isso quer dizer?[¶](#my-mysql-server-sometimes-refuses-queries-and-returns-the-message-errorcode-13-what-does-this-mean "Link permanente para este título")

Isso pode acontecer por causa de um bug do MySQL quando ele tem nomes de banco de dados/tabelas com letras maiúsculas embora `lower_case_table_names` esteja definido como 1. Para consertar isso, desligue essa diretiva, converta todos os nomes de bancos de dados e tabelas para letras minúsculas e ligue-a novamente. Alternativamente, há um conserto de bug disponível a partir da versão do MySQL 3.23.56 / 4.0.11-gamma.

### 1.29 Quando eu crio uma tabela ou modifico uma coluna, eu recebo um erro e as colunas são duplicadas.[¶](#when-i-create-a-table-or-modify-a-column-i-get-an-error-and-the-columns-are-duplicated "Link permanente para este título")

É possível configurar o Apache de forma que o PHP terá problemas interpretando arquivos .php.

Os problemas ocorrem quando dois conjuntos diferentes (e conflitantes) de diretivas estão sendo usados:

```
SetOutputFilter PHP
SetInputFilter PHP
```

e

```
AddType application/x-httpd-php .php
```

No caso que nós vimos, um conjunto de diretivas estava em `/etc/httpd/conf/httpd.conf`, enquanto o outro estava em `/etc/httpd/conf/addon-modules/php.conf`. O jeito recomendado é com `AddType`, então apenas comente o primeiro conjunto de linhas e reinicie o Apache:

```
#SetOutputFilter PHP
#SetInputFilter PHP
```

### 1.30 Eu recebo o erro “navigation.php: Hash está faltando”.[¶](#i-get-the-error-navigation-php-missing-hash "Link permanente para este título")

Esse problema é conhecido por acontecer quando o servidor está rodando Turck MMCache, mas atualizar o MMCache para a versão 2.3.21 resolve o problema.

### 1.31 Quais versões do PHP são suportadas pelo phpMyAdmin?[¶](#which-php-versions-does-phpmyadmin-support "Link permanente para este título")

Desde o lançamento 4.5, phpMyAdmin suporta apenas PHP 5.5 e mais recentes. Desde a versão 4.1 o phpMyAdmin suporta somente o PHP 5.3 e mais recentes. Para PHP 5.2 você pode usar as versões 4.0.x.

PHP 7 é suportado desde o phpMyAdmin 4.6, PHP 7.1 é suportado desde 4.6.5, PHP 7.2 é suportado desde 4.7.4.

HHVM é suportado até o phpMyAdmin 4.8.

Since release 5.0, phpMyAdmin supports only PHP 7.1 and newer.
Since release 5.2, phpMyAdmin supports only PHP 7.2 and newer.
Since release 6.0, phpMyAdmin supports only PHP 8.1 and newer.

### 1.32 Eu posso usar autenticação HTTP com o IIS?[¶](#can-i-use-http-authentication-with-iis "Link permanente para este título")

Sim. Esse é um procedimento que foi testado com o phpMyAdmin 2.6.1 e PHP 4.3.9 no modo [ISAPI](glossary.md#term-isapi) com o [IIS](glossary.md#term-iis) 5.1.

1. No seu arquivo `php.ini`, escreva `cgi.rfc2616_headers = 0`
2. Na caixa de diálogo `Propriedades do Web Site -> Arquivo/Segurança de Diretório -> Acesso Anônimo`, verifique a caixa de marcação `Acesso anônimo` e desmarque qualquer outra caixa de seleção (ex: desmarque `Autenticação básica`, `Autenticação integrada com o Windows`, e `Resumo` se estiver ativado). Clique `OK`.
3. Em `Erros personalizados`, selecione o limite de `401;1` até `401;5` e clique no botão `Definir como padrão`.

Ver também

[**RFC 2616**](https://tools.ietf.org/html/rfc2616.html)

### 1.33 (removido).[¶](#withdrawn-6 "Link permanente para este título")

### 1.34 Eu posso acessar diretamente as páginas do banco de dados ou das tabelas?[¶](#can-i-directly-access-a-database-or-table-pages "Link permanente para este título")

Sim. Por padrão, você pode usar uma [URL](glossary.md#term-url) como `http://server/phpMyAdmin/index.php?server=X&db=database&table=table&target=script`. Para `server`, você pode usar o número do servidor que se refere ao índice numérico do host (de `$i`) no `config.inc.php`. As partes table e script são opcionais.

Se você quiser uma URL como `http://server/phpMyAdmin/database[/table][/script]`, você precisa fazer algumas configurações adicionais. As linhas a seguir se aplicam somente ao servidor web [Apache](https://httpd.apache.org). Primeiro assegure-se de ter ativado algumas funções dentro da configuração global do Apache. Você precisa ativar `Options SymLinksIfOwnerMatch` e `AllowOverride FileInfo` para o diretório onde o phpMyAdmin está instalado e você precisa que mod\_rewrite esteja ativado. Então você só precisa criar o seguinte arquivo [.htaccess](glossary.md#term-htaccess) na pasta raiz da instalação do phpMyAdmin (não esqueça de mudar o nome diretório dentro dele):

```
RewriteEngine On
RewriteBase /path_to_phpMyAdmin
RewriteRule ^([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)/([a-z_]+\.php)$ index.php?db=$1&table=$2&target=$3 [R]
RewriteRule ^([a-zA-Z0-9_]+)/([a-z_]+\.php)$ index.php?db=$1&target=$2 [R]
RewriteRule ^([a-zA-Z0-9_]+)/([a-zA-Z0-9_]+)$ index.php?db=$1&table=$2 [R]
RewriteRule ^([a-zA-Z0-9_]+)$ index.php?db=$1 [R]
```

Ver também

[4.8 Quais parâmetros podem ser usados na URL que inicia o phpMyAdmin?](#faq4-8)

Alterado na versão 5.1.0: O suporte ao uso do parâmetro `target` foi removido no phpMyAdmin 5.1.0. Use o parâmetro `route` em seu lugar.

### 1.35 Eu posso usar autenticação HTTP com o Apache CGI?[¶](#can-i-use-http-authentication-with-apache-cgi "Link permanente para este título")

Sim. No entanto, você precisa passar a variável de autenticação ao [CGI](glossary.md#term-cgi) usando a seguinte reescrita de regra:

```
RewriteEngine On
RewriteRule .* - [E=REMOTE_USER:%{HTTP:Authorization},L]
```

### 1.36 Eu recebo um erro “500 Internal Server Error”.[¶](#i-get-an-error-500-internal-server-error "Link permanente para este título")

Pode haver muitas explicações para isso e uma olhada no log de erros do seu servidor pode apresentar uma dica.

### 1.37 Eu rodo o phpMyAdmin num cluster de máquinas diferentes e a criptografia de senha em autenticação por cookies não está funcionando.[¶](#i-run-phpmyadmin-on-cluster-of-different-machines-and-password-encryption-in-cookie-auth-doesn-t-work "Link permanente para este título")

If your cluster consist of different architectures, PHP code used for
encryption/decryption won’t work correctly. This is caused by use of
pack/unpack functions in code. Only solution is to use openssl
extension which works fine in this case.

### 1.38 Eu posso usar o phpMyAdmin num servidor em que o Suhosin está ativado?[¶](#can-i-use-phpmyadmin-on-a-server-on-which-suhosin-is-enabled "Link permanente para este título")

Sim, mas os valores padrão de configuração são conhecidos por causar problemas com algumas operações, por exemplo, editar uma tabela com muitas colunas e nenhuma [primary key](glossary.md#term-primary-key) ou com [primary key](glossary.md#term-primary-key) textual.

A configuração do Suhosin pode levar ao mal funcionamento em alguns casos e ela não pode ser completamente evitar já que o phpMyAdmin é o tipo de aplicação que precisa transferir grandes quantidades de campos numa única requisição HTTP, que é algo que o Suhosin tenta prevenir. Geralmente todos as diretivas `suhosin.request*`, `suhosin.post*` e `suhosin.get*` podem ter um efeito negativo na usabilidade do phpMyAdmin. Você sempre pode achar nos seus logs de erro qual limite causou a perda de variável, então você pode diagnosticar o problema e ajustar a variável de configuração correspondente.

Os valores padrão para a maior parte das opções de configuração do Suhosin irá funcionar na maior parte dos cenários, no entanto você pode querer ajustar pelo menos os parâmetros a seguir:

- [suhosin.request.max\_vars](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-request-max-vars) should
  be increased (eg. 2048)
- [suhosin.post.max\_vars](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-post-max-vars) should be
  increased (eg. 2048)
- [suhosin.request.max\_array\_index\_length](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-request-max-array-index-length)
  should be increased (eg. 256)
- [suhosin.post.max\_array\_index\_length](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-post-max-array-index-length)
  should be increased (eg. 256)
- [suhosin.request.max\_totalname\_length](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-request-max-totalname-length)
  should be increased (eg. 8192)
- [suhosin.post.max\_totalname\_length](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-post-max-totalname-length) should be
  increased (eg. 8192)
- [suhosin.get.max\_value\_length](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-get-max-value-length)
  should be increased (eg. 1024)
- [suhosin.sql.bailout\_on\_error](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-sql-bailout-on-error)
  needs to be disabled (the default)
- [suhosin.log.\*](https://suhosin5.suhosin.org/stories/configuration.html#logging-configuration) should not
  include [SQL](glossary.md#term-sql), otherwise you get big
  slowdown
- [suhosin.sql.union](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-sql-union) must be disabled (which is the default).
- [suhosin.sql.multiselect](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-sql-multiselect) must be disabled (which is the default).
- [suhosin.sql.comment](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-sql-comment) must be disabled (which is the default).

Para melhorar ainda mais a segurança, também recomendamos estas modificações:

- [suhosin.executor.include.max\_traversal](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-executor-include-max-traversal) should be
  enabled as a mitigation against local file inclusion attacks. We suggest
  setting this to 2 as `../` is used with the ReCaptcha library.
- [suhosin.cookie.encrypt](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-cookie-encrypt) should be enabled.
- [suhosin.executor.disable\_emodifier](https://suhosin5.suhosin.org/stories/configuration.html#suhosin-executor-disable-emodifier) should be enabled.

Você também pode desativar o aviso usando [`$cfg['SuhosinDisableWarning']`](config.md#cfg_SuhosinDisableWarning).

### 1.39 Quando eu tento conectar via https, eu consigo entrar, mas então a minha conexão é redirecionada de volta ao http. O que pode causar esse comportamento?[¶](#when-i-try-to-connect-via-https-i-can-log-in-but-then-my-connection-is-redirected-back-to-http-what-can-cause-this-behavior "Link permanente para este título")

Isso é causado pelo fato de que os scripts PHP não sabem que o site está usando o https. Dependendo do servidor web usado, você deve configurá-lo para permitir que o PHP saiba sobre a URL e o esquema usado para acessá-lo.

Por exemplo, no Apache, certifique-se de que você ativou `SSLOptions` e `StdEnvVars` na configuração.

Ver também

<<https://httpd.apache.org/docs/2.4/mod/mod_ssl.html>>

### 1.40 Quando acesso o phpMyAdmin via um proxy reverso do Apache, o login por cookies não funciona.[¶](#when-accessing-phpmyadmin-via-an-apache-reverse-proxy-cookie-login-does-not-work "Link permanente para este título")

Para conseguir usar a autenticação por cookies, o Apache precisa saber que ele tem que reescrever o cabeçalho set-cookie. Exemplo da documentação do Apache 2.2:

```
ProxyPass /mirror/foo/ http://backend.example.com/
ProxyPassReverse /mirror/foo/ http://backend.example.com/
ProxyPassReverseCookieDomain backend.example.com public.example.com
ProxyPassReverseCookiePath / /mirror/foo/
```

Observação: se a url do backend parecer com `http://server/~user/phpmyadmin`, o til (~) deve ser codificado para url como %7E nas linhas ProxyPassReverse\*. Isso não é específico do phpMyAdmin, é apenas o comportamento do Apache.

```
ProxyPass /mirror/foo/ http://backend.example.com/~user/phpmyadmin
ProxyPassReverse /mirror/foo/ http://backend.example.com/%7Euser/phpmyadmin
ProxyPassReverseCookiePath /%7Euser/phpmyadmin /mirror/foo
```

Ver também

<<https://httpd.apache.org/docs/2.2/mod/mod_proxy.html>>, [`$cfg['PmaAbsoluteUri']`](config.md#cfg_PmaAbsoluteUri)

### 1.41 Quando eu vejo um banco de dados e peço para ver seus privilégios, eu recebo um erro sobre uma coluna desconhecida.[¶](#when-i-view-a-database-and-ask-to-see-its-privileges-i-get-an-error-about-an-unknown-column "Link permanente para este título")

As tabelas de privilégios do servidor MySQL não estão atualizadas, você precisa rodar o comando **mysql\_upgrade** no servidor.

### 1.42 Como eu posso evitar que robôs acessem o phpMyAdmin?[¶](#how-can-i-prevent-robots-from-accessing-phpmyadmin "Link permanente para este título")

Você pode adicionar várias regras ao [.htaccess](glossary.md#term-htaccess) para filtrar o acesso baseado no campo de agente de usuário. Isso é bem fácil de burlar, mas pode evitar que pelos menos alguns robôs acessem sua instalação.

```
RewriteEngine on

# Allow only GET and POST verbs
RewriteCond %{REQUEST_METHOD} !^(GET|POST)$ [NC,OR]

# Ban Typical Vulnerability Scanners and others
# Kick out Script Kiddies
RewriteCond %{HTTP_USER_AGENT} ^(java|curl|wget).* [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^.*(libwww-perl|curl|wget|python|nikto|wkito|pikto|scan|acunetix).* [NC,OR]
RewriteCond %{HTTP_USER_AGENT} ^.*(winhttp|HTTrack|clshttp|archiver|loader|email|harvest|extract|grab|miner).* [NC,OR]

# Ban Search Engines, Crawlers to your administrative panel
# No reasons to access from bots
# Ultimately Better than the useless robots.txt
# Did google respect robots.txt?
# Try google: intitle:phpMyAdmin intext:"Welcome to phpMyAdmin *.*.*" intext:"Log in" -wiki -forum -forums -questions intext:"Cookies must be enabled"
RewriteCond %{HTTP_USER_AGENT} ^.*(AdsBot-Google|ia_archiver|Scooter|Ask.Jeeves|Baiduspider|Exabot|FAST.Enterprise.Crawler|FAST-WebCrawler|www\.neomo\.de|Gigabot|Mediapartners-Google|Google.Desktop|Feedfetcher-Google|Googlebot|heise-IT-Markt-Crawler|heritrix|ibm.com\cs/crawler|ICCrawler|ichiro|MJ12bot|MetagerBot|msnbot-NewsBlogs|msnbot|msnbot-media|NG-Search|lucene.apache.org|NutchCVS|OmniExplorer_Bot|online.link.validator|psbot0|Seekbot|Sensis.Web.Crawler|SEO.search.Crawler|Seoma.\[SEO.Crawler\]|SEOsearch|Snappy|www.urltrends.com|www.tkl.iis.u-tokyo.ac.jp/~crawler|SynooBot|crawleradmin.t-info@telekom.de|TurnitinBot|voyager|W3.SiteSearch.Crawler|W3C-checklink|W3C_Validator|www.WISEnutbot.com|yacybot|Yahoo-MMCrawler|Yahoo\!.DE.Slurp|Yahoo\!.Slurp|YahooSeeker).* [NC]
RewriteRule .* - [F]
```

### 1.43 Porque eu não posso mostrar a estrutura da minha tabela contendo centenas de campos?[¶](#why-can-t-i-display-the-structure-of-my-table-containing-hundreds-of-columns "Link permanente para este título")

Porque sua configuração `memory_limit` do PHP é baixa demais; ajuste-a no arquivo `php.ini`.

### 1.44 Como posso reduzir o tamanho da instalação do phpMyAdmin no disco?[¶](#how-can-i-reduce-the-installed-size-of-phpmyadmin-on-disk "Link permanente para este título")

Alguns usuários solicitaram poder reduzir o tamanho da instalação do phpMyAdmin. Isso não é recomendado e pode levar a confusão sobre características faltantes, mas pode ser feito. Uma lista de arquivos e correspondentes funcionalidades que degradam suavemente quando removidos incluem:

- Pasta `./locale/`, ou subpastas não utilizadas (traduções de interface)
- Any unused themes in `./public/themes/` except the default theme pmahomme.
- `./libraries/language_stats.inc.php` (translation statistics)
- `./doc/` (documentação)
- `./setup/` (script de instalação)
- `./examples/` (configuration examples)
- `./sql/` (SQL scripts to configure advanced functionalities)
- `./js/src/` (Source files to re-build ./js/dist/)
- `./js/global.d.ts` JS type declaration file
- Run rm -rv vendor/tecnickcom/tcpdf && composer dump-autoload –no-interaction –optimize –dev (exporting to PDF)
- Run rm -rv vendor/williamdes/mariadb-mysql-kbs && composer dump-autoload –no-interaction –optimize –dev (external links to MariaDB and MySQL documentations)
- Run rm -rv vendor/code-lts/u2f-php-server && composer dump-autoload –no-interaction –optimize –dev (U2F second factor authentication)
- Run rm -rv vendor/pragmarx/\* && composer dump-autoload –no-interaction –optimize –dev (2FA second factor authentication)
- Run rm -rv vendor/bacon/bacon-qr-code && composer dump-autoload –no-interaction –optimize –dev (QRcode generation for 2FA second factor authentication)

### 1.45 I get an error message about unknown authentication method caching\_sha2\_password when trying to log in[¶](#i-get-an-error-message-about-unknown-authentication-method-caching-sha2-password-when-trying-to-log-in "Link permanente para este título")

Ao entrar usando o MySQL versão 8 ou mais recente, você pode encontrar uma mensagem de erro como esta:

> mysqli\_real\_connect(): O servidor solicitou método de autenticação desconhecido para o cliente [caching\_sha2\_password]
>
> mysqli\_real\_connect(): (HY000/2054): O servidor solicitou método de autenticação desconhecido para o cliente

Este erro é devido a um problema de compatibilidade de versão entre PHP e MySQL. O projeto MySQL introduziu um novo método de autenticação (nossos testes mostram que isso começou com a versão 8.0.11), no entanto, o PHP não incluiu a capacidade de usar esse método de autenticação. O PHP relata que isso foi corrigido no PHP versão 7.4.

Users experiencing this are encouraged to upgrade their PHP installation, however a workaround exists. Your MySQL user account
can be set to use the older authentication with a command such as

```
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'PASSWORD';
```

Ver também

<<https://github.com/phpmyadmin/phpmyadmin/issues/14220>>, <<https://stackoverflow.com/questions/49948350/phpmyadmin-on-mysql-8-0>>, <<https://bugs.php.net/bug.php?id=76243>>

## Configuração[¶](#configuration "Link permanente para este título")

### 2.1 A mensagem de erro “Aviso: Não pode adicionar informação ao cabeçalho - cabeçalhos já enviados por …” é mostrada, qual é o problema?[¶](#the-error-message-warning-cannot-add-header-information-headers-already-sent-by-is-displayed-what-s-the-problem "Link permanente para este título")

Edite seu arquivo `config.inc.php` e garanta que não há nada (por exemplo: linhas em branco, espaços, caracteres…) nem antes da tag `<?php` no começo nem após a tag `?>` no final.

### 2.2 O phpMyAdmin não consegue conectar ao MySQL. Qual o problema?[¶](#phpmyadmin-can-t-connect-to-mysql-what-s-wrong "Link permanente para este título")

Ou há um erro com sua instalação do PHP ou seu nome de usuário/senha está errado. Tente criar um pequeno script que usa mysql\_connect e veja se funciona. Se não funcionar, pode ser que você sequer compilou o suporte MySQL no PHP.

### 2.3 A mensagem de erro “Aviso: Conexão ao MySQL Falhou: Não pode conectar ao servidor MySQL local através do socket ‘/tmp/mysql.sock’ (111) …” é mostrada. O que eu posso fazer?[¶](#the-error-message-warning-mysql-connection-failed-can-t-connect-to-local-mysql-server-through-socket-tmp-mysql-sock-111-is-displayed-what-can-i-do "Link permanente para este título")

A mensagem de erro também pode ser: Erro #2002 - O servidor não está respondendo (ou o soquete do servidor MySQL local não está configurado corretamente).

Primeiro, você precisa determinar qual socket está sendo usado pelo MySQL. Para fazer isso, conecte-se ao seu servidor e vá ao diretório bin de seu MySQL. Neste diretório deve haver um arquivo chamado *mysqladmin*. Digite `./mysqladmin variables`, e isso deve te mostrar um monte de informações sobre seu servidor MySQL, incluindo o socket (*/tmp/mysql.sock*, por exemplo). Você também pode solicitar ao seu ISP as informações de conexão ou, se você mesmo estiver hospedando, conecte-se a partir do cliente de linha de comando ‘mysql’ e digite ‘status’ para obter o tipo de conexão e socket ou o número da porta.

Então, você precisa dizer ao PHP para usar esse socket. Você pode fazer isso para o PHP inteiro no `php.ini` ou apenas para o phpMyAdmin no `config.inc.php`. Por exemplo example: [`$cfg['Servers'][$i]['socket']`](config.md#cfg_Servers_socket). Favor garantir também que as permissões deste arquivo permitam a leitura pelo seu servidor web.

No meu RedHat-Box o socket do MySQL é */var/lib/mysql/mysql.sock*. No seu arquivo `php.ini` você encontrará uma linha

```
mysql.default_socket = /tmp/mysql.sock
```

mude-a para

```
mysql.default_socket = /var/lib/mysql/mysql.sock
```

Então reinicie o Apache e irá funcionar.

Dê uma olhada também na [seção correspondente da documentação do MySQL](https://dev.mysql.com/doc/refman/5.7/en/can-not-connect-to-server.html).

### 2.4 Nada é exibido pelo meu navegador quando eu tento rodar o phpMyAdmin, o que eu posso fazer?[¶](#nothing-is-displayed-by-my-browser-when-i-try-to-run-phpmyadmin-what-can-i-do "Link permanente para este título")

Tente definir a diretiva [`$cfg['OBGzip']`](config.md#cfg_OBGzip) para `false` no arquivo de configuração do phpMyAdmin. Isso ajuda às vezes. Dê uma olhada também no número de versão do seu PHP: se ele contém “b” ou “alpha” isso significa que você está rodando uma versão de testes do PHP. Isso não é uma ideia muito boa, favor atualize para uma revisão estável.

### 2.5 Cada vez que eu tento inserir ou mudar um registro ou eliminar um banco de dados ou tabela, um erro 404 (página não encontrada) é mostrado ou, com a autenticação por cookie ou HTTP, é pedido para que eu entre novamente. Qual o problema?[¶](#each-time-i-want-to-insert-or-change-a-row-or-drop-a-database-or-a-table-an-error-404-page-not-found-is-displayed-or-with-http-or-cookie-authentication-i-m-asked-to-log-in-again-what-s-wrong "Link permanente para este título")

Verifique na configuração do seu servidor web se ele preenche corretamente as variáveis PHP\_SELF ou REQUEST\_URI.

Se você estiver executando o phpMyAdmin atrás de um proxy reverso, por favor, defina a diretiva [`$cfg['PmaAbsoluteUri']`](config.md#cfg_PmaAbsoluteUri) no arquivo de configuração do phpMyAdmin para corresponder à sua configuração.

### 2.6 Eu recebo um erro “Acesso negado para o usuário: [‘root@localhost](mailto:'root%40localhost)’ (Usando senha: SIM)” quando tento acessar o MySQL Server em um host que tem port-forward para o meu localhost.[¶](#i-get-an-access-denied-for-user-root-localhost-using-password-yes-error-when-trying-to-access-a-mysql-server-on-a-host-which-is-port-forwarded-for-my-localhost "Link permanente para este título")

Quando você usa uma porta no seu localhost, que você redireciona via port-forward para outro host, o MySQL não resolve o localhost como esperado. Erik Wasser explica: a solução é: se seu host for “localhost”, o MySQL (a ferramenta de linha de comando **mysql** também) sempre tenta usar o socket de conexão para acelerar as coisas. E isso parece não funcionar nessa configuração com redirecionamento de porta. Se você entrar “127.0.0.1” como hostname, tudo fica certo e o MySQL usa a conexão por [TCP](glossary.md#term-tcp).

### 2.7 Usando e criando temas[¶](#using-and-creating-themes "Link permanente para este título")

Veja [Temas Personalizados](themes.md#themes).

### 2.8 Eu recebo erros “Faltando parâmetros”, o que eu posso fazer?[¶](#i-get-missing-parameters-errors-what-can-i-do "Link permanente para este título")

Aqui estão alguns pontos a verificar:

- Em `config.inc.php`, tente deixar a diretiva [`$cfg['PmaAbsoluteUri']`](config.md#cfg_PmaAbsoluteUri) vazia. Veja também a [4.7 A janela de autenticação é mostrada mais de uma vez, porque?](#faq4-7).
- Talvez você tenha uma instalação quebrada do PHP ou você precisa atualizar seu Zend Optimizer. Veja <<https://bugs.php.net/bug.php?id=31134>>.
- Se você está usando o Hardened PHP com a diretiva ini `varfilter.max_request_variables`, defina para o padrão (200) ou outro valor baixo, você pode receber este erro se sua tabela tiver um alto número de campos. Ajuste essa configuração de acordo. (Agradeça a Klaus Dorninger pela dica).
- Na diretiva do `php.ini` `arg_separator.input`, um valor de “;” irá causar este erro. Substitua ela por “&;”.
- If you are using [Suhosin](https://suhosin5.suhosin.org/stories/index.html), you
  might want to increase [request limits](https://suhosin5.suhosin.org/stories/faq.html).
- O diretório especificado na diretiva `session.save_path` do `php.ini` não existe ou está em modo somente leitura (isso pode ser causado por um [erro no instalador do PHP](https://bugs.php.net/bug.php?id=39842)).

### 2.9 Vendo uma barra de progresso de upload[¶](#seeing-an-upload-progress-bar "Link permanente para este título")

To be able to see a progress bar during your uploads, your server must
have the [uploadprogress](https://pecl.php.net/package/uploadprogress) extension, and
you must be running PHP 5.4.0 or higher. Moreover, the JSON extension
has to be enabled in your PHP.

Se usar o PHP 5.4.0 ou superior, você deve definir `session.upload_progress.enabled` para `1` no seu arquivo `php.ini`. No entanto, na versão 4.0.4 do phpMyAdmin os uploads baseados em sessões foram temporariamente desativados devido a alguns problemas de comportamento.

### 2.10 How to generate a string of random bytes[¶](#how-to-generate-a-string-of-random-bytes "Link permanente para este título")

One way to generate a string of random bytes suitable for cryptographic use is using the
[random\_bytes](https://www.php.net/random_bytes) [PHP](glossary.md#term-php) function. Since this function returns a binary string,
the returned value should be converted to printable format before being able to copy it.

For example, the [`$cfg['blowfish_secret']`](config.md#cfg_blowfish_secret) configuration directive requires a 32-bytes long string. The
following command can be used to generate a hexadecimal representation of this string.

```
php -r 'echo bin2hex(random_bytes(32)) . PHP_EOL;'
```

The above example will output something similar to:

```
f16ce59f45714194371b48fe362072dc3b019da7861558cd4ad29e4d6fb13851
```

And then this hexadecimal value can be used in the configuration file.

```
$cfg['blowfish_secret'] = sodium_hex2bin('f16ce59f45714194371b48fe362072dc3b019da7861558cd4ad29e4d6fb13851');
```

The [sodium\_hex2bin](https://www.php.net/sodium_hex2bin) function is used here to convert the hexadecimal value back to the
binary format.

## Limitações conhecidas[¶](#known-limitations "Link permanente para este título")

### 3.1 Quando usar a autenticação por HTTP, um usuário que sair não poderá entrar novamente com o mesmo apelido.[¶](#when-using-http-authentication-a-user-who-logged-out-can-not-log-in-again-in-with-the-same-nick "Link permanente para este título")

Isso está relacionado ao mecanismo de autenticação (protocolo) usado pelo phpMyAdmin. Para contornar este problema: apenas feche todas as janelas abertas do navegador e então volte ao phpMyAdmin. Você deverá ser capaz de entrar novamente.

### 3.2 Quando despejo uma tabela grande em modo comprimido, eu recebo um erro de limite de memória ou um erro de tempo limite.[¶](#when-dumping-a-large-table-in-compressed-mode-i-get-a-memory-limit-error-or-a-time-limit-error "Link permanente para este título")

Despejos comprimidos são criados em memória e por causa disso são limitados ao limite de memória do PHP. Para exportações em gzip/bzip2 isso pode ser superado desde a versão 2.5.4 usando [`$cfg['CompressOnFly']`](config.md#cfg_CompressOnFly) (ativada por padrão). Exportações em zip não podem ser manipuladas desse jeito, então se você precisar de arquivos zip para despejos maiores, você terá que usar outro meio.

### 3.3 Com tabelas InnoDB, eu perco os relacionamentos de chave estrangeira quando eu renomeio uma tabela ou uma coluna.[¶](#with-innodb-tables-i-lose-foreign-key-relationships-when-i-rename-a-table-or-a-column "Link permanente para este título")

Isso é um bug do InnoDB, veja <<https://bugs.mysql.com/bug.php?id=21704>>.

### 3.4 Eu estou incapaz de importar despejos que eu criei com a ferramenta mysqldump embutida na distribuição do MySQL Server.[¶](#i-am-unable-to-import-dumps-i-created-with-the-mysqldump-tool-bundled-with-the-mysql-server-distribution "Link permanente para este título")

O problema é que versões mais antigas do `mysqldump` criam comentários inválidos assim:

```
-- MySQL dump 8.22
--
-- Host: localhost Database: database
---------------------------------------------------------
-- Server version 3.23.54
```

A parte inválida do código é a linha horizontal feita de traços que aparecem uma vez a cada dump criado com o mysqldump. Se você quiser rodar seu dump você terá que convertê-lo para MySQL válido. Isso quer dizer, você tem que adicionar um espaço em branco após os primeiros dois traços da linha ou adicionar um # antes dela: `-- -------------------------------------------------------` ou `#---------------------------------------------------------`

### 3.5 Quando uso pastas aninhadas, múltiplas hierarquias são exibidas de um jeito errado.[¶](#when-using-nested-folders-multiple-hierarchies-are-displayed-in-a-wrong-manner "Link permanente para este título")

Favor observe que você não deve usar strings de separação múltiplas vezes sem nenhum caractere entre elas, ou no começo/fim do nome da sua tabela. Se você precisar, considere usar outro TableSeparator ou desative esta função.

Ver também

[`$cfg['NavigationTreeTableSeparator']`](config.md#cfg_NavigationTreeTableSeparator)

### 3.6 (removido).[¶](#withdrawn-7 "Link permanente para este título")

### 3.7 Eu tenho tabelas com muitos campos (100+) e quando eu tento navegar nelas eu recebo uma série de erros como “Aviso: incapaz de converter url”. Como isso pode ser consertado?[¶](#i-have-table-with-many-100-columns-and-when-i-try-to-browse-table-i-get-series-of-errors-like-warning-unable-to-parse-url-how-can-this-be-fixed "Link permanente para este título")

Sua tabela não tem uma [primary key](glossary.md#term-primary-key) nem uma [unique key](glossary.md#term-unique-key), então nós temos que usar uma expressão longa para identificar este registro. Isso causa problemas para a função parse\_url. A solução é criar uma [primary key](glossary.md#term-primary-key) ou uma [unique key](glossary.md#term-unique-key).

### 3.8 Eu não consigo usar os formulários HTML (clicáveis) nos campos onde eu coloco a Transformação MIME![¶](#i-cannot-use-clickable-html-forms-in-columns-where-i-put-a-mime-transformation-onto "Link permanente para este título")

Devido a containers ao redor (para checkboxes de apagar multi-registros), nenhum formulário aninhado pode ser colocado dentro da tabela onde o phpMyAdmin mostra os resultados. Você pode, no entanto, usar qualquer formulário dentro de uma tabela se manter o container pai com o alvo para tbl\_row\_delete.php e apenas colocar seus próprios elementos input dentro. Se você usar um campo de submit personalizado, o formulário irá enviar a si próprio para a página de exibição novamente, onde você pode validar a $HTTP\_POST\_VARS em uma transformação. Para um tutorial em como usar efetivamente as transformações, veja nossa [seção de links](https://www.phpmyadmin.net/docs/) na página oficial do phpMyAdmin.

### 3.9 Eu recebo mensagens de erro quando uso “–sql\_mode=ANSI” no servidor MySQL.[¶](#i-get-error-messages-when-using-sql-mode-ansi-for-the-mysql-server "Link permanente para este título")

Quando o MySQL estiver rodando em modo de compatibilidade com ANSI, existem diferenças grandes em como o [SQL](glossary.md#term-sql) é estruturado (veja <<https://dev.mysql.com/doc/refman/5.7/en/sql-mode.html>>). Acima de tudo, o caractere de citação (”) é interpretado como um caractere identificador de citação e não como um caractere de citação de string, o que torna muitas operações internas do phpMyAdmin em instruções [SQL](glossary.md#term-sql) inválidas. Não há solução para este comportamento. Notícias para este item serão postadas na [issue #7383](https://github.com/phpmyadmin/phpmyadmin/issues/7383).

### 3.10 Homônimos e nenhuma chave primária: quando os resultados de um SELECT mostram mais de um registro com o mesmo valor (por exemplo `SELECT lastname FROM employees WHERE firstname LIKE 'A%'` e dois valores “Smith” são exibidos), se eu clico em Editar eu não posso ter certeza que eu estou editando o campo desejado.[¶](#homonyms-and-no-primary-key-when-the-results-of-a-select-display-more-that-one-column-with-the-same-value-for-example-select-lastname-from-employees-where-firstname-like-a-and-two-smith-values-are-displayed-if-i-click-edit-i-cannot-be-sure-that-i-am-editing-the-intended-row "Link permanente para este título")

Por favor, certifique-se de que sua tabela tenha uma [primary key](glossary.md#term-primary-key), para que o phpMyAdmin possa usá-la para os links Editar e Deletar.

### 3.11 O número de registros para as tabelas InnoDB não está correto.[¶](#the-number-of-rows-for-innodb-tables-is-not-correct "Link permanente para este título")

O phpMyAdmin usa um método rápido para chegar a contagem de registros, e este método somente retorna uma contagem aproximada no caso de tabelas InnoDB. Veja a [`$cfg['MaxExactCount']`](config.md#cfg_MaxExactCount) para um jeito de modificar estes resultados, mas isso pode ter um impacto sério no desempenho. Entretanto, pode-se facilmente trocar a contagem de linhas aproximadas pela contagem exata simplesmente clicando na contagem aproximada. Isso também pode ser feito por todas as tabelas de uma vez clicando na soma de linhas exibida na parte de baixo.

Ver também

[`$cfg['MaxExactCount']`](config.md#cfg_MaxExactCount)

### 3.12 (removido).[¶](#withdrawn-8 "Link permanente para este título")

### 3.13 Eu recebo um erro quando entro `USE` seguido de um nome de banco de dados contendo um hífen.[¶](#i-get-an-error-when-entering-use-followed-by-a-db-name-containing-an-hyphen "Link permanente para este título")

Os testes que eu fiz com o MySQL 5.1.49 mostram que a API não aceita esta sintaxe para o comando USE.

### 3.14 Eu não estou sendo capaz de navegar na tabela quando eu não tenho o direito de fazer SELECT em uma das colunas.[¶](#i-am-not-able-to-browse-a-table-when-i-don-t-have-the-right-to-select-one-of-the-columns "Link permanente para este título")

Esta tem sido uma limitação conhecida do phpMyAdmin desde o começo e não é provável que será resolvida no futuro.

### 3.15 (removido).[¶](#withdrawn-9 "Link permanente para este título")

### 3.16 (removido).[¶](#withdrawn-10 "Link permanente para este título")

### 3.17 (removido).[¶](#withdrawn-11 "Link permanente para este título")

### 3.18 Quando eu importo um arquivo CSV que contém múltiplas tabelas, elas são aglomeradas em uma única tabela.[¶](#when-i-import-a-csv-file-that-contains-multiple-tables-they-are-lumped-together-into-a-single-table "Link permanente para este título")

Não há um meio confiável de diferenciar tabelas no formato [CSV](glossary.md#term-csv). Por enquanto, você terá que quebrar os arquivos [CSV](glossary.md#term-csv) que contém múltiplas tabelas em arquivos menores.

### 3.19 Quando eu importo um arquivo e faço o phpMyAdmin determinar a estrutura de dados apropriada ele usa somente os tipos int, decimal e varchar.[¶](#when-i-import-a-file-and-have-phpmyadmin-determine-the-appropriate-data-structure-it-only-uses-int-decimal-and-varchar-types "Link permanente para este título")

Atualmente, o sistema de detecção de tipos de importação só consegue determinar estes tipos MySQL para colunas. No futuro, o mais provável é que serão adicionados, mas por enquanto você terá que editar a estrutura dada para suas preferências após a importação. Além disso, saiba que o phpMyAdmin usará o tamanho do maior item em qualquer dada coluna como o tamanho da coluna para o tipo apropriado. Se você sabe que adicionará itens maiores para aquela coluna então você deverá ajustar manualmente o tamanho das colunas de acordo. Isso é feito pelo bem da eficiência.

### 3.20 Depois de atualizar, alguns favoritos sumiram ou seu conteúdo não pode ser exibido.[¶](#after-upgrading-some-bookmarks-are-gone-or-their-content-cannot-be-shown "Link permanente para este título")

Em algum ponto, o conjunto de caracteres usados para armazenar conteúdo dos favoritos foi mudado. É melhor recriar seus favoritos a partir da nova versão do phpMyAdmin.

### 3.21 Não consigo fazer login com um nome de usuário contendo caracteres unicode, como á.[¶](#i-am-unable-to-log-in-with-a-username-containing-unicode-characters-such-as-a "Link permanente para este título")

Isso pode acontecer se o servidor MySQL não estiver configurado para usar utf-8 como codificação de caracteres padrão. Esta é uma limitação na forma em que o PHP e o servidor MySQL interagem; não há como o PHP configurar a codificação de caracteres antes da autenticação.

Ver também

[phpMyAdmin issue 12232](https://github.com/phpmyadmin/phpmyadmin/issues/12232),
[MySQL documentation note](https://www.php.net/manual/en/mysqli.real-connect.php#refsect1-mysqli.real-connect-notes)

## ISPs, instalações multi-usuário[¶](#isps-multi-user-installations "Link permanente para este título")

### 4.1 Eu sou um ISP. Eu posso instalar uma cópia central do phpMyAdmin ou eu preciso instalar ela para cada cliente?[¶](#i-m-an-isp-can-i-setup-one-central-copy-of-phpmyadmin-or-do-i-need-to-install-it-for-each-customer "Link permanente para este título")

Desde a versão 2.0.3, você pode instalar uma cópia central do phpMyAdmin para todos os usuários. O desenvolvimento dessa função foi gentilmente patrocinado pela NetCologne GmbH. Isso exige uma instação apropriada do gerenciamento de usuários do MySQL e a autenticação por cookie ou [HTTP](glossary.md#term-http) do phpMyAdmin.

Ver também

[Usando os modos de autenticação](setup.md#authentication-modes)

### 4.2 Qual o meio preferido de tornar o phpMyAdmin seguro contra acessos maliciosos?[¶](#what-s-the-preferred-way-of-making-phpmyadmin-secure-against-evil-access "Link permanente para este título")

Isso depende do seu sistema. Se você estiver rodando um servidor que não pode ser acessado por outras pessoas, é suficiente usar o diretório de proteção embutido com seu servidor web (com Apache você pode usar os arquivos [.htaccess](glossary.md#term-htaccess), por exemplo). Se outras pessoas tem acesso via telnet ao seu servidor, você deveria usar as funções de autenticação por [HTTP](glossary.md#term-http) ou cookie do phpMyAdmin.

Sugestões:

- Seu arquivo `config.inc.php` deve ser definido como `chmod 660`.
- Todos seus arquivos do phpMyAdmin devem ser definidos por chown -R phpmy.apche, onde phpmy é um usuário cuja senha é conhecida somente por você, e apache é o grupo dentro do qual o Apache roda.
- Siga as recomendações de segurança para o PHP e seu servidor web.

### 4.3 Eu recebo erros quanto a não ser capaz de incluir um arquivo em */lang* ou */libraries*.[¶](#i-get-errors-about-not-being-able-to-include-a-file-in-lang-or-in-libraries "Link permanente para este título")

Verifique o `php.ini`, ou peça ao administrador do seu sistema verificar. O `include_path` deve contém “.” em algum lugar dele, e `open_basedir`, se usada, deve conter “.” e “./lang” para permitir operação normal do phpMyAdmin.

### 4.4 O phpMyAdmin sempre dá um “Acesso negado” quando uso a autenticação por HTTP.[¶](#phpmyadmin-always-gives-access-denied-when-using-http-authentication "Link permanente para este título")

Isso pode acontecer por vários motivos:

- [`$cfg['Servers'][$i]['controluser']`](config.md#cfg_Servers_controluser) e/ou [`$cfg['Servers'][$i]['controlpass']`](config.md#cfg_Servers_controlpass) estão errados.
- O usuário/senha que você especificou no diálogo de login estão inválidos.
- Você já instalou um mecanismo de segurança no diretório do phpMyAdmin, ex: um arquivo [.htaccess](glossary.md#term-htaccess). Isso iria interferir com a autenticação do phpMyAdmin, então remova-o.

### 4.5 É possível deixar os usuários criar seus próprios bancos de dados?[¶](#is-it-possible-to-let-users-create-their-own-databases "Link permanente para este título")

A partir da versão 2.2.5, na página de gerenciamento de usuários, você pode inserir um nome coringa de banco de dados para um usuário (por exemplo “joe%”), e colocar os privilégios que você quiser. Por exemplo, adicionar `SELECT, INSERT, UPDATE, DELETE, CREATE, INDEX, ALTER` iria permitir um usuário criar/gerenciar o(s) banco(s) de dados dele(a).

### 4.6 Como eu posso usar as adições de autenticação baseada em host?[¶](#how-can-i-use-the-host-based-authentication-additions "Link permanente para este título")

Se você possui regras existentes em um arquivo [.htaccess](glossary.md#term-htaccess) antigo, você pode pegá-las e adicionar um nome de usuário entre as strings `deny/allow` e `'from'`. Usar o coringa de nome de usuário `'%'` pode ser um grande benefício aqui se sua instalação está adaptada para isso. Depois você pode simplesmente adicionar aquelas linhas atualizadas no array do [`$cfg['Servers'][$i]['AllowDeny']['rules']`](config.md#cfg_Servers_AllowDeny_rules).

Se você quer uma amostra pré-pronta, você pode experimentar este fragmento. Ele impede o usuário ‘root’ de logar a partir de qualquer rede diferente dos blocos de [IP](glossary.md#term-ip) de redes privadas.

```
//block root from logging in except from the private networks
$cfg['Servers'][$i]['AllowDeny']['order'] = 'deny,allow';
$cfg['Servers'][$i]['AllowDeny']['rules'] = [
    'deny root from all',
    'allow root from localhost',
    'allow root from 10.0.0.0/8',
    'allow root from 192.168.0.0/16',
    'allow root from 172.16.0.0/12',
];
```

### 4.7 A janela de autenticação é mostrada mais de uma vez, porque?[¶](#authentication-window-is-displayed-more-than-once-why "Link permanente para este título")

Isso acontece se você está usando a [URL](glossary.md#term-url) para iniciar o phpMyAdmin, o que é diferente da definida na sua [`$cfg['PmaAbsoluteUri']`](config.md#cfg_PmaAbsoluteUri). Por exemplo, um “www” faltando, ou entrar com um endereço [IP](glossary.md#term-ip) quando um nome de domínio é definido no arquivo de configuração.

### 4.8 Quais parâmetros podem ser usados na URL que inicia o phpMyAdmin?[¶](#which-parameters-can-i-use-in-the-url-that-starts-phpmyadmin "Link permanente para este título")

Ao iniciar o phpMyAdmin, você pode usar os parâmetros `db` e `server`. Este último pode conter tanto o índice numérico do host (de `$i` do arquivo de configuração) ou um dos nomes de host presentes no arquivo de configuração.

Por exemplo, para ir diretamente a um banco de dados específico, a URL pode ser construída como `https://example.com/phpmyadmin/?db=sakila`.

Ver também

[1.34 Eu posso acessar diretamente as páginas do banco de dados ou das tabelas?](#faq1-34)

Alterado na versão 4.9.0: O suporte ao uso dos parâmetros `pma_username` e `pma_password` foi removido no phpMyAdmin 4.9.0 (veja [PMASA-2019-4](https://www.phpmyadmin.net/security/PMASA-2019-4/)).

## Navegadores ou SO cliente[¶](#browsers-or-client-os "Link permanente para este título")

### 5.1 Eu recebo um erro falta de memória, e meus controles estão não-funcionais, quando tento criar uma tabela com mais de 14 colunas.[¶](#i-get-an-out-of-memory-error-and-my-controls-are-non-functional-when-trying-to-create-a-table-with-more-than-14-columns "Link permanente para este título")

Nós podemos reproduzir este problema somente no Win98/98SE. Testando no WinNT4 ou Win2K, nós podemos criar facilmente mais de 60 colunas. Uma solução é criar um número menor de colunas, então voltar às propriedades da sua tabela e adicionar as outras colunas.

### 5.2 Com o Xitami 2.5b4, o phpMyAdmin não processa campos de formulário.[¶](#with-xitami-2-5b4-phpmyadmin-won-t-process-form-fields "Link permanente para este título")

Este não é um problema do phpMyAdmin, mas um bug conhecido do Xitami: você encontrará ele com cada script/site que usar formulários. Atualize ou use uma versão mais antiga do seu servidor Xitami.

### 5.3 Eu tenho problemas quando despejo tabelas com o Konqueror (phpMyAdmin 2.2.2).[¶](#i-have-problems-dumping-tables-with-konqueror-phpmyadmin-2-2-2 "Link permanente para este título")

Com o Konqueror 2.1.1: despejos simples, dumps zip e gzip funcionam ok, exceto que o nome de arquivo proposto para o dump sempre é ‘tbl\_dump.php’. Os despejos bzip2 não parecem funcionar. Com o Konqueror 2.2.1: despejos simples funcionam; despejos zip são colocados no diretório temporário do usuário, então eles devem ser movidos antes de fechar o Konqueror, senão eles desaparecerão. Despejos gzip dão uma mensagem de erro. Testes precisam ser feitos no Konqueror 2.2.2.

### 5.4 Eu não consigo usar o modo de autenticação por cookie porque o Internet Explorer nunca armazena os cookies.[¶](#i-can-t-use-the-cookie-authentication-mode-because-internet-explorer-never-stores-the-cookies "Link permanente para este título")

O MS Internet Explorer parece ser muito problemático quanto a cookies, pelo menos até a versão 6.

### 5.5 (removido).[¶](#withdrawn-12 "Link permanente para este título")

### 5.6 (removido).[¶](#withdrawn-13 "Link permanente para este título")

### 5.7 Eu atualizo (recarrego) meu navegador, e volto para a página inicial.[¶](#i-refresh-reload-my-browser-and-come-back-to-the-welcome-page "Link permanente para este título")

Alguns navegadores suportam clique direito no frame que você quer atualizar, apenas faça isso no frame certo.

### 5.8 Com o Mozilla 0.9.7 eu tenho problemas em enviar uma query modificada para a caixa de query.[¶](#with-mozilla-0-9-7-i-have-problems-sending-a-query-modified-in-the-query-box "Link permanente para este título")

Parece um bug do Mozilla: 0.9.6 estava ok. Nós ficaremos de olho em futuras versões do Mozilla.

### 5.9 Com o Mozilla 0.9.? ao 1.0 e Netscape 7.0-PR1 eu não consigo inserir um espaço em branco na área de edição de query SQL: a página vai para baixo.[¶](#with-mozilla-0-9-to-1-0-and-netscape-7-0-pr1-i-can-t-type-a-whitespace-in-the-sql-query-edit-area-the-page-scrolls-down "Link permanente para este título")

Este é um bug do Mozilla (veja bug #26882 no [BugZilla](https://bugzilla.mozilla.org/)).

### 5.10 (removido).[¶](#withdrawn-14 "Link permanente para este título")

### 5.11 Caracteres ASCII extendidos como metafonias alemãs são exibidos errado.[¶](#extended-ascii-characters-like-german-umlauts-are-displayed-wrong "Link permanente para este título")

Favor garanta que você definiu o conjunto de caracteres do navegador para o arquivo de linguagem que você selecionou na página inicial do phpMyAdmin. Alternativamente, você pode tentar o modo de auto detecção que é suportado pelas versões recentes da maioria dos navegadores.

### 5.12 O navegador Safari do Mac OS X muda os caracteres especiais para “?”.[¶](#mac-os-x-safari-browser-changes-special-characters-to "Link permanente para este título")

This issue has been reported by a [macOS](glossary.md#term-macos) user, who adds that Chimera,
Netscape and Mozilla do not have this problem.

### 5.13 (removido)[¶](#withdrawn-15 "Link permanente para este título")

### 5.14 (removido)[¶](#withdrawn-16 "Link permanente para este título")

### 5.15 (removido)[¶](#withdrawn-17 "Link permanente para este título")

### 5.16 Com o Internet Explorer, eu recebo erros de JavaScript “Acesso negado”. Ou eu não consigo fazer o phpMyAdmin funcionar dentro do Windows.[¶](#with-internet-explorer-i-get-access-is-denied-javascript-errors-or-i-cannot-make-phpmyadmin-work-under-windows "Link permanente para este título")

Favor verifique os pontos a seguir:

- Talvez você tenha definido sua configuração [`$cfg['PmaAbsoluteUri']`](config.md#cfg_PmaAbsoluteUri) no arquivo `config.inc.php` para um endereço [IP](glossary.md#term-ip) e você está iniciando o phpMyAdmin com uma [URL](glossary.md#term-url) contendo um nome de domínio, ou a situação inversa.
- Configurações de segurança no IE e/ou Microsoft Security Center estão altas demais, bloqueando assim a execução dos scripts.
- O Firewall do Windows está bloqueando o Apache e o MySQL. Você deve permitir as portas [HTTP](glossary.md#term-http) (80 ou 443) e a porta do MySQL (normalmente 3306) nas direções “entrada” e “saída”.

### 5.17 Com o Firefox, eu não consigo deletar registros de dados ou eliminar um banco de dados.[¶](#with-firefox-i-cannot-delete-rows-of-data-or-drop-a-database "Link permanente para este título")

Muitos usuários tem confirmado que o plugin Tabbrowser Extensions que eles instalaram no Firefox estão causando o problema.

### 5.18 (removido)[¶](#withdrawn-18 "Link permanente para este título")

### 5.19 Eu recebo erros de JavaScript no meu navegador.[¶](#i-get-javascript-errors-in-my-browser "Link permanente para este título")

Problemas foram relatados com algumas combinações de extensões de navegador. Para soluções, desativa todas as extensões então limpe o cache do seu navegador para ver se o problema desaparece.

### 5.20 Eu recebo erros de violação da Política de Segurança de Conteúdo.[¶](#i-get-errors-about-violating-content-security-policy "Link permanente para este título")

Se você vê erros como:

```
Refused to apply inline style because it violates the following Content Security Policy directive
```

Isso geralmente é causado por algum software, que erroneamente reescreve cabeçalhos da *Content Security Policy*. Geralmente, isso é causado por um proxy antivírus ou complementos de navegador que causam tais erros.

Se você ver esses erros, tente desabilitar o proxy HTTP no antivírus ou desative a reescrita da *Content Security Policy* nele. Se isso não ajudar, tente desabilitar as extensões do navegador.

Alternativamente, isso também pode ser um problema de configuração do servidor (se o servidor web estiver configurado para emitir cabeçalhos da *Content Security Policy*, eles podem substituir os do phpMyAdmin).

Programas conhecidos por causar esse tipo de erro:

- Kaspersky Internet Security

### 5.21 Eu recebo erros de operação potencialmente insegura ao navegar na tabela ou executar uma consulta SQL.[¶](#i-get-errors-about-potentially-unsafe-operation-when-browsing-table-or-executing-sql-query "Link permanente para este título")

Se você vê erros como:

```
A potentially unsafe operation has been detected in your request to this site.
```

Isso geralmente é causado por um firewall de aplicações web fazendo um filtro de solicitações. Ele tenta evitar a injeção de SQL, no entanto o phpMyAdmin é uma ferramenta projetada para executar consultas SQL, portanto ele torna-o inutilizável.

Please allow phpMyAdmin scripts from the web application firewall settings
or disable it completely for phpMyAdmin path.

Programas conhecidos por causar esse tipo de erro:

- Firewall de Aplicações Web Wordfence

## Usando o phpMyAdmin[¶](#using-phpmyadmin "Link permanente para este título")

### 6.1 Eu não consigo inserir novos registros em uma tabela / Eu não consigo criar uma tabela - o MySQL traz um erro SQL.[¶](#i-can-t-insert-new-rows-into-a-table-i-can-t-create-a-table-mysql-brings-up-a-sql-error "Link permanente para este título")

examine o erro [SQL](glossary.md#term-sql) com cuidado. Frequentemente o problema é causado pela especificação de um tipo de coluna errado. Erros comuns incluem:

- Usar `VARCHAR` sem um argumento de tamanho
- Usar `TEXT` ou `BLOB` sem um argumento de tamanho

Além disso, olhe o capítulo de sintaxe no manual MySQL para confirmar que sua sintaxe está correta.

### 6.2 Quando eu crio uma tabela, eu defino um índice para duas colunas e o phpMyAdmin gera somente um índice com essas duas colunas.[¶](#when-i-create-a-table-i-set-an-index-for-two-columns-and-phpmyadmin-generates-only-one-index-with-those-two-columns "Link permanente para este título")

Este é o jeito de criar índices multi-coluna. Se você quer dois índices, crie o primeiro quando criar a tabela, salve, então exiba as propriedades da tabela e clica no link Índice para criar o outro índice.

### 6.3 Como eu posso interir um valor null na minha tabela?[¶](#how-can-i-insert-a-null-value-into-my-table "Link permanente para este título")

Desde a versão 2.2.3, você tem um checkbox para cada coluna que pode ser nula. Antes da 2.2.3, você tinha que colocar “null”, sem aspas, como um valor de coluna. Desde a versão 2.5.5, você tem que usar o checkbox para usar um valor NULL real, então se você entrar “NULL”, isso significará que você quer um valor literal NULL no campo, e não um valor NULL (isso funciona no PHP4).

### 6.4 Como eu posso fazer backup do meu banco de dados ou tabela?[¶](#how-can-i-backup-my-database-or-table "Link permanente para este título")

Clique no nome de um banco de dados ou tabela no painel de navegação, as propriedades serão exibidas. Entao no menu, clique em “Exportar”, você pode despejar a estrutura, os dados, ou ambos. Isso irá gerar instruções [SQL](glossary.md#term-sql) que podem ser usadas para recriar seu banco de dados/tabela. Você irá precisar escolher “Salvar como arquivo”, para que o phpMyAdmin possa transmitir o despejo resultante para sua estação. Dependendo da sua configuração PHP, você verá opções para comprimir o despejo. Veja também a variável de configuração [`$cfg['ExecTimeLimit']`](config.md#cfg_ExecTimeLimit). Para ajuda adicional neste assunto, procure pela palavra “despejo” neste documento.

### 6.5 Como eu posso restaurar (upload) meu banco de dados ou tabela usando um despejo? Como eu posso rodar um arquivo “.sql”?[¶](#how-can-i-restore-upload-my-database-or-table-using-a-dump-how-can-i-run-a-sql-file "Link permanente para este título")

Clique no nome de um banco de dados no painel de navegação, as propriedades serão exibidas. Selecione “Importar” da lista de abas no frame direito (ou “[SQL](glossary.md#term-sql)” se sua versão do phpMyAdmin for anterior a 2.7.0). Na seção “Localização do arquivo de texto”, digite o caminho do nome do seu arquivo de despejo, ou use o botão Buscar. Então clique em Ir. Com a versão 2.7.0, o motor de importação foi re-escrito, se possível é sugerido que você atualize para tirar vantagem das nova funções. Para ajuda adicional neste assunto, procure pela palavra “upload” neste documento.

Nota: Para erros ao importar dumps exportados de versões mais antigas do MySQL para versões mais recentes, verifique [6.41 Recebo erros de importação ao importar dumps exportados de versões anteriores do MySQL (pré-5.7.6) para versões mais novas (5.7.7+), mas eles funcionam bem quando importados de volta nas mesmas versões antigas?](#faq6-41).

### 6.6 Como eu posso usar a tabela de relações em query-por-exemplo?[¶](#how-can-i-use-the-relation-table-in-query-by-example "Link permanente para este título")

Aqui está um exemplo com as tabelas pessoas, cidades e países, todas localizadas no banco de dados “mydb”. Se você não tem uma tabela `pma_relation`, crie-a conforme explicado na seção de configuração. Entao crie as tabelas de exemplo:

```
CREATE TABLE REL_countries (
country_code char(1) NOT NULL default '',
description varchar(10) NOT NULL default '',
PRIMARY KEY (country_code)
) ENGINE=MyISAM;

INSERT INTO REL_countries VALUES ('C', 'Canada');

CREATE TABLE REL_persons (
id tinyint(4) NOT NULL auto_increment,
person_name varchar(32) NOT NULL default '',
town_code varchar(5) default '0',
country_code char(1) NOT NULL default '',
PRIMARY KEY (id)
) ENGINE=MyISAM;

INSERT INTO REL_persons VALUES (11, 'Marc', 'S', 'C');
INSERT INTO REL_persons VALUES (15, 'Paul', 'S', 'C');

CREATE TABLE REL_towns (
town_code varchar(5) NOT NULL default '0',
description varchar(30) NOT NULL default '',
PRIMARY KEY (town_code)
) ENGINE=MyISAM;

INSERT INTO REL_towns VALUES ('S', 'Sherbrooke');
INSERT INTO REL_towns VALUES ('M', 'Montréal');
```

Para configurar apropriadamente os links e exibição de informações:

- na tabela “REL\_persons” clique em Estrutura, depois Ver relações
- for “town\_code”, choose from dropdowns, “mydb”, “REL\_towns”, “town\_code”
  for foreign database, table and column respectively
- para “country\_code”, escolha entre dropdowns, “mydb”, “REL\_countries”, “country\_code” para bancos de dados estrangeiros, tabelas e colunas respectivamente
- na tabela “REL\_towns” clique em Estrutura, então Ver relações
- em “Escolha coluna a exibir”, escolha “descrição”
- repita os dois passos anteriores para a tabela “REL\_countries”

Então teste desse jeito:

- Clique no nome do seu banco de dados no painel de navegação
- Escolha “SQL”
- Use as tabelas: pessoas, cidades, países
- Clique em “Executar”
- Nos campos do registro, escolha persons.person\_name e clique na tickbox “Exibir”
- Faça o mesmo para towns.description e countries.descript nas outras 2 colunas
- Clique em “Executar” e você verá na caixa de query que as junções corretas foram geradas
- Clique em “Submit query”

### 6.7 Como eu posso usar a função “exibir coluna”?[¶](#how-can-i-use-the-display-column-feature "Link permanente para este título")

A partir do exemplo anterior, crie a `pma_table_info` como explicado na seção de configuração, então navegue na sua tabela de pessoas, e mova o mouse sobre o código de uma cidade ou país. Veja também [6.21 Em modo de edição/inserimento, como eu posso ver uma lista dos valores disponíveis para uma coluna, baseado em alguma tabela estrangeira?](#faq6-21) para uma função adicional que “exibir coluna” habilita: lista drop-down dos valores disponívels.

### 6.8 Como eu posso produzir um esquema PDF do meu banco de dados?[¶](#how-can-i-produce-a-pdf-schema-of-my-database "Link permanente para este título")

First the configuration variables “relation”, “table\_coords” and
“pdf\_pages” have to be filled in.

- Selecione seu banco de dados no painel de navegação.
- Choose “Designer” in the navigation bar at the top.
- Move the tables the way you want them.
- Choose “Export schema” in the left menu.
- The export modal will open.
- Select the type of export to [PDF](glossary.md#term-pdf), you may adjust the other settings.
- Submit the form and the file will start downloading.

Ver também

[Relações](relations.md#relations)

### 6.9 O phpMyAdmin está mudando o tipo de uma das minhas colunas![¶](#phpmyadmin-is-changing-the-type-of-one-of-my-columns "Link permanente para este título")

Não, é o MySQL que está fazendo uma [mudança silenciosa de tipo de coluna](https://dev.mysql.com/doc/refman/5.7/en/silent-column-changes.html).

### 6.10 Quando criar um privilégio, o que acontece com os sublinhados no nome do banco de dados?[¶](#when-creating-a-privilege-what-happens-with-underscores-in-the-database-name "Link permanente para este título")

Se você não colocar uma barra antes do sublinhado, isso é uma concessão de coringa, e o sublinhado significa “qualquer caractere”. Então, se o nome do banco de dados é “john\_db”, o usuário irá ganhar os direitos para john1db, john2db … Se você colocar uma barra antes do sublinhado, isso significa que o nome do banco de dados terá um sublinhado real.

### 6.11 O que é o curioso símbolo ø nas páginas das estatísticas?[¶](#what-is-the-curious-symbol-o-in-the-statistics-pages "Link permanente para este título")

Ele significa “média”.

### 6.12 Eu quero entender algumas opções de Exportação.[¶](#i-want-to-understand-some-export-options "Link permanente para este título")

**Estrutura:**

- “Adicionar DROP TABLE” irá adicionar uma linha dizendo ao MySQL para [eliminar a tabela](https://dev.mysql.com/doc/refman/5.7/en/drop-table.html), se ela já existir durante a importação. Ele NÃO elimina a tabela após você exportar, ele afeta somente o arquivo de importação.
- “Se Não Existe” irá criar a tabela somente se ela não existir. Caso contrário, você pode receber um erro se o nome da tabela existe mas tem uma estrutura diferente.
- “Adicionar valor AUTO\_INCREMENT” garante que o valor AUTO\_INCREMENT (se houver algum) será incluído no backup.
- “Envolver nomes de tabela e coluna com aspas” garante que os nomes de tabela e de coluna formados com caracteres especiais sejam protegidos.
- “Adicionar nos comentários” inclui comentários de coluna, relações, e tipos de mídia definidos no pmadb no despejo como comentários [SQL](glossary.md#term-sql) (*/\* xxx \*/*).

**Dados:**

- “Insert completo” adiciona os nomes de colunas em cada comando INSERT, para melhor documentação (mas com arquivo gerado maior).
- “Insert extendido” provê um arquivo de despejo menor usando somente uma vez o verbo INSERT e o nome da tabela.
- “Inserções atrasadas” são melhor explicadas no [manual do MySQL - Sintaxe do INSERT DELAYED](https://dev.mysql.com/doc/refman/5.7/en/insert-delayed.html).
- “Ignorar inserções” trata erros como um aviso em vez disso. Novamente, mais informações são fornecidas no [manual MySQL - Sintaxe do INSERT](https://dev.mysql.com/doc/refman/5.7/en/insert.html), mas basicamente com isso selecionado, valores inválidos são ajustados e inseridos em vez de causar falha na declaração inteira.

### 6.13 Eu gostaria de criar um banco de dados com um ponto no nome dele.[¶](#i-would-like-to-create-a-database-with-a-dot-in-its-name "Link permanente para este título")

Isso é uma má ideia, porque no MySQL a sintaxe “banco\_de\_dados.tabela” é o jeito normal de referenciar o nome de um banco de dados e de uma tabela. Pior, o MySQL normalmente deixará você criar um banco de dados com um ponto, mas então você não conseguirá usá-lo, nem deletá-lo.

### 6.14 (removido).[¶](#withdrawn-19 "Link permanente para este título")

### 6.15 Eu quero adicionar uma coluna BLOB e colocar um índice nela, mas o MySQL diz “Coluna BLOB ‘…’ usada na especificação da chave sem um comprimento de chave”.[¶](#i-want-to-add-a-blob-column-and-put-an-index-on-it-but-mysql-says-blob-column-used-in-key-specification-without-a-key-length "Link permanente para este título")

O jeito certo de fazer isso, é criar uma coluna sem qualquer índice, então exibir a estrutura da tabela e usar o diálogo “Criar um índice”. Nesta página, você será capaz de escolher sua coluna BLOB e definir um tamanho para o índice, o que é a condição para criar um índice numa coluna BLOB.

### 6.16 Como eu posso simplesmente percorrer a página com muitos campos editáveis?[¶](#how-can-i-simply-move-in-page-with-plenty-editing-fields "Link permanente para este título")

Você pode usar `Ctrl+arrows` (`Option+Arrows` no Safari) para mover na maioria das páginas com muitos campos editáveis (mudanças de estrutura de tabela, edição de campos, etc.).

### 6.17 Transformações: eu não consigo inserir meu próprio tipo de mime! Então para que serve este recurso?[¶](#transformations-i-can-t-enter-my-own-mimetype-what-is-this-feature-then-useful-for "Link permanente para este título")

Definir tipos MIME é inútil se você não pode colocar transformações neles. Caso contrário, você poderia simplesmente colocar um comentário na coluna. Pois inserir seu próprio tipo MIME causará sérios problemas de verificação de sintaxe e validação, isso introduz uma situação de entrada de usuário falsa de alto risco. Em vez disso, você precisa inicializar tipos MIME usando funções ou definições de tipo MIME vazias.

Além disso, você tem uma visão completa dos tipos de mime disponíveis. Quem sabe todos os tipos de mime de cor para poder inseri-los à vontade?

### 6.18 Favoritos: Onde posso guardar os favoritos? Por que não consigo ver nenhum favorito abaixo da caixa de consulta? Para que são essas variáveis?[¶](#bookmarks-where-can-i-store-bookmarks-why-can-t-i-see-any-bookmarks-below-the-query-box-what-are-these-variables-for "Link permanente para este título")

Você precisa ter configurado o [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables) para usar o recurso de favoritos. Depois de ter feito isso, você poderá usar os favoritos na aba SQL.

Ver também

[Favoritos](bookmarks.md#bookmarks)

### 6.19 Como eu posso criar um documento LATEX simples para incluir tabelas exportadas?[¶](#how-can-i-create-simple-latex-document-to-include-exported-table "Link permanente para este título")

Você pode simplesmente incluir a tabela no seu documento LATEX; o documento de amostra mínima deve se parecer com o seguinte (assumindo que você exportou a tabela no arquivo `table.tex`):

```
\documentclass{article} % or any class you want
\usepackage{longtable}  % for displaying table
\begin{document}        % start of document
\include{table}         % including exported table
\end{document}          % end of document
```

### 6.20 Eu vejo muitos bancos de dados que não são meus, e não posso acessá-los.[¶](#i-see-a-lot-of-databases-which-are-not-mine-and-cannot-access-them "Link permanente para este título")

Você tem um desses privilégios globais: CREATE TEMPORARY TABLES, SHOW DATABASES, LOCK TABLES. Estes privilégios também permitem os usuários ver todos os nomes de bancos de dados. Então se seus usuários não precisam destes privilégios, você pode removê-los e sua lista de bancos de dados irá encurtar.

Ver também

<<https://bugs.mysql.com/bug.php?id=179>>

### 6.21 Em modo de edição/inserimento, como eu posso ver uma lista dos valores disponíveis para uma coluna, baseado em alguma tabela estrangeira?[¶](#in-edit-insert-mode-how-can-i-see-a-list-of-possible-values-for-a-column-based-on-some-foreign-table "Link permanente para este título")

Você tem que configurar links apropriados entre as tabelas, e também configurar a “mostrar campo” na tabela estrangeira. Veja a [6.6 Como eu posso usar a tabela de relações em query-por-exemplo?](#faq6-6) para um exemplo. Então, se houver 100 valores ou menos na tabela estrangeira, uma lista drop-down de valores estará disponível. Você verá duas listas de valores, a primeira lista contendo a chave e a coluna exibida, a segunda lista contendo a coluna exibida e a chave. O motivo para isso é ser capaz de digitar a primeira letra de uma das chaves ou a chave de uma das colunas exibidas. Para 100 valores ou mais, uma janela distinta aparecerá, para navegar pelos valores de chaves estangeiras e escolher um. Para mudar o limite padrão de 100, veja a configuração [`$cfg['ForeignKeyMaxLimit']`](config.md#cfg_ForeignKeyMaxLimit).

### 6.22 Marcações: eu posso executar uma marcação padrão automaticamente quando entrar no modo Procurar para uma tabela?[¶](#bookmarks-can-i-execute-a-default-bookmark-automatically-when-entering-browse-mode-for-a-table "Link permanente para este título")

Sim. Se uma marcação tiver o mesmo rótulo que o nome da tabela e não for uma marcação pública, ela será executada.

Ver também

[Favoritos](bookmarks.md#bookmarks)

### 6.23 Exportar: eu ouvi falar que o phpMyAdmin pode exportar arquivos do MS Excel?[¶](#export-i-heard-phpmyadmin-can-export-microsoft-excel-files "Link permanente para este título")

Você pode usar o [CSV](glossary.md#term-csv) para o MS Excel, que funciona fora da caixa.

Alterado na versão 3.4.5: Desde o phpMyAdmin 3.4.5 o suporte a exportação direta para Microsoft Excel 97 e mais novos foi removida.

### 6.24 Agora que o phpMyAdmin suporta comentários nativos de coluna MySQL 4.1.x, o que acontece com os comentários das minhas colunas armazenados no pmadb?[¶](#now-that-phpmyadmin-supports-native-mysql-4-1-x-column-comments-what-happens-to-my-column-comments-stored-in-pmadb "Link permanente para este título")

Migração automática de comentários de coluna de tabela estilo pmadb para os nativos é feita sempre que você entrar na página da Estrutura para esta tabela.

### 6.25 (removido).[¶](#withdrawn-20 "Link permanente para este título")

### 6.26 Como eu posso selecionar um conjunto de registros?[¶](#how-can-i-select-a-range-of-rows "Link permanente para este título")

Clique no primeiro registro do conjunto, segure a tecla Shift e clique no último registro do conjunto. Isso funciona em todos os lugares que você ver registros, por exemplo, no modo Procurar ou na página Estrutura.

### 6.27 Quais strings de formatação eu posso usar?[¶](#what-format-strings-can-i-use "Link permanente para este título")

In all places where phpMyAdmin accepts format strings, you can use
`@VARIABLE@` expansion and [strftime](https://www.php.net/strftime)
format strings. The expanded variables depend on a context (for
example, if you haven’t chosen a table, you can not get the table
name), but the following variables can be used:

`@HTTP_HOST@`
:   Host HTTP que roda o phpMyAdmin

`@SERVER@`
:   Nome do servidor MySQL

`@VERBOSE@`
:   Nome extenso do servidor MySQL como definido em [`$cfg['Servers'][$i]['verbose']`](config.md#cfg_Servers_verbose)

`@VSERVER@`
:   Nome extenso do servidor MySQL se definido, normal caso contrário

`@DATABASE@`
:   Banco de dados atualmente aberto

`@TABLE@`
:   Tabela atualmente aberta

`@COLUMNS@`
:   Colunas da tabela atualmente aberta

`@PHPMYADMIN@`
:   phpMyAdmin com a versão

### 6.28 (withdrawn).[¶](#withdrawn-21 "Link permanente para este título")

### 6.29 Porque eu não consigo gerar um gráfico da tabela de resultados da minha query?[¶](#why-can-t-i-get-a-chart-from-my-query-result-table "Link permanente para este título")

Nem toda tabela pode ser colocada em gráfico. Somente tabelas com uma, duas ou três colunas podem ser visualizadas em gráfico. Além disso, a tabela deve estar em um formato especial para o script de gráfico entendê-la. Formatos atualmente suportados podem ser encontrados em [Gráficos](charts.md#charts).

### 6.30 Importação: Como posso importar Shapefiles ESRI?[¶](#import-how-can-i-import-esri-shapefiles "Link permanente para este título")

Um Shapefile ESRI é na verdade um conjunto de vários arquivos, onde o arquivo .shp contém dados geométricos e o arquivo .dbf contém dados relacionados a estes dados geométricos. Para ler dados do arquivo .dbf você tem que compilar o PHP com a extensão dBase (–enable-dbase). Caso contrário, somente os dados geométricos serão importados.

Para subir estes conjuntos de arquivos você pode usar um dos seguintes métodos:

Configurar o diretório de upload com a configuração [`$cfg['UploadDir']`](config.md#cfg_UploadDir), suba ambos arquivos .shp e .dbf com o mesmo nome de arquivo e escolha o arquivo .shp da página de importação.

Crie um arquivo zip com os arquivos .shp e .dbf e importe-os. Para isto funcionar, você precisa definir [`$cfg['TempDir']`](config.md#cfg_TempDir) para um lugar onde o usuário do servidor web possa escrever (por exemplo `'./tmp'`).

Para criar um diretório temporário em um sistema baseado em UNIX, você pode fazer:

```
cd phpMyAdmin
mkdir tmp
chmod o+rwx tmp
```

### 6.31 Como eu posso criar uma relação no Designer?[¶](#how-do-i-create-a-relation-in-designer "Link permanente para este título")

Para selecionar a relação, clique na coluna exibida em rosa. Para marcar/desmarcar uma coluna como a coluna exibida, clique no ícone “Escolher coluna a exibir”, então clique no nome da coluna apropriada.

### 6.32 Como eu posso usar a função de zoom de pesquisa?[¶](#how-can-i-use-the-zoom-search-feature "Link permanente para este título")

A função de zoom de pesquisa é uma alternativa para a função de pesquisa de tabela. Ela permite você explorar uma tabela representando seus dados em um scatter plot. Você pode localizar esta função selecionando uma tabela e clicando na aba Search. Uma das sub-abas na página Table Search é a Zoom Search.

Considere a tabela REL\_persons na [6.6 Como eu posso usar a tabela de relações em query-por-exemplo?](#faq6-6) para um exemplo. Para usar a zoom search, duas colunas precisam ser selecionadas, por exemplo, id e town\_code. Os valores da id irão ser representados em um eixo e os valores town\_code no outro eixo. Cada registro será representado como um ponto em um gráfico cartesiano baseado em sua id e town\_code. Você pode incluir dois critérios de pesquisa adicionais além dos dois campos a exibir.

Você pode escolher qual campo deve ser mostrado como rótulo para cada ponto. Se uma coluna exibida foi definida para a tabela (veja a [6.7 Como eu posso usar a função “exibir coluna”?](#faqdisplay)), ela será considerada como o rótulo a não ser que você especifique o contrário. Você também pode selecionar o número máximo de registros que você quer exibir no gráfico especificando ele no campo “Limite de registros a usar”. Assim que você escolher seus critérios, clique em “Ir” para mostrar o gráfico.

After the plot is generated, you can use the
mouse wheel to zoom in and out of the plot. In addition, panning
feature is enabled to navigate through the plot. You can zoom-in to a
certain level of detail and use panning to locate your area of
interest. Clicking on a point opens a dialogue box, displaying field
values of the data row represented by the point. You can edit the
values if required and click on submit to issue an update query. Basic
instructions on how to use can be viewed by clicking the ‘How to use?’
link located just above the plot.

### 6.33 Quando navego por uma tabela, como posso copiar o nome de uma coluna?[¶](#when-browsing-a-table-how-can-i-copy-a-column-name "Link permanente para este título")

Selecionando o nome da coluna dentro do cabeçalho da navegação de tabela para copiar é difícil, já que as colunas suportam reordenamento pelo arrastar das células do cabeçalho assim como a ordenação de campos clicando no link do nome da coluna. Para copiar um nome de coluna, dê um clique duplo na área vazia próxima ao nome da coluna quando a tooltip te aconselhar a fazer isso. Isso irá lhe mostrar uma caixa de input com o nome da coluna. Você pode dar um clique direito no nome da coluna dentro desta caixa de input para copiá-lo para sua área de transferência.

### 6.34 Como eu posso usar a função de Tabelas Favoritas?[¶](#how-can-i-use-the-favorite-tables-feature "Link permanente para este título")

A função Tabelas Favoritas é muito semelhante à função Tabelas Recentes. Permite adicionar um atalho às tabelas frequentemente usadas em qualquer base de dados no painel de navegação. Você pode acessar facilmente qualquer tabela na listagem apenas escolhendo-a. Estas tabelas serão colocadas no armazenamento local do seu navegador se você não tiver configurado seu phpMyAdmin Configuration Storage. Se tiver, serão armazenadas no phpMyAdmin Configuration Storage.

IMPORTANTE: Na falta do phpMyAdmin Configuration Storage, suas tabelas Favoritas poderão ser diferentes em navegadores diferentes baseado no que foi selecionado em cada navegador.

Para adicionar um tabela à lista de Favoritos, simplesmente clique na estrela Gray em frente ao nome da tabela na listagem de tabelas de um Banco de Dados e espere até que se torne Yellow. Para remover uma tabela da lista, simplesmente clique na estrela Yellow e espere até que se torne Gray novamente.

Usando [`$cfg['NumFavoriteTables']`](config.md#cfg_NumFavoriteTables) no seu arquivo `config.inc.php`, você pode definir um número máximo de tabelas favoritas exibidas no painel de navegação. Seu valor padrão é 10.

### 6.35 Como eu posso usar a ferramenta de pesquisa Range?[¶](#how-can-i-use-the-range-search-feature "Link permanente para este título")

Com a ajuda da ferramenta de pesquisa de campo, pode-se especificar um alcance de valores para uma(s) coluna(s) particular enquanto executa-se uma operação de pesquisa numa tabela através da tab Pesquisa.

Para usar essa ferramenta simplesmente clique nos operadores BETWEEN ou NOT BETWEEN pelo operador de lista selecionada em frente do nome da coluna. Escolhendo uma das opções acima, uma caixa de diálogo aparecerá pedindo pelo valor Mínimo e Máximo para aquela coluna. Somente o alcance especificado de valores será incluído no caso de BETWEEN e excluído no caso de NOT BETWEEN dos resultados finais.

Nota: A ferramenta de pesquisa Range trabalhará somente colunas de tipo de dados Numérico e Data.

### 6.36 O que é colunas Central e como eu posso usar essa ferramenta?[¶](#what-is-central-columns-and-how-can-i-use-this-feature "Link permanente para este título")

Como o nome sugere, a ferramenta de colunas Central habilita a manter uma lista central de colunas por banco de dados para evitar nome similar para o mesmo elemento de dado e traz a consistência do tipo de dado para o mesmo elemento de dado. Você pode usar a lista central de colunas para adicionar um elemento para qualquer estrutura de tabela naquele banco de dados que gravará escrevendo um nome de coluna similar e uma definição de coluna.

Para adicionar uma coluna para a lista central, vá para a página de estrutura de tabela, cheque as colunas que você quer incluir e então simplesmente clique em “Adicionar para colunas centrais”. Se você quiser adicionar todas as colunas únicas de mais de uma tabela de um banco de dados então vá para a página de estrutura de dados, cheque as tabelas que você quer incluir e então selecione “Adicionar colunas para a lista central”.

Para remover uma coluna da lista central, vá para a página de estrutura de Tabela, selecione as colunas que você quer remover e então simplesmente clique em “Remover das colunas centrais”. Se você quiser remover todas as colunas de mais de uma tabela de um banco de dados então vá para a página de estrutura do banco de dados, selecione as tabelas que você quiser incluir e então selecione “Remover colunas da lista central”.

Para exibir e gerenciar a lista central, selecione o banco de dados em que você quiser gerenciar as colunas centrais para então clicar pelo menu em “colunas Central”. Você será levado para a página onde você terá opções para editar, deletar ou adicionar novas colunas para a lista central.

### 6.37 Como eu posso usar a ferramenta de estrutura de Tabela de Improviso?[¶](#how-can-i-use-improve-table-structure-feature "Link permanente para este título")

Melhorar a ferramenta de estrutura de tabela ajuda a trazer a estrutura de tabela até o Formulário Normal Terceirizado. Uma mágica é apresentada ao usuário que formula perguntas sobre os elementos durante os vários passos para normalização e uma nova estrutura é proposta de acordo com o que traz a tabela dentro formulário Normal Primeiro/Segundo/Terceiro. Na inicialização da mágica, o usuário retorna para selecionar até o formulário normal que eles quiserem para normalizar a estrutura da tabela.

Aqui está uma tabela de exemplo que você pode usar para testar todos os três Primeiro, Segundo e Terceiro Formulários Normais.

```
CREATE TABLE `VetOffice` (
 `petName` varchar(64) NOT NULL,
 `petBreed` varchar(64) NOT NULL,
 `petType` varchar(64) NOT NULL,
 `petDOB` date NOT NULL,
 `ownerLastName` varchar(64) NOT NULL,
 `ownerFirstName` varchar(64) NOT NULL,
 `ownerPhone1` int(12) NOT NULL,
 `ownerPhone2` int(12) NOT NULL,
 `ownerEmail` varchar(64) NOT NULL,
);
```

A tabela acima não está no Primeiro Formulário normal quando nenhuma [primary key](glossary.md#term-primary-key) existe. Chave primária é suposta a ser (petName, ownerLastName, ownerFirstName). Se a [primary key](glossary.md#term-primary-key) é escolhida como sugerido na tabela resultante não será no Segundo como também no Terceiro Formulário Normal quando as dependências seguintes existirem.

```
(OwnerLastName, OwnerFirstName) -> OwnerEmail
(OwnerLastName, OwnerFirstName) -> OwnerPhone
PetBreed -> PetType
```

Como diz, OwnerEmail depende de OwnerLastName e de OwnerFirstName. OwnerPhone depende de OwnerLastName e de OwnerFirstName. PetType depende de PetBreed.

### 6.38 Como posso reatribuir valores de auto-incremento?[¶](#how-can-i-reassign-auto-incremented-values "Link permanente para este título")

Alguns usuários preferem que seus valores de AUTO\_INCREMENT sejam consecutivos; isso não é sempre o caso após apagar uma linha.

Aqui estão os passos para realizar isso. Esses são passos manuais porque eles envolvem uma verificação manual em um ponto.

- Certifique-se de que você tem acesso exclusivo à tabela para reorganizar
- Na sua coluna de [primary key](glossary.md#term-primary-key) (ex: id), remova a configuração AUTO\_INCREMENT
- Apague sua chave primária em Estrutura > índices
- Crie uma nova coluna futuro\_id como chave primária, AUTO\_INCREMENT
- Navegue até sua tabela e verifique que os novos incrementos correspondam ao que você está esperando
- Remova sua antiga coluna id
- Renomeie a coluna futuro\_id para id
- Mova a nova coluna id através de Estrutura > Mover colunas

### 6.39 O que é a opção “Ajustar privilégios” ao renomear, copiar ou mover um banco de dados, tabela, coluna ou procedimento?[¶](#what-is-the-adjust-privileges-option-when-renaming-copying-or-moving-a-database-table-column-or-procedure "Link permanente para este título")

Ao renomear/copiar/mover um banco de dados/tabela/coluna/procedimento, o MySQL não ajusta os privilégios originais relacionados a esses objetos por conta própria. Ao selecionar esta opção, o phpMyAdmin ajustará a tabela de privilégios para que os usuários tenham os mesmos privilégios nos novos itens.

Por exemplo: o usuário [‘bob’@’localhost](mailto:'bob'%40'localhost)’ tem o privilégio ‘SELECT’ em uma coluna chamada ‘id’. Agora se esta coluna for renomeada para ‘id\_new’, o MySQL, por conta própria, **não** ajustará os privilégios da coluna ao novo nome da coluna. O phpMyAdmin pode fazer este ajuste para você automaticamente.

Notas:

- Ao ajustar os privilégios para um banco de dados, os privilégios de todos os elementos relacionados ao banco de dados (tabelas, colunas e procedimentos) também são ajustados ao novo nome do banco de dados.
- Da mesma forma, ao ajustar privilégios para uma tabela, os privilégios de todas as colunas dentro da nova tabela também são ajustados.
- Ao ajustar privilégios, o usuário que executa a operação **deve** ter os seguintes privilégios:
  - Privilégios de SELECT, INSERT, UPDATE e DELETE nas seguintes tabelas: mysql.`db`, mysql.`columns\_priv`, mysql.`tables\_priv`, mysql.`procs\_priv`
  - Privilégio de FLUSH (GLOBAL)

Assim, se você deseja replicar o banco de dados/tabela/coluna/procedimento tal como ele é ao renomear/copiar/mover esses objetos, certifique-se de que essa opção esteja marcada.

### 6.40 Vejo a caixa de seleção “Ligar parâmetros” na página “SQL”. Como faço para escrever consultas SQL parametrizadas?[¶](#i-see-bind-parameters-checkbox-in-the-sql-page-how-do-i-write-parameterized-sql-queries "Link permanente para este título")

A partir da versão 4.5, o phpMyAdmin permite aos usuários executar consultas parametrizadas na página “SQL”. Os parâmetros devem ser prefixados com dois pontos (:) e quando a caixa de seleção “Ligar parâmetros” estiver marcada, esses parâmetros serão identificados e os campos de entrada para esses parâmetros serão apresentados. Os valores inseridos nesses campos serão substituídos na consulta antes de serem executados.

### 6.41 Recebo erros de importação ao importar dumps exportados de versões anteriores do MySQL (pré-5.7.6) para versões mais novas (5.7.7+), mas eles funcionam bem quando importados de volta nas mesmas versões antigas?[¶](#i-get-import-errors-while-importing-the-dumps-exported-from-older-mysql-versions-pre-5-7-6-into-newer-mysql-versions-5-7-7-but-they-work-fine-when-imported-back-on-same-older-versions "Link permanente para este título")

Se você receber erros como *#1031 - O mecanismo de armazenamento de tabelas para ‘nome\_da\_tabela’ não possui esta opção* ao importar os dumps exportados de servidores MySQL pré-5.7.7 para versões do MySQL 5.7.7+, pode ser porque ROW\_FORMAT = FIXED não é suportado em tabelas InnoDB. Além disso, o valor de [innodb\_strict\_mode](https://dev.mysql.com/doc/refman/5.7/en/innodb-parameters.html#sysvar_innodb_strict_mode) definirá se isso será relatado como um aviso ou como um erro.

Desde a versão 5.7.9 do MySQL, o valor padrão para innodb\_strict\_mode é ON e, portanto, gerará um erro quando uma instrução CREATE TABLE ou ALTER TABLE desse tipo for encontrada.

Existem duas maneiras de prevenir tais erros ao importar:

- Mudar o valor de innodb\_strict\_mode para OFF antes de iniciar a importação e mudar para ON depois que a importação for concluída com sucesso.
- Isso pode ser obtido de duas maneiras:
  - Vá para a página ‘Variáveis’ e edite o valor de innodb\_strict\_mode
  - Execute a consulta: SET GLOBAL `innodb\_strict\_mode = ‘[value]’`

Depois que a importação for concluída, sugere-se que o valor de innodb\_strict\_mode seja resetado para o valor original.

## Projeto phpMyAdmin[¶](#phpmyadmin-project "Link permanente para este título")

### 7.1 Eu encontrei um bug. Como eu informo ele aos desenvolvedores?[¶](#i-have-found-a-bug-how-do-i-inform-developers "Link permanente para este título")

Nosso rastreador de problemas está localizado em <<https://github.com/phpmyadmin/phpmyadmin/issues>>. Para questões de segurança, consulte as instruções em <<https://www.phpmyadmin.net/security>> para enviar um e-mail diretamente aos desenvolvedores.

### 7.2 Eu quero traduzir as mensagens para uma nova língua ou atualizar uma língua existente, onde eu começo?[¶](#i-want-to-translate-the-messages-to-a-new-language-or-upgrade-an-existing-language-where-do-i-start "Link permanente para este título")

As traduções são muito bem-vindas e tudo o que você precisa ter é a habilidade da tradução. O meio mais fácil é usar nosso [serviço de tradução online](https://hosted.weblate.org/projects/phpmyadmin/). Você pode querer olhar todas as possibilidades de tradução na [seção traduzir no nosso site](https://www.phpmyadmin.net/translate/).

### 7.3 Eu gostaria de ajudar com o desenvolvimento do phpMyAdmin. O que eu devo fazer?[¶](#i-would-like-to-help-out-with-the-development-of-phpmyadmin-how-should-i-proceed "Link permanente para este título")

Nós agradecemos toda a contribuição para o desenvolvimento do phpMyAdmin. Você pode olhar todas as possibilidades de contribuição na [seção de contribuições no nosso site](https://www.phpmyadmin.net/contribute/).

Ver também

[Informações aos Desenvolvedores](developers.md#developers)

## Segurança[¶](#security "Link permanente para este título")

### 8.1 Onde eu posso conseguir informações quando a alertas de segurança emitidos para o phpMyAdmin?[¶](#where-can-i-get-information-about-the-security-alerts-issued-for-phpmyadmin "Link permanente para este título")

Favor verifique a página <<https://www.phpmyadmin.net/security/>>.

### 8.2 Como eu posso proteger o phpMyAdmin contra ataques de força bruta?[¶](#how-can-i-protect-phpmyadmin-against-brute-force-attacks "Link permanente para este título")

Se você usa o servidor web Apache, o phpMyAdmin exporta informações sobre autenticação para o ambiente Apache e isso pode ser usado nos logs do Apache. Atualmente existem duas variáveis disponíveis:

`userID`
:   Nome de usuário do usuário atualmente ativo (não precisa estar logado).

`userStatus`
:   Status do usuário atualmente ativo, um destes: `ok` (usuário está logado), `mysql-denied` (o MySQL negou o login do usuário), `allow-denied` (usuário negado por regras allow/deny), `root-denied` (root negado na configuração), `empty-denied` (senha vazia é negada).

Diretiva `LogFormat` para o Apache pode parecer com o seguinte:

```
LogFormat "%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\" %{userID}n %{userStatus}n"   pma_combined
```

Você pode usar depois qualquer ferramenta de análise de log para detectar possíveis tentativas de invasão.

### 8.3 Por que existem caminhos sendo exibidos ao carregar diretamente determinados arquivos?[¶](#why-are-there-path-disclosures-when-directly-loading-certain-files "Link permanente para este título")

Esse é um problema de configuração do servidor. Nunca habilite `display_errors` em um site de produção.

### 8.4 Os arquivos CSV exportados do phpMyAdmin podem permitir um ataque de injeção de fórmula.[¶](#csv-files-exported-from-phpmyadmin-could-allow-a-formula-injection-attack "Link permanente para este título")

É possível gerar um arquivo [CSV](glossary.md#term-csv) que, ao ser importado para um programa de planilhas como o Microsoft Excel, poderia potencialmente permitir a execução de comandos arbitrários.

Os arquivos CSV gerados pelo phpMyAdmin podem potencialmente conter texto que seria interpretado por um programa de planilhas como uma fórmula, mas não acreditamos que escapar esses campos seja o comportamento apropriado. Não há como escapar e diferenciar apropriadamente entre uma saída de texto desejada e uma fórmula que deveria ser escapada, e o CSV é um formato de texto onde definições de função não deveriam ser interpretadas, de qualquer forma. Nós discutimos isso extensivamente e acreditamos que, ao invés disso, é responsabilidade do programa de planilhas analisar e tratar adequadamente tais dados na entrada.

O Google também tem uma [visão similar](https://sites.google.com/site/bughunteruniversity/nonvuln/csv-excel-formula-injection).

## Sincronização[¶](#synchronization "Link permanente para este título")

### 9.1 (removido).[¶](#withdrawn-22 "Link permanente para este título")

### 9.2 (removido).[¶](#withdrawn-23 "Link permanente para este título")
