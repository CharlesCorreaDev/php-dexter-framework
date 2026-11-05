# Atualizando da versão 2.2 para 2.4 - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/pt-br/upgrading.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md)

# Atualizando da versão 2.2 para 2.4

Para auxiliar os usuários na atualização, mantemos um documento
que descreve informações essenciais para usuários existentes do Servidor HTTP
Apache. Estas notas são breves e você poderá encontrar
mais informações no documento [Novas Funcionalidades](new_features_2_4.md) ou no
arquivo `src/CHANGES`. Desenvolvedores de aplicações e módulos
podem encontrar um resumo das alterações da API na [Visão geral de atualizações da API](developer__new_api_2_4.md).

Este documento descreve alterações no comportamento do servidor que podem
exigir que você altere sua configuração ou a forma como usa o servidor
para continuar usando a versão 2.4 da mesma forma que usa a versão 2.2.
Para aproveitar os novos recursos da versão 2.4, consulte o documento sobre Novas
Funcionalidades.

Este documento descreve apenas as alterações da versão 2.2 para a 2.4. Se você
estiver atualizando da versão 2.0, também deverá consultar o [Documento de Atualização
da versão 2.0 para 2.2](http://http://httpd.apache.org/docs/2.2/upgrading.html).

- ![](./images/down.gif) [Alterações na Configuração no Momento da Compilação](#compile-time)
- ![](./images/down.gif) [Alterações na Configuração no Momento da Execução](#run-time)
- ![](./images/down.gif) [Alterações Miscelâneas](#misc)
- ![](./images/down.gif) [Módulos de Terceiros](#third-party)
- ![](./images/down.gif) [Problemas comuns ao atualizar](#commonproblems)

### Veja também

- [Visão geral das novas funcionalidades
  no Servidor HTTP Apache 2.4](new_features_2_4.md)

[![top](./images/up.gif)](#page-header)

## Alterações na Configuração no Momento da Compilação [¶](#compile-time "Link permanente")

O processo de compilação é muito semelhante ao usado na
versão 2.2. Sua antiga linha de comando `configure`
(encontrada em `build/config.nice` no diretório do servidor
instalado) pode ser usada na maioria dos casos. Há algumas alterações nas
configurações padrão. Alguns detalhes das alterações:

- Estes módulos foram removidos: mod\_authn\_default,
  mod\_authz\_default, mod\_mem\_cache. Se você estava usando
  mod\_mem\_cache na versão 2.2, consulte `mod_cache_disk`
  na versão 2.4.
- Todas as implementações de balanceamento de carga foram movidas para
  submódulos individuais e independentes do mod\_proxy, por exemplo:
  `mod_lbmethod_bybusyness`. Você pode precisar
  compilar e carregar qualquer um desses que sua configuração
  utiliza.
- O suporte à plataforma foi removido para BeOS, TPF e
  até mesmo plataformas mais antigas, como A/UX, Next e Tandem. Acredita-se
  que estas já não estivessem funcionando corretamente.
- configure: módulos dinâmicos (DSO) são compilados por padrão.
- configure: por padrão, apenas um conjunto básico de módulos é carregado. As
  outras diretivas `LoadModule` estão comentadas
  no arquivo de configuração.
- configure: o conjunto de módulos "most" ("maioria") é compilado por padrão
- configure: o conjunto de módutos "reallyall" ("realmente todos") adiciona os módulos de desenvolvedor
  ao conjunto "all" ("todos")

[![top](./images/up.gif)](#page-header)

## Alterações na Configuração no Momento da Execução [¶](#run-time "Link permanente")

Houve mudanças significativas na configuração de autorização e outras
pequenas alterações de configuração que podem exigir alterações em seus arquivos
de configuração da versão 2.2 antes de usá-los na versão 2.4.

### Autorização

Qualquer arquivo de configuração que utilize autorização provavelmente
precisará de alterações.

Você deve revisar a seção [Como Fazer: Autenticação,
Autorização e Controle de Acesso](howto__auth.md), especialmente a parte
[Além da simples autorização](howto__auth.md#beyond)
que explica os novos mecanismos para controlar a ordem
em que as diretivas de autorização são aplicadas.

As diretivas que controlam como os módulos de autorização respondem quando
não correspondem ao usuário autenticado foram removidas: Isso inclui
AuthzLDAPAuthoritative, AuthzDBDAuthoritative, AuthzDBMAuthoritative,
AuthzGroupFileAuthoritative, AuthzUserAuthoritative,
e AuthzOwnerAuthoritative. Essas diretivas foram substituídas pelas
diretivas mais expressivas `RequireAny`,
`RequireNone` e
`RequireAll`.

Se você usa `mod_authz_dbm`, você deve migrar sua
configuração para usar `Require dbm-group ...` em vez de
`Require group ...`.

#### Controle de acesso

Na versão 2.2, o controle de acesso baseado no nome do host do cliente, no endereço IP,
e em outras características das solicitações do cliente era feito usando as
diretivas `Order`, `Allow`, `Deny` e `Satisfy`.

Na versão 2.4, esse controle de acesso é feito da mesma forma que outras
verificações de autorização, usando o novo módulo
`mod_authz_host`. Os antigos padrões de controle de acesso
devem ser substituídos pelos novos mecanismos de autenticação,
embora, para compatibilidade com configurações antigas, o novo
módulo `mod_access_compat` seja fornecido.

### Misturando diretivas antigas com novas

Misturar diretivas antigas como `Order`, `Allow` ou `Deny` com novas como
`Require` é possível tecnicamente porém
não é recomendado. `mod_access_compat` foi criado para suportar
configurações que contêm somente diretivas antigas para facilitar a migração para a versão 2.4.
Favor verificar os exemplos abaixo para ter uma ideia melhor sobre os problemas que podem surgir.

Aqui estão alguns exemplos de maneiras antigas e novas de fazer o mesmo
controle de acesso.

Neste exemplo, não há autenticação e todas as solicitações são negadas.

### Configuração na versão 2.2:

```
Order deny,allow
Deny from all
```

### Configuração na versão 2.4:

```
Require all denied
```

Neste exemplo, não há autenticação e todas as solicitações são permitidas.

### Configuração na versão 2.2:

```
Order allow,deny
Allow from all
```

### Configuração na versão 2.4:

```
Require all granted
```

No exemplo a seguir, não há autenticação e todos os hosts no domínio example.org
têm acesso permitido; todos os outros têm acesso negado.

### Configuração na versão 2.2:

```
Order Deny,Allow
Deny from all
Allow from example.org
```

### Configuração na versão 2.4:

```
Require host example.org
```

No exemplo a seguir, misturar diretivas antigas e novas leva a
resultados inesperados.

### Misturando diretivas antigas e novas: NÃO FUNCIONA COMO ESPERADO

```
DocumentRoot "/var/www/html"

<Directory "/">
    AllowOverride None
    Order deny,allow
    Deny from all
</Directory>

<Location "/server-status">
    SetHandler server-status
    Require local
</Location>

access.log - GET /server-status 403 127.0.0.1
error.log - AH01797: client denied by server configuration: /var/www/html/server-status
```

Por que o httpd nega acesso a server-status mesmo quando a configuração parece permitir?
Porque as diretivas `mod_access_compat` tem precedência
sobre as `mod_authz_host` neste cenário de
[mesclagem](sections.md#merging) de configurações.

Este exemplo, por outro lado, funciona como esperado:

### Misturando diretivas antigas e novas: FUNCIONA COMO ESPERADO

```
DocumentRoot "/var/www/html"

<Directory "/">
    AllowOverride None
    Require all denied
</Directory>

<Location "/server-status">
    SetHandler server-status
    Order deny,allow
    Deny from all
    Allow From 127.0.0.1
</Location>

access.log - GET /server-status 200 127.0.0.1
```

Portanto, mesmo se a mistura de configurações ainda seja
possível, tente evitar na atualizaçao: mantenha diretivas antigas e somente
migre para as novas em um estágio posterior ou migre tudo de uma vez.

Em muitas configurações com autenticação, onde o valor de
`Satisfy` tinha o padrão de *ALL*, trechos
que simplesmente desligavam o controle de acesso baseado em host são omitidos:

### Configuração na versão 2.2:

```
# configuração na versão 2.2 que desliga o controle de acesso baseado em host e usa somente autenticação
Order Deny,Allow
Allow from all
AuthType Basic
AuthBasicProvider file
AuthUserFile /example.com/conf/users.passwd
AuthName secure
Require valid-user
```

### Configuração na versão 2.4:

```
# Não é necessário substituir o controle de acesso baseado em host
AuthType Basic
AuthBasicProvider file
AuthUserFile /example.com/conf/users.passwd
AuthName secure
Require valid-user
```

Em configurações onde a autenticação e o controle de acesso eram adequadamente combinados, as
diretivas de controle de acesso devem ser migradas. Este exemplo permite que as solicitações atendam a *ambos* os critérios:

### Configuração na versão 2.2:

```
Order allow,deny
Deny from all
# Satisfy ALL is the default
Satisfy ALL
Allow from 127.0.0.1
AuthType Basic
AuthBasicProvider file
AuthUserFile /example.com/conf/users.passwd
AuthName secure
Require valid-user
```

### Configuração na versão 2.4:

```
AuthType Basic
AuthBasicProvider file
AuthUserFile /example.com/conf/users.passwd
AuthName secure
<RequireAll>
  Require valid-user
  Require ip 127.0.0.1
</RequireAll>
```

Em configurações onde a autenticação e o controle de acesso eram adequadamente combinados, as
diretivas de controle de acesso devem ser migradas. Este exemplo permite que as solicitações atendam a *qualquer* um dos critérios:

### Configuração na versão 2.2:

```
Order allow,deny
Deny from all
Satisfy any
Allow from 127.0.0.1
AuthType Basic
AuthBasicProvider file
AuthUserFile /example.com/conf/users.passwd
AuthName secure
Require valid-user
```

### Configuração na versão 2.4:

```
AuthType Basic
AuthBasicProvider file
AuthUserFile /example.com/conf/users.passwd
AuthName secure
# <RequireAny> (implícito)
Require valid-user
Require ip 127.0.0.1
```

### Outras mudanças na configuração

Alguns outros pequenos ajustes podem ser necessários para configurações
em particular como discutido abaixo.

- `MaxRequestsPerChild` foi renomeada para
  `MaxConnectionsPerChild`,
  descrevendo com maior precisão o que ela faz. O nome antigo ainda
  é suportado.
- `MaxClients` foi renomeada para
  `MaxRequestWorkers`,
  que descreve melhor o que ela faz. Para MPMs assíncronos, como
  `event`, o número máximo de clientes não é
  equivalente ao número de threads. O nome antigo ainda
  é suportado.
- A diretiva `DefaultType`
  não tem mais nenhum efeito além de emitir um
  alerta se for usada com algum valor diferente de
  `none`. É necessário usar outras configurações
  para substituí-la na versão 2.4.
- O padrão para `AllowOverride`
  agora é `None`.
- O padrão para `EnableSendfile`
  agora é Off.
- O padrão para `FileETag`
  agora é "MTime Size" (sem INode).
- `mod_dav_fs`: O formato do arquivo de `DavLockDB` foi alterado para
  sistemas com inodes. o arquivos antigo de `DavLockDB` precisa ser apagado na
  atualização.
- `KeepAlive` somente
  aceita valores de `On` ou `Off`.
  Anteriormente, qualquer valor diferente de "Off" ou "0" era tratado como
  "On".
- As diretivas AcceptMutex, LockFile, RewriteLock, SSLMutex,
  SSLStaplingMutex e WatchdogMutexPath foram substituídas
  por uma única diretiva `Mutex`.
  É necessário avaliar o uso dessas diretivas
  removidas na configuração 2.2 para determinar se elas podem
  ser apenas removidas ou se precisam ser substituídas usando `Mutex`.
- `mod_cache`: `CacheIgnoreURLSessionIdentifiers`
  agora faz uma correspondência exata com a string de consulta em vez de
  um correspondência parcial. Se a configuração estava usando strings
  parciais, por exemplo, usando `sessionid` para corresponder a
  `/someapplication/image.gif;jsessionid=123456789`,
  então será necessário alterar para a string completa
  `jsessionid`.
- `mod_cache`: O segundo parâmetro para
  `CacheEnable` somente
  corresponde ao conteúdo do proxy direto se ele começar com o protocolo
  correto. Na versão 2.2 e anteriores, um parâmetro de '/' correspondia a todo o
  conteúdo.
- `mod_ldap`: `LDAPTrustedClientCert` agora é,
  consistentemente, uma configuração apenas por diretório. Se esta diretiva
  for usada, revise a configuração para garantir que ela está
  presente em todos os contextos de diretório necessários.
- `mod_filter`: a sintaxe de `FilterProvider` foi alterada e
  agora usa uma expressão booleana para determinar se um filtro está aplicado.
- `mod_include`:
  - O elemento `#if expr` agora usa o novo [analisador de expressões](expr.md). A sintaxe antiga pode ser
    restaurada com a nova diretiva `SSILegacyExprParser`.
  - Uma diretiva de configuração SSI\* em escopo de diretório não faz mais
    com que todas as outras diretivas SSI\* por diretório sejam redefinidas para seus
    valores padrão.
- `mod_charset_lite`: A opção `DebugLevel`
  foi removida em favor da configuração `LogLevel` por módulo.
- `mod_ext_filter`: A opção `DebugLevel`
  foi removida em favor da configuração `LogLevel` por módulo.
- `mod_proxy_scgi`: A configuração padrão para
  `PATH_INFO` foi alterada em relação à versão 2.2 e
  algumas aplicações web não irão mais operar adequadamente com a
  nova configuração de `PATH_INFO`. A configuração anterior
  pode ser restaurada através da configuração da variável
  `proxy-scgi-pathinfo`.
- `mod_ssl`: A verificação de revogação baseada em CRL
  agora precisa ser configurada explicitamente através de `SSLCARevocationCheck`.
- `mod_substitute`: O comprimento máximo de linha agora
  é limitado a 1MB.
- `mod_reqtimeout`: Se o módulo for carregado, ele
  agora definirá alguns limites de tempo padrões.
- `mod_dumpio`: `DumpIOLogLevel`
  não é mais suportado. Os dados são sempre registrados com `LogLevel` no nível `trace7`.
- Em plataformas Unix, comandos de registro encadeados configurados com
  `ErrorLog` ou
  `CustomLog` eram chamados usando
  `/bin/sh -c` na versão 2.2 e anteriores. Na versão 2.4 e posteriores,
  comandos de registro encadeados são executados diretamente. Para restaurar o
  comportamento antigo, consulte a [documentação sobre
  registros encadeados](logs.md#piped).

[![top](./images/up.gif)](#page-header)

## Alterações Miscelâneas [¶](#misc "Link permanente")

- `mod_autoindex`: agora extrai títulos e
  exibe descrições para arquivos .xhtml, que antes eram
  ignorados.
- `mod_ssl`: O formato padrão das variáveis ​​`*_DN`
  foi alterado. O formato antigo ainda pode ser usado com o novo argumento
  `LegacyDNStringFormat` da diretiva `SSLOptions`. O protocolo SSLv2
  não é mais suportado. `SSLProxyCheckPeerCN` e `SSLProxyCheckPeerExpire` agora são ativadas por padrão, fazendo com que as solicitações de proxy para hosts HTTPS
  com certificados inválidos ou desatualizados falhem com código de status 502 (Bad
  gateway)
- `htpasswd` agora usa hash MD5 por padrão em
  todas as plataformas.
- A diretiva `NameVirtualHost`
  não tem mais efeito, além de emitir um
  alerta. Qualquer combinação de endereço/porta que apareça em vários
  hosts virtuais é implicitamente tratada como um host virtual baseado em nome.
- `mod_deflate` agora irá ignorar a compressão se souber
  que a sobrecarga de tamanho adicionada pela compressão será maior que os dados
  a serem comprimidos.
- Documentos de erro multilíngues da versão 2.2.x podem não funcionar a menos que
  sejam ajustados à nova sintaxe do elemento `#if expr=` do
  módulo `mod_include` ou que a diretiva
  `SSILegacyExprParser` esteja
  habilitada para o diretório que contém os documentos de erro.
- A funcionalidade fornecida por `mod_authn_alias`
  em versões anteriores (ou seja, a diretiva `AuthnProviderAlias`)
  foi movida para `mod_authn_core`.
- As diretivas RewriteLog e RewriteLogLevel foram removidas.
  Esta funcionalidade agora é disponibilizada configurando o nível adequado
  de registro para o módulo `mod_rewrite` usando a
  diretiva `LogLevel`.
  Consulte também a seção sobre [registros de
  mod\_rewrite](mod__mod_rewrite.md#logging).
- A etiqueta `<set>` do módulo `mod_include` não
  realiza mais a decodificação de entidades no valor que está sendo definido.

[![top](./images/up.gif)](#page-header)

## Módulos de Terceiros [¶](#third-party "Link permanente")

Todos os módulos devem ser recompilados para a versão 2.4 antes de serem carregados.

Muitos módulos de terceiros projetados para a versão 2.2
funcionarão sem alterações com a versão 2.4 do Apache HTTP Server.
Alguns exigirão alterações; consulte a [Visão geral da
atualização da API](developer__new_api_2_4.md).

[![top](./images/up.gif)](#page-header)

## Problemas comuns ao atualizar [¶](#commonproblems "Link permanente")

- Erros na inicialização:
  - `Invalid command 'User', perhaps misspelled or defined by a module not included in the server configuration` - carregue o módulo `mod_unixd`
  - `Invalid command 'Require', perhaps misspelled or defined by a module not included in the server configuration`, ou
    `Invalid command 'Order', perhaps misspelled or defined by a module not included in the server configuration`
    - carregue o módulo `mod_access_compat` ou atualize a configuração para as diretivas de autorização da versão 2.4.
  - `Ignoring deprecated use of DefaultType in line NN of /path/to/httpd.conf` - remova a diretiva `DefaultType`
    e substitua por outra configuração.
  - `Invalid command 'AddOutputFilterByType', perhaps misspelled
    or defined by a module not included in the server configuration` - `AddOutputFilterByType`
    foi movida do núcleo para o módulo mod\_filter, que precisa ser carregado.
- Erros ao servir requisições:
  - `configuration error: couldn't check user: /path` -
    carregue o módulo `mod_authn_core`.
  - arquivos `.htaccess` são estão sendo processados - Verifique uma
    diretiva `AllowOverride` apropriada;
    o padrão mudou para `None` na versão 2.4.

Línguas Disponíveis: [en](https://httpd.apache.org/docs/2.4/pt-br/en/upgrading.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/upgrading.html "Français") |
[pt-br](pt-br__upgrading.md "Português (Brasil)")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
