# Gerenciando sites com o provedor WMI do IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/scripting/managing-sites-with-the-iis-wmi-provider

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

# Gerenciando sites com o provedor WMI do IIS 7.0

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

Este documento fornece uma introdução ao WMI percorrendo o gerenciamento de site usando o namespace IIS WebAdministration. Saiba como criar, excluir, parar, iniciar e modificar sites – todas as tarefas que podem ser traduzidas facilmente para objetos como Pools de Aplicativos e Diretórios Virtuais.

Se você precisar exibir as propriedades de um site específico, quiser criar e ou excluir um Site ou ver todos os sites no servidor, você chegou ao lugar certo. Este documento explica a maioria das tarefas relacionadas aos Sites e fornece uma introdução básica ao WMI.

As tarefas e seções neste artigo incluem:

- [Antes de começar](manage__scripting__managing-sites-with-the-iis-wmi-provider.md#01)
- [Obtendo uma instância de site (objeto de chave única)](manage__scripting__managing-sites-with-the-iis-wmi-provider.md#02)
- [Obtendo uma Instância de Aplicativo (objeto de várias chaves)](manage__scripting__managing-sites-with-the-iis-wmi-provider.md#03)
- [Criando um site](manage__scripting__managing-sites-with-the-iis-wmi-provider.md#04)
- [Enumerando todos os sites](manage__scripting__managing-sites-with-the-iis-wmi-provider.md#05)
- [Parando e iniciando um site](manage__scripting__managing-sites-with-the-iis-wmi-provider.md#06)
- [Excluindo um site](manage__scripting__managing-sites-with-the-iis-wmi-provider.md#07)
- [Resumo](manage__scripting__managing-sites-with-the-iis-wmi-provider.md#08)

Muitas dessas tarefas são executadas de maneira semelhante para outros objetos, como ApplicationPool. Desafie-se no final deste artigo para ver se você pode ou não usar o que aprende aqui para criar, excluir e modificar objetos ApplicationPool.

Este documento faz uso extensivo do CIM Studio; se você ainda não estiver familiarizado com ele, consulte [o CIM Studio](https://msdn.microsoft.com/library/ms525342(vs.85).aspx).

## Antes de iniciar

### Instalar o IIS

O IIS 7.0 ou superior deve ser instalado para concluir as etapas neste documento. Se você puder procurar `http://localhost/` e receber a página padrão do IIS "Em Construção", o IIS será instalado em seu computador. Se o IIS não estiver instalado, consulte [Como instalar o IIS no Windows Vista](install__installing-iis-7__installing-iis-on-windows-vista-and-windows-7.md) para obter instruções de instalação.

### Instalar o provedor WMI

Instale o provedor WMI do IIS selecionando o componente **Scripts e Ferramentas de Gerenciamento do IIS** em **Ferramentas de Gerenciamento** (ou Ferramentas de Gerenciamento da Web). No Windows Vista, isso está na caixa de diálogo Recursos do Windows nos Serviços de Informações da Internet. No Windows Server® 2008, isso está no Gerenciador de Servidores na função IIS (Servidor Web).

### Instalar ferramentas WMI (inclui o CIM Studio)

Instale o pacote de Ferramentas do WMI.

### Privilégios necessários e UAC (Controle de Conta de Usuário)

Você deve ser um administrador para se conectar ao namespace WMI WebAdministration. Isso significa que você está conectado como um dos seguintes:

- A conta de Administrador incorporada no Windows Server 2008
- Um membro do grupo Administradores e você desabilitou o UAC (Controle de Conta de Usuário) ou
- Há um membro do grupo Administradores com UAC habilitado.

Se você estiver na primeira ou segunda situação, não encontrará problemas de permissões com este artigo.

Se você estiver na terceira situação, encontrará erros **Acesso Negado**. Evite esses problemas sempre abrindo prompts de comando como Administrador e iniciando o CIM Studio a partir de um prompt de comando com privilégios elevados.

Para abrir um prompt de comando como Administrador, clique em **Iniciar**, clique em **Todos os Programas**, clique em **Acessórios**, clique com o botão direito **do mouse no Prompt de Comando** e selecione **Executar como Administrador**.

Para iniciar o CIM Studio a partir de um prompt de comando com privilégios elevados:

1. Abra um prompt de comando como Administrador.
2. Digite `%systemdrive%\Program Files\WMI Tools\studio.htm` e pressione Enter.

### Fazer um backup

Faça backup dos arquivos de configuração do IIS antes de começar para que você possa restaurar o sistema para o estado original após a conclusão.

1. Abra um prompt de comando.
2. Digite `%windir%\system32\inetsrv\appcmd add backup IIS7\_WMI\_CIMStudioLab`.

Resultado esperado:

```
BACKUP object "IIS7_WMI_CIMStudioLab" added
```

- Depois de concluir, restaure o IIS para seu estado original abrindo o prompt de comando como administrador e digitando `%windir%\system32\inetsrv\appcmd restore backup IIS7\_WMI\_CIMStudioLab`.

Resultado esperado:

```
Restored configuration from backup "IIS7_WMI_CIMStudioLab"
```

## 1. Obter uma instância de site

Para obter uma instância do site, clique em **Iniciar**, clique na caixa **Iniciar Pesquisa** , digite **notepad.exe**e pressione **Enter**. Cole a seguinte linha de script no bloco de notas:

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")
```

Clique **em Arquivo**, **Salvar como...** para abrir a caixa de diálogo Salvar. Localize o **tipo Salvar como:** caixa de texto na parte inferior da caixa de diálogo e altere seu valor de "Documentos de Texto (\*.txt)" para "Todos os Arquivos". Salve o arquivo na Área de Trabalho como "GetSite.vbs".

![Captura de tela da caixa de diálogo Salvar como alterando a opção Salvar como para Todos os Arquivos.](managing-sites-with-the-iis-wmi-provider/_static/image1.jpg)

Clique **em Iniciar**, clique na caixa **Iniciar Pesquisa** , digite **cmd.exe**e pressione **Enter**. Digite **cd %SystemDrive%\Users\Administrator\Desktop** e pressione **Enter**. Digite **cscript //h:cscript** e pressione **Enter**. Isso define o host de script padrão como cscript.exe que envia sua saída para a janela de comando na qual ele foi iniciado. Para obter mais informações, leia [Como executar scripts do Windows](https://msdn.microsoft.com/library/xazzc41b.aspx).

Digite **GetSite.vbs** e pressione **Enter**. Se o script for executado sem erros, isso significa que você se conectou com êxito ao namespace "WebAdministration". Para obter mais informações sobre a string "winmgmts:root\WebAdministration", leia [Constructing a Moniker String](https://msdn.microsoft.com/library/default.asp?url=/library/wmisdk/wmi/constructing_a_moniker_string.asp). Adicionaremos mais quatro linhas ao script GetSite.vbs. Essas quatro linhas de script obterão o Site Padrão e confirmarão o sucesso imprimindo duas de suas propriedades.

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")
Set oSite = oIIS.Get("Site.Name='Default Web Site'")            
WScript.Echo "Retrieved an instance of Site " 
WScript.Echo "        Name: " & oSite.Name 
WScript.Echo "        ID:   " & oSite.ID
```

Volte para o prompt do cmd e execute GetSite.vbs. Você deve ver o seguinte resultado:

***Recuperação de uma instância do Site***

***Nome: Site Padrão***

***ID: 1***

Para ver como o "Get" funciona, clique em **Iniciar**, **Todos os Programas, Ferramentas****WMI** e, por fim, **WMI CIM Studio**. Conecte-se ao namespace WebAdministration (consulte [Get to Know the IIS WMI Provider Using CIM Studio](manage__scripting__get-to-know-the-iis-wmi-provider-using-cim-studio.md)) e pesquise a classe Site. O painel direito no CIM Studio mostra as propriedades do site. A propriedade Name está ao lado de um ícone de chave, circulado em vermelho como mostrado abaixo.

![Captura de tela da propriedade Name enfatizada e definida como uma propriedade-chave na janela do W M I C I M Studio.](managing-sites-with-the-iis-wmi-provider/_static/image3.jpg)

Uma classe pode ter uma ou mais propriedades de "chave"; esse conjunto de uma ou mais chaves identifica exclusivamente um objeto. Leia [a descrição de um caminho de objeto de instância](https://msdn.microsoft.com/library/aa389977.aspx) para obter mais detalhes; na verdade, a cadeia de caracteres "Site.Name='Site Padrão'" está dizendo "obter a instância do objeto Site, com a propriedade chave Nome igual a 'Site Padrão'". Se isso faz sentido, tente algo um pouco mais difícil.

## 2. Obter uma instância de aplicativo

Para obter uma instância de aplicativo, abra o CIM Studio e pesquise a classe Application. Observe que a classe Application tem duas propriedades principais: "SiteName" e "Path", conforme mostrado na captura de tela abaixo.

![Captura de tela das propriedades da chave de aplicativo definidas como Caminho e Nome do Site na caixa de diálogo W M I C I M Studio.](managing-sites-with-the-iis-wmi-provider/_static/image5.jpg)

Clique **em Iniciar**, clique na caixa **Iniciar Pesquisa** , digite **notepad.exe**e pressione **Enter**. Cole as seguintes linhas de script no bloco de notas. A segunda linha de script especifica valores para ambas as propriedades da chave de aplicativo. Observe que o formato dessa cadeia de caracteres é: <object\_name>.<>key\_property='<value>',< key\_property>='value<' em que> as propriedades da chave e seus valores são separados por vírgulas.

```
Set oIIS = GetObject("winmgmts:root\WebAdministration") 
Set oApp = oIIS.Get("Application.SiteName='Default Web Site',Path='/'")
WScript.Echo "Successfully retrieved: '" & oApp.SiteName & oApp.Path & "'"
```

Clique **em Arquivo**, **Salvar como...** para abrir a caixa de diálogo Salvar. Localize o **tipo Salvar como:** caixa de texto na parte inferior da caixa de diálogo e altere seu valor de "Documentos de Texto (\*.txt)" para "Todos os Arquivos". Salve o arquivo na Área de Trabalho como "GetApp.vbs".

Clique **em Iniciar**, clique na caixa **Iniciar Pesquisa** , digite **cmd.exe**e pressione **Enter**.

Digite **cd %SystemDrive%\Users\Administrator\Desktop** e pressione **Enter**.

Digite **GetApp.vbs** e pressione **Enter**. Você verá esta saída:

***Recuperado com êxito: 'Site Padrão/'***

## 3. Criar uma instância de site

Para criar uma instância de site, revise os parâmetros do método novamente no artigo do CIM Studio. Pesquise a classe Site no CIM Studio. Selecione a guia Métodos no painel direito.

![Captura de tela da guia Métodos do Site na caixa de diálogo W M I C I M Studio.](managing-sites-with-the-iis-wmi-provider/_static/image7.jpg)

Clique com o botão direito do mouse no método **Criar** e selecione **Editar Parâmetros de Método**. Você verá a caixa de diálogo abaixo mostrando os parâmetros para o método Create. Clique em **Cancelar**.

![Captura de tela dos parâmetros Criar Método, incluindo Nome, Tipo e Valor.](managing-sites-with-the-iis-wmi-provider/_static/image9.jpg)

Como sabemos agora quais parâmetros esse método usa, criaremos variáveis para esses parâmetros colando as seguintes linhas de script no bloco de notas.

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")
        
' Create a binding for the site
Set oBinding = oIIS.Get("BindingElement").SpawnInstance_
oBinding.BindingInformation = "*:80:www.newsite.com"
oBinding.Protocol = "http"

' These are the parameters we pass to the Create method
name = "NewSite"
physicalPath = "C:\inetpub\wwwroot"
arrBindings = array(oBinding)
```

Clique **em Arquivo**, **Salvar como...** para abrir a caixa de diálogo Salvar. Localize o **tipo Salvar como:** caixa de texto na parte inferior da caixa de diálogo e altere seu valor de "Documentos de Texto (\*.txt)" para "Todos os Arquivos". Salve o arquivo na Área de Trabalho como "CreateSite.vbs".

Clique **em Iniciar**, clique na caixa **Iniciar Pesquisa** , digite **cmd.exe**e pressione **Enter**.

Digite **cd %SystemDrive%\Users\Administrator\Desktop** e pressione **Enter**.

Digite **CreateSite.vbs** e pressione **Enter**. O script deve ser executado sem erros.

Volte para o CIM Studio, clique com o botão direito do mouse no método Criar novamente e, desta vez, selecione "**Qualificadores de Método...**". A caixa de diálogo resultante, mostrada abaixo, mostra que o método "Create" é um método estático. Clique em **Cancelar**.

![Captura de tela dos Qualificadores do Método Criar com o Qualificador booleano estático enfatizado.](managing-sites-with-the-iis-wmi-provider/_static/image11.jpg)

Métodos estáticos devem ser chamados a partir da definição do objeto. O exemplo de script abaixo mostra a diferença entre recuperar uma instância de objeto e recuperar a definição do objeto:

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")        
' In order to retrieve an object instance, the object's key properties
' and their values must be specified in the WMI object instance path
Set oSite = oIIS.Get("Site.Name='Default Web Site'")    
' The object definition can be retrieved by specifying the name
' of the object without any key properties and values
Set oSiteDefn = oIIS.Get("Site")
```

Adicione algumas linhas ao script CreateSite.vbs para criar o Site:

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")
' Create a binding for the site
Set oBinding = oIIS.Get("BindingElement").SpawnInstance_
oBinding.BindingInformation = "*:80:www.newsite.com"
oBinding.Protocol = "http"
' These are the parameters we pass to the Create method
name = "NewSite"
physicalPath = "C:\inetpub\wwwroot"
arrBindings = array(oBinding)
' Get the Site object definition
Set oSiteDefn = oIIS.Get("Site")
' Create site!!
oSiteDefn.Create name, arrBindings, physicalPath
WScript.Echo "Site created successfully!"
```

Volte para o prompt do cmd e execute CreateSite.vbs. Você verá esta saída:

***Site criado com êxito!***

Para ver a prova de que o site foi criado, digite `notepad %windir%\system32\inetsrv\ApplicationHost.config`. Digite **Ctrl+F** para abrir a caixa de diálogo Localizar do bloco de notas. Digite **NewSite** na caixa de texto "Localizar o que:" e clique no botão **Localizar Próximo** . Isso leva você à `<sites>` seção em que o novo site foi definido:

```
<site name="NewSite" id="2">
   <application path="/">
      <virtualDirectory path="/" physicalPath="C:\inetpub\wwwroot" />
   </application>
   <bindings>
      <binding protocol="http" bindingInformation="*:80:www.newsite.com" />
   </bindings>
</site>
```

### Uma observação adicional sobre criação/exclusão/modificação de objeto

Nem todos os objetos no namespace WebAdministration podem ser criados ou excluídos. Por exemplo, o servidor gerencia o ciclo de vida dos objetos WorkerProcess e AppDomain e eles não podem ser criados ou excluídos por meio do WMI.

Para saber uma maneira geral de descobrir se um objeto pode ser criado, excluído ou modificado, pesquise por Site no CIM Studio. Clique com o botão direito do mouse na grade de propriedades na guia Propriedades e clique **em Qualificadores de Objeto...**. Você verá a caixa de diálogo abaixo:

![Captura de tela dos Qualificadores de Objeto com ênfase nos Qualificadores Booleanos 'Supports Create', 'Supports Delete' e 'Supports Update'.](managing-sites-with-the-iis-wmi-provider/_static/image13.jpg)

Os qualificadores de objeto SupportsCreate, SupportsDelete e SupportsUpdate descrevem se um objeto pode ser criado, excluído ou modificado. O site pode ser criado, excluído e modificado, portanto, o Site tem todos esses três qualificadores e todos eles são verdadeiros.

Pesquise por WorkerProcess no CIM Studio. Clique com o botão direito do mouse na grade de propriedades na guia Propriedades e clique **em Qualificadores de Objeto...**. A caixa de diálogo abaixo mostra que o objeto WorkerProcess não tem esses três qualificadores; o valor desses qualificadores é falso por padrão (para obter mais informações, consulte [Qualificadores Padrão](https://msdn.microsoft.com/library/aa393650.aspx)). Portanto, o objeto WorkerProcess não pode ser criado, excluído ou modificado.

![Captura de tela dos Qualificadores de Objeto do Processo de Trabalho. Observe que Suporte para Criar, Suporte para Excluir ou Suporte para Atualizar estão ausentes.](managing-sites-with-the-iis-wmi-provider/_static/image15.jpg)

## 4. Enumerar todas as instâncias do site

O script a seguir usa o método "InstancesOf" para recuperar todas as instâncias do objeto Site. Cole o script abaixo em uma nova janela do bloco de notas e salve como "EnumSites.vbs".

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")
Set oSites = oIIS.InstancesOf("Site")
For Each oSite In oSites            
     WScript.Echo oSite.Name & " (" & oSite.Id & ")"
Next
```

Execute o script EnumSites.vbs. Você verá a saída a seguir, ou seja, o Site Padrão e o site que criamos na Tarefa 3.

***Site Padrão (1)***

***NewSite (2)***

### Os detalhes

Você pode perguntar de onde veio o método InstancesOf e de onde você pode ler mais sobre ele. A primeira linha do script é a mesma linha usada muitas vezes antes para se conectar ao namespace WMI webAdministration:

```
Set oIIS = GetObject("winmgmts:root\WebAdministration").
```

A chamada GetObject retorna um objeto SWbemServices que pode ser usado para executar operações em um namespace. Esse objeto tem um método InstancesOf, bem como vários outros métodos úteis. Para ler mais sobre InstancesOf ou outros métodos disponíveis, consulte o [artigo do SDK da Plataforma sobre SWbemServices](https://msdn.microsoft.com/library/aa393854.aspx).

## 5. Iniciando e interrompendo sites

Antes de modificarmos o estado do Site, descobrimos em que estado o Site está. O script a seguir conecta-se ao namespace WebAdministration, obtém a instância do Site e, em seguida, chama o método GetState na instância do Site. O método GetState retorna um status numérico, portanto, esse script inclui uma função auxiliar para converter o status numérico em uma cadeia de caracteres mais descritiva. Cole esse script em uma nova janela do bloco de notas e salve-o como **GetSiteStatus.vbs**.

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")

Set oSite = oIIS.Get("Site.Name='NewSite'")
                                                
WScript.Echo GetStateDescription(oSite.GetState)
' -------helper functions-----------
Function GetStateDescription(statusCode)
Select Case statusCode
                                Case 1
GetStateDescription = "Started"
                                Case 2
GetStateDescription = "Starting"
                                Case 3
GetStateDescription = "Stopped"
                                Case 4
GetStateDescription = "Stopping"
                                Case 5
GetStateDescription = "Unknown"
                                Case Else
GetStateDescription = "Error: Bad Status"
End Select
End Function
```

Execute GetSiteStatus.vbs no prompt do cmd e você verá a seguinte saída:

```
Started
```

O Site é iniciado, portanto, escreva um script para pará-lo. Copiamos o código de script de GetSiteStatus.vbs, mas adicionamos algumas linhas para interromper o site (todas as linhas novas ou atualizadas estão em negrito). Cole esse script em uma nova janela do bloco de notas e salve-o como **StopSite.vbs**.

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")
                        
Set oSite = oIIS.Get("Site.Name='NewSite'")
                        
WScript.Echo oSite.Name & " is " & GetStateDescription(oSite.GetState)
            
oSite.Stop
        
WScript.Echo oSite.Name & " is " & GetStateDescription(oSite.GetState)
 
' -------helper functions-----------
                        
Function GetStateDescription(statusCode)                        
            
   Select Case statusCode
                                   
      Case 1                       
 GetStateDescription = "Started"
                                  
      Case 2
                                  
 GetStateDescription = "Starting"
                        
      Case 3
                        
 GetStateDescription = "Stopped"
                        
      Case 4
                        
 GetStateDescription = "Stopping"
                        
      Case 5
                        
 GetStateDescription = "Unknown"
                                                                    
      Case Else
                                                
GetStateDescription = "Error: Bad Status"
```

Execute o script StopSite.vbs e você verá os seguintes resultados:

***NewSite foi Iniciado***

***NewSite está parado***

Agora só temos que iniciar o Site novamente. Copie StopSite.vbs para um novo script chamado StartSite.vbs. Abra StartSite.vbs e altere a linha **oSite.Stop** para ler **oSite.Start**. Execute StartSite.vbs e você deverá ver a seguinte saída:

***NewSite está parado***

***NewSite foi iniciado***

## 6. Excluir um site

Execute o script EnumSites.vbs que você criou na Tarefa 4. Você deverá ver a seguinte saída, o que significa que você tem dois sites no servidor:

***Site Padrão (1)***

***NewSite (2)***

O script a seguir se conecta ao namespace WebAdministration, obtém a instância NewSite do Site e a exclui. Cole esse script em uma nova janela do bloco de notas e salve-o como **DeleteSite.vbs**.

```
Set oIIS = GetObject("winmgmts:root\WebAdministration")
Set oSite = oIIS.Get("Site.Name='NewSite'")
oSite.Delete_
```

Execute o DeleteSite.vbs no prompt de comando.

Execute EnumSites.vbs novamente para confirmar se o NewSite foi excluído com êxito. Você verá a seguinte saída mostrando que o Site Padrão é o único site restante no servidor:

***Site Padrão (1)***

## Resumo

Você aprendeu a recuperar uma instância específica de um objeto Site ou Aplicativo, criar um site, enumerar todas as instâncias do Site, parar e iniciar Sites e, por fim, excluir Sites. Grande parte dessas informações é aplicável a outros objetos de namespace; por exemplo, os objetos Application e ApplicationPool são criados e excluídos da mesma maneira que os sites.

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
