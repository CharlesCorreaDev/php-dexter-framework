# Introdução à configuração no IIS 7 e superior | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-your-iis-architecture/getting-started-with-configuration-in-iis-7-and-above

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

# Introdução à configuração no IIS 7 e superior

Comentários

por [Tobin Titus](https://github.com/tobint)

## Resumo

O sistema de configuração no IIS 7 e superior é baseado em arquivos XML distribuídos, de texto claro, que contêm as configurações de toda a plataforma do servidor Web, incluindo IIS, ASP.NET e outros componentes e, opcionalmente, podem ser definidos nos diretórios de conteúdo junto com o conteúdo da Web. Diferentes níveis da hierarquia de configuração podem ser delegados pelo administrador do computador a outros usuários, como o administrador do site ou o desenvolvedor do aplicativo. Proteger os bloqueios padrão e prontos para uso limita o acesso de gravação às configurações somente ao administrador da máquina; no entanto, recursos de bloqueio sofisticados e granulares permitem o desbloqueio seguro e a delegação da gestão de configurações específicas para mais usuários, dentro do escopo do seu namespace na web. O sistema é compatível com versões anteriores, no nível da API, com versões anteriores do IIS e no nível XML, com versões anteriores do .NET Framework. Este documento fornece uma visão geral do novo sistema de configuração.

## Introdução

O sistema de configuração no IIS baseia-se em arquivos XML distribuídos, de texto claro, que contêm as configurações de toda a plataforma do servidor Web, incluindo IIS, ASP.NET e outros componentes, e podem, opcionalmente, ser definidos nos diretórios de conteúdo junto com o conteúdo da Web. Diferentes níveis da hierarquia de configuração podem ser delegados pelo administrador do computador a outros usuários, como o administrador do site ou o desenvolvedor do aplicativo. Proteger os bloqueios padrão e prontos para uso limita o acesso de gravação às configurações somente ao administrador da máquina; no entanto, recursos de bloqueio sofisticados e granulares permitem o desbloqueio seguro e a delegação da gestão de configurações específicas para mais usuários, dentro do escopo do seu namespace na web. O sistema é compatível com versões anteriores, no nível da API, com versões anteriores do IIS e no nível XML, com versões anteriores do .NET Framework.

O novo sistema de configuração foi projetado para ser:

- **Simples**: todo o estado está nos arquivos; Nenhum repositório proprietário é usado; Nenhum banco de dados de configuração na memória que seja o verdadeiro mestre do estado de configuração (ao contrário do serviço IISADMIN no IIS 6.0); O esquema é controlado por dados e é 100% declarativo e detectável.
- **TCO baixo**: a configuração pode ser xcopiada junto com o conteúdo da web; A administração delegada opcional elimina o envolvimento do administrador do computador em cada alteração de configuração; A unificação de configurações e modelos no IIS, ASP.NET e no restante da plataforma do servidor web fornece uma solução completa para gerenciar o servidor usando um conjunto único de ferramentas e APIs (por exemplo, arquivos web.config podem conter configurações de IIS e ASP.NET, e há um ponto único para controlar recursos como autenticação, autorização, erros personalizados); backup, restauração e gerenciamento de segurança (ACLs) são baseados em ferramentas e processos padrão do sistema de arquivos.
- **Seguro**: quando o IIS é instalado, o estado de configuração está em um arquivo protegido somente para acesso de administrador de computador; Nenhuma delegação está habilitada por padrão; Nenhuma informação confidencial (como senhas) é armazenada por padrão; Quando informações confidenciais precisam ser gravadas nos arquivos de configuração, elas estão sendo criptografadas automaticamente em disco; A configuração por aplicativo pode ser restrita e isolada em um arquivo dedicado (protegido pela ACL do sistema de arquivos), de modo que outros aplicativos não possam compartilhar nem ler as configurações.
- **Extensível**: adicionar ao esquema é simplesmente uma questão de remover um arquivo XML para a pasta de esquemas; Não é necessário chamar APIs ou executar ferramentas para estender o esquema; As configurações são organizadas em blocos logicamente relacionados chamados "seções" (exatamente como na configuração da estrutura do .NET) e a adição de novas seções é fácil (não é necessário escrever nenhum código – diferentemente da configuração do .NET Framework); Ler as configurações de seção personalizadas de um módulo ou aplicativo de servidor é simples e direto.
- **Compatível**: os aplicativos IIS existentes podem continuar a chamar interfaces como a ABO (Admin Base Objects), o provedor IIS ADSI e o provedor WMI do IIS 6.0; Os aplicativos do .NET Framework existentes podem continuar a chamar interfaces como System.Configuration e System.Web.Configuration; Os usuários que estão familiarizados com o formato XML de machine.config e web.config continuarão a experimentar o mesmo formato e sintaxe nesses arquivos, além disso, poderão editar manualmente as configurações do IIS que seguem o mesmo formato e modelo; Os usuários que estão familiarizados com os nomes de propriedades de Metabase do IIS encontrarão os mesmos nomes para propriedades nos novos arquivos de configuração do IIS 7.0 e acima.

## Esquema limpo

Aqui está um exemplo que demonstra o esquema de configuração.

Ele mostra como as configurações de autenticação são organizadas no IIS 6 e no IIS 7.0 e superior.

Observação

Os leitores que não estão familiarizados com os conceitos do IIS 6.0 podem simplesmente ignorar a comparação com o IIS 6.0 e apenas ler os conceitos e benefícios do IIS 7.0 e acima.

Primeiro, compararemos a maneira como a configuração é mantida no arquivo e, em seguida, examinaremos a definição de esquema.

No próprio arquivo de configuração:

```
//
// Snippet from IIS 6.0 Metabase.xml
//
<IIsWebService    Location ="/LM/W3SVC"
      ... many lines here ...
    AuthFlags="AuthAnonymous"
      ... many lines here ...
    >
</IIsWebService>
<IIsWebDirectory    Location ="/LM/W3SVC/1/ROOT/aspnet_webadmin/2_0_41016"
    AuthFlags="AuthAnonymous | AuthNTLM"
    >
</IIsWebDirectory>
<IIsWebVirtualDir    Location ="/LM/W3SVC/Info/Templates/Public Web Site/Root"
        AuthFlags="AuthAnonymous"
    >
</IIsWebVirtualDir>

//
// Snippet from IIS 7.0 applicationHost.config
//
<anonymousAuthentication enabled="true"  userName="…"  password="" />
<basicAuthentication enabled="false" />
<clientCertificateMappingAuthentication enabled="false" />
<windowsAuthentication enabled="true" >
    <providers>
        <add value="Negotiate" />
        <add value="NTLM" />
    </providers>
</windowsAuthentication>
```

Lições importantes:

- **O IIS 6.0** está usando uma lista de propriedades muito longa e "simples". Não há hierarquia ou agrupamento de propriedades. É difícil pesquisar as configurações entre centenas de configurações na mesma lista.
  **O IIS 7.0** e superior usa uma hierarquia de seções e grupos de seções e sub-elementos nas seções. É fácil pesquisar as configurações de autenticação, pesquisando-as no grupo de seções de autenticação ou em uma seção de autenticação específica.
- **O IIS 6.0** está usando sinalizadores para definir esquemas de autenticação.
  **O IIS 7.0** e superior usa uma seção por esquema de autenticação, com enabled="true|false" em cada um. Configurações adicionais relevantes apenas para alguns esquemas de autenticação podem ser definidas apenas nas seções relevantes (por exemplo, nome de usuário e senha podem ser definidas apenas para autenticação anônima).
- O **IIS 6.0** está usando caminhos dentro do arquivo Metabase para especificar o nível de configuração (serviço, diretório virtual, diretório físico). A configuração de todo o servidor está em um arquivo. O **IIS 7.0** e superior usa um arquivo por padrão, mas os usuários podem aproveitar arquivos de web.config distribuídos nos diretórios de conteúdo, que especificam as configurações para seu escopo.
- **O IIS 6.0** está usando nomes de propriedade longos na tentativa de ter configurações autodescritivas. Isso está tentando melhorar a legibilidade do arquivo e ajudar o usuário a entender o que a propriedade faz.
  **O IIS 7.0** e superior usa nomes curtos, mas eles estão sempre no contexto de uma seção específica ou até mesmo no subconjunto na seção.
- **O IIS 6.0** está usando multi-sz (elementos delimitados por vírgulas em uma propriedade de string) e flags para manipular múltiplos valores de elementos, tais como NTAuthenticationProviders.
  **O IIS 7.0** e superior usa coleções, com sintaxe simples de adicionar/remover/limpar, exatamente como a configuração da estrutura do .NET. Isso permite que níveis inferiores da hierarquia adicionem (ou removam) apenas o elemento de que precisam, em vez de duplicar todos os dados com (ou sem) o elemento dito. Ele também fornece maior legibilidade do arquivo (que se traduz em menos erros humanos ao editá-lo diretamente).

No arquivo de esquema:

```
//
// Snippet from IIS 6.0 MBSchema.xml
//
<Property InternalName="AuthFlags" ID="6000" Type="DWORD" UserType="IIS_MD_UT_FILE" Attributes="INHERIT" >
    <Flag   InternalName="AuthAnonymous"   Value="1"   ID="6218"   />
    <Flag   InternalName="AuthBasic"             Value="2"   ID="6219"  />
    <Flag   InternalName="AuthNTLM"            Value="4"   ID="6220"  />
    <Flag   InternalName="AuthMD5"              Value="16"  ID="6221"  />
    <Flag   InternalName="AuthPassport"        Value="64"  ID="6299"  />
</Property>

//
// Snippet from IIS 7.0 IIS_Schema.xml
//
<sectionSchema name="system.webServer/security/authentication/basicAuthentication">
  <attribute name="enabled" type="bool" defaultValue="false" />
  <attribute name="realm" type="string" />
  <attribute name="defaultLogonDomain" type="string" />
  <attribute name="logonMethod" type="enum" defaultValue="ClearText">
    <enum name="Interactive" value="0" />
    <enum name="Batch" value="1" />
    <enum name="Network" value="2" />
    <enum name="ClearText" value="3" />
  </attribute>
</sectionSchema>
```

Lições importantes:

- **O IIS 6.0** está usando IDs (números) para identificar as configurações.
  **O IIS 7.0** e superior usa cadeias de caracteres amigáveis para nomear as configurações.
- O **IIS 6.0** está usando conceitos não intuitivos, como UserType e terminologia, como InternalName.
  **O IIS 7.0** e superior usa nomes amigáveis que fazem sentido para os leitores humanos, e não apenas aplicativos.

## Hierarquia de arquivos de configuração

O estado "mestre" para configuração é sempre os arquivos de configuração (ao contrário do IIS 6.0, em que era o banco de dados de configuração na memória, que era liberado para disco periodicamente).

No nível raiz (ou global), há dois arquivos separados:

- system32\inetsrv\config\applicationHost.config: mantém os padrões globais para configurações do servidor Web (IIS).
- \windows\microsoft.net\framework\v2.0.50727\config\machine.config: mantém os padrões globais para as configurações do framework do .NET, incluindo algumas das configurações do ASP.NET (o restante está no web.config na mesma pasta, que às vezes é chamada de diretório raiz web.config)

O motivo pelo qual há dois arquivos separados ainda é porque as duas tecnologias têm uma versão diferente (em termos de agenda e em termos de produto). O IIS faz parte do Windows e o .NET Framework pode ser versão independente, como parte das versões do Visual Studio.

Nos diretórios de conteúdo da Web, pode haver arquivos de web.config opcionais que controlam o comportamento para o nível da hierarquia e para baixo. Eles podem ser locais ou remotos (se o diretório de conteúdo estiver em um compartilhamento UNC, por exemplo). Eles podem conter IIS, ASP.NET ou qualquer outra configuração de estrutura do .NET que possa ser especificada em seu nível. Por padrão, não há arquivos web.config.

Em termos de hierarquia de herança, o arquivo raiz é machine.config, seguido por web.config no mesmo diretório (referido como web.configraiz), depois applicationHost.config, e finalmente os arquivos opcionais web.config dentro do namespace.

### Configuração incluir arquivos

Em alguns casos, é útil que o arquivo web.config inclua outro arquivo .config. Isso pode ser feito usando o atributo configSource. Atualmente, ele está limitado a apontar para caminhos físicos relativos em subdiretórios, por motivos de segurança (ou seja, o arquivo A só pode incluir o arquivo B se B estiver no subdiretório físico de A). Aqui está um exemplo básico que mostra como usar o configSource:

```
<!-- in inetsrv\applicationHost.config -->
<configuration>
  <system.webServer>
  
    <!-- mimemaps moved by the customer to a different file -->
    <!-- so that this file is shorter and more readable -->
    <staticContent configSource="staticContent.config"/>
  
    <!-- the rest of system.webServer sections are here… -->
  </system.webServer>
</configuration>
  
<!-- in inetsrv\staticContent.config -->
<configuration>
  <system.webServer>
    <staticContent>
      <!-- all the mimemap definitions are here -->
      <mimeMap ….. />
      <mimeMap ….. />
      <mimeMap ….. />
    </staticContent>
  </system.webServer>
</configuration>
```

Neste exemplo, o cliente queria mover o conteúdo da seção staticContent para um arquivo separado, a fim de ter um applicationHost.configmais curto, mais legível.

Observe que, quando as configurações de configuração forem alteradas em um arquivo .config, o servidor selecionará automaticamente as alterações e agirá sobre elas. O cliente não deve se preocupar com a reciclagem de aplicativos ou pools de aplicativos ou todo o servidor (o próprio servidor pode reciclar pools de aplicativos, por exemplo, dependendo de quais configurações foram alteradas).

## Organização das Configurações

Dentro de um arquivo de configuração (ou seja, para um determinado nível da hierarquia), as configurações são organizadas de maneira estruturada e não como uma lista simples. A unidade básica de implantação, registro e extensibilidade é a seção de configuração. Uma seção está contida em um grupo de seções, que, por sua vez, pode estar contida em um grupo pai de seções. As seções, por si só, não estão organizadas em hierarquia. Os grupos de seções são.

Aqui está um exemplo de applicationHost.config:

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

As configurações sempre pertencem a uma seção específica.

Os grupos de seções só existem para melhor estruturação; eles não têm configurações diretamente nelas, apenas seções.

Em uma seção, a estrutura é a seguinte:

- Elemento de configuração: contém configurações e, potencialmente, outros elementos de configuração. Representado como um elemento XML. Seções também são elementos.
- Coleção de configuração: um caso privado de elemento de configuração, que contém uma lista de elementos de configuração, na forma de adicionar/remover/limpar (que são chamadas de diretivas de coleção). Representado como um elemento XML com sub-elementos <add>, <remove> e <clear>.
- Propriedade de configuração: essa é uma configuração [folha]. Representado como um atributo XML.

Aqui está um exemplo de applicationHost.config:

```
<!-- "windowsAuthentcation" is a section which is an element -->
<!-- "enabled" is a property -->
<windowsAuthentication enabled="true">
  
  <!-- "providers" is a collection which is an element -->
  <providers>
  
    <!-- the collection contains two elements -->
    <!-- "add" is the collection directive; "value" is the property -->
    <add value="Negotiate"/>
    <add value=""NTLM/>
  </providers>
</windowsAuthentication>
```

Por padrão, applicationHost.config contém dois grupos de seções principais: system.applicationHost e system.webServer. Ele também contém uma seção chamada <configSections>, que é um pouco especial, pois é usada internamente pelo sistema de configuração para registrar todas as outras seções.

Por padrão, machine.config contém vários grupos de seções. As configurações de ASP.NET estão no grupo de seções system.web.

## Marcas de localização versus arquivos de configuração

Em muitos casos, pode-se desejar evitar arquivos web.config nos diretórios de conteúdo, mas ainda ter uma configuração por URL que substitua os padrões globais. Por exemplo: o administrador deseja especificar que um site específico deve usar algum esquema de autenticação, e os administradores do site (e os desenvolvedores de aplicativos nesse site) não devem ser capazes de desativá-lo.

A maneira mais fácil de fazer isso é usando marcas de localização. Esse é um mecanismo para especificar a configuração de um caminho específico, sem ter um web.config na pasta mapeada para o caminho virtual.

Este exemplo mostra como uma marca de localização é usada em applicationHost.config:

```
<!-- the following will take effect on MyAdminSite -->
<location path="MyAdminSite">
  <system.webServer>
    <security>
      <authentication>
        <basicAuthentication enabled="false"/>
        <windowsAuthentication enabled="true"/>
        <anonymousAuthentication enabled="false"/>
      </authentication>
    </security>
  </system.webServer>
</location>
```

As marcas de localização podem ser usadas para especificar a configuração para o nível global (path="."), para um site ou para um caminho específico dentro de um site. Pode haver várias marcas de localização em um arquivo. As marcas de localização podem estar em qualquer arquivo .config, não apenas applicationHost.config ou machine.config.

Marcas de localização também podem ser usadas para bloquear e desbloquear seções. Mais detalhes sobre isso no laboratório sobre bloqueio de configuração.

Em alguns casos, não há alternativa para usar marcas de localização:

- Dois ou mais caminhos virtuais mapeados para a mesma pasta física. Obviamente, se os dois caminhos virtuais tiverem uma configuração diferente, ele não poderá ser especificado em um arquivo web.config porque ele é compartilhado.
- Configuração específica do arquivo. Não há nenhum arquivo web.config para arquivos; somente para a pasta inteira.

## Resumo

Este documento forneceu uma visão geral inicial, de alto nível do sistema de configuração no IIS 7.0 e superior. Ele destacou o formato de esquema mais limpo; a natureza distribuída do sistema de configuração e como ele habilita a delegação de configurações para o proprietário do site ou desenvolvedor de aplicativos; a organização estruturada de configurações em arquivos de configuração; e a integração entre o IIS e ASP.NET sistemas de configuração.

Para obter mais informações, é recomendável examinar o restante dos documentos de configuração e, em particular, o documento Intrínsecos de Configuração, que entra em detalhes mais baixos sobre o sistema, incluindo seu design e arquitetura.

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
  2025-05-05
