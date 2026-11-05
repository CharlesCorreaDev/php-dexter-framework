# Gerenciando processos de trabalho e AppDomains no IIS 7 com WMI | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/scripting/managing-worker-processes-and-appdomains-in-iis-with-wmi

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

# Gerenciando processos de trabalho e AppDomains no IIS 7 com WMI

Comentários

por Tim Ammann

O script WMI permite gerenciar processos de trabalho e domínios de aplicativo (AppDomains) no IIS com relativa facilidade. Os processos de trabalho do IIS são gerados pelo WAS (Serviço de Ativação de Processo do Windows) e executados por W3wp.exe. Os processos de trabalho podem conter AppDomains que normalmente são criados em resposta a uma solicitação de uma página .aspx.

Este artigo descreve como realizar, com apenas algumas linhas de VBScript, as seguintes tarefas:

- Exibir as solicitações em execução no momento para um processo de trabalho
- Obter o estado de todos os processos de trabalho
- Descarregar um AppDomain específico ou todos os AppDomains
- Exibir todos os AppDomains e suas propriedades

## Primeiras Etapas

1. Verifique se o IIS e o script estão habilitados.

   a. Se você estiver usando o Windows Vista, abra o Painel de Controle, Programas e Recursos, e depois Recursos do Windows. Em "Ferramentas de Gerenciamento da Web", selecione "Scripts e Ferramentas de Gerenciamento do IIS" para habilitar scripts.
   b. Se você estiver usando o Windows Server® 2008, abra o Gerenciador de Servidores. Use o Assistente para Adicionar Funções para instalar o servidor Web do IIS. Na página Selecionar Serviços de Função, na seção Ferramentas de Gerenciamento, selecione "Scripts e Ferramentas de Gerenciamento do IIS".
2. Execute comandos como administrador. Para abrir uma janela do Prompt de Comando com privilégios elevados, clique em Iniciar, aponte para Todos os Programas, clique em Acessórios, clique com o botão direito do mouse no Prompt de Comando e clique em Executar como administrador. Se você abrir um shell de comando como administrador, todos os aplicativos executados nesse shell de comando serão executados como administrador.
3. Salve os arquivos de script no formato de texto com uma extensão .vbs. Eles podem ser executados no prompt de comando usando a sintaxe "cscript.exe *<scriptname.vbs>*".
4. Antes de começar, faça um backup do arquivo\inetsrv\config\applicationhost.config System32 com a ferramenta AppCmd. A cópia de backup permitirá que você restaure o IIS para seu estado original apenas copiando a versão original na versão posterior. Para fazer um backup, siga estas etapas:

   a. Abra uma janela de prompt de comando elevado.  
   b. Digite `cd %Windir%\system32\inetsrv\` c.Type appcmd add backup *backupName* para fazer backup do arquivo ApplicationHost.config, onde *backupName* é o nome que você especifica para o backup. Um diretório com o nome de backup especificado será criado no `%Windir%\system32\inetsrv\backup` diretório. Se você não especificar um nome, o appcmd gerará um nome de diretório automaticamente usando a data e a hora atuais.

## Processos de trabalho

Esta seção mostra como recuperar as solicitações em execução no momento para cada processo de trabalho em um servidor Web. Em seguida, você aprenderá a exibir o PID de cada processo de trabalho, o estado e o pool de aplicativos ao qual ele pertence.

### Obter solicitações de execução

Um novo recurso interessante do IIS é a capacidade de ver as solicitações que estão sendo executadas atualmente em um processo de trabalho. Você pode fazer isso com o método WorkerProcess.GetExecutingRequests.

O método WorkerProcess.GetExecutingRequests relata de maneira instantânea as solicitações que estavam sendo executadas no momento em que o método foi executado. Como a maioria das solicitações é executada muito rapidamente, talvez não seja fácil testar o método manualmente com um navegador da Web. Por esse motivo, você criará uma página da Web apenas para essa finalidade.

Use o bloco de notas para colocar o texto a seguir em um arquivo de texto. Em seguida, salve o arquivo usando o nome Sleep.aspx.

```
<%  System.Threading.Thread.Sleep(30000)
Response.Write ("I'm finally finished...") %>
```

Coloque o arquivo Sleep.aspx no diretório de conteúdo do site padrão: `%systemdrive%\inetpub\wwwroot`.

O arquivo Sleep.aspx que você criou força a solicitação da página da Web a levar 30 segundos para ser executada. Isso lhe dará tempo para executar um script que mostrará GetExecutingRequests em ação.

O método GetExecutingRequests usa uma variável de matriz vazia como um parâmetro OUT, que ele preenche com objetos HttpRequest. Você pode iterar sobre essas solicitações para que você possa mostrar os atributos de cada solicitação. O script a seguir usa a saída do objeto HttpRequest e exibe o módulo, o verbo, o nome do host e a URL atuais para cada solicitação.

Copie o script a seguir no bloco de notas e salve-o com o nome de arquivo GetRequests.vbs.

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
Set oWorkerProcesses = oWebAdmin.InstancesOf("WorkerProcess")
     
For Each oWorkerProcess In oWorkerProcesses
    ' Place the requests queued for a process into an array variable.
    oWorkerProcess.GetExecutingRequests arrReqs
    
    ' Show the number of requests queued.
    If IsNull(arrReqs) Then
        WScript.Echo "No currently executing requests."

    Else
        ' Display the number of requests.
        WScript.Echo "Number of currently executing requests: " & _
            UBound(arrReqs) + 1
        WScript.Echo
  
        ' List the properties of each request.
        For Each oRequest In arrReqs
            WScript.Echo "Module: " & "[" & oRequest.CurrentModule & "]"
            WScript.Echo "Verb:" & "[" & oRequest.Verb & "]"
            WScript.Echo "HostName: " & "[" & oRequest.HostName & "]"
            WScript.Echo "Url: " & "[" & oRequest.Url & "]"
            WScript.Echo
        Next
    End If
Next
```

Abra uma janela de prompt de comando com privilégios elevados e navegue até o diretório no qual você salvou o arquivo GetRequests.vbs.

Antes de executar o script, digite `http://localhost/sleep.aspx` na barra de endereços de um navegador da Web. Isso iniciará a execução da solicitação e definirá o navegador girando por 30 segundos enquanto ele aguarda para renderizar a página Sleep.aspx.

Enquanto o navegador ainda está aguardando para renderizar a página, execute o script digitando o seguinte na janela do prompt de comando que você acabou de abrir:

```
Cscript.exe GetRequests.vbs
```

#### Saída de exemplo

A saída que você vê deve ser semelhante à seguinte.

```
Number of currently executing requests: 2
Module: [ManagedPipelineHandler]
Verb:[GET]
HostName: [localhost]
Url: [/MyApp/]
Module: [ManagedPipelineHandler]
Verb:[GET]
HostName: [localhost]
Url: [/MyApp/default.aspx]
```

### Obtendo o estado de um processo de trabalho

O objeto WorkerProcess no provedor do IIS WMI tem um método GetState que revela se um processo de trabalho está iniciando, executando ou parando. O WorkerProcess também tem duas propriedades que nos interessam aqui: ApplicationPool e PID. A propriedade ApplicationPool representa o pool de aplicativos ao qual o processo de trabalho pertence. A propriedade PID contém a ID do processo que identifica exclusivamente o processo de trabalho.

Você pode usar o código a seguir para listar cada PID e estado do processo de trabalho e seu pool de aplicativos. Se nenhum processo de trabalho estiver em execução, o script sairá silenciosamente. Copie o código no bloco de notas e salve-o com o nome de arquivo GetState.vbs.

```
' Connect to the WMI WebAdministration namespace. 
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration") 
       
' Get the worker process instances. 
Set oWorkerProcesses = oWebAdmin.InstancesOf("WorkerProcess") 
       
' Get the ID of each worker process in the application pool and report its status. 
For Each oWorkerProcess In oWorkerProcesses 
       
    ' Report the worker process state via the GetStateDescription helper function. 
    WScript.Echo "WorkerProcess " & oWorkerProcess.ProcessID & ": " & _ 
        GetStateDescription(oWorkerProcess.GetState) 
    WScript.Echo "Application Pool: " & oWorkerProcess.AppPoolName
    WScript.Echo 
Next 

' The helper function translates the return value into text. 
Function GetStateDescription(StateCode) 
    Select Case StateCode 
        Case 0 
            GetStateDescription = "Starting" 
        Case 1 
            GetStateDescription = "Running" 
        Case 2 
            GetStateDescription = "Stopping" 
        Case 3 
            GetStateDescription = "Unknown" 
       
        Case Else 
            GetStateDescription = "Undefined value." 
    End Select 
End Function
```

Abra uma janela de prompt de comando com privilégios elevados e navegue até o diretório no qual você salvou o arquivo GetState.vbs. Execute o script digitando o seguinte na janela do prompt de comando que você acabou de abrir:

```
Cscript.exe GetState.vbs
```

#### Saída de exemplo

Seu resultado deve ser semelhante a este:

```
WorkerProcess 1336: Running 
Application Pool: DefaultAppPool 
       
WorkerProcess 3680: Running 
Application Pool: Classic .NET AppPool 
       
WorkerProcess 1960: Running 
Application Pool: NewAppPool
```

Agora que você aprendeu a usar o script WMI para revelar os segredos dos processos de trabalho, faça o mesmo para domínios de aplicativo.

## AppDomains

Na primeira vez que uma solicitação de uma página de ASP.NET é recebida, o módulo do mecanismo gerenciado do IIS cria um domínio de aplicativo (AppDomain) na memória. O AppDomain processa solicitações para páginas aspx ou qualquer página que use código gerenciado. Descarregar e enumerar AppDomains usando o WMI é fácil, e esta seção mostra como fazer as duas coisas.

### Descarregando um AppDomain específico

O descarregamento do AppDomain no IIS 7 e posteriores funciona de forma um pouco diferente do que no IIS 6.0. Considerando que o comando AppUnload do IIS 6.0 descarregava aplicativos ASP fora de processo, o método AppDomain.Unload do IIS 7 e superiores descarrega apenas os domínios de aplicativos ASP.NET. A funcionalidade AppUnload desapareceu porque o modo de compatibilidade do IIS 5.0 que a suportava não está mais presente no IIS 7 e nas versões posteriores.

Para descarregar um AppDomain específico, é necessário conseguir identificá-lo de forma exclusiva. Os objetos AppDomain têm três propriedades principais: ApplicationPath, ID e SiteName. No entanto, apenas um deles pode ser suficiente para seus propósitos.

Aliás, a propriedade ID do AppDomain não é um número, mas um caminho semelhante a este:

```
/LM/W3SVC/1/ROOT
```

O "1" no caminho listado é a ID do Site (por padrão, 1 corresponde ao site padrão.) Se você precisar gerar uma lista dos AppDomains do servidor e suas propriedades primeiro, consulte a seção "Enumerando AppDomains" mais adiante neste artigo.

O próximo script descarrega o AppDomain chamado "Northwind". O script itera por meio dos AppDomains disponíveis até encontrar aquele com o ApplicationPath correspondente. Copie o código no bloco de notas, substitua "Northwind" pelo caminho do aplicativo AppDomain de sua escolha e salve o arquivo com o nome AppDomainUnload.vbs.

Abra uma janela de prompt de comando com privilégios elevados e navegue até o diretório no qual você salvou o arquivo AppDomainUnload.vbs. Execute o script digitando o seguinte na janela do prompt de comando que você acabou de abrir:

```
Cscript.exe AppDomainUnload.vbs
```

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
Set oAppDomains = oWebAdmin.ExecQuery("SELECT * FROM AppDomain")

' Unload only the Northwind application domain.
For Each oAppDomain In oAppDomains
    If oAppDomain.ApplicationPath = "/Northwind/" Then 
        oAppDomain.Unload
        Exit For 
    End If 
Next
```

### Descarregando todos os AppDomains

Descarregar todos os AppDomains em um servidor é ainda mais fácil: basta recuperá-los, iterar por eles e descarregar cada um por sua vez.

O exemplo a seguir descarrega todos os domínios do aplicativo em um servidor Web do IIS. Observe como uma consulta WQL simples (WQL é a versão do SQL da WMI) é usada para recuperar os AppDomains.

Copie o código no bloco de notas e salve o arquivo com o nome AppDomainUnloadAll.vbs. Abra uma janela de prompt de comando com privilégios elevados e navegue até o diretório no qual você salvou o arquivo AppDomainUnloadAll.vbs. Execute o script digitando o seguinte na janela do prompt de comando que você acabou de abrir:

```
Cscript.exe AppDomainUnloadAll.vbs
```

```
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")

' Get all the application domains on the Web server.
Set oAppDomains = oWebAdmin.ExecQuery("SELECT * FROM AppDomain")

' Unload all the application domains.
For Each oAppDomain In oAppDomains
    oAppDomain.Unload
Next
```

Como alternativa à sintaxe da consulta WQL, você pode usar o método InstancesOf do WMI, assim como fez anteriormente com o WorkerProcess:

```
Set oAppDomains = oWebAdmin.InstancesOf("AppDomain")
```

### Enumerando AppDomains (domínios de aplicativo)

Você pode exibir todos os AppDomains em execução no momento e suas propriedades usando uma abordagem semelhante à dos scripts anteriores. Aqui está uma lista das propriedades do AppDomain:

- ApplicationPath
- ID
- Isidle
- PhysicalPath
- ProcessId
- SiteName

O script a seguir mostra todas as propriedades para cada AppDomain, exceto a propriedade Caminho Físico, mas você pode adicioná-la facilmente. Para conveniência, o script exibe as propriedades de chave e tempo de execução separadamente.

Copie o código no bloco de notas e salve o arquivo com o nome AppDomainProps.vbs. Abra uma janela de prompt de comando com privilégios elevados e navegue até o diretório no qual você salvou o arquivo AppDomainProps.vbs. Execute o script digitando o seguinte na janela do prompt de comando que você acabou de abrir:

```
Cscript.exe AppDomainProps.vbs
```

```
'Connect to the WMI WebAdministration namespace
Set oWebAdmin = GetObject("winmgmts:root\WebAdministration")
Set oAppDomains = oWebAdmin.InstancesOf("AppDomain")
WScript.Echo "AppDomain Count: " & oAppDomains.Count
WScript.Echo 
ADCounter = 0
For Each oAppDomain In oAppDomains
    ADCounter = ADCounter + 1
    WScript.Echo "---- AppDomain " & ADCounter & " of " & _
                oAppDomains.Count & " ----" & vbCrLf
    WScript.Echo "[ Key properties ]"
    WScript.Echo "ID: " & oAppDomain.ID
    WScript.Echo "Site Name: " & oAppDomain.SiteName
    WScript.Echo "Application Path: " & oAppDomain.ApplicationPath
    WScript.Echo
    WScript.Echo "[ Run-time properties ]"
    WScript.Echo "Process ID: " & oAppDomain.ProcessID
    WScript.Echo "Is idle: " & oAppDomain.IsIdle
    WScript.Echo vbCrLf
Next
```

#### Saída de exemplo

Sua saída deve ser semelhante à seguinte:

```
AppDomain Count: 3
---- AppDomain 1 of 3 ----
[ Key properties ]
ID: /LM/W3SVC/1/ROOT
Site Name: Default Web Site
Application Path: /

[ Run-time properties ]
Process ID: 3608
Is idle: False

---- AppDomain 2 of 3 ----
[ Key properties ]
ID: /LM/W3SVC/2/ROOT/ContosoApp
Site Name: ContosoSite
Application Path: /ContosoApp/

[ Run-time properties ]
Process ID: 3608
Is idle: True

---- AppDomain 3 of 3 ----
[ Key properties ]
ID: /LM/W3SVC/1/ROOT/Fabrikam
Site Name: Default Web Site
Application Path: /Fabrikam/

[ Run-time properties ]
Process ID: 2552
Is idle: False
```

## Conclusion

Este artigo mostrou algumas técnicas básicas de script WMI para recuperar informações sobre processos de trabalho do IIS e AppDomains. O método InstanceOf do WMI e as consultas WQL foram usados para recuperá-los. Aqui está uma breve revisão das tarefas apresentadas e dos métodos que foram usados:

- Exibir as solicitações em execução no momento para um processo de trabalho: **WorkerProcess.GetExecutingRequests**
- Obter o estado de todos os processos de trabalho: **WorkerProcess.GetState**
- Descarregar um AppDomain específico ou todos os AppDomains: **AppDomain.Unload**

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
