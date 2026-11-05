# Gerenciando aplicativos e pools de aplicativos no IIS 7.0 com WMI | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/scripting/managing-applications-and-application-pools-on-iis-with-wmi

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

# Gerenciando aplicativos e pools de aplicativos no IIS 7.0 com WMI

Comentários

por Tim Ammann

## Introdução

O gerenciamento de aplicativos e pools de aplicativos no IIS 7.0 e posteriores pode ser executado com relativa facilidade usando scripts WMI. Este artigo descreve como realizar as seguintes tarefas de nível de entrada com apenas algumas linhas de VBScript:

- Criar e enumerar aplicativos
- Criar, configurar e excluir pools de aplicativos
- Iniciar, parar e reciclar pools de aplicativos
- Exibir o estado dos pools de aplicativos
- Listar todos os pools de aplicativos no servidor

## Primeiras Etapas

1. Verifique se o IIS e o script estão habilitados.

   - Se você estiver usando o Windows Vista, abra o Painel de Controle, Programas e Recursos, e depois Recursos do Windows. Em "Ferramentas de Gerenciamento da Web", selecione "Scripts e Ferramentas de Gerenciamento do IIS" para habilitar scripts.
   - Se você estiver usando o Windows Server® 2008, abra o Gerenciador de Servidores. Use o Assistente para Adicionar Funções para instalar o servidor Web do IIS 7.0. Na página Selecionar Serviços de Função, na seção Ferramentas de Gerenciamento, selecione "Scripts e Ferramentas de Gerenciamento do IIS".
2. Execute comandos como administrador. Para abrir uma janela do Prompt de Comando com privilégios elevados, clique em Iniciar, aponte para Todos os Programas, clique em Acessórios, clique com o botão direito do mouse no Prompt de Comando e clique em Executar como administrador. Se você abrir um shell de comando como administrador, todos os aplicativos executados nesse shell de comando serão executados como administrador.
3. Salve os arquivos de script no formato de texto com uma extensão .vbs. Eles podem ser executados no prompt de comando usando a sintaxe "cscript.exe *<scriptname.vbs>*".
4. Antes de começar, faça um backup do arquivo\inetsrv\config\applicationhost.config System32 com a ferramenta AppCmd. A cópia de backup permitirá que você restaure o IIS para seu estado original apenas copiando a versão original na versão posterior. Para fazer um backup, siga estas etapas:

> a. Abra uma janela de prompt de comando elevado.
>
> b. Digite cd `%Windir%\system32\inetsrv\`
>
> c. Digite appcmd add *backupName* para fazer backup do arquivo ApplicationHost.config, em que *backupName* é o nome especificado para o backup. Um diretório com o nome de backup especificado será criado no `%Windir%\system32\inetsrv\backup` diretório. Se você não especificar um nome, o appcmd gerará um nome de diretório automaticamente usando a data e a hora atuais.

## Criando e enumerando aplicativos

Os aplicativos podem ser facilmente criados e enumerados usando scripts WMI no IIS.

### Criando um aplicativo

Para criar um aplicativo, o IIS usa o novo método Create do aplicativo. Esse é um método estático que usa dois parâmetros de cadeia de caracteres necessários: ApplicationPath e SiteName. O ApplicationPath define o caminho virtual para o novo aplicativo e o SiteName contém o nome do site no qual o aplicativo será criado. Um terceiro parâmetro, PhysicalPath, é opcional e especifica o caminho para o diretório do aplicativo em disco.

ApplicationPath e SiteName são propriedades principais e não podem ser alteradas depois de criar o aplicativo (observe que o ApplicationPath é chamado de "Caminho Virtual" na interface do usuário).

O script a seguir cria um novo aplicativo chamado "NewApp" no site padrão. Observe como o método Create é chamado na definição da classe Application. Copie o script no bloco de notas e salve-o com o nome de arquivo AppCreate.vbs.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
' Define the Path, SiteName, and PhysicalPath for the new application.
strApplicationPath = "/NewApp"
strSiteName = "Default Web Site"
strPhysicalPath = "D:\inetpub\NewApp"
  
' Create the new application
oWebAdmin.Get("Application").Create _
      strApplicationPath, strSiteName, strPhysicalPath
```

Para executar o script, abra uma janela de prompt de comando com privilégios elevados e navegue até o diretório no qual você salvou o arquivo AppCreate.vbs. Execute o script digitando o seguinte na janela do prompt de comando que você acabou de abrir:

```
Cscript.exe AppCreate.vbs
```

Lembre-se de que ApplicationPath e SiteName devem ser especificados para que Criar seja concluído com êxito. Você também deseja especificar a propriedade PhysicalPath. Se você especificar um diretório inexistente para o parâmetro PhysicalPath, o diretório *não* será criado para você. O script será encerrado silenciosamente e um novo nó para o aplicativo aparecerá de fato no Gerenciador do IIS. No entanto, ao tentar abrir o nó do novo aplicativo, você receberá o erro "Não foi possível encontrar uma parte do caminho *<caminho>*".

### Enumerando aplicativos

Depois de criar seu aplicativo, você pode exibir facilmente suas propriedades por meio do script WMI.

O VBScript a seguir mostra o nome do site, o caminho do aplicativo, o pool de aplicativos e os protocolos habilitados para cada aplicativo em um servidor. O script usa o método InstancesOf do WMI para recuperar todos os aplicativos e, em seguida, itera por meio deles para exibir suas propriedades.

Copie o código no bloco de notas e salve-o com o nome de arquivo AppEnumerate.vbs.

```
' Connect to the WMI WebAdministration namespace.
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")  
' Use InstancesOf to retrieve the applications.
Set oApps = oWebAdmin.InstancesOf("Application")
  ' Iterate through the applications.
For Each oApp In oApps
    WScript.Echo "  Web site/Application: " & oApp.SiteName & oApp.Path
    WScript.Echo "      Application Pool: " & oApp.ApplicationPool
    WScript.Echo "   Enabled protocol(s): " & oApp.EnabledProtocols
    WScript.Echo
Next
```

Para executar o script, abra uma janela de prompt de comando com privilégios elevados e navegue até o diretório no qual você salvou o arquivo AppEnumerate.vbs. Execute o script digitando o seguinte na janela do prompt de comando que você acabou de abrir:

```
Cscript.exe AppEnumerate.vbs
```

Em seguida, você verá como criar, configurar e gerenciar os pools de aplicativos que hospedam seus aplicativos Web.

## Criando e configurando pools de aplicativos

Esta seção apresenta algumas tarefas básicas, mas importantes, que você pode realizar com pools de aplicativos usando scripts WMI. Os pools de aplicativos conectam um ou mais aplicativos a um ou mais processos de trabalho. Os pools de aplicativos ajudam a separar aplicativos uns dos outros e esse isolamento aumenta sua segurança e confiabilidade.

### Criando um pool de aplicativos

Para criar um pool de aplicativos, o IIS usa o método Create da classe ApplicationPool. Esse método estático tem dois parâmetros: o primeiro, AppPoolName, é uma cadeia de caracteres necessária que especifica o nome do novo pool de aplicativos; o segundo, AutoStart, é um booliano opcional.

O AutoStart, que é verdadeiro por padrão, especifica que o pool de aplicativos que você criar começará depois que ele for criado e será iniciado automaticamente depois disso quando o próprio IIS for iniciado. Se você definir o AutoStart como false, deverá iniciar o pool de aplicativos manualmente. No entanto, desabilitar a inicialização automática pode ser útil quando você deseja fazer alterações de configuração ou conteúdo em um aplicativo no pool de aplicativos antes do início do pool de aplicativos.

O exemplo a seguir cria dois pools de aplicativos, "NewAppPool" e "OneMoreAppPool" com apenas três linhas de código. Observe como o método Create é chamado , não em uma instância do ApplicationPool, mas em sua definição de classe.

Copie o script no bloco de notas e salve-o com o nome de arquivo AppPoolCreate.vbs.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
oWebAdmin.Get("ApplicationPool").Create("NewAppPool")
oWebAdmin.Get("ApplicationPool").Create("OneMoreAppPool")
```

Para executar o script, abra uma janela de prompt de comando com privilégios elevados e navegue até o diretório no qual você salvou o arquivo AppPoolCreate.vbs. Execute o script digitando o seguinte na janela do prompt de comando que você acabou de abrir:

```
Cscript.exe AppPoolCreate.vbs
```

### Criando pools de aplicativos interativamente

Com apenas mais algumas linhas de código, você pode criar um script conveniente que gerará uma caixa de entrada para que você possa criar pools de aplicativos interativamente. Como antes, copie e cole o script no bloco de notas, salve-o como um arquivo com uma extensão .vbs e execute o arquivo usando cscript.exe.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
strNewAppPoolName = InputBox("Enter the name for the new application pool.")
 If strNewAppPoolName <> "" Then
oWebAdmin.Get("ApplicationPool").Create(strNewAppPoolName)
End If
```

### Atribuindo um aplicativo a um pool de aplicativos

Agora que você criou um pool de aplicativos, atribua um aplicativo a ele. É fácil alterar o pool de aplicativos de um aplicativo usando o script WMI, mas há duas coisas importantes a serem lembradas. Primeiro, como o IIS não verifica se o pool de aplicativos especificado realmente existe, certifique-se de criá-lo primeiro. Em segundo lugar, para salvar a alteração da atribuição do pool de aplicativos, lembre-se de usar o método Put\_. A classe Application herda o método Put\_ do WMI.

O script a seguir altera o pool de aplicativos do aplicativo "/NewApp" no site padrão para "NewAppPool". Como antes, copie e cole o script no bloco de notas. Salve-o com o nome de arquivo AppPoolAssign.vbs e execute-o com cscript.exe.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")

' Retrieve the NewApp application.
Set oApp = oWebAdmin.Get("Application.SiteName='Default Web Site',Path='/NewApp'")
WScript.Echo "Application Web site and Path: '" & oApp.SiteName & oApp.Path & "'"
WScript.Echo "Old application pool: " & oApp.ApplicationPool
WScript.Echo
' Specify the new application pool name.
oApp.ApplicationPool = "NewAppPool"
' Save the change.
oApp.Put_
' Display the new application pool name.
WScript.Echo
WScript.Echo "New application pool: " & oApp.ApplicationPool
```

### Excluindo um pool de aplicativos específico

Se você quiser se livrar completamente do pool de aplicativos antigo, poderá usar o método Delete\_ que a classe ApplicationPool herda do WMI.

Este próximo script exclui o pool de aplicativos chamado "OneMoreAppPool" que você criou anteriormente. Como antes, copie e cole o script no bloco de notas. Salve-o com o nome de arquivo AppPoolDelete.vbs e execute-o com cscript.exe.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
Set oAppPools = oWebAdmin.InstancesOf("ApplicationPool")
For Each oAppPool In oAppPools
    If oAppPool.Name = "OneMoreAppPool" Then

        oAppPool.Delete_
        Exit For

   End If

Next
```

### Definindo o pool de aplicativos padrão para um site

Se você quiser tornar o pool de aplicativos o pool de aplicativos padrão para todos os aplicativos em um site, use a propriedade ApplicationDefaults.ApplicationPool do objeto Site. Mais uma vez, use o método Put\_ no objeto Site para salvar a alteração.

O script a seguir define o pool de aplicativo padrão do site Web padrão para o "NewAppPool" que você criou anteriormente. Copie e cole o script no bloco de notas, salve-o com o nome de arquivo SetAppPoolDefault.vbs e execute-o com cscript.exe.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
' Retrieve the default Web site.
Set oSite = oWebAdmin.Get("Site.Name='Default Web Site'")
' Specify the new default application pool name.
oSite.ApplicationDefaults.ApplicationPool = "NewAppPool"
' Save the change.
oSite.Put_
```

## Administrando pools de aplicativos

Você pode iniciar, parar e reciclar e criar pools de aplicativos facilmente usando scripts WMI. Esta seção mostra como executar cada uma dessas tarefas. Além disso, ele também mostra como você pode obter o estado atual de um pool de aplicativos.

### Interrompendo um pool de aplicativos

O método ApplicationPool.Stop do IIS corresponde ao método IIsApplicationPool.Stop no IIS 6.0.

Parar um pool de aplicativos pode ser feito em três linhas de script. Copie e cole o script abaixo no bloco de notas, salve-o com o nome de arquivo AppPoolStop.vbs e execute-o com cscript.exe.

```
' Connect to the WMI WebAdministration namespace.
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
' Specify the application pool.
Set oAppPool = oWebAdmin.Get("ApplicationPool.Name='DefaultAppPool'")
' Stop the application pool.
oAppPool.Stop
```

### Iniciando um pool de aplicativos

O IIS tem um método ApplicationPool.Start que corresponde ao método IIsApplicationPool.Start no IIS 6.0.

Iniciar um pool de aplicativos é igualmente simples. Copie e cole o script abaixo no bloco de notas, salve-o com o nome de arquivo AppPoolStart.vbs e execute-o com cscript.exe.

```
' Connect to the WMI WebAdministration namespace.
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
' Specify the application pool.
Set oAppPool = oWebAdmin.Get("ApplicationPool.Name='DefaultAppPool'")
' Start the application pool.
oAppPool.Start
```

### Reciclando um pool de aplicativos

O método ApplicationPool.Recycle do IIS corresponde ao método IIsApplicationPool.Recycle no IIS 6.0.

A reciclagem de um pool de aplicativos segue o mesmo padrão dos exemplos anteriores; a única ressalva é que o método de reciclagem funciona apenas em um pool de aplicativos que já foi iniciado.

Copie e cole o script abaixo no bloco de notas, salve-o com o nome de arquivo AppPoolRecycle.vbs e execute-o com cscript.exe.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
Set oAppPool = oWebAdmin.Get("ApplicationPool.Name='DefaultAppPool'")
' Recycle the application pool.
oAppPool.Recycle
```

### Obtendo o estado de um pool de aplicativos

O estado de tempo de execução de um pool de aplicativos pode ser recuperado usando o método GetState do objeto ApplicationPool, que retorna um valor de enumeração de 0 a 4. O exemplo a seguir mostra o que esses valores significam e como você pode usar uma função auxiliar simples para exibi-los. Esse método não tem nenhum equivalente direto no IIS 6.0.

Copie e cole esse script no bloco de notas, salve-o com o nome de arquivo AppPoolState.vbs e execute-o com cscript.exe.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
Set oAppPool = oWebAdmin.Get("ApplicationPool.Name='DefaultAppPool'")
' Get the application pool's name and its state.
WScript.Echo oAppPool.Name & " is " & _
      GetStateDescription(oAppPool.GetState) & "."
' The helper function translates the return value into text.
Function GetStateDescription(StateCode)
    Select Case StateCode
        Case 0
            GetStateDescription = "Starting"
        Case 1
            GetStateDescription = "Started"
        Case 2
            GetStateDescription = "Stopping"
        Case 3
            GetStateDescription = "Stopped"
        Case 4
            GetStateDescription = "Unknown"
        Case Else

            GetStateDescription = "Undefined value."
    End Select

End Function
```

Observe que o valor retornado refletirá o estado do pool de aplicativos no momento em que o script foi executado. Claro, ele não se atualizará em tempo real. Se você precisar disso, agende uma tarefa para executar o script para relatar a integridade de um pool de aplicativos ou pools específicos em intervalos definidos.

### Listando os pools de aplicativos em um servidor

Você pode usar o método InstancesOf do WMI para recuperar todos os pools de aplicativos e depois percorrer eles para exibir suas propriedades. O código a seguir exibe os pools de aplicativos e seu modo (Integrado ou ISAPI).

Copie e cole o script abaixo no bloco de notas, salve-o com o nome de arquivo ListAppPools.vbs e execute-o com cscript.exe.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
Set oAppPools = oWebAdmin.InstancesOf("ApplicationPool")
For Each oAppPool In oAppPools
    WScript.Echo "Application pool name: " & oAppPool.Name
    If oAppPool.ManagedPipelineMode = 0 Then

        sAppPoolMode = "Integrated"
    ElseIf oAppPool.ManagedPipelineMode = 1 Then

        sAppPoolMode = "ISAPI"
    End if

    WScript.Echo "Application pool mode: " & sAppPoolMode
    WScript.Echo 
Next
```

Seu resultado deve ser semelhante a este:

```
Application pool name: DefaultAppPool
Application pool mode: Integrated
Application pool name: Classic .NET AppPool
Application pool mode: ISAPI
```

## Conclusion

Este artigo apresentou informações sobre como realizar as seguintes tarefas básicas com scripts WMI:

- Criar e enumerar aplicativos
- Criar, configurar e excluir pools de aplicativos
- Iniciar, parar e reciclar pools de aplicativos
- Exibir o estado dos pools de aplicativos
- Listar todos os pools de aplicativos no servidor

As classes Application e ApplicationPool têm recursos adicionais não abordados neste artigo.

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
