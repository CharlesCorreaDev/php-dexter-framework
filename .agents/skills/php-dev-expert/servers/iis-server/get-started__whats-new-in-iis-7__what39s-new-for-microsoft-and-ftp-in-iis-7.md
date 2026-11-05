# Novidades para Microsoft e FTP no IIS 7? | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-7/what39s-new-for-microsoft-and-ftp-in-iis-7

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

# Novidades para Microsoft e FTP no IIS 7?

Comentários

por [Tim Elhajj e R McMurray](https://github.com/rmcmurray)

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 7.5 | O serviço FTP 7.5 é fornecido como um recurso para o IIS 7.5 no Windows 7 e Windows Server 2008 R2. |
| IIS 7.0 | Os serviços FTP 7.0 e FTP 7.5 foram enviados fora de banda para o IIS 7.0, o que exigiu o download e a instalação do serviço da seguinte URL: [https://www.iis.net/download/FTP](https://www.iis.net/downloads/microsoft/ftp). |

## Introdução

A Microsoft lançou um serviço FTP atualizado que está disponível como um download separado para o Windows Server® 2008 e superior que fornece uma solução robusta e segura para FTP em um ambiente do Windows. Esse serviço FTP foi escrito especificamente para o Windows Server 2008 e superior e permite que os autores da Web publiquem conteúdo com mais facilidade e segurança do que antes e oferece aos administradores da Web e hosters uma melhor integração, gerenciamento, autenticação e recursos de log. Observe que há dois serviços FTP disponíveis para o IIS:

- O novo serviço FTP da Microsoft para IIS é fornecido como um download da Web para Windows Server 2008.
- O outro serviço FTP é fornecido no DVD do Windows Vista™ e do Windows Server 2008. (Esse serviço FTP é essencialmente o mesmo serviço FTP do IIS 6.0.)

Há dois pacotes para download separados para o novo servidor FTP; você precisará baixar o pacote apropriado para sua versão do Windows Server 2008:

- **Pacote de instalação de 32 bits**:

  - FTP 7.5 para IIS 7.0 (x86)
- **Pacote de instalação de 64 bits**:

  - FTP 7.5 para IIS 7.0 (x64)

Para obter mais informações sobre como instalar o novo serviço FTP, confira o seguinte passo a passo:

- [Instalação e solução de problemas do FTP7.5](https://go.microsoft.com/fwlink/?LinkId=88547)

### Recursos do serviço FTP

Este novo serviço FTP para IIS dá suporte a uma ampla gama de recursos e melhorias, e a lista a seguir contém várias das melhorias nesta versão:

- **Integração com o IIS**:  
  O IIS tem uma interface de administração atualizada e um repositório de configuração e o novo serviço FTP é fortemente integrado a esse novo design. A antiga metabase do IIS 6 se foi, e um novo repositório de configuração baseado no formato \*.config em XML do .NET tomou seu lugar. Além disso, o IIS tem uma ferramenta de administração atualizada e o novo servidor FTP conecta-se perfeitamente a esse paradigma.
- **Segurança e suporte para novos padrões da Internet**:  
  Um dos recursos mais significativos no novo serviço FTP é o suporte para FTP por SSL. Também oferecemos suporte ao uso de contas não Windows para autenticação, possibilitando que profissionais de TI e desenvolvedores criem usuários FTP que não têm contas de usuário do Windows. O novo serviço FTP também dá suporte a outros aprimoramentos da Internet, como UTF8 e IPv6.
- **Melhorias de hospedagem compartilhada**:  
  Ao integrar totalmente ao IIS, o novo serviço FTP possibilita hospedar o FTP e o conteúdo da Web do mesmo site simplesmente adicionando uma associação FTP a um site existente. Além disso, o serviço FTP agora tem suporte ao nome do host virtual, possibilitando hospedar vários sites FTP no mesmo endereço IP. O novo serviço FTP também melhorou o isolamento do usuário, possibilitando isolar os usuários por meio de diretórios virtuais por usuário.
- **Recursos aprimorados de registro de informações e facilidade de suporte**  
  O registro em log de FTP foi aprimorado para incluir todo o tráfego relacionado à FTP, acompanhamento exclusivo para sessões de FTP, sub-statuses de FTP, campos de detalhes adicionais nos logs de FTP e muito mais. O IIS tem a opção de exibir mensagens de erro detalhadas para usuários locais e o serviço FTP segue esse paradigma fornecendo respostas de erro detalhadas ao fazer logon localmente em um servidor FTP. O serviço FTP também registra informações detalhadas usando o ETW (Rastreamento de Eventos para Windows), que fornece informações detalhadas adicionais para solução de problemas.
- **Conjunto de recursos extensível**:  
  O FTP dá suporte à extensibilidade que permite estender a funcionalidade interna que é fornecida com o serviço FTP. Mais especificamente, há suporte para criar seus próprios provedores de autenticação e autorização. Você também pode criar provedores para registro em log FTP personalizado e para determinar as informações de diretório inicial para seus usuários FTP.

Aqui está uma visão mais detalhada de cada uma dessas novas áreas de recursos.

### Integração com o IIS

O novo serviço FTP é fortemente integrado ao IIS e adota o novo repositório de configuração que o IIS está usando. Para explicar, a metabase das versões anteriores do IIS foi preterida, e um novo sistema de configuração tomou seu lugar, baseado nos arquivos XML de \*.config do .NET. Esse novo formato é muito mais fácil de ler e configurar do que a metabase, e o serviço FTP aproveita ao máximo esse novo design. O repositório de configuração central do IIS é applicationHost.confige todas as informações do FTP são mantidas neste arquivo. O IIS também contém uma nova interface do usuário compartilhada, o Gerenciador do IIS (foto abaixo), que é usada para gerenciar sites da Web e sites FTP.

![Captura de tela do painel Página Inicial do Site Padrão no I S Manager.](what39s-new-for-microsoft-and-ftp-in-iis-7/_static/image1.jpg)

Além disso, devido à integração completa do FTP no IIS, o serviço FTP pode ser gerenciado de qualquer outra ferramenta de gerenciamento do IIS ou API; por exemplo: AppCmd, Microsoft.Web.Administration, PowerShell etc.

Esta versão do serviço FTP simplifica a publicação de conteúdo permitindo que os administradores associem o protocolo FTP a um site existente, o mesmo que você associa HTTPS para fornecer SSL. As etapas mínimas de configuração são adicionar uma associação FTP a um site existente e definir as configurações de FTP para autenticação e autorização, mas um assistente é fornecido para ajudar a definir todas as configurações de FTP para habilitar a publicação.

Na primeira tela do assistente de publicação (foto abaixo), você define as configurações de SSL e as opções de associação, que consistem no endereço IP, porta e nome do host virtual.

![Captura de tela da janela Adicionar Site F T P com as Configurações padrão de Vinculação e S S L.](what39s-new-for-microsoft-and-ftp-in-iis-7/_static/image3.jpg)

Na segunda tela do assistente de publicação (foto abaixo), você define suas configurações de autenticação e autorização. (Configurações adicionais de autenticação e autorização podem ser adicionadas posteriormente.)

![Captura de tela da caixa de diálogo Adicionar Publicação de Site do F T P com as configurações padrão de Informações de Autenticação e Autorização.](what39s-new-for-microsoft-and-ftp-in-iis-7/_static/image5.jpg)

Claro, você não precisa associar o protocolo FTP ao seu site. Se você quiser apenas um site FTP, ainda poderá configurar um site que tenha apenas associações FTP.

Para obter mais informações sobre como adicionar a publicação FTP e sites FTP, confira os seguintes tutoriais:

- [Criando um novo site FTP](https://go.microsoft.com/fwlink/?LinkId=89115)
- [Adicionar publicação FTP a um site existente](https://go.microsoft.com/fwlink/?LinkId=89116)

### Segurança e suporte para novos padrões da Internet

O serviço FTP para IIS dá suporte a padrões emergentes da Internet, como IPv6, UTF8 e FTP por SSL. Oferecemos uma implementação baseada em RFC de FTPS (FTP sobre SSL) e opções de configuração que permitem criptografar dados no canal de controle, no canal de dados ou em ambos os canais. Como temos uma implementação baseada em padrões de FTPS, damos suporte a vários clientes FTP de terceiros.

![Captura de tela da caixa de diálogo da Política Avançada de SSL com o Canal de Controle e o Canal de Dados definidos como Obrigatório.](what39s-new-for-microsoft-and-ftp-in-iis-7/_static/image7.jpg)

O setor abordou como proteger o tráfego FTP de várias maneiras diferentes. Embora não tenha surgido um único padrão, há dois protocolos nomeados da mesma forma: FTPS e SFTP. Para esclarecer, a Microsoft oferece uma solução FTP sobre SSL (FTPS). Atualmente, a Microsoft não fornece uma solução para proteger o tráfego FTP usando FTP por SFTP (SFTP).

Para obter mais informações sobre FTP e SSL, confira o seguinte passo a passo:

- [Configurar o FTP por SSL](https://go.microsoft.com/fwlink/?LinkId=89117)

#### Autenticação para contas que não são do Windows

Adicionamos suporte para métodos de autenticação adicionais que permitem que os hosters da Web usem contas que não são do Windows para autenticar usuários FTP. O serviço FTP é fornecido com dois desses métodos de autenticação:

- Autenticação do Web Manager: essas contas geralmente são criadas para gerenciar sites do IIS
- Autenticação de Membros do .NET: essas contas geralmente são usadas com a autenticação baseada em formulários do ASP.NET.

Para obter mais informações sobre como usar a autenticação não Windows com FTP, confira os seguintes passo a passo:

- [Configurar a Autenticação do Gerenciador do IIS](https://go.microsoft.com/fwlink/?LinkId=100142)
- [Configurando o FTP com Autenticação de Membros do .NET](https://go.microsoft.com/fwlink/?LinkId=129533)

### Melhorias de hospedagem compartilhada

#### Nomes de host virtual FTP

Neste serviço FTP, adicionamos suporte ao nome do host virtual ao FTP. Usando o suporte ao nome do host, você pode hospedar vários sites FTP, cada um com nomes de domínio diferentes, no mesmo endereço IP.

![Captura de tela da caixa de diálogo Editar Vinculação de Site com o endereço I P padrão e o número da porta.](what39s-new-for-microsoft-and-ftp-in-iis-7/_static/image9.jpg)

Para obter mais informações sobre como usar nomes de host virtual FTP, confira o seguinte passo a passo:

- [Configurar nomes de host virtual FTP](https://go.microsoft.com/fwlink/?LinkId=89119)

#### Isolamento de Usuários FTP

Melhoramos o suporte para a configuração de isolamento do usuário ftp. Todos os recursos de isolamento de usuário ftp anteriores permanecem disponíveis para compatibilidade com versões anteriores, mas fizemos algumas alterações na maneira como o isolamento do usuário ftp funciona:

- Se você habilitar o isolamento do usuário FTP com **diretório de nome de usuário (desabilitar diretórios virtuais globais), os usuários** começarão em um diretório que corresponde ao nome de sua conta de usuário quando fizerem logon pela primeira vez no servidor. Em versões anteriores do FTP, você precisava criar um diretório físico para cada uma dessas contas. Isso não é mais necessário; com o novo FTP, você pode usar diretórios virtuais. No entanto, se você usar essa nova opção de isolamento, não poderá mais usar diretórios virtuais globais. Isso significa que, para compartilhar uma pasta entre vários usuários ftp, você deve criar um diretório virtual para cada usuário.
- Em versões anteriores do FTP, era possível usar diretórios virtuais globais se você utilizasse diretórios físicos para os usuários iniciarem suas sessões quando eles fizessem login pela primeira vez no servidor. Se você quisesse compartilhar conteúdo entre vários usuários de FTP, os diretórios virtuais globais eram úteis. Mantivemos essa opção, mas agora ela só está disponível com **diretório físico de nome de usuário (habilitar diretórios virtuais globais)** e você deve criar diretórios físicos para usar essa opção.

![Captura de tela da caixa de diálogo Isolamento do Usuário FTP configurada para usuários iniciarem no diretório raiz do FTP.](what39s-new-for-microsoft-and-ftp-in-iis-7/_static/image1.png)

Para obter mais informações sobre como configurar o isolamento do usuário ftp, consulte o seguinte passo a passo:

- [Configurar o isolamento de usuário ftp](https://go.microsoft.com/fwlink/?LinkId=89118)

#### Navegação de diretório FTP

Agora você pode tornar os diretórios virtuais visíveis para clientes FTP selecionando uma opção na página de Navegação de Diretório FTP aprimorada.

![Captura de tela do estilo de listagem de diretórios configurado como MS-DOS e das opções de listagem de diretórios definidas para exibir diretórios virtuais.](what39s-new-for-microsoft-and-ftp-in-iis-7/_static/image3.png)

Você também pode configurar as opções de navegação de diretório para retornar os bytes disponíveis para clientes FTP, o que é especialmente útil se você estiver usando cotas de disco do FSRM (Gerenciador de Recursos do Sistema de Arquivos) do Windows Server. Para obter mais informações sobre como usar esse recurso com FTP, confira o seguinte passo a passo:

- [Usando cotas de pasta FSRM com FTP](https://go.microsoft.com/fwlink/?LinkId=100092)

### Funcionalidades aprimoradas de log e de suporte

Agora oferecemos melhor suporte ao registro em log, incluindo o registro em log de todos os verbos e campos de detalhes adicionais em logs FTP. Esses novos campos incluem carimbos de sessão reais, permitindo que você analise logs para descobrir exatamente o que os usuários estavam fazendo durante uma sessão. Também oferecemos aos administradores a opção de registrar o caminho completo para solicitações de arquivos ou pastas. Isso é útil porque os servidores normalmente registram apenas o nome do arquivo ou da pasta e isso pode dificultar a leitura de arquivos de log grandes.

![Captura de tela da caixa de diálogo Informações para Registro no painel Log do FTP no Gerenciador do IIS.](what39s-new-for-microsoft-and-ftp-in-iis-7/_static/image11.jpg)

Por fim, o novo servidor FTP fornece mensagens de erro locais detalhadas e ETW (Rastreamento de Eventos para Windows). Esses recursos simplificam a solução de problemas e permitem que os hosters ofereçam melhor suporte aos clientes.

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
