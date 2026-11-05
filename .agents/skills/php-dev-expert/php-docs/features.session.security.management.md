# Gerencimento básico de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.session.security.management.php

---

## Gerencimento básico de sessão

### Segurança da sessão

O módulo de sessão não garante que a informação armazenada
em uma sessão seja visualizada apenas pelo usuário que criou a sessão. Medidas
adicionais devem ser tomadas para proteger a confidencialidade
da sessão, dependendo do valor associado à ela.

A importância dos dados carregados na sessão precisa ser
avaliada e proteções adicionais podem ser disparadas; isso normalmente
tem um preço, como alguns inconveninentes para o usuário.
Por exemplo, para proteger os usuários de uma tática simples de engenharia social,
a opção [session.use\_only\_cookies](session.configuration.md#ini.session.use-only-cookies)
precisa ser habilitada. Neste caso, os cookies devem obrigatoriamente estar habilitados
no lado do cliente, ou as sessões não irão funcionar.

Existem várias maneiras de expor um ID de sessão existente para
terceiros. Exemplos: injeção de JavaScript, ID de sessão nas URLs,
interceptação de pacotes, acesso físico ao dispositivo, etc.
Um ID de sessão exposto possibilita que terceiros tenham acesso a todos
os recursos que estão associados a um ID específico. Primeiro, URLs que contenham
IDs de sessão. Se houver ligações para um site ou recurso externo,
a URL que contém o ID de sessão pode ser armazenada nos registros
do site externo. Segundo, um atacante mais ativo pode interceptar
o tráfego de rede. Caso não estejam criptografados, os IDs de sessão serão transmitidos
em texto puro pela rede. A solução é implementar
SSL/TLS no servidor e torná-lo obrigatório para os usuários.
HSTS deve ser usado para uma melhor segurança.

> **Nota**:
>
> Até mesmo o HTTPS não consegue proteger dados confidenciais em todos os momentos.
> Por exemplo, as vulnerabilidades "CRIME" e "Beast" podem permitir que um
> atacante leia os dados. Além disso, existem muitas redes que utilizam
> proxy HTTPS MITM com o propósito de auditoria.
> Atacantes também podem configurar um proxy semelhante.

### Gerenciamento de sessão não adaptativo

O gerenciador de sessão do PHP atualmente é adaptativo por padrão atualmente.
Os gerenciadores de sessão adaptativos possuem riscos adicionais.

Quando [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode) está habilitada
e o manipulador de armazenamento de sessão suportá-la,
um ID de sessão que não inicializado é rejeitado, e um novo é criado.
Isso protege contra ataques que forçam o usuário a usar um ID de sessão conhecido.
Atacantes podem colar links ou enviar e-mail que contém ID de sessão.
Ex.: `http://example.com/page.php?PHPSESSID=123456789`, se
[session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid) estiver
habilitado, a vítima iniciará uma sessão usando o ID de sessão fornecido
pelo atacante.
A opção [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
mitiga este risco.

**Aviso**

Um manipulador de armazenamento definido pelo usuário também pode suportar o modo de sessão estrita
implementando validação do ID de sessão. Todos os manipuladores de armazenamento definidos pelo usuário
devem implementar uma validação do ID de sessão.

O cookie de ID de sessão pode ser definido usando os atributos domain, path, httponly e
secure; e a partir do PHP 7.3, SameSite.
Existe uma certa precedência que é definida pelos navegadores.
Ao usar a precedência, o atacante pode definir um ID de sessão que
pode ser usado permanentemente. O uso de
[session.use\_only\_cookies](session.configuration.md#ini.session.use-only-cookies)
não resolverá essa questão.
[session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
mitiga este risco. Com
[session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)=On,
um ID de sessão não inicializado será recusado.

> **Nota**:
>
> Apesar da opção
> [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
> diminuir o risco do gerenciamento de sessão adaptativo, um atacante pode forçar
> os usuários a usarem um ID de sessão inicializado e que foi criado pelo atacante.
> Por exemplo, com injeção de JavaScript.
> Esse tipo de ataque pode ser evitado seguindo as recomendações deste manual.
>
> Ao seguir este manual, desenvolvedores devem habilitar a opção
> [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode),
> e também usa um gerenciamento de sessão baseado em timestamp e gerar novamente um ID de sessão usando
> [session\_regenerate\_id()](function.session-regenerate-id.md) com os procedimentos recomendados.
> Se tudo isso for seguido, o ID de sessão gerado por um atacante
> eventualmente será deletado.
>
> Quando ocorre um acesso à uma sessão obsoleta, todos os dados da sessão
> ativa devem ser salvos. Isso será útil para
> uma investigação mais tarde. Será feito logout forçado do usuário
> de todas as sessões, ou seja, o usuário será obrigado a se autenticar novamente.
> Desta forma se evita que atacantes abusem de sessões roubadas.

**Aviso**

O acesso aos dados de sessões obsoletas nem sempre é por causa de ataques.
Redes instáveis e/ou remoção imediata de sessão ativa
farão com que usuários legítimos usem sessões obsoletas.

A partir do PHP 7.1.0, [session\_create\_id()](function.session-create-id.md) foi adicionado.
Essa função poderia ser usada para adicionar o ID do usuário como prefixo no ID de sessão para
acessar a sessão ativa do usuário de forma eficiente. Habilitar
[session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
é muito importante nesta configuração. Caso contrário, usuários mal intencionados podem definir
IDs de sessão maliciosos para outros usuários.

> **Nota**:
>
> Usuários de versões anteriores ao PHP 7.1.0 *devem* usar
> CSPRNG, como por exemplo /dev/urandom ou
> [random\_bytes()](function.random-bytes.md), e funções de hash para gerar um
> novo ID de sessão. [session\_create\_id()](function.session-create-id.md) possui
> detecção de colisão e gera o ID de sessão de acordo com as
> configurações INI de sessão.
> O uso de [session\_create\_id()](function.session-create-id.md) é preferível.

### Renovação do ID de sessão

[session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
é uma boa prevenção, mas não é o suficiente. Desenvolvedores devem usar
[session\_regenerate\_id()](function.session-regenerate-id.md) para a segurança da sessão.

A renovação do ID de sessão reduz o risco de roubo do ID de sessão, sendo assim,
[session\_regenerate\_id()](function.session-regenerate-id.md) deve ser chamada periodicamente.
Por exemplo, a renovação do ID de sessão a cada 15 minutos para a segurança de conteúdos sensíveis.
Mesmo se o ID de sessão for roubado, tanto a sessão do usuário legítimo
quanto a do atacante terão expirados.
Ou seja, o acesso do usuário ou do atacante
irá gerar erro de acesso à sessão obsoleta.

O ID de sessão *deve* ser renovado quando o privilégios do usuário
são elevados, por exemplo após o usuário se autenticar.
[session\_regenerate\_id()](function.session-regenerate-id.md) deve ser chamado antes de
salvar as informações de autenticação em [$\_SESSION](reserved.variables.session.md).
([session\_regenerate\_id()](function.session-regenerate-id.md) salva os dados da sessão
atual automaticamente com o intuito de salvar o timestamp/etc na sessão atual.)
Assegure-se de que apenas a nova sessão contenha flag autenticada.

Desenvolvedores *não devem* depender da expiração do ID de sessão proveniente de
[session.gc\_maxlifetime](session.configuration.md#ini.session.gc-maxlifetime).
Atacantes podem acessar o ID de sessão da vítima periodicamente para impedir que ele
expire e para poder continuar explorando o ID, inclusive as sessões autenticadas.

Ao invés disso, desenvolvedores devem implementar um gerenciamento de sessão baseada em timestamp.

**Aviso**

Embora o gerenciador de sessão possa gerenciar o timestamp de forma transparente,
essa funcionalidade não está implementada. Dados de sessões antigas devem ser mantidos até a execução do
GC (coletor de lixo). Ao mesmo tempo, desenvolvedores devem assegurar-se de remover dados de sessões
obsoletas. Porém, os desenvolvedores não devem remover dados de sessões ativas imediatamente.
Isto é, `session_regenerate_id(true);`
e [session\_destroy()](function.session-destroy.md) nunca devem ser chamados juntos para uma sessão ativa.
Isso pode soar contraditório, mas é um requisito obrigatório.

[session\_regenerate\_id()](function.session-regenerate-id.md) *não*
apaga sessão antiga por padrão.
Uma sessão obsoleta e autenticada pode estar disponível para uso.
Os desenvolvedores devem impedir que sessões desatualizadas sejam utilizadas por qualquer pessoa.
Eles devem impedir acesso acesso aos dados de sessões obsoletas por conta própria utilizando timestamps.

**Aviso**

A remoção repentina de sessão ativa produz efeitos colaterais indesejados.
A sessão pode desaparecer quando houver conexões concorrentes
em uma aplicação web e/ou a rede estiver instável.

Possíveis acessos maliciosos também não podem ser detectados com a remoção imediata de sessões ativas.

Ao invés de remover a sessão antiga imediatamente,
deve ser configurado, na [$\_SESSION](reserved.variables.session.md), um tempo curto (timestamp) para a expiração
e proibir acesso aos dados da sessão (essa implementação é por contra própria).

O acesso aos dados de sessões antigas não deve ser bloqueado imediatamente depois de executar
[session\_regenerate\_id()](function.session-regenerate-id.md). O acesso deve ser bloqueado
um pouco depois, como por exemplo, alguns segundos depois para redes estáveis, como redes cabeadas,
e alguns minutos depois para redes instáveis como celulares ou sem Wi-Fi.

Se um usuário tentar acessar uma sessão obsoleta (que já tenha expirado), o acesso deve ser proibido.
É recomendável que seja removido o status de autenticação de todas as sessões do usuário,
porque é provável que seja um ataque.

O uso adequado de [session.use\_only\_cookies](session.configuration.md#ini.session.use-only-cookies)
e [session\_regenerate\_id()](function.session-regenerate-id.md) poderia causar um ataque DoS pessoal
por causa de cookies impossíveis de serem removidos e que foram configurados por atacantes. Quando isso acontecer,
o desenvolvedor pode solicitar aos usuários que removam os cookies e avisá-los que podem existir
problemas de segurança. Atacantes podem configurar cookies maliciosos via aplicações web vulneráveis,
extensões maliciosas para navegadores, dispositivos comprometidos fisicamente, etc.

**Aviso**

Não interprete de forma equivocada o risco de DoS.
[session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)=On
é obrigatório para a segurança geral do ID de sessão! É recomendável que todos os sites
habilitem [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode).

DoS somente pode acontecer quando a conta está sob ataque. Uma vulnerabilidade de injeção
de JavaScript na aplicação representa a causa mais comum.

### Remoção dos dados de sessão

Os dados de sessões obsoletas devem ser inacessíveis e removidos.
O módulo de sessão atual não manipula isso muito bem.

É melhor remover os dados de sessões obsoletas o mais cedo possível.
Ainda assim, sessões ativas não devem ser removidas imediatamente.
Para preencher esses requisitos, o gerenciamento dos dados de sessões baseadas em timestamp
deve ser implementado pelo próprio desenvolvedor.

Configure e gerencie um timestamp de expiração na $\_SESSION.
Bloqueie os acessos aos dados de sessões desatualizadas.
Quando um acesso aos dados de uma sessão obsoleta for detectado,
é aconselhável remover todos os status de autenticação das sessões dos usuários
e forçá-los a refazer a autenticação. O acesso aos dados de uma sessão obsoleta pode ser
um ataque. Para fazer isso, deve ser mantido um registro das sessões ativas por usuário.

> **Nota**:
>
> O acesso à uma sessão obsoleta pode ocorrer por causa de redes instáveis e/ou
> acessos concorrentes ao website. O servidor tenta definir um novo ID de sessão
> via cookie, mas o pacote que define o cookie (Set-Cookie) pode não ter chegado ao cliente por
> perda de conexão. Uma conexão pode gerar um novo ID de sessão executando
> [session\_regenerate\_id()](function.session-regenerate-id.md), mas uma outra conexão
> concorrente pode não ter pego ainda o novo ID de sessão.
> Além disso, o acesso aos dados da sessão obsoleta deve ser bloqueado algum tempo depois.
> Ou seja, o gerenciamento de sessão baseada em timestamp é necessário.

Em poucas palavras, dados de sessão não devem ser destruídos com
[session\_regenerate\_id()](function.session-regenerate-id.md) ou [session\_destroy()](function.session-destroy.md),
mas timestamps dem ser utilizados para controlar o acesso aos dados da sessão.
Deixe que [session\_gc()](function.session-gc.md) remova os dados obsoletos do armazenamento de dados da sessão.

### Sessão e Travamento dos dados

Os dados de sessão são travados para evitar condição de corrida (data race) por padrão.
A trava é necessária para manter os dados consistentes entre as requisições.

Contudo, o travamento pode ser abusado por um atacante para realizar um ataque DoS.
Para diminuir os riscos de DoS por travamento de sessão, reduza o travamento.
Use sessões somente leitura quando a alteração dos dados não for necessária.
Use a opção 'read\_and\_close' com [session\_start()](function.session-start.md).
`session_start(['read_and_close'=>1]);`
Feche a sessão assim que você terminar de alterar $\_SESSION,
usando [session\_commit()](function.session-commit.md).

O módulo de sessão atual *não*
detecta modificações em $\_SESSION enquanto a sessão está inativa.
É responsabilidade do desenvolvedor não modificar a variável $\_SESSION quando
a sessão está inativa.

### Sessões ativas

Os desenvolvedores devem manter um registro de sessões ativas por usuário.
E notificar o usuário sobre quantas sessões ativas, de qual IP (e área),
há quanto tempo a sessão está ativa, etc.
O PHP não mantém um registro dessas informações. É o desenvolvedor quem deve manter.

Existem inúmeras formas de implementação.
Pode ser configurado um banco de dados que mantém um registro
dos dados necessários e armazena as informações nele.
Como os dados de sessão são removidos pelo coletor de lixo, o desenvolvedor deve cuidar dos dados
removidos para manter a consistência do banco de dados das sessões ativas.

Uma das implementações mais simples é prefixar o ID de sessão com o ID do usuário e
armazenar as informações necessárias na $\_SESSION.
Muitos bancos de dados têm bom desempenho para selecionar o prefixo de uma string.
Desemvolvedores PODEM usar [session\_regenerate\_id()](function.session-regenerate-id.md) e
[session\_create\_id()](function.session-create-id.md) para isso.

**Aviso**

Nunca utilize informações confidenciais como prefixo.
Se o ID do usuário for confidencial, considere a utilização
de [hash\_hmac()](function.hash-hmac.md).

**Aviso**

Habilitar [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
é obrigatório para esse setup. Certifique-se de que essa opção esteja habilitada, caso contrário
o banco de dados de sessões ativas pode ser comprometido.

O gerenciamento de sessão baseada em timestamp é necessário para detectar acesso em sessões
obsoletas. Quando um acesso à uma sessão obsoleta é detectado, as flags de autenticação devem ser
removidas de todas as sessões ativas para esse usuário. Isso evita que atacantes
explorem sessões roubadas.

### Sessão e login automático

Desenvolvedores não devem utilizar ID de sessão de longa vida para o login automático, pois isso
aumenta o risco de roubo da sessão. O login automático deve ser implementado
pelo desenvolvedor.

Use um hash seguro de uso único como chave para o login automático usando
[setcookie()](function.setcookie.md). Use um hash seguro e mais forte que SHA-2,
como por exemplo, SHA-256 ou maior com dados randômicos provenientes de [random\_bytes()](function.random-bytes.md)
ou /dev/urandom.

Se o usuário não estiver autenticado, verifique se a chave de login automático é
válida ou não. Se a chave é válida, autentique o usuário e configure uma nova chave
"one-time hash" segura. Deve ser possível usar a chave de login automático apenas uma vez,
ou seja, nunca reutilize uma chave de login automático; ao invés disso, sempre gere uma nova chave.

A chave de login automático é uma chave de autenticação de longa vida, portanto essa chave deve estar
o mais protegida possível. Use os atributos de cookie path/httponly/secure
para protegê-la. Ou seja, nunca transmita a chave de login automático
a não ser que seja realmente necessário.

Desenvolvedores devem implementar funcionalidades que desabilitam login automático e removem
cookies de login automático desnecessários.

### Ataques CSRF (Cross-Site Request Forgeries)

Sessão e autenticação não protegem contra ataques CSRF. Os desenvolvedores
devem implementar proteções contra CSRF por conta própria.

[output\_add\_rewrite\_var()](function.output-add-rewrite-var.md) pode ser usada para proteção contra
CSRF. Visite o manual para mais detalhes.

> **Nota**:
>
> Versões do PHP anteriores à 7.2.0 utilizam o mesmo buffer de saída e as mesmas configurações INI
> que o recurso trans sid. Portanto, o uso de [output\_add\_rewrite\_var()](function.output-add-rewrite-var.md)
> em versões do PHP anteriores à 7.2.0 não é recomendado.

A maioria dos frameworks para aplicações web tem suporte à proteção CSRF. Visite
o manual do framework de sua aplicação para mais detalhes.

A partir do PHP 7.3, o atributo SameSite para cookies de sessão pode ser utilizado.
É uma medida adicional que pode mitigar vulnerabilidades CSRF.

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
