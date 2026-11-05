# Proteger conteúdo no IIS por meio de ACLs do sistema de arquivos | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-for-security/secure-content-in-iis-through-file-system-acls

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

# Proteger conteúdo no IIS por meio de ACLs do sistema de arquivos

Comentários

por  Nazim Lala

## Introdução

A ACL (lista de controle de acesso) é uma lista de permissões associadas a um objeto. Cada uma dessas entradas de permissão é chamada de ACE (entrada de controle de acesso); um ACE contém permissões associadas a um objeto específico para uma identidade específica. Por exemplo, para objetos do sistema de arquivos, você pode definir ACLs em arquivos/diretórios em um sistema de arquivos NTFS.

Você pode usar ferramentas de GUI (interface gráfica do usuário) (como Meu Computador ou Windows® Explorer) para definir ou editar ACLs. Basta clicar com o botão direito do mouse em qualquer recurso de arquivo ou pasta de uma dessas ferramentas, selecionar **Propriedades** e clicar na **guia Segurança** para ver uma representação gráfica da ACL no recurso escolhido. Nessa caixa de diálogo, você pode aplicar ou remover permissões de grupo ou usuário a recursos do sistema, como arquivos e pastas. Você também pode usar um utilitário de linha de comando Cacl.exe para exibir ou modificar ACLs de arquivo.

## Noções básicas de ACL

É útil começar com algumas noções básicas de ACL.

### Permissões comuns do IIS

As permissões mais comuns de interesse no ACE são leitura, gravação, execução e listar conteúdo da pasta.

- **Permissões de leitura/gravação.** As permissões de leitura e gravação dão acesso de leitura e gravação ao objeto do sistema de arquivos, respectivamente.
- **Permissão listar conteúdo da pasta.** A permissão de conteúdo da pasta de lista é usada para exibir o conteúdo de uma pasta e é necessária para registrar notificações de alteração de arquivo em um diretório.
- **Permissão de Execução** A permissão de execução é usada para especificar se o sistema operacional deve executar um aplicativo específico como o usuário especificado. Isso não abrange cenários de aplicativos dinâmicos, como PHP (ou Microsoft® ASP.NET). Você está executando código quando invoca um arquivo .php ou .aspx, mas não da perspectiva do sistema operacional. Em vez de definir a permissão de execução, você deve considerar o uso das permissões de script e execução.
- **Controle total.** A permissão de controle total fornece todo o acesso ao objeto do sistema de arquivos. Evite o controle total e use permissões de leitura/gravação mais granulares.
- **Script do IIS/Permissões de Execução.** Arquivos com conteúdo dinâmico, como arquivos .php (ou .aspx), precisam de permissão de script para funcionar. Mas observe que, embora as ACLs do sistema de arquivos tenham um sinalizador de execução, elas não têm nada para script. Isso ocorre porque os Serviços de Informações da Internet 7 e superiores (IIS 7 e superior) têm uma configuração especial para indicar se um arquivo específico tem conteúdo dinâmico; essa configuração é armazenada na configuração do IIS, fora das ACLs do sistema de arquivos. Quando se discutem permissões de script ou execução, trata-se na verdade da configuração do IIS, e não das permissões de execução do sistema de arquivos.
- **Herança de objetos** As ACLs do sistema de arquivos geralmente são herdadas. Em alguns casos, o diretório pai pode ter ACLs muito soltas que precisam ser substituídas no nível filho para bloquear adequadamente o conteúdo. É improvável que isso seja um problema em um cenário hospedado, pois há poucas permissões na raiz.

### Identidades comuns do IIS

Você pode permitir ou negar permissões a identidades específicas por meio de ACLs para proteger seu conteúdo. Há dois tipos de identidades: identidades de processo (aquelas com as quais o processo de trabalho do IIS é iniciado) e as identidades do manipulador de solicitações (aquelas da autenticação da solicitação).

- **Identidade do Processo de Trabalho (WPI)**. O processo de trabalho do IIS é executado como o WPI, que é configurável por meio das configurações do Pool de Aplicativos no IIS. O IIS 6.0 no Windows Server® 2003 e no IIS 7 e posterior no Windows Server® 2008 tem a identidade "Serviço de Rede" como o WPI padrão. No entanto, o Windows Server® 2008 R2 usa a identidade do pool de aplicativos como o WPI padrão. Se o aplicativo autenticar e atuar em nome de outro, a identidade do manipulador de solicitações será a identidade do usuário autenticado.  
  Se o Php.ini tiver fcgi.impersonate definido como "true" (recomendado para O IIS), os processos php serão executados como o usuário autenticado. É importante observar que, no caso de autenticação anônima, o usuário autenticado seria o usuário anônimo configurado.
- **IIS\_IUSRS.** Esse é um grupo de identidade interno que é um contêiner de todas as identidades de processo de trabalho (WPIs) no servidor. O IIS inclui automaticamente todos os WPIs nesse grupo (não é necessário adicioná-los manualmente).  
  No IIS 6.0 no Windows Server 2003, esse grupo é chamado de IIS\_WPG. Esse é um grupo abrangente que contém todos os WPIs e, portanto, não é um bom candidato para isolar o conteúdo. Qualquer aplicativo em execução em qualquer pool de aplicativos estaria em execução como uma identidade que se enquadra nesse grupo, portanto, dar a esse grupo acesso de leitura significa que todos os aplicativos podem ler seu conteúdo.
- **IUSR/Identidade de Usuário Anônima.** A conta IUSR interna é o padrão usado para indicar a identidade do usuário de qualquer pessoa que esteja usando a autenticação anônima. A identidade do usuário anônimo é configurável e pode ser definida como uma identidade além desse padrão interno.  
  Na prática, você deve configurar uma conta personalizada para a conta de usuário anônima e nunca usar a conta integrada. É importante entender que, no IIS, o usuário anônimo não é a falta de um usuário autenticado. Em vez disso, as solicitações anônimas devem ser consideradas como solicitações em que o usuário autenticado é a identidade do usuário anônimo.
- **Identidade do pool de aplicativos.** Essa é uma identidade virtual associada a um pool de aplicativos específico. Sempre que um usuário cria um pool de aplicativos, uma identidade virtual (identificador de segurança ou SID) é criada com ele; essa identidade é injetada no processo de trabalho do IIS para que o processo de trabalho em execução nesse pool de aplicativos tenha acesso ao conteúdo com permissões bloqueadas para essa identidade virtual. No Windows Server 2008 Service Pack 2 (SP2), o administrador pode criar seus processos de trabalho com essa identidade virtual. Isso é configurável nas configurações do pool de aplicativos do IIS como o tipo "Identidade do Pool de Aplicativos" e é o tipo de identidade WPI padrão para o Windows Server 2008 R2. (A identidade é exclusiva do pool de aplicativos que o criou e, portanto, pode ser usada para isolar o conteúdo no servidor para pools de aplicativos com mais eficiência.)
- **Identidade de usuário autenticada.** Se o aplicativo usar qualquer forma de autenticação (incluindo autenticação anônima), essa será a identidade do usuário autenticado. No caso de autenticação anônima, essa identidade seria sua identidade de usuário anônima configurada.

#### Pipeline de execução do IIS

Para entender quais identidades são aplicáveis em quais estágios, é útil entender os conceitos básicos do pipeline de execução do IIS. As duas partes do pipeline que são mais aplicáveis são a autenticação e o mapeamento do manipulador.

- **Autenticação.** Antes da autenticação, o contexto do usuário autenticado é desconhecido e todos os processos de trabalho do IIS são executados como o WPI. Se você tiver uma solicitação PHP que esteja tentando acessar o conteúdo antes que a solicitação seja autenticada, o WPI precisará de acesso ao conteúdo. Esse cenário se aplica ao usar as regras globais do Regravador de URL que são executadas na fase global de pré-início de solicitação do pipeline do IIS, que ocorre antes da autenticação. O Regravador de URL tem a capacidade de processar regras de forma diferente com base em se o recurso que está sendo acessado é um arquivo ou um diretório. Para que isso seja avaliado, um acesso ao sistema de arquivos precisa ocorrer e, devido à sua posição no pipeline de execução, essa solicitação de acesso ocorre como o WPI.

  Após a autenticação, o contexto do usuário autenticado é estabelecido, mas você não estará necessariamente agindo como esse usuário até que sua solicitação seja mapeada para um manipulador. Para as fases entre autenticação e mapeamento do manipulador, é mais provável que você esteja operando como WPI.
- **Mapeamento de manipulador.** Nesta fase do pipeline de execução, sua solicitação é mapeada para um manipulador; por exemplo, solicitações para \*.php são mapeadas para o manipulador FastCGI. Depois que esse mapeamento ocorre e você tem a representação habilitada, a identidade do manipulador é o Usuário Autenticado e todo o acesso a recursos nessa fase ocorre usando a identidade do usuário autenticado.

### Selecionar uma identidade

Descobrir as contas certas para conceder permissões depende do perfil e dos recursos críticos do seu aplicativo. As principais considerações são quais permissões conceder e se você está ou não autenticado.

- **Concedendo as permissões apropriadas.** Conteúdo dinâmico como esse em aplicativos PHP e ASP.NET precisa de permissão de script do IIS e acesso de leitura. Se você precisar executar executáveis, eles precisarão ter a permissão de execução do IIS e eles precisarão ser configurados corretamente na Lista de Restrições de CGI. Qualquer coisa que não seja carregada pelo usuário só precisa de acesso de leitura no sistema de arquivos.  
  O conteúdo que será carregado por um usuário deve residir em uma pasta separada à qual você atribui acesso de gravação. É importante não conceder a esta pasta permissões de execução ou script do IIS para que os usuários não possam carregar e executar código mal-intencionado.  
  Em geral, o WPI deve ter acesso de leitura a todo o conteúdo para que seu aplicativo funcione corretamente.
- **Aplicativos que exigem autenticação.** Para aplicativos que exigem autenticação, bloqueie todos os recursos para um grupo que contém todos os usuários autenticados. Se você tiver diferentes categorias de usuários (administrador e não administrador), crie grupos separados e dê acesso adequadamente. Por exemplo, se seu aplicativo tiver um diretório de administração que contenha scripts de administração, conceda permissões para ler esse diretório apenas para o grupo de administradores. Se o aplicativo estiver se passando, a identidade do manipulador será o usuário autenticado; caso contrário, é o WPI. Se você definiu fcgi.impersonate como "true" em seu arquivo Php.ini, sua identidade de processos fcgi será a identidade do usuário autenticada; caso contrário, é o WPI. Com essas informações, um administrador pode determinar o conjunto certo de ACLs a serem colocadas no conteúdo.
- **Aplicativos que são executados anonimamente.** É importante observar que a execução anônima no servidor IIS significa que você está autenticado como a identidade de usuário anônimo. Nesse caso, restrinja os recursos tanto à identidade do pool de aplicativos quanto à sua identidade anônima configurada personalizada, e dê preferência de acesso à identidade do pool de aplicativos em relação à identidade anônima. Se você conceder acesso ao grupo IIS\_IUSRS ao seu conteúdo, os aplicativos executados em qualquer pool de aplicativos terão acesso ao seu conteúdo. Se você permitir que usuários anônimos carreguem arquivos, seu aplicativo deverá garantir verificações adicionais sobre os tipos de conteúdo que esses usuários podem carregar para manter o servidor seguro.

## Como definir ACLs

Há várias maneiras de definir suas ACLs por meio do shell, incluindo ferramentas de linha de comando, como Icacls.exe. Este artigo se concentra no mecanismo XML (manifesto da Ferramenta de Implantação da Web) que pode ser usado para definir ACLs. Isso é usado ao instalar um aplicativo por meio da Ferramenta de Implantação da Web.

Para conceder permissões de leitura, execução e gravação ao diretório do sistema de arquivos *MyApp* para o usuário *Foo*, adicione a seguinte linha ao arquivo Manifest.xml:

```
<setAcl path="MyApp" setAclAccess="ReadAndExecute, Write" setAclUser="Foo" />
```

Para definir a ACL no caminho *MyApp/Upload* para permitir que usuários anônimos carreguem conteúdo, adicione a seguinte linha ao arquivo Manifest.xml:

```
<setAcl path="MyApp/Upload" setAclAccess="Write" setAclUser="anonymousAuthenticationUser" />
```

Observe que ***anonymousAuthenticationUser*** é um token especial que será resolvido para sua identidade de autenticação anônima configurada.

Para conceder acesso de leitura à pasta MyApp\Data para a identidade do pool de aplicativos, adicione a seguinte linha ao arquivo Manifest.xml:

```
<setAcl path="MyApp/Data" setAclAccess="Read" />
```

Observe que o *setAclUse* r não é usado aqui (o valor padrão para isso é a Identidade do Pool de Aplicativos).

## Links para obter mais informações

- [Noções básicas sobre as contas de usuário e de grupo Built-In no IIS7 e superior](get-started__planning-for-security__understanding-built-in-user-and-group-accounts-in-iis.md)

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
