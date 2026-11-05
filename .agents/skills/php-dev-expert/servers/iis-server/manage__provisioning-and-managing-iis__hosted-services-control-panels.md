# Painéis de controle de serviços hospedados | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/hosted-services-control-panels

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

# Painéis de controle de serviços hospedados

Comentários

por Brad Joseph

## Painéis de controle de serviços hospedados

Os painéis de controle de serviços hospedados são aplicativos baseados no cliente e baseados na Web fornecidos por provedores de hospedagem e WebVAPs para emissão e gerenciamento de serviços hospedados, como sites, administração de banco de dados, contas de email e provisionamento de recursos. Os painéis de controle são um modelo comprovado para monetizar servidores Web de commodities e serviços de host. os provedores de hospedagem dependem dos painéis de controle para automatizar a implantação rápida do servidor Web e do site, abstraindo a complexidade das ferramentas de gerenciamento voltadas para a empresa por meio do uso de controles centrados no usuário para colocar os clientes em funcionamento em minutos, a qualquer momento e em qualquer lugar. Além das funções básicas do site, a maioria dos fabricantes de painéis de controle também fornece um sistema de cobrança completo com relatórios extensos e informações de cobrança com item.

Os painéis de controle de host fornecem duas funções primárias aos usuários: administração do servidor Web e automação de tarefas no nível do domínio.

A administração do servidor Web inclui as seguintes funções:

- Gerenciamento de contas de clientes
- Definindo pacotes de host

  - Cotas de conta
  - Domínios
  - Faturamento
- Funções no nível do servidor

  - Configuração do servidor Web
  - Configuração do banco de dados
  - Configuração DNS (Sistema de Nomes de Domínio)
  - Gerenciamento de servidores virtuais

A automação de tarefas no nível do domínio inclui as seguintes ações:

- Instalação do aplicativo
- Transferência de arquivo do site
- Análise de site
- Gerenciamento de banco de dados
- Configuração de subdomínio
- Configuração e administração da conta de email

Como todas as funções são executadas a partir de um navegador, não é necessária a instalação de um painel de controle específico para o sistema operacional, não há dependência de área de trabalho remota, nem negociação de firewall necessária. Uma vantagem adicional para as interfaces da Web é uma dependência reduzida nas plataformas subjacentes, como Windows/SQL ou Linux/MySQL, eliminando assim a necessidade de painéis de controle personalizados. E na tentativa de atender às necessidades de negócios dos provedores de hospedagem, muitos fabricantes permitem modificar a aparência do painel de controle com skins, identidade visual e módulos personalizados.

O gráfico a seguir mostra o papel dos painéis de controle de funções ao trabalhar com ambientes de hospedagem baseados no Windows:

[![Diagrama de Painéis de Controle que afetam a configuração, a proteção de dados, o provisionamento e o monitoramento de serviços Web.](hosted-services-control-panels/_static/image2.png)](https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/hosted-services-control-panels/_static/image1.png)

### Painéis de controle recomendados

Atualmente, a Microsoft não oferece um painel de controle para provedores de hospedagem compartilhados e dedicados, mas há muitos produtos do painel de controle no mercado para escolher. Abaixo estão algumas das ofertas do painel de controle no mercado hoje que atendem aos provedores de hospedagem:

- **O Parallels Plesk Panel 9.5** é uma solução abrangente para provedores de hospedagem compartilhados, virtuais e dedicados. O Plesk 9.5 fornece administração de vários níveis para o administrador do servidor, revendedor e clientes de hospedagem, fornecendo recursos de gerenciamento, como mecanismo de atualização automática de chave, atualizador de componente automático, gerenciador de migração e uma instalação baseada na Web para implantação rápida. Para obter mais informações sobre o Plesk 9.5 e outros produtos parallels, visite: [aqui](https://www.parallels.com/).
- **Ensim Unify****Gerenciado e Provedor de Serviços**. O Provedor de Serviços Unificado do Ensim é um único aplicativo de software centralizado e multilocatário que simplifica a carga diária de ativar, configurar e gerenciar a infraestrutura de colaboração e comunicação unificada de um provedor de serviços. O Ensim Unifi managed é um console de gerenciamento de sistemas abrangente que permite aos provedores de serviços gerenciados administrar e automatizar a infraestrutura de aplicativo de missão crítica dedicada de seus clientes. Para obter mais informações sobre Unifique Gerenciado, Provedor de Serviços e outros produtos do Ensim, visite: [aqui](https://www.cloudblue.com/)
- O Controlador de Hospedagem é um painel de controle integrado, fornecendo uma interface coerente, de multilocação e autoatendimento para o gerenciamento e a facilitação das tarefas diárias de hospedagem web e na nuvem. Para sua plataforma Windows, o Controlador de Hospedagem aproveita a conveniência e a simplicidade do IIS, que também serve como seu servidor Web. Algumas de suas principais ofertas incluem uma hierarquia de várias camadas, cobrança e provisionamento automatizados, scripts de inscrição automática personalizáveis e registradores de domínio e processadores de pagamentos firmemente acoplados, permitindo um pacote completo de automação da Web. Para obter mais informações sobre o Controlador de Hospedagem, visite: [aqui](https://hostingcontroller.com/)
- **O EMS Cortex** permite que os provedores de serviços hospedem, vendam e revendam aplicativos e infraestrutura hospedadas de maneira automatizada de baixo custo por meio de um único painel de controle baseado na Web. O Cortex permite que os provedores de hospedagem ofereçam Data Centers Virtuais em Hyper-V e uma variedade de aplicativos de nuvem populares, incluindo Exchange, SharePoint, OCS e Dynamics CRM, bem como entrega na Área de Trabalho na Nuvem.

### WebsitePanel

Outra opção para provedores de hospedagem é [WebsitePanel](manage__provisioning-and-managing-iis__websitepanel.md). WebsitePanel, anteriormente conhecido como DotNetPanel, é um painel de controle de software livre criado exclusivamente para o sistema operacional Windows. Com a ajuda de ex-desenvolvedores do DotNetPanel, a Microsoft está investindo no futuro e no sucesso do WebsitePanel, contribuindo com suporte para esforços de desenvolvimento contínuos.

O WebsitePanel foi enviado recentemente como um projeto de software livre no [SourceForge](http://sourceforge.net/) e carrega uma licença BSD. Para obter mais informações sobre o WebsitePanel, visite: [http://websitepanel.net](http://websitepanel.net/).

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
