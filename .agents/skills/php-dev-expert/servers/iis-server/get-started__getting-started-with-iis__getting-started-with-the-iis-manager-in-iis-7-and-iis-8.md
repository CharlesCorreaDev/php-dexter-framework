# Introdução ao Gerenciador do IIS no IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/getting-started-with-iis/getting-started-with-the-iis-manager-in-iis-7-and-iis-8

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

# Introdução ao Gerenciador do IIS no IIS

Comentários

por Equipe do IIS, [Tobin Titus](https://github.com/tobint)

### Compatibilidade

| Versão | Anotações |
| --- | --- |
| IIS 7.0 e posterior | Os recursos descritos neste artigo foram introduzidos no IIS 7.0. |
| IIS 6.0 e anterior | Os recursos descritos neste artigo não tinham suporte antes do IIS 7.0. |

## Introdução

O IIS 7.0 e posterior tem uma nova interface do usuário de versões anteriores do IIS: o Gerenciador do IIS. Este artigo descreve a aparência, a delegação de recursos, a interação com a configuração e a comunicação remota. Observe que algumas versões do IIS podem não ter algumas das funcionalidades/recursos discutidos neste documento.

**Por que teve que mudar?** Aqui estão alguns dos principais motivos:

- **O IIS e ASP.NET funcionam juntos**: os usuários do IIS 6.0 clicam com o botão direito do mouse em um site, selecionam "Todas as Propriedades" e obtêm uma caixa de diálogo com várias guias para configurações diferentes. Com o IIS 7.0 e superior, o Gerenciador do IIS precisava mostrar a configuração de novos recursos, como Cache de Saída, [Rastreamento de Solicitação Com Falha](troubleshoot__using-failed-request-tracing__troubleshooting-failed-requests-using-tracing-in-iis.md) e [Filtragem de Solicitações](manage__configuring-security__use-request-filtering.md), bem como configuração para ASP.NET e partes relevantes do .NET Framework. A nova funcionalidade teria exigido muitas mais novas guias, uma opção inaceitável.
- **Administração Delegada**: mover nossa configuração da metabase para o sistema de configuração do .NET significa que os usuários podem, se permitido, definir a configuração do IIS em arquivos web.config. Por exemplo, a configuração de um aplicativo `http://www.contoso.com/sales` pode ser gravada no arquivo de configuração raiz applicationHost.config, no arquivo web.config do site `http://www.contoso.com/` ou diretamente no arquivo web.config do aplicativo. O novo Gerenciador do IIS deve: 1) permitir que um administrador controle a configuração permitida em arquivos de web.config, 2) mostrar o administrador/usuário em que a configuração está sendo gravada. O Gerenciador do IIS mais antigo não estava à prova desses desafios.
- **Motivos de engenharia**: o software tem uma vida útil. O tempo traz novas tecnologias, novos requisitos, novas convenções e chega um ponto em que a atualização de software existente se torna mais trabalhosa e dispendiosa do que recriar o software. O Gerenciador do IIS estava se aproximando do fim de sua vida útil.

**Mais alguma coisa para saber?** Depois que decidimos reescrever o Gerenciador do IIS, aproveitamos a oportunidade para melhorar de várias maneiras principais:

- **Extensibilidade**: a extensão da versão do IIS 6.0 do Gerenciador do IIS foi proibitivamente difícil. O novo Gerenciador do IIS facilita muito a adição de páginas de recursos, nós de visão de árvore e itens de menu; todos usando código gerenciado e WinForms. As novas extensões do Gerenciador do IIS são detectadas e baixadas automaticamente por clientes remotos do Gerenciador do IIS que se conectam ao servidor.
- **Administração Remota**: a administração remota é feita por HTTPS, tornando o firewall amigável e mais fácil de gerenciar. O WMSVC (Serviço de Gerenciamento Web) é o componente opcionalmente instalável que habilita a administração remota.
- **Nova aparência**: o Gerenciador do IIS precisava de um modelo mais escalonável para expor as configurações e a exibição de lista de recursos resultante se assemelha ao Painel de Controle. Uma exibição de lista pode ser classificada, agrupada e exibida de maneiras diferentes, facilitando a localização do que você está procurando. A navegação do Gerenciador do IIS foi aprimorada para ser mais semelhante a um navegador, com uma barra de endereços semelhante ao Windows Explorer.

Observação

Este documento foi escrito para o Windows Server 2008. O Windows Vista® pode não ter algumas das funcionalidades/recursos discutidos neste documento.

## Nova aparência

O Gerenciador de Serviços de Informações da Internet (IIS) teve navegação de tipo Back/Forward em versões anteriores, e o novo Gerenciador do IIS leva isso ainda mais longe adicionando uma **barra de endereços** que funciona como o Windows Explorer.

![Captura de tela da tela I S Manager mostrando a home page do site padrão.](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image1.jpg)

**Figura 1: Novo Gerenciador do IIS**

## Página inicial

A Home Page se tornará muito familiar assim que você começar a usar o Gerenciador do IIS. A lista de recursos no meio pode ser classificada por nome ou descrição do recurso, agrupada por área ou categoria e exibida em layouts diferentes.

![Captura de tela do painel inicial do site padrão mostrando agrupamento, exibições e lista de recursos.](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image3.jpg)

**Figura 2: Agrupamento no Gerenciador do IIS**

### Escopos de Funcionalidades

Servidor, site, aplicativo, diretório virtual e nós de diretório na exibição em árvore mostram uma Página Inicial com uma lista de recursos. A maioria dos recursos aparece nas páginas iniciais para todos esses nós, mas há exceções.

Esses recursos aparecem na **Home Page do servidor****apenas** porque são configuração, dados ou informações em todo o servidor:

- Restrições de ISAPI e CGI
- Certificados (mas não aparecem de forma alguma em conexões remotas)
- Serviço de Gerenciamento (mas não aparece em conexões remotas)
- Processos de trabalho

Esses recursos aparecem **em todos os lugares, exceto na Home Page do servidor** porque são configuração de aplicativo e não são lógicos no nível do servidor ou porque funcionam melhor dessa forma (SSL):

- Usuários de Associação
- Funções de associação
- Profile
- SSL

As funcionalidades associadas à delegação têm **regras especiais** para onde aparecem.

- Delegação de Funcionalidade: sempre aparece apenas para o nó raiz de uma conexão
- Administradores: aparece somente para nós de Servidor, Site e Aplicativo

## Layouts de Página de Funcionalidades

Há três tipos de páginas no IIS

### Página de Lista

As páginas de lista contêm listas. A maioria das páginas de lista permite agrupar por valores em uma ou mais colunas. As páginas principais da lista, como Sites e Pools de Aplicativos, permitem filtrar as entradas da lista pesquisando em uma coluna de lista as entradas que correspondem a uma cadeia de caracteres de pesquisa.

![Captura de tela de uma parte da tela I S Manager mostrando o menu Go e o painel Ações.](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image6.jpg)

**Figura 3: Página de Lista do Gerenciador do IIS**

As tarefas **Adicionar/Editar/Remover** no painel de tarefas permitem manipular o conteúdo da lista. As configurações de recurso que não são específicas para uma entrada de lista, por exemplo, especificando que erros personalizados devem ser substituídos por erros detalhados para solicitações locais, geralmente são configuradas por meio da tarefa **Editar Configurações de Recurso...**

![Captura de tela da página de configurações do recurso mostrando o painel de alertas.](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image9.jpg)

**Figura 4: Ações do Gerenciador do IIS**

### Grade de Propriedades

As páginas da grade de propriedades mostram grades de propriedades relacionadas. O seletor **de exibição** na parte superior da grade de propriedades permite que você escolha se deseja exibir nomes de propriedades amigáveis, os nomes das propriedades de configuração ou ambos. A captura de tela abaixo mostra os dois nomes.

![Captura de tela da página de grade de propriedades mostrando nomes amigáveis e de configuração.](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image12.jpg)

**Figura 5: Grades de propriedades no Gerenciador do IIS**

### Dialog

As páginas de diálogo têm caixas de seleção, caixas de texto e botões de rádio e geralmente são o tipo de página mais familiar. Use Aplicar/Cancelar no painel de tarefas para salvar as alterações.

## Exibição de conteúdo

O Modo de Exibição de Conteúdo é uma exibição somente leitura; você não pode criar, copiar, mover ou excluir arquivos ou pastas nessa exibição. Você pode acessar a Visualização de Conteúdo clicando em "Visualização de Conteúdo" no alternador Modo de Exibição de Recursos/Visualização de Conteúdo na parte inferior da janela principal do Gerenciador do IIS ou clicando com o botão direito do mouse em um nó da árvore e selecionando "Alternar para Visualização de Conteúdo".

A única maneira de **definir a configuração de um arquivo** é alternar para o Modo de Exibição de Conteúdo, selecionar o arquivo e clicar em "Alternar para Exibição de Recursos" no menu com o botão direito do mouse ou no painel de tarefas.

![Captura de tela mostrando as opções Exibição de Recursos e Exibição de Conteúdo.](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image14.jpg)

**Figura 6: Alternar para o Modo de Exibição de Recursos**

## Delegação de Função

Você pode estar interessado na delegação de recursos se você for um **administrador de servidor** e não for a pessoa principal que fornece conteúdo em seu servidor ou se você for um **desenvolvedor** e quiser mais controle sobre a configuração do IIS para seu aplicativo.

Delegação **de funcionalidades** do IIS significa gerenciar:

- **bloqueio de seção de configuração** para controlar qual configuração pode ser definida em web.config (geralmente, uma seção de configuração do IIS é um módulo do IIS)
- o conjunto de **usuários de sites e aplicativos que têm permissão para usar o Gerenciador do IIS** para exibir a configuração e definir a configuração de recursos com seções de configuração desbloqueadas

O que se segue é uma explicação superficial da delegação de recursos no Gerenciador do IIS. Para obter um passo a passo aprofundado, consulte [Como gerenciar a delegação de recursos](manage__remote-administration__configuring-remote-administration-and-feature-delegation-in-iis-7.md).

## Bloqueio de configuração

Se uma seção de configuração estiver "bloqueada" por padrão, ela só poderá ser configurada em applicationHost.config. O Gerenciador do IIS fornece um meio para os administradores do servidor "desbloquearem" as seções de configuração do IIS. Depois que uma seção de configuração é desbloqueada, ela pode ser definida em arquivos web.config por não administradores.

Por exemplo, o recurso "Páginas de Erro Personalizadas" no Gerenciador do IIS interage com a configuração na seção "system.webServer/httpErrors". Se o administrador do servidor usar o Gerenciador do IIS ou o appcmd para desbloquear a seção de configuração system.web/httpErrors, a seção httpErrors aparecerá dentro de uma marca de localização com overrideMode="allow" no applicationHost.config:

```
<location path="" overrideMode="Allow">
    <system.webServer>
        <httpErrors/>
    </system.webServer>
</location>
```

OverrideMode="allow" significa que é válido definir a configuração para httpErrors em um arquivo web.config:

```
<configuration>
   <system.webServer>
      <httpErrors>
         <remove statusCode="404" subStatusCode="-1" />
         <error statusCode="404" path="/errors/404.aspx" responseMode="Redirect" />
      </httpErrors>
   </system.webServer>
</configuration>
```

Consulte a seção "Conexões de Servidor, Site e Aplicativo" abaixo para ver como o bloqueio de configuração afeta as conexões. Para obter informações detalhadas sobre bloqueios de configuração, consulte [Como usar o bloqueio de configuração](get-started__planning-for-security__how-to-use-locking-in-iis-configuration.md).

## Administradores de sites e aplicativos

Além disso, os administradores de servidor podem permitir que **não administradores usem o Gerenciador do IIS** para se conectar a um site ou aplicativo. Os não administradores que podem se conectar a sites ou aplicativos são chamados de "Administradores de Site" ou "Administradores de Aplicativos", e podem:

- **Gerenciar a configuração desbloqueada** para seu site ou aplicativo (as configurações são gravadas em arquivos web.config)
- **Exibir configurações bloqueadas** sem poder modificá-las
- **Adicionar outros administradores de site ou aplicativo** para seu site ou aplicativo

Para obter informações sobre como criar administradores de sites e aplicativos, consulte a documentação online [Criar Administradores de Site e Aplicativo para Delegação](https://technet.microsoft.com/library/cc725632(v=ws.10).aspx).

## Conexões de servidor, site e aplicativo

Somente os administradores de computador podem usar o Gerenciador do IIS para se conectar a um servidor Web.
**As conexões de servidor podem escrever** tanto nos arquivos de configuração raiz, applicationHost.config e web.config raiz, quanto em todos os arquivos distribuídos de web.config. Se uma seção de configuração estiver bloqueada em applicationHost.config, o recurso correspondente poderá ser lido ou gravado em uma conexão de servidor porque as alterações de configuração são gravadas em applicationHost.config em uma tag de localização.

Administradores de computador e administradores de site designados podem se conectar a sites.
**As conexões de site só podem gravar em arquivos `web.config` na pasta raiz do site**. Se uma seção de configuração estiver bloqueada em applicationHost.config, o recurso correspondente aparecerá como leitura apenas em conexões de site porque as conexões de site não podem gravar a configuração para applicationHost.config (mesmo em uma tag de localização). Isso afeta os administradores do computador e os Administradores de Site.

**Figura 7: Hierarquia de Configuração no Gerenciador do IIS**

Administradores de máquinas, Administradores de Aplicativos designados e Administradores de Site para o site principal do aplicativo podem se conectar a um aplicativo.
**As conexões de aplicativo só podem gravar em arquivos web.config na pasta raiz do aplicativo**. Se uma seção de configuração estiver bloqueada em applicationHost.config ou no arquivo de web.config do site, o recurso correspondente aparecerá somente leitura em conexões de aplicativo.

Para obter informações sobre como se conectar a um servidor, site ou aplicativo, consulte a documentação online sobre [como gerenciar conexões no IIS 7.0](https://technet.microsoft.com/library/cc753400(v=ws.10).aspx).

## Configuração

Mesmo que você nunca altere o bloqueio de configuração e nunca use a delegação de recursos, em algum momento você vai se perguntar como o Gerenciador do IIS decide onde gravar a configuração. Há duas regras que definem esse comportamento:

- ApplicationHost.config versus Web.configraiz: se o recurso estiver listado na área ASP.NET no Gerenciador do IIS, a configuração de nível de servidor será gravada no arquivo de web.config raiz do .NET Framework v2.0. Se o recurso estiver listado na área do IIS no Gerenciador do IIS, a configuração no nível do servidor será gravada em applicationHost.config. A única exceção a essa regra é a Autenticação de Formulários, que está no recurso autenticação na área do IIS.
- Configuração bloqueada vs. Desbloqueada: todas as seções de configuração ASP.NET e algumas seções de configuração do IIS são desbloqueadas por padrão. Para seções desbloqueadas, o Gerenciador do IIS gravará no web.config do site se a configuração for alterada para o site ou a configuração de um aplicativo se a configuração for alterada para um aplicativo. A maioria das seções de configuração do IIS é bloqueada por padrão. Para seções bloqueadas, o Gerenciador do IIS sempre gravará em applicationHost.config mesmo ao modificar a configuração de sites e aplicativos.

## Barra de status

A barra de status mostra onde o Gerenciador do IIS gravará a configuração:

Configuração: **'<config\_file\_object\_path>**' **<config\_file\_name>**, <location path="**<path>**">

`<config\_file\_object\_path>` é o caminho para o objeto de arquivo de configuração, por exemplo:

- "localhost": configuração no nível do servidor; applicationHost.config para recursos do IIS, web.config raiz para recursos de ASP.NET.
- "localhost/Site Padrão": o arquivo web.config na pasta física do Site Padrão
- localhost/Default Web Site/carreiras/técnico: o arquivo web.config na pasta física que mapeia para a URL "/careers/technical" no Default Web Site

O `<config\_file\_name>` é o nome do arquivo de configuração de destino, por exemplo:

- "applicationHost.config ou Web.configraiz ": applicationHost.config para recursos do IIS, web.config raiz para recursos de ASP.NET
- "web.config": um arquivo web.config no namespace da Web

Esse `<location\_path>` é o caminho de localização para o objeto que está sendo configurado (para obter mais informações sobre caminhos de localização, consulte [a Visão geral da configuração](get-started__planning-your-iis-architecture__getting-started-with-configuration-in-iis-7-and-above.md)). Essa parte do texto só será exibida se a seção de configuração do recurso estiver bloqueada em um nível mais alto.

![Captura de tela mostrando ](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image16.jpg)

## Exemplo: Gravando em ApplicationHost.config versus Web.config raiz

A compactação é um recurso do IIS e aparece no IIS se você agrupa/filtra a lista de recursos da home page por Área. Se você navegou até a página compactação no nível do servidor e desabilitou a compactação estática, o Gerenciador do IIS gravará essa configuração em `%windir%\Windows\system32\inetsrv\applicationHost.config`:

```
<urlCompression doStaticCompression="false" />
```

A Compilação do .NET é a configuração do .NET Framework e aparece em ASP.NET se você agrupa/filtra a lista de recursos da home page por Área. Se você navegou até a página de compilação do .NET no nível do servidor e definiu o idioma padrão como C#, o Gerenciador do IIS adicionará o atributo defaultLanguage à seção de compilação no arquivo de web.config raiz, ou seja `%windir%\Windows\\Microsoft.NET\Framework\v2.0.50727\CONFIG\web.config`:

```
<compilation defaultLanguage="C#">
```

A barra de status para ambas as situações exibirá: Configuração: 'localhost' applicationHost.config ou web.config raiz

## Exemplo: Gravação em Configuração Bloqueada versus Desbloqueada

A seção de configuração "defaultDocument" do IIS é desbloqueada por padrão. Se você configurar o documento padrão para o Site Padrão, o Gerenciador do IIS gravará essa configuração em `%windir%\inetpub\wwwroot\web.config`:

```
<configuration>
   <system.webServer>
      <defaultDocument>
         <files>
            <clear />
            <add value="default.aspx" />
      </defaultDocument>
   </system.webServer>
</configuration>
```

A barra de status exibirá: Configuração: 'Site Padrão' web.config

A seção de configuração "httpErrors" do IIS é desbloqueada por padrão. Se você personalizar a resposta HTTP 404 para o Site Padrão, o Gerenciador do IIS escreverá essa configuração para `%windir%\Windows\system32\inetsrv\applicationHost.config`:

```
<location path="Default Web Site" overrideMode="Allow">
  <system.webServer>
     <httpErrors>
        <remove statusCode="404" subStatusCode="-1" />
        <error statusCode="404" path="/err/404.aspx" responseMode="Redirect" />
     </httpErrors>
  </system.webServer>
</location>
```

A barra de status lerá: 'localhost' applicationHost.config ou web.config raiz, <caminho de localização="Site Padrão">

O gerenciamento remoto do IIS Manager para o IIS 6.0 e versões anteriores do IIS era feito por meio do MMC e sempre estava habilitado. Com o IIS 7.0 e superior, a comunicação remota do Gerenciador do IIS deve estar explicitamente habilitada. Todo o gerenciamento remoto é feito via HTTPS e é tratado por um componente do IIS chamado WMSVC (Serviço de Gerenciamento Web). Se você quiser habilitar o gerenciamento remoto do IIS 7.0 e superior por meio do Gerenciador do IIS, leia [Como habilitar a comunicação remota do Gerenciador do IIS](manage__remote-administration__configuring-remote-administration-and-feature-delegation-in-iis-7.md).

## Serviço de Gerenciamento da Web (WMSVC)

O Serviço de Gerenciamento da Web (WMSVC) é um servidor Web autônomo (núcleo da web hostável - HWC) hospedado em um serviço NT. Depois que o WMSVC é instalado e iniciado, ele escuta na porta 8172 em todos os endereços IP não atribuídos. Ele espera receber apenas 4 tipos de solicitações e cada uma é atendida por seu próprio manipulador:

- Solicitações de login para login.axd
- Solicitações de download de código para download.axd
- Solicitações de serviço de gerenciamento para service.axd
- Solicitações de ping para ping.axd

### Solicitações de logon

O Gerenciador do IIS envia uma solicitação de logon pelo fio para o WMSVC para intitar uma conexão. A autenticação é NTLM ou básica, dependendo do que o usuário selecionou quando foi solicitado a fornecer credenciais na caixa de diálogo de conexão.

![Captura de tela da caixa de diálogo de logon mostrando as seções N T L M e Basic.](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image18.jpg)

**Figura 9: Especificando credenciais**

### Solicitações de download de código

Se o logon for bem-sucedido, o WMSVC retornará uma lista de módulos de interface do usuário para a conexão. Por exemplo, cada página do Gerenciador do IIS, como "Páginas de Erro Personalizadas", corresponde a um módulo. Se houver um módulo que o Gerenciador do IIS não tenha, ele solicitará o download dos binários do módulo (por exemplo, isso aconteceria se um administrador de servidor instalasse um novo produto RSA Security em seu servidor de produção, mas não instalasse o produto em seu computador desktop que ele usa para se conectar ao servidor).

### Solicitações do Serviço de Gerenciamento

Depois que a conexão é estabelecida, o usuário final interage com o Gerenciador do IIS causando solicitações de serviço de gerenciamento. O serviço de gerenciamento solicita diretamente serviços de módulo no WMSVC para ler/escrever configurações, estado de tempo de execução e provedores no servidor.

### Solicitações de ping

Solicitações de ping são feitas de dentro do serviço WMSVC para o HWC (servidor Web) que ele hospeda. Solicitações de ping são um mecanismo simples para garantir que o núcleo web hospedável continue a responder.

**Configuração do serviço**  
O WMSVC tem um conjunto muito pequeno de configuração editável armazenada no registro. Sempre que o serviço é iniciado, os arquivos de configuração da Web são regenerados em `%windir%\ServiceProfiles\LocalService\AppData\Local\Temp\WMSvc<GUID>\`. Os arquivos de configuração da Web não podem ser editados, mesmo pelos administradores.

![Captura de tela mostrando arquivos de configuração da Web.](getting-started-with-the-iis-manager-in-iis-7-and-iis-8/_static/image20.jpg)

**Figura 10: Alterando a configuração no Registro**

## Segurança

O gerenciamento remoto do Gerenciador do IIS e do Serviço de Gerenciamento Web (WMSVC) passou por uma série de revisões para garantir que a funcionalidade seja simples e segura. Estas são algumas das medidas de segurança tomadas:

- Requer **SSL** (HTTPS) para todas as conexões para proteger dados **passados** entre o cliente remoto do IIS Manager e o WMSVC
- **É executado como Serviço Local** com um conjunto de permissões reduzido

**Configuração do HWC (Hostable Web Core) protegida**, incluindo um conjunto mínimo de módulos necessários e regras de filtragem de solicitação cuidadosamente elaboradas.

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
  2023-07-19
