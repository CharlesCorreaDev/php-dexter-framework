# COM e .Net (Windows)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.com.php

---

# COM e .Net (Windows)

# Introdução

COM é um acrônimo para `Component Object Model`; é uma camada orientada a
objeto (e serviços associados) sobre DCE RPC (um padrão aberto) e
define uma convenção de chamada comum que permite que código escrito em qualquer
linguagem chame e interopere com código escrito em qualquer outra linguagem
(desde que essas linguagens reconheçam o COM). O código não apenas pode ser
escrito em qualquer linguagem, mas nem precisa fazer parte do mesmo
executável; o código pode ser carregado a partir de uma DLL, ser encontrado em outro
processo rodando na mesma máquina, ou, com DCOM (COM Distribuído), ser
encontrado em outro processo em uma máquina remota, tudo sem que o código
precise saber onde um componente reside.

Existe um subconjunto do COM conhecido como Automação OLE que compreende um conjunto de
interfaces COM que permitem ligações flexíveis a objetos COM, para que possam
ser introspectados e chamados em tempo de execução sem conhecimento em tempo de compilação de
como o objeto funciona. A extensão COM do PHP utiliza interfaces de
automação OLE para permitir que sejam criados e chamados objetos compatíveis
a partir de scripts. Tecnicamente falando, isso deveria ser chamado de
"`OLE Automation Extension for PHP`" (Extensão de Automação OLE para PHP), já que nem todos os objetos COM são
compatíveis com OLE.

Agora, por que O COM seria ou deveria ser usado? COM é uma das principais formas de unir
aplicativos e componentes na plataforma Windows; usando COM
pode-se iniciar o Microsoft Word, preencher um modelo de documento e salvar o
resultado como um documento Word e enviá-lo a um visitante do site. Pode-se
também pode usar o COM para executar tarefas administrativas na rede e
configurar o IIS; estes são apenas os usos mais comuns; pode-se fazer muito
mais com o COM.

Além disso, a extensão oferece suporte à instanciação e criação
montagens .Net usando a camada de interoperabilidade COM fornecida pela
Microsoft.

- [Instalação/Configuração](com.setup.md)
  - [Dependências](com.requirements.md)
  - [Instalação](com.installation.md)
  - [Configurações de Execução](com.configuration.md)
- [Constantes predefinidas](com.constants.md)
- [Erros e tratamento de erros](com.error-handling.md)
- [Examples](com.examples.md)
  - [For Each](com.examples.foreach.md)
  - [Arrays e propriedades COM no estilo Array](com.examples.arrays.md)
- [com](class.com.md) — A classe com
  - [com::\_\_construct](com.construct.md) — Construtor da classe com
- [dotnet](class.dotnet.md) — A classe dotnet
  - [dotnet::\_\_construct](dotnet.construct.md) — Construtor da classe dotnet
- [variant](class.variant.md) — Classe variant
  - [variant::\_\_construct](variant.construct.md) — Construtor da classe variant
- [COMPersistHelper](class.compersisthelper.md) — A classe COMPersistHelper
  - [COMPersistHelper::\_\_construct](compersisthelper.construct.md) — Constrói um objeto COMPersistHelper
  - [COMPersistHelper::GetCurFileName](compersisthelper.getcurfilename.md) — Obtém o nome do arquivo atual
  - [COMPersistHelper::GetMaxStreamSize](compersisthelper.getmaxstreamsize.md) — Obtém o tamanho máximo do fluxo
  - [COMPersistHelper::InitNew](compersisthelper.initnew.md) — Inicializa o objeto no estado padrão
  - [COMPersistHelper::LoadFromFile](compersisthelper.loadfromfile.md) — Carrega objeto de um arquivo
  - [COMPersistHelper::LoadFromStream](compersisthelper.loadfromstream.md) — Carrega objeto a partir de um fluxo
  - [COMPersistHelper::SaveToFile](compersisthelper.savetofile.md) — Grava o objeto em um arquivo
  - [COMPersistHelper::SaveToStream](compersisthelper.savetostream.md) — Grava o objeto no fluxo
- [com\_exception](class.com-exception.md) — A classe com\_exception
- [com\_safearray\_proxy](class.com-safearray-proxy.md) — A classe com\_safearray\_proxy
- [Funções de COM](ref.com.md)
  - [com\_create\_guid](function.com-create-guid.md) — Gera um identificador único global (GUID)
  - [com\_event\_sink](function.com-event-sink.md) — Conecta eventos de um objeto COM a um objeto PHP
  - [com\_get\_active\_object](function.com-get-active-object.md) — Retorna um identificador para uma instância já em execução de um objeto COM
  - [com\_load\_typelib](function.com-load-typelib.md) — Carrega uma biblioteca de tipos
  - [com\_message\_pump](function.com-message-pump.md) — Processa mensagens COM, aguardando por um tempo limite
  - [com\_print\_typeinfo](function.com-print-typeinfo.md) — Mostra uma definição de classe PHP para uma interface despachável
  - [variant\_abs](function.variant-abs.md) — Retorna o valor absoluto de uma variante
  - [variant\_add](function.variant-add.md) — "Adiciona" dois valores de variante e retorna o resultado
  - [variant\_and](function.variant-and.md) — Executa uma operação AND binária entre duas variantes
  - [variant\_cast](function.variant-cast.md) — Converter uma variante em um novo objeto variante de outro tipo
  - [variant\_cat](function.variant-cat.md) — Concatena dois valores de variantes e retorna o resultado
  - [variant\_cmp](function.variant-cmp.md) — Compara duas variantes
  - [variant\_date\_from\_timestamp](function.variant-date-from-timestamp.md) — Retorna uma representação de data em variante de um timestamp Unix
  - [variant\_date\_to\_timestamp](function.variant-date-to-timestamp.md) — Converte um valor de variante de data/horário em um timestamp Unix
  - [variant\_div](function.variant-div.md) — Retorna o resultado da divisão de duas variantes
  - [variant\_eqv](function.variant-eqv.md) — Realiza uma equivalência binária entre duas variantes
  - [variant\_fix](function.variant-fix.md) — Retorna a porção inteira de uma variante
  - [variant\_get\_type](function.variant-get-type.md) — Retorna o tipo de um objeto de variante
  - [variant\_idiv](function.variant-idiv.md) — Converte variantes para inteiros e retorna o resultado da divisão deles
  - [variant\_imp](function.variant-imp.md) — Realiza uma implicação binária entre duas variantes
  - [variant\_int](function.variant-int.md) — Retorna a porção inteira de uma variante
  - [variant\_mod](function.variant-mod.md) — Divide duas variantes e retorna apenas o resto
  - [variant\_mul](function.variant-mul.md) — Multiplica os valores de duas variantes
  - [variant\_neg](function.variant-neg.md) — Realiza uma negação lógica em uma variante
  - [variant\_not](function.variant-not.md) — Realiza uma negação bit a bit em uma variante
  - [variant\_or](function.variant-or.md) — Realização uma disjunção lógica de duas variantes
  - [variant\_pow](function.variant-pow.md) — Retorna o resultado da função de potência com duas variantes
  - [variant\_round](function.variant-round.md) — Arredonda uma variante para o número de casas decimais especificado
  - [variant\_set](function.variant-set.md) — Atribui um novo valor para um objeto de variante
  - [variant\_set\_type](function.variant-set-type.md) — Converte uma variante em outro tipo "in loco"
  - [variant\_sub](function.variant-sub.md) — Subtrai o valor da variante da direita do valor da variante da esquerda
  - [variant\_xor](function.variant-xor.md) — Realiza uma exclusão lógica em duas variantes

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
