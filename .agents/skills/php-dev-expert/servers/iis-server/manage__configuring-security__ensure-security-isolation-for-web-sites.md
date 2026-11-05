# Garantir o isolamento de segurança para sites | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/ensure-security-isolation-for-web-sites

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

# Garantir o isolamento de segurança para websites

Comentários

por Tali Smith

## Introdução

A recomendação para isolar sites em um ambiente de hospedagem compartilhada é consistente com todas as recomendações gerais de isolamento de segurança para os Serviços de Informações da Internet 7 (IIS 7) e superiores. Em particular, é recomendável:

- Use um pool de aplicativos por site.
- Use uma conta de usuário dedicada como uma identidade para o pool de aplicativos.
- Configure a identidade do usuário anônimo para usar a identidade do pool de aplicativos.
- Verifique se a representação de FastCGI está habilitada no arquivo Php.ini.

Uma exibição arquitetônica dos pools de aplicativos aparece na figura a seguir.

![Diagrama da relação entre os IDs do Pool de Aplicativos no Modo de Usuário e o HTTP.sys no Modo Kernel.](ensure-security-isolation-for-web-sites/_static/image1.jpg)

*Figura 1: Pools de aplicativos*

## Criar pools de aplicativos

Você pode criar pools de aplicativos da interface do usuário ou da linha de comando.

1. No **Gerenciador do IIS**, navegue até o painel **Conexões** .
2. Escolha a opção **Pools de Aplicativos** e, em seguida, escolha **Adicionar Pool de Aplicativos** para abrir a caixa de diálogo Adicionar Pool de Aplicativos.
3. Insira um nome exclusivo para o pool de aplicativos.
4. Escolha a versão, se houver, do Microsoft® .NET Framework para o pool de aplicativos a ser usado e escolha o modo de pipeline.

Depois que um pool é criado, você pode alterar suas configurações sempre que necessário.

1. No painel **Conexões** , escolha **Pools de Aplicativos**.
2. No painel **Trabalho** , escolha o pool de aplicativos que você deseja configurar.
3. No painel **Ações** , escolha **Configurações Básicas**. Observe que, com exceção do título da caixa de diálogo, a caixa de diálogo Configurações Básicas e as caixas de diálogo Adicionar Pool de Aplicativos parecem idênticas.

Você também pode usar a linha de comando. Use:

```
appcmd add apppool /name:string
```

Observe que "string" é o nome do pool de aplicativos.

A caixa de diálogo Editar Pool de Aplicativos permite que você configure como o IIS 7 e superior manipula a reciclagem do processo de trabalho para o pool de aplicativos.

![Captura de tela da caixa de diálogo Editar Pool de Aplicativos.](ensure-security-isolation-for-web-sites/_static/image3.jpg)

*Figura 2: Editar Pool de Aplicativos*

## Identidades do pool de aplicativos

As Identidades do Pool de Aplicativos são novos recursos de segurança que permitem executar pools de aplicativos em uma conta exclusiva sem precisar criar e gerenciar contas locais ou domínio. O nome da conta do pool de aplicativos corresponde ao nome do pool de aplicativos. A figura a seguir mostra um processo de trabalho do IIS (w3wp.exe) em execução sob a identidade do DefaultAppPool.

![Captura de tela da tela do Gerenciador de Tarefas do Windows com foco no arquivo w 3 w p dot e x e no campo Nome da Imagem e na identidade DefaultAppPool no campo Nome de Usuário.](ensure-security-isolation-for-web-sites/_static/image1.gif)

*Figura 3: Contas de identidade do pool de aplicativos*

## Contas de identidade do pool de aplicativos

Os processos de trabalho no IIS 6 e no IIS 7 e posteriores são executados como NETWORKSERVICE por padrão. NETWORKSERVICE é uma identidade interna do Windows®. NETWORKSERVICE não requer uma senha e tem apenas privilégios de usuário (tem relativamente baixo privilégio). A execução como uma conta de baixo privilégio é uma boa prática de segurança porque impede que usuários mal-intencionados usem bugs de software para assumir o sistema.

Ao longo do tempo, no entanto, cada vez mais serviços do sistema Windows foram executados como NETWORKSERVICE, e esses serviços podem adulterar outros serviços em execução sob a mesma identidade. Como os processos de trabalho do IIS executam código de terceiros por padrão (PHP, ASP clássico e Microsoft® ASP.NET), tornou-se necessário isolar processos de trabalho do IIS de outros serviços do sistema Windows e executar processos de trabalho do IIS em identidades exclusivas. O sistema operacional Windows fornece um recurso chamado [contas virtuais](https://technet.microsoft.com/library/dd548356(WS.10).aspx) que permite ao IIS criar identidades exclusivas para cada um de seus pools de aplicativos.

Sempre que um novo pool de aplicativos é criado, o processo de gerenciamento do IIS cria um SID (identificador de segurança) que representa o nome do próprio pool de aplicativos. Por exemplo, se você criar um pool de aplicativos com o nome "MyNewAppPool", um SID com o nome "MyNewAppPool" será criado no sistema de segurança do Windows. Os recursos podem ser protegidos usando essa identidade. No entanto, observe que a identidade não é uma conta de usuário real; ele não aparecerá como um usuário no Console de Gerenciamento de Usuário do Windows.

Tente selecionar um arquivo no Windows Explorer® e adicionar a identidade "DefaultAppPool" à ACL (Lista de Controle de Acesso):

1. Inicie o **Windows Explorer**.
2. Selecione um *arquivo* ou *diretório*.
3. Clique com o botão direito do *mouse no nome do arquivo* e clique em **Propriedades**.
4. Clique na guia **Segurança** .
5. Clique em **Editar** e clique em **Adicionar**.
6. Clique **em Locais** e selecione *seu computador*.
7. Na caixa de texto **Inserir os nomes de objeto para selecionar**, digite **iis apppool\defaultapppool**
8. Clique em **Verificar Nomes**e em **OK**.

O arquivo ou diretório selecionado agora também permite o acesso à identidade DefaultAppPool.

![Captura de tela da tela Selecionar Usuários ou Grupos.](ensure-security-isolation-for-web-sites/_static/image5.jpg)

*Figura 4: Selecionar Usuários ou Grupos*

Você também pode usar a linha de comando com a ferramenta Icacls.exe. O seguinte fornece acesso completo à identidade DefaultAppPool:

```
ICACLS test.txt /grant "IIS AppPool\DefaultAppPool":F
```

Nos sistemas operacionais Windows® 7 e Windows Server® 2008 R2, o padrão é executar pools de aplicativos como esse identificador de segurança (como a Identidade do Pool de Aplicativos). Um novo tipo de identidade com o nome "AppPoolIdentity" está disponível. Se o tipo de identidade "AppPoolIdentity" estiver selecionado (esse é o padrão no Windows 7 e no Windows Server 2008 R2), o IIS executará processos de trabalho como a identidade do Pool de Aplicativos. Com todos os outros tipos de identidade, o identificador de segurança é injetado apenas no token de acesso do processo. Se o identificador for injetado, o conteúdo ainda poderá ser configurado para listas de controle de acesso (ACL) da identidade do AppPool, mas é provável que o proprietário do token não seja exclusivo. Consulte a seção [Isolar Pools de Aplicativos](#Isolate_Application_Pools) a seguir.

### Acessando a rede

Usar a conta NETWORKSERVICE em um ambiente de domínio tem um grande benefício. O processo de trabalho em execução como NETWORKSERVICE pode acessar a rede como se fosse a conta da máquina. As contas de máquina são geradas quando uma máquina é unida a um domínio.

```
<domainname>\<machinename>$,
```

Por exemplo:

```
mydomain\machine1$
```

Recursos de rede, como compartilhamentos de arquivos ou bancos de dados do Microsoft® SQL Server®, podem ser ACLed para permitir o acesso a essa conta de computador. As identidades do Pool de Aplicativos também usam a conta do computador para acessar recursos de rede. Nenhuma alteração é necessária.

### Problemas de compatibilidade com identidades do pool de aplicativos

Um desafio com as Identidades do Pool de Aplicativos é que os documentos de diretrizes recomendam explicitamente os recursos de ACL para NETWORKSERVICE (a identidade padrão do DefaultAppPool no IIS 6.0 e 7.0). Os usuários devem alterar seus scripts para ACL para "IIS AppPool\DefaultAppPool" ao executar no IIS 7.5 e superior.

O IIS não carrega o perfil de usuário do Windows, mas determinados aplicativos (como o Microsoft® SQL Server® 2008 Express) podem usá-lo de qualquer maneira (por exemplo, para armazenar dados temporários). O perfil de usuário deve ser criado para armazenar dados temporários no diretório do perfil ou no hive do Registro. O perfil de usuário da conta NETWORKSERVICE foi criado pelo sistema e sempre esteve disponível. No entanto, um perfil de usuário não é criado pelo sistema ao alternar para identidades exclusivas do Pool de Aplicativos. Somente os pools de aplicativos padrão (DefaultAppPool e Classic .NET AppPool) têm perfis de usuário em disco. Nenhum perfil de usuário será criado se o administrador criar um novo pool de aplicativos.

Observe que os pools de aplicativos do IIS podem ser configurados para carregar o perfil do usuário, no entanto, definindo a configuração "LoadUserProfile" como "true".

## Isolar grupos de aplicativos

A separação de aplicativos em vários pools de aplicativos não só pode melhorar o desempenho, mas também melhora a confiabilidade do servidor e do site. No entanto, em versões anteriores do IIS, às vezes, tem sido difícil isolar pools de aplicativos Web uns dos outros. Se vários pools de aplicativos estiverem configurados para serem executados com a mesma identidade, o código em execução dentro de um pool de aplicativos poderá usar FSOs (objetos do sistema de arquivos) para acessar recursos pertencentes a outro.

No IIS 7, cada pool de aplicativos tem um arquivo de configuração que é gerado quando o pool de aplicativos é iniciado. Esses arquivos são armazenados por padrão na `%systemdrive%\inetpub\temp\AppPools` pasta.

Cada pool de aplicativos também tem um SID (Identificador de Segurança) que é adicionado ao processo de w3wp.exe relevante. O arquivo de configuração do pool de aplicativos tem um controle de acesso configurado (ACL) para permitir apenas o acesso a esse SID.

Você pode usar a ferramenta Icacls.exe para identificar o SID aplicado a qualquer arquivo de configuração do pool de aplicativos com:

```
icacls.exe %systemdrive%\inetpub\temp\appPools\appPool.config /save output.txt
```

Um usuário pode usar o SID do pool de aplicativos para definir uma ACL para seu conteúdo e proteger seu site. Isso é útil para hosters da Web que precisam aceitar conteúdo de várias fontes externas.

1. Configure cada site (ou aplicativo Web) para ser executado em seu próprio pool de aplicativos Web.
2. Configure a autenticação anônima para usar a identidade do pool de aplicativos, em vez da conta IUSR (Relatório de Usabilidade do Setor) editando as propriedades de Autenticação Anônima.
3. Remova as permissões NTFS para o grupo IUSRS e a conta de IUSR dos arquivos e pastas do site.
4. Use a ferramenta Icacls.exe para conceder ao SID do pool de aplicativos acesso de "leitura" (e, opcionalmente, "execução" e "gravação") aos arquivos e pastas do site. Você pode usar IIS APPPOOL\ApplicationPoolName como o usuário para conceder permissões de leitura.

Depois de configurar as permissões do NTFS, somente o SID que foi injetado em um processo w3wp.exe específico poderá ler o conteúdo do site. Todos os códigos em execução em outros processos de w3wp.exe (mesmo que sejam executados com a mesma identidade) não poderão acessar o conteúdo deste site.

Observação

*Este artigo é baseado em material de [Identidades do Pool de Aplicativos](manage__configuring-security__application-pool-identities.md) escrito pela Equipe do IIS e publicado em 27 de maio de 2009.*

## Links para obter mais informações

- [Novidades no IIS 7 – Isolamento do Pool de Aplicativos](http://www.adopenstatic.com/cs/blogs/ken/archive/2008/01/29/15759.aspx)
- [Criar um pool de aplicativos (IIS 7)](https://technet.microsoft.com/library/cc731784.aspx)
- [Gerenciando pools de aplicativos no IIS 7](https://technet.microsoft.com/library/cc753449(WS.10).aspx)

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
