# Definir ACLs por meio do arquivo Manifest.xml | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/planning-for-security/set-acls-through-the-manifestxml-file

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

# Definir ACLs por meio do arquivo Manifest.xml

Comentários

por Tali Smith

## Introdução

Há várias maneiras de definir ACLs (listas de controle de acesso), incluindo ferramentas de linha de comando, como Icacls.exe. Os hosters PHP geralmente usam a linha de comando. No entanto, também é possível definir ACLs no arquivo Manifest.xml; esses são os mecanismos que são aplicados quando você instala um aplicativo por meio da Ferramenta de Implantação da Web (WDT).

Por padrão, o WDT instala todos os arquivos e diretórios sem alterar nenhuma das permissões existentes. Na maioria dos casos, isso significa que o aplicativo só tem acesso de leitura aos arquivos e diretórios instalados. Se o aplicativo precisar ser capaz de gravar em qualquer arquivo ou diretório, você poderá especificar quais arquivos ou diretórios com uma diretiva setAcl no arquivo Manifest.xml. O elemento setAclResourceType define se o caminho representa um arquivo ou um diretório.

```
<setAcl 
    path="application/sites/default/settings.php" 
    setAclResourceType="File" 
    setAclAccess="Modify" 
    setAclUser="anonymousAuthenticationUser" />
```

Para garantir que a ACL seja aplicada ao diretório adequado, você também deve fornecer um parâmetro oculto para garantir que a ACL seja aplicada ao diretório nomeado em relação ao AppPath em que ela está instalada.

```
<!-- This is the parameter that is used to set ACLs, it's set to the application path filled in by the user --> 
<parameter 
name="SetAclParameter1" 
defaultValue="{AppPath}/sites/default/settings.php" 
tags="Hidden"> 
<parameterEntry 
  type="ProviderPath" scope="setAcl" 
  match="Application/sites/default/settings.php" /> 
</parameter>
```

Se nenhuma ACL for definida em um arquivo ou diretório, a ACL provavelmente será definida para permitir o acesso de leitura ao arquivo ou ao diretório. As ACLs são específicas, portanto, conceder acesso de gravação não necessariamente concede acesso de leitura. Se você precisar gravar em um arquivo ou diretório, deverá adicionar "leitura, gravação". Se você precisar ser capaz de enumerar os arquivos em um diretório, deverá adicionar "ListDirectory". Observe que o acesso de gravação não concede acesso de modificação. Se você precisar alterar os arquivos depois que eles forem gravados em disco, você deverá definir explicitamente a modificação do acesso. Há algumas permissões que são combinações de outras permissões; por exemplo, "Modificar" inclui "Ler", "Gravar", "Executar" e "Excluir".

Para conceder permissões de leitura, execução e gravação ao diretório do sistema de arquivos **MyApp** para o **teste** do usuário, adicione a seguinte linha ao arquivo **Manifest.xml** :

```
<setAcl path="MyApp" setAclAccess="ReadAndExecute, Write" setAclUser="Test" />
```

Para definir a ACL no caminho **MyApp/Upload** para permitir que usuários anônimos carreguem conteúdo, adicione a seguinte linha ao arquivo **Manifest.xml** :

```
<setAcl path="MyApp/Upload" setAclAccess="Write" setAclUser="anonymousAuthenticationUser" />
```

Observe que anonymousAuthenticationUser é um token especial que se refere à sua identidade de autenticação anônima configurada.

Para conceder acesso de leitura à pasta **MyApp\Data** para a identidade do pool de aplicativos, adicione a seguinte linha ao arquivo **Manifest.xml** :

```
<setAcl path="MyApp/Data" setAclAccess="Read" />
```

Observe que o setAclUser não é usado aqui. O valor padrão para isso é a Identidade do Pool de Aplicativos, portanto, é possível ignorar essa linha.

Observe que é considerada uma prática de segurança arriscada conceder acesso de "Gravação" ou "Modificação" a toda a estrutura de aplicativos, ao aplicar uma ACL na raiz do aplicativo. As ACLs precisam ser o mais limitadas e granulares possível sem restringir a funcionalidade dos aplicativos.

Se você estiver familiarizado com permissões UNIX ou Linux, os privilégios discutidos serão equivalentes a permissões de "Proprietário". Embora os privilégios de Grupo e Mundo possam ser definidos por meio de várias ACLs fora do WDT, somente as permissões de classe "Proprietário" são definidas aqui. A tabela a seguir mostra os equivalentes do sistema operacional Windows® de várias permissões mascaradas por bits do Linux:

| Linux | Windows | Linux | Windows |
| --- | --- | --- | --- |
| 0 | Nenhum valor equivalente a 'None' | 4 | Leitura |
| 1 | Executar | 5 | ReadAndExecute |
| 2 | Escrever | 6 | Leitura, gravação |
| 3 | Gravar, executar | 7 | Modificar |

Confira a lista completa dos [vários direitos de usuário e suas descrições](https://msdn.microsoft.com/library/system.security.accesscontrol.filesystemrights.aspx). Além disso, há algumas [diretrizes de ACL específicas dos Serviços de Informações da Internet (IIS).](get-started__planning-for-security__secure-content-in-iis-through-file-system-acls.md)

O token anonymousAuthenticationUser é automaticamente comparado à ID que o site configurou e que será usado para autenticação anônima. Como essa ID é configurada pelo administrador do Site, é melhor usar anonymousAuthenticationUser para aplicativos PHP e não usar setAclUser para aplicativos do Microsoft® ASP.NET (a menos que seu aplicativo tenha uma necessidade específica de um usuário lidar com a propriedade do arquivo).

Os aplicativos PHP normalmente são executados como o usuário anônimo porque as configurações do FastCGI geralmente definem a representação como True(executar como usuário anônimo). ASP.NET aplicativos normalmente são executados como a identidade do processo de trabalho (identidade do pool de aplicativos). Se setAclUseris não for especificado, o setAcldirective usará a Identidade do Pool de Aplicativos do aplicativo como a ID para autorização.

## Links para obter mais informações

- [Noções básicas sobre as contas de usuário e de grupo do Built-In no IIS 7.0 e superior](get-started__planning-for-security__understanding-built-in-user-and-group-accounts-in-iis.md).

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
