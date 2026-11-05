# Melhorias de segurança do IIS7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-7/iis7-and-above-security-improvements

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

# Melhorias de segurança do IIS7

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Área de Superfície Reduzida

O IIS 6.0 introduziu o ***bloqueio por abordagem padrão*** . Essa foi uma mudança significativa em relação às versões anteriores do IIS que instalaram e habilitaram quase todos os recursos prontos para uso, resultando em um servidor Web totalmente capaz, mas totalmente exposto por padrão. Com o IIS 6.0, vários recursos foram removidos da instalação padrão e muitos outros, enquanto instalados, foram desabilitados na instalação padrão.

O IIS 7.0 e superior adota essa abordagem na próxima etapa introduzindo a ***instalação mínima por abordagem padrão*** . O IIS inclui um servidor Web completamente modular que foi dividido em componentes, possuindo mais de quatro a cinco vezes o número de componentes instaláveis do que as versões anteriores do IIS. Com o IIS, apenas o número mínimo de componentes é instalado e habilitado. Isso tem vários benefícios principais:

- Menos componentes instalados significa área de superfície potencial inferior disponível para invasores
- Menos componentes instalados significa menos para gerenciar, corrigir e manter
- Menos componentes reduzidos na memória significa maior desempenho, escalabilidade e confiabilidade

## Gerenciamento simplificado de segurança

O IIS fornece várias simplificações importantes no gerenciamento de segurança, para facilitar a obtenção e a manutenção da segurança. Essas melhorias de gerenciamento incluem:

- Suporte à administração delegada avançada, permitindo que as tarefas de gerenciamento e configuração com escopo sejam delegadas a não administradores de maneira simples e segura
- Gerenciamento unificado de autenticação e autorização, permitindo que todos os métodos de autenticação e autorização, incluindo autenticação dos Forms e URLAuthorization, sejam gerenciados em um único local, para qualquer tipo de conteúdo.
- Contas de usuário e grupo internas dedicadas ao servidor Web, permitindo que um SID (identificador de segurança) comum seja usado em computadores que simplificam o gerenciamento de ACL do NTFS e simplificam o gerenciamento de identidade e área restrita do Pool de Aplicativos

## Aperfeiçoamentos de segurança

O IIS também fornece vários novos recursos de segurança que aprimoram os recursos de segurança do servidor Web, incluindo a Filtragem de Solicitações. A nova filtragem de solicitação interna do IIS pode filtrar solicitações em tempo real com base em verbo, extensão de arquivo, tamanho, namespace e sequências. Grande parte dessa funcionalidade, entregue anteriormente no URLScan (um filtro ISAPI disponível como download da Web) agora está disponível como um módulo interno do IIS.

### Infraestrutura de delegação abrangente

No passado, era muito difícil configurar a delegação de tarefas administrativas para usuários não administrativos no IIS.

No IIS 5.0, a ferramenta de administração permitiu especificar operadores Web (`https://www.microsoft.com/windows2000/en/server/iis/default.asp?url=/windows2000/en/server/iis/htm/core/iiwbsop.htm`) e, no IIS 6.0, a equipe do IIS introduziu a modificação das [ACL de metabase](https://support.microsoft.com/?id=326902) para resolver esse cenário.

Cada uma dessas soluções teve seus benefícios e desvantagens que a equipe do IIS aprendeu. Usando comentários do cliente, a equipe desenvolveu o novo modelo de delegação avançada do IIS. Com a nova arquitetura, os administradores podem:

- Configurar uma infraestrutura de administração delegada usando principais do Windows e não-Windows.
- Defina a configuração em um servidor, site e escopo do aplicativo. Os administradores de sites e aplicativos não precisam ser administradores de sistema para gerenciar sites e aplicativos

Para garantir que o IIS esteja seguro fora da caixa, a delegação foi bloqueada por padrão. Para ajudar a entender o que isso significa, esta seção aborda:

- Configurações padrão seguras do IIS para bloqueios
- Como as permissões padrão do IIS habilitam a delegação segura logo de início

Desde o início, o objetivo era garantir que o IIS 7.0 e superior fosse tão seguro quanto seu antecessor, o IIS 6.0. No IIS 6.0, havia um arquivo de configuração primário chamado metabase, mas a configuração de cenários de delegação usando ACL de metabase não era muito comum ou fácil.

Com o modelo de delegação no IIS 7.0 e superior, a equipe do produto precisava garantir que bloqueássemos o applicationHost.config (a substituição de metabase) o mais rigorosamente possível. Ao mesmo tempo, a equipe tornou extremamente fácil usar pelos administradores que queriam configurar delegações sem ter que enfrentar muitos obstáculos.

Quando uma seção é 'bloqueada', significa que a seção não pode ser redefinida por um aplicativo ou administrador do site. Quando uma seção é "desbloqueada", significa que a seção tem permissão para ser alterada pelo administrador do site ou aplicativo. O documento acima analisa cada seção de um aspecto de segurança, desempenho e confiabilidade e mostra por que optamos por desbloquear determinadas seções e não outras. Com base nos requisitos de ambientes, você pode optar por desbloquear ou bloquear mais seções.

### Como as permissões padrão do IIS possibilitam a delegação segura imediatamente após a instalação

Essas seções fornecem uma visão geral sobre como a delegação e as permissões se relacionam entre si no IIS no Vista e no Server. Eles também mostram como os usuários não administrativos (identidades do Windows e não windows) podem ser facilmente configurados para gerenciar sites e aplicativos sem alterações nas permissões padrão.

Primeiro, examinamos o cliente vista e, em seguida, examinamos o Servidor. Para garantir uma compreensão clara do que está acontecendo, são fornecidos instruções passo a passo detalhadas que abordam os pontos-chave que estão sendo discutidos.

### Cliente Vista

O cliente Vista foi projetado com base em duas metas principais:

- A delegação no cliente por meio da interface do usuário não é um recurso com suporte no Windows Vista
- A delegação por meio de arquivos de configuração tem suporte total para contas de usuário não administrativas do Windows com LUA habilitado. Usar contas de administrador requer que o LUA seja desativado para funcionar corretamente e não é recomendado

Esta seção agora discute o segundo ponto e examina como você pode configurar facilmente a delegação usando uma conta não administrativa do Windows.

### Delegação usando contas não administrativas do Windows

Esse é um cenário comum quando os administradores desejam implementar um modelo delegado em seus sistemas em que os usuários estão:

Contas do Windows que residem no banco de dados da conta local ou no active directory.

- Não faz parte do grupo de administradores
- Parte do grupo de usuários

### Windows Server® 2008

O Windows Server 2008 leva a delegação para o próximo nível fornecendo o seguinte:

- Suporte completo para todos os cenários de delegação de cliente no servidor
- Suporte completo para delegação por meio da interface do usuário, que inclui o uso de principais que não são do Windows

Para entender melhor como a interface do usuário dá suporte à delegação com permissões seguras e ao uso de entidades de segurança que não são do Windows, o passo a passo a seguir fornece uma visão geral sobre:

- Delegação usando contas não administrativas do Windows e a interface do usuário
- Delegação com contas não Windows e a interface do usuário

### Arquitetura de segurança unificada

Em versões anteriores do IIS com suporte ASP.NET aplicativos, tínhamos duas arquiteturas de segurança avançadas que forneceram uma solução de ponta a ponta para desenvolvedores de aplicativos. O primeiro modelo foi fornecido pelo IIS e o segundo foi fornecido pelo ASP.NET.

Quando a equipe do IIS estava redesenhando o IIS 7.0, eles viram uma oportunidade de unificar esses dois modelos e o fizeram. Agora, no IIS 7.0 e versões posteriores, nós temos um pipeline que:

- Oferece suporte total aos principais do Windows que estão no banco de dados da conta local ou no Active Directory (como no passado)
- Suporte total a principais que não são do Windows
- Forneça um local para fazer toda a autenticação e autorização

Alguns benefícios adicionais para a arquitetura do IIS 7.0 e superior é que agora ele pode aproveitar o sistema de associação avançada que ASP.NET 2.0 fornece. Usando o novo sistema de gerenciamento de usuários, podemos dar suporte a todos os que o ASP.NET 2.0 suporta (como o SQL) ou criar provedores personalizados e fazer com que eles "funcionem perfeitamente" com o IIS 7.0 e superior.

### Suporte completo a usuários do Windows

Como nas versões anteriores do IIS, todos os esquemas de autenticação anteriores ainda estão disponíveis no IIS 7.0 e acima, principalmente:

- Autenticação do Windows
- Autenticação Anônima
- Autenticação Básica
- Autenticação Resumida
- Autenticação de certificado

Quando um token é criado a partir de qualquer um desses tipos de autenticação, ele ainda pode ser usado por um aplicativo IIS, bem como qualquer aplicativo ASP.NET sem nenhuma configuração adicional.

### Suporte completo a entidades de segurança que não são do Windows

O recurso Autenticação de Formulários foi introduzido no IIS 7.0. No passado, isso só estava disponível para ASP.NET aplicativos, mas devido à arquitetura do IIS 7.0 e superior, a autenticação de formulários pode ser usada para autenticar identidades que não são do Windows, como qualquer um dos outros esquemas de autenticação descritos na seção anterior.

### Fornecer um local para fazer toda a autenticação e autorização

Ao usar a ferramenta de administração do IIS ou arquivos de configuração, observe que todas as políticas de autenticação e autorização (para ASP.NET e IIS 7.0 e superior) podem ser configuradas nas <seções de autenticação> e <autorização> , respectivamente, no `<system.webServer>` grupo.

Isso agora facilita que os administradores definam regras e vejam o que está acontecendo em seus servidores.

**Iniciar o aprendizado**

- [Alterações de segurança no IIS 7.0 e superior](get-started__whats-new-in-iis-7__changes-in-security-between-iis-60-and-iis-7-and-above.md)
- [Noções básicas sobre conta anônima integrada e grupos no IIS 7.0 e superior](get-started__planning-for-security__understanding-built-in-user-and-group-accounts-in-iis.md)
- [Usando criptografia para proteger senhas](manage__configuring-security__using-encryption-to-protect-passwords.md)
- [Noções básicas sobre a autorização de URL do IIS 7.0 e acima](manage__configuring-security__understanding-iis-url-authorization.md)

**Começar a usar os recursos de segurança do IIS 7.0 e acima**

- [Como usar a filtragem de solicitações](manage__configuring-security__use-request-filtering.md)
- [Delegando tarefas administrativas](manage__managing-your-configuration-settings__an-overview-of-feature-delegation-in-iis.md)
- [Como configurar o SSL no IIS 7.0 e superior](manage__configuring-security__how-to-set-up-ssl-on-iis.md)

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
