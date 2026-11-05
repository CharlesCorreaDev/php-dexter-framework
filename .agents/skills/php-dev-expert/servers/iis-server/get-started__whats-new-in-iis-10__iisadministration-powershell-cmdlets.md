# Cmdlets do PowerShell de Administração do IIS | Microsoft Learn

> **Fonte / Source:** https://learn.microsoft.com/pt-br/iis/get-started/whats-new-in-iis-10/iisadministration-powershell-cmdlets

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

# Cmdlets do PowerShell de Administração do IIS (IISAdministration PowerShell Cmdlets)

Comentários

por Baris Caglar

### Compatibilidade

| Versão | Observações |
| --- | --- |
| IIS 10.0 | Cmdlets do PowerShell IISAdministration foram introduzidos no IIS 10.0. Há suporte para a versão mais recente do IISAdministration por meio da galeria do Powershell. |
| IIS 8.5 e anterior | Não havia suporte para cmdlets do PowerShell IISAdministration antes do IIS 10.0. No entanto, os usuários podem instalá-lo por meio da galeria do PowerShell. |

Visite [iis.net](https://blogs.iis.net/iisteam/introducing-iisadministration-in-the-powershell-gallery "a introdução do IISAdministration na galeria do Powershell") para saber mais sobre como obter a versão mais recente do IISAdministration.

## Visão geral de IISAdministration

Com o Windows 10 e o Windows Server 2016, a equipe do IIS está lançando um módulo novo e simplificado `IISAdministration` lado a lado com os Cmdlets existentes `WebAdministration` . Há muitos motivos por trás da decisão de lançar um módulo de Cmdlet totalmente novo do PowerShell e aqui estão alguns deles:

- `IISAdministration` dimensionará melhor em scripts que levam muito tempo para serem executados com `WebAdministration`.
- Agora você pode obter uma referência direta a uma instância de `Microsoft.Web.Administration.ServerManager` objeto e fazer qualquer coisa que possa fazer no `Microsoft.Web.Administration` namespace junto com seus scripts.
- A compatibilidade do pipeline do PowerShell foi o principal fator por trás do design de muitos cmdlets. Dessa forma, `IISAdministration` funciona muito melhor com o Pipeline do PowerShell.

A versão dos Cmdlets que foi lançada para o Windows 10 foi uma versão aproximada com espaço para melhorias; a versão de destino foi o Windows Server 2016 para o produto concluído e polido. O motivo da versão anterior foi receber comentários de usuários reais do PowerShell e administradores do IIS no setor, responder a quaisquer perguntas e receber sugestões sobre não apenas a funcionalidade existente, mas também potencialmente para novas funcionalidades que nossos usuários desejam da Administração do IIS, pois ela pertence ao PowerShell.

Aqui estão alguns exemplos sobre o uso do novo provedor:

### Pipelining

```
PS:>Get-IISConfigSection -SectionPath "system.webServer/defaultDocument" | Get-IISConfigCollection -CollectionName "files" | New-IISConfigCollectionElement -ConfigAttribute @{"Value" = "MyDefDoc.htm"}
```

`Get-IISConfigSection` está no início da maioria dos pipelines e, no exemplo específico acima, primeiro estamos recebendo a seção "system.webServer/defaultDocument" (sensível a maiúsculas e minúsculas), depois obtemos o conjunto de arquivos e, por fim, obtemos um elemento de coleção com o valor de atributo fornecido.

```
PS:>$ConfigSection = Get-IISConfigSection -SectionPath "system.applicationHost/sites"

PS:>Get-IISConfigCollection $configSection | Get-IISConfigCollectionElement -ConfigAttribute @{"Name"="Default Web Site"} | Get-IISConfigAttributeValue -AttributeName "State"
```

Este é mais um exemplo híbrido em que a seção é colocada primeiro em uma variável e, em seguida, usada no pipeline.

### Comandos simples

O número de comandos simples é muito reduzido a poucos. Os exemplos incluem Get-IISSite e Get-IISAppPool. Outras operações simples para as quais os comandos não existem podem ser executadas por meio de operações de pipeline.

```
PS:> Get-IISAppPool

Name            Status   CLR Ver  Pipeline Mode  Start Mode
----            ------   -------  -------------  ----------
DefaultAppPool  Started  v4.0     Integrated     OnDemand
```

### Get-IISServerManager

```
PS:>$sm = Get-IISServerManager

PS:>$sm.ApplicationPools["DefaultAppPool"].Recycle()
```

Como você pode ver, depois de ter acesso ao gerenciador do servidor, o céu é o limite.

### Start-IISCommitDelay/Stop-IISCommitDelay

Ao colocar suas operações entre esses comandos, você pode garantir que suas alterações sejam confirmadas ao mesmo tempo.

Esses são apenas alguns exemplos do que você pode fazer com o novo provedor. Visite o [documento Online](https://learn.microsoft.com/pt-br/powershell/module/iisadministration/ "IISAdministration") para obter a documentação completa e mais exemplos.

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
