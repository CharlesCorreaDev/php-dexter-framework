# Referência de configuração do IIS 7 e IIS 8 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-your-iis-architecture/iis-7-and-iis-8-configuration-reference

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

# Referência de configuração do IIS 7 e IIS 8

Comentários

por [Tobin Titus](https://github.com/tobint)

## Introdução ao ApplicationHost.config

Observação

Uma referência de configuração detalhada para o IIS está disponível em <https://www.iis.net/configreference>.

ApplicationHost.config é o arquivo raiz do sistema de configuração quando você está usando o IIS 7 e superior. Ele inclui definições de todos os sites, aplicativos, diretórios virtuais e pools de aplicativos, bem como padrões globais para as configurações do servidor Web (semelhante a machine.config e o web.config raiz para configurações do .NET Framework).

Também é especial porque é o único arquivo de configuração do IIS disponível quando o servidor Web é instalado (no entanto, os usuários ainda podem adicionar arquivos web.config se desejarem). Ele inclui uma seção especial (chamada configSections) para registrar todas as seções do IIS e do Sistema de Ativação do Windows (WAS) (machine.config tem o mesmo conceito para seções do .NET Framework). Ele tem definições para bloquear a maioria das seções do IIS no nível global, de modo que, por padrão, elas não possam ser substituídas por arquivos de web.config de nível inferior na hierarquia.

O local do arquivo está atualmente no diretório system32\inetsrv, mas espera-se que isso seja alterado após beta2 para system32\inetsrv\config. Este documento percorre todas as seções na ordem em que aparecem no arquivo e explica-as uma a uma. A seção mais complexa é <*system.webServer*>, portanto, é recomendável que o leitor não ignore essa seção em particular.

## Como ler o esquema de configuração

Conforme observado anteriormente, este documento contém snippets de informações de esquema para cada seção, para que o leitor possa descobrir quais propriedades estão disponíveis e quais são seus valores padrão e intervalos válidos. Os trechos são obtidos diretamente do arquivo de esquema de configuração do IIS: `%windir%\system32\inetsrv\config\schema\IIS\_Schema.xml`. Esta seção explica como ler informações de esquema.

O esquema para cada seção de configuração é definido em um elemento XML. Não há definição de esquema para grupos de seções. O seguinte formato é usado aqui para explicar como ler o esquema:

```
<attribute-name>="<default-value>" [<metadata>] [<description>]
```

`<attribute-name>` é o nome do atributo de configuração, como ele aparece em XML. Cada atributo deve ter um nome.

`<default-value>` é o valor usado por padrão, se nenhum outro valor for especificado no XML para o atributo. Nem todos os atributos têm valores padrão (por exemplo, nome do site). Nesse caso, a sintaxe será "".

`<metadata>` contém vários itens:

- O tipo de tempo de execução do atributo. Este é um dos seguintes tipos: "bool", "enum", "flags", "int", "int64", "String", "timeSpan". Cada atributo deve ter um tipo.
- "bool" é "true" ou "false".
- "enum" é um conjunto de valores possíveis, em que apenas um deles pode ser definido para o atributo. Cada valor desse tipo tem um valor numérico e um nome amigável. A sintaxe está usando o caractere "|" como um delimitador entre os nomes amigáveis: value1|value2|...|valueN.
- "flags" é semelhante a "enum", exceto que combinações de valores são permitidas. Portanto, os valores numéricos devem ser múltiplos de 2, para que possam ser combinados usando a operação OR. A sintaxe é idêntica a "enum": value1|value2|...|valueN.
- "int" é um inteiro de 32 bits.
- "int64" é um inteiro de 64 bits.
- "String" é uma cadeia de caracteres.
- "timeSpan" é uma representação de uma unidade de tempo, semelhante ao tipo de código gerenciado TimeSpan. Ele pode ser mantido como um número (representando segundos ou minutos); ou como uma cadeia de caracteres formatada na forma de "[dd:]hh:mm:ss". O elemento "[dd:]" representa um número opcional de dias. Os outros elementos representam números de horas, minutos e segundos, respectivamente. O atributo "timeSpanFormat" especifica qual formato deve ser usado: número de segundos, número de minutos ou uma cadeia de caracteres formatada.
- Os atributos necessários são marcados como "Obrigatório". Isso significa que um valor para eles deve ser definido no XML. Por exemplo, o nome do site é um atributo obrigatório (cada site deve ter um nome no IIS).

`<description>` é uma breve descrição do atributo.

## Esquema de seção

O <elemento sectionSchema> XML é a unidade base de informações de esquema. Todas as outras informações de esquema são especificadas dentro dela. Ele tem um atributo diretamente nele ("name" e, em seguida, o restante do esquema está em sub-elementos dentro dele.

## Esquema de atributo

Cada atributo é definido em um elemento XML correspondente `<attribute>` no esquema. O `<attribute>` elemento pode estar diretamente no elemento <sectionSchema> (se o atributo estiver no escopo da seção); ou em um subelemento (se o atributo estiver em um sub-elemento dentro da seção); ou no elemento de <coleção> (se o atributo estiver em uma coleção dentro da seção).

Um esquema de atributo deve especificar um nome e um tipo de runtime para o atributo. Ele pode marcar o atributo conforme necessário. Ele pode marcar o atributo como a chave exclusiva (se dentro de uma coleção) ou como parte de uma chave de coleção (juntamente com outros atributos). Ele pode especificar um valor padrão para o atributo. Ele pode marcar o atributo de criptografia automática no disco. Ele pode especificar se a palavra "Infinito" é permitida como um valor para o atributo (somente para tipos numéricos, como int e in64, e para timeSpan). Ele pode especificar o formato de intervalo de tempo (segundos, minutos ou cadeia de caracteres formatada) para atributos de intervalo de tempo. Ele pode especificar regras de validação para os atributos (consulte a seção Validação de Atributo abaixo neste documento).

```
<ATTRIBUTE			
    name=""  [String, Required] [XML name of the attribute]    type=""  [bool|enum|flags|int|int64|string|timeSpan, Required][Runtime type]
    required="false"  [bool] [Indicates if must be set]
    isUniqueKey="false"    [bool] [Serves as the collection key]
    isCombinedKey="false"  [bool] [Part of a multi-attribute key]
    defaultValue=""  [String] [Default value or comma-delimited flags]
    encrypted="false"  [bool] [Indicates if value persisted is encrypted]  
    allowInfinite="false"  [bool] [Indicates if "Infinite" can be set]
    timeSpanFormat="string" [string|seconds|minutes] [hh:mm:ss or number]
    validationType=""       [See validation below]
    validationParameter=""  [See validation below]			

/>
```

## Esquema de elemento

Cada elemento é definido em um elemento XML correspondente `<element>` no esquema. Os elementos podem ser aninhados. Um elemento é simplesmente um contêiner para outros atributos ou sub-elementos. Ele deve ter um nome e pode servir como um contêiner de valores padrão para elementos de coleção (por exemplo, siteDefaults contém os valores padrão para sites na `<sites>` coleção).

```
<ELEMENT>
    name=""  [String, Required] [XML name of the element]
    isCollectionDefault="false"  [bool] [Indicates if default values are held for other elements in this collection] 
/>
```

## Esquema de coleção

Cada coleção é definida em um elemento XML de <coleção correspondente> no esquema. As coleções contêm vários elementos, que podem ser adicionados e removidos dele individualmente. Normalmente, os nomes das diretivas de coleção são "add", "remove" e "clear", mas algumas coleções usam nomes diferentes para maior clareza (por exemplo, a coleção está usando "site" em vez de "adicionar"). Isso é feito especificando valores para addElement, removeElement e clearElement no esquema de coleção. Se uma diretiva de coleção estiver ausente do esquema, a coleção não dará suporte a ela. O esquema de coleção pode especificar o nome de um elemento padrão, que será usado como um contêiner de valores padrão para elementos de coleção (isso complementa isCollectionDefault no esquema do elemento).

Por exemplo, a coleção está usando siteDefaults como o elemento padrão. A maioria das coleções acrescenta elementos à medida que mesclam arquivos de configuração dentro do namespace, mas algumas podem especificar mergeAppend="false" no esquema para ter um comportamento de prepend. Por exemplo, considere dois níveis de configuração: applicationHost.config e web.config em um site.

```
<myCollection>

    <add value="1"/>

</myCollection>
```

Em web.config:

```
<myCollection>

    <add value="2"/>

</myCollection>
```

Se a coleção acrescentar, sua configuração mesclada (efetiva) no nível do site será:

```
<myCollection>

    <add value="1"/>

    <add value="2"/>

</myCollection>
```

No entanto, se ele se preparar, será:

```
<myCollection>

    <add value="2"/>

    <add value="1"/>

</myCollection>
```

Algumas coleções podem permitir entradas duplicadas especificando allowDuplicates="true" em seu esquema. Isso é feito principalmente para dar suporte a coleções herdadas na estrutura do .NET (em machine.config).

Algumas coleções podem permitir atributos adicionais neles, além daqueles especificados no esquema. Isso é feito especificando allowUnrecognizedAttributes="true" em seu esquema. Ele é feito principalmente para dar suporte a coleções baseadas em provedor na estrutura do .NET.

```
<COLLECTION

    addElement=""     [String] [Name of Add directive, if supported]
    removeElement=""  [String] [Name of Remove directive, if supported]
    clearElement=""   [String] [Name of Clear directive, if supported]
    defaultElement="" [applicationDefaults|applicationPoolDefaults|siteDefaults|virtualDirectoryDefaults] [See isCollectionDefault]
    mergeAppend="true"  [bool] [Indicates whether or not deepest set values are appended]
    allowDuplicates="false"  [bool] [Indicates if multiple elements may have the same key]
    allowUnrecognizedAttributes="false"  [bool] [Indicates if non-schema attributes are ok]  

/>
```

## Esquema Enum

Cada atributo do tipo "enum" deve definir seus valores de enumeração como um elemento XML <enum> correspondente no esquema. Cada valor deve ter um nome amigável e um valor numérico.

```
<ENUM

    name=""  [String, Required] [Friendly name of the enumerator] 
    value="" [int, Required] [Numeric value]

/>
```

## Esquema de sinalizadores

Cada atributo do tipo "sinalizadores" deve definir seus valores de sinalizador em um elemento XML correspondente no esquema. Cada flag deve ter um nome amigável e um valor numérico que possa ser combinado com OR junto com outros valores, para formar combinações; portanto, ele deve estar em potências de 2.

```
<flags  [Can be used together to form combinations, unlike enums] 

    name=""  [String, Required] [Friendly name of the flag]
    value="" [int in powers of 2, Required] [Numeric value]  

/>
```

## Validação de atributo

A validação de atributo é feita ao analisar o XML para obter uma seção do arquivo e ao chamar a API de configuração para definir valores. Se a validação falhar, ela falhará na operação desejada (obtendo a seção ou definindo o valor inválido).

Cada atributo pode associar um validador ao seu valor. Isso é feito especificando o nome do validador apropriado no validationType e parâmetros adicionais no validationParameter, no esquema de atributo.

O sistema dá suporte a estes validadores:

### Validador de ApplicationPoolName

- Esse validador falha nesses caracteres: |<>&\ / [] +=;:,?\* @ "
- validationType="applicationPoolName"  
  validationParameter=""

### Validador IntegerRange

- Esse validador falhará se o valor estiver fora do intervalo [dentro], em números inteiros.
- validationType="integerRange"  
  validationParameter="<minimum>,<maximum>[,exclude]"

### Validador NonEmptyString

- Esse validador falhará se o valor da cadeia de caracteres não estiver definido.
- validationType="nonEmptyString"  
  validationParameter=""

### Validador do SiteName

- Esse validador falha nesses caracteres: /.?
- validationType="siteName"  
  validationParameter=""

### Validador TimeSpanRange

- Este validador falhará se o valor estiver fora da faixa permitida, em segundos.
- validationType="timeSpanRange"  
  validationParameter="<minimum,maximum,granularity><><>[,exclude]"

### Validador TrimWhiteSpace

- Esse validador falhará se o espaço em branco estiver definido no início ou no final do valor.
- validationType="requireTrimmedString"  
  validationParameter=""

## `<configSections>` Seção

Esta é a primeira seção no arquivo. Ele contém uma lista de todas as outras seções no arquivo. Esse é o ponto de registro das seções (por exemplo, para cancelar o registro de uma seção do sistema, remover sua linha desta seção – não é necessário remover seu arquivo de esquema do diretório config\schema).

Observe que outros arquivos de configuração também podem ter uma seção na parte superior do arquivo. Isso pode ser útil para registrar seções em níveis inferiores ao nível global. Essas seções serão registradas apenas para esse escopo do namespace. Arquivos Web.config só podem adicionar seções ao sistema; não podem redefinir seções que foram registradas em níveis pai nem remover (desregistrar) seções.

As seções são estruturadas pela hierarquia dos grupos de seções que as contêm. Cada registro de seção especifica o nome da seção; o tipo de código gerenciado do manipulador de seção (isso não tem nenhum significado neste arquivo e será removido após o beta2 – ele é usado apenas pelo System.Configuration, portanto, ele ainda existirá em arquivos machine.config e web.config); o nível allowDefinition, se for diferente do padrão; e a substituiçãoModeDefault (esse atributo é usado para bloquear a maioria das seções do IIS neste arquivo).

Observação

A seção é a unidade básica de implantação, registro, bloqueio, pesquisa e contenção das configurações. Cada seção pertence a um grupo de seções ("pai imediato"). O grupo de seções é um contêiner de seções relacionadas logicamente e é usado exclusivamente para fins de hierarquia estruturada. Nenhuma operação pode ser feita em grupos de seções. Os grupos de seções não podem ter configurações diretamente (as configurações pertencem a seções). Os grupos de seções podem ser aninhados; as seções não podem.

## Schema

```
<SECTION 
    name=""  [Required, Collection Key] [XML name of the section]
    allowDefinition="Everywhere" [MachineOnly|MachineToApplication|Everywhere] [Level where it can be set]
    overrideModeDefault="Allow"  [Allow|Deny] [Default delegation mode]

/>
```

## Bloqueio

A maioria das seções do IIS é bloqueada por padrão, usando overrideModeDefault="Deny" na seção. A maneira recomendada de desbloquear seções é usando marcas, da seguinte maneira:

```
<location path="Default Web Site" overrideMode="Allow"> 
    <system.webServer> 
        <asp /> 
    </system.webServer> 
</location>
```

A marca de localização acima desbloqueia a seção somente para o site padrão. Para desbloqueá-lo para todos os sites, especifique-o em applicationHost.config:

```
<location path="." overrideMode="Allow"> 
    <system.webServer> 
        <asp /> 
    </system.webServer> 
</location>
```

Observação

path="." e path="" têm o mesmo efeito. Eles se referem ao nível atual na hierarquia.

## Resumo

Esperamos que isso o familiarize com a nova e poderosa estrutura do novo applicationhost.config. Para aprofundar-se nas diferentes partes, você deve examinar o esquema do IIS localizado em `%windir%\system32\inetsrv\config\schema\iis\_schema.xml`.

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
