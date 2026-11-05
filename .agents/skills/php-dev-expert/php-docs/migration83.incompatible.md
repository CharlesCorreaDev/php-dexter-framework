# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration83.incompatible.php

---

## Alterações incompatíveis com versões anteriores

### Núcleo do PHP

#### Programas que estavam muito próximos de estourar a pilha de chamadas.

Programas que estavam muito próximos de esgotar a pilha de chamadas agora podem lançar um
[Error](class.error.md) ao usar mais do que
!-- link linkend="zend.max\_allowed\_stack\_size-zend.reserved\_stack\_size" -->zend.max\_allowed\_stack\_size-zend.reserved\_stack\_size bytes de pilha
(fiber.stack\_size-zend.reserved\_stack\_size para fibers).

#### Executando proc\_get\_status() várias vezes

Executar [proc\_get\_status()](function.proc-get-status.md) várias vezes agora sempre
retornará o valor correto em sistemas POSIX. Anteriormente, apenas a primeira chamada
da função retornava o valor correto. Executar
[proc\_close()](function.proc-close.md) após [proc\_get\_status()](function.proc-get-status.md)
agora também retornará o código de saída correto. Anteriormente, isso retornaria
`-1`.
Internamente, isso funciona armazenando em cache o resultado em sistemas POSIX.
Se for necessário o comportamento anterior, é possível verificar a chave
`"cached"` no array retornado por
[proc\_get\_status()](function.proc-get-status.md) para verificar se o resultado foi armazenado em cache.

#### Temporizadores Máximos de Execução do Zend

Os Temporizadores Máximos de Execução do Zend agora estão habilitados por padrão para compilações ZTS no
Linux.

#### Usos de traits com propriedades estáticas

O uso de traits com propriedades estáticas agora irá redeclarar as propriedades
estáticas herdadas da classe pai. Isso criará um armazenamento de propriedade estática
separado para a classe atual. Isso é análogo a adicionar a
propriedade estática diretamente à classe sem o uso de traits.

#### Atribuir um índice negativo a um array vazio

Atribuir um índice negativo $n a um array vazio agora garantirá que o
próximo índice seja `$n+1`, em vez de `0`.

#### Verificação de consistência na visibilidade de constantes de classe

A variação na visibilidade de constantes de classe agora é verificada corretamente
quando herdada de interfaces.

#### Entradas WeakMap cuja chave mapeia para si mesma

As entradas [WeakMap](class.weakmap.md) cuja chave mapeia para si mesma (possivelmente
de forma transitiva) agora podem ser removidas durante a coleta de ciclos se a chave não
for alcançável, exceto por meio da iteração sobre o WeakMap (a alcançabilidade por iteração é
considerada fraca).
Anteriormente, tais entradas nunca seriam removidas automaticamente.

### Date

A extensão DateTime introduziu exceções e erros específicos da extensão Date sob
as hierarquias [DateError](class.dateerror.md) e
[DateException](class.dateexception.md), em vez de avisos e
exceções genéricas. Isso melhora o tratamento de erros, embora exija que se
verifiquem erros e exceções.

### DOM

Chamar [DOMChildNode::after()](domchildnode.after.md),
[DOMChildNode::before()](domchildnode.before.md),
[DOMChildNode::replaceWith()](domchildnode.replacewith.md)
em um nó que não tem pai agora não faz nada (no-op) em vez de gerar
uma exceção de hierarquia, conforme exigido pela especificação DOM.

Usar os métodos [DOMParentNode](class.domparentnode.md)
e [DOMChildNode](class.domchildnode.md) sem um documento agora funciona
em vez de lançar uma exceção **`DOM_HIERARCHY_REQUEST_ERR`**
[DOMException](class.domexception.md).
Isso está de acordo com o comportamento exigido pela especificação DOM.

Chamar [DOMDocument::createAttributeNS()](domdocument.createattributens.md) sem especificar
um prefixo criaria incorretamente um namespace padrão, colocando o elemento
dentro do namespace em vez do atributo. Esse erro foi corrigido.

Anteriormente, [DOMDocument::createAttributeNS()](domdocument.createattributens.md)
lançaria incorretamente uma exceção **`DOM_NAMESPACE_ERRNAMESPACE_ERR`**
[DOMException](class.domexception.md) quando o prefixo já estivesse sendo usado para
outro URI. Agora, ele escolhe corretamente um prefixo diferente quando há conflito
de nomes de prefixo.

Foram adicionados novos métodos e propriedades a algumas classes DOM.
Se uma classe definida pelo usuário herda dessas classes e declara um método ou
propriedade com o mesmo nome, as declarações devem ser compatíveis. Caso contrário,
ocorrerá um erro de compilação típico relacionado a declarações incompatíveis.
Consulte a [lista de novas funcionalidades](migration83.new-features.md#migration83.new-features.dom)
e [novas funções](migration83.new-functions.md#migration83.new-functions.dom) para
obter uma lista dos métodos e propriedades recém-implementados.

### FFI

As funções C que têm um tipo de retorno [void](language.types.void.md) agora retornam **`null`** em vez de
retornar o seguinte objeto `object(FFI\CData:void) { }`.

### Opcache

A diretiva INI [opcache.consistency\_checks](opcache.configuration.md#ini.opcache.consistency-checks)
foi removida. Essa funcionalidade estava quebrada com o tracing JIT,
bem como com o inheritance cache, e foi desativada sem a possibilidade de ser habilitada
desde o PHP 8.1.18 e o PHP 8.2.5.
Tanto o tracing JIT quanto o inheritance cache podem modificar a memória compartilhada (shm)
depois que o script foi persistido, invalidando seu checksum. A tentativa de correção ignorou
os ponteiros modificáveis, mas foi rejeitada devido à complexidade. Por esse motivo,
foi decidido remover a funcionalidade em vez de mantê-la.

### Phar

O tipo das constantes de classe da classe [Phar](class.phar.md) agora está declarado.

### Standard

A função [range()](function.range.md) sofreu várias mudanças:

- Agora é lançado um [TypeError](class.typeerror.md) ao passar [object](language.types.object.md)s,
  [resource](language.types.resource.md)s ou [array](language.types.array.md)s como entradas de limite.
- Agora é lançado um [ValueError](class.valueerror.md) mais descritivo
  ao passar `0` para `step`.
- Agora é lançado um [ValueError](class.valueerror.md) ao usar um
  `step` negativo para intervalos crescentes.
- Se `step` for um número em ponto flutuante
  que pode ser interpretado como um número inteiro, ele agora será tratado como tal.
- Agora, um [ValueError](class.valueerror.md) é lançado se qualquer
  argumento for infinito ou NAN.
- Agora, é gerado um **`E_WARNING`** se
  `start` ou `end` for uma
  string vazia. O valor ainda é convertido para o valor `0`.
- Agora, é gerado um **`E_WARNING`** se
  `start` ou `end` tiver mais de
  um byte, desde que seja uma string não numérica.
- Agora, é gerado um **`E_WARNING`** se
  `start` ou `end` for convertido para um
  inteiro porque a outra entrada de limite é um número
  (por exemplo, `range(5, 'z');`).
- Agora, é gerado um **`E_WARNING`** se
  `step` for um número em ponto flutuante ao tentar gerar
  um intervalo de caracteres, exceto se ambas as entradas de limite forem strings numéricas (por exemplo,
  `range('5', '9', 0.5);` não gera um aviso).
- [range()](function.range.md) agora gera uma lista de caracteres se uma das
  entradas de limite for um dígito em forma de string, em vez de converter a outra entrada
  para um número inteiro (por exemplo, `range('9', 'A');`).

```
<?php
range('9', 'A'); // ["9", ":", ";", "<", "=", ">", "?", "@", "A"], a partir do PHP 8.3.0
range('9', 'A'); // [9, 8, 7, 6, 5, 4, 3, 2, 1, 0], antes do PHP 8.3.0
?>
```

[number\_format()](function.number-format.md) agora lida com valores negativos de
`decimals` arredondando
`num` para `abs($decimals)` dígitos antes do
separador decimal. Anteriormente, valores negativos de `decimals`
eram ignorados.

A verificação de erros das flags da função [file()](function.file.md) agora identifica todas as flags inválidas.
Notavelmente, **`FILE_APPEND`** era anteriormente aceito silenciosamente.

### SNMP

O tipo das constantes de classe da classe [SNMP](class.snmp.md) agora está declarado.

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
