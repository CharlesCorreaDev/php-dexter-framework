# Aprofundamento na configuração do IIS com o IIS 7 e o IIS 8 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-your-iis-architecture/deep-dive-into-iis-configuration-with-iis-7-and-iis-8

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

# Aprofundamento na configuração do IIS com o IIS 7 e o IIS 8

Comentários

por [Tobin Titus](https://github.com/tobint)

## Introdução

O sistema de configuração no IIS 7 e acima é significativamente diferente das versões anteriores do IIS e se baseia em alguns (mas não todos) dos conceitos do sistema de configuração do .NET Framework. Seu escopo abrange toda a plataforma de servidor Web (IIS, ASP.NET) e serve como o núcleo da "pilha" de administração do IIS. Este documento percorre o design e a arquitetura do sistema de configuração e apresenta a interface programável ao sistema no ponto de entrada de código nativo de nível mais baixo.

Há muito poucas "partes móveis" em runtime que implementam o sistema de configuração. O sistema de configuração é implementado como uma biblioteca que é executada no proc no aplicativo cliente e interage com um repositório persistente em disco. O repositório é simplesmente um arquivo, ou um conjunto de arquivos, no sistema de arquivos. O formato dos arquivos é XML. Os usuários podem editar os arquivos manualmente a qualquer momento, se quiserem, e as alterações são automaticamente captadas pelo sistema. Não há modelos proprietários para fazer operações padrão, como proteger as configurações, fazer backup delas, movê-las ou até mesmo estender o sistema com novas configurações. O sistema depende muito do sistema de arquivos, para simplificar tarefas como implantar a configuração para aplicativos e serviços Web.

Observação

Não há nenhum serviço de configuração centralizado como nas versões anteriores do IIS. Isso permite uma melhoria significativa de desempenho ao ler grandes partes de dados do repositório, especialmente na inicialização, pois não há comunicação entre processos e cópia de buffer que precise ocorrer.

Logo após a instalação do IIS, ele já está pronto para funcionar, havendo vários elementos que consomem a configuração:

- WAS (Serviço de Ativação do Windows): lê padrões globais para pools de aplicativos, sites e outras configurações.
- Núcleo do servidor Web e módulos nos processos de trabalho: quando ativado para processar uma solicitação, leia as configurações de configuração que controlam seu comportamento.
- Provedor WMI: o provedor de interface de script do IIS está usando o sistema de configuração internamente para obter e definir as configurações.
- AppCmd.exe: a ferramenta de linha de comando do IIS está usando o sistema de configuração internamente para obter e definir as configurações.
- Interface do usuário: a estrutura de administração do IIS está usando o sistema de configuração internamente para obter e definir as configurações.
- Herdado: aplicativos e scripts que usam interfaces como ABO, ADSI e o provedor WMI do IIS 6.0, usam o sistema de configuração indiretamente, por meio de um componente que mapeia as APIs de ABO herdadas e o modelo para o novo modelo de configuração. O estado sempre persiste no novo sistema de configuração.

Há várias interfaces que fornecem acesso às configurações:

| Interfase | Acesso a |
| --- | --- |
| Edição manual dos arquivos usando um editor de texto ou talvez por meio de um script. | Todos os arquivos de configuração, se as ACLs de arquivo permitirem. |
| APIs de configuração em código nativo e código gerenciado. | Todos os arquivos de configuração, se as ACLs de arquivo permitirem. |
| Abstrações de nível superior na parte superior do sistema de configuração, como o provedor de script WMI do IIS, a interface do usuário ou a ferramenta de appcmd.exe. | Todos os arquivos de configuração, se as ACLs de arquivo e a política de delegação da interface do usuário permitirem. |
| Interfaces herdadas do IIS, como ABO, ADSI, provedor WMI do IIS 6.0. | Somente o arquivo de configuração raiz do IIS e apenas as configurações herdadas (IIS 6.0). As configurações da estrutura do .NET e as configurações do IIS 7.0 e superior não são expostas a essas interfaces. |
| Interfaces herdadas do framework .NET, como System.Configuration. | Somente as configurações do .NET Framework 2.0 em arquivos machine.config e web.config. |

## Níveis de configuração

Cada nível do namespace de URL pode ter a configuração associada. A configuração de um determinado nível herda para níveis filho, a menos que seja substituída especificamente por um nível filho. Uma maneira simples de obter a configuração por URL é usando arquivos web.config, nas pastas físicas do sistema de arquivos mapeadas para os caminhos virtuais. No nível raiz (o nível do computador), arquivos separados devem ser usados, dependendo do grupo de seções de configuração (que será definido posteriormente no documento; por enquanto, pense nele como o nome do elemento XML que contém a configuração):

| Grupo de Seções | Descrição | Arquivo raiz |
| --- | --- | --- |
| system.applicationHost | Sistema de Ativação do Windows: modelo de processo | system32\inetsrv\config\applicationhost.config |
| system.webServer | IIS: servidor Web | system32\inetsrv\config\applicationhost.config |
| System.web | ASP.NET | Windows\microsoft.net\framework\v2.0.50727\config\web.config |
| Sistema.\* | Outra estrutura do .NET | Windows\microsoft.net\framework\v2.0.50727\config\machine.config |
| [Microsoft outros] | Outros da Microsoft | Windows\microsoft.net\framework\v2.0.50727\config\machine.config |
| [personalizado] | Partes Terceiras | machine.config ou web.config raiz ou applicationHost.config, até 3 terceiros/cliente |

Às vezes, web.config arquivos não são desejados ou não podem ser usados. Exemplos:

- Segurança: ocasionalmente, os administradores de computador desejam ser capazes de controlar a configuração em todos os lugares no servidor. Com o web.config nos diretórios de conteúdo, administradores de nível de site (ou desenvolvedores de aplicativos) que têm acesso de gravação a esses diretórios podem copiar com xcopy, enviar via FTP ou modificar os arquivos web.config, violando a política desejada.
- Notificações de alteração remota: o diretório de conteúdo está em um compartilhamento UNC (remoto), e o uso do web.config causa problemas de desempenho, escalabilidade ou outros. Por exemplo, alguns sistemas de arquivos de back-end não Windows não dão suporte a notificações de alteração de arquivo da maneira esperada pelo Windows. Outro exemplo: o sistema mantém conexões abertas com muitos diretórios remotos para monitorar alterações no arquivo e consome muitos recursos no servidor, levando a problemas de desempenho.
- Ponto único de administração: para facilitar o gerenciamento de configuração, a descoberta e a solução de problemas, o administrador do computador gostaria que um arquivo no nível raiz contivesse toda a configuração para todos os níveis da hierarquia. Na realidade, haverá três arquivos no nível global: machine.config e web.config raiz para as configurações da estrutura do .NET e applicationHost.config para as configurações do IIS. Isso é muito mais contido do que simplesmente permitir que cada nível na hierarquia tenha seu próprio arquivo web.config.
- Configuração compartilhada: vários caminhos virtuais que apontam para a mesma pasta física, compartilham o mesmo web.config que está nessa pasta. Obviamente, esse arquivo web.config não pode ser usado para especificar uma configuração diferente para os caminhos diferentes.
- Configuração específica do arquivo: arquivos Web.config se aplicam a toda a pasta, ou seja, a todos os arquivos nessa pasta. Para especificar uma configuração diferente para um arquivo específico, outro método deve ser usado.

A alternativa aos arquivos web.config na hierarquia de configuração são as tags de localização, que são o assunto da próxima seção.

### Marcas de localização

As marcas de localização são usadas para especificar a configuração específica do caminho como uma alternativa para ter um arquivo web.config na pasta mapeado para esse caminho virtual. A etiqueta de localização para um caminho é definida em um nível pai na hierarquia de configuração e é considerada como estando nesse nível pai. Isso é importante quando se trata de bloquear semântica e qual nível pode especificar quais seções.

O atributo principal nas marcas de localização é "path". Os valores podem ser:

- "." (ou ""): ou seja, o nível atual. Caminhos de localização típicos são definidos no nível global e, portanto, "" significa o nível global; no entanto, eles podem ser definidos em qualquer lugar na hierarquia de arquivos de configuração. Esse também é o valor padrão, se "path" não estiver definido.
- "sitename": o aplicativo raiz de um site específico.
- "sitename/application": um aplicativo específico de um site específico.
- "sitename/application/vdir": um diretório virtual específico de um aplicativo específico de um site específico.
- "sitename/application/vdir/physicaldir: um diretório físico específico. O caminho pode ser mais complexo, no formato "sitename/app/vdir/p1/p2/p3".
- "sitename/application/vdir/file.ext": um arquivo específico. O caminho pode ser mais complexo, na forma de "sitename/app/vdir/p1/p2/file.ext", ou menos complexo, na forma de "sitename/app/file.ext" ou "sitename/file.ext".

Várias marcas de localização podem existir em um único arquivo de configuração, mas não podem referenciar o mesmo caminho (a menos que referenciem seções diferentes). No entanto, eles podem referenciar caminhos filho, de modo que cada tag de localização faça referência a um caminho filho de outra tag de localização. A ordem das marcas de localização não é importante para o sistema de configuração, mas é importante para a legibilidade do arquivo por usuários humanos.

```
<location path=".">   <system.webServer>     <defaultDocument enabled="false"/>   </system.webServer> </location>
<location path="MySite">   <system.webServer>     <defaultDocument enabled="true"/>   </system.webServer> </location>
<location path="MySite/YourApp/images">   <system.webServer>     <defaultDocument enabled="false"/>   </system.webServer> </location>
```

## Organização das Configurações

Em um arquivo de configuração, as configurações são organizadas de maneira estruturada, com base em uma unidade chamada "seção". A seção de configuração é um grupo de configurações logicamente relacionadas que podem ser implantadas ou desregistradas como um todo, e normalmente são utilizadas por um módulo de servidor.

Em outras palavras, quase todos os módulos de runtime executados no processo de trabalho têm uma seção de configuração correspondente para ele. A seção de configuração também é a unidade de extensibilidade: a adição de novas configurações ao esquema de configuração é feita adicionando uma ou mais seções a ela.

As seções não podem ser aninhadas. Arquitetônicamente, eles são independentes uns dos outros (na maioria dos casos), o que significa que eles não fazem referência cruzada.

As seções são agrupadas ainda mais em coleções relacionadas logicamente, chamadas de "grupos de seções". Os grupos de seções não são a unidade de implantação ou registro ou qualquer outra operação substancial (por exemplo, bloqueio, criptografia). Eles não têm configurações neles. Sua finalidade é estruturar ainda mais a organização das configurações e evitar uma longa lista simples de seções de configuração.

Elas são usadas para criar hierarquia de configurações, portanto, elas têm relações entre elas (pai/filho). Em outras palavras, os grupos de seções podem ser aninhados. Uma determinada seção sempre pertence apenas a um grupo de seções e não pode conter outra seção (ou grupos de seções). Um determinado grupo de seções pode pertencer a um grupo de seções pai e pode conter zero ou mais grupos de seções filho. Normalmente, ele contém mais de uma seção, caso contrário, não haveria um bom motivo para tê-lo em primeiro lugar (no entanto, os clientes podem estender o esquema criando seus próprios grupos de seções que têm apenas uma seção, por qualquer motivo).

Aqui está um exemplo que demonstra seções e grupos de seções:

```
<!-- section group for web server configuration -->

<system.webServer>
  <!-- section group for web server security configuration -->
  <security>
    <!-- section group for web server authentication configuration -->
    <authentication>
      <!-- three sections for authentication -->
      <basicAuthentcation ... />
      <windowsAutnentication ... />
      <anonymousAuthentication ... />
    </authentication>
  </security>
</system.webServer>
```

Cada seção tem um nome. O nome curto é o nome da própria seção e o nome longo é o nome completo, incluindo todos os grupos de seções que contêm. Por exemplo, o nome completo de "windowsAuthentication" é "system.webServer/security/authentication/windowsAuthentication". Essa organização hierárquica permite seções futuras (e grupos de seções) com o mesmo nome, mas em diferentes grupos de seções.

## Mapeamento XML da Organização <==>

O formato de persistência da configuração é XML; portanto, é útil descrever os mapeamentos entre as unidades organizacionais de configuração e a terminologia XML. Grupos de seções e seções são elementos XML. Em uma seção, as configurações são organizadas em unidades menores que seguem de perto a terminologia XML:

| Unidade de configuração | Terminologia XML | Descrição |
| --- | --- | --- |
| Elemento de Configuração | elemento XML | contém outras unidades filho; não tem um valor. |
| Conjunto de Configurações | elemento XML | caso privado de elemento: contém um grupo de elementos na forma de adicionar/remover/limpar. |
| Propriedade de configuração | atributo XML | Contém apenas um valor; não contém unidades filho. |

Aqui está um exemplo de applicationHost.config:

```
<!-- "windowsAuthentcation" is a configuration section (XML element). -->
<!-- "enabled" is a configuration property (XML attribute).           -->
<windowsAuthentication enabled="true">
  <!-- "providers" is a configuration collection (XML element). -->
  <providers>
    <!-- Two configuration elements (XML elements).           -->
    <!-- "add" is the collection directive.                   -->
    <!-- "value" is a configuration property (XML attribute). -->
    <add value="Negotiate"/>
    <add value="NTLM"/>
  </providers>
</windowsAuthentication>
```

## Schema

O sistema de configuração é baseado em um esquema declarativo em sua essência. Isso é diferente do IIS 6.0, por exemplo, em que o esquema real era codificado e não usado pela ABO, e o provedor ADSI (que é uma interface de nível superior na parte superior da ABO) tinha seu próprio esquema que os clientes poderiam estender. Isso também é muito diferente da arquitetura do sistema de configuração v2.0 do .NET Framework, em que o "esquema" para configurações foi codificado principalmente em classes individuais que implementaram a lógica de manipulação de sua respectiva seção (essas classes eram chamadas de "manipuladores de seção"). O esquema declarativo também significa que estender o sistema é uma questão de adicionar declarações, não código, ao sistema (novamente, ao contrário da abordagem do .NET Framework).

O esquema de configuração abrange vários arquivos, que residem em um local conhecido: system32\inetsrv\config\schema. Por padrão, somente os administradores de computador têm acesso a essa pasta. Clientes ou terceiros podem adicionar arquivos de esquema para suas seções personalizadas copiando-os para esse diretório. O sistema de configuração os capturará automaticamente quando ele for iniciado, durante o processo de configuração acionado pelo chamador. Se o sistema de configuração já estiver em execução, ele não aplicará alterações nos arquivos de esquema ou adotará arquivos novos.

Não edite o IIS ou outros arquivos de esquema instalados nesse diretório, pois erros podem resultar em esquema corrompido e incapacidade de inicialização do servidor.

Observação

Não há nenhuma interface programática de alto nível para obter e definir arquivos de esquema, a não ser a API de acesso a arquivos tradicional e a análise/edição de XML. É sempre recomendável fazer backup do estado confidencial, como a pasta de esquema, antes de fazer alterações nele.

Três arquivos compõem o esquema unificado da plataforma do servidor Web:

- IIS\_schema.xml: abrange as configurações do sistema de ativação do Windows e do servidor Web do IIS nos grupos de seção `<system.applicationHost>` e `<system.webServer>`.
- ASPNET\_schema.xml: abrange as configurações de ASP.NET no grupo de `<system.web>` seções.
- FX\_schema.xml: abrange outras configurações da estrutura do .NET em vários grupos de seções.

## Organização de Declarações de Esquema

No arquivo de esquema, a organização se baseia na unidade de seções. As seções são definidas pelo nome completo, incluindo a contenção de grupos de seções. Os grupos de seções não são definidos por si só; eles são usados como parte do nome da seção para indicar a estrutura da hierarquia. Cada declaração de esquema de seção especifica nomes, tipos e valores padrão para as configurações da seção. Ele também especifica a estrutura dentro da seção: sub-elementos, coleções, propriedades.

Examinaremos um exemplo aqui, anotado com comentários XML para apontar as coisas; é altamente recomendável ler o documento "[ApplicationHost.config Passo a passo](get-started__planning-your-iis-architecture__introduction-to-applicationhostconfig.md)" para entender em mais detalhes como o sistema de esquema funciona e examinar o esquema de cada seção do IIS.

Exemplo:

```
<!-- The XML element name for defining a section schema is "sectionSchema" -->
<!-- It contains the full name of the section -->
<sectionSchema name="system.webServer/defaultDocument">
  <!-- A property schema is defined using an "attribute" XML element -->
  <attribute name="enabled" type="bool" defaultValue="true" />
  <!-- A sub-element schema is defined using an "element" XML element -->
  <!-- In this case, it is also a collection -->
  <element name="files">
    <!-- This collections uses the traditional "add", "remove", "clear" ->
    <!-- for the directive names, and supports all of them; other       -->
    <!-- collections may use different names, defined here, and support -->
    <!-- only some of the directives. Note the "prepend" behavior when  -->
    <!-- adding elements; most collections use "append"                 -->
    <collection addElement="add" clearElement="clear" removeElement="remove" mergeAppend="false">
  
     <!-- This defines the collection element schema; in this case, it -->
      <!-- has one attribute only: "name", e.g. <add name="file1.aspx"> -->
      <!-- The value for "name" is of type "string" and it serves as    -->
      <!-- the collection key, therefore needs to be unique             -->
      <attribute name="value" type="string" isUniqueKey="true"/>
    </collection>
  </element>
</sectionSchema>
```

## Informações adicionais de esquema em <configSections>

Nem todas as informações de esquema necessárias estão nos arquivos XML de esquema. Parte dela está em uma seção especial chamada `<configSections>`, que reside nos próprios arquivos de configuração. Isso é consistente com o sistema de configuração do .NET Framework. Por padrão, `<configSections>` existe em machine.config e applicationHost.config; mas os clientes podem adicioná-lo a qualquer arquivo web.config, para definir suas seções personalizadas. Essas seções serão definidas para esse nível no namespace e para baixo.

Observação

Clientes e terceiros não devem tentar alterar as informações de esquema para as seções internas, seja na pasta inetsrv\config\schema\ ou nos arquivos machine.config e applicationHost.config. Isso pode causar um comportamento indesejável nessas seções.

O conteúdo de `<configSections>`:

- Define as seções que estão "registradas" com o sistema
- Define a hierarquia de grupos de seções.
- \***não** define propriedades ou elementos em seções.

Alguns metadados adicionais são definidos para seções:

- **Tipo**: atributo necessário. Esse é o tipo de manipulador de seção para código gerenciado; é útil apenas no contexto do sistema de configuração do .NET Framework que acessa a seção (as classes System.Configuration). A definição é para um tipo forte, ou seja, inclui o nome da assemblagem, a versão, a cultura e a chave.
- **OverrideModeDefault**: atributo opcional. Se estiver ausente, o padrão será "Permitir". Esse é o estado de bloqueio padrão da seção, ou seja, se ela está bloqueada para o nível em que está definida ou, como alternativa, pode ser substituída por níveis inferiores da hierarquia de configuração. Se for "Negar", arquivos de web.config em níveis inferiores não poderão substituir suas configurações (em outras palavras: ele está bloqueado para esse nível). A maioria das seções do servidor Web do IIS está bloqueada, mas não todas. A maioria das seções do .NET Framework não estão bloqueadas, pois são consideradas configurações no nível do aplicativo. Se o valor for "Permitir", os níveis inferiores poderão substituir as configurações.
- **AllowDefinition**: atributo opcional. Se estiver ausente, o padrão será "Everywhere". Esse é o nível da hierarquia na qual a seção pode ser definida. Se for "MachineOnly", poderá ser definido apenas em applicationHost.config ou machine.config. Se for "MachineToRootWeb", ele poderá ser definido nos arquivos definidos acima para "MachineOnly" ou no arquivo de web.config raiz na pasta de configuração da estrutura do .NET (esse valor faz sentido apenas para seções da estrutura do .NET). Se for "MachineToApplication", poderá ser definido nos arquivos definidos acima para "MachineToRootWeb" ou no arquivo web.config na pasta raiz do aplicativo. Se for "Em todos os lugares", ele poderá ser definido em qualquer arquivo de configuração, inclusive em pastas associadas a diretórios virtuais que não são raízes de aplicativos, bem como em subdiretórios físicos localizados abaixo delas.

Aqui está um snippet simplificado de applicationHost.config:

```
<configSections>
  <sectionGroup name="system.applicationHost" type="">
    <section name="applicationPools" type="" allowDefinition="MachineOnly" overrideModeDefault="Deny" />
    <section name="customMetadata" type="" allowDefinition="MachineOnly" overrideModeDefault="Deny" />
    <section name="listenerAdapters" type="" allowDefinition="MachineOnly" overrideModeDefault="Deny" />
    <section name="log" type="" allowDefinition="MachineOnly" overrideModeDefault="Deny" />
    <section name="sites" type="" allowDefinition="MachineOnly" overrideModeDefault="Deny" />
    <section name="webLimits" type="" allowDefinition="MachineOnly" overrideModeDefault="Deny" />
  </sectionGroup>
  <sectionGroup name="system.webServer" type="">
    <section name="asp" type="" overrideModeDefault="Deny" />
    <section name="defaultDocument" type="" overrideModeDefault="Allow" />
    <sectionGroup name="security" type="">
      <section name="access" type="" overrideModeDefault="Deny" />
      <section name="applicationDependencies" type="" overrideModeDefault="Deny" />
      <sectionGroup name="authentication" type="">
        <section name="anonymousAuthentication" type="" overrideModeDefault="Deny" />        

      </sectionGroup>
    </sectionGroup>
  </sectionGroup>
</configSections>
```

## Bloqueio

As marcas de localização geralmente são usadas para bloquear ou desbloquear seções inteiras. O bloqueio mais granular, de elementos e atributos dentro de seções, também é compatível com o sistema de configuração, mas não está diretamente relacionado a marcas de localização.

O desbloqueio só pode ser feito no nível em que o bloqueio foi definido. Em outras palavras, um nível de configuração nunca pode desbloquear o que foi bloqueado pelos níveis superiores. Por exemplo, a seção não está bloqueada por padrão, portanto, essas marcas de localização no applicationHost.config a bloquearão para dois sites específicos:

```
<!-- lock down defaultDocument for MySite -->
<location path="MySite" overrideMode="Deny">
  <system.webServer>
    <defaultDocument/>
  </system.webServer>
</location>
  
<!-- specify a value for defaultDocument.enabled and lock it for YourSite -->
<location path="YourSite" overrideMode="Deny">
  <system.webServer>
    <defaultDocument enabled="true">
      <files>
        <clear/>
        <add value="default.aspx"/>
      </files>
    </defaultDocument>
  </system.webServer>
</location>
```

No exemplo acima, a primeira marca de localização simplesmente bloqueia a seção do MySite, com os valores já definidos para ele. A segunda etiqueta de localização altera os valores (habilitando a seção, limpando a coleção de arquivos e adicionando exatamente um elemento a ela) e também a bloqueia especificamente para o YourSite. Isso significa que, no nível do YourSite (web.config), o recurso de documento padrão está sempre ativado e não pode ser desativado e o único documento padrão respeitado é default.aspx.

O exemplo acima, com pequenas alterações, pode ser definido em arquivos de web.config de baixo nível e não apenas em applicationHost.config. Qualquer nível da hierarquia de configuração pode bloquear a configuração (para caminhos sob ela, é por isso que pequenas alterações são necessárias no exemplo para refletir um valor diferente para o caminho).

Marcas de localização com as mesmas seções podem abranger vários níveis da hierarquia, da mesma forma que os arquivos web.config podem. Eles são avaliados de acordo com as regras de herança. Não especificaremos aqui exatamente como as tags de localização são avaliadas em relação a arquivos web.config localizados abaixo deles na hierarquia, pois o algoritmo pode confundir os usuários que tentam criar uma hierarquia clara de herança e, às vezes, configurações bloqueadas. Por esses motivos, as marcas de localização às vezes podem se tornar confusas ou mais avançadas do que simplesmente usar arquivos web.config. No entanto, conforme indicado anteriormente na seção Arquitetura, há bons motivos para usar marcas de localização em alguns casos.

O bloqueio no exemplo acima foi feito usando o atributo overrideMode. Os valores são:

- "Permitir": desbloquear as seções especificadas na tag de localização.
- "Negar": Bloquear as seções especificadas na tag de localização.
- "Herdar": esse é o valor padrão se nenhum for especificado. O sistema de configuração avaliará o estado de bloqueio para seções especificadas no tag de localização, percorrendo a hierarquia de herança e determinando definições superiores para overrideMode, até a definição de esquema de seção de overrideModeDefault. O valor é finalmente resolvido pelo overrideModeDefault, porque ele é especificado nas informações do esquema, ou o valor padrão "Permitir" é usado.

O sistema também dá suporte a um atributo herdado para bloquear seções em marcas de localização: allowOverride. Esse atributo foi utilizado no sistema de configuração do .NET Framework, antes do overrideMode. É mapeado para a semântica de overrideMode da seguinte maneira:

| valor allowOverride | valor equivalente de overrideMode | Descrição |
| --- | --- | --- |
| verdadeiro | Permitir | Desbloquear seções especificadas |
| falso | Negar | Bloquear seções especificadas |
| [não definido] | Herdar | Resolver percorrendo a hierarquia de herança |

O modelo allowOverride tinha algumas limitações e complexidades, que não descreveremos aqui. Portanto, o modelo novo e recomendado é overrideMode.

Uma tag de localização não pode especificar ambos allowOverride e overrideMode. É considerada uma configuração ilegal, que falhará em tempo de execução com um erro adequado.

## Desbloqueio

Este exemplo mostra como desbloquear a seção. Como ele está bloqueado no nível applicationHost.config, ele só pode ser desbloqueado nesse nível.

```
<location overrideMode="Allow">
  <system.webServer>
    <modules/>
  </system.webServer>
</location>
```

Há casos em que é útil desbloquear seções somente para um caminho específico e mantê-las bloqueadas para todos os outros caminhos. O exemplo a seguir é criado em cima do anterior e mostra como desbloquear a seção somente para dois sites específicos; para todos os outros sites, ele permanecerá bloqueado.

```
<location path="TrustedSiteOne" overrideMode="Allow">
  <system.webServer>
    <modules/>
  </system.webServer>
</location>
 
<location path="TrustedSiteTwo" overrideMode="Allow">
  <system.webServer>
    <modules/>
  </system.webServer>
</location>
```

Para cada caminho de "exceção" que precise ser desbloqueado, é necessário haver um tag de localização diferente.

Complicações podem ocorrer quando há um conflito entre bloqueio e desbloqueio. Considere este exemplo:

```
<!-- in applicationHost.config: -->
<location path="MySite/shopping" overrideMode="Allow">
  <system.webServer>
    <modules/>
  </system.webServer>
</location>
<!-- in web.config at MySite root: -->
<location overrideMode="Deny">
  <system.webServer>
    <modules/>
  </system.webServer>
</location>
```

O conflito é entre o nível de applicationHost.config, que desbloqueia a seção especificamente para MySite/compras, e o web.config na raiz do MySite, que bloqueia as seções do site. Isso pode acontecer quando pessoas diferentes estão gerenciando a configuração para esses diferentes níveis da hierarquia. Nesse caso, o sistema de configuração tratará isso como configuração ilegal e falhará com um erro adequado.

## Resumo

Este documento delineou o design e a arquitetura do sistema de configuração do IIS. Ele explicou como obter a administração delegada das configurações usando a hierarquia dos níveis de configuração e os arquivos de web.config distribuídos; cobriu os pontos de integração, incluindo limitações, entre o IIS e os sistemas de configuração do .NET Framework; ele explicou o conceito de marcas e em quais circunstâncias elas devem ser preferenciais em relação aos arquivos de configuração; em seguida, introduziu o leitor ao bloqueio de configuração básico, no nível da seção. É recomendável ler o documento "[Como bloquear configuração](get-started__planning-for-security__how-to-use-locking-in-iis-configuration.md)" para obter uma compreensão mais profunda do bloqueio de configuração, incluindo o bloqueio granular em seções.

O documento também abordou a organização das configurações nos arquivos de configuração e explicou os conceitos de seções, grupos de seções, elementos, atributos, coleções, enumerações e sinalizadores.

Por fim, o documento cobriu o sistema de esquema e como ele funciona; isso é útil para saber ao estender o sistema com configurações personalizadas. É recomendável ler o documento "[Como estender a configuração](develop__extending-iis-configuration.md)" para obter mais detalhes e instruções específicas sobre como adicionar seções de configuração personalizadas ao sistema e produzir código para consumi-las.

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
  2026-03-27
