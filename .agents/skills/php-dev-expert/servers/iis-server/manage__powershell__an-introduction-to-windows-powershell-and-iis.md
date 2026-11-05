# Uma introdução ao Windows PowerShell e ao IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/powershell/an-introduction-to-windows-powershell-and-iis

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

# Uma introdução ao Windows PowerShell e ao IIS 7.0

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Introdução

O Windows PowerShell é a linguagem de script e shell da Microsoft. Este breve artigo fornece um breve tour pelo Windows PowerShell e IIS. Lendo este artigo, você obtém uma compreensão sólida do que é o Windows PowerShell, aprende sobre a relação entre o Windows PowerShell e o IIS e descobre algumas das maneiras pelas quais o Windows PowerShell executa tarefas de gerenciamento do IIS.

As informações apresentadas aqui são úteis para administradores de TI, desenvolvedores de software, testadores de software e gerentes. Mesmo os céticos estarão convencidos de que o Windows PowerShell é uma ferramenta imperdível.

## Sobre o PowerShell do Windows

O Windows PowerShell é o ambiente abrangente de shell de próxima geração da Microsoft e a linguagem de script. Considere o Windows PowerShell como uma atualização dramática para o shell de comando cmd.exe antigo e arquivos de .BAT. Os usuários podem perguntar por que há um novo shell de comando, quando Cmd.exe funciona bem— e não há tempo para aprender mais uma linguagem de script. O Windows PowerShell é uma melhoria em relação às tecnologias anteriores de script de linha de comando da Microsoft– isso significa que o Windows PowerShell é mais fácil de usar para tarefas simples e complexas e é surpreendentemente fácil de aprender.

Algumas das melhorias do Windows PowerShell incluem:

- Uma linguagem de script atualizada e consistente
- Funcionalidades de expressão regular intrínseca
- A capacidade de acessar o .NET Framework, as extensões WMI e o registro do Windows

Esta seção fornece exemplos concretos e realça alguns dos recursos do Windows PowerShell. Nas seções a seguir, ele discute como o Windows PowerShell funciona junto com o IIS.

Para ter uma ideia do Windows PowerShell, veja um exemplo. Considere a captura de tela na Figura 1.

![Captura de tela de um exemplo de janela de prompt de comando do PowerShell.](an-introduction-to-windows-powershell-and-iis/_static/image1.jpg)

*Figura 1 – Noções básicas do Windows PowerShell*

Primeiro, observe que o shell no Windows PowerShell se parece com um prompt de comando tradicional do Windows. Usar o Windows PowerShell rapidamente será bastante natural após um breve período de ramp-up.

O primeiro comando é:

```
PS C:\> set-location Data
```

Isso invoca um cmdlet do Windows PowerShell (pronuncia-se "command-let") para alterar o diretório de trabalho atual de `C:\` para `C:\Data`. Esse é o equivalente funcional do comando cd (diretório de alteração) antigo. Você pode perceber que ter que digitar "set-location" toda vez que você altera o diretório atual é realmente muita digitação; você tem razão.

O Windows PowerShell tem um amplo conjunto de aliases de atalho que você pode usar. O cmdlet set-location recebe o alias sl (uma versão abreviada do nome completo do cmdlet) e cd (a maneira "antiga"). Este artigo usa a versão completa dos nomes de cmdlet para melhorar a legibilidade.

O segundo comando é:

```
PS C:\Data> get-childitem Pow*
```

Isso lista o conteúdo no diretório atual que começa com "Pow". O Windows PowerShell não diferencia maiúsculas de minúsculas, portanto, você pode digitar Get-ChildItem ou GET-ChildItem. Este artigo usa todas as letras minúsculas. O cmdlet get-childitem possui os aliases dir (para familiaridade com o Windows), ls (para usuários do Unix) e gci, para facilitar a digitação.

Em seguida, use o cmdlet de item de cópia para copiar o diretório do Windows PowerShell, incluindo todos os subdiretórios, para um novo diretório chamado PSBackup:

```
PS C:\Data> copy-item 'PowerShell' 'C:\Data\PSBackup' -recurse –force
```

Em seguida, exclua imediatamente o diretório recém-criado e todo o conteúdo usando o cmdlet remove-item:

```
PS C:\Data> remove-item PSBackup –recurse
```

O próximo comando usa o cmdlet get-content para buscar o conteúdo do arquivo Hello.txt e, em seguida, salvar esses conteúdos em um novo arquivo HelloCopy.txt no diretório atual, redirecionando (com o caractere '|') para o cmdlet out-file.

```
PS C:\Data> get-content 'Hello.txt' | out-file '.\HelloCopy.txt'
```

O penúltimo comando usa get-content para exibir o conteúdo do novo arquivo.

```
PS C:\Data> get-content HelloCopy.txt
```

O cmdlet get-content é aproximadamente equivalente aos comandos tipo (Windows) ou cat (Unix). Conclua a mini-demonstração usando o alias sl para alterar o diretório de trabalho para a unidade raiz:

```
PS C:\Data> sl \
```

Agora, se tudo o que havia no Windows PowerShell estivesse executando tarefas comuns de navegação e manipulação do sistema de arquivos usando um novo conjunto de comandos, não haveria nenhum ponto em ler mais. Uma breve introdução de um parágrafo pode levar a essa suposição incorreta. No entanto, o Windows PowerShell tem muitas vantagens em relação a muitos ambientes de shell atuais.

Para concluir esta discussão introdutória do Windows PowerShell: o Windows PowerShell tem uma curva de aprendizado. A nova tecnologia é inútil, a menos que haja uma maneira de aprender rapidamente a tecnologia. Os programadores chamam esse processo de "discoverability". O Windows PowerShell foi projetado com excelentes características de descoberta, tornando muito mais fácil de aprender.

Por exemplo, você pode obter uma lista de todos os cmdlets simplesmente digitando get-command no prompt do Windows PowerShell. Você também pode obter informações detalhadas sobre um determinado cmdlet digitando get-help seguido pelo nome do cmdlet. Uma ampla experiência ensinando o Windows PowerShell a engenheiros e gerentes mostra que a maioria dos engenheiros pode se tornar hábil em usar o Windows PowerShell com um único dia de prática.

## Windows PowerShell em um ambiente típico do IIS

A seção anterior deste artigo deu uma visão geral curta e básica do Windows PowerShell. No entanto, uma vantagem real de usar o Windows PowerShell vem da capacidade do Windows PowerShell de interagir e gerenciar o IIS. Os engenheiros que lêem este artigo podem estar céticos quanto às declarações "mais recentes e maiores". Este artigo mostrará em breve o poder por trás do Windows PowerShell: muitas tarefas de gerenciamento do IIS podem ser realizadas usando comandos e scripts do Windows PowerShell, bem como as ferramentas de GUI do IIS.

Com o IIS, agora você tem a capacidade de executar muitas tarefas de gerenciamento usando qualquer uma das seguintes:

- GUI (interface gráfica do usuário)
- Comandos interativos do Windows PowerShell
- Scripts do Windows PowerShell

Os usuários com experiência significativa no gerenciamento de software de servidor usando shells e scripts não precisam de mais motivação; mas aqueles acostumados a usar ferramentas estritamente GUI podem se perguntar o que há de especial em ser capaz de gerenciar o IIS por meio de linhas de comando ou scripts, quando já gerenciaram bem o suficiente com o MMC. O final deste artigo aponta seis vantagens significativas do gerenciamento do IIS usando o Windows PowerShell.

A seguir estão alguns exemplos do Windows PowerShell baseados em um [webcast com o arquiteto do Windows PowerShell Jeffrey Snover e o gerente da unidade de produto do IIS, Bill Staples](https://learn.microsoft.com/pt-br/teamblog/channel9joinedmicrosoftlearn).

Suponha que você queira examinar os serviços relacionados ao IIS em execução em seu computador -- uma tarefa muito comum. Uma "abordagem de GUI" para fazer isso é iniciar o MMC e, em seguida, expandir a categoria Serviços e Aplicativos e, em seguida, selecionar a categoria Serviços. O resultado se parece com a captura de tela na Figura 2.

![Captura de tela da janela Gerenciamento de Computador. Serviços e aplicativos expandidos. Categoria de Serviços realçada.](an-introduction-to-windows-powershell-and-iis/_static/image3.jpg)

*Figura 2 – Usando o MMC para obter informações de serviço*

Listar serviços do Windows usando o Windows PowerShell é fácil. Por exemplo, no prompt do Windows PowerShell, use o cmdlet get-service:

```
PS C:\> get-service
```

Isso não é muito convincente, mas suponha que você queira listar apenas os serviços que começam com a letra 'w' e classificá-los por status. Uma maneira de fazer isso é:

```
PS C:\> get-service -include w* | sort-object -property status
```

Você pode interpretar esse comando como buscar todas as informações de serviço do Windows, mas filtrar para incluir apenas os serviços que têm um nome começando com a letra 'W'; em seguida, classifique esses resultados de acordo com o status do serviço (em execução, parado, pausado). O resultado se parece com a captura de tela na Figura 3.

![Captura de tela da janela do PowerShell exibindo os resultados das informações de status do serviço.](an-introduction-to-windows-powershell-and-iis/_static/image5.jpg)

*Figura 3 – Usando o Windows PowerShell para obter informações de serviço*

Conforme apontado na seção anterior, você pode digitar comandos terse do PowerShell; o comando anterior pode ser reduzido para:

```
PS C:\> gsv w* | sort status
```

Aqui, gsv é utilizado, que é um alias para get-service; Ele aproveita-se do fato de que o parâmetro -include está na primeira posição, empregando sort, que é um alias para o cmdlet sort-object. A opção -property está na primeira posição do parâmetro. Agora suponha que você queira parar o serviço World Wide Web Publishing. Sem o PowerShell, você pode clicar com o botão direito do mouse no serviço W3SVC para obter seu menu de contexto e clicar no item Parar. Usando o Windows PowerShell, você pode emitir o comando:

```
PS C:\> stop-service -servicename w3svc
```

ou, na forma abreviada:

```
PS C:\> spsv w3svc
```

Outra tarefa comum é examinar os processos em execução em um computador. Neste ponto, você pode prever como fazer isso usando o Windows PowerShell -- o esquema de nomenclatura consistente e lógico dos cmdlets do Windows PowerShell torna a adivinhação de comandos fácil e não frustrante.

```
PS C:\> get-process
```

Suponha que você queira exibir processos em execução classificados pelo número de identificadores pertencentes a cada processo:

```
PS C:\> get-process | sort-object -property handles
```

Você pode obter essas informações com facilidade usando o Gerenciador de Tarefas do Windows baseado em GUI. Mas considere o que esses três comandos do Windows PowerShell fazem:

```
PS C:\> $p = get-process
PS C:\> $result = $p | measure-object -property handles -sum -average -max
PS C:\> $result | out-file '.\ProcessHandleStats.txt'
```

O primeiro comando, $p = get-process, busca todas as informações sobre processos em execução no momento no computador host e armazena essas informações em $p variáveis.

O segundo comando, $result = $p | measure-object -property identificadores -sum -max, envia as informações do processo capturado para o cmdlet medir-objeto que calcula a soma, a média e o valor máximo de todos os identificadores em uso pelos processos atualmente em execução e armazena essas informações na variável $result. Se você examinou $result neste momento, verá algo como:

***Contagem: 54  
Média: 273,148148148148148  
Soma: 14750  
Máximo: 1625  
Mínimo:  
Propriedade: Identificadores***

Observe que, neste exemplo, há um total de 54 processos em execução e um total de 14.750 identificadores em uso, o que é uma média de cerca de 273 identificadores por processo. O maior número de identificadores usados por um processo é 1625 identificadores.

A terceira linha, $results | out-file '.\ProcessHandleStats.txt', salva os resultados em um arquivo de texto. Os usuários experientes do Windows PowerShell provavelmente combinariam os três comandos descritos em um único comando, como:

```
PS C:\> gps | measure-object handles -sum -average -max |
        out-file '.\ProcessHandleStats.txt'
```

Uma característica da arquitetura do Windows PowerShell é que o Windows PowerShell é facilmente extensível em todos os níveis por usuários e empresas de terceiros. A extensibilidade do Windows PowerShell é um tópico por si só, e aqui está apenas um exemplo.

Na demonstração transmitida pela Web referenciada no final deste artigo, Jeffrey Snover e Bill Staples demonstram um cmdlet de visualização notável do Windows PowerShell desenvolvido por uma empresa terceira. Esse cmdlet é chamado out-gauge. Observe a semelhança semântica com o cmdlet intrínseco fora do arquivo. Em vez de enviar a saída para um arquivo como o out-file faz, o out-gauge envia a saída para um conjunto de controles visualmente ricos. Por exemplo, um dos comandos demonstrados na transmissão via web é:

```
PS C:\> get-process |
        measure-object handles -sum |
        out-gauge -value sum -refresh 0:0:1 -float -type
```

Esse comando produz um medidor que flutua na tela em estilo digital, exibindo o número total de identificadores em uso em tempo real e atualiza a visualização a cada segundo. Tudo isso demonstra que uma ampla gama de ferramentas úteis baseadas no Windows PowerShell estará disponível em breve.

Em seguida, veja um exemplo de implantação de site do IIS usando o Windows PowerShell. Como as versões anteriores do IIS armazenam a configuração na metabase, não é possível copiar um site de um computador para outro. O IIS torna a implantação de site uma questão simples de copiar arquivos. Considere este script do Windows PowerShell:

```
# file: Deploy-Application.ps1

$sourceMachine = "DemoServer1"
$farmList = get-content '.\RestOfFarm.txt'
$filesToCopy = get-content '.\AppManifest.txt'

foreach ($targetMachine in $farmList)
{
   foreach ($file in $filesToCopy)
   {
      $sourcePath = "\\" + (join-path $sourceMachine $file)
      $destPath   = "\\" + (join-path $targetMachine $file)
      write-host -for yellow "$targetMachine : Copying files from
        $sourcePath"

      copy-item $sourcePath $destPath
        -recurse -force
   }
}
```

Esse script é complexo, mas instrutivo. Quando salvo o arquivo como Deploy-Application.ps1 e executado em uma linha de comando do Windows PowerShell, ele se apresenta assim:

```
PS C:\> .\Deploy-Application.ps1
```

O resultado final é copiar todos os arquivos listados no arquivo AppManifest.txt, localizado no servidor DemoServer1, para todas as máquinas listadas no arquivo RestOfFarm.txt. Um recurso do Windows PowerShell é que scripts bem escritos são fáceis de entender, em relação às alternativas como VBScript ou Perl. O script usa o cmdlet get-content para ler nomes de máquina do arquivo RestOfFarm.txt e nomes de arquivo do arquivo AppManifest.txt.

O loop foreach pode ser novo para você. O loop externo itera por meio de cada nome de computador armazenado na variável $farmList, armazenando cada nome em $targetMachine, um por vez. O loop interno é semelhante e armazena cada arquivo em $file por sua vez. O cmdlet join-path é usado para concatenar strings de forma inteligente para produzir caminhos completos de origem e destino.

Por fim, o cmdlet copy-item executa as ações de cópia, onde a opção -recurse copia todos os subdiretórios, e a opção -force faz com que os arquivos existentes sejam sobrescritos. Observe que esse script tem todas as informações sobre locais de origem e destino codificados nele. O Windows PowerShell tem excelentes recursos de passagem de parâmetro, portanto, este script de exemplo pode ser parametrizado para aceitar informações da linha de comando. No entanto, esse tópico está fora do escopo deste artigo.

## Windows PowerShell com IIS

Até agora, este artigo apresentou exemplos do Windows PowerShell que se aplicam a qualquer computador de servidor. Agora, examinamos alguns cmdlets do Windows PowerShell específicos do IIS.

O IIS adiciona a poderosa capacidade de armazenar em cache conteúdo criado dinamicamente. O IIS há muito tempo tem a capacidade de armazenar em cache páginas estáticas. Quando o servidor recebe novas solicitações de cliente para conteúdo solicitado recentemente, ocorre o seguinte: em vez de ter que recuperar esse conteúdo do armazenamento externo, o conteúdo solicitado pode ser retirado imediatamente da memória do cache e retornado para o cliente. O resultado é uma grande melhoria de desempenho. O IIS estende essa ideia habilitando o cache de páginas criadas dinamicamente também. Considere este cmdlet de pré-lançamento do Windows PowerShell do IIS:

```
PS C:\> add-iiscaching
        -computer $computerlist
        -path Demo
        -location index.php
        -credential $cred
        -extension .php
        -kernelcachepolicy 0
        -itemlocation 0
        -policy 1
        -varybyquerystring "Qwd,Qif,Qiv,Qis"
```

Escrever cmdlets personalizados é um tópico fora do escopo deste artigo, mas este exemplo dá uma ideia dos tipos de cmdlets que você pode escrever e qual comunidade do IIS escreverá. O nome do cmdlet é add-iiscaching. Conforme mencionado anteriormente, o Windows PowerShell tem uma arquitetura extensível que permite à equipe de desenvolvimento do IIS criar cmdlets personalizados que funcionam diretamente com o IIS. O efeito final desse comando é habilitar o cache dinâmico para solicitações de página com Qwd, Qif, Qiv e Qis na string de consulta de um aplicativo PHP específico em todos os servidores IIS cujos nomes são armazenados na variável $computerlist.

Embora o ponto principal deva ser claro – que no IIS, você pode habilitar facilmente uma poderosa melhoria de desempenho usando um comando simples do Windows PowerShell –, o artigo continua com detalhes dos parâmetros de alternância neste exemplo.

O primeiro argumento, -computer $computerlist, especifica em quais computadores executar o comando add-iiscaching. Por exemplo, se você tivesse um arquivo de texto simples chamado "MyServers.txt" com nomes de computador como:

***demo1server  
demo2server  
demo3server  
demo4server***

em seguida, o comando

```
PS C:\> $computerlist = get-content '.\MyServers.txt'
```

lê a lista de servidores para a variável $computerlist.

O segundo argumento, -path Demo, aponta para o caminho raiz do aplicativo no qual você deseja habilitar o cache. Neste exemplo, como o valor do caminho não tem espaços, é possível omitir caracteres de aspas, embora eles possam ter sido usados assim: -path "Demo".

O terceiro argumento, -location index.php, aponta para o aplicativo de destino. O quarto argumento, -credential $cred, contém informações de autenticação em $cred variáveis. Isso é necessário porque copiaremos arquivos para computadores remotos. Essas informações também podem ser capturadas pelo cmdlet get-credential intrínseco, como:

```
PS C:\> $cred = get-credential
```

Esse comando inicia um controle de GUI no qual o usuário poderia especificar um nome de usuário e senha e os resultados seriam armazenados na variável $cred.

O quinto argumento, -extension .php, especifica o tipo de aplicativo a ser armazenado em cache.

O sexto argumento, -kernelcachepolicy 0, informa ao cmdlet add-iiscaching para não armazenar em cache as informações do kernel.

O sétimo argumento, -itemlocation 0, especifica onde armazenar em cache informações de resposta; 0 significa armazenar no cliente ou no servidor.

O oitavo argumento, -policy 1, significa continuar o armazenamento em cache até que haja uma alteração no elemento subjacente do cache (em vez de armazenar em cache por um intervalo de tempo específico).

O argumento final, -varybyquerystring "Qwd, Qif, Qiv, Qis", informa ao IIS qual tipo de resposta para cache-- nesse caso, respostas a solicitações que contêm Qwd, Qif, Qiv e Qis na string de consulta. (Estas são partes de nome específicas de pares nome-valor usadas pelo aplicativo PHP neste exemplo.)

## Conclusão

Este artigo apresentou pela primeira vez uma rápida olhada no Windows PowerShell, o novo ambiente de shell da Microsoft e a linguagem de script. Ele mostrou alguns exemplos típicos de navegação e manipulação de arquivos do Windows PowerShell e fez a afirmação de que o Windows PowerShell vai muito além dos ambientes de shell existentes.

A segunda seção deste artigo demonstrou como usar o Windows PowerShell em um ambiente típico no qual o IIS está em execução. Os exemplos incluíam a análise de serviços e processos do Windows em um computador host. Ele também prometeu uma lista de algumas das vantagens de usar o Windows PowerShell para gerenciar e interagir com o IIS.

Aqui estão seis comentários sobre essas vantagens dos primeiros adotantes do Windows PowerShell. Eles também incluem vantagens que a equipe do IIS experimentou.

1. Como os comandos do Windows PowerShell podem ser armazenados como scripts, eles podem ser salvos e executados sem vigilância. Essa vantagem se aplica a qualquer técnica baseada em script, mas o Windows PowerShell é significativamente mais fácil de usar do que outras linguagens de script existentes.
2. Como os comandos do Windows PowerShell podem ser armazenados e usados como scripts, eles criam um registro de auto-documentação da atividade de gerenciamento do IIS. Com que frequência você tentou se lembrar de como modificou alguma chave do Registro usando a GUI do regedit.exe?
3. Em comparação com o uso de interfaces de gerenciamento baseadas em GUI, os comandos do Windows PowerShell "removem a magia" e permitem que você veja exatamente o que está acontecendo. As ferramentas baseadas em GUI são boas para atividades de gerenciamento mais leves. No entanto, o uso de ferramentas baseadas em GUI pode levar a pensamentos como: "Não sei exatamente por que ele funciona, mas quando eu clique duas vezes nisso, ele geralmente corrige o problema".
4. Como muitos outros produtos do Microsoft Server serão baseados no Windows PowerShell, sempre que você usa comandos e scripts do Windows PowerShell para gerenciar o IIS, você obtém treinamento indiretamente em outros sistemas.
5. O uso do Windows PowerShell cria um paradigma de gerenciamento comum e meios de comunicação: as comunidades do Windows PowerShell estão crescendo rapidamente e é muito mais fácil entender a documentação ou as entradas de blog que estão na forma de comandos do Windows PowerShell do que entender a documentação que diz: "Abra o MMC e clique aqui e clique nela e clique duas vezes lá em cima. . ."
6. Como o Windows PowerShell é um ambiente abrangente, você pode executar a maior parte do seu trabalho no Windows PowerShell. Não é necessário ir constantemente de um programa baseado em GUI para um shell de cmd.exe para outro programa baseado em GUI. Isso é semelhante à maneira como as atividades de desenvolvimento de software evoluíram do uso de compiladores separados, vinculadores, depuradores e assim por diante, para o uso de um ambiente integrado como o Visual Studio.

A segunda seção deste artigo também mostrou um exemplo de um script do Windows PowerShell que mostra a capacidade do IIS de implantar servidores Web em vários computadores usando operações simples de cópia de arquivo.

A terceira seção deste artigo explicou como o design do Windows PowerShell permite que a comunidade do IIS crie e compartilhe cmdlets personalizados do Windows PowerShell que operam diretamente com a funcionalidade nativa do IIS. Em particular, ele apresentou o add-iiscaching, um cmdlet de pré-lançamento que pode habilitar a capacidade do IIS de armazenar em cache páginas criadas dinamicamente.

Embora este artigo tenha apenas arranhado a superfície de como o Windows PowerShell e o IIS funcionam juntos, ele deve ter convencido você de que os dois em conjunto fornecem uma experiência de gerenciamento de TI mais fácil, mais eficiente e mais agradável.

## Recursos do Windows PowerShell e do IIS

O [Channel 9 se uniu ao Microsoft Learn](https://learn.microsoft.com/pt-br/teamblog/channel9joinedmicrosoftlearn) para a transmissão na web com o arquiteto do Windows PowerShell, Jeffrey Snover, e o gerente de unidade de produto do IIS, Bill Staples, que serviu como base para o artigo.

Veja [aqui](http://www.powergadgets.com/) para saber mais sobre as ferramentas de visualização com base no Windows PowerShell.

Consulte [www.iis.net](https://www.iis.net/) para obter informações sobre o Microsoft IIS.

## Sobre o autor

Dr. James McCaffrey trabalha para a Volt Information Sciences, Inc., onde gerencia o treinamento técnico para engenheiros de software que trabalham no campus da Microsoft em Redmond, Washington. Ele trabalhou como engenheiro líder em vários produtos importantes da Microsoft, incluindo o Internet Explorer e o MSN Search, e é autor de "Automação de Teste do .NET: Uma Abordagem Problem-Solution", Apress, 2006.

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
  2026-03-28
