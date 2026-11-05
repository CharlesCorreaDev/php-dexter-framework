# Noções básicas sobre a delegação de configuração do IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/understanding-iis-configuration-delegation

---

Sumário 

Sair do modo Editor

Pergunte e aprenda

Pergunte e aprenda

Modo de leitura

Sumário
[Ler em inglês](#)

Adicionar

Adicionar a Planos

---

Copiar Markdown

Imprimir

---

Observação

O acesso a essa página exige autorização. Você pode tentar [entrar](#) ou alterar diretórios.

O acesso a essa página exige autorização. Você pode tentar alterar os diretórios.

# Noções básicas sobre a delegação de configuração do IIS 7.0

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

O IIS apresenta um novo sistema de configuração baseado em arquivo para sua sétima versão do produto. Esse novo sistema enfatiza um sistema controlado por dados adequado para uma plataforma Web inteira em que tecnologias como ASP.NET, Indigo e até componentes de terceiros podem usar e estender esse repositório de configuração para abrigar qualquer propriedade de site ou aplicativo.

O sistema é baseado em arquivos XML definidos em um formato simples e claro com uma sintaxe semelhante para ASP.NET web.config arquivos. Esses arquivos de configuração contêm configurações em agrupamentos lógicos e qualquer alteração nos arquivos é refletida imediatamente no site ou aplicativo cujas propriedades estão sendo modificadas.

Esse novo sistema também fornece uma experiência de administração delegada na qual: os administradores podem permitir que proprietários de sites e aplicativos modifiquem configurações específicas; e, o impacto dessas alterações é limitado ao site ou aplicativo específico em questão. Este modelo apresenta o conceito de *aplicativos autocontidos*, onde tanto o conteúdo quanto as configurações estão armazenados no diretório do site ou do aplicativo e podem ser implantados via cópia direta de uma máquina para outra.

## Arquivos de configuração e esquema de configuração

O IIS 7.0 e superior tem um arquivo de configuração central chamado *applicationHost.config* localizado em `%WINDIR%\System32\InetSrv\Config\`. Esse arquivo substitui o arquivo metabase.xml que o IIS 6.0 usou para seu repositório de configuração. Esse novo sistema de configuração é muito simples, baseado em arquivo e ainda muito poderoso. Não há nenhum serviço de configuração, pois IISADMIN não é necessário. Cada processo de trabalho tem uma instância de um componente de leitor de configuração e busca a configuração diretamente dos arquivos.

Além disso, não há nenhuma representação na memória da configuração. Depois que uma alteração é emitida em um arquivo, ela é captada imediatamente pelo processo de trabalho e refletida no determinado site, aplicativo ou diretório virtual.

O arquivo applicationHost.config armazena configurações globais para os diferentes recursos e componentes do IIS e outras tecnologias da Web. Qualquer propriedade definida nesse arquivo será aplicada a todos os sites, aplicativos e diretórios virtuais no computador.

O leitor de configuração usado pelo IIS entende o formato, a sintaxe e a nomenclatura correta de cada seção de configuração, elemento e atributo porque eles são definidos em um arquivo de esquema. O esquema de configuração é definido em arquivos localizados no `%WINDIR%\System32\InetSrv\Config\Schema\` diretório. Ao instanciar o sistema de configuração, o processo de trabalho lê o esquema na memória e isso ajuda o sistema a entender as propriedades que estão disponíveis para serem definidas e seu formato. No mínimo, *IIS\_schema.xml*, *ASPNET\_schema.xml* e  *arquivosFX\_schema.xml* estão localizados nesse diretório e definem a estrutura de configuração para seções que se aplicam ao IIS, ASP.NET e aos recursos do .NET Framework, respectivamente.

O esquema define vários aspectos da configuração e suas seções, como a nomenclatura de seções e propriedades, os tipos esperados para valores, o intervalo desses valores ou se algum deles for exclusivo ou necessário. Além disso, define o valor padrão que um atributo específico usará. No caso em que uma propriedade não é definida em applicationHost.config, seu valor é retirado da configuração padrão que foi declarada no arquivo de esquema.

Além desse arquivo central, applicationHost.config, vários arquivos *web.config* podem aparecer em qualquer nível da hierarquia de URL. Esses arquivos podem aparecer no site, aplicativo, diretório virtual ou até mesmo nos níveis de caminho físico. Esses arquivos definem propriedades cujos valores substituem as configurações globais definidas em applicationHost.config. No entanto, essas alterações só são aplicáveis no escopo ao qual o arquivo é exibido, ou seja, para o site, aplicativo, diretório virtual ou caminho físico fornecido para onde o arquivo web.config reside.

## Hierarquia de configuração e configuração eficaz

Além de applicationHost.config, o IIS usa ASP.NET, que depende do *machine.config* e dos arquivos *de web.configraiz*  . O arquivo machine.config define as propriedades necessárias para todos os recursos da Estrutura. O arquivo de web.config raiz define as configurações globais para propriedades definidas para todos os aplicativos Web ASP.NET. Esses dois arquivos são análogos a applicationHost.config do IIS. Os três arquivos existem porque o .NET Framework e a versão do IIS são separados. Pode haver várias versões do Framework instaladas em um determinado sistema do Windows Server que tenha uma única versão do IIS.

Portanto, uma hierarquia de configuração é definida e calculada para as configurações do sistema. A hierarquia começa em machine.confige, em seguida, progride para o arquivo de web.config raiz, seguido por applicationHost.config. A partir daí, qualquer arquivo de web.config opcional localizado no site, no nível do aplicativo ou do diretório virtual é adicionado e aplicado à hierarquia. No final, as propriedades são herdadas do arquivo pai para o arquivo filho, de machine.config até o último arquivo de web.config (se houver), e a configuração resultante efetiva é calculada para um determinado caminho.

O comportamento de herança ocorre por padrão. Qualquer configuração em um nível inferior na hierarquia substitui uma configuração pai definida em um arquivo em um nível superior ao atual. No entanto, indo mais para baixo na hierarquia, o escopo da configuração é mais limitado. Quando as configurações dos arquivos machine.config, raiz web.config e applicationHost.config se aplicam a tudo no sistema, as configurações opcionais dos arquivos web.config se aplicam apenas ao local atual e abaixo (seja um site, aplicativo ou diretório virtual).

## Seções de configuração

Em um arquivo de configuração, há possíveis configurações que podem ser lidas e definidas. As configurações são agrupadas de maneira estruturada. Várias configurações semelhantes ou aplicáveis a um recurso específico (i.e. ASP, autenticação, ISAPI etc.) são agrupadas em blocos de unidade lógica *chamados seções de configuração*. Cada seção de configuração pode incluir outras seções de configuração dentro delas, mas geralmente definem elementos, coleções ou atributos.

Um elemento de configuração é um elemento XML que define vários atributos de configuração. Uma coleção de configuração é um caso especial de um elemento de configuração que contém uma lista de elementos definidos com as diretivas de configuração add/remove/clear. Por fim, os atributos de configuração são configurações de folha que representam atributos XML.

O trecho abaixo mostra as opções de configuração da *<seção defaultDocument>*. A palavra *habilitada* é um atributo, enquanto o termo *arquivos* é um elemento que inclui uma listagem de outros elementos que são definidos pela diretiva *add* e um conjunto de atributos.

```
<defaultDocument enabled="true"> 
    <files> 
        <add value="Default.htm" /> 
        <add value="Default.asp" /> 
        <add value="index.htm" /> 
        <add value="index.html" /> 
        <add value="iisstart.htm" /> 
        <add value="default.aspx" /> 
    </files> 
</defaultDocument>
```

Esta seção de configuração tem um esquema associado. O snippet a seguir mostra o esquema da <seção defaultDocument> no arquivo IIS\_schema.xml. O esquema define o nome da seção e o namespace em que ele aparece (nesse caso, *system.webServer*). Além disso, o esquema descreve os atributos e elementos e para cada nome, tipo, valores padrão e outros dados interessantes.

```
<sectionSchema name="system.webServer/defaultDocument"> 
    <attribute name="enabled" type="bool" defaultValue="true" /> 
    <element name="files"> 
      <collection addElement="add" clearElement="clear" removeElement="remove" mergeAppend="false"> 
        <attribute name="value" type="string" isUniqueKey="true"/> 
      </collection> 
    </element> 
</sectionSchema>
```

## Uma seção especial: <configSections>

A `<configSections>` seção de configuração é uma seção especial definida em applicationHost.config. Ele é usado como um ponto de registro para as seções de configuração do servidor IIS. Esta seção é onde as seções de configuração atuais que estão disponíveis no sistema são registradas. Caso o sistema de configuração seja estendido e uma seção personalizada seja adicionada ao servidor, ele deverá ser registrado adicionando uma entrada de elemento a esta seção.

O trecho a seguir mostra a `<configSections>` entrada <da seção defaultDocument>. Outras entradas foram omitidas por uma questão de clareza. A parte interessante é a `<configSections>` entrada do grupo de seções que define o namespace de cada seção– nesse caso *, system.webServer* e o valor do atributo overrideModeDefault, que para esta seção é "Permitir". Como allowDefinition não é declarado, ele é retirado do esquema e o valor padrão é "Everywhere".

```
<configSections> 
    <sectionGroup name="system.webServer"> 
        <section name="defaultDocument" overrideModeDefault="Allow" />
    </sectionGroup>
</configSections>
```

Além de definir uma seção e seu grupo de seções, há dois atributos principais definidos: *overrideModeDefault* e *allowDefinition*.

O atributo overrideModeDefault é um atributo opcional que define o estado bloqueado de uma seção. Seus valores disponíveis são *Permitir* ou *Negar*. O valor padrão é "Permitir". Todas as seções do IIS relacionadas a qualquer desempenho, segurança ou aspecto crítico do servidor são bloqueadas com esse atributo definido como "Negar". Se o atributo overrideModeDefault for definido como "Deny", todos os arquivos de configuração em um nível inferior (ou seja, web.config arquivos) que definem um valor para uma propriedade para a seção de configuração específica não poderão entrar em vigor e substituir os valores globais. Isso incorre em uma violação de bloqueio e ocorre um erro.

O atributo allowDefinition é outro atributo opcional que define o nível da hierarquia na qual a seção pode ser definida e as propriedades podem ser definidas. Se o valor for *MachineOnly*, a seção poderá ser definida apenas em applicationHost.config ou machine.config. Se seu valor for *MachineToRootWeb*, a seção poderá ser definida nos arquivos MachineOnly ou também no web.configraiz. Se seu valor for *MachineToApplication*, a seção poderá ser definida em todos os três arquivos anteriores ou também em arquivos web.config na pasta raiz do aplicativo. Por fim, se seu valor for *Everywhere* (que é o padrão), ele poderá ser definido em qualquer arquivo de configuração, seja aquele que afeta a configuração globalmente ou em arquivos web.config que se aplicam a um determinado site, aplicativo ou diretório virtual.

## O conceito de localização

Qualquer configuração especificada em um determinado arquivo da hierarquia de configuração se aplica a esse nível e abaixo com a possibilidade de ser substituída por arquivos filho. No entanto, há a opção de especificar e aplicar configurações a determinados caminhos no arquivo de configuração atual usando a marca *de localização* com um atributo de caminho. Se o arquivo de configuração for applicationHost.config, as tags de localização poderão incluir um caminho que abrange todos os sites, aplicativos e diretórios virtuais do sistema até um site, aplicativo, diretório virtual ou arquivo específico. A marca de localização também pode ser especificada em arquivos web.config e pode incluir qualquer caminho relativo para caminhos abaixo do site, aplicativo ou diretório virtual atual.

O snippet a seguir mostra como especificar uma propriedade de configuração a ser aplicável somente ao Site do Desenvolvedor. Isso também pode ser obtido por meio de um arquivo web.config no conteúdo do site. A configuração efetiva do Site do Desenvolvedor será a lista de entradas para a coleção de arquivos em applicationHost.config mais o caminho de localização e qualquer arquivo web.config para o site.

```
<location path="Developer Site" overrideMode="Allow"> 
    <defaultDocument enabled="true"> 
        <files> 
            <add value="Developer.htm" /> 
        </files> 
    </defaultDocument> 
</location>
```

Se nenhum caminho for declarado, o que equivale a especificar um ponto (.), o caminho será entendido como sendo desse nível e abaixo para todos os caminhos filho. Fazer isso em applicationHost.config está especificando a configuração para o nível global também.

Um atributo que pode ser definido em um tag de local é o *overrideMode*. Como overrideModeDefault, isso especifica se a seção de configuração referenciada e as propriedades definidas na tag de localização atual podem ser editadas e substituídas em níveis mais baixos da hierarquia.

## Bloqueio e desbloqueio de uma seção

O conceito inicial de travar uma seção por meio da tag overrideModeDefault na seção `<configSections>` pode ser adotado e estendido para um nível mais detalhado. Ao permitir que uma seção seja substituída no `<configSections>` nível, a seção é aberta e seus valores podem ser substituídos por qualquer pessoa no sistema por meio de arquivos web.config em qualquer nível do namespace de URL. No entanto, isso pode representar um sério risco à segurança e pode causar efeitos negativos à disponibilidade ou ao desempenho do sistema. Por meio de marcas de localização, é possível usar o atributo overrideMode e especificar o estado de bloqueio de uma seção e restringi-lo para um determinado caminho.

O snippet a seguir mostra como desbloquear a `<windowsAuthentication>` seção para todos os sites, aplicativos e diretórios virtuais no sistema. Isso é feito definindo "Permitir" no atributo overrideModeDefault. A desvantagem dessa abordagem é que ela desbloqueia uma seção para todos e qualquer pessoa é capaz de substituir as configurações em seu site ou nível de aplicativo por meio de arquivos web.config.

```
<section name="windowsAuthentication" overrideModeDefault="Allow" />
```

O snippet a seguir mostra como obter a mesma coisa, desbloqueando a `<windowsAuthentication>` seção, mas apenas para o AdministratorSite para que as propriedades dessa seção possam ser modificadas por meio de arquivos web.config no nível do AdministratorSite do site. Os outros sites no sistema têm o comportamento padrão de uma seção bloqueada `<windowsAuthentication>` . Isso é feito por meio do atributo overrideMode.

```
<location path="AdministratorSite" overrideMode="Allow"> 
   <security> 
        <authentication> 
            <windowsAuthentication enabled="false"> 
                <providers> 
                    <add value="Negotiate" /> 
                    <add value="NTLM" /> 
                </providers> 
            </windowsAuthentication> 
        </authentication> 
   </security> 
</location> 
 
The location tag path can be specified here a site, application or even a virtual directory to which the administrator wants to unlock configuration and/or apply configuration at that level.
```

O comportamento oposto pode ser alcançado, que é bloquear uma seção para um site específico, enquanto o restante do sistema é capaz de editá-lo. Por exemplo, <defaultDocument> é uma seção que tem o atributo overrideModeDefault definido como "Permitir" na seção `<configSections>`, mas por meio de uma tag de localização, podemos bloquear essa seção para o Site Básico. Os trechos de código a seguir mostram como realizar isso, configurando para que o único valor aceito pelo sistema como página padrão do servidor a ser exibida como a página inicial seja intitulado *basic.htm*. A diretiva clear anula todos os valores herdados dos níveis acima na hierarquia de configuração, que nesse caso é a listagem global de arquivos de applicationHost.config.

```
<location path="Basic Site" overrideMode="Deny"> 
    <defaultDocument enabled="true"> 
        <files> 
       </clear> 
            <add value="basic.htm" /> 
        </files> 
    </defaultDocument> 
</location>
```

## Bloqueio granular

Abrir uma seção por meio de uma tag de localização é uma maneira eficaz de desbloquear uma seção e todas as suas propriedades para o proprietário do site ou aplicativo no caminho especificado. Isso é, na verdade, uma abordagem de tudo ou nada para permitir que proprietários de sites e aplicativos tenham acesso ilimitado a uma seção. No entanto, às vezes, os administradores querem controle específico sobre determinadas propriedades em uma seção e desejam controle sobre determinado valor. Outros podem ser delegados. É aqui que entra o bloqueio granular.

O bloqueio granular é um agrupamento de atributos específicos que podem ser definidos em elementos ou outros atributos. O bloqueio granular pode declarar se os caminhos abaixo do atual podem modificar os valores de configuração. Os valores podem ser lidos, mas se os bloqueios forem definidos, eles não poderão ser editados ou até mesmo declarados. Não edite valores cujos bloqueios estão definidos, pois isso resultará em erros de violação de bloqueio de configuração.

O primeiro atributo no agrupamento de bloqueio granular é *lockAttributes*. O lockAttributes define uma lista separada por vírgulas de atributos bloqueados para caminhos abaixo do nível de configuração atual. Ele também aceita um asterisco (\*) como seu valor, o que significa que todos os atributos estão bloqueados. Neste ponto, a seção de configuração pode ser lida em caminhos de nível filho e até mesmo nos atributos bloqueados, mas editar os atributos protegidos resulta em erros.

O trecho de código a seguir mostra como travar o estado habilitado da <seção defaultDocument> para o Site do Desenvolvedor. Se o proprietário do Site do Desenvolvedor desabilitar o recurso de documento padrão ou até mesmo declarar a propriedade com o mesmo valor que o indicado na marca de localização, ocorrerá uma violação de bloqueio.

```
<location path="Developer Site" > 
    <defaultDocument enabled="true" lockAttributes="enabled" /> 
</location>
```

O segundo atributo no agrupamento de bloqueio granular é *lockElements*. O lockElements define uma lista separada por vírgulas de elementos bloqueados para caminhos abaixo do nível de configuração atual. Assim como lockAttributes, ele também aceita um asterisco (\*) como seu valor, o que significa que todos os elementos estão bloqueados. Isso é muito útil para seções de configuração que possuem vários elementos ou coleções e precisam ser protegidas em caminhos de nível infantil. Novamente, a edição de qualquer um dos valores bloqueados resulta em erros.

O snippet a seguir mostra como bloquear a coleção de arquivos para o Site do Desenvolvedor. Isso deixa para o proprietário do site decidir se o recurso de documento padrão está habilitado ou não; mas, se habilitado, ele não pode modificar os valores globais e herda o que o administrador do computador afirmou em applicationHost.config.

```
<location path="Developer Site"> 
    <defaultDocument enabled="true" lockElements="files" > 
        <files> 
            <add value="Developer.htm" /> 
        </files> 
    </defaultDocument> 
</location>
```

O exemplo lockElement também é útil em coleções para bloquear as *diretivas* dessa coleção. As diretivas são as palavras-chave, como *adicionar, remover, limpar* uma coleção. Ao bloquear as diretivas, um administrador pode ajustar se uma listagem de coleção está disponível para adicionar ou remover determinados ou todos os elementos.

O snippet a seguir mostra como bloquear a remoção e a limpeza das entradas atuais na coleção de arquivos. O proprietário do site pode adicionar novas entradas à coleção de arquivos, se necessário. Se o proprietário do site especificar uma marca clara ou tentar remover uma entrada, ocorrerá uma violação de bloqueio.

```
<location path="Developer Site"> 
    <defaultDocument enabled="true" > 
        <files lockElements="clear,remove"> 
            <add value="Developer.htm" /> 
        </files> 
    </defaultDocument> 
</location> 
 
Besides lockAttribute and lockElement, there are negative counterparts: lockAllAttributesExcept, and lockAllElementsExcept. These attributes achieve  the inverse action of the previous ones in which the comma-separated list declares the attributes and elements to be unlocked while the rest are not  available to be edited in child paths.
```

Há também um atributo *lockItem* . Isso bloqueia um atributo e funciona no nível do atributo XML. O snippet a seguir mostra como o administrador do site é capaz de fazer qualquer coisa que deseja fazer, como adicionar ou remover entradas na coleção, exceto modificar a entrada basic.htm na coleção de arquivos.

```
<location path="Developer Site"> 
    <defaultDocument enabled="true" > 
        <files> 
            <add value="basic.htm" lockItem="true"/> 
        </files> 
    </defaultDocument> 
</location>
```

## Resumo

Este documento delineou uma visão geral básica sobre o sistema de configuração, seus arquivos, recursos de esquema e delegação. Ele também discutiu a hierarquia de configuração e a configuração efetiva. O artigo também apresentou uma introdução às seções de configuração e sua estrutura de elementos e atributos. Ele exemplificou o conceito de localização, bloqueio e bloqueio granular.

No geral, o IIS introduz um novo sistema de configuração baseado em arquivo, com recursos para ter toda a configuração em um arquivo de configuração central ou distribuído via arquivos web.config, em que os administradores de sites e aplicativos podem modificar propriedades que se aplicam a seus aplicativos e conteúdo. Com o modelo de configuração distribuída, o conceito de *aplicativos autocontidos*, em que tanto o conteúdo quanto as configurações são alojados no diretório do site ou do aplicativo e podem ser *x-copy* *implantados* de um computador para outro, está habilitado.

---

## Comentários

Esta página foi útil?

Sim

Não

Não

Precisa de ajuda com este tópico?

Quer experimentar o Pergunte e aprenda para esclarecer ou guiar você neste tópico?

Pergunte e aprenda

Pergunte e aprenda

 Sugerir uma correção?

---

## Recursos adicionais

---

- Última atualização em 
  2026-03-28
