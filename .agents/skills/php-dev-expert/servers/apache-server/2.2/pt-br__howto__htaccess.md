# Tutorial do Apache: arquivos .htaccess - Servidor HTTP Apache Versão 2.2

> **Fonte / Source:** https://httpd.apache.org/docs/2.2/pt-br/pt-br/howto/htaccess.html

---

[Módulos](mod.md) | [Diretrizes](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do site](sitemap.md)

Servidor HTTP Apache Versão 2.2

![](../images/feather.gif)

[![<-](../images/left.gif "<-")](howto.md)

[Apache](http://www.apache.org/) > [Servidor HTTP](http://httpd.apache.org/) > [Documentação](http://httpd.apache.org/docs/) > [Versão 2.2](index.md) > [How-To / Tutoriais](howto.md)

#### Please note

This document refers to the **2.2** version of Apache httpd, which is no longer maintained. The active release is documented [here](http://httpd.apache.org/docs/current). If you have not already upgraded, please follow [this link](http://httpd.apache.org/docs/current/upgrading.html) for more information.

You may follow [this link](http://httpd.apache.org/docs/current/howto/htaccess.html) to go to the current version of this document.

# Tutorial do Apache: arquivos .htaccess

Esta tradução pode estar desatualizada.
Verifique a versão em Inglês para mudanças recentes.

Arquivos `.htaccess` oferecem um meio de fazer mudanças
nas configurações por-diretório.

- ![](../images/down.gif) [Arquivos .htaccess](#related)
- ![](../images/down.gif) [O que eles são/Como usá-los](#what)
- ![](../images/down.gif) [Quando (não) usar arquivos .htaccess](#when)
- ![](../images/down.gif) [Como as diretrizes são aplicadas](#how)
- ![](../images/down.gif) [Exemplo de Autenticação](#auth)
- ![](../images/down.gif) [Exemplo de Server Side Includes](#ssi)
- ![](../images/down.gif) [Exemplo de CGI](#cgi)
- ![](../images/down.gif) [Resolvendo Problemas](#troubleshoot)

- [Comentários](#comments_section)

[![top](../images/up.gif)](#page-header)

## Arquivos .htaccess

| Módulos Relacionados | Diretrizes Relacionadas |
| --- | --- |
| - `core` - `mod_authn_file` - `mod_authz_groupfile` - `mod_cgi` - `mod_include` - `mod_mime` | - `AccessFileName` - `AllowOverride` - `Options` - `AddHandler` - `SetHandler` - `AuthType` - `AuthName` - `AuthUserFile` - `AuthGroupFile` - `Require` |

[![top](../images/up.gif)](#page-header)

## O que eles são/Como usá-los

Os arquivos `.htaccess` (ou "arquivos de
configuração distribuída") oferecem um meio de fazer mudanças nas
configurações por-diretório. Um arquivo, contendo uma ou mais
diretrizes de configurações, é colocado em um diretório
em particular, e as diretrizes se aplicam para aquele diretório e todos
os seu subdiretórios subseqüentes.

### Nota:

Se você quiser renomear o seu arquivo `.htaccess`
para outro nome, você deve usar a diretriz `AccessFileName`. Por exemplo, se você
prefere que o arquivo se chame `.config`, então você
pode adicionar a seguinte linha ao seu arquivo de configuração
do servidor:

`AccessFileName .config`

No geral, arquivos `.htaccess` usam a mesma sintaxe
que os [arquivos de
configuração principal](configuring.md#syntax). O que você pode colocar nesses
arquivos é determinado pele diretriz `AllowOverride`. Essa diretriz especifica,
em categorias, quais diretrizes serão aceitas caso sejam
encontradas em um arquivo `.htaccess`. Se uma diretriz
for permitida em um arquivo `.htaccess`, a documentação
para essa diretriz irá conter uma seção *Override*,
especificando que valor precisa estar em `AllowOverride` para que esta diretriz
seja permitida.

Por exemplo, se você procurar na documentação pela diretriz
`AddDefaultCharset`, você
achará que ela é permitida nos arquivos `.htaccess`.
(Veja a linha Contexto no sumário das diretivas.) A
linha [Override](mod__directive-dict.md#Context) lê
`FileInfo`. Então, você deve ao menos ter
`AllowOverride FileInfo` para que essa diretriz seja
aceita nos arquivos `.htaccess`.

### Exemplo:

|  |  |
| --- | --- |
| [Contexto:](mod__directive-dict.md#Context) | configuração do servidor, hospedeiros virtuais, diretório, .htaccess |
| [Override:](mod__directive-dict.md#Override) | FileInfo |

Se você estiver incerto se uma diretriz em particular é
aceita em um arquivo `.htaccess`, procure na
documentação por essa diretriz, e verifique a linha de
Contexto por ".htaccess".

[![top](../images/up.gif)](#page-header)

## Quando (não) usar arquivos .htaccess

No geral, você nunca deve usar arquivos `.htaccess`
a não ser que você não tenha acesso ao arquivo de configuração
principal do servidor. Existe, por exemplo, um erro de concepção
que dita que a autenticação de usuários sempre deve
ser feita usando os arquivos `.htaccess`. Esse
simplesmente não é o caso. Você pode usar as configurações de
autenticação de usuário no arquivo de configuração principal do
servidor, e isso é, de fato, a maneira mais adequada de se fazer
as coisas.

Arquivos `.htaccess` devem ser usados em casos onde
os provedores de conteúdo do site precisem fazer mudanças na
configuração do servidor por-diretório, mas não tem
acesso *root* ao sistema do servidor. Caso o administrador do
servidor não esteja disposto a fazer mudanças freqüentes nas
configurações do servidor, é desejável permitir que os
usuários possam fazer essas mudanças através de arquivos
`.htaccess` eles mesmos. Isso é particularmente
verdade, por exemplo, em casos onde provedores estão fornecendo
múltiplos sites para usuários em apenas uma máquina, e querem que
seus usuários possam alterar suas configurações.

No entanto, de modo geral, o uso de arquivos `.htaccess`
deve ser evitado quando possível. Quaisquer configurações
que você considerar acrescentar em um arquivo `.htaccess`, podem
ser efetivamente colocadas em uma seção `<Directory>` no arquivo principal de
configuração de seu servidor.

Existem duas razões principais para evitar o uso de arquivos
`.htaccess`.

A primeira delas é a performance. Quando `AllowOverride` é configurado para
permitir o uso de arquivos `.htaccess`, o Apache procura
em todos diretórios por arquivos `.htaccess`.
Logo, permitir arquivos `.htaccess` causa um impacto na
performance, mesmo sem você usá-los de fato! Além disso,
o arquivo `.htaccess` é carregado toda vez que um documento
é requerido.

Além disso, note que o Apache precisa procurar pelos arquivos
`.htaccess` em todos os diretórios superiores, para ter
o complemento total de todas as diretivas que devem ser
aplicadas. (Veja a seção [como as diretrizes são
aplicadas](#how).) Então, se um arquivo de um diretório
`/www/htdocs/example` é requerido, o Apache precisa
procurar pelos seguintes arquivos:

`/.htaccess  
/www/.htaccess  
/www/htdocs/.htaccess  
/www/htdocs/example/.htaccess`

Assim, para cada acesso de arquivo fora desse diretório,
existem 4 acessos ao sistema de arquivos adicionais, mesmo
que nenhum desses arquivos estejam presentes. (Note que esse
só será o caso se os arquivos `.htaccess`
estiverem habilitados para `/`, o que
normalmente não é o verdade.)

A segunda consideração é relativa à segurança.
Você está permitindo que os usuários modifiquem as
configurações do servidor, o que pode resultar em mudanças
que podem fugir ao seu controle. Considere com cuidado se você quer
ou não dar aos seus usuários esses privilégios. Note também
que dar aos usuários menos privilégios que eles precisam, acarreta em
pedidos de suporte técnico adicionais. Tenha certeza que você comunicou
aos usuários que nível de privilégios você os deu.
Especificar exatamente o que você configurou na diretriz `AllowOverride`, e direcioná-los para a
documentação relevante, irá poupá-lo de muita confusão
depois.

Perceba que é exatamente equivalente colocar o arquivo
`.htaccess` em um diretório
`/www/htdocs/example` contendo uma diretriz, e
adicionar a mesma diretriz em uma seção *Directory*
`<Directory /www/htdocs/example>` na configuração
principal do seu servidor:

Arquivo `.htaccess` em `/www/htdocs/example`:

### Conteúdo de um arquivo .htaccess em `/www/htdocs/example`

`AddType text/example .exm`

### Seção do seu arquivo `httpd.conf`

`<Directory /www/htdocs/example>  

AddType text/example .exm  
</Directory>`

No entanto, adicionando isso ao seu arquivo de configuração do
servidor resultará em uma menor perda de performance, na medida que
a configuração é carregada no momento da inicialização do
servidor, ao invés de toda que que um arquivo é requerido.

O uso de arquivos `.htaccess` pode ser totalmente
desabilitado, ajustando a diretriz `AllowOverride` para `none`:

`AllowOverride None`

[![top](../images/up.gif)](#page-header)

## Como as diretrizes são aplicadas

As diretrizes de configuração que se encontram em um arquivo
`.htaccess` são aplicadas para o diretório no qual o
arquivo `.htaccess` se encontra, e para todos os
subdiretórios ali presentes. Mas, é importante lembrar também que
podem existir arquivos `.htaccess` no diretórios
superiores. As diretrizes são aplicadas na ordem que são
achadas. Logo, um arquivo `.htaccess` em um diretório
em particular, pode sobrescrever as diretrizes encontradas em um
diretório acima deste em sua respectiva árvore. Estes, por sua vez,
podem ter suas diretrizes sobrescritas por diretrizes ainda mais
acima, ou no próprio arquivo de configuração principal do
servidor.

Exemplo:

No diretório `/www/htdocs/example1` nós temos
um arquivo `.htaccess` contendo o seguinte:

`Options +ExecCGI`

(Nota: você deve ter "`AllowOverride Options`" para
permitir o uso da diretriz "`Options`" nos arquivos
`.htaccess` .)

No diretório `/www/htdocs/example1/example2` nós temos
um arquivo `.htaccess` contendo:

`Options Includes`

Devido a esse segundo arquivo `.htaccess`, no
diretório `/www/htdocs/example1/example2`, a execução
de scripts CGI não é permitida, pois somente `Options
Includes` está em efeito, o que sobrescreve completamente
quaisquer outros ajustes previamente configurados.

[![top](../images/up.gif)](#page-header)

## Exemplo de Autenticação

Se você veio diretamente à esta parte do documento para
aprender como fazer autenticação, é importante notar uma
coisa. Existe uma concepção errada, mas muito comum, de que é
necessário o uso de arquivos `.htaccess` para implementar
a autenticação por senha. Este não é o caso. Colocar
diretrizes de senha em uma seção `<Directory>`, no seu arquivo principal de
configuração do servidor, é a melhor maneira de se implementar
isto, e os arquivos `.htaccess` devem ser usados apenas
se você não tem acesso ao arquivo principal de configuração do
servidor. Veja [acima](#when) a discussão sobre quando
você deve e quando não deve usar os arquivos
`.htaccess`.

Dito isso, se você ainda acredita que precisa usar um arquivo
`.htaccess`, a configuração a seguir provavelmente
funcionará para você.

Conteúdo de um arquivo `.htaccess`:

`AuthType Basic  
AuthName "Password Required"  
AuthUserFile /www/passwords/password.file  
AuthGroupFile /www/passwords/group.file  
Require Group admins`

Note que `AllowOverride AuthConfig` precisa estar
habilitado para que estas diretrizes tenham efeito.

Por favor veja o [tutorial de
autenticação](howto__auth.md) para uma discussão mais completa sobre
autenticação e autorização.

[![top](../images/up.gif)](#page-header)

## Exemplo de Server Side Includes

Outro uso comum de arquivos `.htaccess` é ativar o
Server Side Includes para um diretório em particular. Isto pode
ser feito com as seguintes diretrizes de configuração, colocadas em
um arquivo `.htaccess` no diretório desejado:

`Options +Includes  
AddType text/html shtml  
AddHandler server-parsed shtml`

Note que ambos `AllowOverride Options` e
`AllowOverride FileInfo` precisam estar habilitados
para essas diretrizes terem efeito.

Por favor veja o [tutorial de SSI](howto__ssi.md) para
uma discussão mais completa sobre server-side includes.

[![top](../images/up.gif)](#page-header)

## Exemplo de CGI

Finalmente, você pode querer que um arquivo
`.htaccess` permita a execução de programas CGI em um
diretório em particular. Isto pode ser implementado com as
seguintes configurações:

`Options +ExecCGI  
AddHandler cgi-script cgi pl`

Alternativamente, se você desejar que todos os arquivos de um
dado diretório, sejam considerados programas CGI, isso pode ser
feito com a seguinte configuração:

`Options +ExecCGI  
SetHandler cgi-script`

Note que ambos `AllowOverride Options` e
`AllowOverride FileInfo` precisam estar habilitados
para que essas diretrizes tenham quaisquer efeito.

Por favor veja o [tutorial de CGI
tutorial](howto__cgi.md) para uma discussão mais completa sobre programação
e configuração CGI.

[![top](../images/up.gif)](#page-header)

## Resolvendo Problemas

Quando você adiciona diretrizes de configuração em um arquivo
`.htaccess`, e não obtém o efeito desejado, existe uma
série de pontos que podem estar errados.

Mais comumente, o problema é que a diretriz `AllowOverride` não está habilitada
corretamente para que as suas diretrizes de configurações sejam
honradas. Verifique se você não possui `AllowOverride
None` ajustado para o escopo do arquivo em questão. Um bom
meio de testar isso é colocar "lixo" em seu arquivo
`.htaccess` e recarregá-lo. Se não for gerado nenhum
erro do servidor, certamente você tem `AllowOverride
None` habilitado.

Se, por outro lado, você está obtendo erros do servidor ao
tentar acessar documentos, verifique o registro de erros do
Apache. Ele provavelmente irá indicar que a diretriz usada em
seu arquivo `.htaccess` não é permitida.
Alternativamente, ele pode acusar erros de sintaxe que você terá
que corrigir.

Línguas Disponíveis: [en](https://httpd.apache.org/docs/2.2/pt-br/en/howto/htaccess.html "English") |
[fr](https://httpd.apache.org/docs/2.2/pt-br/fr/howto/htaccess.html "Français") |
[ja](https://httpd.apache.org/docs/2.2/pt-br/ja/howto/htaccess.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.2/pt-br/ko/howto/htaccess.html "Korean") |
[pt-br](pt-br__howto__htaccess.md "Português (Brasil)")

[![top](../images/up.gif)](#page-header)

## Comentários

**Notice:**  
This is not a Q&A section. Comments placed here should be pointed towards suggestions on improving the documentation or server, and may be removed again by our moderators if they are either implemented or considered invalid/off-topic. Questions on how to manage the Apache HTTP Server should be directed at either our IRC channel, #httpd, on Libera.chat, or sent to our [mailing lists](http://httpd.apache.org/lists.html).

Copyright 2018 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretrizes](mod__directives.md) | [FAQ](http://wiki.apache.org/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do site](sitemap.md)
