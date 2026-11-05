# Vinculando a Endereços e Portas - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/bind.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md)

# Vinculando a Endereços e Portas

Configurando o Servidor HTTP Apache para escutar em endereços e portas específicas.

- ![](./images/down.gif) [Visão Geral](#overview)
- ![](./images/down.gif) [Alterando a configuração de Listen no reinício](#reload)
- ![](./images/down.gif) [Considerações Especiais sobre IPv6](#ipv6)
- ![](./images/down.gif) [Especificando o protocolo com Listen](#protocol)
- ![](./images/down.gif) [Como Isto Funciona com Hosts Virtuais](#virtualhost)

### Veja também

- [Hosts Virtuais](vhosts.md)
- [Problemas com DNS](dns-caveats.md)

[![top](./images/up.gif)](#page-header)

## Visão Geral [¶](#overview "Link permanente")

| Módulos Relacionados | Diretrizes Relacionadas |
| --- | --- |
| - `core` - `mpm_common` | - `<VirtualHost>` - `Listen` |

Quando o httpd inicia, ele se vincula a algumas portas e endereços na
máquina local e aguarda por requisições entrantes. Por padrão,
ele monitora todos os endereços na máquina. No entanto, pode ser necessário
monitoramento em portas específicas ou somente em
endereços selecionados, ou uma combinação dos dois. Isto é muitas vezes combinado com
o recurso de [Host Virtual](vhosts.md), que determina como o
`httpd` responde a endereços, nomes de hosts e portas
diferentes.

A diretiva `Listen`
informa ao servidor que ele deve aceitar
requisições entrantes apenas na(s) porta(s) especificada(s) ou
em combinações de endereço e porta. Se apenas um número de porta for
especificado na diretiva `Listen`,
o servidor monitora a porta informada em todas as interfaces.
Se um endereço IP é informado junto com uma porta, o servidor irá monitorar
na porta e na interface especificadas. Múltiplas diretivas `Listen` podem ser usadas para
especificar vários endereços e portas para monitoramento. O
servidor responderá a requisições de quaisquer dos endereços e
portas listados.

Por exemplo, para que o servidor aceite conexões tanto na
porta 80 quanto na 8000, em todas as interfaces, use:

```
Listen 80
Listen 8000
```

Para que o servidor aceite conexões na porta 80 para uma interface
e na porta 8000 para outra, use:

```
Listen 192.0.2.1:80
Listen 192.0.2.5:8000
```

Endereços IPv6 precisam ser envolvidos por colchetes, como no
exemplo a seguir:

```
Listen [2001:db8::a00:20ff:fea7:ccea]:80
```

A sobreposição de diretivas `Listen` resultará em um
erro fatal que irá impedir o servidor de iniciar.

`(48)Address already in use: make_sock: could not bind to address [::]:80`

Consulte esta [discussão
na wiki](https://cwiki.apache.org/confluence/display/httpd/CouldNotBindToAddress) para mais dicas de soluções de problemas.

[![top](./images/up.gif)](#page-header)

## Alterando a configuração de Listen no reinício [¶](#reload "Link permanente")

Quando o httpd é reiniciado, uma consideração especial precisa ser feita para
alterações a diretivas `Listen`. Durante um reinício, o httpd mantém as portas
vinculadas (como na configuração original) para evitar a geração de erros
"Connection refused" (conexão recusada) para quaisquer novas tentativas de conexão
ao servidor. Se as alterações são feitas no conjunto de diretivas `Listen`
que conflitam com a configuração antiga, a configuração irá falhar
e o servidor irá terminar.

Por exemplo, alterando da configuração:

```
Listen 127.0.0.1:80
```

para a configuração a seguir pode falhar, porque a vinculação da porta 80 para
todos os endereços conflita com a vinculação da porta 80 somente para
127.0.0.1.

```
Listen 80
```

Para que tal configuração tenha efeito, é necessário
parar e depois iniciar o servidor.

[![top](./images/up.gif)](#page-header)

## Considerações Especiais sobre IPv6 [¶](#ipv6 "Link permanente")

Um número crescente de plataformas implementa IPv6 e o
[APR](glossary.md#apr "ver glossário") suporta IPv6 na maioria delas,
permitindo que o httpd aloque soquetes IPv6 e manipule requisições enviadas
através de IPv6.

Um fator complicador para administradores de httpd é definir se
um soquete IPv6 pode lidar tanto com conexões IPv4 quanto com
IPv6. Lidar com conexões IPv4 com soquete IPv6 usa
endereços IPv6 mapeados para IPv4, o que é permitido por padrão na maioria
das plataformas mas é proibido por padrão no FreeBSD, NetBSD e
OpenBSD, para alinhamento com a política de sistema dessas
plataformas. Em sistemas onde isso é proibido por padrão, um
parâmetro especial do programa `configure` pode alterar este
comportamento para o httpd.

Por outro lado, em algumas plataformas como Linux e Tru64, a
**única** forma de lidar tanto com IPv6 quanto com IPv4 é usar
endereços mapeados. Se o `httpd` tiver que lidar com conexões IPv4 e IPv6
com um mínimo de soquetes, que requerem o uso de endereços IPv6 mapeados
para IPv4, especifique a opção `--enable-v4-mapped` do programa `configure`.

`--enable-v4-mapped` é o padrão para todas as plataformas exceto
para FreeBSD, NetBSD e OpenBSD, portanto esta é provavelmente a forma como o seu httpd foi
compilado.

Se o httpd tiver que lidar somente com conexões IPv4, independente do que
a sua plataforma e APR irão suportar, especifique um endereço IPv4 em todas as
diretivas `Listen`, como nos
exemplos a seguir:

```
Listen 0.0.0.0:80
Listen 192.0.2.1:80
```

Se a sua plataforma suporta e a intenção for lidar com conexões IPv4 e
IPv6 em soquetes separados (ou seja, desabilitar endereços mapeados
para IPv4), especifique a opção `--disable-v4-mapped` do programa `configure`. `--disable-v4-mapped` é o padrão
no FreeBSD, NetBSD, e OpenBSD.

[![top](./images/up.gif)](#page-header)

## Especificando o protocolo com Listen [¶](#protocol "Link permanente")

O segundo argumento opcional protocol de
`Listen`
não é requerido para a maioria das
configurações. Se não especificado, `https` é o padrão para
a porta 443 e `http` é o padrão para todas as outras portas. O
protocolo é usado para determinar que módulo deve lidar com uma requisição e
para aplicar otimizações de protocolo específicas com a diretiva
`AcceptFilter`.

Somente é necessário definir o protocolo se o servidor estiver monitorando
portas não padrão. Por exemplo, para servir um site `https` na porta 8443:

```
Listen 192.170.2.1:8443 https
```

[![top](./images/up.gif)](#page-header)

## Como Isto Funciona com Hosts Virtuais [¶](#virtualhost "Link permanente")

A diretiva `Listen` não implementa
Hosts Virtuais - ela apenas informa ao
servidor principal quais endereços e portas devem ser monitorados. Se nenhuma
diretiva `<VirtualHost>`
for usada, o servidor se comportará
da mesma forma para todas as requisições aceitas. Entretanto,
`<VirtualHost>`
pode ser usada para especificar um comportamento diferente
para um ou mais dos enredeços e portas. Para implementar um
Host Virtual, o servidor primeiro precisa ser informado para monitorar o
endereço e a porta que serão usados. Depois, uma
seção `<VirtualHost>`
deve ser criada para o endereço e a porta especificados para definir o
comportamento desse host virtual. Observe que se a seção
`<VirtualHost>`
estiver definida para um endereço e uma porta que o
servidor não estiver monitorando, o host virutal não poderá ser acessado.

Línguas Disponíveis: [de](https://httpd.apache.org/docs/2.4/pt-br/de/bind.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/bind.html "English") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/bind.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/bind.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/bind.html "Korean") |
[pt-br](pt-br__bind.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/bind.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
