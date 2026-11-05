# Conheça o provedor WMI do IIS 7.0 usando o CIM Studio | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio

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

# Conheça o provedor WMI do IIS 7.0 usando o CIM Studio

Comentários

por a equipe do IIS

## Introdução

Este documento apresenta o WMI CIM Studio, uma ferramenta que fornece uma interface visual para explorar namespaces WMI. Usando o namespace "WebAdministration" do IIS, você aprenderá a enumerar classes em um namespace, exibir as propriedades e métodos em uma classe, pesquisar classes e propriedades para uma palavra específica como "restrição" e muito mais – tudo sem escrever um script.

Antes de fazer qualquer coisa no WMI, você deve se conectar a um namespace. A primeira seção deste documento descreve como baixar e abrir o CIM Studio, enumerar todos os namespaces e conectar-se a um namespace específico.

A segunda parte deste documento mostra como explorar classes em um namespace exibindo suas propriedades e métodos e metadados de propriedade/método, como se uma propriedade é somente leitura ou leitura/gravação. Por fim, você obtém instâncias de objeto e interage com elas definindo propriedades e executando métodos. Isso é WMI, visual e desmystificado.

## Antes de iniciar

### Instalar o IIS

O IIS 7.0 ou superior deve ser instalado para concluir as etapas neste documento. Se você puder acessar `http://localhost` e receber a Página Padrão do IIS "Em Construção", então o IIS está instalado. Se o IIS não estiver instalado, consulte [Como instalar o IIS no Windows Vista](install__installing-iis-7__installing-iis-on-windows-vista-and-windows-7.md) para obter instruções de instalação.

### Instalar o provedor WMI

Instale o provedor WMI do IIS selecionando o componente **Scripts e Ferramentas de Gerenciamento do IIS** em **Ferramentas de Gerenciamento** (ou Ferramentas de Gerenciamento da Web). No Windows Vista, isso está na caixa de diálogo Recursos do Windows nos Serviços de Informações da Internet. No Windows Server® 2008, isso está no Gerenciador de Servidores na função IIS (Servidor Web).

[![Captura de tela do painel Ferramentas de Gerenciamento expandido com Scripts e Ferramentas de Gerenciamento do IIS selecionados.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image1.jpg)

### Instalar ferramentas WMI (inclui o CIM Studio)

Instale o pacote de Ferramentas do WMI antes de iniciar.

### Privilégios necessários e UAC (Controle de Conta de Usuário)

Você deve ser um administrador para se conectar ao namespace WMI WebAdministration. Isso significa que você está conectado como:

- A conta de Administrador integrada no Servidor Longhorn
- Se você é um membro do grupo Administradores, você desativou o UAC (Controle de Conta de Usuário).
- Um membro do grupo Administradores e UAC está habilitado

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

*Saída esperada*:

```
BACKUP object "IIS7_WMI_CIMStudioLab" added
```

- Depois de concluir, restaure o IIS para seu estado original abrindo o prompt de comando como administrador e digitando `%windir%\system32\inetsrv\appcmd restore backup IIS7\_WMI\_CIMStudioLab`.

*Saída esperada*:

```
Restored configuration  from backup "IIS7_WMI_CIMStudioLab"
```

## 1. Conectar-se ao namespace WebAdministration

Clique **em Iniciar**, clique em **Todos os Programas**, clique em **Ferramentas WMI** e clique em **WMI CIM Studio**.

[![Captura de tela que mostra o painel Ferramentas do W M I expandido com o W M I C I M Studio selecionado.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image4.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image3.jpg)

Se você for solicitado com a caixa de diálogo a seguir, clique em Fechar.

[![Captura de tela da caixa de diálogo Barra de Informações que alerta você sobre as condições relacionadas à segurança.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image6.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image5.jpg)

Se a barra de informações amarela indicar que o Internet Explorer está bloqueando o conteúdo ativo, clique com o botão direito do mouse na barra de informações e clique na opção **Permitir Conteúdo Bloqueado...** Em seguida, você receberá um Aviso de Segurança perguntando se tem certeza de que deseja permitir que esse arquivo execute o conteúdo ativo; clique em Sim.

[![Captura de tela da barra de informações amarela indicando que o Internet Explorer está bloqueando o conteúdo ativo. A guia Permitir Conteúdo Bloqueado está selecionada.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image8.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image7.jpg)

Observação

Se você quiser evitar esse aviso de segurança no futuro, clique no menu suspenso **Ferramentas** no lado direito do Internet Explorer 7, selecione **Opções da Internet...**, clique na guia **Avançado** , role para baixo até as configurações de Segurança e verifique "Permitir que o conteúdo ativo seja executado em arquivos no meu computador". Clique em **OK.**

Você verá a caixa de diálogo a seguir quando o CIM Studio abrir. Essa caixa de diálogo permite que você se conecte a um namespace WMI específico. Clique no botão de navegação destacado em vermelho abaixo.

[![Captura de tela que mostra a caixa de diálogo Conectar ao namespace. O botão Procurar está circulado em vermelho.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image2.gif)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image1.gif)

O botão "Procurar" exibe a janela de diálogo de navegação do namespace abaixo. Clique no botão **Ligar** .

[![Captura de tela que mostra a caixa de diálogo Procurar por espaço de nome, mostrando o campo para Nome do Computador e o botão Conectar.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image10.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image9.jpg)

O CIM Studio agora abre uma caixa de diálogo de logon, conforme mostrado abaixo. Clique em **OK.**

[![Captura de tela do Logon do W M I C I M Studio exibindo campos para nome de usuário e senha.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image4.gif)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image3.gif)

A caixa de diálogo mostra uma exibição em árvore dos namespaces disponíveis sob "raiz" após a conexão ao namespace raiz. Role até a parte inferior para ver "WebAdministration", o novo namespace WMI do IIS. Clique duas vezes no ícone da pasta **WebAdministration** para se conectar ao namespace.

[![Imagem da tela da visualização em árvore dos espaços de nome disponíveis na raiz. O ícone da pasta Administração Web está selecionado.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image12.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image11.jpg)

O CIM Studio abre novamente uma caixa de diálogo de logon. Clique em **OK.**

[![Captura de tela que mostra a caixa de diálogo Logon do W M I C I M Studio com o nome de usuário e as caixas de senha.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image6.gif)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image5.gif)

Depois de se conectar com êxito ao namespace WebAdministration, o lado esquerdo da janela do CIM Studio é semelhante à captura de tela abaixo. Verifique se o namespace é chamado de "root\WebAdministration", conforme mostrado abaixo.

[![Captura de tela das janelas do C I M Studio com o modo de exibição de árvore do painel Classe do Sistema e Objeto expandido.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image14.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image13.jpg)

## 2. Explorar classes

A lista de classes no namespace WebAdministration é semelhante à captura de tela abaixo. As classes circuladas em vermelho são as classes base para o provedor WebAdministration; as classes que não são circuladas e começam com um sublinhado duplo "\_\_" são classes padrão WMI que não estão relacionadas especificamente ao provedor WebAdministration.

[![Captura de tela da lista de classes no espaço de nomes da Administração Web exibindo as classes base do provedor de Administração Web destacadas em vermelho.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image16.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image15.jpg)

Expanda a árvore sob a classe **Object** . Expanda a árvore sob a classe **ConfiguredObject** . Agora você vê uma exibição de árvore que contém objetos de servidor Web familiares, como Site e Aplicativo, conforme mostrado abaixo. Esses objetos são o foco central do namespace WMI WebAdministration e você provavelmente passará a maior parte do tempo interagindo com esses objetos.

[![A captura de tela mostra a exibição de árvore da classe Object. O nó Objeto Configurado é expandido mostrando objetos de servidor, como Site e Aplicativo.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image18.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image17.jpg)

Selecione o objeto **Site** . Quando você seleciona um objeto, o painel direito da janela do CIM Studio fornece informações sobre esse objeto. A captura de tela abaixo mostra a guia Propriedades. A guia Propriedades mostra os nomes das propriedades do Site, seu tipo e seu valor. Observe que a coluna de valor contém principalmente cadeias de caracteres "<vazias>", pois estamos examinando a definição do objeto Site, não uma instância do Site (examinamos instâncias posteriormente). Observe que todas as propriedades que começam com o sublinhado duplo "\_\_" são propriedades de classe WMI padrão e podem ser ignoradas durante o aprendizado das noções básicas do WMI.

[![Captura de tela do objeto Site e do nó Objeto Configurado expandidos com o Site destacado.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image20.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image19.jpg)

Para saber se a propriedade **ID **do Site é somente leitura ou leitura/gravação, clique com o botão direito na** ID** e selecione **Qualificadores de Propriedade...**

A caixa de diálogo abaixo mostra os "qualificadores" para a propriedade Id. Qualificadores são metadados sobre uma propriedade. Os qualificadores de "leitura" e "gravação" descrevem se uma propriedade pode ser lida ou escrita; os qualificadores de leitura e gravação têm um valor verdadeiro para a propriedade Id, portanto, essa propriedade é de leitura/gravação.

[![Captura de tela da caixa de diálogo Qualificadores para ID de propriedade com os qualificadores de leitura e gravação. Os valores dos qualificadores de leitura e gravação são definidos como True.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image23.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image22.jpg)

1. Clique no botão **Cancelar** .
2. Clique na guia **Métodos** para ver os métodos site, conforme mostrado abaixo.

[![Captura de tela do W M I C I M Studio mostrando a guia Métodos.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image25.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image24.jpg)

Para saber quais parâmetros o método Create usa, clique com o botão direito do mouse no método **Create** e selecione **Editar Parâmetros de Método**. Este item de menu inicia uma caixa de diálogo que contém uma lista dos parâmetros para o método Create, conforme mostrado abaixo. O tipo de retorno do método é especificado na parte inferior da caixa de diálogo. Tome cuidado para não modificar nenhum dos parâmetros do método; use apenas essa caixa de diálogo para exibir os parâmetros do método.

[![Captura de tela da caixa de diálogo Parâmetros do Método com uma lista de parâmetros para o método Create. A caixa Valor retornado é exibida na parte inferior da caixa de diálogo.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image27.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image26.jpg)

Clique no botão **Cancelar** .

Dê outra olhada nas propriedades do Site clicando na guia **Propriedades** no painel direito. A propriedade Bindings tem um tipo "matriz de objeto:BindingElement"; ou seja, uma matriz de objetos BindingElement. Em seguida, dê uma olhada na classe BindingElement para ver quais propriedades um BindingElement tem.

Clique no botão **Pesquisar** , circulado em vermelho abaixo.

[![Captura de tela do Botão Pesquisar circulado em vermelho no W M I C I M Studio.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image29.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image28.jpg)

Digite **BindingElement** na caixa de texto de pesquisa e clique no botão **Ir!** A caixa de texto "Resultados da pesquisa:" exibe uma entrada chamada BindingElement.

[![A captura de tela mostra a caixa de diálogo Pesquisar por Classe com o Elemento de Vinculação digitado na caixa de pesquisa de texto.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image31.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image30.jpg)

Clique duas vezes na entrada **BindingElement** nos resultados da pesquisa para ir para a definição da classe BindingElement.

[![Captura de tela da definição da classe Binding Element no painel W M I C I M Studio.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image33.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image32.jpg)

## 3. Obter instâncias de objeto

Use a pesquisa para localizar a classe "Site" novamente. Clique no botão **Instâncias de**, marcado por um círculo vermelho abaixo, para visualizar todas as instâncias do objeto Site.

[![Captura de tela que mostra a parte superior do painel W M I C I M Studio com o botão 'Instâncias de' circulado em vermelho.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image35.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image34.jpg)

Todas as instâncias do objeto Site são exibidas em texto azul no painel direito do CIM Studio, conforme mostrado abaixo. Clique duas vezes na instância do **Site Padrão** para obter informações detalhadas sobre esse objeto site.

[![Captura de tela do painel Site no W M I C I M Studio mostrando todas as instâncias do objeto Site em azul. A instância do Site padrão é exibida em azul.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image37.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image36.jpg)

Agora, o CIM Studio exibe informações sobre o Site Padrão. O nome do site é exibido na parte superior do painel direito e as propriedades na guia Propriedade têm valores reais em vez de "<vazios>". A propriedade "LogFile" tem um botão rotulado **Object** em sua coluna Value em vez de um valor real. Clique neste botão **Objeto** .

[![Captura de tela da guia Propriedades mostrando o Arquivo de Log, o Arquivo de Log do Site do Objeto e o Objeto circulados em vermelho. O Botão Objeto é mostrado na coluna Valor.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image39.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image38.jpg)

O botão **Objeto** inicia uma caixa de diálogo que mostra as propriedades do objeto LogFile, conforme mostrado abaixo. Essas propriedades habilitam/desabilitam o registro em log, definem o formato do arquivo de log, especificam o diretório de log etc.

[![Captura de tela da janela de diálogo Objeto Inserido que mostra as propriedades do objeto Arquivo de Log.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image41.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image40.jpg)

Clique no campo Valor para a propriedade **LocalTimeRollover**. Clique na lista suspensa para ver as opções desse valor e selecione "true". Este campo agora mostra "true"; o texto está em azul porque essa propriedade foi modificada.

[![A captura de tela da caixa de diálogo Embedded mostra o campo Valor da propriedade Transição de Hora Local. Verdadeiro é selecionado na lista suspensa na coluna Valor.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image43.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image42.jpg)

Clique no botão **OK**. O botão Salvar, mostrado abaixo em vermelho, ficou disponível porque a propriedade LogFile.LocalTimeRollover foi modificada. Clique no botão **Salvar** .

[![Captura de tela do botão Salvar circulado em vermelho.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image45.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image44.jpg)

Para ver essa alteração na configuração, clique em **Iniciar**, clique em **Executar** e digite `notepad %windir%\system32\inetsrv\applicationHost.config`. Clique no menu **Editar** e selecione **Localizar**. Digite "localTimeRollover" para localizar a configuração recém-adicionada. A configuração deve ser semelhante ao XML abaixo e a propriedade de configuração localTimeRollover deve ser definida como "true".

```
<site name="Default Web Site" id="1">
   <application path="/">
      <virtualDirectory path="/" physicalPath="C:\inetpub\wwwroot" />
   </application>
   <bindings>
      <clear />
      <binding protocol="http" bindingInformation="*:80:" />
   </bindings>
   <logFile localTimeRollover="true" />
</site>
```

Feche o arquivo applicationHost.config (clique em **Não** se o bloco de notas perguntar se você deseja salvar as alterações). Agora, executamos um dos métodos do Site. Clique na guia **Métodos** , clique com o botão direito do mouse no método **GetState** e selecione **Executar Método**. Clique no botão **Executar** .

[![Captura de tela da caixa de diálogo Parâmetros do Método, mostrando a caixa para Parâmetros na ordem de qualificação de ID. O valor de retorno, destacado em vermelho, é 1 ou configurado como iniciado.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image47.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image46.jpg)

O valor retornado é 1 ou "Iniciado". Como sabemos disso? Clique em **Fechar**. Clique com o botão direito do mouse no método **GetState** e selecione **Qualificadores de Método...**. Isso apresenta os metadados do método GetState, incluindo ValueMap e Values, que descrevem como os valores retornados são mapeados para dados legíveis para humanos. Clique no botão **Matriz** na linha de Valores para visualizar os diferentes estados.

[![Captura de tela da caixa de diálogo Get State do método Qualifiers mostrando os metadados do método Get State. A matriz é realçada na coluna Valor.](get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image49.jpg)](https://learn.microsoft.com/pt-br/iis/manage/scripting/get-to-know-the-iis-wmi-provider-using-cim-studio/_static/image48.jpg)

## Resumo

Neste documento, você aprendeu a se conectar a um namespace WMI, como pesquisar uma classe, como descobrir as propriedades e os métodos de uma classe, como determinar se uma propriedade é leitura/gravação ou somente leitura, como encontrar os parâmetros para um método, como obter instâncias de um objeto específico, como alterar interativamente as propriedades em uma instância de objeto e como exibir as propriedades de um objeto inserido.

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
