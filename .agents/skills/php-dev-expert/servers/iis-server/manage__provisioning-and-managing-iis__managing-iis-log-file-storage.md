# Gerenciando o armazenamento de arquivos de log do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/provisioning-and-managing-iis/managing-iis-log-file-storage

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

# Gerenciando o armazenamento de arquivos de log do IIS

Comentários

por [Jim van de Erve](https://twitter.com/jimvde)

Você pode gerenciar a quantidade de espaço em disco do servidor que os arquivos de log do IIS (Serviços de Informações da Internet) consomem usando compactação, armazenamento remoto e exclusão com script.

## Visão geral

Os arquivos de log gerados pelo IIS podem, ao longo do tempo, consumir uma grande quantidade de espaço em disco. Os logs podem potencialmente preencher um disco rígido inteiro. Para atenuar esse problema, muitos usuários desativam completamente o registro em log. Felizmente, há alternativas para fazer isso, como o seguinte:

- [Habilitar compactação de pasta](#00)
- [Mover a pasta de log para um sistema remoto](#01)
- [Exclua arquivos de log antigos por script.](#02)

As mitigações acima são descritas nas seções abaixo. Talvez você também queira fazer o seguinte para controlar o uso do disco:

- Limitar o tamanho do log omitindo campos de propriedade desnecessários
- Criar logs separados para sites e aplicativos
- Preserve os recursos de memória usando o registro em log binário centralizado.

Para obter mais informações, consulte [Configuração de logs no IIS](manage__provisioning-and-managing-iis__configure-logging-in-iis.md).

## Habilitar compactação de pasta

Os arquivos de log do IIS são compactados para cerca de 2% do seu tamanho original. Habilite a compactação de um arquivo de log da seguinte maneira. Você deve ser um administrador para executar este procedimento.

1. Clique no ícone do **Gerenciador de Arquivos** na barra de ícones.
2. Mover para a pasta que contém arquivos de log do IIS (por padrão). `%SystemDrive%\inetpub\logs\LogFiles`
3. Clique com o botão direito do mouse na pasta e clique em **Propriedades**.
4. Na guia **Geral** da página **Propriedades** , clique em **Avançado**.
5. Clique **em Compactar o conteúdo para economizar espaço em disco** e clique **em OK**.
   ![Habilitando a compactação](managing-iis-log-file-storage/_static/image1.jpg)
6. Clique em **Aplicar** e selecione se deve compactar somente a pasta ou a pasta, suas subpastas e seus arquivos.
7. Clique em **OK.** Verifique se o conteúdo da pasta está compactado. O nome da pasta e o nome de cada arquivo devem ser coloridos em azul e o tamanho de um arquivo de compactação deve ser menor.

Essa é uma maneira simples de reduzir o uso do disco. No entanto, não é uma solução final, pois o uso do disco ainda cresce ao longo do tempo e pode eventualmente preencher o disco rígido.

Se a pasta já contiver uma quantidade significativa de dados, o computador poderá demorar um pouco para compactar seu conteúdo. Observe também que esse processo único pode diminuir a velocidade do computador durante a compactação inicial, portanto, se esse for um servidor de produção, execute essa operação fora do horário de pico para evitar a degradação do serviço.

## Mover a pasta de log para um sistema remoto

Os arquivos de log do IIS são armazenados por padrão na `%SystemDrive%\inetpub\logs\LogFiles` pasta do servidor IIS. A pasta é configurada na propriedade Diretório na página de Log para o servidor ou para um site individual. Para diminuir o problema do uso do disco de log, você pode mover seus arquivos de log do IIS para uma pasta em outro servidor que tenha mais espaço. Esse servidor pode estar no mesmo domínio que o servidor IIS local ou em um domínio diferente. Você pode salvar arquivos de log remotamente para todo o servidor ou para sites individuais.

Essa solução pode ajudar a segurança do sistema, pois se um disco rígido local falhar, os dados de log ainda estarão disponíveis no armazenamento remoto. Além disso, os arquivos de log podem ser consumidos por sistemas de análise.

Altere o local de um arquivo de log do IIS para um compartilhamento remoto da seguinte maneira:

1. Crie um diretório de arquivo de log em um servidor remoto que esteja no mesmo domínio que o servidor Web local executando o IIS.
2. Na página **Propriedades** da pasta, na guia **Compartilhamento** , clique em **Compartilhar** para que o diretório seja compartilhado. Na guia **Segurança** , atribua grupos e usuários com as permissões apropriadas. Verifique se os grupos e usuários apropriados podem ler e gravar nos arquivos de log.
   ![Propriedades da Pasta de Log](managing-iis-log-file-storage/_static/image2.jpg)

   Para obter mais informações, consulte [Configurando permissões para registro em log remoto](https://technet.microsoft.com/library/cc779701(v=ws.10).aspx).

   Observação: se você quiser gravar arquivos de log em um servidor remoto em um domínio diferente, consulte [Configurando uma sessão nula para registro em log entre domínios](https://technet.microsoft.com/library/cc728059(v=ws.10).aspx).
3. Abra o **Gerenciador do IIS** no servidor Web local.
4. No **Gerenciador do IIS**, no painel **Conexões** , clique no servidor ou em um site.
5. Clique duas vezes em **Logging**.
   ![Ícone de Log](managing-iis-log-file-storage/_static/image3.jpg)
6. Na caixa **de texto Diretório** , insira o caminho UNC completo do diretório que você criou no servidor remoto. Por exemplo, digite \servername\Logs, em que "servername" representa o nome do servidor remoto e "Logs" representa o nome do compartilhamento em que os arquivos de log são armazenados.
   ![Página de Logs](managing-iis-log-file-storage/_static/image4.jpg)
7. No painel **Ações** , clique em **Aplicar** e clique em **OK**. Todos os sites dentro do diretório devem começar a registrar dados no compartilhamento remoto.

   Para obter mais informações, consulte [Log Remoto](https://technet.microsoft.com/library/cc786172(v=ws.10).aspx).

## Excluir arquivos de log antigos por script

Você pode controlar o uso de disco de arquivos de log executando um script que exclui automaticamente arquivos de log com mais de uma determinada idade. Executar esse script em uma tarefa agendada manterá o problema de um preenchimento de disco sob controle sem manutenção constante.

O VBScript a seguir verificará a idade de cada arquivo de log em uma pasta e excluirá qualquer arquivo de log com mais de uma idade especificada. Para personalizar o script para suas finalidades, basta alterar o nome e o caminho da pasta na linha 1 do script e alterar a idade máxima para o valor desejado em dias, na linha 2.

```
sLogFolder = "c:\inetpub\logs\LogFiles"
iMaxAge = 30   'in days
Set objFSO = CreateObject("Scripting.FileSystemObject")
set colFolder = objFSO.GetFolder(sLogFolder)
For Each colSubfolder in colFolder.SubFolders
        Set objFolder = objFSO.GetFolder(colSubfolder.Path)
        Set colFiles = objFolder.Files
        For Each objFile in colFiles
                iFileAge = now-objFile.DateCreated
                if iFileAge > (iMaxAge+1)  then
                        objFSO.deletefile objFile, True
                end if
        Next
Next
```

O script acima examinará todas as subpastas, portanto, processará logs para TODOS os sites dentro e abaixo da pasta especificada. Se você quiser limitar o processo a apenas um site, altere o caminho adequadamente.

Para executar o script manualmente, execute o seguinte script em uma linha de comando de administrador: `cscript.exe c:\scripts\retentionscript.vbs`

Usar um script para excluir arquivos de log é uma solução confiável e de longo prazo para o problema dos arquivos de log que consomem espaço em disco. Se você automatizar o processo, conforme mostrado abaixo, ele não exigirá manutenção constante.

### Executar o script como uma tarefa agendada

Você pode automatizar a tarefa de excluir arquivos de log por script criando um agendamento de tarefas do Windows para executar o script periodicamente. Você pode agendar o script a ser executado a qualquer momento usando o Agendador de Tarefas do Windows. A forma como você configura a tarefa agendada deve ser coordenada com a configuração das opções de rotação de arquivo de log.

1. Abra **o Gerenciador de Servidores**, clique no menu **Ferramentas** e clique em **Agendador de Tarefas**.
2. No painel **Ações** da caixa de diálogo **Agendador de Tarefas** , clique em **Criar Tarefa**.
   ![Criar controle de tarefa](managing-iis-log-file-storage/_static/image5.jpg)
3. Na guia **Geral** da caixa de diálogo **Criar Tarefa** , insira um nome para a tarefa, como "Excluir Arquivos de Log". Defina as propriedades de segurança, selecionando uma conta de usuário com privilégios suficientes para executar o script.
   ![Caixa de diálogo Criar Tarefa](managing-iis-log-file-storage/_static/image6.jpg)
4. Clique na guia **Gatilhos** e clique em **Novo**. Na caixa de diálogo **Novo Evento**, defina **Iniciar a tarefa** como **em um horário**. Selecione a periodicidade, por exemplo, **Diário**. Insira a data **de** início, selecione configurações mais avançadas e verifique se **Habilitado** está selecionado se você estiver pronto para iniciar o agendamento. Clique em **OK.**
   ![Caixa de diálogo Novo Gatilho](managing-iis-log-file-storage/_static/image7.jpg)
5. Clique na guia **Ações** e clique em **Novo**. Na caixa de diálogo **Nova Ação** , selecione um valor para **a Ação**, nesse caso, **inicie um programa**. Em **Programa/script**, **insira cscript** e, em **Adicionar argumentos (opcional), insira** o caminho e o nome do arquivo de script, por exemplo, `C:\iis\Log\_File\_Deletion.vbs`. Clique em **OK.**
   ![Caixa de diálogo Nova Ação](managing-iis-log-file-storage/_static/image8.jpg)
6. Clique em **OK.**
7. Verifique se a tarefa foi adicionada ao painel **Tarefas Ativas** .
8. Clique com o botão direito do mouse na nova tarefa e selecione **Executar**.
   ![Caixa de diálogo Agendador de Tarefas](managing-iis-log-file-storage/_static/image9.jpg)
9. Navegue até a pasta na qual o script foi executado e verifique se os arquivos de log apropriados foram excluídos.
10. Navegue de volta para o Agendador de Tarefas, clique com o botão direito do mouse na tarefa e clique em **Encerrar** para que o status retorne a **Pronto** e a tarefa esteja pronta para execuções agendadas.

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
