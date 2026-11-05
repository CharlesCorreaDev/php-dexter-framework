# Usando o histórico de configuração com o IIS 7 e o IIS 8 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-your-configuration-settings/using-configuration-history-with-iis-7-and-iis-8

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

# Usando o histórico de configuração com o IIS 7 e o IIS 8

Comentários

por [Tobin Titus](https://github.com/tobint)

## Introdução

No IIS 6.0, os administradores tinham uma rede de segurança que permitia que eles determinassem facilmente o que mudou na configuração do IIS. Ele foi implementado como um arquivo de histórico que poderia ser restaurado facilmente e servido como um histórico utilizável de eventos que ocorreram com a configuração. Caso algo tenha errado durante instalações de aplicativos, atualizações ou alterações individuais na metabase, o usuário poderá restaurar para um estado de trabalho.

Com o IIS 7.0 e superior, a equipe do IIS queria a mesma "rede de segurança", mas não foi possível usar o recurso de histórico do IIS 6.0 devido a alterações na arquitetura de configuração. No IIS 7.0 e superior, resolvemos esse problema criando um serviço que monitora alterações no arquivo de configuração mestre, ApplicationHost.confige cria periodicamente instantâneos para recuperar posteriormente, se necessário.

Esse recurso é chamado de Histórico de Configuração do IIS. Este passo a passo ilustra como esse recurso funciona.

## Tarefa 1: Revisão das configurações padrão do configHistory

Nesta tarefa, você examinará as opções de configuração disponíveis após uma instalação padrão do IIS. Em tarefas posteriores, você modificará algumas dessas configurações para mostrar a flexibilidade do recurso para se ajustar ao ambiente.

### Etapa 1: Abrir applicationHost.config

1. Clique em **Iniciar**, clique em **Executar** e, na caixa **de diálogo Abrir:** digite o bloco de notas e **clique em** OK.  
   ![Captura de tela mostrando o menu IS Configuration History Run. O bloco de notas de entrada do menu está realçado.](using-configuration-history-with-iis-7-and-iis-8/_static/image1.png)
     
   **Figura 1: abrindo a configuração com o bloco de notas**
2. **Clique** Arquivo, em seguida, **Abrir** e no **nome do arquivo:** caixa de diálogo, digite `%windir%\system32\inetsrv\config\applicationHost.config`.
   **Clique** Abrir.  
   ![Captura de tela mostrando o menu IS Configuration Open. A entrada da caixa de diálogo Nome do arquivo está realçada.](using-configuration-history-with-iis-7-and-iis-8/_static/image5.png)
     
   **Figura 2: caminho ApplicationHost.config**
3. Para localizar a seção configHistory, clique em **CTRL**-**F** e insira configHistory e clique em **Localizar Próximo**.

Depois de abrir o arquivo mestre, você verá uma entrada como a seguinte para configHistory:

```
<sectionGroup name"system.applicationHost>
    <section name="applictionPools" allowDefinition="AppHostOnly" overrideMode="Deny" />
    <section name="configHistory" allowDefinition="AppHostOnly" overrideModeDefault="Deny" />
    <section name="customMetadata" allowDefinition="AppHostOnly" overrideModeDefault="Deny" /> 
    <section name="listenerAdapters" allowDefinition="AppHostOnly" overrideModeDefault="Deny" /> 
    <section name="log" allowDefinition="AppHostOnly" overrideModeDefault="Deny" /> 
    <section name="sites" allowDefinition="AppHostOnly" overrideModeDefault="Deny" /> 
    <section name="webLimits" allowDefinition="AppHostOnly" overrideModeDefault="Deny" /> 
</sectionGroup>
```

Observe que não há mais configurações para esse recurso no applicationHost.config. Esse comportamento é esperado porque, por padrão, o IIS usa os valores armazenados no esquema do IIS. Para ver as configurações padrão, abra o arquivo de esquema do IIS (IIS\_schema.xml.)

### Etapa 2: localizar padrões de configHistory no esquema do IIS

1. Clique em **Iniciar**, clique em **Executar** e, na caixa **de diálogo Abrir:** digite o bloco de notas e clique **em OK**.
2. Clique em **Arquivo**, depois em **Abrir** e, na caixa de diálogo **Nome do arquivo:**, digite `%windir%\system32\inetsrv\config\schema\iis\_schema.xml`.  
   ![Captura de tela mostrando o arquivo de esquema I S no Bloco de Notas, contendo as configurações padrão do configHistory.](using-configuration-history-with-iis-7-and-iis-8/_static/image9.png)
     
   **Figura 3: Esquema do IIS**– Para localizar a seção configHistory, clique em **CTRL-F** e insira configHistory.
3. No Windows Server® 2008, você verá o seguinte:  
   ![Captura de tela mostrando o arquivo de esquema I S no Windows Server 2008. O esquema configHistory padrão é realçado.](using-configuration-history-with-iis-7-and-iis-8/_static/image2.jpg)

   **Figura 4: Definição de esquema configHistory**

   Há quatro configurações configuráveis (atributos) para a seção configHistory:

   | Attribute | Configuração padrão | Definição |
   | --- | --- | --- |
   | **habilitado** | Verdade | Esse valor indica se o histórico de configuração está habilitado ou desabilitado |
   | **path** | `%systemdrive%\inetpub\history` | O caminho onde os diretórios de histórico são criados e armazenados |
   | **maxHistories** | 10 | O número máximo de diretórios retidos |
   | **período** | 00:02:00 | O tempo entre as verificações feitas para alterações |

### Resumo

Apesar de sua simplicidade relativa, não ignore essa tarefa. Ele oferece insights diretos sobre os atributos de configuração disponíveis para a seção configHistory. Posteriormente, você modificará essas configurações como uma demonstração da flexibilidade de recursos com base no ambiente.

## Tarefa 2: a validação da funcionalidade configHistory está funcionando corretamente

O objetivo dessa tarefa é ver configHistory em ação. Além disso, para administradores experientes que entendem o histórico de metabase do IIS 6.0, essa tarefa ajuda a aprender as diferenças entre os dois recursos.

O histórico de metabase era baseado em arquivo, em vez de baseado em diretório, como o IIS 7.0 e o histórico de configuração acima. Por exemplo, todos os backups no IIS 6.0 foram armazenados no mesmo local que não era personalizável. No IIS 7.0 e superior, cada cópia exclusiva é armazenada em seu próprio diretório no momento da criação. Nesta tarefa, você faz algumas alterações no arquivo de configuração do IIS usando o Gerenciador do IIS e revisa os resultados dessas alterações.

### Etapa 1: Criar um site

1. Clique em **Iniciar**, **Executar** e digite Inetmgr e Clique **em OK**.  
   ![Captura de tela mostrando a adição de um nome de servidor no menu I S Manager Open.](using-configuration-history-with-iis-7-and-iis-8/_static/image12.png)
     
   **Figura 5: Abrir o Gerenciador do IIS**– Clique duas vezes no nome do servidor, por exemplo, IIs7Server, para expandir a árvore de navegação.
2. Clique com o botão direito do mouse no servidor e escolha Adicionar Site.  
   ![Captura de tela mostrando a janela da árvore de navegação do Gerenciador de IS e a opção de menu Adicionar Site da Web. O servidor I S 7 está realçado.](using-configuration-history-with-iis-7-and-iis-8/_static/image14.png)
     
   **Figura 6: Adicionar Site**
3. No assistente **Adicionar Site** , insira informações para criar um novo Site. Por exemplo:  
   ![Captura de tela mostrando a janela Adicionar Assistente do Site. A janela contém informações de exemplo para criar um novo site.](using-configuration-history-with-iis-7-and-iis-8/_static/image16.png)
     
   **Figura 7: Assistente para Adicionar Site**
4. Clique em **OK.**
5. Agora você verá o novo site criado no gerenciador do IIS, como no seguinte:  
   ![Captura de tela mostrando uma nova home page do site, no Gerenciador do I S. O novo site, MyWebSite Home, está realçado na árvore de navegação.](using-configuration-history-with-iis-7-and-iis-8/_static/image18.png)
     
   **Figura 8: Home page do Gerenciador do IIS**

   Agora, validamos que um backup bem-sucedido das alterações de configuração foi capturado pelo Serviço Auxiliar de Host do Aplicativo.

### Etapa 2: localizar arquivos de histórico para applicationHost.config

Observação

É provável que sua cópia não seja exibida imediatamente após seguir estas etapas. Isso se baseia no valor padrão de dois minutos. Se você descobrir que nenhuma cópia foi criada, verifique se você esperou dois minutos.

1. Clique **em Iniciar**, **Executar** e abra `%systemdrive%\inetpub\history`.  
   ![Captura de tela mostrando a janela do i net pub. A pasta de histórico está realçada.](using-configuration-history-with-iis-7-and-iis-8/_static/image20.png)
     
   **Figura 9: Caminho padrão do histórico de configuração**
2. Clique duas vezes na pasta de histórico e localize a alteração mais recente.  
   ![Captura de tela mostrando a pasta de histórico e a alteração mais recente no ApplicationHost.config.](using-configuration-history-with-iis-7-and-iis-8/_static/image22.png)
     
   **Figura 10: Arquivo de histórico de ApplicationHost.config**

   Observação

   Se você não localizar sua cópia na pasta de histórico, verifique se o Serviço Auxiliar de Host do Aplicativo está em execução. Verifique se há erros potenciais gerados pelo IIS-AppHstSvc no Visualizador de Eventos.

![Captura de tela mostrando a janela Serviços, com o Serviço Auxiliar de Host de Aplicativo destacado.](using-configuration-history-with-iis-7-and-iis-8/_static/image24.png)
  
**Figura 11: Serviço auxiliar de host de aplicativo**

### Resumo

Nesta tarefa, demos algumas etapas para entender como funciona o recurso de histórico de configuração do IIS. Primeiro, fizemos alterações no ApplicationHost.config, acionando o Serviço Auxiliar de Host de Aplicativo para criar uma cópia no próximo período programado. Além disso, localizamos a cópia e validamos que a cópia foi criada com sucesso em `%systemdrive%\inetpub\history`.

## Tarefa 3: Modificando o número de diretórios (maxHistories) mantidos e os atributos de período

A meta dessa tarefa é modificar com êxito o número de arquivos de histórico retidos pelo IIS 7.0 e superior. Como os padrões são armazenados no esquema, devemos criar a seção configHistory em applicationHost.config e adicionar os atributos e valores apropriados para os atributos maxHistories e period.

Nesta tarefa, use o Bloco de Notas para modificar esse atributo para mostrar a flexibilidade e a simplicidade da edição ApplicationHost.config.

### Etapa 1: Abrir applicationHost.config

1. Clique em **Iniciar**, clique em **Executar** e, na caixa **de diálogo Abrir:** digite o bloco de notas e clique **em OK**.
2. **Clique** Arquivo, em seguida, **Abrir** e no **nome do arquivo:** caixa de diálogo, digite `%windir%\system32\inetsrv\config\applicationHost.config` e **clique em** Abrir.

A próxima etapa é adicionar a seção de configuração e, em seguida, adicionar o atributo com valor.

### Etapa 2: Adicionar seção configHistory e adicionar maxHistory

1. Para localizar a seção configHistory, clique em **CTRL-F** e insira system.applicationHost.  
   ![Captura de tela mostrando a caixa de diálogo 'Localizar' para encontrar a seção configHistory. A entrada system.applicationHost na caixa de diálogo está realçada.](using-configuration-history-with-iis-7-and-iis-8/_static/image26.png)
     
   **Figura 12: Localizando o grupo de seções system.applicationHost**
2. Agora que você está na seção certa, adicione o atributo e o valor corretos para maxHistory. Digite o texto a seguir no grupo de seções do system.applicationHost:

   ```
   <configHistory maxHistories="15" />
   ```

Observação

Para economizar tempo na próxima etapa, deixe o bloco de notas aberto após concluir essa tarefa.

Por último, valide se a alteração ocorreu. Sabemos que, por padrão, devemos ver apenas 10 diretórios por vez, conforme definido pelo esquema do IIS.

Depois de aumentarmos os valores máximos mantidos pelo IIS, precisamos de um método fácil para disparar muitos diretórios a serem criados. Para simular isso, reduzimos o valor padrão do atributo de período para seu mínimo padrão de 10 segundos. Isso aumenta o intervalo para verificar se há alterações e, portanto, potencialmente cria mais cópias dos arquivos em um ambiente dinâmico.

### Etapa 3: Definir atributo de período para configHistory

1. Usando a sessão anterior, adicione o atributo período adicionando período="00:00:10".
2. Clique **em Arquivo**, **Salvar** para confirmar alterações.

Após a conclusão, a seção configHistory tem a seguinte aparência:

```
<configHistory maxHistories="15" period="00:00:10" />
```

### Etapa 4: Executar script para causar a criação do histórico

1. Abra o Bloco de Notas. Copie e cole o seguinte:

   ```
   Option Explicit 

   ' Global objects, variables
   Dim objShell, argObj, oExec
   Dim strDirectory, strFile, strCmd, strFullCmd, stdIn, i

   set objShell = CreateObject("Wscript.Shell")
   strDirectory = "%windir%\system32\inetsrv\" 
   strFile = "AppCmd.exe"

   set ArgObj = Wscript.Arguments

   ' No args (default case), hard-code StdIn
   If ArgObj.Count = 0 Then 
   stdIn = 17

   i = 0 'initilize i

   For i = 0 to stdIn 
   ' Call Select Case to change Statement 
   strCmd = getStrCmd(i)
   strFullCmd = strDirectory & strFile & " " & strCmd

   Set oExec = objShell.Exec(strFullCmd) 

   Do While oExec.Status = 0
   WScript.Sleep 100
   Loop 

   If oExec.ExitCode <> 0 Then 
   ' Something wrong with the IIS Installation

   ' Is AppCmd installed on the machine? \inetsrv directory?
   msgBox "Executing AppCmd Command Failed. Please Try Again!"

   wscript.Quit
   End if 

   WScript.Sleep(2 * 1000)

   Next 

   ' Handle the case where we passed arguments to
   ' the script

   Else 
   stdIn = ArgObj(0)

   ' Same code as above but handle arguments being passed.

   i = 0 ' initialize i

   For i = 0 to stdIn 
   ' Call Select Case to change Statement
   strCmd = getStrCmd(i)
   strFullCmd = strDirectory & strFile & " " & strCmd

   Set oExec = objShell.Exec(strFullCmd)

   Do While oExec.Status = 0
   WScript.Sleep 100
   Loop 

   ' Validate that AppCmd calls succeeded by checking Error code
   If oExec.ExitCode <> 0 Then 
   ' Something wrong with the IIS Installation
   ' Is AppCmd installed on the machine? \inetsrv directory?
   msgBox "Executing AppCmd Command Failed. Please Try Again!"
   wscript.Quit
   End if 

   ' Go to sleep for x period (default: 20)
   WScript.Sleep(20 * 1000)

   Next 

   ' End the StdIn Input Tree

   End if 

   ' AppCMD Command Function 
   Function getStrCmd(MyIndex)
   Select Case (MyIndex)
   Case 0 ' set Server Runtime
   getStrCmd = "set config /section:serverRuntime /enabled:false"
   Case 1 ' set Default Document
   getStrCmd = "set config /section:defaultDocument /enabled:true"
   Case 2 'set httpRedirect
   getStrCmd = "set config /section:httpRedirect /enabled:true"
   Case 3 ' set Client Certificate Mapping Auth
   getStrCmd = "set config /section:security/authentication/clientCertificateMappingAuthentication /enabled:true"
   Case 4 ' set Directory Browse
   getStrCmd = "set config /section:directoryBrowse /enabled:true"
   Case 5 ' set httpRedirect
   getStrCmd = "set config /section:httpRedirect /enabled:false" 
   Case 6 ' set anonymousAuth
   getStrCmd = "set config /section:security/authentication/anonymousAuthentication /enabled:false"
   Case 7 ' set basicAuth
   getStrCmd = "set config /section:security/authentication/basicAuthentication /enabled:true"
   Case 8 ' set digestAuth
   getStrCmd = "set config /section:security/authentication/digestAuthentication /enabled:true"
   Case 9 ' set client cert mapping auth
   getStrCmd = "set config /section:security/authentication/clientCertificateMappingAuthentication /enabled:false"
   Case 10 ' set windows auth
   getStrCmd = "set config /section:security/authentication/windowsAuthentication /enabled:true"
   Case 11 ' server runtime
   getStrCmd = "set config /section:serverRuntime /enabled:true"
   Case 12 ' set Server Runtime
   getStrCmd = "set config /section:serverRuntime /enabled:false"
   Case 13 ' set Server Runtime
   getStrCmd = "set config /section:serverRuntime /enabled:true"
   Case 14 ' set Server Runtime
   getStrCmd = "set config /section:serverRuntime /enabled:true"
   Case 15 ' set Server Runtime
   getStrCmd = "set config /section:serverRuntime /enabled:true"
   Case 16 ' set Server Runtime
   getStrCmd = "set config /section:serverRuntime /enabled:true"
   Case 17 ' set Server Runtime
   getStrCmd = "set config /section:serverRuntime /enabled:true"

   End select 
   End Function
   ```
2. Salve-o como ConfigHst.vbs (verifique se você escolheu Todos os Arquivos para evitar salvar como um arquivo de texto).  
   ![Captura de tela mostrando a janela Salvar como.](using-configuration-history-with-iis-7-and-iis-8/_static/image28.png)
     
   **Figura 13: Salvando o script VBS**
3. Execute este arquivo VBS abrindo um prompt de comando, localizando o local do arquivo onde salvo e digite o seguinte:

   ```
   cscript //nologo configHst.vbs
   ```

   Esse script faz chamadas para modificar a configuração do IIS a cada 15 segundos. Esse é o tempo suficiente para o histórico de configurações verificar se há alterações e criar um backup. Depois de concluir isso, vemos uma infinidade de backups de configuração em nosso diretório de backup.
4. Em seguida, abra o caminho padrão para o configHistory clicando em **Iniciar**, em seguida, **Executar** e digitando `%systemdrive%\inetpub\history`
5. Você vê uma pasta de backup como CFGHISTORY\_0000001, CFGHISTORY\_0000002 e assim por diante.

Depois de executar esse script, observe como esse recurso exclui o mais antigo ao atingir o máximo, como maxHistories. No nosso caso, ao alcançar CFGHISTORY\_0000000015, o item mais antigo foi excluído antes de criar o décimo sexto diretório.

![Captura de tela mostrando a janela do diretório de histórico.](using-configuration-history-with-iis-7-and-iis-8/_static/image30.png)
  
**Figura 14: Diretório de Histórico com valor de maxistories de 15**

### Resumo

Nesta tarefa, modificamos com êxito o número de backups armazenados pelo IIS. A configuração padrão de 10 é suficiente para muitos; no entanto, para ambientes dinâmicos, como servidores de hospedagem compartilhados em que os clientes estão se inscrevendo em sites aleatoriamente e com frequência, é uma boa prática ter um histórico mais completo.

Nesta tarefa, modificamos os atributos maxHistories e period para a seção configHistory e, em seguida, produzimos várias alterações que mostrariam que armazenamos mais de 10 (o padrão) cópias.

## Tarefa 4: Alterando o caminho padrão para salvar backups configHistory

O número de diretórios de histórico e arquivos associados armazenados pelo IIS é configurável para ser flexível dependendo do ambiente. Para muitos casos, armazenar os arquivos de histórico no caminho do sistema (ou seja, `%systemdrive%inetpub\history`) não é desejável. Ao contrário do histórico no IIS 6.0, que não tinha nenhum mecanismo configurável para o histórico de configurações, o histórico de configuração do IIS 7.0 e acima agora oferece a capacidade de alterar onde o IIS armazena os diretórios e arquivos de histórico.

Usamos nesta tarefa um método para modificar a configuração– nesse caso, a interface de linha de comando do IIS. O objetivo dessa tarefa não é apenas aprender sobre como alterar o caminho para diretórios de histórico de configuração, mas também se familiarizar com AppCmd.exe, a interface de linha de comando do IIS para dados de configuração e runtime.

### Etapa 1: Criar diretório para histórico

1. **Clique** Inicie, selecione **Executar** e, em seguida, **digite CMD** e Clique **em OK**.
2. No prompt de comando, crie seu diretório digitando o seguinte:

   md MyWebHistory

Essa etapa é necessária porque nenhum diretório será criado automaticamente se ele não existir. Se você não fizer essa etapa, verá o seguinte:  
![Captura de tela mostrando a janela informações de Propriedades do Evento.](using-configuration-history-with-iis-7-and-iis-8/_static/image32.png)
  
**Figura 15: Mensagem de evento se as permissões forem inadequadas para o caminho do histórico**

### Etapa 2: Localizar AppCmd.exe

1. **Clique** Inicie, selecione **Executar** e, em seguida, **digite CMD** e Clique **em OK**.
2. No prompt de comando, altere os diretórios digitando o seguinte:

   ```
   Cd %windir%\system32\inetsrv
   ```
3. Para se familiarizar com a sintaxe do AppCmd, digite o seguinte:

   ```
   Appcmd /?
   ```

Neste ponto, altere o valor do atributo de caminho para um valor mais apropriado em seu ambiente. Nesse caso, altere-o para um diretório personalizado na partição do sistema – o `%systemdrive%\MyWebHistory` diretório.

Observação

Geralmente, você deve mover esses dados para uma partição separada ou melhor, para uma unidade em um controlador diferente, como D:, etc. Altere o valor do caminho usando AppCmd: -

#### Etapa 3: Alterar o valor do caminho para configHistory

1. Para se familiarizar ainda mais com AppCmd.exe, abra um prompt de comando e digite o seguinte:

   ```
   Appcmd set config –section:?
   ```

   Este comando ajuda você a aprender a examinar as seções disponíveis no momento permitidas para edição.

   ```
   Appcmd list config –section:configHistory –config:*
   ```

   Este comando ajuda você a entender quais são os atributos e valores atualmente definidos em nosso sistema.
2. Agora, emita o seguinte comando para alterar o atributo de caminho do padrão de `%systemdrive%inetpub\history` para `%systemdrive%MyWebHistory` –

   ```
   Appcmd set config -section:configHistory –path:"%systemdrive%MyWebHistory"
   ```
3. Para validar a alteração, digite o seguinte e verifique se maxHistories e period estão definidos adequadamente.

```
<configHistory maxHistories="15" period="00:00:10" path="%systemdrive%\MyWebHistory" />
```

Você verá o seguinte:  
![Captura de tela do console de Comando do Administrador.](using-configuration-history-with-iis-7-and-iis-8/_static/image34.png)
  
**Figura 16: Usando o AppCmd para listar Configuração**

Por fim, produziremos alterações na configuração fazendo com que um backup seja disparado. Observe o novo local para os diretórios e arquivos.

### Etapa 4: executar novamente o script anterior

- Execute ConfigHst.vbs digitando o seguinte:

```
cscript //nologo configHst.vbs
```

Se você verificar `%systemdrive%\MyWebHistory`, verá vários diretórios com nomes de pasta semelhantes a CFGHISTORY\_0000001, 2 e assim por diante.

### Resumo

É uma prática padrão mover dados importantes e voláteis da partição do sistema de servidor (`%systemdrive%` por padrão) para outras partições ou unidades. Nesta tarefa, você alterou com êxito o local de destino para os diretórios de histórico de configuração do IIS.

## Tarefa 5: Restaurando a configuração de um arquivo de backup

Não é útil ter um recurso de histórico sem oferecer um método para restaurar uma configuração de trabalho anterior. A finalidade dessa tarefa é orientar você em um processo manual para restaurar a partir de uma cópia de sua configuração criada anteriormente.

### Etapa 1: Listar os backups disponíveis

1. Clique em **Iniciar**, **Executar** e digite **CMD** e clique **em OK**.
2. Altere para o diretório inetsrv usando o seguinte comando: `cd %windir%\system32\inetsrv`.
3. Para obter o caminho atualmente configurado para a seção configHistory, digite o seguinte:

```
appcmd list backups
```

Esse comando listará os backups disponíveis, incluindo backups manuais feitos com o comando appcmd add backup, bem como backups feitos pelo serviço de histórico de configuração. Você pode usar o comando de backup de restauração appcmd para restaurar qualquer um deles, conforme mostrado na próxima etapa

### Etapa 2: Restaurar o backup

Depois de seguir as instruções na etapa acima para listar os backups, selecione o backup que você deseja restaurar e restaurá-lo digitando o seguinte:

appcmd restaurar backup *BACKUPNAME*

Onde *BACKUPNAME* é um dos backups listados na etapa 1, por exemplo, CFGHISTORY\_0000000016.

Você também pode pesquisar manualmente os arquivos de configuração na pasta de backup para determinar qual backup você deseja restaurar:

Clique em **Iniciar**, **Executar** e digite **CMD** e clique **em OK**.

1. Mude para o diretório do histórico usando as informações na Etapa 1, acima.
2. Use o comando findstr do Windows para localizar a alteração que você está procurando. Nesse caso, localize a configuração com o DirectoryBrowse definido como falso.

```
Findstr /S /I /C:"directoryBrowse enabled=\"false\"" *.config
```

Isso pesquisa o diretório atual e todos os subdiretórios para o diretório de cadeia de caracteresBrowse são iguais a false. Isso retorna apenas um item, por exemplo, CFGHISTORY\_0000000016, que indica o que restauraremos.

### Resumo

Nesta tarefa, localizamos uma cópia de histórico e a restauramos. Essa tarefa é a ilustração mais importante do recurso de histórico de configurações, pois oferece a capacidade de reverter para uma configuração de trabalho anterior com facilidade.

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
