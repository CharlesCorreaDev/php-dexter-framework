# Noções básicas sobre contas de usuário e grupo do Built-In no IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-for-security/understanding-built-in-user-and-group-accounts-in-iis

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

# Noções básicas sobre contas de usuário e grupo do Built-In no IIS 7

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

Em versões anteriores do IIS, uma conta local chamada IUSR\_MachineName é criada durante a instalação. O IIS usava a conta IUSR\_MachineName por padrão sempre que a autenticação anônima estava habilitada. Isso foi usado pelos serviços FTP e HTTP.

Havia também um grupo chamado IIS\_WPG, que era usado como um contêiner para todas as identidades do pool de aplicativos. Durante a instalação do IIS, todos os recursos apropriados no sistema receberam os direitos de usuário corretos para o grupo de IIS\_WPG para que um administrador só precisasse adicionar sua identidade a esse grupo quando criasse uma nova conta do pool de aplicativos.

Esse modelo funcionou bem, mas teve suas desvantagens: a conta IUSR\_MachineName e o grupo IIS\_WPG eram locais para o sistema no qual foram criados. Cada conta e grupo no Windows recebe um número exclusivo chamado SID (identificador de segurança) que a distingue de outras contas. Quando uma ACL é criada, apenas o SID é usado. Como parte do design em versões anteriores do IIS, IUSR\_MachineName foi incluído no arquivo metabase.xml para que, se você tentasse copiar o metabase.xml de um computador para outro, ele não funcionaria. A conta no outro computador teria um nome diferente.

Além disso, não era possível 'xcopy /o' ACLs de um computador para outro, pois os SIDs variavam de computador para computador. Uma solução alternativa era usar contas de domínio, mas isso exigia a adição de um diretório ativo à infraestrutura. O grupo IIS\_WPG teve problemas semelhantes com os direitos dos usuários. Se você definir ACLs no sistema de arquivos de um computador para IIS\_WPG e tentar usar o comando 'xcopy /o' para transferi-las para outro computador, isso falhará. Essa experiência foi aprimorada no IIS 7 e superior usando uma conta interna e um grupo.

Uma conta interna e um grupo são garantidos pelo sistema operacional para sempre ter um SID exclusivo. O IIS 7 e posteriores levaram isso adiante e garantiram que os nomes reais usados pela nova conta e pelo grupo nunca serão localizados. Por exemplo, independentemente do idioma do Windows instalado, o nome da conta do IIS sempre será IUSR e o nome do grupo será IIS\_IUSRS.

Em resumo, o IIS 7 e acima oferecem o seguinte:

- A conta interna do IUSR substitui a conta IUSR\_MachineName.
- O IIS\_IUSRS grupo interno substitui o grupo IIS\_WPG.

A conta IUSR não precisa mais de uma senha porque é uma conta interna. Logicamente, você pode considerar isso como sendo o mesmo que as contas NETWORKSERVICE ou LOCALSERVICE. A nova conta IUSR e o grupo IIS\_IUSRS são discutidos com mais profundidade nas seções abaixo.

## Noções básicas sobre a nova conta do IUSR

A conta IUSR substitui a conta de IUSR\_MachineName no IIS 7 e superior. A conta IUSR\_MachineName ainda será criada e usada se você instalar o servidor compatível com FTP 6 incluído no Windows Server 2008. Se você não instalar o servidor FTP incluído no Windows Server 2008, essa conta não será criada.

Essa conta interna não precisa de uma senha e será a identidade padrão usada quando a autenticação anônima estiver habilitada. Se você procurar no arquivo applicationHost.config, verá a seguinte definição:

```
<anonymousAuthentication enabled="true" userName="IUSR" defaultLogonDomain="" />
```

Isso instrui o IIS a usar a nova conta interna para todas as solicitações de autenticação anônima. As maiores vantagens são que você pode:

- Defina permissões do sistema de arquivos para a conta IUSR usando o Windows Explorer ou qualquer uma das muitas ferramentas de linha de comando.
- Não é mais necessário se preocupar com senhas expirando para essa conta.
- Use xcopy /o para copiar arquivos junto com suas informações de propriedade e ACL para computadores diferentes, sem interrupções.

Observação

A conta IUSR é semelhante a LOCALSERVICE da maneira como atua anonimamente na rede. As contas NETWORKSERVICE e LOCALSYSTEM podem atuar como a identidade do computador, mas a conta do IUSR não pode porque exigiria uma elevação dos direitos do usuário. Se você precisar que a conta anônima tenha direitos na rede, crie uma nova conta de usuário e defina o nome de usuário e a senha manualmente, como fez no passado para autenticação anônima.

**Para conceder direitos de conta anônimos na rede usando o Gerenciador do IIS:**

1. Clique **em Iniciar**, digite **INetMgr.exe**e clique **em Enter**. Se solicitado, clique **em Continuar** para elevar suas permissões.
2. Na seção **Conexões** , clique no **+** botão ao lado do nome do computador.
3. No Gerenciador do IIS, clique duas vezes no site que você deseja administrar.
4. No Modo de Exibição de Recursos, clique duas vezes em **Autenticação**.
5. Selecione **Autenticação Anônima** e clique em **Editar** no painel **Ações** .
6. Na caixa de diálogo **Editar Credenciais de Autenticação Anônima** , clique na opção **De usuário específico** e clique em **Definir**.
7. Na caixa de diálogo **Definir Credenciais** , insira o nome de usuário e a senha desejados e clique em **OK**.

## Noções básicas sobre o novo grupo de IIS\_IUSRS

O grupo IIS\_IUSRS substitui o grupo IIS\_WPG. Esse grupo interno tem acesso a todos os recursos necessários de arquivo e sistema para que uma conta, quando adicionada a esse grupo, possa agir perfeitamente como uma identidade do pool de aplicativos.

Assim como acontece com a conta interna, esse grupo interno resolve vários obstáculos de implantação de xcopy. Se você definir permissões em seus arquivos para o grupo de IIS\_WPG (que estava disponível em sistemas IIS 6.0) e tentar copiar esses arquivos para outro computador Windows, o SID do grupo seria diferente entre os computadores e as configurações do seu site seriam interrompidas.

Como o SID do grupo no IIS 7 e acima é o mesmo em todos os sistemas que executam o Windows Server 2008, você pode usar 'xcopy /o' para preservar as informações de propriedade e da ACL à medida que você move arquivos do computador para o computador. Isso facilita as implantações de xcopy.

O IIS 7 e posteriores também torna mais fácil o processo de configuração da identidade do pool de aplicativos e realizar todas as alterações necessárias. Quando o IIS inicia um processo de trabalho, ele precisa criar um token que o processo usará. Quando esse token é criado, o IIS adiciona automaticamente a associação IIS\_IUSRS ao token de processos de trabalho em runtime. As contas executadas como 'identidades do pool de aplicativos' não precisam mais ser uma parte explícita do grupo IIS\_IUSRS. Essa alteração ajuda você a configurar seus sistemas com menos obstáculos e torna sua experiência geral mais favorável.

Se você quiser desabilitar esse recurso e adicionar contas manualmente ao grupo IIS\_IUSRS, desabilite esse novo recurso definindo o valor **manualGroupMembership** como '**true**'. O exemplo a seguir mostra como isso pode ser feito para o **defaultAppPool**:

```
<applicationPools>
    <add name="DefaultAppPool">
        <processModel manualGroupMembership="true" />
    </add>
</applicationPools >
```

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
