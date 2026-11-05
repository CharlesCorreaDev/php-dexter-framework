# Visão geral dos serviços | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/services-overview

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

# Visão geral dos serviços

Comentários

por [Walter Oliver](https://github.com/walterov)

## Introdução

O Exemplo de Serviços de Hospedagem é um conjunto de serviços implementados em C# fornecidos para ajudar os desenvolvedores em organizações de hospedagem da Web que desenvolvem e/ou integram o sistema de Provisionamento e Gerenciamento de Hospedagem.

Sua finalidade é mostrar por meio do código de exemplo e da documentação como aproveitar a plataforma Windows Server® 2008 para implementar essa funcionalidade. Esses serviços foram desenvolvidos como parte do TAP (Programa de Adotadores de Tecnologia) do IIS 7.0, onde a Microsoft trabalhou com mais de 20 hosters e os ajudou a criar uma oferta no Windows Server 2008 e no SQL 2005. Os hosters aproveitaram esses serviços de exemplo porque os ajudaram a reduzir a curva de aprendizado.

### Componentes

Há três componentes principais no exemplo. Cada um tem um projeto do Visual Studio 2008 correspondente:

1. **O host baseado em Serviço Windows.** Inclui contratos para gerenciar o provisionamento e o gerenciamento de sites web e FTP, armazenamento de conteúdo, recursos do Active Directory e do SQL Server. Os serviços são hospedados em um Serviço windows. Isso é útil para gerenciar configurações em que o IIS 7.0 não está instalado ou ao executar os serviços de hospedagem na Web não é desejado.
2. **O host baseado em Serviço Web.** Inclui a mesma funcionalidade que a versão do host baseada no Windows Service. A única diferença é que os serviços são hospedados em um Serviço Web do Windows em vez de um aplicativo baseado no Serviço Windows.
3. **Cliente de exemplo**. É um aplicativo web simples que invoca os contratos de cada serviço. Sua finalidade é ilustrar o uso dos serviços.

Observação

Este é um aplicativo de exemplo e não deve ser usado em um ambiente de produção. Ele é fornecido apenas para fins de aprendizagem.

## Introdução aos Serviços

O Exemplo de Código dos Serviços de Hospedagem foi implantado em dois cenários diferentes. Um é por meio do IIS 7.0 e o outro é por meio de um Serviço windows.

### IIS 7.0

No Windows Server® 2008 e no IIS 7.0, os serviços do Windows Communication Foundation (WCF) são implantados como um site hospedado. Isso permite que ele aproveite recursos como:

- Reciclagem de processos
- Desligamento inativo
- Monitoramento de saúde do processo
- Ativação baseada em mensagem

Como as extensões de hospedagem exigem altas permissões para executar operações como a criação de diretórios no sistema de arquivos, a criação de bancos de dados, a adição de novos usuários e assim por diante, o pool de aplicativos para este site requer uma identidade com permissões de administrador. Um pacote de instalação (HostServiceInstaller.msi) automatiza essa implantação.

### Serviço do Windows

O segundo cenário implanta os serviços a serem executados como um Serviço Windows. Essa implantação permite que os serviços sejam hospedados em um servidor que não está executando o IIS. Ele também requer que código adicional seja gravado para que os serviços do WCF herdem da classe **ServiceBase** e implementem o **OnStart** (para criar e abrir uma instância do ServiceHost) e **o OnStop** (para fechar a instância do ServiceHost). Um pacote de instalação (HostingWindowsService.msi) automatiza essa implantação.

### Validando a instalação

Valide a instalação usando as etapas a seguir.

1. Navegue até a seguinte URL: http://< hostheader>/webmanagementservice.svc . A página a seguir será exibida se a instalação tiver sido bem-sucedida, o que indica que o serviço agora está hospedado.

   [![Captura de tela que mostra a página Serviço de Gerenciamento da Web no Internet Explorer.](services-overview/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/services-overview/_static/image1.jpg)

   Observação

   Você deve configurar uma conta com direitos de administrador para executar o Serviço Windows ou um pool de aplicativos para o site hospedado do IIS, pois os serviços exigem permissões de nível de administrador para gerenciar configurações do IIS, bem como outras funções.
2. Baixe e instale a solução com o pacote de instalação **SolutionSetup.msi**. Abra a solução (IIS7GoLive.sln) no Visual Studio e encontre a estrutura a seguir no Gerenciador de Soluções.

## Ambiente de hospedagem

Um ambiente de hospedagem típico é um ambiente heterogêneo (conforme mostrado na figura abaixo). A maioria dos hosters usa serviços Web para gerenciar o conjunto díspare de servidores e as diferentes funções que cada servidor desempenha.

[![Diagrama que mostra vários servidores em um ambiente heterogêneo.](services-overview/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/services-overview/_static/image3.jpg)

*Figura 1: Um ambiente de hospedagem heterogêneo*

### Servidores diferentes

O ambiente de hospedagem tem várias versões de servidores Windows e Linux, cada uma delas fornecendo um serviço ou função específico. Os hosters costuram ou integram esses serviços para fornecer uma oferta coerente aos clientes. É bastante comum ver o site servido de servidores do IIS 7.0, enquanto as contas de email podem ser atendidas de um servidor Linux (e vice-versa). As operações de provisionamento podem ser gerenciadas de um servidor Linux, mas o site é provisionado no Windows. Independentemente do serviço que está sendo oferecido, as necessidades e restrições dos hosters no gerenciamento desses servidores são as mesmas.

Os hosters também tendem a ter uma infraestrutura muito fortemente firewallada. Algumas das APIs disponíveis na pilha da Microsoft utilizam DCOM ou .NET Remoting, o que exige que os provedores de hospedagem abram portas adicionais nos firewalls — isso não é uma solução ideal.

Para resolver as restrições criadas pelos ambientes heterogêneos e por problemas de firewall/segurança, a maioria dos hosters agora tem padronizado o uso de Serviços Web para provisionar e gerenciar seus servidores e as diferentes funções de servidor.

A Plataforma Windows não envia serviços Web nativamente e, portanto, cada hoster precisa implementar seus próprios. Para resolver essa deficiência e as necessidades dos hosters, a Microsoft criou um conjunto de serviços. Esse conjunto de serviços é **Serviços de Gerenciamento para Hosters** e é tratado como "Extensões de Hospedagem" para as APIs gerenciadas.

## Serviços de Gerenciamento para Hosters

O exemplo é composto por um conjunto de serviços de baixo nível que fornecem recursos para algumas das funções de servidor mais comuns usadas no espaço de hospedagem. Os subsistemas de serviço são:

- web
- FTP
- Armazenamento de Conteúdo
- SQL Server 2005 (&2008)
- Active Directory

Além deles, o exemplo pode ser estendido para dar suporte a DNS, WSS e Email (Exchange ou SMTP/PoP3).

### Interfaces e operações

Todas as operações em cada um dos subsistemas são agrupadas em três interfaces:

- Provisionamento
- Management
- Consultando

Essas operações executam as tarefas que as ferramentas operacionais e o aplicativo de tipo de painel de controle usado pelos usuários finais devem executar.

As operações de provisionamento lidam principalmente com a criação de um site, um usuário, um banco de dados e assim por diante. Estas são operações que o hoster pode executar inicialmente para criar um ambiente para o usuário final. Cada criação tem uma exclusão correspondente.

Depois que o objeto é criado, as operações de gerenciamento fornecem a capacidade de manter o objeto: por exemplo, um site pode ser interrompido ou reiniciado; documentos padrão e associações adicionais podem ser aplicados ao site; e a autenticação do site pode ser adicionada ou alterada. Os usuários dessas operações podem ser o usuário final gerenciando seu próprio site ou o departamento de suporte de um host que aplica determinadas propriedades.

As operações de consulta exibem informações específicas para cada subsistema. O departamento de suporte de um hoster pode chamar serviços nessas operações para monitorar a atividade do servidor ou coletar informações sobre o status atual dos sites.

## Modelo de Arquitetura de Serviços

O exemplo é implementado como serviços do WCF (Windows Communication Framework), que são expostos aos clientes como Serviços Web usando o WSHttpBinding. Veja a seguir um diagrama de arquitetura:

[![Diagrama que mostra os contratos de serviço e implementações de serviço, entre os Contratos de Falha de Hospedagem e o Componente de Gerenciamento de Hospedagem.](services-overview/_static/image6.jpg)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/services-overview/_static/image5.jpg)

*Figura 1: Arquitetura de exemplo dos Serviços de Hospedagem*

No diagrama, observe a consistência da estrutura. Todos os subsistemas são desenvolvidos com o mesmo padrão de contratos e operações. Essa estrutura pode ser seguida por subsistemas futuros.

### Subsistemas de hospedagem

Os seguintes subsistemas são fornecidos no exemplo:

1. **Serviço Web** – Esse subsistema é para provisionamento, gerenciamento e consulta de site do IIS 7.0. Além da criação básica do site, a funcionalidade adicionada pertence ao gerenciamento e à consulta de sites, Pools de Aplicativos, documentos padrão, associações, autenticação e outros. O objetivo desse subsistema é criar serviços Web para todas as funcionalidades existentes no gerenciador do IIS. O contrato de dados para esse subsistema baseia-se no esquema xml do IIS 7.0 encontrado em `c:\windows\system32\inetsrv\config`. Os serviços são escritos usando as APIs Microsoft.Web.Administration.
2. **Serviço FTP** – Esse subsistema é criado para o novo SERVIDOR FTP7 que é executado apenas no Windows Server® 2008 e no IIS 7.0. O complemento do SERVIDOR FTP7 está disponível como um download gratuito. O novo FTP contém melhorias de recursos para o cenário de hospedagem compartilhada. Por exemplo, uma associação FTP pode ser adicionada a um site para que o mesmo conteúdo possa ser hospedado em ambos os sites. Assim como o subsistema da Web, os contratos de dados desse subsistema também são baseados no esquema de arquivos de configuração.
3. **Serviço de Armazenamento de Conteúdo** – Esse subsistema é para provisionamento, gerenciamento e consulta de armazenamento que um usuário final pode precisar. Isso é usado em conjunto com a criação do site e o gerenciamento do armazenamento que um usuário tem para um site. As cotas podem ser definidas e as permissões e a segurança aplicadas nos níveis de diretório e arquivo.
4. **Serviço do Active Directory** – Esse subsistema é para provisionamento, gerenciamento e consulta de repositórios de associação do Active Directory. Isso seria usado em situações em que um cliente poderia querer criar uma Unidade de Organização, grupos dentro dessa UO e usuários a serem adicionados aos grupos.
5. **Serviço SQL** – Esse subsistema é para provisionamento, gerenciamento e consulta do Banco de Dados do SQL Server. Isso é usado em situações em que um cliente desenvolve um aplicativo que requer um banco de dados. Eles precisam criar o banco de dados, executar scripts para criar procedimentos armazenados, criar tabelas e preencher tabelas com dados.

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
