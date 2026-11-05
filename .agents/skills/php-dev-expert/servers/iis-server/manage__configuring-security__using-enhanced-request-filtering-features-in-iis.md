# Usando recursos avançados de filtragem de solicitações no IIS7 | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/manage/configuring-security/using-enhanced-request-filtering-features-in-iis

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

# Usando recursos avançados de filtragem de solicitações no IIS7

Comentários

por Suditi Lahiri

Este artigo fornece uma lista de cenários comuns de uso para os recursos avançados de Filtragem de Solicitações, que são fornecidos com o Windows Server 2008 SP2 ou podem ser baixados de <https://www.microsoft.com/downloads/> para uso com o Windows Server 2008 RTM. Na ausência de uma interface do usuário correspondente para configurar esses recursos, appcmd.exe é usado para habilitar e configurar os cenários neste artigo.

## Criando regras para não permitir padrões de cadeia de caracteres em partes de solicitações

Um novo recurso, adicionado ao recurso filtragem de solicitações do IIS, é a capacidade de criar uma lista de regras que permitirá que você especifique regras para não permitir solicitações com base em padrões correspondentes a determinadas partes de uma solicitação HTTP. A configuração principal para isso é a seção **filteringRules** na seção **system.webServer/security/requestFiltering** . No caso de uma condição negada **, o erro HTTP 404.19** é gerado.

### Exemplo

Neste exemplo, um administrador de servidor deseja bloquear as cadeias de caracteres "Foo" e "Bar" no cabeçalho "Foo-Header", usando o appcmd.exe.

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"filteringRules.[name='BlockFooInHeader']"
```

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"filteringRules.[name='BlockFooInHeader'].scanHeaders.[requestHeader='Foo-Header']"
```

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"filteringRules.[name='BlockFooInHeader'].denyStrings.[string='Foo']"
```

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"filteringRules.[name='BlockFooInHeader'].denyStrings.[string='Bar']"
```

### Config

```
<configuration> 
  <system.webServer>
    <security>
      <requestFiltering>
        <filteringRules>
          <filteringRule name="BlockFooInHeader">
            <scanHeaders>
              <add requestHeader="Foo-Header" />
            </scanHeaders>
            <denyStrings>
              <add string="Foo" />
              <add string="Bar" />
            </denyStrings>
          </filteringRule>
        </filteringRules>
      </requestFiltering>
    </security>
  </system.webServer>
</configuration>
```

A solicitação abaixo falharia nessa regra, pois ela tem um cabeçalho chamado Foo-Header que contém o padrão 'Foo'

```
GET /iisstart.htm HTTP/1.1\r\n
Host: localhost\r\n
Accept: */*\r\n
Foo-Header: Foo--value\r\n
\r\n
```

### Exemplo

Neste exemplo, um administrador de servidor deseja bloquear cadeias de caracteres "Inserir" e "Tabela" na cadeia de caracteres de consulta enviada com qualquer página ".asp":

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"filteringRules.[name='BlockSqlCommands',scanQueryString='True']"
```

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"filteringRules.[name='BlockSqlCommands',scanQueryString='True'].appliesTo.[fileExtension='.asp']"
```

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"filteringRules.[name='BlockSqlCommands',scanQueryString='True'].denyStrings.[string='Insert']"
```

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"filteringRules.[name='BlockSqlCommands',scanQueryString='True'].denyStrings.[string='Table']"
```

### Config

```
<configuration>
  <system.webServer>
    <security>
      <requestFiltering>
        <filteringRules>
          <filteringRule name="BlockSqlCommands" scanQueryString="true">
            <appliesTo>
              <add fileExtension=".asp" />
            </appliesTo>
            <denyStrings>
              <add string="Insert" />
              <add string="Table" />
            </denyStrings>
          </filteringRule>
        </filteringRules>
      </requestFiltering>
    </security>
  </system.webServer>
</configuration>
```

A solicitação ASP abaixo falharia nessa regra, pois contém a string "Insert" na cadeia de consulta.

```
GET /iisstart.asp?Query=InsertData HTTP/1.1\r\n
Host: localhost\r\n
Accept: */*\r\n
Foo-Header: Foo--value\r\n
\r\n
```

É importante observar que todo o cabeçalho será verificado para os padrões de cadeia de caracteres listados na seção "**denyString**" e não apenas no valor do cabeçalho.

## Criando lista segura para URLs e strings de consulta

Esse novo recurso permite que você especifique URLs seguras e cadeias de caracteres de consulta que ignorarão todas as regras de negação definidas. Esse recurso deve ser usado com cuidado, pois a configuração errada nesta seção pode permitir que solicitações mal-intencionadas ignorem suas regras de negação. Se um usuário sempre quiser permitir a URL '/my.login.page.asp', por exemplo, embora possa disparar uma regra de negação definida, você poderá adicionar a configuração como abaixo para permitir isso. O recurso pode ser configurado usando **alwaysAllowedUrls** e **alwaysAllowedQueryStrings** na seção **system.webServer/security/requestFiltering** .

### Exemplo

No exemplo a seguir, appcmd.exe é usado para configurar a página "Login.asp" como uma URL aprovada e "Allow=true" como uma sequência de cadeia de caracteres de consulta aprovada.

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"alwaysAllowedUrls.[url='Login.asp']"
```

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"alwaysAllowedQueryStrings.[queryString='Allow=true']"
```

### Config

```
<configuration>
  <system.webServer>
    <security>
      <requestFiltering>
        <alwaysAllowedUrls>
          <add url="Login.asp" />
        </alwaysAllowedUrls>
        <alwaysAllowedQueryStrings>
          <add queryString="Allow=true" />
        </alwaysAllowedQueryStrings>
      </requestFiltering>
    </security>
  </system.webServer>
</configuration>
```

É importante observar que o '/' à esquerda é necessário para que a URL seja aceita como uma URL válida. Se um usuário quiser permitir uma cadeia de caracteres de consulta 'session<1' que, de outra forma, pode disparar uma regra de negação definida, você pode adicionar a configuração como abaixo para permitir isso. Note que você não precisa especificar strings de consulta que começam com o caractere '?'.

## Criando uma lista de negação de sequências de URL

Para negar uma lista de sequências de URL para todas as solicitações, crie uma seção **denyQueryStringSequences** e adicione a lista de cadeias de caracteres que você deseja não permitir na URL de suas solicitações. A lista de negação não diferencia maiúsculas de minúsculas e permite valores codificados do formato %XX, em que XX são dígitos hexadecimal. No caso de uma condição negada, o **erro HTTP 404.18** é gerado.

### Exemplo

Por exemplo, se você quiser negar qualquer URL com a sequência ".." ou "./", appcmd.exe comando será:

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"denyQueryStringSequences.[sequence='..']"
```

```
appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /+"denyQueryStringSequences.[sequence='./']"
```

### Config

```
<configuration>
  <system.webServer>
    <security>
      <requestFiltering>
        <denyQueryStringSequences>
          <add sequence=".." />
          <add sequence="./" />
        </denyQueryStringSequences>
      </requestFiltering>
    </security>
  </system.webServer>
</configuration>
```

A solicitação abaixo falharia nessa regra, pois ela tem um ".." em sua Cadeia de Caracteres de Consulta:

```
GET /iisstart.htm?.. HTTP/1.1\r\n
Host: localhost\r\n
Accept: */*\r\n
\r\n
```

## Verificando a string de consulta com escape e sem escape

É possível que você queira verificar as versões escapadas e não escapadas desse padrão usando o atributo **unescapeQueryString** na seção "**system.webServer/security/requestFiltering**".

### Exemplo

Portanto, se alguém enviar uma solicitação como `http://www.foo.com/id=%3C%53%43%52%49%50%54%3E`, onde a <sequência de script> foi escapada, gostaríamos de verificar a versão não escapada dessa string de consulta também.

`appcmd.exe set config "Default Web Site" -section:system.webServer/security/requestFiltering /unescapeQueryString:"True"`

### Config

```
<configuration>
  <system.webServer>
    <security>
      <requestFiltering unescapeQueryString="true">
        <denyQueryStringSequences>
          <add sequence="script" />
        </denyQueryStringSequences>
      </requestFiltering>
    </security>
  </system.webServer>
</configuration>
```

Isso executará 2 passagens ao verificar padrões na string de consulta, uma para a string de consulta bruta e outra para a string de consulta sem escape.

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
