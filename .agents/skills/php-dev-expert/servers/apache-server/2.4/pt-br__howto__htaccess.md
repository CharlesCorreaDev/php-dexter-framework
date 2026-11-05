# Tutorial do Servidor HTTP Apache: arquivos .htaccess - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/pt-br/howto/htaccess.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](../images/feather.png)

[![<-](../images/left.gif "<-")](howto.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md) > [Como Fazer / Tutoriais](howto.md)

# Tutorial do Servidor HTTP Apache: arquivos .htaccess

Esta tradução pode estar desatualizada.
Verifique a versão em inglês para alterações recentes.

Arquivos `.htaccess` oferecem um meio de fazer alterações
nas configurações por diretório, sem modificar diretamente os arquivos
de configuração principais do servidor.

- ![](../images/down.gif) [Arquivos .htaccess](#related)
- ![](../images/down.gif) [O que eles são / Como usá-los](#what)
- ![](../images/down.gif) [Quando (não) usar arquivos .htaccess](#when)
- ![](../images/down.gif) [Como as diretivas são aplicadas](#how)
- ![](../images/down.gif) [Exemplo de Autenticação](#auth)
- ![](../images/down.gif) [Exemplo de Server Side Includes](#ssi)
- ![](../images/down.gif) [Regras de reescrita em arquivos .htaccess](#rewrite)
- ![](../images/down.gif) [Exemplo de CGI](#cgi)
- ![](../images/down.gif) [Resolvendo Problemas](#troubleshoot)

[![top](../images/up.gif)](#page-header)

## Arquivos .htaccess [¶](#related "Link permanente")

| Módulos Relacionados | Diretrizes Relacionadas |
| --- | --- |
| - `core` - `mod_authn_file` - `mod_authz_groupfile` - `mod_include` - `mod_mime` - `mod_rewrite` | - `AccessFileName` - `AllowOverride` - `AllowOverrideList` - `Options` - `AddHandler` - `SetHandler` - `AuthType` - `AuthName` - `AuthUserFile` - `AuthGroupFile` - `Require` |

[![top](../images/up.gif)](#page-header)

## O que eles são / Como usá-los [¶](#what "Link permanente")

Os arquivos `.htaccess` (ou "arquivos de configuração distribuídos")
oferecem um meio de fazer alterações nas configurações por diretório. Um
arquivo, contendo uma ou mais diretivas de configurações, é colocado em um
diretório em particular e as diretivas se aplicam a este diretório e a
todos os seus subdiretórios.

### Observação:

Se o nome do arquivo precisar ser diferente de `.htaccess`,
ele pode ser alterado através da diretiva `AccessFileName`. Por exemplo,
se a preferência for chamar o arquivo de `.config`, pode
ser adicionada a seguinte linha ao arquivo de configuração do servidor:

```
AccessFileName ".config"
```

Diretivas nos arquivos `.htaccess` usam a mesma sintaxe
que os [arquivos principais
de configuração](configuring.md#syntax). O que pode ser colocado nesses arquivos é determinado pelas
diretivas `AllowOverride` E
`AllowOverrideList`.
`AllowOverride` especifica, em
categorias, quais diretivas serão honradas caso sejam encontradas em um
arquivo `.htaccess`, enquanto que `AllowOverrideList` nomeia diretivas
individuais a serem permitidas (consulte [abaixo](#when)). Se uma diretiva
for permitida, a documentação para essa diretiva conterá uma seção Override,
especificando que valor precisa estar em `AllowOverride` para que essa diretiva
seja permitida.

O valor padrão de `AllowOverride` é `None`.
Isto significa que arquivos `.htaccess` são completamente ignorados
a menos que sejam explicitamente habilitados para um diretório.

Por exemplo, ao procurar na documentação pela diretiva `AddDefaultCharset`,
pode-se notar que ela é permitida nos arquivos `.htaccess`.
(Veja a linha Contexto no sumário das diretivas.) A
linha [Override](mod__directive-dict.md#Context) apresenta
`FileInfo`. Assim, deve-se ter pelo menos
`AllowOverride FileInfo` para que essa diretiva seja
honrada nos arquivos `.htaccess`.

[![top](../images/up.gif)](#page-header)

## Quando (não) usar arquivos .htaccess [¶](#when "Link permanente")

Se for possível o acesso ao arquivo de principal de configuração do servidor, todas
as configurações devem ser colocadas lá em vez de inseri-las em arquivos
`.htaccess`. Isto inclui autenticação de usuários,
regras do `mod_rewrite` e qualquer outra coisa que você tenha
tentação de colocar no `.htaccess`. Diretivas na configuração
principal são carregadas assim que o servidor inicia, e não a cada
requisição, e o `mod_rewrite` em particular funciona melhor
no contexto de configuração do servidor.

Os arquivos `.htaccess` devem ser usados ​​nos casos em que os
provedores de conteúdo precisam fazer alterações de configuração no servidor
por diretório, mas não têm acesso "root" ao sistema do servidor.
Isto é comum com ambientes de hospedagem gerenciados, hospedagem baseada
em painel de controle (como cPanel ou Plesk), e sistemas de gerenciamento de conteúdo onde
a aplicação envia um arquivo `.htaccess` como parte de sua
distribuição. Caso o administrador do servidor não esteja disposto a fazer
alterações de configuração frequentes, pode ser desejável permitir que
usuários individuais façam essas alterações em arquivos `.htaccess`
por conta própria.

Existem dois motivos principais para preferir o arquivo principal de configuração
no lugar do `.htaccess`: desempenho e segurança.

Desempenho: Quando a diretiva `AllowOverride`
está configurada para permitir o uso de arquivos `.htaccess`, o httpd
procurará em todos os diretórios por arquivos `.htaccess`. Portanto,
permitir arquivos `.htaccess` causa uma queda de desempenho,
independentemente de serem realmente usados ou não! Além disso, o
arquivo `.htaccess` é carregado sempre que um documento é
solicitado.

Observe ainda que o httpd precisa procurar arquivos `.htaccess`
em todos os diretórios de nível superior, a fim de ter um conjunto completo de
diretivas que ele deve aplicar. (Consulte a seção sobre [como
as diretivas são aplicadas](#how).) Assim, se um arquivo for solicitado de um
diretório `/www/htdocs/example`, o httpd precisa procurar os
seguintes arquivos:

```
/.htaccess
/www/.htaccess
/www/htdocs/.htaccess
/www/htdocs/example/.htaccess
```

Assim, para cada acesso a um arquivo fora desse diretório, há 4
acessos adicionais ao sistema de arquivos, mesmo que nenhum desses arquivos esteja
presente. (Observe que isso só ocorreria se
os arquivos `.htaccess` estivessem habilitados para o diretório `/`, o que
normalmente não acontece.)

Segurança: Você está permitindo
que usuários modifiquem a configuração do servidor, o que pode resultar em alterações sobre
as quais você não tem controle.Considere cuidadosamente se deseja conceder
esse privilégio aos usuários. Observe também que conceder aos usuários menos
privilégios do que o necessário levará a solicitações adicionais de suporte
técnico. Certifique-se de informar claramente aos usuários qual o nível de
privilégios que foi condedido a eles. Especificar exatamente o valor definido para
`AllowOverride` e direcioná-los
para a documentação relevante evitará muita confusão
posteriormente.

Se for necessário conceder acesso ao `.htaccess` porém limitando
a um conjunto específico de diretivas em vez de categorias inteiras, use a
diretiva `AllowOverrideList`. Isso
permite nomear diretivas individuais que são permitidas, fornecendo
um controle mais fino que a `AllowOverride` sozinha:

```
# Permite somente diretivas específicas, e não categorias inteiras
AllowOverride None
AllowOverrideList Redirect RedirectMatch RewriteEngine RewriteRule RewriteCond
```

Com esta configuração, qualquer diretiva que não esteja explicitamente listada
causará um erro de servidor se encontrada em um arquivo `.htaccess`.
Isto é um meio termo útil entre o acesso total e nenhum
acesso.

Observe que é completamente equivalente colocar um arquivo `.htaccess`
em um diretório `/www/htdocs/example` contendo uma
diretiva, e colocar essa mesma diretiva em uma seção Directory
`<Directory "/www/htdocs/example">` na configuração principal do
servidor:

Arquivo `.htaccess` em `/www/htdocs/example`:

### Conteúdo do arquivo .htaccess em `/www/htdocs/example`

```
AddType text/example ".exm"
```

### Seção do arquivo `httpd.conf`

```
<Directory "/www/htdocs/example">
    AddType text/example ".exm"
</Directory>
```

O uso de arquivos `.htaccess` pode ser completamente desativado
definindo a diretiva `AllowOverride`
como `none`:

```
AllowOverride None
```

[![top](../images/up.gif)](#page-header)

## Como as diretivas são aplicadas [¶](#how "Link permanente")

As diretivas de configuração encontradas em um arquivo `.htaccess`
são aplicadas ao diretório em que o arquivo `.htaccess`
está localizado e a todos os seus subdiretórios. No entanto, é importante
lembrar também que pode haver arquivos `.htaccess`
em diretórios acima na árvore. As diretivas são aplicadas na ordem em que
são encontradas. Portanto, um arquivo `.htaccess` em um determinado
diretório pode sobrescrever diretivas encontradas em arquivos `.htaccess`
localizados acima na árvore de diretórios. E estes, por sua vez, podem ter
sobrescrito diretivas encontradas ainda acima na árvore, ou no próprio arquivo de
configuração principal do servidor.

Exemplo:

No diretório `/www/htdocs/example1`, considere
um arquivo `.htaccess` contendo o seguinte:

```
Options +ExecCGI
```

(Observação: "`AllowOverride Options`" precisa estar em vigor
para permitir o uso da diretiva "`Options`" em
arquivos `.htaccess`.)

No diretório `/www/htdocs/example1/example2`, considere
um arquivo `.htaccess` contendo:

```
Options Includes
```

Devido a este segundo arquivo `.htaccess`, no diretório
`/www/htdocs/example1/example2`, a execução de CGI não é
permitida, pois apenas `Options Includes` está em vigor, o que
sobrescreve completamente qualquer configuração anterior que possa ter estado
em vigor.

### Mesclagem do .htaccess com os arquivos principais de configuração

Conforme discutido na documentação sobre [Seções de Configuração](sections.md),
os arquivos `.htaccess` podem sobrescrever as seções `<Directory>` para
o diretório correspondente, mas serão sobrescritos por outros tipos
de seções de configuração dos arquivos de configuração principais.
Esse fato pode ser usado para impor certas configurações, mesmo na
presença de uma configuração `AllowOverride` permissiva. Por exemplo, para
impedir a execução de scripts, permitindo que qualquer outra configuração seja feita em
`.htaccess`, pode ser usado:

```
<Directory "/www/htdocs">
    AllowOverride All
</Directory>

<Location "/">
    Options +IncludesNoExec -ExecCGI
</Location>
```

Este exemplo pressupõe que `DocumentRoot` seja `/www/htdocs`.

[![top](../images/up.gif)](#page-header)

## Exemplo de Autenticação [¶](#auth "Link permanente")

Como em qualquer caso de uso de `.htaccess`, inserir estas diretivas em
um bloco `<Directory>` é
preferido quando se tem acesso à configuração principal (consulte
[above](#when)). O exemplo s seguir mostra o método
`.htaccess`:

Conteúdo de `.htaccess`:

```
AuthType Basic
AuthName "Senha Requerida"
AuthUserFile "/www/senhas/arquivo.senhas"
AuthGroupFile "/www/senhas/arquivo.grupos"
Require group admins
```

Observe que `AllowOverride AuthConfig` deve estar em vigor
para que essas diretivas tenham algum efeito.

Consulte o [tutorial de autenticação](howto__auth.md) para uma
discussão mais completa sobre autenticação e autorização.

[![top](../images/up.gif)](#page-header)

## Exemplo de Server Side Includes [¶](#ssi "Link permanente")

Outro uso comum de arquivos `.htaccess` é habilitar
inclusões do lado do servidor para um diretório específico. Isso pode ser feito com
as seguintes diretivas de configuração, colocadas em um
arquivo `.htaccess` no diretório desejado:

```
Options +Includes
AddType text/html shtml
AddHandler server-parsed shtml
```

Observe que `AllowOverride Options` e `AllowOverride
FileInfo` devem estar ambos em vigor para que essas diretivas tenham algum
efeito.

Consulte o [tutorial SSI](howto__ssi.md) para uma discussão mais
completa sobre includes do lado do servidor.

[![top](../images/up.gif)](#page-header)

## Regras de reescrita em arquivos .htaccess [¶](#rewrite "Link permanente")

Ao usar `RewriteRule` em
arquivos .htaccess, esteja ciente de que o contexto por diretório
muda um pouco as coisas. Em particular, as regras são consideradas relativas
ao diretório atual, em vez de serem o URI solicitado original.
Considere os seguintes exemplos:

```
# No arquivo httpd.conf
RewriteRule "^/imagens/(.+)\.jpg" "/imagens/$1.png"

# No arquivo .htaccess do diretório raiz
RewriteRule "^imagens/(.+)\.jpg" "imagens/$1.png"

# No arquivo .htaccess do diretório imagens/
RewriteRule "^(.+)\.jpg" "$1.png"
```

Em um arquivo `.htaccess` no diretório de documentos, a barra inicial
é removida do valor fornecido para `RewriteRule`, e no subdiretório
`imagens`, `/imagens/` é removido
dele. Portanto, a expressão regular precisa omitir essa parte
também.

Observe também que no contexto do `.htaccess`, expressões regulares são
recompiladas a cada requisição, enquanto que na configuração principal do servidor elas
são compiladas apenas uma vez e armazenadas em cache.

Consulte a [documentação do mod\_rewrite](rewrite.md) para
obter mais detalhes sobre como usar o `mod_rewrite`.

[![top](../images/up.gif)](#page-header)

## Exemplo de CGI [¶](#cgi "Link permanente")

Scripts CGI são um mecanismo legado para conteúdo dinâmico. Para novos
desenvolvimentos, considere o uso de `mod_proxy_fcgi` com um
servidor de aplicação FastCGI ou um manipulador específico para algum framework. A
informação abaixo permanece útil para ambientes que ainda dependem de
CGI tradicional.

Pode ser necessário usar um arquivo `.htaccess` para permitir
a execução de programas CGI em um diretório específico. Isso pode ser
implementado com a seguinte configuração:

```
Options +ExecCGI
AddHandler cgi-script cgi pl
```

Alternativamente, se for necessário que todos os arquivos no diretório especificado sejam
considerados programas CGI, isso pode ser feito com a seguinte
configuração:

```
Options +ExecCGI
SetHandler cgi-script
```

Observe que `AllowOverride Options` e `AllowOverride
FileInfo` devem estar ambos em vigor para que essas diretivas tenham algum
efeito.

Consulte o [tutorial CGI](howto__cgi.md) para uma discussão mais
completa sobre programação e configuração CGI.

[![top](../images/up.gif)](#page-header)

## Resolvendo Problemas [¶](#troubleshoot "Link permanente")

Quando são colocadas diretivas de configuração em um arquivo `.htaccess`
e não é obtido o efeito desejado, há uma série de
coisas que podem estar dando errado.

O problema mais comum é que a diretiva `AllowOverride` não está
configurada de forma que suas diretivas de configuração sejam respeitadas.
Certifique-se de que não exista um `AllowOverride None` em vigor
para o escopo do arquivo em questão. Um bom teste para isso é colocar uma
palavra sem sentido no seu arquivo `.htaccess` e recarregar a
página:

```
TestMe
```

Se um erro do servidor (HTTP 500) não
for gerado, é quase certeza que `AllowOverride
None` esteja em vigor.

Se, por outro lado, erros do servidor estiverem sendo gerados ao tentar
acessar documentos, verifique o registro de erros do httpd. Ele provavelmente informará
que a diretiva usada no arquivo `.htaccess` não é
permitida.

```
[Tue May 06 09:12:31.528374 2025] [core:alert] [pid 12345] [client 192.168.1.50:54321] /var/www/html/.htaccess: DirectoryIndex not allowed here
```

Isso indicará que foi usada uma diretiva que
nunca é permitida em arquivos `.htaccess`, ou que simplesmente
não existe um `AllowOverride` definido para
um nível suficiente para a diretiva usada. Consulte a
documentação dessa diretiva específica para determinar qual
é o caso.

Alternativamente, pode aparecer um erro de sintaxe no
uso da própria diretiva.

```
[Tue May 06 09:14:02.946218 2025] [core:alert] [pid 12345] [client 192.168.1.50:54321] /var/www/html/.htaccess: RewriteCond: bad flag delimiters
```

Neste caso, a mensagem de erro deve ser específica para o
erro de sintaxe cometido.

Línguas Disponíveis: [en](https://httpd.apache.org/docs/2.4/pt-br/en/howto/htaccess.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/howto/htaccess.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/howto/htaccess.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/howto/htaccess.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/howto/htaccess.html "Korean") |
[pt-br](pt-br__howto__htaccess.md "Português (Brasil)")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
