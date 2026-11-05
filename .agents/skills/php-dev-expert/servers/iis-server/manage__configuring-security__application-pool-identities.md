# Identidades do pool de aplicativos | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/application-pool-identities

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

# Identidades do pool de aplicativos

Comentários

por [Thomas Deml](https://github.com/thomasdeml)

Se você estiver executando seu site em seu próprio servidor ou [na nuvem, a](https://learn.microsoft.com/pt-br/azure/app-service/) segurança deve estar no topo da lista de prioridades. Nesse caso, você ficará feliz em ouvir que o IIS tem um recurso de segurança chamado identidade do pool de aplicativos. Esse recurso foi introduzido no Service Pack 2 (SP2) do Windows Server 2008 e no Windows Vista. Uma identidade do pool de aplicativos permite que você execute um pool de aplicativos em uma conta exclusiva sem precisar criar e gerenciar contas locais ou de domínio. O nome da conta do pool de aplicativos corresponde ao nome do pool de aplicativos. A imagem abaixo mostra um processo de trabalho do IIS (W3wp.exe) em execução como a identidade DefaultAppPool.

![Captura de tela da tela do Gerenciador de Tarefas com foco no processo de trabalho W 3 W P dot E X E I I S.](application-pool-identities/_static/image1.jpg)

## Contas de identidade do pool de aplicativos

Os processos de trabalho no IIS 6.0 e no IIS 7 são executados como Serviço de Rede por padrão. O Serviço de Rede é uma identidade interna do Windows. Ele não requer uma senha e tem apenas privilégios de usuário; ou seja, é relativamente de baixo privilégio. A execução como uma conta de baixo privilégio é uma boa prática de segurança porque, em seguida, um bug de software não pode ser usado por um usuário mal-intencionado para assumir todo o sistema.

No entanto, um problema surgiu ao longo do tempo à medida que mais e mais serviços do sistema Windows começaram a ser executados como Serviço de Rede. Isso ocorre porque os serviços em execução como Serviço de Rede podem adulterar outros serviços executados sob a mesma identidade. Como os processos de trabalho do IIS executam código de terceiros por padrão (ASP clássico, ASP.NET, código PHP), era hora de isolar processos de trabalho do IIS de outros serviços do sistema Windows e executar processos de trabalho do IIS em identidades exclusivas. O sistema operacional Windows fornece um recurso chamado "contas virtuais" que permite ao IIS criar uma identidade exclusiva para cada um de seus pools de aplicativos. Para obter mais informações sobre contas virtuais, consulte o [Guia Passo a passo das Contas de Serviço](https://learn.microsoft.com/pt-br/previous-versions/windows/it-pro/windows-server-2008-R2-and-2008/dd548356(v=ws.10)).

## Configurando identidades do pool de aplicativos do IIS

Se você estiver executando o IIS 7.5 no Windows Server 2008 R2 ou uma versão posterior do IIS, não precisará fazer nada para usar a nova identidade. Para cada pool de aplicativos criado, a propriedade Identity do novo pool de aplicativos é definida como **ApplicationPoolIdentity** por padrão. O Processo de Administrador do IIS (WAS) criará uma conta virtual com o nome do novo pool de aplicativos e executará os processos de trabalho do pool de aplicativos nessa conta por padrão.

Para usar essa conta virtual ao executar o IIS 7.0 no Windows Server 2008, você precisa alterar a propriedade Identity de um pool de aplicativos criado para **ApplicationPoolIdentity**. Veja como:

1. Abra o Console de Gerenciamento do IIS (INETMGR.MSC).
2. Abra o nó Pools de Aplicativos abaixo do nó do computador. Selecione o pool de aplicativos que você deseja alterar para ser executado em uma identidade do pool de aplicativos gerada automaticamente.
3. Clique com o botão direito do mouse no pool de aplicativos e selecione **Configurações Avançadas**

   ![Captura de tela da caixa de diálogo Configurações Avançadas com a configuração identidade sendo realçada.](application-pool-identities/_static/image5.jpg)
4. Selecione o item da lista **Identidade** e clique nos três pontos (o botão com os três pontos).
5. A caixa de diálogo a seguir é exibida:

   ![Captura de tela da caixa de diálogo Identidade do Pool de Aplicativos com a opção Identidade do Pool de Aplicativos sendo realçada.](application-pool-identities/_static/image7.jpg)
6. Selecione o botão de conta interna incorporada e, em seguida, selecione o tipo de identidade **ApplicationPoolIdentity** na caixa de combinação.

Para fazer a mesma etapa usando a linha de comando, você pode chamar a ferramenta de linha de comando appcmd da seguinte maneira:

```
%windir%\system32\inetsrv\appcmd.exe set AppPool <your AppPool> -processModel.identityType:ApplicationPoolIdentity
```

## Protegendo recursos

Sempre que um novo pool de aplicativos é criado, o processo de gerenciamento do IIS cria um SID (identificador de segurança) que representa o nome do próprio pool de aplicativos. Por exemplo, se você criar um pool de aplicativos com o nome "MyNewAppPool", um identificador de segurança com o nome "MyNewAppPool" será criado no sistema de segurança do Windows. Desse ponto em diante, os recursos podem ser protegidos usando essa identidade. No entanto, a identidade não é uma conta de usuário real; ele não aparecerá como um usuário no Console de Gerenciamento de Usuário do Windows.

Você pode tentar isso selecionando um arquivo no Windows Explorer e adicionando a identidade "DefaultAppPool" à ACL (Lista de Controle de Acesso) do arquivo.

1. Abrir o Windows Explorer
2. Selecione um arquivo ou diretório.
3. Clique com o botão direito do mouse no arquivo e selecione **Propriedades**
4. Selecione a guia **Segurança**
5. Clique no botão **Editar** e, em seguida, no botão **Adicionar**
6. Clique no botão **Locais** e certifique-se de selecionar seu computador.
7. Insira **IIS AppPool\DefaultAppPool** na caixa de texto de entrada **Insira os nomes de objetos para selecionar:**.
8. Clique no botão **Verificar Nomes** e clique em **OK**.

   ![Captura de tela da caixa de diálogo Selecionar Usuários ou Grupos.](application-pool-identities/_static/image9.jpg)

Ao fazer isso, o arquivo ou diretório selecionado agora também permitirá o acesso à identidade **DefaultAppPool** .

Você pode fazer isso por meio da linha de comando usando a ferramenta ICACLS. O exemplo a seguir fornece acesso total à identidade DefaultAppPool.

```
ICACLS test.txt /grant "IIS AppPool\DefaultAppPool:F"
```

Para obter mais informações, consulte [ICACLS](https://learn.microsoft.com/pt-br/previous-versions/windows/it-pro/windows-server-2012-R2-and-2012/cc753525(v=ws.11)).

No Windows 7 e no Windows Server 2008 R2 e nas versões posteriores do Windows, o padrão é executar pools de aplicativos como a identidade do pool de aplicativos. Para fazer isso acontecer, um novo tipo de identidade com o nome "AppPoolIdentity" foi introduzido. Se o tipo de identidade "AppPoolIdentity" estiver selecionado (o padrão no Windows 7 e no Windows Server 2008 R2 e posterior), o IIS executará processos de trabalho como a identidade do pool de aplicativos. Com todos os outros tipos de identidade, o identificador de segurança será injetado apenas no token de acesso do processo. Se o identificador for injetado, o conteúdo ainda poderá ter listas de controle de acesso aplicadas para o ApplicationPoolIdentity, mas o proprietário do token provavelmente não é único. Para obter mais informações sobre esse conceito, consulte o [Novo no IIS 7 –](http://adopenstatic.com/cs/blogs/ken/archive/2008/01/29/15759.aspx "isolamento do AppPool") postagem no blog Isolamento do Pool de Aplicativos.

## Acessando a rede

Usar a conta do Serviço de Rede em um ambiente de domínio tem um grande benefício. Processo de trabalho em execução à medida que o Serviço de Rede acessa a rede como a conta do computador. As contas de máquina são geradas quando um computador é adicionado a um domínio. Eles têm esta aparência:

```
<domainname>\<machinename>$,
```

Por exemplo:

```
mydomain\machine1$
```

O interessante disso é que recursos de rede, como compartilhamentos de arquivos ou bancos de dados do SQL Server, podem ser configurados com ACL para permitir o acesso a essa conta de máquina.

### E quanto às Identidades de Pool de Aplicativos?

A boa notícia é que as identidades do pool de aplicativos também usam a conta do computador para acessar recursos de rede. Nenhuma alteração é necessária.

## Problemas de compatibilidade com identidades do pool de aplicativos

### Documentação de diretrizes

O maior problema de compatibilidade com as identidades do pool de aplicativos provavelmente são documentos de diretrizes anteriores que recomendam explicitamente que você aplique ACLs aos recursos para o Serviço de Rede, ou seja, a identidade padrão do DefaultAppPool no IIS 6.0 e no IIS 7.0. Os clientes terão que alterar seus scripts para ACL para "IIS AppPool\DefaultAppPool" (ou outro nome do pool de aplicativos) ao executar no IIS 7.5 ou posterior (consulte o exemplo acima para saber como fazer isso).

### Perfil de Usuário

O IIS não carrega o perfil de usuário do Windows, mas determinados aplicativos podem tirar proveito dele de qualquer maneira para armazenar dados temporários. O SQL Express é um exemplo de um aplicativo que faz isso. No entanto, um perfil de usuário precisa ser criado para armazenar dados temporários no diretório do perfil ou no hive do Registro. O perfil de usuário da conta do Serviço de Rede foi criado pelo sistema e sempre esteve disponível. No entanto, com a mudança para identidades exclusivas do Pool de Aplicativos, nenhum perfil de usuário é criado pelo sistema. Somente os pools de aplicativos padrão (DefaultAppPool e Classic .NET AppPool) têm perfis de usuário em disco. Nenhum perfil de usuário será criado se o Administrador criar um novo pool de aplicativos.

No entanto, se desejar, você pode configurar pools de aplicativos do IIS para carregar o perfil de usuário definindo o atributo LoadUserProfile como "true".

## Resumo

As identidades do pool de aplicativos são um novo recurso de isolamento avançado introduzido para Windows Server 2008, Windows Vista e versões posteriores do Windows. Isso tornará a execução de aplicativos IIS ainda mais segura e confiável.

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
