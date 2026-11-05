# Implementação de serviços | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/setting-up-components

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

# Implementação de serviços

Comentários

por [Walter Oliver](https://github.com/walterov)

## Visão geral

Do ponto de vista da implementação, a solução segue padrões e práticas recomendados para a criação de Serviços Web usando o WCF (Windows Communication Foundation), conforme descrito nas diretrizes do Web Service Software Factory.

Informações adicionais podem ser encontradas no seguinte site:

- <https://msdn.microsoft.com/library/ms735119.aspx>

Nas seções a seguir, descrevemos cada implementação de subsistema em detalhes.

- [Subsistemas](manage__provisioning-and-managing-iis__setting-up-components.md#Subsystems)
- [Subsistema Web](manage__provisioning-and-managing-iis__setting-up-components.md#Web)
- [Subsistema FTP](manage__provisioning-and-managing-iis__setting-up-components.md#FTP)
- [Subsistema de Armazenamento de Conteúdo](manage__provisioning-and-managing-iis__setting-up-components.md#Content)
- [Subsistema de Conta de Usuário](manage__provisioning-and-managing-iis__setting-up-components.md#User)
- [Subsistema SQL](manage__provisioning-and-managing-iis__setting-up-components.md#SQL)
- [Hospedando os Serviços de Exemplo](manage__provisioning-and-managing-iis__setting-up-components.md#Hosting)
- [Provedor de função de segurança](manage__provisioning-and-managing-iis__setting-up-components.md#Security)

## Subsistemas

A implementação de cada subsistema, como Web, ftp e SQL, etc., é dividida em três projetos:

- Datacontracts
- Contratos de Serviço
- Implementação do ServiceContract, conforme ilustrado no diagrama a seguir.

![Captura de tela do Gerenciador de Soluções mostrando as três listas de projetos.](setting-up-components/_static/image1.jpg)

Devido ao fato de haver uma determinada funcionalidade comumente compartilhada entre todos os subsistemas, como o gerenciamento de exceções, todos esses componentes são agrupados em um projeto separado, que é Microsoft.Hosting.Management. Além disso, todos os subsistemas compartilham os mesmos FaultContracts para tratamento consistente de exceções em todos os serviços do WCF, conforme ilustrado no diagrama de arquitetura acima.

## Subsistema Web

O IIS 7.0 apresenta um novo sistema de configuração no núcleo de todos os novos recursos relacionados à administração. O sistema de configuração é baseado em arquivos XML distribuídos, de texto claro, que contêm as configurações de toda a plataforma do servidor Web, incluindo IIS, ASP.NET e outros componentes, como FTP, e podem, opcionalmente, ser definidos nos diretórios de conteúdo junto com o conteúdo da Web.

Diferentes níveis da hierarquia de configuração podem ser delegados pelo administrador do computador a outros usuários, como o administrador do site ou o desenvolvedor do aplicativo.

Padrões de segurança e bloqueio inicial pronto para uso limitam o acesso de gravação das configurações apenas ao administrador da máquina; no entanto, recursos de bloqueio sofisticados e granulares permitem o desbloqueio seguro e a delegação da administração de configurações específicas para mais usuários, dentro do escopo do namespace da web.

O sistema é compatível com versões anteriores em dois níveis: o nível da API, com versões anteriores do IIS; e, no nível XML, com versões anteriores do .NET Framework.

### Schema

No seu núcleo, o sistema de configuração é baseado em um esquema declarativo. O esquema de configuração abrange vários arquivos, que residem em um local conhecido: windows\system32\inetsrv\config\schema.

Esses arquivos de esquema definem as várias configurações/configurações que controlam comportamentos, sites e aplicativos do servidor Web e outras entidades.

Os contratos de dados definidos no subsistema da Web são derivados desses arquivos de esquema. O seguinte fragmento de IIS\_schema.xml mostra a definição de ProcessModel:

![Captura de tela mostrando a definição de modelo de processo codificado no arquivo I S underline schema dot X M L.](setting-up-components/_static/image5.jpg)

O snippet de código a seguir mostra o DataContract correspondente para ProcessModel:

Verifique o código original para o código-fonte completo.

Conforme descrito em artigos anteriores, todas as operações de serviço são agrupadas em três categorias:

- Provisionamento
- Management
- Consulta

Seguindo esse padrão, todas as operações de serviço relacionadas ao subsistema Web são definidas pelos três seguintes contratos de serviço:

- IProvisioningService
- IManagementService
- IQueryService

Os snippets de código a seguir mostram as definições reais para esses três contratos de serviço com respeito:

![Captura de tela mostrando o snippet de código para definir o serviço de provisionamento I.](setting-up-components/_static/image13.jpg)

![Captura de tela que mostra o snippet de código para definir o serviço de gerenciamento I.](setting-up-components/_static/image17.jpg)

![Captura de tela mostrando o snippet de código para definir o serviço de consulta I.](setting-up-components/_static/image21.jpg)

Todas as implementações de serviço estão contidas no projeto de implementação de serviço, conforme ilustrado na seguinte captura de tela do Visual Studio:

![Captura de tela mostrando a estrutura de arquivos do projeto de implementação de serviço.](setting-up-components/_static/image25.jpg)

Devido ao fato de que determinadas operações se sobrepõem entre esses três serviços, todas as implementações reais são tratadas pela classe WebManager como métodos estáticos, o que aproveita as APIs gerenciadas que vêm com o IIS.

Além das operações relacionadas à Web, a classe CertificateManager é responsável pelo tratamento de todas as operações referentes a certificados. O Windows Server® 2008 introduziu novas APIs para gerenciar certificados e essas APIs de plataforma não são expostas como código gerenciado. CertificateManager usa p/invoke para encapsular essas APIs como APIs gerenciadas.

O projeto de implementação de serviço também contém algumas classes relacionadas à configuração para permitir que os serviços usem configurações definidas na configuração (ou seja, web.config, app.configetc.

Como o IIS 7.0 contém um grande número de configurações, nem todas as operações de serviço foram implementadas neste momento. Continuaremos a adicionar mais operações quando o tempo permitir. No entanto, seguindo a implementação existente, é bastante fácil estender para mais funcionalidade, se necessário, por outros usuários.

## Subsistema FTP

A Microsoft criou um novo serviço FTP, completamente reescrito para o Windows Server® 2008. Esse novo serviço FTP incorpora muitos novos recursos que permitem que os autores da Web publiquem conteúdo melhor do que antes e oferece aos administradores da Web mais opções de segurança e implantação. Consulte as documentações relacionadas para obter detalhes sobre os serviços FTP recém-introduzidos.

### Esquema e diagramas

O sistema de configuração de back-end para o serviço FTP no Windows Server 2008 baseia-se na arquitetura do sistema como serviço do IIS. Todas as configurações relacionadas ao FTP são definidas no arquivo FTP\_Schema.xml em windows\system32\inetsrv\config. O diagrama a seguir mostra um fragmento do arquivo de esquema:

![Captura de tela mostrando o fragmento de código do arquivo de esquema.](setting-up-components/_static/image29.jpg)

A implementação do subsistema FTP segue o mesmo padrão de design que o subsistema web descrito acima. Ele é ilustrado na captura de tela a seguir.

![Captura de tela da estrutura de arquivos do subsistema web.](setting-up-components/_static/image33.jpg)

Como o serviço FTP é uma extensão do serviço IIS de uma perspectiva de configuração, as mesmas APIs gerenciadas – Microsoft.Web.Administration – são usadas durante toda a implementação. A classe FTPManager contém todas as implementações reais das operações de serviço e depende da classe WebManager descrita acima para reutilizar algumas das funcionalidades.

## Subsistema de Armazenamento de Conteúdo

O subsistema de Armazenamento de Conteúdo fornece um conjunto de serviços para gerenciar conteúdo no sistema de arquivos do Windows, como criar um diretório, definir permissões de diretório/arquivo e gerenciar a cota de disco.

### Diagramas

Os diagramas a seguir mostram o mesmo padrão de design usado para implementar serviços para armazenamento de conteúdo. Certamente, sistemas de arquivos diferentes podem ser implementados seguindo o mesmo padrão de design.

A implementação real do serviço de armazenamento de conteúdo está na classe ContentStorageManager no componente Microsoft.Hosting.Management, pois essas funções podem ser compartilhadas por outros serviços.

![Captura de tela que mostra a estrutura de contratos de dados, contratos de serviço e implementação de serviço.](setting-up-components/_static/image37.jpg)

![Captura de tela mostrando a estrutura do gerenciamento de hospedagem da Microsoft.](setting-up-components/_static/image41.jpg)

## Subsistema de Conta de Usuário

O subsistema conta de usuário implementa as funções comuns para criar contas de usuário locais do Windows, usuários do Active Directory, UO e grupos.

### Padrão de diagrama

Ele segue o mesmo padrão de design que outros subsistemas. Ele é composto por DataContracts, ServiceContracts e ServiceImplementation. Todas as implementações de operações de serviço estão contidas na classe UserAccountManager no projeto Microsoft.Hosting.Component.

![Captura de tela mostrando o padrão de design para a classe gerenciador de contas de usuário.](setting-up-components/_static/image45.jpg)

## Subsistema SQL

O subsistema SQL implementa um conjunto de operações para gerenciar serviços relacionados ao Microsoft SQL Server® 2005, como criar banco de dados, banco de dados de backup/restauração e assim por diante. Ele aproveita o SMO do Microsoft SQL Server (Objetos de Gerenciamento de SQL) para fornecer todas as funcionalidades. Para habilitar a compilação e a execução do serviço, os componentes cliente do Microsoft SQL Server são necessários. Você pode implementar operações de serviço semelhantes para diferentes produtos de banco de dados, como Oracle e MySQL.

### Diagrama de Implementação

A implementação segue o mesmo padrão de design: contém DataContracts, ServiceContracts e ServiceImplementation, conforme ilustrado abaixo.

![Captura de tela mostrando o padrão de design da Microsoft que hospeda o S Q L.](setting-up-components/_static/image49.jpg)

## Hospedando os Serviços de Exemplo

Duas soluções de hospedagem diferentes foram implementadas: hospedagem baseada em IIS e hospedagem baseada no Serviço Windows.

### Opções

Implemente suas próprias opções de hospedagem preferenciais seguindo as documentações do WCF para implementar a hospedagem do WCF:

- [Hospedagem nos Serviços de Informações da Internet](https://msdn.microsoft.com/library/ms734710.aspx)

Ou

- [Hospedagem em um aplicativo de serviço do Windows](https://msdn.microsoft.com/library/ms734781.aspx)

Mais opções estão disponíveis na [Hospedagem do WCF](https://msdn.microsoft.com/library/ms729846.aspx).

A figura a seguir mostra as duas soluções de hospedagem no Visual Studio.

![Captura de tela mostrando duas estruturas de solução de hospedagem.](setting-up-components/_static/image53.jpg)

## Provedor de função de segurança

O código de exemplo usa o [Provedor de Funções do Windows](https://msdn.microsoft.com/library/6b241xwt.aspx) para executar uma verificação de função no WCF em cada chamada para verificar se o chamador é membro do grupo WindowsBuiltInRole.Administrator. Isso é implementado no arquivo WindowsAuthorizationManager.cs no projeto Microsoft.Hosting.Management, conforme visto na figura abaixo.

![Captura de tela mostrando o gerenciador de autorização do Windows na seção gerenciamento de hospedagem da Microsoft em componentes.](setting-up-components/_static/image57.jpg)

### Alterando a função

Se houver a necessidade de alterar essa função, o método para modificar será CheckAccessCore, mostrado na figura abaixo

![Captura de tela com um trecho de código do núcleo de verificação de acesso.](setting-up-components/_static/image59.jpg)

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
