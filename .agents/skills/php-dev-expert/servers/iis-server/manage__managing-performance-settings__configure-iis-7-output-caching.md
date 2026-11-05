# Configurar o cache de saída do IIS 7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/managing-performance-settings/configure-iis-7-output-caching

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

# Configurar o cache de saída do IIS 7

Comentários

por Tali Smith

O IIS (Serviços de Informações da Internet) inclui um recurso de cache de saída que pode armazenar em memória o conteúdo dinâmico de PHP, ou a saída do Microsoft® ASP.NET, do ASP clássico, ou de outras páginas dinâmicas. Isso pode gerar enormes melhorias de desempenho, já que o script usado para gerar a saída dinâmica não precisa ser executado para cada solicitação. O cache pode variar a saída armazenada em cache com base em valores de cadeia de caracteres de consulta, bem como cabeçalhos HTTP enviados do cliente para o servidor. O cache também é integrado ao driver do modo kernel Http.sys, melhorando o desempenho.

## Quando usar o cache de saída

O conteúdo da Web pode ser dividido em duas categorias principais: conteúdo estático e conteúdo dinâmico.

- O conteúdo estático não é alterado de solicitação para solicitação. O conteúdo que é retornado para o navegador da Web é sempre o mesmo. Exemplos de conteúdo estático incluem arquivos HTML, JPG ou GIF.
- Conteúdo dinâmico é a saída que muda a cada solicitação. Exemplos incluem ASP.NET ou conteúdo PHP.

Entre essas duas categorias há conteúdo semi-dinâmico. Imagine uma página de ASP.NET dinâmica que executa uma consulta de banco de dados. Não há razão para executar essa consulta em cada solicitação se as tabelas de banco de dados subjacentes forem alteradas com pouca frequência.

O IIS armazena automaticamente em cache conteúdo estático (como páginas HTML, imagens e folhas de estilo), já que esses tipos de conteúdo não são alterados de solicitação para solicitação. O IIS também detecta alterações nos arquivos quando você faz atualizações e o IIS libera o cache conforme necessário.

O recurso de cache de saída do IIS tem como destino o conteúdo semi-dinâmico. Ele permite armazenar em cache respostas estáticas para solicitações dinâmicas e aumentar a escalabilidade.

Observe que nem todas as páginas dinâmicas podem aproveitar o cache de saída. Páginas altamente personalizadas (como carrinho de compras ou transações de comércio eletrônico) não são boas candidatas porque a saída dinâmica provavelmente não será solicitada repetidamente, e a memória usada para armazenar em cache o conteúdo seria desperdiçada. O conteúdo que é gerado como resultado de uma solicitação POST para um formulário HTML também não pode ser armazenado em cache.

Os melhores candidatos para o cache de saída são páginas que geram dados dinamicamente, mas que provavelmente não serão alteradas de solicitação para solicitação com base na URL ou nas informações do cabeçalho. Por exemplo, aplicativos de tipo galeria de fotos que redimensionam dinamicamente imagens para exibição em uma página da Web são ótimos candidatos para o cache de saída porque o cache dos dados salva o servidor de ter que processar novamente o redimensionamento de imagem para cada solicitação. Outro bom exemplo de um tipo de aplicativo que pode aproveitar o recurso de cache de saída é um aplicativo de cotação de ações.

## Selecionar políticas de cache

O IIS dá suporte a dois tipos de políticas de cache:

- varyByQuerystring, no qual a URL é a mesma, mas o valor da cadeia de caracteres de consulta varia.
- varybyHeaders, que pode variar o cache com base nos cabeçalhos HTTP que são enviados do cliente para o servidor.

## Invalidar o Cache

Com o conteúdo dinâmico, os dados podem ser alterados com frequência e você deve liberar o cache, permitindo que novos dados sejam recuperados e armazenados em cache novamente. Observe que, mesmo que os dados sejam alterados com tanta frequência quanto a cada segundo, ainda poderá ser útil armazenar os dados em cache; um site pode receber centenas de solicitações por segundo ou mais, e o cache pode reduzir as viagens ao banco de dados para recuperar dados, salvando o servidor Web e o servidor de banco de dados de trabalho extra.

O IIS dá suporte a duas maneiras de invalidar o conteúdo dinâmico:

- Use um período de tempo limite simples – a propriedade de configuração é CacheForTimePeriod.
- Detectar uma alteração no recurso subjacente – a propriedade de configuração é CacheUntilChange. Use esse tipo de esquema de invalidação somente quando desejar que o cache seja liberado quando o recurso subjacente for alterado.

## Configurar o valor do cache

Mesmo se você habilitar o cache de saída, o IIS não armazenará uma solicitação em cache imediatamente. Ele deve ser solicitado algumas vezes antes que o IIS considere uma solicitação "digna de cache". O valor do cache pode ser configurado por meio da seção ServerRuntime descrita no artigo [classe ServerRuntimeSection](wmi-provider__serverruntimesection-class.md) .

Duas propriedades determinam o valor do cache:

- frequentHitTimePeriod
- frequentHitThreshold

Uma solicitação só será armazenada em cache se mais do que `<frequentHitThreshold>` solicitações de uma URL em cache chegarem dentro do `<frequentHitTimePeriod>`. A configuração padrão para `frequentHitTimePeriod` é de 10 segundos. A configuração padrão para `frequentHitThreshold` é 2 ocorrências.

## Configurar o cache de saída por meio do Gerenciador do IIS

O cache é bastante fácil de configurar usando o recurso de interface do usuário na nova ferramenta de administração do IIS.

1. No menu **Iniciar** , clique em **Ferramentas Administrativas** e, em seguida, clique no **Gerenciador dos Serviços de Informações da Internet (IIS**).
2. No modo de exibição de árvore à esquerda, localize seu aplicativo.
3. Selecione o item de menu **Cache de Saída** .
4. Na coluna à direita, clique em **Adicionar** no menu **Ação** . Você pode adicionar sua regra de cache de saída aqui.
5. No campo **Nome de extensão** de arquivo, por exemplo, digite **.php** e depois selecione **Cache em modo de usuário**.
6. Clique em **Avançado** e marque a caixa de seleção **Variáveis de sequência de consulta**.
7. Insira as variáveis apropriadas na caixa de texto **variáveis de consulta**.

   [![Captura de tela da caixa de diálogo Adicionar Regra de Cache, da página Cache de Saída e das Configurações avançadas de regra de cache de saída.](configure-iis-7-output-caching/_static/image2.jpg)](https://learn.microsoft.com/pt-br/iis/manage/managing-performance-settings/configure-iis-7-output-caching/_static/image1.jpg)

   *Figura 1: Exemplo de cache de saída*

## Configurar o cache de saída por meio do arquivo Web.config

Você também pode configurar o recurso de cache no arquivo de Web.config local, que é encontrado no diretório de conteúdo. Abaixo está um exemplo da configuração necessária para uma página de ShowStockPrice.asp com um parâmetro varyByQueryString de \* (o que significa armazenar em cache todas as variações exclusivas de parâmetros de querystring) e um tempo limite de 1 segundo.

```
<configuration> 
     <location path="showStockPrice.asp">     
       <system.webserver>        
         <caching>         
           <profiles>
             <add varybyquerystring="*"location="Any"
               duration="00:00:01" policy="CacheForTimePeriod"            
               extension=".asp">
           </profiles>
         </caching>
       </system.webserver>
     </location>
</configuration>
```

Se você quiser armazenar esses dados em cache no kernel para um desempenho ainda mais rápido, basta alterar o atributo de política para kernelCachePolicy.

Observação

O Microsoft ASP.NET já inclui um recurso de cache de saída; O recurso de cache de saída do IIS funciona em paralelo com o cache ASP.NET e funciona para todos os tipos de aplicativos.

## Verificar contadores de desempenho

Para ver o desempenho no cache de saída, você pode examinar os contadores de cache de saída no monitor de confiabilidade e desempenho.

1. No menu **Iniciar** , clique em **Ferramentas Administrativas** e, em seguida, clique em **Confiabilidade e Monitor de Desempenho**. (No Windows Vista® ou no Windows® 7, as Ferramentas Administrativas são encontradas no Painel de Controle.)
2. Selecione **Monitor de Desempenho** no modo de exibição de árvore à direita e clique **+** na barra de ferramentas.
3. Navegue até o contador **de Cache do Serviço Web** e clique nele para abri-lo.
4. Adicione o contador **total de URIs armazenados em cache** .

Se você executar um teste de desempenho, poderá ver que o número de URIs armazenados em cache aumenta com o número se os itens solicitados.

## Usar o cache de Kernel-Mode

O cache de saída do IIS dá suporte a duas políticas de cache:

- Política de cache de saída no modo de usuário, que usa um cache que reside em um processo de trabalho do IIS.
- Política de cache em modo kernel, que utiliza um cache residente no Http.sys, um driver em modo kernel.

Armazenar o conteúdo em cache no modo kernel permite acelerar o desempenho do site. Um exemplo de como usar o caching em modo kernel pode ser encontrado no artigo do Cache de Saída do [IIS](manage__managing-performance-settings__walkthrough-iis-output-caching.md).

Observe que há duas diferenças significativas entre o cache de saída do modo de usuário e do modo kernel.

- O cache de saída do modo kernel não dá suporte a módulos e recursos que devem ser executados no modo de usuário, como autenticação ou autorização. Por exemplo, se esquemas de autenticação como autenticação básica ou autenticação do Windows® estiverem habilitados, a política de cache não funcionará. O conteúdo é servido, mas não armazenado em cache. Você pode encontrar mais detalhes sobre por que as respostas podem não ser armazenadas em cache no modo kernel neste [artigo da Base de Dados de Conhecimento](https://support.microsoft.com/kb/817445).
- O cache de saída do modo kernel dá suporte ao atributo varyByHeaders, mas não varyByQuerystring.

## Solucionar problemas de cache

O FREB (Buffer de Eventos de Solicitação com Falha) é a melhor maneira de descobrir se sua solicitação é armazenada em cache ou não; você também pode descobrir por que uma solicitação não está sendo armazenada em cache. Por exemplo, o evento HTTPSYS\_CACHEABLE em um log FREB pode informar que uma solicitação não está sendo armazenada em cache porque o cache no modo kernel não está habilitado.

O comando a seguir pode ser usado para descobrir qual conteúdo é armazenado em cache no modo kernel:

```
netsh http show cachestate
```

## Armazenar em cache suas páginas mais populares

Você pode definir o cache de saída para armazenar em cache apenas sua página padrão (a página solicitada com mais frequência):

1. Crie um arquivo chamado **default.aspx** no **%systemdrive%\inetpub\wwwroot\<seu diretório de aplicativos>** e adicione o seguinte código:

   ```
   <%=DateTime.Now%>
   ```
2. No menu **Iniciar** , clique em **Ferramentas Administrativas** e, em seguida, clique no **Gerenciador dos Serviços de Informações da Internet (IIS**).
3. Utilize a visualização em árvore no lado esquerdo para navegar até seu aplicativo.
4. Clique em **Exibição de Conteúdo** na parte inferior da página.
5. Selecione o documento padrão (por exemplo, Default.aspx página).
6. No menu **Ações** à direita, clique em **Alternar para o modo de exibição de recursos** . Todas as configurações configuradas agora só são aplicadas ao documento padrão.
7. Abra a configuração **Regras de Cache de Saída**.
8. Adicione **.aspx** como uma extensão de arquivo.
9. Selecione cache **em modo Kernel**, selecione **Em intervalos de tempo**, habilite **o Monitor de arquivos armazenados em cache** e digite um intervalo de tempo, como **00:00:30**.
10. Navegue para `http://localhost//<your application>` utilizando o Windows® Internet Explorer®. Atualizando constantemente a página (pressione **Ctrl**+**F5** para verificar se você não está usando o cache do navegador), você vê que o tempo não é alterado por 30 segundos.

Observação

*Este artigo é baseado em informações do artigo "[Cache de Saída do IIS 7 para Conteúdo Dinâmico – Acelerar Seus Aplicativos ASP e PHP](https://blogs.iis.net/bills/archive/2007/05/02/iis7-output-caching-for-dynamic-content-dramatically-speed-up-your-asp-and-php-applications.aspx)" por Bill Staples, publicado em 2 de maio de 2007.*

## Consulte também

- [Cache de saída do IIS](manage__managing-performance-settings__walkthrough-iis-output-caching.md)

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
