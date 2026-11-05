# Como usar o bloqueio na configuração do IIS 7.0 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-for-security/how-to-use-locking-in-iis-configuration

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

# Como usar o bloqueio na configuração do IIS 7.0

Comentários

por [Saad Ladki](https://twitter.com/saadladki)

## Resumo

Este documento explica como bloquear e desbloquear a configuração no servidor. Você aprenderá quais configurações os arquivos de configuração no nível do aplicativo podem substituir e como usar o `<location>` elemento para bloquear seções inteiras.

Você experimentará o bloqueio mais granular das configurações, em seções, como:

- Bloqueio de elementos e atributos específicos
- Bloquear tudo *, exceto* elementos ou atributos específicos
- Bloqueio de diretivas específicas de coleção, como as diretivas `<add>`, `<remove>` e `<clear>`
- Bloqueio de elementos específicos em coleções

Depois de ler este documento, você saberá como gerenciar diferentes recursos de bloqueio de configuração editando diretamente elementos XML em arquivos de configuração (a interface programática para executar essas tarefas segue a estrutura XML muito de perto).

Este documento se concentra intencionalmente apenas na edição de elementos XML nos arquivos de configuração, em vez de mostrar maneiras de realizar as mesmas tarefas usando a API de administração, scripts ou a interface do usuário (interface do usuário).

## Introdução

O IIS 7.0 e superior permite bloquear e desbloquear configurações em vários níveis e escopos. Bloquear a configuração significa que ela não pode ser substituída (ou definida de forma alguma) em níveis inferiores na hierarquia. A configuração de desbloqueio só pode ser feita no nível em que ela foi bloqueada. Isso é útil, por exemplo, ao criar configurações diferentes para sites ou caminhos diferentes, e apenas alguns desses sites e caminhos têm permissão para substituí-las. O bloqueio pode ser feito no nível da seção ou para elementos específicos, atributos, elementos de coleção e diretivas de coleção em seções.

## Tarefa 1: Bloquear uma seção usando uma `<location>` marca

Nesta tarefa, você aprenderá a usar a `<location>` marca para bloquear (ou desbloquear) seções de configuração inteiras no nível global para que elas não possam ser substituídas nos níveis de aplicativo da hierarquia de configuração.

Observação

Por padrão, a maioria das seções do IIS em applicationHost.config está bloqueada, enquanto nenhuma das seções do Framework .NET está bloqueada (incluindo as seções do ASP.NET no <grupo de seções system.web> no machine.config e no web.config raiz).

Usando um editor de texto, como o Bloco de Notas, abra o arquivo applicationHost.config no seguinte local:

```
%windir%\system32\inetsrv\config\applicationHost.config
```

Examine a `<configSections>` seção na parte superior do arquivo: ela tem metadados sobre as seções de configuração neste arquivo, como nomes para seções, contendo grupos de seções e se elas estão bloqueadas ou não.

As seções bloqueadas são especificadas pelo atributo "overrideModeDefault", que é "Permitir" ou "Negar". Pouquíssimas seções não são bloqueadas por padrão, conforme especificado por esta linha, por exemplo:

```
<section name="defaultDocument" overrideModeDefault="Allow" />
```

Aqui, lidamos com a `<windowsAuthentication>` seção. Ele está bloqueado por padrão.

Para desbloquear a seção inteira para todos os aplicativos no servidor, mova seu conteúdo de seu local atual no arquivo para a parte inferior do arquivo e coloque-o dentro de um `<location overrideMode="Allow">` elemento. Lembre-se também de ter os grupos de seções ao seu redor: `<system.webServer`, então>`<security`e depois>`<authentication` .> O resultado final deve ter essa aparência:

```
<location overrideMode="Allow">
  <system.webServer>
     <security>
        <authentication>
          <!-- the content of windowsAuthentication section is here -->
        </authentication>
     </security>
  </system.webServer>
</location>
```

A seção agora está desbloqueada para todos os aplicativos. Você pode especificar um caminho na marca de localização para que a seção seja desbloqueada somente para esse caminho. O caminho padrão, se não especificado (como na etapa anterior), é path=". (ou path="", a mesma coisa), que significa "este nível atual". Nesse caso, como isso é applicationHost.config, o nível atual significa o nível global. Você também pode usar marcas de localização em qualquer lugar na hierarquia do namespace, por exemplo, em um web.config no nível do vdir, para bloquear a configuração desse ponto para baixo.

Aqui está um exemplo de como desbloquear esta seção somente para o site "AdminSuperTrusted". Isso significa que os arquivos web.config nesse site podem substituir as configurações nesta seção; mas, para todos os outros sites no servidor, elas estão bloqueadas no nível global e não podem ser substituídas.

Neste exemplo, você deve deixar o conteúdo da seção em seu local original em applicationHost.confige, em seguida, especificar a seção na marca de localização com um caminho específico:

```
<location path="AdminSuperTrustedSite" overrideMode="Allow">
  <system.webServer>
    <security>
      <authentication>
        <!-- note: this is different than previous example, in that  -->
        <!-- the content of the section is in the original place and -->
        <!-- was not moved here; in addition, the section is also    -->
        <!-- specified here, just by its name, so that it gets       -->
        <!-- unlocked only for the site specified in the location.   -->
        <windowsAuthentication/>
      </authentication>
    </security>
  </system.webServer>
</location>
```

Retornando ao terceiro exemplo acima, a seção é desbloqueada para todos os aplicativos em todos os sites (caminho de localização="."). Verifique se o grupo de seções de autenticação primária < (aquele fora do elemento >, acima no arquivo) não contém uma seção `<location>`windowsAuthentication<>. Uma seção não pode aparecer no mesmo arquivo fora de uma marca de localização e dentro de um <caminho de localização=".> Tag; isso é considerado configuração inválida.

Para testar se uma seção está bloqueada ou não, acesse `http://localhost/app` no navegador.

Se a seção estiver bloqueada, o navegador exibirá um erro porque o arquivo web.config no nível do aplicativo tem a `<windowsAuthentication>` seção nele. Isso significa que o web.config tenta substituir `<windowsAuthentication>` em seu nível. No entanto, como essa seção agora está bloqueada no nível global, a configuração no arquivo web.config não é válida.

Altere o tag de localização para ter overrideMode="Deny". Isso bloqueia a seção novamente. Experimente outras seções, como as seções ASP.NET em machine.config ou web.configraiz. Tente bloqueá-los no nível global e substituí-los no nível web.config.

## Tarefa 2: Bloqueio de elementos e atributos específicos

Com base na tarefa anterior, localize a `<windowsAuthentication>` seção dentro da `<location>` tag. Defina a tag de localização para desbloquear a seção: overrideMode="Allow". Só não bloquearemos partes específicas da seção.

Defina o atributo **habilitado** como true e bloqueie-o definindo lockAttributes="enabled".

Isso impede que um arquivo de configuração no nível do aplicativo altere o valor do `<windowsAuthentication>` atributo **habilitado** da seção.

Se você quiser bloquear outros atributos, adicione-os ao valor **lockAttributes** separado por vírgulas, como no exemplo a seguir:

```
lockAttributes="enabled,attribute1,attribute2"
```

Você também pode bloquear todos os atributos usando "\*", como neste exemplo:

```
lockAttributes="*"
```

A seção agora deve ter a seguinte aparência:

```
<location path="." overrideMode="Allow">   <system.webServer>
    <security>
      <authentication>
        <windowsAuthentication enabled="true" lockAttributes="enabled">          
          <providers>
            <add value="Negotiate" />
            <add value="NTLM" />
          </providers>
        </windowsAuthentication>
      </authentication>
    </security>
  </system.webServer>
</location>
```

No arquivo web.config para a sua aplicação, tente substituir as configurações na seção `<windowsAuthentication>`.

No navegador, solicite a página para verificar se você pode substituir todas as configurações, exceto as que você bloqueou, nesse caso , o atributo **habilitado** .

Observação

Simplesmente especificar o atributo no arquivo web.config causará uma falha de configuração, mesmo que o atributo definido no arquivo Web.config tenha o mesmo valor que no arquivo ApplicationHost.config. A definição de um atributo bloqueado para qualquer valor é considerada uma tentativa de substituir o atributo e, portanto, falha. (Observe também que os atributos são diferentes dos elementos – na próxima tarefa, você bloqueará um elemento.)

Remova o atributo **lockAttributes** .

Defina lockElements="providers" para bloquear o `<providers>` elemento na seção.

Se você tiver outros elementos para bloquear, poderá adicioná-los separados por vírgulas, desta forma:

```
lockElements="providers,element1,element2"
```

A seção agora deve ter a seguinte aparência:

```
<location path="." overrideMode="Allow">   <system.webServer>
    <security>
      <authentication>
        <windowsAuthentication enabled="true" lockElements="providers">
          <providers>
            <add value="Negotiate" />
            <add value="NTLM" />
          </providers>
        </windowsAuthentication>
      </authentication>
    </security>
  </system.webServer>
</location>
```

No arquivo Web.config do aplicativo, substitua o elemento `<providers>` configurando-o ou tentando adicionar, remover ou limpar a coleção.

No navegador, solicite a página e observe que um erro é exibido. No arquivo web.config, substitua outros elementos ou atributos, como o atributo **habilitado** . Navegue até a página e observe que nenhum erro é exibido.

Remova o atributo **lockElements** .

## Tarefa 3: Bloquear tudo, exceto atributos específicos

Nesta tarefa, você aprenderá a bloquear todos os elementos ou atributos em uma seção, exceto os específicos que você definir. Isso é útil em casos em que você não tem certeza de quais propriedades a seção tem ou terá no futuro e deseja bloquear tudo, exceto as propriedades definidas explicitamente para serem desbloqueadas.

Com base na tarefa anterior, localize a seção `<windowsAuthentication>` na tag de localização.

Defina os **atributos lockAllElementsExcept** ou **lockAllAttributesExcept** para uma lista delimitada por vírgulas de elementos ou atributos a serem bloqueados. Por exemplo, a seção pode ser semelhante à seguinte:

```
<windowsAuthentication enabled="true" lockAllElementsExcept="providers">
     <providers>
          <add value="Negotiate" />
          <add value="NTLM" />
     </providers>
</windowsAuthentication>
```

Ou assim:

```
<windowsAuthentication enabled="true" lockAllAttributesExcept="enabled">
     <providers>
          <add value="Negotiate" />
          <add value="NTLM" />
     </providers>
</windowsAuthentication>
```

Nesta seção específica, atualmente não há outros atributos ou elementos. Se você quiser testar o efeito de definir os **atributos lockAllElementsExcept** ou **lockAllAttributesExcept** , adicione os mesmos atributos a outras seções que tenham um conjunto mais avançado de atributos.

## Tarefa 4: Bloqueio de algumas diretivas de coleção

Nesta tarefa, você aprenderá a bloquear as diretivas `<add>` e `<remove>` em uma coleção, de modo que, no nível da aplicação, os elementos do arquivo de configuração possam ser adicionados, mas não removidos.

Com base na tarefa anterior, localize a seção `<windowsAuthentication>` na tag de localização.

Defina o atributo **lockElements** na `<providers>` coleção para **remover, limpar**.

Quando você terminar, a seção terá a seguinte aparência:

```
<windowsAuthentication enabled="true" >
  <providers lockElements="remove,clear">
    <add value="Negotiate" />
    <add value="NTLM" />
  </providers>
</windowsAuthentication>
```

No arquivo web.config do aplicativo, crie um `<remove>` elemento que remove o elemento NTLM da coleção.

Quando concluído, o arquivo web.config se parece com o seguinte:

```
<configuration>
  <system.webServer>
    <security>
      <authentication>
        <windowsAuthentication>
          <providers>
            <remove value="NTLM" />
          </providers>
        </windowsAuthentication>
      </authentication>
    </security>
  </system.webServer>
</configuration>
```

No navegador, solicite `http://localhost/app`.

## Tarefa 5: Bloquear elementos específicos em uma coleção

Nesta tarefa, você aprenderá a bloquear elementos de coleção específicos. Os desenvolvedores ainda podem adicionar elementos à coleção em níveis inferiores (aplicativo) da hierarquia e ainda podem remover elementos não bloqueados da coleção. No entanto, eles não podem remover os elementos bloqueados especificamente. A coleção não pode ser limpa, pois limpar significa remover todos os elementos da coleção.

Com base em tarefas anteriores, localize a seção `<windowsAuthentication>` na tag de localização.

Na coleção `<providers>`, no elemento `<add>` do provedor NTLM, defina o **lockItem** para "true".

Quando você terminar, a seção terá a seguinte aparência:

```
<windowsAuthentication enabled="true" >
  <providers>
    <add value="Negotiate" />
    <add value="NTLM" lockItem="true" />
  </providers>
</windowsAuthentication>
```

No arquivo de web.config do aplicativo, crie um `<remove>` elemento que remove o elemento NTLM da coleção.

Quando concluído, o arquivo Web.config se parece com o seguinte:

```
<configuration>
  <system.webServer>
    <security>
      <authentication>
        <windowsAuthentication>
          <providers>
            <remove value="NTLM" />
          </providers>
       </windowsAuthentication>
      </authentication>
    </security>
  </system.webServer>
</configuration>
```

No navegador, a solicitação `http://localhost/app` falha.

## Resumo

Neste documento, você aprendeu a bloquear as configurações. Você pode bloquear uma seção inteira usando um `<location>` elemento ou definindo o atributo **lockItem** de uma marca como true. O bloqueio poderá ser mais flexível e granular se você usar as configurações **lockAttributes**, **lockElements**, **lockAllAttributesExcept**, **lockAllElementsExcept** ou **lockItem** em elementos de coleção e se você usar as configurações **lockElements** em coleções para especificar diretivas de coleção específicas (`<add>`, `<remove>`ou `<clear>`). O bloqueio pode ocorrer em qualquer nível da hierarquia, não apenas em ApplicationHost.config. O bloqueio entra em vigor a partir desse nível para baixo.

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
