# Serialização de Objetos - Objetos em sessões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.serialization.php

---

## Serialização de Objetos - Objetos em sessões

A função [serialize()](function.serialize.md) retorna uma string contendo uma
representação em fluxo de bytes de qualquer valor que pode ser armazenado pelo
PHP. A função [unserialize()](function.unserialize.md) pode utilizar essa string para
recriar os valores originais da variável. Utilizar a serialização para
salvar um objeto, salvará todas as variáveis de um objeto. Os
métodos de um objeto não são salvos, apenas o nome da
classe.

Para desserializar um objeto com a função [unserialize()](function.unserialize.md), a
classe desse objeto precisa estar definida. Isto é, se possuir um objeto
da classe A e serializá-lo, será obtida
uma string que referencia a classe A e contém todos os valores de variáveis
contidas nele. Se for necessário desserializar
um objeto da classe A em outro arquivo, a
definição da classe A deve estar presente neste arquivo.
Isso pode ser feito, por exemplo, armazenando a definição da classe A
em um arquivo, e incluí-lo, fazendo uso da função
[spl\_autoload\_register()](function.spl-autoload-register.md).

```
<?php
// A.php:

  class A {
      public $one = 1;

      public function show_one() {
          echo $this->one;
      }
  }

// page1.php:

  include "A.php";

  $a = new A;
  $s = serialize($a);
  // armazena $s em algum lugar onde page2.php possa encontrar.
  file_put_contents('caixa', $s);

// page2.php:

  // isto é necessário para que a desserialização funcione adequadamente.
  include "A.php";

  $s = file_get_contents('caixa');
  $a = unserialize($s);

  // agora usa a função show_one() do objeto $a.
  $a->show_one();
?>
```

É fortemente recomendado que, quando uma aplicação serializa seus objetos, para
uso posterior na aplicação, esta inclua a definição da classe
do objeto em questão ao longo de toda aplicação. Não fazer isso pode resultar em
objetos serem desserializados sem a definição da classe, que acarretará no
PHP entregar um objeto da classe **\_\_PHP\_Incomplete\_Class\_Name**,
que não possui métodos, tornando o objeto inútil.

Então, se, no exemplo anterior, $a se tornou parte da sessão
adicionando uma nova chave no array superglobal [$\_SESSION](reserved.variables.session.md), você deve incluir o
arquivo `A.php` em todas suas páginas, e não somente em page1.php
e page2.php.

Além dos conselhos acima, note que pode-se capturar os eventos de serialização
e desserialização de um objeto usando os métodos
[\_\_sleep()](language.oop5.magic.md#object.sleep) e
[\_\_wakeup()](language.oop5.magic.md#object.wakeup). Usar
o método [\_\_sleep()](language.oop5.magic.md#object.sleep) também lhe permitirá
serializar somente subconjuntos de propriedades de um objeto.

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
