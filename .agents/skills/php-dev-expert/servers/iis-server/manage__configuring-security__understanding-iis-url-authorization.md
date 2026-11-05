# Noções básicas sobre a autorização de URL do IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/understanding-iis-url-authorization

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

# Noções básicas sobre a autorização de URL do IIS 7.0

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

A autorização era difícil em versões anteriores do IIS. Como o IIS funcionava apenas com identidades do Windows, você tinha que ir para o sistema de arquivos e definir Listas de Controle de Acesso em arquivos e diretórios. Isso foi trabalhoso porque a interface do usuário da ACL é complexa e as regras de autorização não são facilmente copiadas de um computador para outro.

O IIS 7.0 e superior usa a Autorização de URL. Ele permite que você coloque regras de autorização na URL real em vez do recurso do sistema de arquivos subjacente. Além disso, a configuração de Autorização de URL do IIS é armazenada em arquivos web.config– você pode distribuir regras de autorização com o conteúdo do aplicativo. O passo a passo a seguir apresenta o recurso de Autorização de URL do IIS no Windows Server® 2008 Beta 3 e no Windows Vista Service Pack 1.

## Pré-requisitos

Este passo a passo requer a instalação dos seguintes recursos do IIS acima sobre a instalação padrão:

- "ASP.NET" em "Serviços de Informações da Internet" – "World Wide Web Services" – "Recursos de desenvolvimento de aplicativos"
- "Autorização de URL" em "Serviços de Informações da Internet" –" World Wide Web Services" – "Segurança"

## Scenario

Vamos simular um cenário em que você tem um diretório seguro que somente Alice, Bob e o grupo Administradores podem acessar. Dentro desse diretório, temos um arquivo chamado bobsSecret.aspx que somente Bob deve acessar.

### Configuração do cenário

Para esse cenário, precisamos de três usuários: Alice, Bob e Fred. Também precisamos de um novo grupo chamado BobAndFriends no qual Alice e Bob são membros. Crie as três contas e o grupo por meio do Gerenciador de Usuários do Windows ou iniciando um prompt de comando com privilégios elevados e insira os comandos a seguir

```
net user Alice <password_of_your_choice> /add
net user Bob <password_of_your_choice> /add
net user Fred <password_of_your_choice> /add
net localgroup BobAndFriends /add
net localgroup BobAndFriends Alice /add
net localgroup BobAndFriends Bob /add
```

1. Abra o Explorer e vá para o `%systemdrive%\inetpub\wwwroot` diretório.
2. Crie um diretório chamado "seguro".
3. Altere para o diretório "seguro" e crie um novo arquivo chamado "default.aspx". Você pode fazer isso com o bloco de notas ou qualquer outro editor de texto.
4. Cole o seguinte código na página default.aspx:

   ```
   <%@Language="C#"%>
   <%
       string currentUser = Request.ServerVariables["LOGON_USER"];
       if (currentUser == "")
           currentUser = "anonymous";
       Response.Write("<b>Current User:</b> " + currentUser);
   %>
   ```
5. Crie outro arquivo chamado bobsSecret.aspx e cole o seguinte código nele:

   ```
   <%@Language="C#"%>
   <%
      string currentUser = Request.ServerVariables["LOGON_USER"];
       if (currentUser == "")
           currentUser = "anonymous";
       Response.Write("<b>Current User:</b> " + currentUser);
   Response.Write("
   <b>My secret:</b> I used Apache before I discovered IIS7.</b> ");
   %>
   ```
6. Agora veja se as duas páginas da Web funcionam solicitando `http://localhost/secure/` e `http://localhost/secure/bobsSecret.aspx`.

### Configurando a autenticação

A autenticação responde à pergunta "quem" deseja ter acesso. A autorização responde "se" o "quem" autenticado tem realmente acesso. Portanto, antes de experimentar a autorização de URL, devemos habilitar a autenticação porque, sem saber "quem" deseja ter acesso, não podemos responder ao "se".

1. Inicie INETMGR digitando INETMGR no menu "Iniciar Pesquisa".
2. Abra o nó do computador no modo de exibição da árvore esquerda, abra o nó "Site Padrão" e selecione o diretório "seguro".
3. Clique duas vezes em "Autenticação".
4. Desabilite a "Autenticação Anônima" e habilite "Autenticação Básica".
5. Agora solicite `http://localhost/secure` e `http://localhost/secure/bobsSecret.aspx` novamente. Você receberá uma solicitação de credenciais. Insira "Alice" como nome de usuário e sua senha. Você será autenticado como "Alice".

   Observação

   Se você usar o Internet Explorer, poderá acessar Ctrl+F5 para que o Internet Explorer atualize a versão armazenada em cache da página ASP.NET.

### Configurando a autorização de URL

Agora proteja as duas páginas para que apenas Alice e Bob tenham acesso:

1. Clique duas vezes no diretório Web "seguro" novamente e selecione "Regras de Autorização".
2. Remova a regra "Permitir todos os usuários".
3. Clique em "Adicionar Regra de Permissão" e selecione o botão de opção "Funções especificadas ou grupos de usuários:" e adicione "BobAndFriends" e clique no botão "OK".

   ![Captura de tela mostrando o painel Adicionar Regra de Autorização de Permissão com a seleção de funções especificadas ou grupos de usuários.](understanding-iis-url-authorization/_static/image1.jpg)
4. Feche todas as janelas do Internet Explorer porque o Internet Explorer armazena em cache as credenciais inseridas na etapa anterior.
5. Abra o Internet Explorer e tente acessar a página usando as credenciais de Fred. Você não obtém acesso.
6. Agora tente as credenciais do Bob ou as credenciais de Alice. Você obtém acesso.

### Configurando a Autorização de URL para uma única página da Web

Agora ainda temos o problema de que Alice ainda pode acessar BobsSecret.aspx. Veja como corrigi-lo:

1. Clique duas vezes no diretório Web "Proteger" novamente e selecione "Exibição de Conteúdo" na parte inferior da página.
2. Você verá uma lista de arquivos na pasta segura, ou seja, "default.aspx" e "bobsSecret.aspx".
3. Clique com o botão direito do mouse no bobsSecret.aspx e selecione "Modo de Exibição de Recursos"

   ![Captura de tela mostrando o conteúdo do diretório seguro na Web, incluindo default.aspx e bobsSecret.aspx.](understanding-iis-url-authorization/_static/image3.jpg)
4. Agora você está fazendo apenas alterações para a página bobsSecret.aspx, conforme indicado na barra de status.
5. Selecione "Regras de Autorização" novamente. Você vê as configurações herdadas, ou seja, o grupo BobsAndFriends tem permissão para acessar bobsSecret.aspx.
6. Remova a regra "BobsAndFriends".
7. Agora clique em "Adicionar Regra de Permissão..."
8. Clique no botão de opção "Usuários especificados:", insira "Bob" e clique em "OK".

   ![Captura de tela mostrando o painel Adicionar Regra de Autorização de Permissão com usuários especificados selecionados.](understanding-iis-url-authorization/_static/image5.jpg)
9. Feche todas as janelas do Internet Explorer e solicite `http://localhost/secure/bobsSecret.aspx`.
10. Somente inserindo as credenciais de Bob você terá acesso.

### Tópicos avançados de autorização de URL

Os parágrafos a seguir mostram alguns tópicos avançados de Autorização de URL.

### Configuração

Você não precisa usar a Interface do Usuário para especificar as configurações de Autorização de URL. Você pode especificar regras de autorização de URL diretamente em seu arquivo de web.config. A seção de configuração de autorização< do IIS >é delegada por padrão– você pode distribuir regras de autorização junto com o conteúdo da Web. Abaixo, veja a aparência do `%systemdrive%\inetpub\wwwroot\secure\web.config` arquivo após este passo a passo:

```
<?xml version="1.0" encoding="UTF-8"?> 
<configuration> 
    <system.webServer> 
        <security> 
            <authorization> 
                <remove users="*" roles="" verbs="" /> 
        <add accessType="Allow" roles="BobAndFriends" />             

            </authorization> 
        </security> 
    </system.webServer> 
    <location path="bobsSecret.aspx"> 
        <system.webServer> 
            <security> 
                <authorization> 
                    <remove users="" roles="BobAndFriends" verbs="" /> 
                    <add accessType="Allow" users="Bob" />                  

                </authorization> 
            </security> 
        </system.webServer> 
    </location> 
</configuration>
```

## Diferenças entre a autorização de URL do ASP.NET e a autorização de URL do IIS

Há pequenas, mas importantes diferenças entre ASP.NET UrlAuthorization e Autorização de URL do IIS. Ambos os módulos podem ser instalados por meio da Instalação do IIS. A Autorização de URL do IIS é instalada quando você instala o recurso "Autorização de URL" na Interface do Usuário de Instalação do IIS:  
![Captura de tela das funcionalidades da janela mostrando a caixa de autorização de URL marcada.](understanding-iis-url-authorization/_static/image7.jpg)

ASP.NET Autorização de URL é instalada quando você instala ASP.NET sobre o IIS. Se você for um especialista em ASP.NET, lembre-se de que ASP.NET UrlAuthorization é implementado no módulo System.Web.Security.UrlAuthorizationModule. A seção de configuração correspondente é system.web/authorization. Aqui está a entrada de configuração.

```
<add name="UrlAuthorization" type="System.Web.Security.UrlAuthorizationModule" preCondition="managedHandler" />
```

O módulo de Autorização de URL do IIS é implementado no módulo global urlauthz.dll.

```
<add name="UrlAuthorizationModule" image="%windir%\System32\inetsrv\urlauthz.dll" />
```

É importante ter em mente que a pré-condição managedHandler está no módulo ASP.NET UrlAuthorization. A pré-condição informa que o módulo de autorização de URL é invocado somente quando o código que manipula a solicitação é mapeado para o código gerenciado, normalmente uma página .aspx ou .asmx. A Autorização de URL do IIS, por outro lado, aplica-se a todo o conteúdo. Você pode remover a pré-condição managedHandler do módulo de Autorização de URL do ASP.NET. Ele está lá para evitar uma penalidade de desempenho que você precisa pagar quando cada solicitação (como uma solicitação para .html ou .jpg páginas) teria que passar pelo código gerenciado.

### Avaliação de regras

Também há diferenças na ordem em que o IIS e os dois módulos de autorização de URL avaliam as regras de autorização. ASP.NET autorização de URL é focada no desenvolvedor e os desenvolvedores têm controle total sobre quais regras eles definem. A Autorização de URL do IIS mantém o Administrador em mente e tenta garantir que os desenvolvedores não possam substituir as regras que um Administrador define.

#### Um exemplo

Suponha que o administrador queira garantir que todos os usuários de um determinado site devem ser autenticados. Para fazer isso, defina a seguinte configuração na raiz do site:

```
<authorization lockElements="clear"> 
    <add accessType="Deny" users="?" /> 
</authorization>
```

Essa configuração nega acesso a usuários anônimos (? = usuários anônimos, \* = todos os usuários). Com lockElements="clear", você garante que ninguém em um nível inferior possa limpar a herança dessa configuração. Sua configuração seria herdada para todos os aplicativos e diretórios virtuais deste site. Trata-se de uma violação de bloqueio de recurso quando você tenta usar a instrução <clear/> em um nível hierárquico inferior.

Para obter mais informações sobre o bloqueio de configuração, consulte [Como bloquear ASP.NET configurações de configuração](https://learn.microsoft.com/pt-br/previous-versions/aspnet/ms178693(v=vs.100)).

Você também pode bloquear o elemento clear no ASP.NET Url Authorization. O problema é que ASP.NET Autorização de URL avalia as regras de autorização de baixo para cima, ou seja, primeiro avalia as regras no arquivo web.config atual antes de avaliar as regras pai. Assim que uma correspondência for encontrada, será concedido ou negado o acesso. No exemplo acima, você ainda pode conceder acesso a usuários anônimos especificando <adicionar usuários="?" /> como uma regra de autorização no arquivo de web.config seguro. Como ele é avaliado primeiro, os usuários anônimos teriam acesso.

O módulo de Autorização de URL do IIS avalia as regras de negação primeiro. Como você nega o acesso a usuários anônimos, não é possível simplesmente substituir essa regra. A outra grande diferença é que as regras pai são avaliadas primeiro. Isso significa que se você negar o acesso para Fred em um nível mais alto, você não poderá permitir o acesso a Fred em um nível inferior.

### Tabela de diferenças

| Diferença | ASP.NET Comportamento de Autorização de URL | Comportamento de autorização de URL do IIS |
| --- | --- | --- |
| **Avaliação de regra** | Ordem: a) Nível inferior primeiro até chegar ao pai b) A ordem de aparência na coleção de regras | Ordem: a) As regras de negação são avaliadas primeiro a partir do pai b) As regras de permissão são avaliadas a partir do pai. c) Ordem de aparência na coleção de regras |
| **Interface do Usuário do IIS** | Nenhuma interface do usuário do IIS | Interface do usuário "Regras de Autorização" |
| **Seção de configuração** | system.web/authorization | system.webServer/security/authorization |
| **Módulo** | System.Web.Security.UrlAuthorization | `%windir%\system32\inetsrv\urlauthz.dll` |
| **Conteúdo** | Aplica-se somente ao conteúdo mapeado para um manipulador gerenciado (pode ser desativado por meio da pré-condição managedHandler) | Aplica-se a todo o conteúdo |

## Usando contas e grupos de domínio

Você deve especificar contas de domínio e grupos usando o seguinte:

```
<domainname or username>\<user>
```

Este exemplo usa o nome de máquina, supondo que nossas contas foram criadas no computador iis7test:

```
<?xml version="1.0" encoding="UTF-8"?> 
<configuration> 
    <system.webServer> 
        <security> 
            <authorization> 
                <remove users="*" roles="" verbs="" /> 
                <add accessType="Allow" roles="iis7test\BobAndFriends" />             

            </authorization> 
        </security> 
    </system.webServer> 
    <location path="bobsSecret.aspx"> 
        <system.webServer> 
            <security> 
                <authorization> 
                    <remove users="" roles="iis7test\BobAndFriends" verbs="" /> 
                    <add accessType="Allow" users="iis7test\Bob" />                  

                </authorization> 
            </security> 
        </system.webServer> 
    </location> 
</configuration>
```

## Usando identidades que não são do Windows

A Autorização de URL não é apenas para identidades do Windows. Também funciona bem para não Windows. Use-o junto com ASP.NET Membership e Roles e para identidades personalizadas, caso você escreva seu próprio módulo de autenticação.

## Resumo

A Autorização de URL é uma nova maneira avançada de especificar regras de autorização para aplicativos Web. Agora você pode especificar regras em XML sem usar as Listas de Controle de Acesso do Windows por mais tempo.

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
