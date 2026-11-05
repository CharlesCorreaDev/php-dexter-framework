# Inicialização de aplicativo do IIS 8.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-8/iis-80-application-initialization

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

# Inicialização de aplicativo do IIS 8.0

Comentários

por [Shaun Eagan](https://github.com/shauneagan)

## Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 8.0 | Inicialização de Aplicativos foi embutida no IIS 8.0. |
| IIS 7.5 | A inicialização do aplicativo foi lançada como um [módulo fora de banda para o IIS 7.5](https://www.iis.net/downloads/microsoft/application-initialization). |
| IIS 7.0 | Não havia suporte para inicialização de aplicativo para o IIS 7.0. |

## Problema

Um problema comum enfrentado pelos administradores de sites é a necessidade de executar tarefas de inicialização e "aquecer" tarefas para um aplicativo Web. Aplicativos Web maiores e mais complexos podem precisar executar processamento de inicialização longo, caches primos na memória, gerar conteúdo etc... antes de atender à primeira solicitação HTTP.

## Solução

O recurso inicialização de aplicativo do IIS 8.0 permite que os administradores do site configurem o IIS 8.0 para executar proativamente tarefas de inicialização para um ou mais aplicativos Web. Enquanto um aplicativo está sendo inicializado, o IIS 8.0 também pode ser configurado para retornar conteúdo estático como um espaço reservado ou "página inicial" até que um aplicativo tenha concluído suas tarefas de inicialização.

O recurso de Inicialização de Aplicativo é configurado por meio de uma combinação de regras globais e específicas do aplicativo que informam ao IIS 8.0 como e quando inicializar aplicativos Web. O recurso de Inicialização de Aplicativo também dá suporte à integração com o Módulo de Reescrita de URL do IIS para dar suporte a um tratamento mais complexo do conteúdo provisório enquanto um aplicativo ainda está inicializando.

Observação

Há incompatibilidades conhecidas entre a Inicialização do Aplicativo e o Roteamento de Solicitação de Aplicativo (ARR). Não é recomendável usar a Inicialização de Aplicativo em computadores com a ARR instalada.

## Instruções passo a passo

### Pré-requisitos

O recurso inicialização de aplicativo requer que o IIS 8.0 seja instalado. Além disso, o recurso inicialização de aplicativo dentro do sub-recurso "Desenvolvimento de Aplicativos" do IIS precisa ser instalado.

A captura de tela a seguir da interface do usuário do Gerenciador de Servidores do Windows Server 2012 mostra o recurso inicialização do aplicativo.

![Captura de tela mostrando o recurso de Inicialização de Aplicativo instalado no Windows Server 2012.](iis-80-application-initialization/_static/image1.jpg)

Observação

Este passo a passo também usa um aplicativo ASP.NET 4.5 para demonstrar o recurso de Inicialização do Aplicativo. O Apêndice no final deste documento inclui o aplicativo de exemplo e instruções sobre como configurar o aplicativo em seu computador.

#### Soluções alternativas para bugs conhecidos

- Não há bugs conhecidos para esse recurso no momento.

### Inicialização global do aplicativo

O recurso inicialização de aplicativo pode ser configurado em dois locais: o arquivo de applicationHost.config em todo o computador e o arquivo web.config no nível do aplicativo. A configuração no arquivo applicationHost.config contém configurações de inicialização de aplicativo "globais", enquanto um arquivo de web.config no nível do aplicativo contém configurações de inicialização de aplicativo "local".

Neste passo a passo, você configurará um aplicativo de exemplo para sempre ser inicializado quando o pool de aplicativos associado ao aplicativo for iniciado. Como os comportamentos do pool de aplicativos só podem ser configurados em applicationHost.config, executar a inicialização do aplicativo sempre que um pool de aplicativos é iniciado é considerado parte das configurações de inicialização de aplicativo "global".

#### Modificações no applicationHost.config

Abra o arquivo applicationHost.config localizado em `%WINDIR%\system32\inetsrv\config` no Bloco de Notas. (Lembre-se de executar o editor de texto com a opção "Executar como Administrador"!)

Encontre a <seção de configuração applicationPools> e procure a entrada do pool de aplicativos com o nome ".NET v4.5".

Modifique a entrada do pool de aplicativos para que o pool de aplicativos esteja sempre em execução. Para aplicativos em que você deseja que a inicialização global de aplicativos ocorra, você normalmente deseja que o pool de aplicativos associado seja iniciado e em execução. O atributo em negrito no snippet de configuração mostra o que adicionar à entrada de configuração.

```
<add name=".NET v4.5" startMode="AlwaysRunning" managedRuntimeVersion="v4.0" />
```

Role para baixo um pouco mais em applicationHost.config até o `<sites>` elemento de configuração. Nessa seção, haverá uma `<application>` entrada para o aplicativo de exemplo (consulte o Apêndice para obter instruções sobre como criar o aplicativo de exemplo em seu computador). O aplicativo é chamado de "appinit" e tem um valor de atributo de caminho de "/appinit". Modifique a `<application>` entrada adicionando o atributo **preloadEnabled** em negrito, conforme mostrado no snippet de configuração e salve as alterações.

```
<application path="/appinit" preloadEnabled="true" applicationPool=".NET v4.5">
```

A configuração **de preloadEnabled** como "true" informa ao IIS 8.0 que ele envia uma solicitação "falsa" para o aplicativo quando o pool de aplicativos associado é iniciado. É por isso que, na etapa anterior, definimos o **startMode** do pool de aplicativos como "AlwaysRunning".

Com a combinação do pool de aplicativos sempre em execução e o próprio aplicativo sendo marcado para sempre receber uma solicitação falsa, sempre que o computador é reiniciado e/ou o serviço World Wide Web é reciclado, o IIS 8.0 garante que a instância do pool de aplicativos esteja em execução e que o aplicativo "/appinit" sempre envia uma solicitação falsa para disparar o aplicativo para iniciar.

#### Modificações no web.config do aplicativo

Usando uma segunda instância do Bloco de Notas, abra o arquivo web.config no nível do aplicativo localizado no local indicado abaixo. (Lembre-se de executar o editor de texto com a opção "Executar como Administrador"!)

```
C:\inetpub\wwwroot\appinit
```

Observação: altere a letra da unidade se o Site da Web padrão estiver instalado em um disco rígido diferente.

O arquivo web.config tem algumas seções de configuração já preenchidas previamente, mas estão comentadas. Descomente o snippet de configuração mostrado que está dentro da seção de configuração `<system.webServer>`. Este snippet está logo abaixo do comentário "Exercício 1 – Etapa 1" no arquivo web.config. Em seguida, salve as alterações.

```
<applicationInitialization
    remapManagedRequestsTo="Startup.htm" 
    skipManagedModules="true" >
  <add initializationPage="/default.aspx" />
</applicationInitialization>
```

O elemento **applicationInitialization** informa ao IIS que ele deve emitir uma solicitação para a URL raiz do aplicativo ("/default.aspx" neste exemplo) para inicializar o aplicativo. Enquanto o IIS aguarda a solicitação "/default.aspx ser concluída, ele servirá "Startup.htm" para todos os clientes do navegador ativo. "Startup.htm" é a "página inicial" do aplicativo.

#### Executar o aplicativo

Em uma janela de prompt de comando *com privilégios elevados*, recicle o Serviço World Wide Web com o comando mostrado abaixo:

```
net stop w3svc & net start w3svc
```

Lembre-se de executar a janela do prompt de comando usando a opção "Executar como Administrador"!

Usando o Internet Explorer, navegue até a seguinte URL:

`http://localhost/appinit/default.aspx`

O navegador retorna a página estática "Startup.htm" com um plano de fundo cinza para os primeiros segundos porque essa é a "página inicial" que foi configurada em web.config. Você pode continuar atualizando a página no navegador da Web e observar que cerca de oito segundos depois (simulado com uma suspensão de thread no global.asax do aplicativo de exemplo) você recebe o conteúdo "real" para default.aspx com um plano de fundo branco. Isso indica que a inicialização do aplicativo foi concluída.

#### Configurando a reciclagem de processos sobrepostos

O IIS 8.0 integra a inicialização global de aplicativos à reciclagem de processos sobrepostos executando a inicialização do aplicativo em um processo sobreposto em segundo plano. Quando o IIS detecta que um processo de trabalho ativo está sendo reciclado, o IIS não alterna o tráfego ativo para o novo processo de trabalho reciclado até que o novo processo de trabalho termine de executar todas as URLs de inicialização do aplicativo no novo processo. Isso garante que os clientes que navegam no site não vejam páginas de inicialização de aplicativos quando um aplicativo estiver ativo e em execução.

Volte para a instância do bloco de notas que tem applicationHost.config. Modifique a entrada do pool de aplicativos para ".NET v4.5" para ficar como o trecho de configuração mostrado abaixo.

```
<add name=".NET v4.5"
                startMode="AlwaysRunning"
    managedRuntimeVersion="v4.0" >
  <recycling logEventOnRecycle="Schedule">
    <periodicRestart requests="30" />
  </recycling>
</add>
```

Lembre-se de salvar suas alterações!

O <elemento de reciclagem> instrui o IIS a reiniciar o processo de trabalho dele a cada 30 solicitações HTTP.

#### Executar o aplicativo uma segunda vez

Em uma janela de prompt de comando *com privilégios elevados* , recicle o World Wide Web Service com o comando mostrado abaixo:

```
net stop w3svc & net start w3svc
```

Usando uma nova instância do Internet Explorer, navegue novamente para:

`http://localhost/appinit/default.aspx`

Observe que a página inicial "Startup.htm" com o plano de fundo cinza está sendo exibida.

Em seguida, abra o Gerenciador de Tarefas e verifique se a guia **Processos** está sendo exibida. Classifique a lista de processos pelo nome até ver uma instância de w3wp.exe em execução. Essa instância é o processo de trabalho que está executando o aplicativo "appinit" ASP.NET.

![Captura de tela mostrando a lista de processos do Gerenciador de Tarefas executando uma instância do arquivo executável w 3 w p.](iis-80-application-initialization/_static/image3.jpg)

Atualize o navegador algumas vezes até que o conteúdo da página default.aspx real seja retornado. Você sabe que o aplicativo está executando a página "real" default.aspx quando o plano de fundo é alterado para branco. Em seguida, organize as janelas na tela para que você possa ver o Gerenciador de Tarefas e o navegador.

Agora, volte para o navegador e atualize a página pelo menos 30 vezes, isso faz com que o IIS recicle o pool de aplicativos. Você pode parar de atualizar a página quando vir uma segunda instância de w3wp.exe aparecer na lista de processos do Gerenciador de Tarefas, conforme mostrado abaixo:

![Captura de tela mostrando a segunda instância do arquivo executável w 3 w p na lista de processos do Gerenciador de Tarefas.](iis-80-application-initialization/_static/image5.jpg)

A captura de tela mostra que a segunda instância do w3wp.exe foi iniciada devido ao limite de reciclagem do processo, definido anteriormente.

Você pode continuar a atualizar periodicamente a janela do navegador pelos próximos dez segundos ou mais. Observe que default.aspx continua a ser executado. Quando a reciclagem sobreposta é concluída, uma instância w3wp.exe desaparece da janela de Processos do Gerenciador de Tarefas.

Durante toda a duração da reciclagem sobreposta, você continua a ver o conteúdo "real" da default.aspx sendo servido, mesmo que a inicialização da aplicação tenha sido configurada e esteja executando a URL de inicialização em segundo plano na nova instância do w3wp.exe.

### Reescrita de URL e inicialização de aplicativo

Por padrão, a inicialização do aplicativo só permite que você especifique uma única URL de "página inicial" a ser exibida enquanto um aplicativo está inicializando. No entanto, o recurso inicialização de aplicativo dá suporte a algumas variáveis de servidor que podem ser usadas para controlar o processamento de solicitações enquanto um aplicativo é inicializado. Isso permite que você crie regras declarativas usando o Módulo de Reescrita de Url contendo mapeamentos mais complexos para conteúdo estático pré-gerado.

Neste passo a passo, você substitui o atributo **remapManagedRequestsTo** por um conjunto de regras de Regravação de URL que realizam o mesmo resultado final.

Observação: consulte o apêndice para obter instruções sobre como instalar a Regravação de URL.

#### Modificações no applicationHost.config

Usando a instância do Bloco de Notas que tem o applicationHost.config aberto, reverta o pool de aplicativos e os elementos do aplicativo para desativar todo o processamento global de inicialização de aplicativos. As configurações globais são removidas nesta etapa, pois o restante deste passo a passo se concentra no comportamento de inicialização do aplicativo configurado.

As entradas de applicationHost.config para o pool de aplicativos e o aplicativo são mostradas abaixo.

Entrada de configuração do pool de aplicativos:

```
<add name=".NET v4.5" managedRuntimeVersion="v4.0" />
```

Entrada de configuração do aplicativo:

```
<application path="/appinit" applicationPool=".NET v4.5">
```

Lembre-se de salvar suas alterações quando terminar!

Além disso, para garantir que as alterações entrem em vigor no IIS, a partir de uma janela de prompt de comando *com privilégios elevados*, reinicie o World Wide Web Service com o comando mostrado abaixo:

```
net stop w3svc & net start w3svc
```

#### Modificações no nível do aplicativo web.config

Usando a instância do Bloco de Notas que tem o web.config aberto no nível do aplicativo, remova o atributo **remapManagedRequestsTo** do elemento `<applicationInitialization>`. A seção de configuração `<applicationInitialization>` agora deve ser semelhante a esse trecho de configuração.

```
<applicationInitialization skipManagedModules="true" >
  <add initializationPage="/default.aspx" />
</applicationInitialization>
```

Como o `<applicationInitialization>` elemento não define mais uma URL para a qual remapear solicitações, adicione um conjunto de regras de regravação de URL. Em seguida, adicione uma regra de reescrita que mapeia explicitamente as solicitações feitas para "default.aspx", bem como "/" para rotear para "Startup.htm". Duas regras são necessárias porque o Módulo de Reescrita de Url não "sabe" sobre como os documentos padrão funcionam. Como "/" equivale a "default.aspx" em aplicativos ASP.NET, você precisa de duas regras de Regravação de URL : uma regra para cada variação de URL.

As novas regras são mostradas em negrito abaixo. Como alternativa, você pode descomentar as regras de Reescrita de URL pré-configuradas no comentário "Exercício 2 – Etapa 2 Mapear Solicitações para a Página Inicial" no arquivo web.config.

```
<rewrite> 
  <rules>
    <rule name="Home Page-Expanded" stopProcessing="true">
      <match url="default.aspx" />
      <conditions>
        <add input="{APP_WARMING_UP}" pattern="1" />
      </conditions>
      <action type="Rewrite" url="Startup.htm" />
    </rule>
    <rule name="Home Page-Short" stopProcessing="true">
      <match url="^$" />
      <conditions>
        <add input="{APP_WARMING_UP}" pattern="1" />
      </conditions>
      <action type="Rewrite" url="Startup.htm" />
    </rule>
  </rules>
</rewrite>
```

Alguns itens a serem observados sobre essas regras: primeiro, o atributo **stopProcessing** é definido como "true" nos elementos de <regra>. Isso é necessário para adicionar mais tarde uma regra geral de Reescrita de URL e para solicitações dos URLs "default.aspx" ou "/", nas quais você não deseja que a regra geral seja executada.

Em segundo lugar, observe que temos uma condição de Reescrita de URL nas <condições/> elemento. Essa condição diz efetivamente "aplicar regra somente quando o aplicativo estiver em um estado de inicialização". A variável de servidor "APP\_WARMING\_UP" é definida pelo IIS como um valor "1" quando a inicialização do aplicativo está ativa e o IIS ainda está processando todas as URLs de inicialização.

Por fim, observe que a ação foi definida para reescrever a solicitação ativa para, em vez disso, executar "Startup.htm". Essa regra tem o efeito de dizer ao IIS para passar a solicitação para o manipulador de arquivos estático que, em seguida, renderiza a página estática Startup.htm.

Em seguida, adicione uma regra de regravação catch-all. Ao usar o Módulo de Reescrita de URL em conjunto com a inicialização do aplicativo, é necessária uma regra abrangente que será acionada se nenhuma das regras anteriores corresponder. Adicione a regra em negrito mostrada abaixo à seção de reescrita como a regra catch-all. Como alternativa, você pode descomentar a regra catch-all previamente configurada em web.config que está localizada no comentário "Exercício 2 – Etapa 2 Configurando uma regra de catch-all" no arquivo web.config.

```
<rewrite> 
  <rules>
    <rule name="Home Page-Expanded" stopProcessing="true">
      <match url="default.aspx" />
      <conditions>
        <add input="{APP_WARMING_UP}" pattern="1" />
      </conditions>
      <action type="Rewrite" url="Startup.htm" />
    </rule>
    <rule name="Home Page-Short" stopProcessing="true">
      <match url="^$" />
      <conditions>
        <add input="{APP_WARMING_UP}" pattern="1" />
      </conditions>
      <action type="Rewrite" url="Startup.htm" />
    </rule>
    <rule name="All Other Requests">
      <match url=".*" />
      <conditions>
        <add input="{APP_WARMING_UP}" pattern="1" />
      </conditions>
      <serverVariables>
        <set name="SKIP_MANAGED_MODULES" value="0" />
      </serverVariables>
      <action type="Rewrite" url="{URL}" />
    </rule>
  </rules>
</rewrite>
```

Salve suas alterações quando terminar!

A nova regra se aplica a qualquer URL que a acesse e instrui o IIS a continuar processando a solicitação feita para a URL recebida. A regra também define uma variável de servidor chamada "SKIP\_MANAGED\_MODULES" como um valor de "0" – que equivale a "false". Essa configuração informa ao IIS que ele deve tratar a solicitação reescrita do URL Rewrite da mesma maneira que se a solicitação tivesse chegado normalmente pela rede.

#### Executar o aplicativo

Em uma janela de prompt de comando com privilégios elevados, recicle o World Wide Web Service com o comando mostrado abaixo:

```
net stop w3svc & net start w3svc
```

Usando uma nova instância do Internet Explorer, navegue novamente para:

`http://localhost/appinit/default.aspx`

Embora as regras de reescrita de URL agora sejam usadas para definir a lógica da página de boas-vindas, você ainda observa o mesmo comportamento do primeiro passo a passo. A página Startup.htm com o plano de fundo cinza é exibida inicialmente. Se você atualizar o navegador periodicamente, cerca de oito segundos depois, verá novamente o plano de fundo da página mudar para branco, indicando que a "real" página default.aspx está sendo exibida agora que a inicialização do aplicativo está concluída.

### Regras complexas de página inicial

Os passo a passo anteriores usam a inicialização do aplicativo como um mapeamento direto da URL "X" para a URL "Y". Neste passo a passo, você implementará um cenário de inicialização de aplicativo mais complexo.

No navegador, navegue até as duas urls a seguir:

- `http://localhost/appinit/ImageHandler.ashx?image=Lighthouse`
- `http://localhost/appinit/ImageHandler.ashx?image=Tulips`

Essas URLs são exemplos de conteúdo estático gerado dinamicamente. Para este aplicativo de exemplo, o código dentro de ImageHandler.ashx examina a chave querystring "image". Se o valor dessa querystring for "Lighthouse" ou "Tulips", o manipulador de ASP.NET transmitirá o JPG correspondente localizado na pasta App\_Data.

Como o manipulador de imagens está apenas retornando imagens, você deseja continuar a retornar uma imagem apropriada mesmo durante a inicialização do aplicativo. Embora a mecânica de servir essas imagens use código gerenciado, talvez você queira servir rapidamente imagens pré-geradas aos clientes, mesmo que o aplicativo ASP.NET subjacente esteja demorando muito para inicializar e iniciar.

#### Modificações no nível do aplicativo web.config

Usando a instância do Bloco de Notas que tem o arquivo web.config no nível do aplicativo aberto, adicione outra regra de Reescrita de Url *antes* da regra geral final. O novo snippet a ser adicionado é mostrado abaixo. Como alternativa, você pode descomentar a regra de manipulador de imagem pré-populada no web.config que está localizada no comentário "Exercício 3 – Etapa 1 Regras complexas de splash page" no arquivo web.config.

```
<rule name="Image Handler Remapping" stopProcessing="true">
  <match url="ImageHandler.ashx" />
  <conditions>
    <add input="{APP_WARMING_UP}" pattern="1" /> 
    <add input="{QUERY_STRING}" pattern="image=([A-Za-z]+)&amp;?" /> 
  </conditions>
  <action type="Rewrite" url="Images/{C:1}_static.jpg" appendQueryString="false" />
</rule>
```

Salve suas alterações quando terminar.

Assim como acontece com as regras de reescrita para default.aspx e "/", essa regra tem o atributo **stopProcessing** definido como "true" para garantir que as solicitações para ImageHandler.ashx não sejam acidentalmente propagadas para a regra geral e final de reescrita no processo de inicialização do aplicativo.

Para solicitações para "ImageHandler.ashx", a regra de reescrita usa um grupo de captura de expressão regular para extrair a imagem solicitada da cadeia de caracteres de consulta. O *padrão de definição de padrão de correspondência="image=([A-Za-z]+)&?"* informa ao IIS para extrair o valor da variável de cadeia de caracteres de consulta "image". Esse valor é então usado no atributo url do atributo de ação: *url="Images/{C:1}\_static.jpg"*.

O atributo url no elemento de ação informa ao módulo Url Rewrite para reescrever requisições ImageHandler.ashx, de modo a apontar, em vez disso, para arquivos no subdiretório Imagens do aplicativo. Além disso, o valor da cadeia de caracteres de consulta que foi capturado pela expressão regular é usado para ajudar a formar o nome do arquivo que, em última análise, será servido do subdiretório Images. Por exemplo, uma solicitação para *ImageHandler.ashx?image=Tulips* será reescrita para *Imagens/Tulips\_static.jpg*.

Se você navegar até o diretório inetpub\wwwroot\appinit usando o Windows Explorer e procurar no subdiretório Imagens, verá dois arquivos: um representando a versão "estática" do Tulips.jpge outro que representa a versão "estática" do Lighthouse.jpg. Essas imagens estáticas atuam como conteúdo pré-gerado que pode ser servido enquanto o aplicativo é inicializado.

#### Executar o aplicativo

Em uma janela de prompt de comando com privilégios elevados, recicle o World Wide Web Service com o comando mostrado abaixo:

```
net stop w3svc & net start w3svc
```

Usando o Internet Explorer, navegue até:

`http://localhost/appinit/ImageHandler.ashx?image=Lighthouse`

ou

`http://localhost/appinit/ImageHandler.ashx?image=Tulips`

Observe como as imagens retornadas em ambos os casos incluem uma marca d'água indicando que estas são as versões pré-geradas "estáticas" das imagens. A marca d'água é um texto na parte superior da imagem dizendo "Esta imagem é a versão estática de...."

Se você atualizar o navegador cerca de 10 segundos depois, verá o conteúdo da imagem retornado mudar para o conteúdo "real" que está sendo servido pelo manipulador ImageHandler.ashx. A marca d'água desaparece, indicando que o conteúdo agora está sendo gerado dinamicamente pelo handler do ASP.NET, visto que o aplicativo concluiu a inicialização.

[Observação: se o Internet Explorer parece não estar sendo atualizado, clique no ícone "documento quebrado" na barra de endereços ou no ícone de atualização para forçar o Internet Explorer a recarregar a página.]

## Resumo

O recurso inicialização de aplicativos do IIS 8.0 oferece aos desenvolvedores e administradores a capacidade de retornar conteúdo estático para navegadores enquanto o IIS está inicializando um aplicativo "frio". Fornecer conteúdo estático imediatamente aos navegadores proporciona aos clientes uma melhor experiência do usuário. Em vez de aplicativos de inicialização a frio que resultam em uma página do navegador em branco ou em um ícone de espera giratório, o recurso Inicialização do Aplicativo pode ser usado para fornecer conteúdo estático relevante enquanto o aplicativo em segundo plano conclui o processamento de inicialização intensivo.

O processo de inicialização pode ocorrer automaticamente sempre que um servidor Web é colocado online ou reciclado. Para cenários em que os administradores de servidores não desejam inicializar aplicativos de forma ávida, o processo de inicialização pode ser acionado sob demanda quando a primeira solicitação atinge um aplicativo "frio".

Para a inicialização de aplicativos em nível global e local, o módulo de Regravação de URL pode ser integrado para fornecer regras de inicialização mais avançadas e complexas. Usando regras de reescrita de URL integradas ao recurso inicialização de aplicativo, é possível atender a diferentes tipos de conteúdo estático pré-gerado para urls diferentes e caminhos virtuais enquanto o IIS continua a iniciar um aplicativo em segundo plano.

## Apêndice – Configurando o aplicativo ASP.NET de exemplo

Observação : as etapas a seguir pressupõem que o servidor já tenha *o* IIS 8.0 instalado e ASP.NET 4.5 habilitado para uso no IIS 8.0.

### Desempacote o aplicativo de exemplo

O aplicativo ASP.NET de exemplo está contido no seguinte arquivo de .zip:

![](iis-80-application-initialization/_static/image1.png)

Descompacte o arquivo para a pasta wwwroot no servidor Web. Por exemplo, se o servidor Web instalou o "Site Padrão" na unidade C:\, descompacte o conteúdo do arquivo para `c:\inetpub\wwwroot\appinit`.

### Criar um aplicativo no IIS 8.0

Depois de descompactar a amostra 'appinit' no sistema de arquivos, você precisa configurar a pasta como um aplicativo ASP.NET no IIS 8.0. A captura de tela abaixo mostra o aplicativo de exemplo appinit configurado como um aplicativo no IIS 8.0. Observe também que o aplicativo é atribuído ao pool de aplicativos ".NET v4.5".

![Captura de tela do menu Configurações Avançadas do I S Manager. A aplicação de exemplo e o pool de aplicativos são realçados.](iis-80-application-initialization/_static/image2.png)

### Instalar o módulo de reescrita de URL

O aplicativo de exemplo usa o módulo Regravação de URL para integração avançada com o recurso de Inicialização de Aplicativo. Você precisa instalar o módulo de Reescrita de URL no seu servidor; ele pode ser baixado de: <https://www.iis.net/downloads/microsoft/url-rewrite>.

### Configurar o módulo de reescrita de URL

Depois que o módulo Regravação de URL for instalado no servidor Web, você precisará modificar o arquivo applicationHost.config do IIS para permitir o uso da variável de servidor SKIP\_MANAGED\_MODULES compatível com o recurso de Inicialização de Aplicativo.

Abra o arquivo de applicationHost.config em todo o computador em um editor de texto, como o bloco de notas. Por exemplo, se você instalou o sistema operacional no drive C:\, o arquivo applicationHost.config está localizado em `C:\Windows\System32\inetsrv\config`.

Role o arquivo para baixo e localize a seção de segurança. Esta seção começa com o elemento Xml: <segurança>.

Digite os seguintes elementos Xml *antes* do <elemento de segurança> :

```
<rewrite>
  <allowedServerVariables>
    <add name="SKIP_MANAGED_MODULES" />
  </allowedServerVariables>
</rewrite>
```

Salve as alterações no arquivo applicationHost.config.

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
